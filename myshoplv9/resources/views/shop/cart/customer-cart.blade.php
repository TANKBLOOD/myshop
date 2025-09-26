@extends('shop.layout.shop-layout', ['excludePortableCart' => true])

@section('main-content')
    <!-- start breadcroumb -->

    <div class="bread-crumb pt-3">
        <div class="container-fluid">
            <div class="content-box">
                <div class="container-fluid">
                    <nav aria-label="breadcrumb" class="my-lg-0 my-2">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#" class="font-14 text-muted">خانه</a></li>
                            <li class="breadcrumb-item active main-color-one-color font-14" aria-current="page">سبد خرید
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- end breadcroumb -->

    <!-- start content -->

    <div class="content">
        <div class="container-fluid">

            <div class="line-step-container d-sm-block d-none">
                <div class="line-step">
                    <div class="line-step-boxs">
                        <div class="line-step-box complete">
                            <a href="cart.html">
                                <p>سبد خرید</p>
                                <div class="icon">
                                    1
                                </div>
                            </a>
                        </div>
                        <div class="line-step-box disabled">
                            <a href="checkout.html">
                                <p>جزییات پرداخت</p>
                                <div class="icon">
                                    2
                                </div>
                            </a>
                        </div>
                        <div class="line-step-box disabled">
                            <a href="cart.html">
                                <p>تکمیل سفارش</p>
                                <div class="icon">
                                    3
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="container-fluid">
            <div class="cart-product">
                <div class="row gy-4">
                    <div class="col-lg-9" id="cart-container">

                    </div>
                    <div class="col-lg-3">
                        <div class="cart-canvases position-sticky top-0">
                            <div class="item">
                                <div class="factor">
                                    <div class="title">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/image/shopping-bag.png" class="img-fluid" alt="">
                                            <h6 class="font-16">سفارش شما</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3 align-items-center justify-content-between">
                                        <p class="fw-bold mb-0">محصول</p>
                                        <p class="fw-bold mb-0">قیمت کل</p>
                                    </div>
                                    <div id="factor-items-container">
                                        <!-- Dynamic items will be inserted here -->
                                    </div>
                                    <div class="action mt-3 d-flex align-items-center justify-content-center">
                                        <a href="#"
                                            class="btn border-0 main-color-one-bg rounded-3 d-block w-100">تسویه حساب</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="cart-item-template" style="display: none;">
        <div class="cart-product-item">
            <div class="content-box">
                <div class="container-fluid">
                    <div class="cart-items">
                        <div class="item">
                            <div class="row gy-2">
                                <div class="col-2 w-100-in-400">
                                    <div class="image">
                                        <img src="" alt="" class="img-fluid product-image">
                                    </div>
                                </div>
                                <div class="col-10 w-100-in-400">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="d-flex align-items-start flex-column me-2">
                                            <div class="title d-flex align-items-center flex-wrap">
                                                <h6 class="font-16 product-title">
                                                    <span class="badge ms-2 danger-label rounded-pill discount">17%</span>
                                                </h6>
                                            </div>
                                            <div class="cart-item-feature d-flex align-items-center flex-wrap mt-3">
                                                <div class="item d-flex align-items-center">
                                                    <div class="icon"><i class="bi bi-shop"></i></div>
                                                    <div class="saller-name mx-2">فروشنده:</div>
                                                    <div class="saller-name text-muted product-seller"></div>
                                                </div>
                                                <div class="item d-flex align-items-center">
                                                    <div class="icon"><i class="bi bi-palette2"></i></div>
                                                    <div class="saller-name mx-2">رنگ:</div>
                                                    <div class="saller-name text-muted">
                                                        <div class="product-meta-color-items mt-0">
                                                            <label class="btn-light mb-0 px-2 py-1">
                                                                <span class="product-color"></span>
                                                                <span class="product-color-name"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item d-flex align-items-center">
                                                    <div class="icon"><i class="bi bi-bounding-box-circles"></i></div>
                                                    <div class="saller-name mx-2">سایز:</div>
                                                    <div class="saller-name text-muted">
                                                        <div class="product-meta-color-items mt-0">
                                                            <label class="btn-light px-2 mb-0">
                                                                <span class="product-size"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="remove danger-label">
                                            <a href="#">
                                                <i class="bi bi-trash-fill font-25"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="action d-flex flex-wrap justify-content-sm-end justify-content-center align-items-center mt-3">
                                        <div class="cart-item-feature d-flex align-items-center flex-wrap">
                                            <div class="item d-flex align-items-center me-2">
                                                <p class="mb-0 old-price font-16"></p>
                                            </div>
                                            <div class="item d-flex align-items-center">
                                                <p class="mb-0 new-price font-16"></p>
                                            </div>
                                        </div>
                                        <div class="counter d-flex align-items-center">
                                            <button class="btn btn-primary btn-lg rounded-circle decrement"
                                                id="decrement">-</button>
                                            <input type="text" name="countr"
                                                class="form-control text-center mx-3 count" value="1"
                                                style="width: 60px;">
                                            <button class="btn btn-primary btn-lg rounded-circle increment"
                                                id="increment">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end content -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const totalProductsList = [];
            var totalDiscount = 0;
            const fetchUserCart = () => {
                fetch('/user/cart', {
                        method: 'GET',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include the CSRF token for Laravel
                        },
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            showItems(data.userCartItems);
                            // alert('data fetched');
                        } else {
                            alert('Error: ' + (data.error || 'Unknown error'));
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        // alert('An error occurred while sending the verification code.');
                    });
            }
            const showItems = (itemsArray) => {
                console.log(itemsArray);
                itemsArray.map((item) => {
                    console.log('in loope');
                    var $template = $('#cart-item-template .cart-product-item').clone();
                    console.log($template);
                    $template.find('.product-image').attr('src',
                        `/product/image/${item.product.avatar_image}`);
                    $template.find('.product-title').prepend(item.product.title);
                    $template.find('.discount').text(item.product.discount);
                    $template.find('.product-seller').text(item.product.seller);
                    $template.find('.product-color').css('background-color', item.product.colorCode);
                    $template.find('.product-color-name').text(item.product.colorName);
                    $template.find('.product-size').text(item.product.size);
                    $template.find('.count').val(item.quantity).attr('data-product-id', item.product
                        .id);
                    if (item.product.discount) {
                        $template.find('.old-price').text(item.product.price);
                        $template.find('.new-price').text(item.product.price - (item.product.discount *
                            item.product.price / 100));
                    }

                    // Adding event listeners for increment and decrement buttons
                    $template.find('.increment').on('click', function() {
                        var $countInput = $(this).siblings('.count');
                        var currentValue = parseInt($countInput.val(), 10) + 1;
                        $countInput.val(currentValue).change();
                        addItemToCart(item.product.id);
                    });

                    $template.find('.decrement').on('click', function() {
                        var $countInput = $(this).siblings('.count');
                        var currentValue = parseInt($countInput.val(), 10) - 1;
                        if (currentValue >= 0) { // Prevent negative values
                            $countInput.val(currentValue).change();
                        }
                        removeItemFromCart(item.product.id)
                    });

                    $('#cart-container').append($template);

                    totalProductsList.push({
                        name: item.product.title,
                        count: item.quantity,
                        price: item.product.discount ? item.quantity * (item.product.price - (item.product
                            .discount * item.product.price / 100)) :  item.quantity * (item.product
                            .price),
                    });

                    totalDiscount += (item.product.discount * item.product.price / 100) * item.quantity;
                })
                setFactor();
            }
            fetchUserCart();

            const setFactor = () => {
                const $container = $('#factor-items-container');
                $container.empty(); // Clear any existing items

                totalProductsList.map((item) => {
                    const $toAdd = $(`
                        <div class="factor-item p-2 rounded-3 shadow-sm bg-light d-flex align-items-center justify-content-between">
                            <p class="mb-0">${item.name}</p>
                            <p class="mb-0">${item.price} تومان</p>
                        </div>
                    `);
                    $container.append($toAdd);
                })

                const $discount = $(`
                    <div class="factor-item p-2 rounded-3 shadow-sm bg-light d-flex align-items-center justify-content-between">
                        <p class="mb-0 fw-bold">تخفیف:</p>
                        <p class="mb-0">${totalDiscount} تومان</p>
                    </div>
                `);
                $container.append($discount);
            }
            const addItemToCart = (productId) => {
                // Define the data to be sent in the request body
                const data = {
                    productId: productId
                };

                // Send a POST request to the server
                fetch('/user/cart/add', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify(data)
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log('Success:', data);
                        // Handle the response data
                        // alert(`Item added to cart with ID: ${data.itemId}`);
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                    });
            }

            const removeItemFromCart = (productId) => {
                const data = {
                    productId: productId
                };

                // Send a POST request to the server
                fetch('/user/cart/remove', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify(data)
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log('Success:', data);
                        // Handle the response data
                        // alert(`Item removed from cart with ID: ${data.itemId}`);
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                    });
            }
            // Add event listeners to all add-to-cart buttons
            const addToCartButtons = document.querySelectorAll('.add-to-cart-button');

            addToCartButtons.forEach(button => {
                button.addEventListener('click', function() {
                    addItemToCart();
                });
            });

            // Handle value change event
            $("input[name='count']").on('change', function() {
                var currentValue = $(this).val(); // Get the current value
                var productId = $(this).data('productId');

                if (currentValue > previousItemCount) {
                    addItemToCart(productId); // Call function to handle increase
                } else if (currentValue < previousItemCount) {
                    removeItemFromCart(productId); // Call function to handle decrease
                }

                previousItemCount = currentValue; // Update the previous value
            });
        });
    </script>
@endsection
