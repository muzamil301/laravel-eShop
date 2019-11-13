@extends ('layouts/master')
@php
    $title = ucwords(str_replace('-', ' ', last(request()->segments())));
@endphp
@section('title')
    {{$title}}
@endsection
@section('body')

    <!-- pages-title-start -->
    <section class="contact-img-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="con-text">
                        <h2 class="page-title">{{$title}}</h2>
                         <h2 class="page-title"></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pages-title-end -->
    <!-- shop-style content section start -->
    <section class="pages products-page section-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="features-tab">

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <div class="row">
                                            <div class="shop-tab">
                                                <!-- single-product start -->
                                                @foreach($sub_categories as $sub_category)
                                                    <div class="col-md-3 col-sm-6 col-xs-12 matchHeight">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <div class="pro-type">
                                                                    @php
                                                                        $created = new Carbon($sub_category->created_at);
                                                                        $now = Carbon::now();
                                                                    @endphp
                                                                    @if($now->diffInDays($created) < 5)
                                                                        <span>new</span>
                                                                    @endif
                                                                </div>
                                                                @php
                                                                    $title = strtolower(str_replace(' ', '-', $sub_category -> title));
                                                                @endphp
                                                                <a href="/products/{{$sub_category -> id}}/{{$title}}">
                                                                    <img src="{{asset($sub_category->imgUrl)}}" alt="{{$sub_category->title}}" />
                                                                </a>
                                                            </div>
                                                            <div class="product-dsc">
                                                                <h3><a href="/products/{{$sub_category -> id}}/{{$title}}">{{$sub_category->title}}</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="profile">
                                        <div class="row">
                                            <div class="li-item">
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="tb-product-item-inner tb2 pct-last">
                                                        <div class="pro-type">
                                                            <span>new</span>
                                                        </div>
                                                        <div class="re-img">
                                                            <a href="javascript:void(0);"><img alt="" src="{{asset('img/products/1.jpg')}}"></a>
                                                        </div>
                                                        <div class="actions-btn">
                                                            <a data-original-title="Quick View" data-toggle="modal"
                                                               data-trigger="hover" data-target="#quick-view"
                                                               data-placement="top" href="javascript:void(0);">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    <div class="f-fix">
                                                        <div class="tb-beg">
                                                            <a href="javascript:void(0);">Vintage Shoulder Bag</a>
                                                        </div>
                                                        <div class="tb-product-wrap-price-rating">
                                                            <div class="tb-product-price font-noraure-3">
                                                                <span class="amount2 ana">$79.00 - </span>
                                                                <span class="amount2 ana">$100.00</span>
                                                            </div>
                                                        </div>
                                                        <p class="desc">Lorem ipsum dolor sit amet, consectetuer
                                                            adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                                            laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                                            minim veniam, quis nostrud exerci tation ullamcorper
                                                            suscipit lobortis nisl ut aliquip ex ea commodo </p>
                                                        <div class="last-cart l-mrgn ns">
                                                            <a class="las4" href="javascript:void(0);">Add To Cart</a>
                                                        </div>
                                                        <div class="tb-product-btn">
                                                            <a href="javascript:void(0);">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <i class="fa fa-heart"></i>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <i class="fa fa-retweet"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="li-item">
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="tb-product-item-inner tb2 pct-last">
                                                        <div class="pro-type">
                                                            <span>sale</span>
                                                        </div>
                                                        <div class="re-img">
                                                            <a href="javascript:void(0);"><img alt="" src="{{asset('img/products/2.jpg')}}"></a>
                                                        </div>
                                                        <div class="actions-btn">
                                                            <a data-original-title="Quick View" data-toggle="modal"
                                                               data-trigger="hover" data-target="#quick-view"
                                                               data-placement="top" href="javascript:void(0);">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    <div class="f-fix">
                                                        <div class="tb-beg">
                                                            <a href="javascript:void(0);">Vintage Shoulder Bag</a>
                                                        </div>
                                                        <div class="tb-product-wrap-price-rating">
                                                            <div class="tb-product-price font-noraure-3">
                                                                <span class="amount2 ana">$79.00 - </span>
                                                                <span class="amount2 ana">$100.00</span>
                                                            </div>
                                                        </div>
                                                        <p class="desc">Lorem ipsum dolor sit amet, consectetuer
                                                            adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                                            laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                                            minim veniam, quis nostrud exerci tation ullamcorper
                                                            suscipit lobortis nisl ut aliquip ex ea commodo </p>
                                                        <div class="last-cart l-mrgn ns">
                                                            <a class="las4" href="javascript:void(0);">Add To Cart</a>
                                                        </div>
                                                        <div class="tb-product-btn">
                                                            <a href="javascript:void(0);">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <i class="fa fa-heart"></i>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <i class="fa fa-retweet"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="li-item">
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="tb-product-item-inner tb2 pct-last">
                                                        <div class="pro-type">
                                                            <span>new</span>
                                                        </div>
                                                        <div class="re-img">
                                                            <a href="javascript:void(0);"><img alt="" src="{{asset('img/products/3.jpg')}}"></a>
                                                        </div>
                                                        <div class="actions-btn">
                                                            <a data-original-title="Quick View" data-toggle="modal"
                                                               data-trigger="hover" data-target="#quick-view"
                                                               data-placement="top" href="javascript:void(0);">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    <div class="f-fix">
                                                        <div class="tb-beg">
                                                            <a href="javascript:void(0);">Vintage Shoulder Bag</a>
                                                        </div>
                                                        <div class="tb-product-wrap-price-rating">
                                                            <div class="tb-product-price font-noraure-3">
                                                                <span class="amount2 ana">$79.00 - </span>
                                                                <span class="amount2 ana">$100.00</span>
                                                            </div>
                                                        </div>
                                                        <p class="desc">Lorem ipsum dolor sit amet, consectetuer
                                                            adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                                            laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                                            minim veniam, quis nostrud exerci tation ullamcorper
                                                            suscipit lobortis nisl ut aliquip ex ea commodo </p>
                                                        <div class="last-cart l-mrgn ns">
                                                            <a class="las4" href="javascript:void(0);">Add To Cart</a>
                                                        </div>
                                                        <div class="tb-product-btn">
                                                            <a href="javascript:void(0);">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <i class="fa fa-heart"></i>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <i class="fa fa-retweet"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="li-item">
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="tb-product-item-inner tb2 pct-last">
                                                        <div class="pro-type">
                                                            <span>sale</span>
                                                        </div>
                                                        <div class="re-img">
                                                            <a href="javascript:void(0);"><img alt="" src="{{asset('img/products/4.jpg')}}"></a>
                                                        </div>
                                                        <div class="actions-btn">
                                                            <a data-original-title="Quick View" data-toggle="modal"
                                                               data-trigger="hover" data-target="#quick-view"
                                                               data-placement="top" href="javascript:void(0);">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    <div class="f-fix">
                                                        <div class="tb-beg">
                                                            <a href="javascript:void(0);">Vintage Shoulder Bag</a>
                                                        </div>
                                                        <div class="tb-product-wrap-price-rating">
                                                            <div class="tb-product-price font-noraure-3">
                                                                <span class="amount2 ana">$79.00 - </span>
                                                                <span class="amount2 ana">$100.00</span>
                                                            </div>
                                                        </div>
                                                        <p class="desc">Lorem ipsum dolor sit amet, consectetuer
                                                            adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                                            laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                                            minim veniam, quis nostrud exerci tation ullamcorper
                                                            suscipit lobortis nisl ut aliquip ex ea commodo </p>
                                                        <div class="last-cart l-mrgn ns">
                                                            <a class="las4" href="javascript:void(0);">Add To Cart</a>
                                                        </div>
                                                        <div class="tb-product-btn">
                                                            <a href="javascript:void(0);">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <i class="fa fa-heart"></i>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <i class="fa fa-retweet"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="li-item">
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="tb-product-item-inner tb2 pct-last">
                                                        <div class="re-img">
                                                            <a href="javascript:void(0);"><img alt="" src="{{asset('img/products/5.jpg')}}"></a>
                                                        </div>
                                                        <div class="actions-btn">
                                                            <a data-original-title="Quick View" data-toggle="modal"
                                                               data-trigger="hover" data-target="#quick-view"
                                                               data-placement="top" href="javascript:void(0);">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                    <div class="f-fix">
                                                        <div class="tb-beg">
                                                            <a href="javascript:void(0);">Vintage Shoulder Bag</a>
                                                        </div>
                                                        <div class="tb-product-wrap-price-rating">
                                                            <div class="tb-product-price font-noraure-3">
                                                                <span class="amount2 ana">$79.00 - </span>
                                                                <span class="amount2 ana">$100.00</span>
                                                            </div>
                                                        </div>
                                                        <p class="desc">Lorem ipsum dolor sit amet, consectetuer
                                                            adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                                            laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                                            minim veniam, quis nostrud exerci tation ullamcorper
                                                            suscipit lobortis nisl ut aliquip ex ea commodo </p>
                                                        <div class="last-cart l-mrgn ns">
                                                            <a class="las4" href="javascript:void(0);">Add To Cart</a>
                                                        </div>
                                                        <div class="tb-product-btn">
                                                            <a href="javascript:void(0);">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <i class="fa fa-heart"></i>
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                <i class="fa fa-retweet"></i>
                                                            </a>
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
    </section>
    <!-- shop-style  content section end -->
    <!-- brand section start -->
    {{--<!-- @include ('partials/logo-slider') -->--}}
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