@extends ('layouts/master')
@section('title')
@php
    $title = ucwords(str_replace('-', ' ', last(request()->segments())));
@endphp
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
                        <div class="col-xs-12">
                            <div class="features-tab">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <div class="row">
                                            <div class="shop-tab">
                                                <!-- single-product start -->
                                                @foreach($products as $product)
                                                    <div class="col-md-3 col-sm-6 col-xs-12 matchHeight">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <div class="pro-type">
                                                                    @php
                                                                        $created = new Carbon($product->created_at);
                                                                        $now = Carbon::now();
                                                                    @endphp
                                                                    @if($now->diffInDays($created) < 5)
                                                                        <span>new</span>
                                                                    @endif
                                                                </div>
                                                                @php
                                                                    $title = strtolower(str_replace(' ', '-', $product -> title));
                                                                @endphp
                                                                <a href="/single/{{$product -> id}}/{{$title}}">
                                                                    <img src="{{asset($product->imgUrl)}}" alt="{{$product -> title}}" />
                                                                </a>
                                                            </div>
                                                            <div class="product-dsc">
                                                                <h3><a href="javascript:void(0);">{{$product->title}}</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
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
    <!-- quick view start -->

    {{--@include ('partials/logo-slider')--}}

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