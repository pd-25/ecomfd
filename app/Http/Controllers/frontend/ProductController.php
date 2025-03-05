<?php

namespace App\Http\Controllers\frontend;

use App\Core\products\ProductInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public $productInterface;

    public function __construct(ProductInterface $productInterface)
    {
        $this->productInterface = $productInterface;
    }

    public function singleProduct($slug)
    {
        $realtes = $this->productInterface->fetchAllProducts("Rand");
        // dd($realtes);

        return view('frontend.singleproduct', [
            'singleProduct' => $this->productInterface->fetchsingleProduct($slug),
            'relatedProducts' => $realtes,
        ]);
    }

    public function products()
    {
        // $allProducts = $this->productInterface->fetchAllProducts("DESC");
        // dd($allProducts);
        return view('frontend.product', [
            'allProducts' => $this->productInterface->fetchAllProducts("DESC"),
        ]);
    }

    public function categoryWiseProduct($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $product = Product::where('category_id', $category->id)->orderBy('name', 'asc')->get();
        return view('frontend.product', [
            'allProducts' => $product,
        ]);
    }

    public function writeFeedback(Request $request, $productSlug)
    {
        $request->validate([
            'note' => "required|string",
            'star' => "required"
        ]);
        $data = $request->only("note", "star");

        $checkProduct = $this->productInterface->fetchProductBySlug($productSlug);
        if ($checkProduct) {
            $data["product_id"] = $checkProduct->id;
            $addReview = $this->productInterface->addReview($data);
            if ($addReview) {
                return back()->with("msg", "Review added successfully for approval");
            } else {
                return back()->with("msg", "Some error occur!");
            }
        } else {
            return back()->with("msg", "No Product Found");
        }
    }
}