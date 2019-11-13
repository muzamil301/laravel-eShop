@extends ('layouts/master')
@section('title', 'My order')
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
                                        <th class="low1">order Id</th>
                                        <th class="low1">Order Date</th>
                                        <th class="low1">Product</th>
                                        <th class="low7">Quantity</th>
                                        <th class="low7">Price</th>
                                        <th class="low7">Status</th>
                                    </tr>
									@foreach($orders as $order)
                                    <tr>
                                        <td class="sop-cart an-shop-cart">
                                        	{{$order->orderDetailId}}
                                        </td>
                                        <td class="sop-cart an-shop-cart">{{$order->dateCreated}}</td>
                                        <td class="sop-cart an-shop-cart">
                                            <a href="javascript:void(0);">
												<img class="primary-image" alt="image" src="{{$order->image}}" />
											</a>
                                            <a href="javascript:void(0);">{{$order->title}}</a>
                                        </td>
                                        <td class="sop-cart an-sh">
                                            <div class="quantity ray">
                                               <h4>{{$order->quantity}}</h4>
                                            </div>
                                        </td>
                                        <td class="cen">
                                            <span class="amount">{{$order->price}}</span> (each item)
                                        </td>
                                        <td class="cen">
											{{$order->status}}
                                        </td>
                                    </tr>
									@endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- shopping-cart  content section end -->
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
       <!-- service section end -->
@endsection