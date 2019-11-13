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
    <?php if(isset($_SESSION['success_msg']) and $_SESSION['success_msg']){$order_msg=1;echo '<br><br><div class="container"><div class="alert alert-success">'.$_SESSION['success_msg'].'</div></div>';$_SESSION['success_msg']='';}?>
    @if(isset($is_cart))
    <div class="checkout-area">
        <div class="container">

            @if(! \Auth::User())
                <div class="row">
                    <div class="col-md-12">
                        <div class="coupon-accordion">
                            <h3>Already a customer? <span id="showcoupon3">Click here to login</span></h3>
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
                                        <span>Your Details</span>
                                    </li>
                                @endif
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
                                                    @if(!\Auth::User())
                                                    <h3 class="checkbox9">Please Choose payment method</h3>
                                                    @else
                                                    <h3 class="checkbox9">Please choose method of payment (You are logged in)</h3>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="all-paymet-border">
                                                <div class="payment-method">
                                                    <div class="pay-top sin-payment">
                                                        <input id="payment_method_1" class="input-radio" type="radio"
                                                               value="cash" checked="checked" name="payment_method">
                                                        <label for="payment_method_1"> CASH ON DELIVERY </label>

                                                    </div>
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
                                                                <input type="hidden" name="totalAmount" value="{{$price}}"/>
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
                                </div>
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
                                            <span class="amount">{{$price}}.00</span>
                                        </span>
                                </p>
                                <div class="ro-divide"></div>
                            </div>
                            <div class="shipping">
                                <p> Shipping </p>
                                <div class="ro-shipping-method">
                                    <p>
                                        Shipping Local Pickup (Free)
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
                                                <span class="amount">{{$price}}.00</span>
                                            </strong>
                                        </span>
                                </p>
                            </div>
                            <div>
                                <p>
                                    Payment Due
                                        <span>
                                            <strong>
                                                <span class="amount">{{$price}}.00</span>
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
    @elseif(!isset($order_msg))
        <br><br>
        <div class="container">
            <div class="alert alert-warning">
                <strong>Warning!</strong> Please add items to your cat then come back
            </div>
        </div>

     @endif

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