@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

					<div class="card" style="width: 18rem;">
					<div class="card-data">
						<img src="{{asset('image/membership-icons.jpg')}}" alt="">
					</div>
					<div class="card-body">
						<h5 class="card-title">Data Individu</h5>
						<p class="card-text">Berikut merupakan menu untuk melihat detail data anggota komunitas mata kita</p>
						<a href="/users" class="btn btn-primary">Lihat Data</a>
					</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('style')
<style>
	.card-data{
		background: #333;
		width: 100%;
		height: 100px;
		color : white;
		font-size: 2em;
		text-align:center;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-wrap:wrap;
		flex-direction: column;	
		overflow: hidden;
	}
	.card-data p{
		margin-bottom: 0;
	}
	.card-data span{
		font-size: 0.5em;
		flex-grow: 1;
	}
	.card-data img{
		width: 100%;
	}
</style>
<!-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css"> -->
@endpush
@push('scripts')
<!-- <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js" defer></script>
<script>
	document.addEventListener("DOMContentLoaded", function(){
		$('#users-table').DataTable({
			processing: true,
			serverSide: true,
			ajax: '{!! route('api.users') !!}',
			columns: [
				{ data: 'id', name: 'id' },
				{ data: 'name', name: 'name' },
				{ data: 'email', name: 'email' },
				{ data: 'created_at', name: 'created_at' },
				{ data: 'updated_at', name: 'updated_at' },
				{ data: 'id', name: 'action' , render: function(data){
					return '<a class=\"btn btn-dark\" href=\"/users/'+data+'\">Detail</a>'
				}},
			]
		});
	});
	</script> -->
@endpush