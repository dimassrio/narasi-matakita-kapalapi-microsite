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
					<a href="/users" class="btn btn-primary btn-ghost btn-sm">Kembali</a>
					<div class="canvas--wrapper">
						<canvas id="cardCanvas" width="860" height="540"></canvas>
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
</style>
<!-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css"> -->
@endpush
@push('scripts')
<!-- <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js" defer></script> -->
<script>
		function pad (str, max) {
			str = str.toString();
			return str.length < max ? pad("0" + str, max) : str;
		}
		document.addEventListener("DOMContentLoaded", function(){
			const canvas = document.getElementById("cardCanvas").getContext('2d');
			const img = new Image();
			img.src = "{{ asset('image/card-background.jpg')}}"
			const id = pad("{{$item->id}}", 8);
			const name = "{{$item->name}}".substring(0, 12);
			img.onload = function(){
				canvas.drawImage(img, 0, 0, 860, 540);
				canvas.font = "60px Courier New";
				canvas.fillStyle = "White";
				canvas.fillText(name, 400, 500);
				canvas.font = "36px Courier New";
				canvas.fillText(id, 660, 420); 
			}
		});
</script>
@endpush