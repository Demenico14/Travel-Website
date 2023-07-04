@extends('layout.layout')
@section('title', 'Duck Inc. | Login')
@section('content')

    <section class="login">

        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <img src="{{ asset('img/duck.svg') }}" alt="Logo" class="d-inline-block align-text-top">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: white">
                        The best offer <br />
                        <span style="color: #245953">for your Holiday Stay.</span>
                    </h1>>

                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-7 py-5 px-md-4">
                            <div class="mt-3">
                                @if ($errors->any())
                                    <div class="col-12">
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
                            <form action="{{route('login.post')}}" method="POST">
                                @csrf
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row">
                                    <div class="col-md-8 mb-2 mx-auto">
                                        <p1>Welcome!</p1><br>
                                        <p style="color:#245953">Please log in your correct credentials.</p>
                                        <!-- Email input -->
                                        <div class="form-outline mb-3">
                                            <input type="email"  class="form-control"
                                                        placeholder="Email Address" name="email" />
                                        </div>
                                        <!-- Password input -->
                                        <div class="form-outline mb-3">
                                            <input type="password"  class="form-control"
                                                placeholder="Password" name="password" />
                                        </div>
                                        <div class="d-flex justify-content-around align-items-center mb-4">
                                            <a href="{{route('signup')}}">Don't Have An Account?</a>
                                            <a href="{{route('forget.password')}}">Forgot password?</a>
                                        </div>
                                            <!-- Submit button -->
                                            <div class="d-flex justify-content-around align-items-center mb-4">
                                                <button type="submit" class="btn btn-success btn-block">
                                                    Log In
                                                </button>

                                            </div>
                                    </div>
                                </div>
                             </form>
                        </div>
                     </div>
                 </div>
            </div>
        </div>
    </section>
@endsection
