<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Add Bootstrap CSS CDN links here -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/2uyos33endb56kseb850bzheza27fwpir3wtax7l6qglo2pp/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <title>محصول جدید</title>
</head>

<body>
    <form id="createProductForm" action="" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title">عنوان محصول</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ $product->title }}">
                    </div>
                    <div class="form-group">
                        <label for="meta_title">ساب تایتل</label>
                        <input type="text" class="form-control" id="meta_title" name="meta_title"
                            value="{{ $product->meta_title }}">
                    </div>
                    <div class="form-group">
                        <label for="summary">خلاصه محصول</label>
                        <input type="text" class="form-control" id="summary" name="summary"
                            value="{{ $product->summary }}">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="price">قیمت محصول</label>
                            <input type="number" class="form-control" id="price" name="price"
                                value="{{ $product->price }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="quantity">تعداد محصول</label>
                            <input type="number" class="form-control" id="quantity" name="quantity"
                                value="{{ $product->quantity }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="discount">تخفیف محصول</label>
                            <input type="number" class="form-control" id="discount" name="discount"
                                value="{{ $product->discount }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <label for="content">درباره محصول</label>
                    <!-- Add your TinyMCE Editor here with the ID "content" and name "content" -->
                    <textarea name="content" id="mainContent">
                        {!! $product->content !!}
                    </textarea>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="category_id">دسته بندی محصول</label>
                        <select class="form-control js-example-basic-multiple" id="category_id" name="category_id[]"
                            multiple="multiple">
                            <option value="0">انتخاب کنید</option>
                            <!-- Add options dynamically using your backend -->
                            @foreach ($categories as $category)
                                <optgroup label="{{ $category->title }}">
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @if (count($category->children) > 0)
                                        @include('admin.panel.product.child-categories-select', [
                                            'children' => $category->children,
                                            'level' => 1,
                                        ])
                                    @endif
                                </optgroup>
                            @endforeach
                        </select>
                    </div>
                    <!-- Add more form fields here -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">انتشار</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <!-- Display avatar image preview here -->
                        <!-- Example:
                        <img src="avatar-preview.jpg" alt="Avatar Preview">
                        -->
                    </div>
                    <div class="form-group">
                        <label for="avatar_image">عکس اواتار</label>
                        <input type="file" class="form-control" id="avatar_image" name="avatar_image">
                    </div>
                    <div class="form-group">
                        <label for="images">عکس های بیشتر</label>
                        <input type="file" class="form-control" id="images" name="images[]" multiple>
                    </div>
                </div>
            </div>
            @php
                $productSpecifications = json_decode($product->product_specifications);
            @endphp
            <div class="row">
                @foreach ($productSpecifications as $specification)
                    <div class="col-md-4 mb-3">
                        <label for="brand">{{ $specification->title ?? '' }}</label>
                        <input type="text" id="brand" class="form-control" data-persian="{{$specification->title}}"
                            onchange="onProductSpecificationChange(this)"
                            value="{{ $specification->value ?? '' }}">
                    </div>
                @endforeach
                {{-- <div class="col-md-4 mb-3">
                    <label for="brand">وزن</label>
                    <input type="text" id="brand" class="form-control"
                        onchange="onProductSpecificationChange(this)"
                        value="{{ $productSpecifications->brand ?? '' }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="count">جنس</label>
                    <input type="text" id="count" class="form-control"
                        onchange="onProductSpecificationChange(this)"
                        value="{{ $productSpecifications->count ?? '' }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="bodyMatrial">ابعاد</label>
                    <input type="text" id="bodyMatrial" class="form-control"
                        onchange="onProductSpecificationChange(this)"
                        value="{{ $productSpecifications->bodyMatrial ?? '' }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="fabricMaterial">کیفیت</label>
                    <input type="text" id="fabricMaterial" class="form-control"
                        onchange="onProductSpecificationChange(this)"
                        value="{{ $productSpecifications->fabricMaterial ?? '' }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="seatMaterial">ولتاژ</label>
                    <input type="text" id="seatMaterial" class="form-control"
                        onchange="onProductSpecificationChange(this)"
                        value="{{ $productSpecifications->seatMaterial ?? '' }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="legMaterial">نصب</label>
                    <input type="text" id="legMaterial" class="form-control"
                        onchange="onProductSpecificationChange(this)"
                        value="{{ $productSpecifications->legMaterial ?? '' }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="sewingType">طریقه استفاده</label>
                    <input type="text" id="sewingType" class="form-control"
                        onchange="onProductSpecificationChange(this)"
                        value="{{ $productSpecifications->sewingType ?? '' }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="mechanism">طول عمر</label>
                    <input type="text" id="mechanism" class="form-control"
                        onchange="onProductSpecificationChange(this)"
                        value="{{ $productSpecifications->mechanism ?? '' }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="spongeDensity">دمای مناسب</label>
                    <input type="text" id="spongeDensity" class="form-control"
                        onchange="onProductSpecificationChange(this)"
                        value="{{ $productSpecifications->spongeDensity ?? '' }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="cushionCount">ابعاد بسته بندی</label>
                    <input type="text" id="cushionCount" class="form-control"
                        onchange="onProductSpecificationChange(this)"
                        value="{{ $productSpecifications->cushionCount ?? '' }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="tolerableWeight">مصرف انرژی</label>
                    <input type="text" id="tolerableWeight" class="form-control"
                        onchange="onProductSpecificationChange(this)"
                        value="{{ $productSpecifications->tolerableWeight ?? '' }}">
                </div> --}}
            </div>
        </div>
    </form>

    <!-- Add Bootstrap JS and Popper.js CDN links here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        function filePickerCallback(callback, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');

            input.onchange = function() {
                var file = this.files[0];
                var formData = new FormData();
                formData.append('image', file);

                // Send the file to the server using AJAX
                fetch('/upload/product/image', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    })
                    .then(function(response) {
                        return response.json();
                    })
                    .then(function(data) {
                        // Insert the uploaded image URL into the editor
                        callback(data.location);
                    })
                    .catch(function() {
                        alert('Image upload failed');
                    });
            };

            input.click();
        }

        tinymce.init({
            selector: 'textarea#mainContent',
            height: 600,
            menubar: 'file edit view insert format tools table help',
            plugins: 'advlist autolink lists link image imagetools charmap print preview hr anchor pagebreak table toc code',
            toolbar: 'undo redo | bold italic | numlist bullist | styleselect | alignleft aligncenter alignright alignjustify | image link | table | code',
            file_picker_callback: filePickerCallback,
            content_css: 'path/to/your/custom-styles.css',
            language: 'en',
            relative_urls: false,
            remove_script_host: false,
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
        let categories = JSON.parse("{{ json_encode($product->category->pluck('id')) }}");
        $('#category_id').val(categories);
    </script>
    <script>
        // Initialize an empty object for productSpecification
        let productSpecification = JSON.parse('{!! $product->product_specifications !!}');
        // Function to handle changes in input fields
        function onProductSpecificationChange(e) {
            const id = e.id;
            const title= e.getAttribute('data-persian');

            // Update the productSpecification object with the new key-value pair
            productSpecification[id] = {title: title, value: value};

            console.log(productSpecification);
        }

        $("#createProductForm").submit(function(event) {
            event.preventDefault(); // Prevent the default form submission
            // Your custom code for handling the form submission
            // Send an AJAX POST request to your Laravel backend
            const form = document.getElementById('createProductForm');

            var formData = new FormData(form);
            formData.append('productSpecifications', JSON.stringify(productSpecification));
            formData.append('id', "{{ $product->id }}");
            $.ajax({
                url: '/admin/product/update', // Replace with your Laravel route
                method: 'POST',
                data: formData,
                processData: false, // Don't process the data
                contentType: false, // Don't set content type (let jQuery do it)
                success: function(response) {
                    // Handle the success response

                    alert('product created');
                    // You can redirect or show a success message here
                },
                error: function(xhr, status, error) {
                    // Handle any errors
                    console.error('Error:', error);
                    // You can display an error message here
                }
            });
        });
    </script>
</body>

</html>
