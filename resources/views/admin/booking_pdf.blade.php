<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Booking List</title>
	<style type="text/css">
		.table {
			width: 100%;
		}
		th {
			background-color: #444;
			color: #fff;
			font-weight: bold;
			text-align: center;
		}
		td, th {
			border: 1px solid #000;
			padding: 5px;
		}
		.bg-warning {
			background-color: orange;
		}
		.bg-success {
			background-color: green;
			color: #fff;
		}
		.bg-danger {
			background-color: red;
			color: #fff;
		}
	</style>
</head>
<body>

<table class="table table-bordered">
	<tr>
		<th>#</th>
		<th>User Name</th>
		<th>Room Name</th>
		<th>Date</th>
		<th>Status</th>
	</tr>
	@php($i = 0)
	@foreach($bookings as $booking)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $booking->user->name }}</td>
		<td>{{ $booking->room->name }}</td>
		<td>{{ $booking->booking_date }}</td>
		<td>
			@if($booking->status == 0)
				<span class="badge bg-warning">Pending</span>
			@elseif($booking->status == 1)
				<span class="badge bg-success">Approved</span>
			@elseif($booking->status == 2)
				<span class="badge bg-danger">Rejected</span>
			@endif
		</td>
	</tr>
	@endforeach
</table>


</body>
</html>