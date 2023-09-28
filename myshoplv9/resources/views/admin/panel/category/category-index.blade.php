@extends('admin.layout.admin-layout', ['sidebarActive' => 'adminCategoryIndex'])

@section('mainContent')
    <div class="container">
        <div class="header">
            <div class="table-title">
                لیست دسته بندی های ثبت شده
            </div>
            <button class="btn btn-primary" id="addCategoryButton">
                افزودن دسته بندی
            </button>
        </div>
        <div>
            <form id="searchForm" method="GET">
                <input type="text" class="form-control" name="query" id="searchInput" placeholder="Search...">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>

        </div>
        <div class="card">
            <div class="table-responsive">
              <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th>عکس</th>
                        <th>نام</th>
                        <th>تاریخ</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody id="categoryTableBody">
                    {{-- <!-- Use Blade directives to loop through categories -->
                @foreach ($categories as $product)
                    <tr>
                        <td>
                            <img class="cat-image" src="{{ asset('myimage/' . $product['avatar_image']) }}"
                                alt="" style="max-height: 100px; max-width: 100px;border-radius: 50%;" />
                        </td>
                        <td>{{ $product['title'] }}</td>
                        <td>{{ $product['created_at'] }}</td>
                        <td>
                            <button class="btn btn-danger delete" data-id="{{ $product['id'] }}">
                                حذف
                            </button>
                            <button class="btn btn-primary edit" data-id="{{ $product['id'] }}">
                                ویرایش
                            </button>
                        </td>

                    </tr>
                @endforeach --}}
                </tbody>
              </table>
            </div>
        </div>
    </div>

    <!-- Add Category Modal -->
    <div class="modal" id="addCategoryModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">افزودن دسته بندی</h5>
                    <button type="button" class="close" data-dismiss="modal" id="closeAddCategoryModal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form enctype="multipart/form-data" id="addCategoryForm">
                            @csrf
                            <div class="form-group">
                                <label for="catAvatarImage">عکس</label>
                                <input type="file" class="form-control" id="catAvatarImage" name="catAvatarImage">
                            </div>
                            <div class="form-group">
                                <label for="catTitle">عنوان</label>
                                <input type="text" class="form-control" id="catTitle" name="catTitle">
                            </div>
                            <div class="form-group">
                                <label for="catMetaDescription">عنوان فرعی</label>
                                <input type="text" class="form-control" id="catMetaDescription"
                                    name="catMetaDescription">
                            </div>
                            <div class="form-group">
                                <label for="catDescription">توضیحات</label>
                                <input type="text" class="form-control" id="catDescription" name="catDescription">
                            </div>
                            <div class="form-group">
                                <label for="catParent">والد</label>
                                <select class="form-control" id="catParent" name="catParent">
                                    <option value="0">بدون والد</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">افزودن</button>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                    <button class="btn btn-primary" type="submit" form="addCategoryForm">افزودن</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Category Modal -->
    <div class="modal" id="editCategoryModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">ویرایش دسته بندی</h5>
                    <button type="button" class="close" data-dismiss="modal" id="closeEditCategoryModal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="editCategoryModalBody">
                    <!-- Form inputs will be dynamically appended here -->
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this category?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('exclusiveScripts')
    <!-- Include Bootstrap JS via CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#addCategoryButton').click(function() {
                $('#addCategoryModal').modal('show');
            });

            $('#closeAddCategoryModal').click(function() {
                $('#addCategoryModal').modal('hide');
            });

            // Add similar click handlers for edit and delete modals
        });
    </script>
    <script>
        let showingCategory = null;
        $(document).ready(function() {
            // Form submission event handler
            $("#addCategoryForm").submit(function(event) {
                event.preventDefault(); // Prevent the default form submission

                // Serialize the form data
                var formData = new FormData(this);

                var form = this;

                // Send an AJAX POST request to your Laravel backend
                $.ajax({
                    url: '/admin/category/store', // Replace with your Laravel route
                    method: 'POST',
                    data: formData,
                    processData: false, // Don't process the data
                    contentType: false, // Don't set content type (let jQuery do it)
                    success: function(response) {
                        // Handle the success response
                        console.log('Category added successfully');
                        fetchCategories();
                        form.reset();
                        $('#addCategoryModal').modal('hide');
                        // You can redirect or show a success message here
                    },
                    error: function(xhr, status, error) {
                        // Handle any errors
                        console.error('Error:', error);
                        // You can display an error message here
                    }
                });
            });
        });

        function fetchCategories(page = 1) {
            // loader.show();
            const apiUrl = `/admin/category/indexData?page=${page}`; // Replace with your actual API endpoint
            axios.get(apiUrl)
                .then(function(response) {
                    // Handle the success response and update the category list using jQuery
                    // loader.hide();
                    const categories = response.data.categories;

                    console.log(categories);
                    $('#categoryTableBody').empty();

                    categories.data.forEach(function(category) {
                        const row = $('<tr>');
                        row.append($('<td>').append($('<img>').attr({
                            'src': `/myimage/${category.avatar_image}`,
                            'style': 'max-height: 100px; max-width: 100px;border-radius: 50%;'
                        })));
                        row.append($('<td>').text(category.title));
                        row.append($('<td>').text(category.meta_title));

                        // Add the "Edit" and "Delete" buttons with titles
                        const editButton = $('<button>')
                            .addClass('btn btn-primary m-1')
                            .text('ویرایش')
                            .attr('title', 'ویرایش دسته بندی');

                        const deleteButton = $('<button>')
                            .addClass('btn btn-danger m-1 delete-row')
                            .text('حذف')
                            .attr({
                                'title': 'حذف دسته بندی',
                                'data-item-id': category.id,
                            });

                        // Add click events for edit and delete buttons
                        editButton.on('click', function() {
                            editCategory(category);
                        });

                        const changeSpecialityBtn = $('<button>')
                            .addClass('btn btn-warning m-1')
                            .text(category.isSpecial ? 'عادی کردن دسته' : 'ویژه کردن دسته')
                            .attr('title', 'ویرایش ویژه بودن');

                        changeSpecialityBtn.on('click', function() {
                            changeSpeciality(category);
                        });
                        // deleteButton.on('click', function() {
                        //     deleteCategory(category.id);
                        // });

                        row.append($('<td>').append(editButton, deleteButton, changeSpecialityBtn));
                        // Add more columns if needed
                        $('#categoryTableBody').append(row);
                    });

                    // Assuming each row has a "Delete" button with the class "delete-row" and a data attribute for the item ID
                    $('.delete-row').on('click', function() {
                        var itemId = $(this).data('item-id'); // Get the ID of the item to be deleted
                        $('#deleteConfirmationModal').data('item-id', itemId).modal('show');
                    });

                    const paginationLinks = response.data.categories.links;
                    const paginationContainer = $('#categoryTablePagination');
                    paginationContainer.empty(); // Clear the previous pagination links

                    // Create and append the pagination links to the container, excluding next and previous
                    $.each(paginationLinks, function(key, value) {
                        if (value.url && value.label !== 'Next &raquo;' && value.label !== '&laquo; Previous') {
                            // Append a link for each page
                            const pageLink = $('<a>')
                                .addClass('page-link')
                                .text(value.label);

                            pageLink.on('click', function() {
                                // Call the fetchCategories function with the page number
                                fetchCategories(value.label);
                            });

                            const pageItem = $('<li>').addClass('page-item').append(pageLink);
                            paginationContainer.append(pageItem);
                        }
                    });

                })
                .catch(function(error) {
                    // Handle the error if any
                    console.error(error);
                });
        }

        const submitUpdateCat = () => {
            event.preventDefault(); // Prevent the default form submission

            // Serialize the form data
            var formElement = document.getElementById('editCatForm');
            var formData = new FormData(formElement);
            formData.append('id', showingCategory.id);

            // Send an AJAX POST request to update the category
            $.ajax({
                url: '/admin/category/update', // Replace with your Laravel update route
                method: 'POST',
                data: formData,
                processData: false, // Don't process the data
                contentType: false, // Don't set content type (let jQuery do it)
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}",
                },
                success: function(response) {
                    // Handle the success response
                    console.log('Category updated successfully');

                    fetchCategories();

                    // Optionally, you can close the edit modal
                    $('#editCategoryModal').modal('hide');

                    // You can also update the category data in your UI if needed

                    // Reset the form (if needed)
                    // form.reset();

                    // You can redirect or show a success message here
                },
                error: function(xhr, status, error) {
                    // Handle any errors
                    console.error('Error:', error);
                    // You can display an error message here
                }
            });
        }

        function editCategory(category) {
            // Define an array of form fields with their attributes
            console.log('ali mmad');
            showingCategory = category;
            const editFormFields = [{
                    type: 'file',
                    label: 'عکس',
                    id: 'catAvatarImage',
                    name: 'catAvatarImage',
                    accept: 'image/*'
                },
                {
                    type: 'text',
                    label: 'عنوان',
                    id: 'catTitle',
                    name: 'catTitle',
                    value: category.title,
                },
                {
                    type: 'text',
                    label: 'عنوان فرعی',
                    id: 'catMetaDescription',
                    name: 'catMetaDescription',
                    value: category.meta_title,
                },
                {
                    type: 'text',
                    label: 'توضیحات',
                    id: 'catDescription',
                    name: 'catDescription',
                    value: category.content,

                },
                {
                    type: 'select',
                    label: 'والد',
                    id: 'catParent',
                    name: 'catParent',
                    value: category.parent_id,
                    options: []
                },
            ];

            // Populate the 'options' array with data from your Laravel Blade template
            editFormFields[4].options.push({
                value: 0,
                text: 'بدون والد'
            });
            @foreach ($categories as $category)
                if (category.id != "{{ $category->id }}") {
                    editFormFields[4].options.push({
                        value: {{ $category->id }},
                        text: '{{ $category->title }}'
                    });
                }
            @endforeach

            // Create a form element
            const editForm = $('<form>').attr({
                id: 'editCatForm',
                enctype: 'multipart/form-data',
                method: 'POST',
            });

            editForm.submit(submitUpdateCat);

            // Loop through the array of fields and create form elements
            editFormFields.forEach(function(field) {
                const formGroup = $('<div>').addClass('form-group');
                const label = $('<label>').attr('for', field.id).text(field.label);

                if (field.type === 'select') {
                    const select = $('<select>')
                        .addClass('form-control')
                        .attr({
                            id: field.id,
                            name: field.name,
                            value: field.value,
                        });

                    field.options.forEach(function(option) {
                        const optionElement = $('<option>').attr('value', option.value).text(option.text);
                        select.append(optionElement);
                    });

                    select.val(field.value);

                    formGroup.append(label, select);
                } else {
                    const input = $('<input>')
                        .addClass('form-control')
                        .attr({
                            type: field.type,
                            id: field.id,
                            name: field.name,
                            accept: field.accept || '',
                            value: field.value,
                        });

                    formGroup.append(label, input);
                }

                // Append the form-group div to the form
                editForm.append(formGroup);
            });

            // Create a submit button
            const submitButton = $('<button>')
                .attr({
                    type: 'submit',
                    class: 'btn btn-primary'
                })
                .text('افزودن');

            // Append the submit button to the form
            editForm.append(submitButton);

            // Append the form to the modal body
            $('#editCategoryModalBody').empty().append(editForm);

            // Show the modal
            $('#editCategoryModal').modal('show');
        }

        $('#confirmDeleteBtn').on('click', function() {
            var itemId = $('#deleteConfirmationModal').data('item-id'); // Get the stored item ID

            // Make an AJAX request to delete the category
            $.ajax({
                url: '/admin/category/delete', // Replace with your delete endpoint
                method: 'DELETE', // Use the appropriate HTTP method for deleting
                data: {
                    'catId': itemId,
                },
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}",
                },
                success: function(response) {
                    // Handle the success response (e.g., remove the row from the table)
                    fetchCategories();
                    $('#deleteConfirmationModal').modal('hide');
                    // Optionally, you can update the UI, remove the row, or show a success message
                },
                error: function(xhr, status, error) {
                    // Handle any errors (e.g., show an error message)
                    console.error('Error:', error);
                }
            });
        });

        $('#searchForm').on('submit', function(e) {
            e.preventDefault();
            performSearch();
        });

        // Add keyup event listener to the search input field
        $('#searchInput').on('keyup', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                performSearch();
            }
        });

        function performSearch() {
            var query = $('#searchInput').val();

            $.ajax({
                url: '/admin/category/search?query=' + query,
                type: 'GET',
                processData: false, // Don't process the data
                contentType: false, // Don't set content type (let jQuery do it)
                success: function(response) {
                    const categories = response.categories;

                    console.log(categories);
                    $('#categoryTableBody').empty();

                    categories.forEach(function(category) {
                        const row = $('<tr>');
                        row.append($('<td>').append($('<img>').attr({
                            'src': `/myimage/${category.avatar_image}`,
                            'style': 'max-height: 100px; max-width: 100px;border-radius: 50%;'
                        })));
                        row.append($('<td>').text(category.title));
                        row.append($('<td>').text(category.meta_title));

                        // Add the "Edit" and "Delete" buttons with titles
                        const editButton = $('<button>')
                            .addClass('btn btn-primary m-1')
                            .text('ویرایش')
                            .attr('title', 'ویرایش دسته بندی');

                        const deleteButton = $('<button>')
                            .addClass('btn btn-danger m-1 delete-row')
                            .text('حذف')
                            .attr({
                                'title': 'حذف دسته بندی',
                                'data-item-id': category.id,
                            });

                        // Add click events for edit and delete buttons
                        editButton.on('click', function() {
                            editCategory(category);
                        });

                        const changeSpecialityBtn = $('<button>')
                            .addClass('btn btn-warning m-1')
                            .text(category.isSpecial ? 'عادی کردن دسته' : 'ویژه کردن دسته')
                            .attr('title', 'ویرایش ویژه بودن');

                        changeSpecialityBtn.on('click', function() {
                            changeSpeciality(category);
                        });

                        // deleteButton.on('click', function() {
                        //     deleteCategory(category.id);
                        // });

                        row.append($('<td>').append(editButton, deleteButton, changeSpecialityBtn));
                        // Add more columns if needed
                        $('#categoryTableBody').append(row);
                    });

                    // Assuming each row has a "Delete" button with the class "delete-row" and a data attribute for the item ID
                    $('.delete-row').on('click', function() {
                        var itemId = $(this).data('item-id'); // Get the ID of the item to be deleted
                        $('#deleteConfirmationModal').data('item-id', itemId).modal('show');
                    });
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        }

        const changeSpeciality = (category) => {

            const url = category.isSpecial ? '/category/makeNormal' : '/category/makeSpecial';
            $.ajax({
                url: url, // Replace with your delete endpoint
                method: 'POST', // Use the appropriate HTTP method for deleting
                data: {
                    'id': category.id,
                },
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}",
                },
                success: function(response) {
                    // Handle the success response (e.g., remove the row from the table)
                    fetchCategories();
                    // Optionally, you can update the UI, remove the row, or show a success message
                },
                error: function(xhr, status, error) {
                    // Handle any errors (e.g., show an error message)
                    console.error('Error:', error);
                }
            });
        }
        // Initial fetch of categories (you can call this on page load)
        fetchCategories();
    </script>
    <!-- Include your custom JavaScript for handling modals and AJAX here -->
@endsection
