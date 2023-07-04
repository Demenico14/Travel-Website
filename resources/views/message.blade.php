@extends('layout.bookingslayout')
@section('title', 'Duck Inc. | Message')
@section('bookings')

<section class="home-section">
    <div class="text">Dashboard & Payments</div>
    <div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>Contact Us</h1>
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
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Name</span>
											<input class="form-control" type="text" name="Check_In" >
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Surname</span>
											<input class="form-control" type="text" name="Check_Out" >
										</div>
									</div>
								</div>
                                <div class="form-group">
									<span class="form-label">Message</span>
									<input class="form-control" type="text" placeholder="Message">
								</div>

								<div class="form-btn">
									<button class="submit-btn">Submit</button>
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
