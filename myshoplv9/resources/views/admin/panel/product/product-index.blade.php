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
    <div class="container">
        <h2>Posts</h2>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="mb-3 mt-3">
            <a href="/admin/product/create" class="btn btn-primary">Create Post</a>
        </div>

        <div class="mb-3 mt-3">
            <input type="text" class="form-control" id="searchPost" placeholder="Search Post">
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Categories</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="PostsTableBody">
            </tbody>
        </table>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        var showingPost = null;
        var parentSelect = null;
        const injectCats = (cats) => {
            console.log(cats);
            let total = "";
            $.each(cats, (index, cat) => {
                total += cat.title + ", "
            });

            return total;
        }
        $(document).ready(function() {
            function fetchPosts(page = 1) {
                $.ajax({
                    url: "/admin/product/indexData?page=" + page,
                    type: "GET",
                    success: function(response) {
                        $('#PostsTableBody').empty();
                        console.log(response.products);

                        //create a select
                        $.each(response.products.data, function(index, post) {
                            var row = $('<tr>');

                            // Create and append the title cell
                            row.append($('<td>').text(post.title));

                            // Create and append the category cell
                            var categoryCell = $('<td>');
                            categoryCell.text(injectCats(post.category) || '');
                            row.append(categoryCell);

                            // Create and append the action cell
                            var actionCell = $('<td>');
                            var editLink = $('<a>')
                                .addClass('btn btn-sm btn-primary editCategoryBtn')
                                .attr('href', '/admin/product/edit/' + post.id)
                                .text('Edit');
                            var deleteButton = $('<button>')
                                .addClass('btn btn-sm btn-danger deleteCategoryBtn delete-row')
                                .attr('data-item-id', post.id)
                                .text('Delete');

                            const changePopularityBtn = $('<button>')
                                .addClass('btn btn-warning m-1')
                                .text(post.is_popular ? 'عادی کردن محصول' : 'محبوب کردن محصول')
                                .attr('title', 'ویرایش ویژه بودن');

                            changePopularityBtn.on('click', function() {
                                changePopularity(post);
                            });

                            actionCell.append(editLink, deleteButton, changePopularityBtn);
                            row.append(actionCell);

                            // Append the row to the table body
                            $('#PostsTableBody').append(row);
                        });
                        // parentSelect += '</select>';

                        // Assuming each row has a "Delete" button with the class "delete-row" and a data attribute for the item ID
                        $('.delete-row').on('click', function() {
                            var itemId = $(this).data(
                                'item-id'); // Get the ID of the item to be deleted
                            $('#deleteConfirmationModal').data('item-id', itemId).modal('show');
                        });

                        const paginationLinks = response.products.links;
                        const paginationContainer = $('#customerTablePagination');
                        paginationContainer.empty(); // Clear the previous pagination links

                        // Create and append the pagination links to the container, excluding next and previous
                        $.each(paginationLinks, function(key, value) {
                            if (value.url && value.label !== 'Next &raquo;' && value.label !==
                                '&laquo; Previous') {
                                // Append a link for each page
                                const pageLink = $('<a>').addClass('page-link').text(value
                                    .label);
                                pageLink.on('click', function() {
                                    // Call the fetchCustomers function with the page number
                                    fetchPosts(value.label);
                                });
                                const pageItem = $('<li>').addClass('page-item').append(
                                    pageLink);
                                paginationContainer.append(pageItem);
                            }
                        });

                    }
                });
            }

            // Delete category
            $(document).on('click', '.deleteCategoryBtn', function() {
                var categoryId = $(this).data('id');
                // Open a confirmation modal before proceeding with deletion
                $('#deletePostModal').modal('show');

                // Set the category ID to be deleted
                $('#confirmDeleteBtn').data('category-id', categoryId);
                fetchPosts();
            });

            $('#confirmDeleteBtn').on('click', function() {
                var itemId = $('#deleteConfirmationModal').data('item-id'); // Get the stored item ID
                console.log(itemId);
                // Make an AJAX request to delete the category
                $.ajax({
                    url: '/admin/product/delete', // Replace with your delete endpoint
                    method: 'DELETE', // Use the appropriate HTTP method for deleting
                    data: {
                        'id': itemId,
                    },
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        // Handle the success response (e.g., remove the row from the table)
                        fetchPosts();
                        $('#deleteConfirmationModal').modal('hide');
                        // Optionally, you can update the UI, remove the row, or show a success message
                    },
                    error: function(xhr, status, error) {
                        // Handle any errors (e.g., show an error message)
                        console.error('Error:', error);
                    }
                });
            });

            // Initial fetch
            fetchPosts();

            // Add an event listener to the search input
            $('#searchPost').on('keyup', function() {
                if (event.key === 'Enter') {
                    const searchTerm = $(this).val(); // Get the search term from the input field

                    // Make an AJAX request to the search route
                    $.ajax({
                        url: "/admin/product/search/" + searchTerm,
                        type: "GET",
                        success: function(response) {
                            // Update the table with the search results
                            $('#PostsTableBody').empty();

                            $.each(response.products, function(index, category) {
                                // Create rows for the search results and append them to the table
                                var row = '<tr>' +
                                    '<td>' + category.title + '</td>' +
                                    '<td>' + (injectCats(category.category) || '') +
                                    '</td>' +
                                    '<td>' +
                                    '<a class="btn btn-sm btn-primary editCategoryBtn" href="/admin/post/edit/' +
                                    category.id + '">Edit</a>' +
                                    '<button class="btn btn-sm btn-danger deleteCategoryBtn" data-id="' +
                                    category.id + '">Delete</button>' +
                                    '</td>' +
                                    '</tr>';

                                $('#PostsTableBody').append(row);
                            });
                        },
                        error: function(error) {
                            console.log(error);
                            // Handle error response
                        }
                    });
                }
            });

            const changePopularity = (product) => {
                const url = product.is_popular ? '/admin/products/removePopular' :
                '/admin/products/makePopular';
                $.ajax({
                    url: url,
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    },
                    data: {
                        id: product.id,
                    },
                    success: function(response) {
                        // Handle the success response (e.g., remove the row from the table)
                        fetchPosts();
                        // Optionally, you can update the UI, remove the row, or show a success message
                    },
                    error: function(xhr, status, error) {
                        // Handle any errors (e.g., show an error message)
                        console.error('Error:', error);
                    }

                });
            }
        });
    </script>
</body>

</html>
