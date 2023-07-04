@extends('layout.bookingslayout')
@section('title', 'Duck Inc. |  Trip Bookings')
@section('bookings')

<section class="home-section">
    <div class="text">Trips</div>
    <div id="booking" class="section">
		<div class="section-center">
			<div class="container">

					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
						</div>
					</div>
						<div class="booking-form">
                                <table>
                                    <tr>
                                        <th>Destination</th>
                                        <th>Check In</th>
                                        <th>Check Out</th>
                                        <th>Rooms</th>
                                        <th>Adults</th>
                                        <th>Children</th>
                                        <th>Edit</th>
                                        
                                    </tr>
                                    @foreach($bookings as $booking)
                                        <tr>

                                            <td>{{$booking->Destination}}</td>
                                            <td>{{$booking->Check_In}}</td>
                                            <td>{{$booking->Check_Out}}</td>
                                            <td>{{$booking->Rooms}}</td>
                                            <td>{{$booking->Adults}}</td>
                                            <td>{{$booking->Children}}</td>
                                            <td>
                                                <a href="{{route('bookings.edit',['book'=> $booking ])}}">Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
						</div>


			</div>
		</div>
	</div>
  </section>



@endsection
