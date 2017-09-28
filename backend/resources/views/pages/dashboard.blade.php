@extends('layouts.master')

@section('content')

@include('layouts.partials._navigation')
@include('layouts.partials._sidebar')

<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Systsem Overview</h3>
					<p class="panel-subtitle"></p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-3">
							<div class="metric">
								<span class="icon"><i class="fa fa-ticket"></i></span>
								<p>
									<span class="number">1,252</span>
									<span class="title">GENERATED RECIEPTS</span>
								</p>
							</div>
						</div>
					
					
					</div>
					
				</div>
			</div>
			<!-- END OVERVIEW -->
			<div class="row">
				<div class="col-md-12">
					<!-- RECENT PURCHASES -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Recent Purchases</h3>
							<div class="right">
								<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
								<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
							</div>
						</div>
						<div class="panel-body no-padding">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Rec No.</th>
										<th>Name</th>
										<th>Amount</th>
										<th>Date &amp; Time</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><a href="#">763648</a></td>
										<td>Abby</td>
										<td>₦122</td>
										<td>Oct 21, 2016</td>
										<td><span class="label label-success">PAID</span></td>
									</tr>
									<tr>
										<td><a href="#">763649</a></td>
										<td>Seun</td>
										<td>₦62</td>
										<td>Oct 21, 2016</td>
										<td><span class="label label-warning">NOT PAID</span></td>
									</tr>
								
								</tbody>
							</table>
						</div>
						<div class="panel-footer">
							<div class="row">
								<div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 10 receipts</span></div>
								<div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All Reciepts</a></div>
							</div>
						</div>
					</div>
					<!-- END RECENT PURCHASES -->
				</div>
				
			</div>
		
			
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>

@endsection