@extends('layouts.system')

@section('title')
<span>
	VIEW BOOKING
</span>
@endsection

@section('content')

	<ul>
		@foreach($booking->audits()->with('user')->get() as $audit)
			<li>Booking has been <b>{{ $audit->event }}</b> by <b>{{ $audit->user->name }}</b> on {{ $audit->created_at->diffForHumans() }}</li>
		@endforeach
	</ul>

@endsection
