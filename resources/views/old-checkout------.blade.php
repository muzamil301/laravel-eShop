@extends ('layouts/master')
@section('title', 'Checkout')
@section('body')
    <!-- pages-title-start -->
    <section class="contact-img-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="con-text">
                        <h2 class="page-title">Checkout</h2>
                        <p><a href="javascript:void(0);">Home</a> | Checkout</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pages-title-end -->
    <!-- checkout content section start -->
    <div class="checkout-area">
        <div class="container">

            <?php if(isset($_SESSION['success_msg']) and $_SESSION['success_msg']){echo $_SESSION['success_msg'];$_SESSION['success_msg']='';}?>
            @if(! \Auth::User())

                <div class="row">
                    <div class="col-md-12">
                        <div class="coupon-accordion">
                            <h3>Already a customer? <a href="/login">Click here to login</a></h3>
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">
                <form action="" method="post" id="payment-form" class="all-payment">
                    @csrf
                    <div class="col-md-7 col-sm-12">
                        <div class="text">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                @if(! \Auth::User())
                                    <li role="presentation" class="active ano complete">
                                        <a href="#home" aria-controls="home" role="tab" data-toggle="tab"></a>
                                        <span>Shipping Address</span>
                                    </li>
                                @endif

                                {{--<li role="presentation" class="ano la">--}}
                                {{--<a href="#message" aria-controls="message" role="tab" data-toggle="tab"></a>--}}
                                {{--<span>Complete</span>--}}
                                {{--</li>--}}
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div class="row">
                                        @if(!\Auth::User())
                                            <form action="#">
                                                <div class="checkbox-form">
                                                    <div class="col-md-12">
                                                        <h3 class="checkbox9">SHIPPING ADDRESS DETAILS</h3>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="di-na bs">
                                                            <label class="l-contact">
                                                                Name
                                                                <em>*</em>
                                                            </label>
                                                            <input class="form-control" type="text" required=""
                                                                   name="name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="di-na bs">
                                                            <label class="l-contact">
                                                                Phone
                                                                <em>*</em>
                                                            </label>
                                                            <input class="form-control" type="text" required=""
                                                                   name="phone">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="di-na bs">
                                                            <label class="l-contact">
                                                                Email Adress
                                                                <em>*</em>
                                                            </label>
                                                            <input class="form-control" type="email" required=""
                                                                   name="mail">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="l-contact">
                                                            Province
                                                        </label>
                                                        <div class="di-na bs">
                                                            <input class="form-control" type="text" required=""
                                                                   name="province">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="country-select">
                                                            <label class="l-contact">
                                                                Country
                                                            </label>
                                                            <input class="form-control" type="tel" required=""
                                                                   name="country">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="country-select">
                                                            <label class="l-contact">
                                                                City
                                                            </label>
                                                            <input class="form-control" type="tel" required=""
                                                                   name="city">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label class="l-contact">
                                                            Shipping Address
                                                            <em>*</em>
                                                        </label>
                                                        <div class="di-na bs">
                                                            <input class="form-control" type="text" required=""
                                                                   name="address" placeholder="Street address">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="di-na bs">
                                                            <label class="l-contact">
                                                                Password
                                                                <em>*</em>
                                                            </label>
                                                            <input class="form-control" type="password" required=""
                                                                   name="password">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="di-na bs">
                                                            <label class="l-contact">
                                                                Postcode / ZIP
                                                                <em>*</em>
                                                            </label>
                                                            <input class="form-control" type="text" required=""
                                                                   name="zip">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="top-check-text">
                                                <div class="check-down">
                                                    <h3 class="checkbox9">INFORMATION</h3>
                                                </div>
                                                {{--<div class="ro-content2">--}}
                                                {{--<div class="ro-info2">--}}
                                                {{--<p>--}}
                                                {{--<span>Email Address: </span>--}}
                                                {{--tasnimakter903@yahoo.com--}}
                                                {{--</p>--}}
                                                {{--</div>--}}
                                                {{--<div class="ro-info2">--}}
                                                {{--<p>--}}
                                                {{--<span>Country: </span>--}}
                                                {{--BD--}}
                                                {{--</p>--}}
                                                {{--</div>--}}
                                                {{--</div>--}}
                                            </div>

                                            <div class="all-paymet-border">
                                                <div class="payment-method">
                                                    <div class="pay-top sin-payment">
                                                        <input id="payment_method_1" class="input-radio" type="radio"
                                                               value="cash" checked="checked" name="payment_method">
                                                        <label for="payment_method_1"> CASH ON DELIVERY </label>
                                                        {{--<div class="payment_box payment_method_bacs">--}}
                                                        {{--<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>--}}
                                                        {{--</div>--}}
                                                    </div>
                                                    {{--<div class="pay-top sin-payment">--}}
                                                    {{--<input id="payment_method_2" class="input-radio" type="radio" value="cheque" name="payment_method">--}}
                                                    {{--<label for="payment_method_2"> Cheque Payment  </label>--}}
                                                    {{--<div class="payment_box payment_method_bacs">--}}
                                                    {{--<p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>--}}
                                                    {{--</div>--}}
                                                    {{--</div>--}}
                                                    <div class="pay-top sin-payment">
                                                        <input id="payment_method_3" class="input-radio" type="radio"
                                                               value="card" name="payment_method">
                                                        <label for="payment_method_3">CREDIT CARD</label>
                                                        <div class="payment_box payment_method_bacs">
                                                            {{--<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>--}}
                                                            <script src="https://js.stripe.com/v3/"></script>
                                                            <style>
                                                                /**
* The CSS shown here will not be introduced in the Quickstart guide, but shows
* how you can use CSS to style your Element's container.
*/
                                                                .StripeElement {
                                                                    background-color: white;
                                                                    height: 40px;
                                                                    padding: 10px 12px;
                                                                    border-radius: 4px;
                                                                    border: 1px solid transparent;
                                                                    box-shadow: 0 1px 3px 0 #e6ebf1;
                                                                    -webkit-transition: box-shadow 150ms ease;
                                                                    transition: box-shadow 150ms ease;
                                                                }

                                                                .StripeElement--focus {
                                                                    box-shadow: 0 1px 3px 0 #cfd7df;
                                                                }

                                                                .StripeElement--invalid {
                                                                    border-color: #fa755a;
                                                                }

                                                                .StripeElement--webkit-autofill {
                                                                    background-color: #fefde5 !important;
                                                                }
                                                            </style>
                                                            {{--<form action="/charge" method="post" id="payment-form">--}}
                                                                <div class="form-row">
                                                                    <label for="card-element">
                                                                        Credit or debit card
                                                                    </label>
                                                                    <div id="card-element">
                                                                        <!-- A Stripe Element will be inserted here. -->
                                                                    </div>

                                                                    <!-- Used to display form errors. -->
                                                                    <div id="card-errors" role="alert"></div>
                                                                </div>
                                                                <input type="hidden" name="totalAmount" value="20"/>
                                                                <input type="hidden" name="stripeToken" id="stripeToken"/>

                                                                {{--<button>Submit Payment</button>--}}
                                                            {{--</form>--}}

                                                            <script>
                                                                // Create a Stripe client.
                                                                var stripe = Stripe('pk_test_9yjqG42QD7rQDV54sb99YEbE');

                                                                // Create an instance of Elements.
                                                                var elements = stripe.elements();

                                                                // Custom styling can be passed to options when creating an Element.
                                                                // (Note that this demo uses a wider set of styles than the guide below.)
                                                                var style = {
                                                                    base: {
                                                                        color: '#32325d',
                                                                        lineHeight: '18px',
                                                                        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                                                                        fontSmoothing: 'antialiased',
                                                                        fontSize: '16px',
                                                                        '::placeholder': {
                                                                            color: '#aab7c4'
                                                                        }
                                                                    },
                                                                    invalid: {
                                                                        color: '#fa755a',
                                                                        iconColor: '#fa755a'
                                                                    }
                                                                };

                                                                // Create an instance of the card Element.
                                                                var card = elements.create('card', {style: style});

                                                                // Add an instance of the card Element into the `card-element` <div>.
                                                                card.mount('#card-element');

                                                                // Handle real-time validation errors from the card Element.
                                                                card.addEventListener('change', function (event) {
                                                                    var displayError = document.getElementById('card-errors');
                                                                    if (event.error) {
                                                                        displayError.textContent = event.error.message;
                                                                    } else {
                                                                        displayError.textContent = '';
                                                                    }
                                                                });

                                                                // Handle form submission.
                                                                var form = document.getElementById('payment-form');
                                                                form.addEventListener('submit', function (event) {
                                                                    event.preventDefault();
                                                                    
                                                                    if($('[name="payment_method"]').val()=='cash'){
                                                                        form.submit();
                                                                    }
                                                                    stripe.createToken(card).then(function (result) {
                                                                        if (result.error) {
                                                                            // Inform the user if there was an error.
                                                                            var errorElement = document.getElementById('card-errors');
                                                                            errorElement.textContent = result.error.message;
                                                                        } else {


                                                                            console.log(result.token);
                                                                            document.getElementById('stripeToken').value = result.token.id;
                                                                            form.submit();
                                                                            // Send the token to your server.
//                                                                            stripeTokenHandler(result.token);
                                                                        }
                                                                    });
                                                                });
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="orderId">
                                                <div class="form-row place-order">
                                                    <input class="button alt" type="submit" value="Place order">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    {{--<div class="row">--}}
                                    {{--<div class="col-md-12 text-center">--}}
                                    {{--<p class="checkout-coupon">--}}
                                    {{--<a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Continue</a>--}}
                                    {{--<input type="submit" value="CONTINUE">--}}
                                    {{--</p>--}}
                                    {{--</div>--}}
                                    {{----}}
                                    {{--</div>--}}
                                </div>

                                {{--<div role="tabpanel" class="tab-pane @if(\Auth::User()) active @endif" id="profile">--}}
                                {{--<div class="row">--}}
                                {{--<div class="col-md-12">--}}
                                {{--<div class="top-check-text">--}}
                                {{--<div class="check-down">--}}
                                {{--<h3 class="checkbox9">INFORMATION</h3>--}}
                                {{--<span><a class="ro-edit-customer-info" href="javascript:void(0);">Edit</a></span>--}}
                                {{--</div>--}}
                                {{--<div class="ro-content2">--}}
                                {{--<div class="ro-info2">--}}
                                {{--<p>--}}
                                {{--<span>Email Address: </span>--}}
                                {{--tasnimakter903@yahoo.com--}}
                                {{--</p>--}}
                                {{--</div>--}}
                                {{--<div class="ro-info2">--}}
                                {{--<p>--}}
                                {{--<span>Country: </span>--}}
                                {{--BD--}}
                                {{--</p>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="all-paymet-border">--}}
                                {{--<div class="payment-method">--}}
                                {{--<div class="pay-top sin-payment">--}}
                                {{--<input id="payment_method_1" class="input-radio" type="radio" value="cash" checked="checked" name="payment_method">--}}
                                {{--<label for="payment_method_1"> CASH ON DELIVERY </label>--}}
                                {{--<div class="payment_box payment_method_bacs">--}}
                                {{--<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="pay-top sin-payment">--}}
                                {{--<input id="payment_method_2" class="input-radio" type="radio" value="cheque" name="payment_method">--}}
                                {{--<label for="payment_method_2"> Cheque Payment  </label>--}}
                                {{--<div class="payment_box payment_method_bacs">--}}
                                {{--<p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="pay-top sin-payment">--}}
                                {{--<input id="payment_method_3" class="input-radio" type="radio" value="card" name="payment_method">--}}
                                {{--<label for="payment_method_3">CREDIT CARD</label>--}}
                                {{--<div class="payment_box payment_method_bacs">--}}
                                {{--<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-row place-order">--}}
                                {{--<input class="button alt" type="submit" value="Place order" >--}}
                                {{--</div>--}}
                                {{--</div>--}}

                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div role="tabpanel" class="tab-pane" id="message">--}}
                                {{--<div class="last-check">--}}
                                {{--<h3 class="checkbox9">complete</h3>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </form>
                <div class="col-md-5 col-sm-12">
                    <div class="ro-checkout-summary">
                        <div class="ro-title">
                            <h3 class="checkbox9">ORDER SUMMARY</h3>
                        </div>
                        <div class="ro-footer">
                            <div>
                                <p>
                                    Subtotal
                                        <span>
                                            <span class="amount">$99.00</span>
                                        </span>
                                </p>
                                <div class="ro-divide"></div>
                            </div>
                            <div class="shipping">
                                <p> Shipping </p>
                                <div class="ro-shipping-method">
                                    <p>
                                        Shipping (Free)
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="ro-divide"></div>
                            </div>
                            <div class="order-total">
                                <p>
                                    Total
                                        <span>
                                            <strong>
                                                <span class="amount">$99.00</span>
                                            </strong>
                                        </span>
                                </p>
                            </div>
                            <div>
                                <p>
                                    Payment Due
                                        <span>
                                            <strong>
                                                <span class="amount">$99.00</span>
                                            </strong>
                                        </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout  content section end -->
    <!-- quick view start -->
    <div class="quick-view modal fade in" id="quick-view">
        <div class="container">
            <div class="row">
                <div id="view-gallery" class="owl-carousel product-slider owl-theme">
                    <div class="col-xs-12">
                        <div class="d-table">
                            <div class="d-tablecell">
                                <div class="modal-dialog">
                                    <div class="main-view modal-content">
                                        <div class="modal-footer" data-dismiss="modal">
                                            <span>x</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-5">
                                                <div class="quick-image">
                                                    <div class="single-quick-image tab-content text-center">
                                                        <div class="tab-pane  fade in active" id="sin-pro-1">
                                                            <img src="img/quick-view/10.jpg" alt=""/>
                                                        </div>
                                                        <div class="tab-pane fade in" id="sin-pro-2">
                                                            <img src="img/quick-view/10.jpg" alt=""/>
                                                        </div>
                                                        <div class="tab-pane fade in" id="sin-pro-3">
                                                            <img src="img/quick-view/10.jpg" alt=""/>
                                                        </div>
                                                        <div class="tab-pane fade in" id="sin-pro-4">
                                                            <img src="img/quick-view/10.jpg" alt=""/>
                                                        </div>
                                                    </div>
                                                    <div class="quick-thumb">
                                                        <div class="nav nav-tabs">
                                                            <ul>
                                                                <li><a data-toggle="tab" href="#sin-pro-1"> <img
                                                                                src="img/quick-view/10.jpg"
                                                                                alt="quick view"/> </a></li>
                                                                <li><a data-toggle="tab" href="#sin-pro-2"> <img
                                                                                src="img/quick-view/10.jpg"
                                                                                alt="quick view"/> </a></li>
                                                                <li><a data-toggle="tab" href="#sin-pro-3"> <img
                                                                                src="img/quick-view/10.jpg"
                                                                                alt="quick view"/> </a></li>
                                                                <li><a data-toggle="tab" href="#sin-pro-4"> <img
                                                                                src="img/quick-view/10.jpg"
                                                                                alt="quick view"/> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <div class="quick-right">
                                                    <div class="quick-right-text">
                                                        <h3><strong>product name title</strong></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <a href="javascript:void(0);">06 Review</a>
                                                            <a href="javascript:void(0);">Add review</a>
                                                        </div>
                                                        <div class="amount">
                                                            <h4>$65.00</h4>
                                                        </div>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has beenin the stand ard
                                                            dummy text ever since the 1500s, when an unknown printer
                                                            took a galley of type and scrames bled it make a type
                                                            specimen book. It has survived not only five centuries, but
                                                            also the leap into electronic type setting, remaining
                                                            essentially unchanged It was popularised in the 1960s with
                                                            the release of Letraset sheets containing Lorem Ipsum
                                                            passages.</p>
                                                        <div class="row m-p-b">
                                                            <div class="col-sm-12 col-md-6">
                                                                <div class="por-dse responsive-strok clearfix">
                                                                    <ul>
                                                                        <li><span>Availability</span><strong>:</strong>
                                                                            In stock
                                                                        </li>
                                                                        <li><span>Condition</span><strong>:</strong> New
                                                                            product
                                                                        </li>
                                                                        <li><span>Category</span><strong>:</strong> <a
                                                                                    href="javascript:void(0);">Men</a>
                                                                            <a href="javascript:void(0);">Fashion</a> <a
                                                                                    href="javascript:void(0);">Shirt</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6">
                                                                <div class="por-dse color">
                                                                    <ul>
                                                                        <li><span>color</span><strong>:</strong> <a
                                                                                    href="javascript:void(0);">Red</a>
                                                                            <a href="javascript:void(0);">Green</a> <a
                                                                                    href="javascript:void(0);">Blue</a>
                                                                            <a href="javascript:void(0);">Orange</a>
                                                                        </li>
                                                                        <li><span>size</span><strong>:</strong> <a
                                                                                    href="javascript:void(0);">SL</a> <a
                                                                                    href="javascript:void(0);">SX</a> <a
                                                                                    href="javascript:void(0);">M</a> <a
                                                                                    href="javascript:void(0);">XL</a>
                                                                        </li>
                                                                        <li><span>tag</span><strong>:</strong> <a
                                                                                    href="javascript:void(0);">Men</a>
                                                                            <a href="javascript:void(0);">Fashion</a> <a
                                                                                    href="javascript:void(0);">Shirt</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dse-btn">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6">
                                                                    <div class="por-dse clearfix">
                                                                        <ul>
                                                                            <li class="share-btn qty clearfix"><span>quantity</span>
                                                                                <form action="#" method="POST">
                                                                                    <div class="plus-minus">
                                                                                        <a class="dec qtybutton">-</a>
                                                                                        <input type="text" value="02"
                                                                                               name="qtybutton"
                                                                                               class="plus-minus-box">
                                                                                        <a class="inc qtybutton">+</a>
                                                                                    </div>
                                                                                </form>
                                                                            </li>
                                                                            <li class="share-btn clearfix">
                                                                                <span>share</span>
                                                                                <a href="javascript:void(0);"><i
                                                                                            class="fa fa-facebook"></i></a>
                                                                                <a href="javascript:void(0);"><i
                                                                                            class="fa fa-twitter"></i></a>
                                                                                <a href="javascript:void(0);"><i
                                                                                            class="fa fa-google-plus"></i></a>
                                                                                <a href="javascript:void(0);"><i
                                                                                            class="fa fa-linkedin"></i></a>
                                                                                <a href="javascript:void(0);"><i
                                                                                            class="fa fa-instagram"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6">
                                                                    <div class="por-dse clearfix responsive-othre">
                                                                        <ul class="other-btn">
                                                                            <li><a href="javascript:void(0);"><i
                                                                                            class="fa fa-heart"></i></a>
                                                                            </li>
                                                                            <li><a href="javascript:void(0);"><i
                                                                                            class="fa fa-refresh"></i></a>
                                                                            </li>
                                                                            <li><a href="javascript:void(0);"><i
                                                                                            class="fa fa-envelope-o"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="por-dse add-to">
                                                                        <a href="javascript:void(0);">add to cart</a>
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
                            </div>
                        </div>
                    </div>
                    <!-- single-product item end -->
                    <div class="col-xs-12">
                        <div class="d-table">
                            <div class="d-tablecell">
                                <div class="modal-dialog">
                                    <div class="main-view modal-content">
                                        <div class="modal-footer" data-dismiss="modal">
                                            <span>x</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-5">
                                                <div class="quick-image">
                                                    <div class="single-quick-image tab-content text-center">
                                                        <div class="tab-pane  fade in active" id="sin-pro-5">
                                                            <img src="img/quick-view/10.jpg" alt=""/>
                                                        </div>
                                                        <div class="tab-pane fade in" id="sin-pro-6">
                                                            <img src="img/quick-view/10.jpg" alt=""/>
                                                        </div>
                                                        <div class="tab-pane fade in" id="sin-pro-7">
                                                            <img src="img/quick-view/10.jpg" alt=""/>
                                                        </div>
                                                        <div class="tab-pane fade in" id="sin-pro-8">
                                                            <img src="img/quick-view/10.jpg" alt=""/>
                                                        </div>
                                                    </div>
                                                    <div class="quick-thumb">
                                                        <div class="nav nav-tabs">
                                                            <ul>
                                                                <li><a data-toggle="tab" href="#sin-pro-5"> <img
                                                                                src="img/quick-view/10.jpg"
                                                                                alt="quick view"/> </a></li>
                                                                <li><a data-toggle="tab" href="#sin-pro-6"> <img
                                                                                src="img/quick-view/10.jpg"
                                                                                alt="quick view"/> </a></li>
                                                                <li><a data-toggle="tab" href="#sin-pro-7"> <img
                                                                                src="img/quick-view/10.jpg"
                                                                                alt="quick view"/> </a></li>
                                                                <li><a data-toggle="tab" href="#sin-pro-8"> <img
                                                                                src="img/quick-view/10.jpg"
                                                                                alt="quick view"/> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <div class="quick-right">
                                                    <div class="quick-right-text">
                                                        <h3><strong>product name title</strong></h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <a href="javascript:void(0);">06 Review</a>
                                                            <a href="javascript:void(0);">Add review</a>
                                                        </div>
                                                        <div class="amount">
                                                            <h4>$65.00</h4>
                                                        </div>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has beenin the stand ard
                                                            dummy text ever since the 1500s, when an unknown printer
                                                            took a galley of type and scrames bled it make a type
                                                            specimen book. It has survived not only five centuries, but
                                                            also the leap into electronic type setting, remaining
                                                            essentially unchanged It was popularised in the 1960s with
                                                            the release of Letraset sheets containing Lorem Ipsum
                                                            passages.</p>
                                                        <div class="row m-p-b">
                                                            <div class="col-sm-6">
                                                                <div class="por-dse">
                                                                    <ul>
                                                                        <li><span>Availability</span><strong>:</strong>
                                                                            In stock
                                                                        </li>
                                                                        <li><span>Condition</span><strong>:</strong> New
                                                                            product
                                                                        </li>
                                                                        <li><span>Category</span><strong>:</strong> <a
                                                                                    href="javascript:void(0);">Men</a>
                                                                            <a href="javascript:void(0);">Fashion</a> <a
                                                                                    href="javascript:void(0);">Shirt</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="por-dse color">
                                                                    <ul>
                                                                        <li><span>color</span><strong>:</strong> <a
                                                                                    href="javascript:void(0);">Red</a>
                                                                            <a href="javascript:void(0);">Green</a> <a
                                                                                    href="javascript:void(0);">Blue</a>
                                                                            <a href="javascript:void(0);">Orange</a>
                                                                        </li>
                                                                        <li><span>size</span><strong>:</strong> <a
                                                                                    href="javascript:void(0);">SL</a> <a
                                                                                    href="javascript:void(0);">SX</a> <a
                                                                                    href="javascript:void(0);">M</a> <a
                                                                                    href="javascript:void(0);">XL</a>
                                                                        </li>
                                                                        <li><span>tag</span><strong>:</strong> <a
                                                                                    href="javascript:void(0);">Men</a>
                                                                            <a href="javascript:void(0);">Fashion</a> <a
                                                                                    href="javascript:void(0);">Shirt</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dse-btn">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="por-dse">
                                                                        <ul>
                                                                            <li class="share-btn qty clearfix"><span>quantity</span>
                                                                                <form action="#" method="POST">
                                                                                    <div class="plus-minus">
                                                                                        <a class="dec qtybutton">-</a>
                                                                                        <input type="text" value="02"
                                                                                               name="qtybutton"
                                                                                               class="plus-minus-box">
                                                                                        <a class="inc qtybutton">+</a>
                                                                                    </div>
                                                                                </form>
                                                                            </li>
                                                                            <li class="share-btn clearfix">
                                                                                <span>share</span>
                                                                                <a href="javascript:void(0);"><i
                                                                                            class="fa fa-facebook"></i></a>
                                                                                <a href="javascript:void(0);"><i
                                                                                            class="fa fa-twitter"></i></a>
                                                                                <a href="javascript:void(0);"><i
                                                                                            class="fa fa-google-plus"></i></a>
                                                                                <a href="javascript:void(0);"><i
                                                                                            class="fa fa-linkedin"></i></a>
                                                                                <a href="javascript:void(0);"><i
                                                                                            class="fa fa-instagram"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="por-dse clearfix">
                                                                        <ul class="other-btn">
                                                                            <li><a href="javascript:void(0);"><i
                                                                                            class="fa fa-heart"></i></a>
                                                                            </li>
                                                                            <li><a href="javascript:void(0);"><i
                                                                                            class="fa fa-refresh"></i></a>
                                                                            </li>
                                                                            <li><a href="javascript:void(0);"><i
                                                                                            class="fa fa-envelope-o"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="por-dse add-to">
                                                                        <a href="javascript:void(0);">add to cart</a>
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
                            </div>
                        </div>
                    </div>
                    <!-- single-product item end -->
                </div>
            </div>
        </div>
    </div>
    <!-- quick view end -->
    <!-- brand section start -->
    <section class="section-padding-top">
        <div class="brand-logo">
            <div class="barnd-bg">
                <div class="container">
                    <div class="row text-center">
                        <div id="brand-logo" class="re-owl-carousel21 owl-carousel product-slider owl-theme">
                            <div class="col-xs-12">
                                <div class="single-brand">
                                    <a href="javascript:void(0);"><img src="img/brand/1.png" alt=""/></a>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="single-brand">
                                    <a href="javascript:void(0);"><img src="img/brand/2.png" alt=""/></a>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="single-brand">
                                    <a href="javascript:void(0);"><img src="img/brand/3.png" alt=""/></a>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="single-brand">
                                    <a href="javascript:void(0);"><img src="img/brand/4.png" alt=""/></a>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="single-brand">
                                    <a href="javascript:void(0);"><img src="img/brand/5.png" alt=""/></a>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="single-brand">
                                    <a href="javascript:void(0);"><img src="img/brand/6.png" alt=""/></a>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="single-brand">
                                    <a href="javascript:void(0);"><img src="img/brand/1.png" alt=""/></a>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="single-brand">
                                    <a href="javascript:void(0);"><img src="img/brand/3.png" alt=""/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- brand section end -->
    <!-- service section start -->
    <section class="re-section-padding">
        <div class="service section-padding">
            <div class="container">
                <div class="row text-center">
                    <div class="col-xs-12 col-sm-4">
                        <div class="single-service">
                            <i class="pe-7s-plane"></i>
                            <h4>Free Shipping</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="single-service res-single">
                            <i class="pe-7s-headphones"></i>
                            <h4>Customer Support</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="single-service">
                            <i class="pe-7s-refresh"></i>
                            <h4>15 days money back</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service section end -->
@endsection