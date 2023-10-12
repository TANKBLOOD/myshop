@extends('admin.layout.admin-layout', ['sidebarActive' => 'adminProductsCreate'])

@section('exclusiveStyles')
    <!-- Add Bootstrap CSS CDN links here -->
    <script src="https://cdn.tiny.cloud/1/2uyos33endb56kseb850bzheza27fwpir3wtax7l6qglo2pp/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('mainContent')
    <div class="card p-4 bg-white">
        <form id="createProductForm" action="" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">عنوان محصول</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <label for="meta_title">ساب تایتل</label>
                            <input type="text" class="form-control" id="meta_title" name="meta_title">
                        </div>
                        <div class="form-group">
                            <label for="summary">خلاصه محصول</label>
                            <input type="text" class="form-control" id="summary" name="summary">
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
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="price">قیمت محصول</label>
                                <input type="number" class="form-control" id="price" name="price">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="quantity">تعداد محصول</label>
                                <input type="number" class="form-control" id="quantity" name="quantity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="discount">تخفیف محصول</label>
                                <input type="number" class="form-control" id="discount" name="discount">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="content">درباره محصول</label>
                        <!-- Add your TinyMCE Editor here with the ID "content" and name "content" -->
                        <textarea name="content" id="mainContent"></textarea>
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
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="count">جنس</label>
                        <input type="text" id="count" class="form-control" data-persian="جنس"
                            onchange="onProductSpecificationChange(this)">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="count">رنگ</label>
                        <input type="text" id="color" class="form-control" data-persian="رنگ"
                            onchange="onProductSpecificationChange(this)">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="count">قطر</label>
                        <input type="text" id="diameter" class="form-control" data-persian="قطر"
                            onchange="onProductSpecificationChange(this)">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="count">طول</label>
                        <input type="text" id="length" class="form-control" data-persian="طول"
                            onchange="onProductSpecificationChange(this)">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="brand">وزن</label>
                        <input type="text" id="weight" class="form-control" data-persian="وزن"
                            onchange="onProductSpecificationChange(this)">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="brand">نوع آچار</label>
                        <input type="text" id="wrenchType" class="form-control" data-persian="نوع آچار"
                            onchange="onProductSpecificationChange(this)">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="brand">نوع نوک</label>
                        <input type="text" id="tipType" class="form-control" data-persian="نوع نوک"
                            onchange="onProductSpecificationChange(this)">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="brand">نوع دنده</label>
                        <input type="text" id="gearType" class="form-control" data-persian="نوع دنده"
                            onchange="onProductSpecificationChange(this)">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="brand">نوع اتصال</label>
                        <input type="text" id="connectionType" class="form-control" data-persian="نوع اتصال"
                            onchange="onProductSpecificationChange(this)">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="brand">نوع تولید</label>
                        <input type="text" id="createType" class="form-control" data-persian="نوع تولید"
                            onchange="onProductSpecificationChange(this)">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="brand">دمای کارکرد</label>
                        <input type="text" id="operatingTemperature" class="form-control" data-persian="دمای کارکرد"
                            onchange="onProductSpecificationChange(this)">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="brand">شرایط کارکرد</label>
                        <input type="text" id="operatingCondition" class="form-control" data-persian="شرایط کارکرد"
                            onchange="onProductSpecificationChange(this)">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="brand">رطوبت</label>
                        <input type="text" id="humidity" class="form-control" data-persian="رطوبت"
                            onchange="onProductSpecificationChange(this)">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="brand">نوع آبکاری</label>
                        <input type="text" id="platingType" class="form-control" data-persian="نوع آبکاری"
                            onchange="onProductSpecificationChange(this)">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="brand">گرید پیچ</label>
                        <input type="text" id="grade" class="form-control" data-persian="گرید پیچ"
                            onchange="onProductSpecificationChange(this)">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="cushionCount">ابعاد بسته بندی</label>
                        <input type="text" id="cushionCount" class="form-control" data-persian="ابعاد بسته بندی"
                            onchange="onProductSpecificationChange(this)">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">انتشار</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('exclusiveScripts')
    <!-- Add Bootstrap JS and Popper.js CDN links here -->
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
    </script>
    <script>
        // Initialize an empty object for productSpecification
        let productSpecification = {};

        // Function to handle changes in input fields
        function onProductSpecificationChange(e) {
            const id = e.id;
            const value = e.value;
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
            $.ajax({
                url: '/admin/product/store', // Replace with your Laravel route
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
@endsection
