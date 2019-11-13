@extends ('layouts/master')
@section('title', 'Blog Detail Dynamic Title')
@section('body')
    <!-- pages-title-start -->
	<section class="contact-img-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="con-text">
                        <h2 class="page-title">Blog Details</h2>
                        <p><a href="javascript:void(0);">Home</a> | Blog Details</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!-- pages-title-end -->
	<!-- Blog content section start -->
	<section class="blog-area bd-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                    <div class="tb-post-item ma-nn">
                        <a href="javascript:void(0);">
                            <div class="tb-thumb">
                                <img src="img/banner/14.jpg" alt="">
                                <span class="tb-publish font-noraure-3">Nov / 21</span>
                            </div>
                        </a>
                        <div class="tb-content7">
                            <div class="blog-info">
                                <span class="author-name">
                                    <i class="fa fa-user"></i>
                                    By
                                    <a href="javascript:void(0);">admin</a>
                                </span>
                                <span class="categories">
                                    <i class="fa fa-tag"></i>
                                    <a href="javascript:void(0);">Consectetur</a>
                                    ,
                                    <a href="javascript:void(0);">Lorem</a>
                                </span>
                                <span class="comments-number">
                                    <i class="fa fa-comment"></i>
                                    <a href="javascript:void(0);">0 Comment</a>
                                </span>
                            </div>
                            <h4 class="tb-titlel">Summer Classics in Positano</h4>
                            <div class="blog-desc">
                                <p>The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light is always at a premium, but one never wants to feel high, dry, and seriously unstylish with all of the possible opportunities to pose for that most modern of vacation souvenirs, the fashionable Instagram.</p>
                                <p>The fashion set stayed true to their roots this week, whether that be swirling around the interior of a river boat in floor-length Giambattista Valli, à la Bianca Brandolini D’Adda, louchely leaning against the scenery in innately covetable summer classics in Positano, as Lisa Love did, or heading for the beach in Louis Vuitton resort denim hot pants and monogrammed Speedy in tow, as Marie-Amélie Sauvé did (oh, the access!).</p>
                                <p>Natasha Poly took in the ocean breeze in Formentera in a voluminous caftan, while Caroline Trentini’s white tee, Vuitton skirt, and Stan Smiths in Sao Paulo were a decidedly more city-friendly take on early August style (and will certainly transition more easily into fall). And while we treasure these lazy, late summer days, fall—and its sartorial demands—is just around the corner: For inspiration, look no further than little North West’s latest wardrobe addition, a clutch of pint-sized Balmain blazers that will have the tot segueing into the season sans problème.</p>
                            </div>
                            <div class="next-pre">
                                <a class="blog1" href="javascript:void(0);"> <i class="fa fa-angle-left"></i> Previous</a>
                                <a class="blog2" href="javascript:void(0);"><i class="fa fa-angle-right"></i> Next</a>
                            </div>
                        </div>
                    </div>
                   <div class="row">
                        <div class="bd-comment">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h4 class="tb-titlel">Leave a reply</h4>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <label class="l-contact">
                                Content
                                <em>*</em>
                                </label>
                                <textarea class="form-control" name="message" required=""></textarea>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="di-na bs">
                                    <label class="l-contact">
                                    Name
                                    <em>*</em>
                                    </label>
                                    <input class="form-control" type="text" name="name" required="">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="di-na">
                                    <label class="l-contact">
                                    Email
                                    <em>*</em>
                                    </label>
                                    <input class="form-control" type="email" name="name" required="">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <label class="l-contact">
                                    Website
                                    <em>*</em>
                                </label>
                                <input class="form-control" type="text" name="name" required="">
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="last-cart-con bd-icon">
                                    <input class="wpcf7" type="submit" value="Send Message">
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                    <div class="widget_searchform_content active">
                        <form action="#">
                            <input type="text" value="" name="s" placeholder="Search">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                   <div class="zo-recent-posts">
                        <h3 class="wg-title">Latest Posts</h3>
                       <ul>
                           <li>
                                <div class="tb-recent-thumbb">
                                    <a href="javascript:void(0);">
                                        <img class="attachment" src="img/banner/s1.jpg" alt="">
                                    </a>
                                    <div class="recent-thumb-overlay"></div>
                                </div>
                                <div class="tb-recentb">
                                    <div class="tb-postb">
                                        <p>The summer holidays are wonderful. Dressing for them can</p>
                                    </div>
                                    <div class="tb-postd">
                                        <span>Dec, 11, 2015</span>
                                    </div>
                                </div>
                            </li>
                           <li>
                                <div class="tb-recent-thumbb">
                                    <a href="javascript:void(0);">
                                        <img class="attachment" src="img/banner/s2.jpg" alt="">
                                    </a>
                                    <div class="recent-thumb-overlay"></div>
                                </div>
                                <div class="tb-recentb">
                                    <div class="tb-postb">
                                        <p>The summer holidays are wonderful. Dressing for them can</p>
                                    </div>
                                    <div class="tb-postd">
                                        <span>Dec, 11, 2015</span>
                                    </div>
                                </div>
                            </li>
                           <li>
                                <div class="tb-recent-thumbb">
                                    <a href="javascript:void(0);">
                                        <img class="attachment" src="img/banner/s3.jpg" alt="">
                                    </a>
                                    <div class="recent-thumb-overlay"></div>
                                </div>
                                <div class="tb-recentb">
                                    <div class="tb-postb">
                                        <p>The summer holidays are wonderful. Dressing for them can</p>
                                    </div>
                                    <div class="tb-postd">
                                        <span>Dec, 11, 2015</span>
                                    </div>
                                </div>
                            </li>
                       </ul>
                   </div>
                   <div class="zo-recent-posts2">
                        <h3 class="wg-title">Recent Posts</h3>
                       <ul>
                           <li>
                                <a href="javascript:void(0);">That most modern</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Glance Into the Future of Androids</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Nullam at tellus vehicula</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Summer Classics in Positano</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Photography Tips From Wai Su</a>
                            </li>
                       </ul>
                   </div>
                   <div class="zo-recent-posts3">
                        <h3 class="wg-title">Recent Comments</h3>
                   </div>
                   <div class="zo-recent-posts2">
                        <h3 class="wg-title">Archives</h3>
                       <ul>
                           <li>
                                <a href="javascript:void(0);">December 2015</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">November 2015</a>
                            </li>
                       </ul>
                   </div>
                   <div class="zo-recent-posts2 os4">
                        <h3 class="wg-title">Categories</h3>
                       <ul>
                           <li>
                                <a href="javascript:void(0);">Consectetur</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Fashion</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Lorem</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Uncategorized</a>
                            </li>
                       </ul>
                   </div>
                   <div class="zo-recent-posts2">
                        <h3 class="wg-title">Meta</h3>
                       <ul>
                           <li>
                                <a href="javascript:void(0);">Register</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Log in</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Entries
                                    <abbr>RSS</abbr>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Comments 
                                    <abbr>RSS</abbr>
                                </a>
                            </li>
                           <li>
                                <a href="javascript:void(0);">WordPress.org</a>
                            </li>
                       </ul>
                   </div>
                </div>
            </div>
        </div>
    </section>
	<!-- Blog content section end -->
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
   <!-- service section end -->
@endsection