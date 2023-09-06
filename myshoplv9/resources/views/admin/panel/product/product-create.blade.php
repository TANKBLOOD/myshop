<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Add Bootstrap CSS CDN links here -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <title>محصول جدید</title>
</head>

<body>
    <form action="" enctype="multipart/form-data">
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
                    <div class="form-group">
                        <label for="content">درباره محصول</label>
                        <!-- Add your TinyMCE Editor here with the ID "content" and name "content" -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="category_id">دسته بندی محصول</label>
                        <select class="form-control" id="category_id" name="category_id">
                            <option value="0">انتخاب کنید</option>
                            <!-- Add options dynamically using your backend -->
                        </select>
                    </div>
                    <!-- Add more form fields here -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">انتشار</button>
                </div>
                <div class="col-md-6">
                    <div>دسته بندی ها</div>
                    <div>
                        <!-- Add your category checkboxes here -->
                        <!-- Example:
                        <div>
                            <input type="checkbox" id="category1" name="category[]" value="1">
                            <label for="category1">Category 1</label>
                        </div>
                        -->
                    </div>
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
        </div>
    </form>

    <!-- Add Bootstrap JS and Popper.js CDN links here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</body>

</html>
