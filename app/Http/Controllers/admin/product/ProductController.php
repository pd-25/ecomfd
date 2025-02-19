<?php

namespace App\Http\Controllers\admin\product;

use App\Core\category\CategoryInterface;
use App\Core\products\ProductInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\ProductImage;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public $productInterface, $categoryInterface;
    public function __construct(ProductInterface $productInterface, CategoryInterface $categoryInterface)
    {
        $this->productInterface = $productInterface;
        $this->categoryInterface = $categoryInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.products.index', [
            "products" => $this->productInterface->fetchAllProducts("DESC")
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create', [
            'categoriesList' => $this->categoryInterface->fetchAllCategories("DESC")
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'category_id' => 'required|exists:categories,id',
                'type' => 'required|string',
                'description' => 'required|string',
                'variant_name.*' => 'required|string',
                'measurement.*' => 'required|numeric',
                'measurement_param.*' => 'required|string',
                'price.*' => 'required|numeric',
                'quantity.*' => 'required|integer',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            

            $variations = [];
            foreach ($request->variant_name as $index => $variantName) {
                $variations[] = [
                    'variant_name' => $variantName,
                    'measurement' => $request->measurement[$index],
                    'measurement_param' => $request->measurement_param[$index],
                    'price' => $request->price[$index],
                    'quantity' => $request->quantity[$index],
                    'is_show' => $index === 0 ? 1 : 0,
                ];
            }

            $productData = $request->only("name", "category_id", "type", "description");
            $productData["quantity_in_stock"] = array_sum(array_column($variations, 'quantity'));

            $productImages = $request->only("images");


            $storeProduct = $this->productInterface->storeProduct($productData, $variations, $productImages);
            // dd($storeProduct);
            if ($storeProduct) {
                return redirect()->route('product-mamages.index')->with('msg', 'Product created successfully!');
            } else {
                return back()->with('msg', 'Some error occur!');
            }
        } catch (\Throwable $th) {
            Log::debug('ErrorFile-', [$th->getFile()]);
            Log::debug('ErrorMsg-', [$th->getMessage()]);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $product = $this->productInterface->fetchProductBySlug($slug);
        if (!$product) {
            return redirect()->route('product-mamages.index')->with('error', 'Product not found');
        }
    
        return view('admin.products.edit', [
            'product' => $product,
            'categoriesList' => $this->categoryInterface->fetchAllCategories("DESC"),
        ]);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'category_id' => 'required|exists:categories,id',
                'type' => 'required|string',
                'description' => 'required|string',
                'variant_name.*' => 'required|string',
                'measurement.*' => 'required|numeric',
                'measurement_param.*' => 'required|string',
                'price.*' => 'required|numeric',
                'quantity.*' => 'required|integer',
                //'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            //dd($request->all());
            // Prepare variations
            $variations = [];
            foreach ($request->variant_name as $index => $variantName) {
                $variations[] = [
                    'variant_name' => $variantName,
                    'measurement' => $request->measurement[$index],
                    'measurement_param' => $request->measurement_param[$index],
                    'price' => $request->price[$index],
                    'quantity' => $request->quantity[$index],
                ];
            }
    
            // Prepare main product data
            $productData = $request->only("name", "category_id", "type", "description");
            $productData["quantity_in_stock"] = array_sum(array_column($variations, 'quantity'));
    
            // Prepare images if any new images are uploaded
            $productImages = $request->only("images");
    
            // Call the update method in the interface
            $updateProduct = $this->productInterface->updateProduct($id, $productData, $variations, $productImages);
    
            if ($updateProduct) {
                return redirect()->route('product-mamages.index')->with('msg', 'Product updated successfully!');
            } else {
                return back()->with('msg', 'An error occurred while updating the product');
            }
        } catch (\Throwable $th) {
            Log::debug('ErrorFile-', [$th->getFile()]);
            Log::debug('ErrorMsg-', [$th->getMessage()]);
            return back()->with('error', 'An error occurred. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $deleted = $this->productInterface->deleteProductById($id);

        if ($deleted) {
            return redirect()->route('product-mamages.index')->with('msg', 'Product deleted successfully.');
        } else {
            return redirect()->route('product-mamages.index')->with('msg', 'Failed to delete the product.');
        }
    }

    public function setPrimaryImages(Request $request)
    {
        // $data = $request->all();
        $data = $request->all();
        $jsonString = key($data);
        $decodedData = json_decode($jsonString, true); 
        $productImage = ProductImage::where('product_id',$decodedData['product_id'])->get();
        foreach ($productImage as $key => $value) {
            if($value->id == $decodedData['id'])
            {
                $value->is_primary = 1;
            }else{
                $value->is_primary = 0;
            }
            $value->save();
        }
        return back()->with('msg', 'Product images deleted successfully.');
    }

    public function setImagesDelete($id){
        $productImage = ProductImage::find($id);
        $productImage->delete();
        return back()->with('msg', 'Product images deleted successfully.');
    }

    public function addImages(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'product_id' => 'required|integer',
        ]);
          
        if ($request->file('image')) {
            $db_image = time() . rand(0000, 9999) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs("ProductImages", $db_image, 'public');
        }
        ProductImage::create([
            "product_id" => $request->product_id,
            "image_path" => "ProductImages/" . $db_image,
            "is_primary" => 0
        ]);

        return response()->json(['success' => "Images added successfully"], 200);
    }
}