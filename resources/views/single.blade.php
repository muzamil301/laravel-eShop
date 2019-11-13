@extends ('layouts/master')
@section('title')
    {{$product ->title}}
@endsection
@section('body')
    <!-- pages-title-start -->
    <section class="contact-img-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="con-text">
                        <h2 class="page-title">{{$product->title}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pages-title-end -->
    <!-- single peoduct content section start -->
    <section class="single-product-area sit">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 none-si-pro">
                            <div class="pro-img-tab-content tab-content">
                                <div class="tab-pane active" id="image-1">
                                    <div class="simpleLens-big-image-container">
                                        <a class="simpleLens-lens-image" data-lightbox="roadtrip"
                                           data-lens-image="{{asset($product->imgUrl)}}"
                                           href="{{asset($product->imgUrl)}}">
                                            <img src="{{asset($product->imgUrl)}}" alt="" class="simpleLens-big-image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-img-tab-slider indicator-style2">
                                <div class="item" style="width: 102px;"><a href="#image-1" data-toggle="tab"><img
                                                src="{{asset($product->imgUrl)}}" alt=""/></a></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="cras">
                                <div class="product-name">
                                    <h2>{{$product->title}}</h2>
                                </div>
                                <p class="availability in-stock">
                                    Brand: {{$product->brandName}}
                                </p>
                                <p class="availability in-stock2">

                                    Availability:
                                    @if($product->quantity < 1)
                                        <span class="text-danger">Out of stock</span>
                                    @elseif($product->quantity < 30)
                                        {{$product->quantity}} Remaining
                                    @else
                                        In Stock
                                    @endif

                                </p>
                                <div class="pre-box">
                                    <span class="special-price">Rs: {{$product->price}}.00</span>
                                </div>
                                @if($product->quantity >= 1)
                                <div class="add-to-box1">
                                    <div class="add-to-box add-to-box2">
                                        <div class="add-to-cart">
                                            <form method="post" action="">
                                                @csrf
                                                <div class="input-content">
                                                    <label>Quantity:</label>
                                                    <div class="quantity">
                                                        <div class="cart-plus-minus">
                                                            <input type="text" value="1"  name="qtybutton"
                                                                   class="cart-plus-minus-box" maxlength="{{$product->quantity}}">

                                                        </div>
                                                        <input type="hidden" value="{{$product->subCategoryId}}" name="subcatid">
                                                        <input type="hidden" value="{{$product->categoryId}}" name="catid">
                                                        <input type="hidden" value="{{$product->price}}" name="price">

                                                    </div>
                                                </div>
                                                <div class="product-icon">

                                                    @csrf
                                                    <button type="submit">
                                                        <i class="fa fa-shopping-cart wow bounceInDown"></i>
                                                    </button>
                                                </div>
                                                @if(session()->has('message'))
                                                    <div class="clearfix"></div>
                                                    <div class="clearfix alert alert-success">
                                                        <h5 style="margin: 0;">{{ session()->get('message') }}</h5>
                                                    </div>
                                                    <style>
                                                        .alert h5{
                                                            text-transform: none;
                                                        }
                                                    </style>
                                                @endif
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="text">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#description" aria-controls="description" role="tab" data-toggle="tab">Product
                                            Description</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content tab-con2">
                                    <div role="tabpanel" class="tab-pane active" id="description">
                                        {!!$product->decription!!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    {{--<div class="single-sidebar">
                        <div class="single-sidebar an-shop">
                            <h3 class="wg-title">BEST SELLER</h3>
                            <ul>
                               <li class="b-none7">
                                    <div class="tb-recent-thumbb">
                                        <a href="javascript:void(0);">
                                            <img class="attachment" src="img/products/6.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="tb-recentb7">
                                        <div class="tb-beg">
                                            <a href="javascript:void(0);">Lambskin Shoe</a>
                                        </div>
                                        <div class="tb-product-price font-noraure-3">
                                            <span class="amount">$180.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="b-none7">
                                    <div class="tb-recent-thumbb">
                                        <a href="javascript:void(0);">
                                            <img class="attachment" src="img/products/10.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="tb-recentb7">
                                        <div class="tb-beg">
                                            <a href="javascript:void(0);">Lambskin Shoe</a>
                                        </div>
                                        <div class="tb-product-price font-noraure-3">
                                            <span class="amount">$180.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="b-none7">
                                    <div class="tb-recent-thumbb">
                                        <a href="javascript:void(0);">
                                            <img class="attachment" src="img/products/8.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="tb-recentb7">
                                        <div class="tb-beg">
                                            <a href="javascript:void(0);">Lambskin Shoe</a>
                                        </div>
                                        <div class="tb-product-price font-noraure-3">
                                            <span class="amount">$180.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="b-none7">
                                    <div class="tb-recent-thumbb">
                                        <a href="javascript:void(0);">
                                            <img class="attachment" src="img/products/9.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="tb-recentb7">
                                        <div class="tb-beg">
                                            <a href="javascript:void(0);">Lambskin Shoe</a>
                                        </div>
                                        <div class="tb-product-price font-noraure-3">
                                            <span class="amount">$180.00</span>
                                        </div>
                                    </div>
                                </li>
                           </ul>
                        </div>
                        <div class="ro-info-box-wrap tpl3 st">
                            <div class="tb-image">
                                <img src="img/products/a1.jpg" alt="">
                            </div>
                            <div class="tb-content">
                                <div class="tb-content-inner an-inner">
                                    <h5>WOMEN'S FASHION</h5>
                                    <h3>MID SEASON SALE</h3>
                                    <h6>
                                        <a href="javascript:void(0);">SHOP NOW</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    --}}{{--</div>--}}{{--
                </div>--}}
                </div>
            </div>
        </div>
    </section>

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