@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						<div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

						 <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Telepon') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" required>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						 <div class="form-group row">
                            <label for="birth" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Lahir') }}</label>

                            <div class="col-md-6">
                                <input id="birth" type="text" class="form-control{{ $errors->has('birth') ? ' is-invalid' : '' }}" name="birth" required>

                                @if ($errors->has('birth'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('birth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						<div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="address" type="number" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" required> -->
								<textarea name="address" id="address" cols="30" rows="10" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"  required></textarea>
                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group row">
                            <label for="occupation" class="col-md-4 col-form-label text-md-right">{{ __('Pekerjaan') }}</label>

                            <div class="col-md-6">
                                <input id="occupation" type="text" class="form-control{{ $errors->has('occupation') ? ' is-invalid' : '' }}" name="occupation" required>

                                @if ($errors->has('occupation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('occupation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						<div class="form-group row">
                            <label for="facebook" class="col-md-4 col-form-label text-md-right">{{ __('Facebook') }}</label>

                            <div class="col-md-6">
                                <input id="facebook" type="text" class="form-control{{ $errors->has('facebook') ? ' is-invalid' : '' }}" name="facebook" required>

                                @if ($errors->has('facebook'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('facebook') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						<div class="form-group row">
                            <label for="twitter" class="col-md-4 col-form-label text-md-right">{{ __('Twitter') }}</label>

                            <div class="col-md-6">
                                <input id="twitter" type="text" class="form-control{{ $errors->has('twitter') ? ' is-invalid' : '' }}" name="twitter" required>

                                @if ($errors->has('twitter'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('twitter') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						<div class="form-group row">
                            <label for="instagram" class="col-md-4 col-form-label text-md-right">{{ __('Instagram') }}</label>

                            <div class="col-md-6">
                                <input id="instagram" type="text" class="form-control{{ $errors->has('instagram') ? ' is-invalid' : '' }}" name="instagram" required>

                                @if ($errors->has('instagram'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('instagram') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						<div class="form-group row">
                            <label for="interest" class="col-md-4 col-form-label text-md-right">{{ __('Interest') }}</label>

                            <div class="col-md-6">
                                <input id="interest" type="text" class="form-control{{ $errors->has('interest') ? ' is-invalid' : '' }}" name="interest" required>

                                @if ($errors->has('interest'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('interest') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						<div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="gender" type="text" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" required> -->
								<select name="gender" id="gender" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}">
									<option value="L">Laki Laki</option>
									<option value="P">Perempuan</option>
									<option value="O">Rahasia</option>
								</select>
                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.min.js" type="text/javascript" defer></script>
	<script>
			document.addEventListener("DOMContentLoaded", function(){
				$('#birth').datepicker();
			});
	</script>
@endpush

@push('style')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.min.css">
@endpush