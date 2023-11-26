@extends('layouts.app')

@section('content')
    <main>
        <article>
            <section class="section hero" aria-label="home">
                <div class="container">

                    <div class="hero-content">

                        <p class="hero-subtitle">👋, My name is Imran</p>

                        <h1 class="headline-lg">I'm a Developer</h1>

                        <p class="hero-text body-md">
                            Based in Los Chittagong, Bangladesh.
                        </p>

                        <a href="#" class="btn btn-primary">Let's Start</a>

                    </div>



                    <figure class="hero-banner">
                        <img src="{{ asset('./assets/images') }}/me.jpg" width="680" height="645"
                            alt="Annie, the blonde, dressed in a green hoodie with a smile on her face" class="w-100">
                    </figure>

                </div>
            </section>


            <section class="section about" aria-label="about me">
                <h2 class="section-title headline-md text-center" id="skill-label">About me</h2>
                <div class="container">

                    <figure class="about-banner">
                        <img src="{{ asset('./assets/images') }}/me.jpg" width="580" height="554" loading="lazy"
                            alt="Annie, the blonde, dressed in a black tops with a smile on her face" class="w-100">
                    </figure>

                    <div class="about-content">

                        <h2 class="title-lg">I'm a Freelancer Front-end Developer with over 3 years of experience.</h2>

                        <p class="body-md section-text">
                            I'm a Freelancer Front-end Developer with over 3 years of experience. I'm from San
                            Francisco. I code and
                            create web elements for amazing people around the world. I like work with new people. New
                            people new
                            Experiences.
                        </p>

                        <ul class="about-list">

                            <li>
                                <p class="list-text">
                                    <strong class="strong title-md">285+</strong> Projet Completed
                                </p>
                            </li>

                            <li>
                                <p class="list-text">
                                    <strong class="strong title-md">190+</strong> Happy Clients
                                </p>
                            </li>

                        </ul>

                        <div class="wrapper">
                            <a href="{{ url('/contact') }}" class="btn btn-primary">Contact Me</a>

                            <a href="{{ url('/projects') }}" class="btn btn-secondary">Projects</a>
                        </div>

                    </div>

                </div>
            </section>

            <section class="section skill" aria-labelledby="skill-label">
                <div class="container">

                    <div class="skill-content">

                        <h2 class="section-title headline-md" id="skill-label">My Skills</h2>

                        <ul class="skill-list">

                            <li>
                                <div class="card card-sm" style="background-color: hsl(177, 39%, 72%)">

                                    <div class="card-media">
                                        <ion-icon name="logo-html5"></ion-icon>
                                    </div>

                                    <h2 class="card-title">HTML</h2>

                                </div>
                            </li>

                            <li>
                                <div class="card card-sm" style="background-color: hsl(41, 99%, 64%)">

                                    <div class="card-media">
                                        <ion-icon name="logo-css3"></ion-icon>
                                    </div>

                                    <h2 class="card-title">CSS</h2>

                                </div>
                            </li>

                            <li>
                                <div class="card card-sm" style="background-color: hsl(19, 97%, 85%)">

                                    <div class="card-media">
                                        <ion-icon name="logo-react"></ion-icon>
                                    </div>

                                    <h2 class="card-title">React JS</h2>

                                </div>
                            </li>

                            <li>
                                <div class="card card-sm" style="background-color: hsl(221, 100%, 79%)">

                                    <div class="card-media">
                                        <ion-icon name="logo-angular"></ion-icon>
                                    </div>

                                    <h2 class="card-title">Angular</h2>

                                </div>
                            </li>

                            <li>
                                <div class="card card-sm" style="background-color: hsl(76, 39%, 72%)">

                                    <div class="card-media">
                                        <ion-icon name="logo-apple"></ion-icon>
                                    </div>

                                    <h2 class="card-title">iOs App</h2>

                                </div>
                            </li>

                            <li>
                                <div class="card card-sm" style="background-color: hsl(245, 100%, 90%)">

                                    <div class="card-media">
                                        <ion-icon name="logo-android"></ion-icon>
                                    </div>

                                    <h2 class="card-title">App Dev</h2>

                                </div>
                            </li>

                        </ul>

                    </div>

                    <figure class="skill-banner">
                        <img src="{{ asset('./assets/images') }}/me.jpg" width="581" height="657" loading="lazy"
                            alt="Annie, the blonde, dressed in a green hoodie with a smile on her face" class="w-100">
                    </figure>

                </div>
            </section>


            <section class="section testi" aria-labelledby="testi-label">
                <div class="container">

                    <h2 class="headline-md section-title text-center" id="testi-label">Testimonial</h2>

                    <ul class="slider">

                        <li class="slider-item card-container">
                            <div class="card card-lg">

                                <figure class="card-media">
                                    <img src="{{ asset('./assets/images') }}/testi-1.jpg" width="100" height="100"
                                        loading="lazy" alt="Jennifer Lutheran" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <blockquote class="body-sm">
                                        Dolor lorem is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.
                                    </blockquote>

                                    <p class="client-name">Jennifer Lutheran</p>

                                    <p class="client-title">CEO at pxdraft</p>

                                </div>

                            </div>
                        </li>

                        <li class="slider-item card-container">
                            <div class="card card-lg">

                                <figure class="card-media">
                                    <img src="{{ asset('./assets/images') }}/testi-2.jpg" width="100" height="100"
                                        loading="lazy" alt="Jennifer Lutheran" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <blockquote class="body-sm">
                                        Dolor lorem is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.
                                    </blockquote>

                                    <p class="client-name">Jennifer Lutheran</p>

                                    <p class="client-title">CEO at pxdraft</p>

                                </div>

                            </div>
                        </li>

                        <li class="slider-item card-container">
                            <div class="card card-lg">

                                <figure class="card-media">
                                    <img src="{{ asset('./assets/images') }}/testi-3.jpg" width="100" height="100"
                                        loading="lazy" alt="Jennifer Lutheran" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <blockquote class="body-sm">
                                        Dolor lorem is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.
                                    </blockquote>

                                    <p class="client-name">Jennifer Lutheran</p>

                                    <p class="client-title">CEO at pxdraft</p>

                                </div>

                            </div>
                        </li>

                        <li class="slider-item card-container">
                            <div class="card card-lg">

                                <figure class="card-media">
                                    <img src="{{ asset('./assets/images') }}/testi-4.jpg" width="100" height="100"
                                        loading="lazy" alt="Jennifer Lutheran" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <blockquote class="body-sm">
                                        Dolor lorem is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the
                                        industry's standard dummy text ever since the 1500s.
                                    </blockquote>

                                    <p class="client-name">Jennifer Lutheran</p>

                                    <p class="client-title">CEO at pxdraft</p>

                                </div>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>

        </article>
    </main>
@endsection
