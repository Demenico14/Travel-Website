@extends('layout.bookingslayout')
@section('title', 'Duck Inc. | Bookings')
@section('bookings')

<section class="home-section">
    <div class="text">Dashboard & Payments</div>
    <div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>Make your reservation</h1>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi facere, soluta magnam consectetur molestias itaque
								ad sint fugit architecto incidunt iste culpa perspiciatis possimus voluptates aliquid consequuntur cumque quasi.
								Perspiciatis.
							</p>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
                            <div>
                                @if ($errors->any())
                                    <div>
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger">
                                                {{ $error }}
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                                @if (session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                                @endif

                                @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif



                            </div>
							<form action="{{route('bookings.store')}}" method="POST">
                                @csrf
                                @method('post')
								<div class="form-group">
									<span class="form-label">Your Destination</span>
									<select class="form-control" name="Destination" hidden>
                                        <option>Victoria Falls</option>
                                        <option>Hwange National Park</option>
                                        <option>ManaPools National Park</option>
                                        <option>Great Zimbabwe</option>
                                        <option>Matobo National Park</option>
                                        <option>Eastern Highlands</option>
                                        <option>Lake Kariba</option>
                                        <option>Gonarezhou National Park</option>
                                    </select>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Check In</span>
											<input class="form-control" type="date" name="Check_In" >
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Check out</span>
											<input class="form-control" type="date" name="Check_Out" >
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Rooms</span>
											<select class="form-control" name="Rooms">
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Adults</span>
											<select class="form-control" name="Adults">
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Children</span>
											<select class="form-control" name="Children">
												<option>0</option>
												<option>1</option>
												<option>2</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="form-btn">
									<button class="submit-btn">Book Place</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  </section>



@endsection
