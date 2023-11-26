@extends('layouts.app')

@section('content')
    <main>
        <article>
            <section class="section portfolio" aria-labelledby="portfolio-label">
                <div class="container">

                    <h2 class="section-title headline-md text-center" id="portfolio-label">Latest Projects</h2>

                    <ul class="portfolio-list">



                        <li>
                            <div class="portfolio-card">

                                <div class="card-banner img-holder" style="--width: 800; --height: 540;">
                                    <img src="{{ asset('./assets/images') }}/portfolio-1.jpg" width="800" height="540"
                                        loading="lazy" alt="Website Design for Marketing Agency Startup" class="img-cover">

                                    <a href="{{ url('./') }}" class="btn-icon"
                                        aria-label="More about Website Design for Marketing Agency Startup">
                                        <ion-icon name="arrow-forward-sharp" aria-hidden="true"></ion-icon>
                                    </a>
                                </div>

                                <div class="card-content">

                                    <span class="chip label-md">Web Design</span>

                                    <h3 class="title-md">Website Design for Marketing Agency Startup</h3>

                                    <p class="card-text">
                                        I design and develop services for customers of all sizes, specializing in creating
                                        stylish, modern
                                        websites, web services and online stores
                                    </p>

                                    <a href="{{ url('./') }}" class="btn btn-primary">View Project</a>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="portfolio-card">

                                <div class="card-banner img-holder" style="--width: 800; --height: 540;">
                                    <img src="{{ asset('./assets/images') }}/portfolio-2.jpg" width="800" height="540"
                                        loading="lazy" alt="Website Design for Marketing Agency Startup" class="img-cover">

                                    <a href="{{ url('./') }}" class="btn-icon"
                                        aria-label="More about Website Design for Marketing Agency Startup">
                                        <ion-icon name="arrow-forward-sharp" aria-hidden="true"></ion-icon>
                                    </a>
                                </div>

                                <div class="card-content">

                                    <span class="chip label-md">Web Design</span>

                                    <h3 class="title-md">Website Design for Marketing Agency Startup</h3>

                                    <p class="card-text">
                                        I design and develop services for customers of all sizes, specializing in creating
                                        stylish, modern
                                        websites, web services and online stores
                                    </p>

                                    <a href="{{ url('./') }}" class="btn btn-primary">View Project</a>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="portfolio-card">

                                <div class="card-banner img-holder" style="--width: 800; --height: 540;">
                                    <img src="{{ asset('./assets/images') }}/portfolio-3.jpg" width="800" height="540"
                                        loading="lazy" alt="Website Design for Marketing Agency Startup" class="img-cover">

                                    <a href="{{ url('./') }}" class="btn-icon"
                                        aria-label="More about Website Design for Marketing Agency Startup">
                                        <ion-icon name="arrow-forward-sharp" aria-hidden="true"></ion-icon>
                                    </a>
                                </div>

                                <div class="card-content">

                                    <span class="chip label-md">Web Design</span>

                                    <h3 class="title-md">Website Design for Marketing Agency Startup</h3>

                                    <p class="card-text">
                                        I design and develop services for customers of all sizes, specializing in creating
                                        stylish, modern
                                        websites, web services and online stores
                                    </p>

                                    <a href="{{ url('./') }}" class="btn btn-primary">View Project</a>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="portfolio-card">

                                <div class="card-banner img-holder" style="--width: 800; --height: 540;">
                                    <img src="{{ asset('./assets/images') }}/portfolio-4.jpg" width="800" height="540"
                                        loading="lazy" alt="Website Design for Marketing Agency Startup" class="img-cover">

                                    <a href="{{ url('./') }}" class="btn-icon"
                                        aria-label="More about Website Design for Marketing Agency Startup">
                                        <ion-icon name="arrow-forward-sharp" aria-hidden="true"></ion-icon>
                                    </a>
                                </div>

                                <div class="card-content">

                                    <span class="chip label-md">Web Design</span>

                                    <h3 class="title-md">Website Design for Marketing Agency Startup</h3>

                                    <p class="card-text">
                                        I design and develop services for customers of all sizes, specializing in creating
                                        stylish, modern
                                        websites, web services and online stores
                                    </p>

                                    <a href="{{ url('./') }}" class="btn btn-primary">View Project</a>

                                </div>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>

        </article>
    </main>
@endsection
