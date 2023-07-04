@extends('layout.LandingpageLayout')
@section('title', 'Duck Inc. | Home Page')
@section('body')
    <!-- SECTION HOME -->
    <section id="home" class="fullheight align-items-center bg-img bg-img-fixed"
        style="background-image: url(assets/brooke-lark-08bOYnH_r_E-unsplash.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xs-12">
                    <div class="slogan">
                        <h1 class="left-to-right play-on-scroll">
                            Duck Inc.
                        </h1>
                        <p class="left-to-right play-on-scroll delay-2">
                            Looking for a unique way to experience Zimbabwe? Look no further than Duck Inc.!
                             Our expert guides will take you on an unforgettable journey through the country's stunning landscapes and wildlife.
                             Whether by land or water, our customizable tours are tailored to meet your every need and ensure an adventure of a lifetime.
                        </p>
                        <div class="left-to-right play-on-scroll delay-4">
                            <a href="{{route('bookings')}}">
                                <button>
                                    Book Now
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION HOME -->
    <!-- SECION ABOUT -->
    <section class="about fullheight align-items-center" id="about">
        <div class="container">
            <div class="row">
                <div class="col-7 h-xs">
                    <img src="assets/Mana.jpg" alt=""
                        class="fullwidth left-to-right play-on-scroll">
                </div>
                <div class="col-5 col-xs-12 align-items-center">
                    <div class="about-slogan right-to-left play-on-scroll">
                        <h3>
                            <span class="primary-color">We</span> create <span class="primary-color">unforgetable </span>
                            memories for <span class="primary-color">you</span>
                        </h3>
                        <p>
                            Welcome to Duck Inc., your premier travel company for exploring the wonders of Zimbabwe.
                             Our mission is to provide you with exceptional service and a personalized experience, whether you're seeking an adventurous safari or a relaxing getaway.
                             Let us help you create unforgettable memories in this beautiful country.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECION ABOUT -->
    <!-- FOOD MENU SECTION -->
    <section class="align-items-center bg-img bg-img-fixed" id="food-menu-section"
        style="background-image: url(assets/katherine-chase-4MMK78S7eyk-unsplash.jpg);">
        <div class="container">
            <div class="food-menu">
                <h1>
                    Where will <span class="primary-color">you</span> go today?
                </h1>
                <p>
                    Come explore the natural beauty and rich cultural heritage of Zimbabwe!
                     From the mighty Victoria Falls to the ancient ruins of Great Zimbabwe, there is something for everyone in this diverse and fascinating country.
                     Immerse yourself in the vibrant local communities, sample delicious cuisine, and experience the warmth and hospitality of the Zimbabwean people.
                </p>
                <div class="food-category">
                    <div class="zoom play-on-scroll">
                        <button class="active" data-food-type="all">
                            All Trips
                        </button>
                    </div>
                    <div class="zoom play-on-scroll delay-2">
                        <button data-food-type="salad">
                            Most Visited
                        </button>
                    </div>
                    <div class="zoom play-on-scroll delay-4">
                        <button data-food-type="lorem">
                            National Heritage
                        </button>
                    </div>
                    <div class="zoom play-on-scroll delay-6">
                        <button data-food-type="ipsum">
                            Wildlife
                        </button>
                    </div>
                    <div class="zoom play-on-scroll delay-8">
                        <button data-food-type="dolor">
                            Mountainous
                        </button>
                    </div>
                </div>

                <div class="food-item-wrap all">
                    <div class="food-item salad-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url(assets/victoriafalls.jpg);"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Victoria Falls
                                    </h3>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="food-item lorem-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url(assets/Hwange.jpg);"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Hwange National Park
                                    </h3>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="food-item ipsum-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url(assets/Mana.jpg);">
                                </div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Mana Pools National Park
                                    </h3>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="food-item lorem-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url(assets/GreatZimbabwe.jpg);"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Great Zimbabwe
                                    </h3>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="food-item dolor-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url(assets/Matobo.jpg);"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Matobo National Park
                                    </h3>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="food-item salad-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url(assets/EasternHighlands.webp);"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Eastern Highlands
                                    </h3>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="food-item lorem-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url(assets/LakeKariba.jpg);"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Lake Kariba
                                    </h3>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="food-item dolor-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url(assets/Gonarezhou.webp);"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Gonarezhou National Park
                                    </h3>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END FOOD MENU SECTION -->
    <!-- TESTIMONIAL SECTION -->
    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-4 col-xs-12">
                    <div class="review-wrap zoom play-on-scroll delay-2">
                        <div class="review-content">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, labore nisi non
                                molestias, minus laboriosam nostrum impedit iure facilis odio unde quia ad sunt corrupti
                                dolores ratione voluptatibus quidem explicabo.
                            </p>
                            <div class="review-img bg-img"
                                style="background-image: url(assets/close-up-portrait-cute-young-woman-holding-textbook-colored-pencils-posing-studio-isolated-pink_176532-9674.jpg);">
                            </div>
                        </div>
                        <div class="review-info">
                            <h3>
                                Lorem Ipsum Dolor
                            </h3>
                            <div class="rating">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-xs-12">
                    <div class="zoom play-on-scroll">
                        <div class="review-wrap active">
                            <div class="review-content">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, labore nisi non
                                    molestias, minus laboriosam nostrum impedit iure facilis odio unde quia ad sunt
                                    corrupti
                                    dolores ratione voluptatibus quidem explicabo.
                                </p>
                                <div class="review-img bg-img"
                                    style="background-image: url(assets/michael-dam-mEZ3PoFGs_k-unsplash.jpg);">
                                </div>
                            </div>
                            <div class="review-info">
                                <h3>
                                    Lorem Ipsum Dolor
                                </h3>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-xs-12">
                    <div class="review-wrap zoom play-on-scroll delay-4">
                        <div class="review-content">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, labore nisi non
                                molestias, minus laboriosam nostrum impedit iure facilis odio unde quia ad sunt corrupti
                                dolores ratione voluptatibus quidem explicabo.
                            </p>
                            <div class="review-img bg-img"
                                style="background-image: url(assets/portrait-happy-young-man_171337-21716.jpg);">
                            </div>
                        </div>
                        <div class="review-info">
                            <h3>
                                Lorem Ipsum Dolor
                            </h3>
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END TESTIMONIAL SECTION -->

@endsection
