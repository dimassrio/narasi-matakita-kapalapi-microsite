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
					<div id="chart_div"></div>
                    <table class="table table-bordered" id="users-table">
					<thead>
						<tr>
							<th width="5%">Id</th>
							<th>Name</th>
							<th>Email</th>
							<th>Gender</th>
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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js" defer></script>
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
				{ data: 'gender', name: 'gender' },
				{ data: 'city', name: 'city' },
				{ data: 'id', name: 'action' , render: function(data){
					return '<a class=\"btn btn-dark btn-ghost\" href=\"/users/'+data+'\">DETAIL</a>'
				}, orderable: false, searchable: false},
			]
		});

		google.charts.load('current', {'packages':['corechart', 'bar']});
		google.charts.setOnLoadCallback(drawChart);
		function drawChart() {
        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Bulan');
        data.addColumn('number', 'Jumlah Pendaftar');
        data.addRows([
        //   
			@foreach($charts as $c)
				['{{$c->month}}', {{$c->value}}],
			@endforeach
        ]);

        // Set chart options
        var options = {'title':'Jumlah Pendaftar Komunitas MataKita',
                       'width':800,
                       'height':400,
					   'vAxis': {
						   'viewWindow': {
						   'min': 0,
						   'max': 100000
					   }
					   }
					   };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
		}
	});
	</script>
@endpush
