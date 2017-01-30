@extends('layout.staff_layout')
@section('title')
Staff
@endsection
@section('css')
@endsection
@section('content')
<style type="text/css">

	table, td, th {    
		border: 1px solid #ddd;
		text-align: center;
	}

	table {
		border-collapse: collapse;
		width: 90%;
	}

	th, td {
		padding: 10px;
	}
</style>
<section>
	<div >
		<div class="row">
			<h3>Organization Information</h3>
		</div>	
		<div class="row">
			<div class="col l1 m1 s12" style="margin-top: 16px"><a href="" class="btn">add</a></div>
			<div class="col l6 m6 s12">
				<div class="input-field" style="">
					<i class="material-icons prefix">search</i>
					<input id="icon_prefix" type="text" class="validate">
					<label for="icon_prefix">Search</label>
				</div>

			</div>
		</div>
	</div>
</section>
<section>
	<table class="striped">	
		<thead>
			<tr>
				<th data-field="ora">Organizetion Name</th>
				<th data-field="adviser">Adviser</th>
				<th data-field="adviser">StartDate</th>
				<th data-field="adviser">EndDate</th>
				<th data-field="manage"></th>
			</tr>
		</thead>

		<tbody >
			<tr class="jsgrid-alt-row">
				<td>PSU PIX</td>
				<td>Dr.Adisak Intana</td>
				<td>
					<a href=""><i class="Tiny material-icons ">mode_edit</i></a>
					<a href=""><i class="Tiny material-icons " style="color: red">delete</i></a>
					</td>
				</tr>

				<tr class="jsgrid-alt-row">
					<td>Flower</td>
					<td>Aj.Jamikorn Hiranrat</td>
					<td>
						<a href=""><i class="Tiny material-icons ">mode_edit</i></a>
						<a href=""><i class="Tiny material-icons " style="color: red">delete</i></a>
						</td>
					</tr>

					<tr class="jsgrid-alt-row">
						<td>Software Gang</td>
						<td>Dr.Aziz Nanthaamornphong</td>
						<td>
							<a href=""><i class="Tiny material-icons ">mode_edit</i></a>
							<a href=""><i class="Tiny material-icons " style="color: red">delete</i></a>
							</td>
						</tr>

						<tr class="jsgrid-alt-row">
							<td>PSU PIX</td>
							<td>Korawit Prutsachainimmit</td>
							<td>
								<a href=""><i class="Tiny material-icons ">mode_edit</i></a>
								<a href=""><i class="Tiny material-icons " style="color: red">delete</i></a>
								</td>
							</tr>
						</tbody>
					</table>
				</section>
				@endsection
				@section('js')	
				@endsection