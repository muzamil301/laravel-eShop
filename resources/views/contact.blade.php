@extends ('layouts/master')
@section('title', 'Contact Us')
@section('body')
		<section class="contact-img-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="con-text">
                            <h2 class="page-title">Contact</h2>
                            <p><a href="/">Home</a> | Contact</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- pages-title-end -->
		<!-- contact content section start -->
		<section class="top-map-area">
            <div class="container">
                <!-- <div class="row">
                    <div class="col-md-12">
                        <div class="map-area">
                            <div class="contact-map">
                                <div id="hastech"></div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="page-title">
                            <h2 class="text-center">Contact Us</h2>
                            <h3>Our Location</h3>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <strong>Address</strong>
                                        <br>
                                        <address> Lahore Pakistan </address>
                                    </div>
                                    <div class="col-sm-3">
                                        <strong>Telephone</strong>
                                        <br>
                                        0303-4924682
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- contact content section end -->
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
																<img src="img/quick-view/10.jpg" alt="" />
															</div>
															<div class="tab-pane fade in" id="sin-pro-2">
																<img src="img/quick-view/10.jpg" alt="" />
															</div>
															<div class="tab-pane fade in" id="sin-pro-3">
																<img src="img/quick-view/10.jpg" alt="" />
															</div>
															<div class="tab-pane fade in" id="sin-pro-4">
																<img src="img/quick-view/10.jpg" alt="" />
															</div>
														</div>
														<div class="quick-thumb">
															<div class="nav nav-tabs">
																<ul>
																	<li><a data-toggle="tab" href="#sin-pro-1"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
																	<li><a data-toggle="tab" href="#sin-pro-2"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
																	<li><a data-toggle="tab" href="#sin-pro-3"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
																	<li><a data-toggle="tab" href="#sin-pro-4"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
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
															<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrames bled it make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
															<div class="row m-p-b">
																<div class="col-sm-12 col-md-6">
																	<div class="por-dse responsive-strok clearfix">
																		<ul>
																			<li><span>Availability</span><strong>:</strong> In stock</li>
																			<li><span>Condition</span><strong>:</strong> New product</li>
																			<li><span>Category</span><strong>:</strong> <a href="javascript:void(0);">Men</a> <a href="javascript:void(0);">Fashion</a> <a href="javascript:void(0);">Shirt</a></li>
																		</ul>
																	</div>
																</div>
																<div class="col-sm-12 col-md-6">
																	<div class="por-dse color">
																		<ul>
																			<li><span>color</span><strong>:</strong> <a href="javascript:void(0);">Red</a> <a href="javascript:void(0);">Green</a> <a href="javascript:void(0);">Blue</a> <a href="javascript:void(0);">Orange</a></li>
																			<li><span>size</span><strong>:</strong>  <a href="javascript:void(0);">SL</a> <a href="javascript:void(0);">SX</a> <a href="javascript:void(0);">M</a> <a href="javascript:void(0);">XL</a></li>
																			<li><span>tag</span><strong>:</strong> <a href="javascript:void(0);">Men</a> <a href="javascript:void(0);">Fashion</a> <a href="javascript:void(0);">Shirt</a></li>
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
																							<input type="text" value="02" name="qtybutton" class="plus-minus-box">
																							<a class="inc qtybutton">+</a>
																						</div>
																					</form>
																				</li>
																				<li class="share-btn clearfix"><span>share</span>
																					<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
																					<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
																					<a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a>
																					<a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
																					<a href="javascript:void(0);"><i class="fa fa-instagram"></i></a>
																				</li>
																			</ul>
																		</div>
																	</div>
																	<div class="col-sm-12 col-md-6">
																		<div class="por-dse clearfix responsive-othre">
																			<ul class="other-btn">
																				<li><a href="javascript:void(0);"><i class="fa fa-heart"></i></a></li>
																				<li><a href="javascript:void(0);"><i class="fa fa-refresh"></i></a></li>
																				<li><a href="javascript:void(0);"><i class="fa fa-envelope-o"></i></a></li>
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
																<img src="img/quick-view/10.jpg" alt="" />
															</div>
															<div class="tab-pane fade in" id="sin-pro-6">
																<img src="img/quick-view/10.jpg" alt="" />
															</div>
															<div class="tab-pane fade in" id="sin-pro-7">
																<img src="img/quick-view/10.jpg" alt="" />
															</div>
															<div class="tab-pane fade in" id="sin-pro-8">
																<img src="img/quick-view/10.jpg" alt="" />
															</div>
														</div>
														<div class="quick-thumb">
															<div class="nav nav-tabs">
																<ul>
																	<li><a data-toggle="tab" href="#sin-pro-5"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
																	<li><a data-toggle="tab" href="#sin-pro-6"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
																	<li><a data-toggle="tab" href="#sin-pro-7"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
																	<li><a data-toggle="tab" href="#sin-pro-8"> <img src="img/quick-view/10.jpg" alt="quick view" /> </a></li>
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
															<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrames bled it make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
															<div class="row m-p-b">
																<div class="col-sm-6">
																	<div class="por-dse">
																		<ul>
																			<li><span>Availability</span><strong>:</strong> In stock</li>
																			<li><span>Condition</span><strong>:</strong> New product</li>
																			<li><span>Category</span><strong>:</strong> <a href="javascript:void(0);">Men</a> <a href="javascript:void(0);">Fashion</a> <a href="javascript:void(0);">Shirt</a></li>
																		</ul>
																	</div>
																</div>
																<div class="col-sm-6">
																	<div class="por-dse color">
																		<ul>
																			<li><span>color</span><strong>:</strong> <a href="javascript:void(0);">Red</a> <a href="javascript:void(0);">Green</a> <a href="javascript:void(0);">Blue</a> <a href="javascript:void(0);">Orange</a></li>
																			<li><span>size</span><strong>:</strong>  <a href="javascript:void(0);">SL</a> <a href="javascript:void(0);">SX</a> <a href="javascript:void(0);">M</a> <a href="javascript:void(0);">XL</a></li>
																			<li><span>tag</span><strong>:</strong> <a href="javascript:void(0);">Men</a> <a href="javascript:void(0);">Fashion</a> <a href="javascript:void(0);">Shirt</a></li>
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
																							<input type="text" value="02" name="qtybutton" class="plus-minus-box">
																							<a class="inc qtybutton">+</a>
																						</div>
																					</form>
																				</li>
																				<li class="share-btn clearfix"><span>share</span>
																					<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
																					<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
																					<a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a>
																					<a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
																					<a href="javascript:void(0);"><i class="fa fa-instagram"></i></a>
																				</li>
																			</ul>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="por-dse clearfix">
																			<ul class="other-btn">
																				<li><a href="javascript:void(0);"><i class="fa fa-heart"></i></a></li>
																				<li><a href="javascript:void(0);"><i class="fa fa-refresh"></i></a></li>
																				<li><a href="javascript:void(0);"><i class="fa fa-envelope-o"></i></a></li>
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
       <script type="text/javascript">
           <script>
            var myCenter=new google.maps.LatLng(23.763523, 90.431098);
            function initialize()
            {
                var mapProp = {
                  center:myCenter,
                  scrollwheel: false,
                  zoom:17,
                  mapTypeId:google.maps.MapTypeId.ROADMAP
                  };
                var map=new google.maps.Map(document.getElementById("hastech"),mapProp);
                var marker=new google.maps.Marker({
                  position:myCenter,
                    animation:google.maps.Animation.BOUNCE,
                  icon:'img/map-marker.png',
                    map: map,
                  });

                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
@endsection