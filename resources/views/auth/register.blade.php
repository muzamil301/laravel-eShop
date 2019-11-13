@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group row">
                                        <label for="name"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text"
                                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                   name="name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group row">
                                        <label for="phone"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                                        <div class="col-md-6">
                                            <input id="phone" type="text"
                                                   class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                                   name="phone" value="{{ old('phone') }}" required autofocus>

                                            @if ($errors->has('phone'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group row">
                                        <label for="username"
                                               class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="username" type="email"
                                                   class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                                   name="username" value="{{ old('username') }}" required autofocus>

                                            @if ($errors->has('username'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group row">
                                        <label for="phoneSecondary"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Phone Secondary') }}</label>

                                        <div class="col-md-6">
                                            <input id="phoneSecondary" type="text"
                                                   class="form-control{{ $errors->has('phoneSecondary') ? ' is-invalid' : '' }}"
                                                   name="phoneSecondary" value="{{ old('phoneSecondary') }}"
                                                   autofocus>

                                            @if ($errors->has('phoneSecondary'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phoneSec') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group row">
                                        <label for="country"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                                        <div class="col-md-6">
                                            <input id="country" type="text"
                                                   class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}"
                                                   name="country" value="{{ old('country') }}"/>

                                            @if ($errors->has('country'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group row">
                                        <label for="region"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Region') }}</label>

                                        <div class="col-md-6">
                                            <select id="region"
                                                    class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}"
                                                    name="region" value="{{ old('region') }}">
                                                <option>Please Choose</option>
                                                <option value="1">Punjab</option>
                                                <option value="2">Sindh</option>
                                                <option value="2">KPK</option>
                                                <option value="2">Gilgit–Baltistan</option>
                                                <option value="2">Balochistan</option>
                                            </select>
                                            @if ($errors->has('region'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('region') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group row">
                                        <label for="city"
                                               class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                                        <div class="col-md-6">
                                            <input id="city" type="text"
                                                   class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}"
                                                   name="city" value="{{ old('city') }}"/>

                                            @if ($errors->has('city'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group row">
                                        <label for="address"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                        <div class="col-md-6">
                                        <textarea id="address" type="text"
                                                  class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"
                                                  name="address" value="{{ old('address') }}"></textarea>

                                            @if ($errors->has('address'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group row">
                                        <label for="password"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                   name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group row">
                                        <label style="padding-top: 0;" for="gender"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                                        <div class="col-md-6">
                                            <label class="radio-inline"><input type="radio"
                                                                               class="{{ $errors->has('gender') ? ' is-invalid' : '' }}"
                                                                               name="gender" value="male"
                                                                               checked>Male</label>
                                            &nbsp;&nbsp;
                                            <label class="radio-inline"><input type="radio"
                                                                               class="{{ $errors->has('gender') ? ' is-invalid' : '' }}"
                                                                               name="gender" value="female`"> Female</label>
                                            @if ($errors->has('gender'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>



                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group row">
                                        <label for="password-confirm"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control"
                                                   name="password_confirmation" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary btn-block">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
