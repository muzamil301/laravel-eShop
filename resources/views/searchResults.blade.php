@extends ('layouts/master')
@section('title')
    Search Result |
	@if(isset($products[0]))
	{{$products[0]->title}}
		@else
		Nothing Found
	@endif
@endsection
@section('body')
<section class="contact-img-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="con-text">
                    <h2 class="page-title">
						@if(isset($products[0]))
							{{$products[0]->title}}
						@else
							Nothing Found
						@endif
					</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pages-title-end -->
<!-- wishlist content section start -->
<div class="shopping-cart-area nr-wish-area">

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="s-cart-all">
                    <div class="cart-form table-responsive">
                        <table id="shopping-cart-table" class="data-table cart-table">
                            <tr>
                                {{--<th class="low1"></th>--}}
                                <th>Images</th>
                                <th class="low2">Product Name</th>
                                <th>Unit Price </th>
                                <th>Stock Status</th>
                                <th class="low5"></th>
                            </tr>
							@if(isset($products[0]))
                            @foreach($products as $product)
                                <tr>
									@php
										$title = strtolower(str_replace(' ', '-', $product -> title));
									@endphp
                                    {{--<td class="sop-icon1">--}}
                                        {{--<a href="javascript:void(0);">--}}
                                            {{--<i class="fa fa-times"></i>--}}
                                        {{--</a>--}}
                                    {{--</td>--}}
                                    <td class="sop-cart">
                                        <a href="javascript:void(0);">
                                            <img class="primary-image" src="{{asset($product->imgUrl)}}" alt="{{$product->title}}" />
                                        </a>
                                    </td>
                                    <td class="sop-cart an-sh">
                                        <div class="tb-beg">
                                            <a href="/single/{{$product -> id}}/{{$title}}">{{$product -> title}}</a>
                                        </div>
                                        <div class="last-cart l-mrgn">
                                            <a class="las4" href="/single/{{$product -> id}}/{{$title}}">View Item</a>
                                        </div>
                                    </td>
                                    <td class="sop-cart">
                                        <div class="tb-product-price font-noraure-3">
                                            <span class="amount">{{$product -> price}}</span>
                                        </div>
                                    </td>
                                    <td class="cen">
                                        <span class="wishlist-in-stock">
                                            @if($product->quantity < 30)
                                                {{$product->quantity}} Remaining
                                            @else
                                                In Stock
                                            @endif
                                        </span>
                                    </td>
                                    <td class="sop-cart">
                                        <div class="last-cart l-mrgn wish">
                                            <a class="las4" href="/single/{{$product -> id}}/{{$title}}"> Add to Cart</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
								@else
								<tr>
									<td colspan="6">
										<h3 style="margin: 5px 0;text-transform: inherit;">No record round rlease try again with different pattern.</h3>
									</td>
								</tr>
							@endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- wishlist  content section end -->
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
								<a href="javascript:void(0);"><img src="img/brand/1.png" alt="" /></a>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="single-brand">
								<a href="javascript:void(0);"><img src="img/brand/2.png" alt="" /></a>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="single-brand">
								<a href="javascript:void(0);"><img src="img/brand/3.png" alt="" /></a>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="single-brand">
								<a href="javascript:void(0);"><img src="img/brand/4.png" alt="" /></a>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="single-brand">
								<a href="javascript:void(0);"><img src="img/brand/5.png" alt="" /></a>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="single-brand">
								<a href="javascript:void(0);"><img src="img/brand/6.png" alt="" /></a>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="single-brand">
								<a href="javascript:void(0);"><img src="img/brand/1.png" alt="" /></a>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="single-brand">
								<a href="javascript:void(0);"><img src="img/brand/3.png" alt="" /></a>
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
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="single-service res-single">
						<i class="pe-7s-headphones"></i>
						<h4>Customer Support</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="single-service">
						<i class="pe-7s-refresh"></i>
						<h4>15 days money back</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection