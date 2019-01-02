@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					@if(Auth::user()->getRoleNames()->contains('administrator'))
						<a href="/users" class="btn btn-primary btn-ghost btn-sm">Kembali</a>
					@endif
					<div class="canvas--wrapper">
						<canvas id="cardCanvas" width="860" height="540"></canvas>
					</div>
					<div class="form--wrapper">
						<h2 class="text-center title">Data Pengguna</h2>

						<form method="POST" action="{{ route('users.update', $item->id) }}">
                        @csrf
						<input type="hidden" name="_method" value="PUT">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $item->name }}" required autofocus>

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
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $item->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- <div class="form-group row">
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
                        </div> -->

						 <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Telepon') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{$item->phone}}" required>

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
                                <input id="birth" type="text" class="form-control{{ $errors->has('birth') ? ' is-invalid' : '' }}" value="{{$item->birth}}" name="birth" required>

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
								<textarea name="address" id="address" cols="30" rows="10" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" required>{{$item->address}}</textarea>
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
                                <input id="occupation" type="text" class="form-control{{ $errors->has('occupation') ? ' is-invalid' : '' }}" name="occupation" required value="{{$item->occupation}}">

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
                                <input id="facebook" type="text" class="form-control{{ $errors->has('facebook') ? ' is-invalid' : '' }}" name="facebook" required value="{{$item->facebook}}">

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
                                <input id="twitter" type="text" class="form-control{{ $errors->has('twitter') ? ' is-invalid' : '' }}" name="twitter" required value="{{$item->twitter}}">

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
                                <input id="instagram" type="text" class="form-control{{ $errors->has('instagram') ? ' is-invalid' : '' }}" name="instagram" required value="{{$item->facebook}}">

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
                                <input id="interest" type="text" class="form-control{{ $errors->has('interest') ? ' is-invalid' : '' }}" name="interest" required value="{{$item->interest}}">

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
									<option value="L" @if($item->gender == 'L') selected @endif>Laki Laki</option>
									<option value="P" @if($item->gender == 'P') selected @endif>Perempuan</option>
									<option value="O" @if($item->gender == 'O') selected @endif>Rahasia</option>
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
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('style')
<style>
	.canvas--wrapper{
		position: relative;
		
	}
	#cardCanvas{
		margin: 0 auto;
		display:block;
	}
	.form--wrapper{
		/* margin-top: 40px; */
	}
	.form--wrapper h2{
		margin: 20px 0 40px 0;
		padding-top: 20px;
		border-top: 1px solid #333;
	}
</style>
<!-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css"> -->
@endpush
@push('scripts')
<!-- <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js" defer></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.min.js" type="text/javascript" defer></script>
<script>
		function pad (str, max) {
			str = str.toString();
			return str.length < max ? pad("0" + str, max) : str;
		}
		function chunk(str, val = 4){
			let result = "";
			for(let i=0; i<= str.length; i+=val){
				result = result + str.substr(i, i+(val));
				if(i < str.length - val){
					result = result + " ";
				}
			}
			return result;
		}
		document.addEventListener("DOMContentLoaded", function(){
			$('#birth').datepicker();
			const canvas = document.getElementById("cardCanvas").getContext('2d');
			const img = new Image();
			img.src = "{{ asset('image/card-background.jpg')}}"
			const id = chunk(pad("{{$item->id}}", 8));
			const name = "{{$item->name}}".substring(0, 12);
			img.onload = function(){
				canvas.drawImage(img, 0, 0, 860, 540);
				canvas.font = "60px Courier New";
				canvas.fillStyle = "White";
				canvas.textAlign = "right";
				canvas.fillText(name, 820, 420);
				canvas.font = "36px Courier New";
				canvas.fillText(id, 820, 340); 
			}
		});
</script>
@endpush

@push('style')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.min.css">
@endpush