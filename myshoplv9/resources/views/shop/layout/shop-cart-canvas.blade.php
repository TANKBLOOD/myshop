<!-- cart canvas -->

<div class="offcanvas cart-canvas offcanvas-end" tabindex="-1" id="offcanvasCart" aria-labelledby="offcanvasCartLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCartLabel">سبد خرید</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="cart-canvases " id="cart-container">
            <div class="item">
                <div class="factor">
                    <div class="title">
                        <div class="d-flex align-items-center">
                            <img src="/assets/shop-assets/image/shopping-bag.png" class="img-fluid" alt="">
                            <h6 class="font-16">سفارش شما</h6>
                        </div>
                    </div>
                    <div class="d-flex mb-3 align-items-center justify-content-between">
                        <p class="fw-bold mb-0">محصول</p>
                        <p class="fw-bold mb-0">قیمت کل</p>
                    </div>
                    <div
                        class="factor-item p-2 rounded-3 shadow-sm bg-light d-flex align-items-center justify-content-between">
                        <p class="mb-0">هدست مخصوص بازی پابجی</p>
                        <p class="mb-0">1,750,000 تومان</p>
                    </div>
                    <div
                        class="factor-item p-2 rounded-3 shadow-sm bg-light d-flex align-items-center justify-content-between">
                        <p class="mb-0">هدست مخصوص بازی پابجی</p>
                        <p class="mb-0">1,750,000 تومان</p>
                    </div>
                    <div
                        class="factor-item p-2 rounded-3 shadow-sm bg-light d-flex align-items-center justify-content-between">
                        <p class="mb-0 fw-bold">جمع کل:</p>
                        <p class="mb-0">4,000,000 تومان</p>
                    </div>
                    <div class="action mt-3 d-flex align-items-center justify-content-center">
                        <a href="/customer/cart" class="btn border-0 main-color-two-bg rounded-3">سبد خرید</a>
                        <a href="#" class="btn border-0 main-color-one-bg rounded-3 ms-2">تسویه حساب</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="cart-item-template" style="display: none;">
    <div class="item">
        <div class="row gy-2">
            <div class="col-4">
                <div class="image">
                    <img src="/assets/shop-assets/image/product/laptop-1.jpg" alt=""
                        class="img-fluid product-image">
                </div>
            </div>
            <div class="col-8">
                <a href="">
                    <div class="title">
                        <h6 class="font-14 product-title"></h6>
                        <p class="mb-0 text-muted font-12 mt-2 product-meta-title"></p>
                    </div>
                    <div class="price">
                        <p class="text-end mb-2 price-off fw-bold new-price">1,750,000 تومان</p>
                        <p class="text-end price-discount old-price">2,750,000 تومان</p>
                    </div>
                    <div class="action d-flex justify-content-between align-items-center">
                        <div class="remove bg-light  rounded-3">
                            <a href="">
                                <i class="bi bi-x font-25"></i>
                            </a>
                        </div>
                        <div class="counter">
                            <input type="text" name="count" class="counter count" value="1">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

{{-- <div id="cart-summary">
    <div class="item">
        <div class="factor">
            <div class="title">
                <div class="d-flex align-items-center">
                    <img src="/assets/shop-assets/image/shopping-bag.png" class="img-fluid" alt="">
                    <h6 class="font-16">سفارش شما</h6>
                </div>
            </div>
            <div class="d-flex mb-3 align-items-center justify-content-between">
                <p class="fw-bold mb-0">محصول</p>
                <p class="fw-bold mb-0">قیمت کل</p>
            </div>
            <div
                class="factor-item p-2 rounded-3 shadow-sm bg-light d-flex align-items-center justify-content-between">
                <p class="mb-0">هدست مخصوص بازی پابجی</p>
                <p class="mb-0">1,750,000 تومان</p>
            </div>
            <div
                class="factor-item p-2 rounded-3 shadow-sm bg-light d-flex align-items-center justify-content-between">
                <p class="mb-0">هدست مخصوص بازی پابجی</p>
                <p class="mb-0">1,750,000 تومان</p>
            </div>
            <div
                class="factor-item p-2 rounded-3 shadow-sm bg-light d-flex align-items-center justify-content-between">
                <p class="mb-0 fw-bold">جمع کل:</p>
                <p class="mb-0">4,000,000 تومان</p>
            </div>
            <div class="action mt-3 d-flex align-items-center justify-content-center">
                <a href="#" class="btn border-0 main-color-two-bg rounded-3">سبد خرید</a>
                <a href="#" class="btn border-0 main-color-one-bg rounded-3 ms-2">تسویه حساب</a>
            </div>
        </div>
    </div>
</div> --}}

<script>
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
                alert('An error occurred while sending the verification code.');
            });
    }
    const showItems = (itemsArray) => {
        console.log(itemsArray);
        itemsArray.map((item) => {
            console.log('in loope');
            var $template = $('#cart-item-template .item').clone();
            console.log($template);
            $template.find('.product-image').attr('src', `/product/image/${item.product.avatar_image}`);
            $template.find('.product-title').prepend(item.product.title);
            $template.find('.product-meta-title').text(item.product.meta_title);
            $template.find('.discount').text(item.product.discount);
            $template.find('.product-seller').text(item.product.seller);
            $template.find('.product-color').css('background-color', item.product.colorCode);
            $template.find('.product-color-name').text(item.product.colorName);
            $template.find('.product-size').text(item.product.size);
            $template.find('.count').val(item.quantity);
            if (item.product.discount) {
                $template.find('.old-price').text(item.product.price);
                $template.find('.new-price').text(item.product.price - (item.product.discount * item.product
                    .price / 100));
            }
            $('#cart-container').append($template);
        })
    }
    fetchUserCart();
</script>

<!-- end cart canvas -->
