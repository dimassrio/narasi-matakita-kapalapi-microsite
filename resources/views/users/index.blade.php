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

                    <table class="table table-bordered" id="users-table">
					<thead>
						<tr>
							<th width="5%">Id</th>
							<th>Name</th>
							<th>Email</th>
							<th>Kota</th>
							<th width="10%">Aksi</th>
						</tr>
					</thead>
				</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('style')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
<style>
	td a{
		display: block;
		margin: 0 auto;
		text-align: center;
	}
</style>
@endpush
@push('scripts')
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js" defer></script>
<script>
	document.addEventListener("DOMContentLoaded", function(){
		$('#users-table').DataTable({
			processing: true,
			serverSide: true,
			ajax: '{!! route('api.users') !!}',
			columns: [
				{ data: 'id', name: 'id' },
				{ data: 'name', name: 'name', orderable: true},
				{ data: 'email', name: 'email' },
				{ data: 'city', name: 'city' },
				{ data: 'id', name: 'action' , render: function(data){
					return '<a class=\"btn btn-dark btn-ghost\" href=\"/users/'+data+'\">DETAIL</a>'
				}, orderable: false},
			]
		});
	});
	</script>
@endpush