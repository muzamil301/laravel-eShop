@extends ('layouts/master')
@section('title', 'Rergister')
@section('body')
<section class="contact-img-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="con-text">
                    <h2 class="page-title">Sign Up</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pages-title-end -->
<!-- login content section start -->
<div class="login-area">
    <div class="container">
        <div class="row">
        	<form action="/sign-up" >
	            <div class="col-md-6 col-xs-12">
	                <div class="tb-login-form ">
	                    <h5 class="tb-title">Sign Up</h5>
	                    <form action="#">
	                        <p class="checkout-coupon top log a-an">
	                            <label class="l-contact">
	                                First Name
	                                <em>*</em>
	                            </label>
	                            <input type="text" name="name">
	                        </p>
	                        <p class="checkout-coupon top log a-an">
	                            <label class="l-contact">
	                                last Name
	                            </label>
	                            <input type="text" name="name">
	                        </p>
	                        <p class="checkout-coupon top log a-an">
	                            <label class="l-contact">
	                                gender
	                                <em>*</em>
	                            </label>
								  <select class="form-control" id="gender" name="gender">
								    <option>Please Choose</option>
								    <option value="1">Male</option>
								    <option value="2">Female</option>
								  </select>
	                        </p>
	                        <p class="checkout-coupon top log a-an">
	                            <label class="l-contact">
	                                Email Address
	                                <em>*</em>
	                            </label>
	                            <input type="email" name="email">
	                        </p>
	                        <p class="checkout-coupon top-down log a-an">
	                            <label class="l-contact">
	                                Password
	                                <em>*</em>
	                            </label>
	                            <input type="password" name="password">
	                        </p>
	                        <p class="checkout-coupon top log a-an">
	                            <label class="l-contact">
	                                Phone
	                            </label>
	                            <input type="text" name="phone">
	                        </p>
	                    </form>
	                </div>
	            </div>
	            <div class="col-md-6 col-xs-12">
	                <div class="tb-login-form res">
	                    <h5 class="tb-title">Create a new account</h5>
	                    <form action="#">
	                        <p class="checkout-coupon top log a-an">
	                            <label class="l-contact">
	                                Phone secondary
	                            </label>
	                            <input type="text" name="phone">
	                        </p>
	                        <p class="checkout-coupon top log a-an">
	                            <label class="l-contact">
	                                Country
	                            </label>
	                            <input type="text" name="country">
	                        </p>
	                        <p class="checkout-coupon top log a-an">
	                            <label class="l-contact">
	                                Region
	                            </label>
								<select class="form-control" id="gender" name="gender">
									<option>Please Choose</option>
									<option value="1">Punjab</option>
									<option value="2">Sindh</option>
									<option value="2">KPK</option>
									<option value="2">Gilgit–Baltistan</option>
									<option value="2">Balochistan</option>
								</select>
	                        </p>
	                        <p class="checkout-coupon top log a-an">
	                            <label class="l-contact">
	                                City
	                            </label>
	                            <input type="text" name="city">
	                        </p>
	                        <p class="checkout-coupon top log a-an">
	                            <label class="l-contact">
	                                Address
	                            </label>
	                            <textarea class="form-control" placeholder="Type Address here"></textarea>
	                        </p>
	                        <p class="login-submit5 ress">
	                            <input value="SignUp" class="button-primary" type="submit">
	                        </p>
	                    </form>
	                </div>
	            </div>
            </form>
        </div>
    </div>
</div>
@endsection