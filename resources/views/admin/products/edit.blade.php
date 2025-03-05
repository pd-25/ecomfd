@extends('admin.layout.main')
@section('title', 'Edit Product | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Product</h5>
                        <form action="{{ route('product-mamages.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <!-- Product Name -->
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <input type="text" name="name" class="form-control" placeholder="Product Name" value="{{ old('name', $product->name) }}" required>
                                    @error('name')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Category and Type -->
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <select name="category_id" class="form-control" required>
                                        <option value="">Select Category</option>
                                        @foreach ($categoriesList as $category)
                                            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <select name="type" class="form-control" required>
                                        <option value="">Select Type</option>
                                        @foreach (\App\enum\ProductTypes::values() as $value)
                                            <option value="{{ $value }}" {{ old('type', $product->type) == $value ? 'selected' : '' }}>
                                                {{ $value }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('type')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <textarea name="description" class="form-control" cols="10" rows="10" placeholder="Enter Description" required>{{ old('description', $product->description) }}</textarea>
                                    @error('description')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Variant Section -->
                            <div id="variant-container">
                                <label for="inputText" class="col-sm-2 col-form-label"><strong>Product Variants</strong></label>
                                @foreach ($product->productVariants as $variant)
                                    <div class="row mb-3 variant">
                                        <div class="col-md-2">
                                            <select name="variant_name[]" class="form-control" required>
                                                @foreach (\App\enum\ProductVariant::values() as $value)
                                                    <option value="{{ $value }}" {{ $variant->name == $value ? 'selected' : '' }}>{{ $value }}</option>
                                                @endforeach
                                            </select>
                                            @error('variant_name.*')
                                                <span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="col-md-2">
                                            <input type="number" name="measurement[]" class="form-control" placeholder="Measurement" value="{{ $variant->measurement }}" required>
                                            @error('measurement.*')
                                                <span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" name="measurement_param[]" class="form-control" placeholder="Unit" value="{{ $variant->measurement_param }}" required>
                                            @error('measurement_param.*')
                                                <span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="col-md-2">
                                            <input type="number" name="price[]" class="form-control" placeholder="Price" value="{{ $variant->price }}" required>
                                            @error('price.*')
                                                <span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="col-md-2">
                                            <input type="number" name="quantity[]" class="form-control" placeholder="Quantity" value="{{ $variant->quantity }}" required>
                                            @error('quantity.*')
                                                <span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" class="btn btn-sm btn-danger remove-variant">Remove</button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Add More Button -->
                            {{-- <div class="row mb-3">
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-sm btn-secondary" id="add-variant">Add More</button>
                                </div>
                            </div> --}}

                            <!-- Upload Product Images -->
                            {{-- <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Upload Product Images</label>
                                <div class="col-sm-12">
                                    <input type="file" name="images[]" class="form-control" id="images" multiple>
                                    @error('images')
                                        <span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div> --}}

                            <!-- Image Preview -->
                            <div class="row mb-3">
                                <div class="container_image">
                                    <div class="main-image-container">
                                        @foreach ($product->productImages as $image)
                                            @if ($image->is_primary == 1)
                                            <span class="star-icon" id="star">⭐</span>
                                                <img id="mainImage" src="{{ asset('storage/' . $image->image_path) }}" alt="Product Image" class="main-image" style="width: 100px; height: 100px;">
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="gallery">
                                        @foreach ($product->productImages as $image)
                                            <label class="thumbnail">
                                                <img src="{{ asset('storage/' . $image->image_path) }}" alt="Product Image" class="" style="width: 100px; height: 100px;" >
                                                <input type="radio" class="mb-2" @if ($image->is_primary == 1) checked @endif name="imageSelect" onclick="setPrimary(this.previousElementSibling, JSON.stringify({{$image}}))">
                                                @if ($image->is_primary != 1)
                                                {{-- <a href="{{ route('product.setImagesDelete', $image->id) }}" onclick="confirmDelete()" class="delete-icon delete_images"
                                                    data-toggle="tooltip" title='Delete' ><i class="ri-delete-bin-2-fill"></i></a> --}}
                                                <a href="{{ route('product.setImagesDelete', $image->id) }}" 
                                                    onclick="return confirmDelete({{ $image->id }})" 
                                                    class="delete-icon delete_images" 
                                                    data-toggle="tooltip" 
                                                    title='Delete'>
                                                    <i class="ri-delete-bin-2-fill"></i>
                                                </a>
                                                {{-- <form method="POST" action="{{ route('product.setImagesDelete', $image->id) }}"
                                                    class="d-inline-block pl-2">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="delete-icon show_confirm"
                                                        data-toggle="tooltip" title='Delete'>
                                                        <i class="ri-delete-bin-2-fill"></i>
                                                    </button>
                                                </form> --}}
                                                @endif
                                            </label>
                                        @endforeach
                                        <label class="thumbnail">
                                            <input type="file" id="fileInput" style="display: none;">
                                            <img id="uploadImage" src="{{ asset('assets/img/upload.png') }}" alt="Product Image" style="width: 100px; height: 100px;">
                                        </label>
                                        <label class="thumbnail">
                                            <div id="preview"></div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-sm btn-primary float-end m-2">Save Changes</button>
                                    <a href="{{ route('product-mamages.index') }}" class="btn btn-sm btn-danger float-end m-2">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>

    // function confirmDelete(imageId) {
    //     if (confirm("Are you sure you want to delete this image?")) {
    //        return true;
    //     }else{
    //         return false;
    //     }
    // }
    function confirmDelete(imageId) {
        if (!confirm("Are you sure you want to delete this image?")) {
            return false;
        }
        return true;
    }

    $(document).ready(function () {
        $("#uploadImage").off("click").on("click", function (event) {
            event.preventDefault(); 
            $("#fileInput").click(); 
        });

        $("#fileInput").off("change").on("change", function (event) {
            let reader = new FileReader();
            reader.onload = function (e) {
                $("#preview").html('<img src="' + e.target.result + '" style="width: 100px; height: 100px;" /> <div class="d-flex justify-content-center mt-2"><a href="javascript:void(0)" class="btn btn-primary btn-sm mx-2" id="uploadButton">Upload</a></div>');
            };
            reader.readAsDataURL(event.target.files[0]);
        });

        $(document).on("click", "#uploadButton", function () {
            uploadImages();
        });
    });

        function uploadImages(){
            var fileInput = document.getElementById('fileInput');
            var product_id = '{{$product->id}}';
            var file = fileInput.files[0]; 
            if (!file) {
                alert("Please select an image to upload.");
                return;
            }
            var formData = new FormData();
            formData.append('image', file);
            formData.append('product_id', product_id);
            formData.append('_token', '{{ csrf_token() }}');

            $.ajax({
                url: "{{ route('product.addImages') }}",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    //alert("Image uploaded successfully!");
                    location.reload();
                },
                error: function (xhr, status, error) {
                    alert("An error occurred while uploading the image.");
                    console.error(xhr.responseText);
                }
            });

        }

        function setPrimary(image, data){
            document.getElementById("mainImage").src = image.src;
            document.querySelectorAll(".thumbnail img").forEach(img => img.classList.remove("active"));
            image.classList.add("active");
            document.getElementById("star").style.display = "block";
            console.log(data)
            
            $.ajax({
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{route('product.setPrimaryImages')}}",
                data:data
                }).then(function( respose ) {
                    console.log(respose)
                    location.reload();
            });

        }

        document.addEventListener("DOMContentLoaded", function() {
            const variantContainer = document.getElementById("variant-container");
            const addVariantBtn = document.getElementById("add-variant");

            addVariantBtn.addEventListener("click", function() {
                const variantDiv = document.querySelector(".variant").cloneNode(true);
                variantDiv.querySelectorAll("input").forEach(input => input.value = "");
                variantContainer.appendChild(variantDiv);
            });

            variantContainer.addEventListener("click", function(e) {
                if (e.target.classList.contains("remove-variant")) {
                    e.target.closest(".variant").remove();
                }
            });
        });
    </script>
@endsection
