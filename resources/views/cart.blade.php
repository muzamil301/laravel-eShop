@extends ('layouts/master')
@section('title', 'Cart')
@section('body')
    <!-- pages-title-start -->
    <section class="contact-img-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="con-text">
                        <h2 class="page-title">Shopping Cart</h2>
                        <p><a href="javascript:void(0);">Home</a> | Shopping Cart</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pages-title-end -->
    <!-- shopping-cart content section start -->
    <div class="shopping-cart-area s-cart-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="s-cart-all">
                        <div class="cart-form table-responsive">
                            <table id="shopping-cart-table" class="data-table cart-table">
                                <tr>
                                    <th class="low1">Product</th>
                                    <th class="low7">Quantity</th>
                                    <th class="low7">Price</th>
                                    <th class="low7">remove Item</th>
                                </tr>
                                @foreach($orders as $cart)
                                    <tr>
                                        <td class="sop-cart an-shop-cart">
                                            <a href="javascript:void(0);">
                                                <img class="primary-image" alt="" src="{{$cart->imageUrl}}"/>
                                            </a>
                                            <a href="javascript:void(0);">{{$cart->title}}</a>
                                        </td>
                                        <td class="sop-cart an-sh">
                                            <div class="quantity ray">
                                                <h4>{{$cart->quantity}}</h4>
                                            </div>
                                        </td>
                                        <td class="cen">

                                            <span class="amount">{{$cart->price}}&nbsp;x&nbsp;{{$cart->quantity}}&nbsp;=&nbsp; {{$cart->price * $cart->quantity}}</span>
                                        </td>
                                        <td class="sop-cart an-sh">
                                            <form action="/delete-cart" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$cart->orderDetId}}">
                                                <input type="hidden" name="parentId" value="{{$cart->parentId}}">
                                                <button type="submit" class="remove" data-toogle="tooltip">
                                                    <span>x</span>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                @if((Session::has('message')))
                                    <script>
                                        alert('{{ Session::get('message')}}');
                                    </script>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="second-all-class">

                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="sub-total">
                            <table>
                                <tbody>
                                <tr class="cart-subtotal">
                                    <th>Subtotal:</th>
                                    <td>
                                        <span class="amount">${{$price}}.00</span>
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <th>Total:</th>
                                    <td>
                                        <strong>
                                            <span class="amount">${{$price}}.00</span>
                                        </strong>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="wc-proceed-to-checkout">
                            <p class="return-to-shop">
                                <a class="button wc-backward" href="/categories">Continue Shopping</a>
                                <a class="button wc-backward" href="/checkout">Checkout for payment</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shopping-cart  content section end -->
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
@endsection