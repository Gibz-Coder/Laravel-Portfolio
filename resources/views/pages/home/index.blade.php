@extends('layouts.pages.base')
@section('content')
    <section class="home section" id="home">
        <div class="home_container container grid">
            @foreach ($abouts as $about)
            <div class="home_img">
                @if ($about->home_image)
                <img src="{{ asset('assets/img/' . $about->home_image) }}" alt="">
                @else
                <img src="{{ asset('assets/img/home.png') }}" alt="">
                @endif
            </div>

            <div class="home_data">
                <h1 class="home_title">Hi, I'am {{$about->name}}</h1>
                <h3 class="home_subtitle">{!! $about->description !!}</h3>
                <p class="home_description">
                    {!! $about->tagline !!}
                </p>

                <a href="#contact" class="button button--flex">
                    Contact Me <i class="uil uil-message button__icon"></i>
                </a>
                <div class="home_scroll">
                    <a href="#about" class="home_scroll-button button--flex"></a>
                    <i class="uil uil-mouse-alt home_scroll-mouse"></i>
                    <span class="home_scroll-name">Scroll down</span>
                    <i class="uil uil-arrow-down home_scroll-arrow"></i>
                </div>
                <div class="home_social">
                    <span class="home_social-follow">Follow Me</span>
                    <div class="home_social-links">
                        @foreach ($mediasHome as $media)
                        <a href="{{$media->link}}" target="_blank" class="home_social-icon">
                            <i class="uil uil-{{$media->icon}}"></i>
                        </a>
                        @endforeach
                    </div>
                </div>

                <div class="home_scroll_social">
                    <div class="home_scroll1">
                        <a href="#about" class="home_scroll-button button--flex"></a>
                        <i class="uil uil-mouse-alt home_scroll-mouse"></i>
                        <span class="home_scroll-name">Scroll down</span>
                        <i class="uil uil-arrow-down home_scroll-arrow"></i>
                    </div>
                    <div class="home_social1">
                        <div class="home_social-link">
                            @foreach ($mediasHome as $media)
                            <a href="{{$media->link}}" target="_blank" class="home_social-icon">
                                <i class="uil uil-{{$media->icon}}"></i>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </section>

    <!--==================== ABOUT ====================-->
    <section class="about section" id="about">
        <h2 class="section__title">About Me</h2>
        <span class="section__subtitle">My introduction</span>

        <div class="about_container container grid">
            @foreach ($abouts as $about)
                @if($about->banner_image)
                    <img src="{{ asset('assets/img/' . $about->banner_image) }}" alt="" class="about_img">
                @else
                    <img src="{{ asset('assets/img/about-img.png') }}" alt="" class="about_img">
                @endif
            @endforeach

            <div class="about_data">
                <p class="about_data">
                    {!! $about->summary !!}
                </p>
            <br>
            <br>

            <div class="about_info">
                <div>
                    <span class="about_info-title">10+</span>
                    <span class="about_info-name">Years <br>experience</span>
                </div>
                <div>
                    <span class="about_info-title">{{ $projectCount }}+</span>
                    <span class="about_info-name">Completed <br>project</span>
                </div>
                <div>
                    <span class="about_info-title">{{ $experiencesCount }}+</span>
                    <span class="about_info-name">Companies <br>worked</span>
                </div>
            </div>
            <div class="about_buttons">
                <a href="{{ asset('assets/pdf/johndoe-Cv.pdf') }}" class="button button--flex">
                    Download CV <i class="uil uil-download-alt button_icon"></i>
                </a>
            </div>
            </div>
        </div>
    </section>

    <!--==================== SKILLS ====================-->
    <section class="skills section" id="skills">
        <h2 class="section__title">Skills</h2>
        <span class="section__subtitle">My technical level</span>

        <div class="skills_container container grid">
            @foreach ($services as $service)
            <div>
                <div class="skills_content skills_open">
                    <div class="skills_header">
                        <i class="uil {{$service->icon}} skills_icon"></i>

                        <div>
                            <h1 class="skills_title">{{ $service->name }}</h1>
                            <span class="skills_subtitle">More than {{ $service->experience }} years</span>
                        </div>

                        <i class="uil uil-angle-down skills_arrow"></i>
                    </div>
                    <div class="skills_list grid">
                        @foreach ($service->skills as $skill)
                        <div class="skills_data">
                            <div class="skills_titles">
                                <h3 class="skills_name">{{ $skill->name }}</h3>
                                <span class="skills_number">{{ $skill->proficiency }}%</span>
                            </div>
                            <div class="skills_bar">
                                <span class="skills_percentage" style="width: {{ $skill->proficiency }}%;"></span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div> 
            </div>
            @endforeach            
        </div>
    </section>

    <!--==================== QUALIFICATION ====================-->
    <section class="qualification section">
        <h2 class="section__title">Qualification</h2>
        <span class="section__subtitle">My personal journal</span>

        <div class="qualification_container container">
        <div class="qualification_tabs">
            <div class="qualificaction_button button--flex qualification_active" data-target="#education">
                <i class="uil uil-graduation-cap qualification_icon"></i>
                Education
            </div>
            <div class="qualificaction_button button--flex" data-target="#work">
                <i class="uil uil-briefcase-alt qualification-icon"></i>
                Work
            </div>
        </div>

        <div class="qualification_sections">
            <!--========== QUALIFICATION CONTENT 1 ==========-->
            <div class="qualification_content qualification_active" data-content id="education">
                @foreach ($educations as $education)
                    <div class="qualification_data">
                        @if ($loop->iteration % 2 == 1)
                            {{-- Left side item --}}
                            <div>
                                <h2 class="qualification_title">{{ $education->degree }}</h2>
                                <span class="qualification_subtitle">{{ $education->institution }}</span>
                                <span class="qualification_subtitle">{{ $education->department }}</span>
                                <div class="qualificaation_calender">
                                    <i class="uil uil-calender-alt"></i>
                                    {{ $education->period }}
                                </div>
                            </div>
                            <div>
                                <span class="qualification_rounder"></span>
                                <span class="qualification_line"></span>
                            </div>
                            <div></div>
                        @else
                            {{-- Right side item --}}
                            <div></div>
                            <div>
                                <span class="qualification_rounder"></span>
                                <span class="qualification_line"></span>
                            </div>
                            <div>
                                <h2 class="qualification_title">{{ $education->degree }}</h2>
                                <span class="qualification_subtitle">{{ $education->institution }}</span>
                                <span class="qualification_subtitle">{{ $education->department }}</span>
                                <div class="qualificaation_calender">
                                    <i class="uil uil-calender-alt"></i>
                                    {{ $education->period }}
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
            <!--========== QUALIFICATION CONTENT 2 ==========-->
            <div class="qualification_content" data-content id="work">
                @foreach ($experiences as $experience)
                    <div class="qualification_data">
                        @if ($loop->iteration % 2 == 1)
                            {{-- Left side item --}}
                            <div>
                                <h2 class="qualification_title">{{ $experience->position }}</h2>
                                <span class="qualification_subtitle">{{ $experience->company }}</span>
                                <div class="qualificaation_calender">
                                    <i class="uil uil-calender-alt"></i>
                                    {{ $experience->period }}
                                </div>
                            </div>
                            <div>
                                <span class="qualification_rounder"></span>
                                <span class="qualification_line"></span>
                            </div>
                            <div></div>
                        @else
                            {{-- Right side item --}}
                            <div></div>
                            <div>
                                <span class="qualification_rounder"></span>
                                <span class="qualification_line"></span>
                            </div>
                            <div>
                                <h2 class="qualification_title">{{ $experience->position }}</h2>
                                <span class="qualification_subtitle">{{ $experience->company }}</span>
                                <div class="qualificaation_calender">
                                    <i class="uil uil-calender-alt"></i>
                                    {{ $experience->period }}
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>

    <!--==================== SERVICES ====================-->
    <section class="services section" id="services">
        <h2 class="section__title">Services</h2> 
        <span class="section__subtitle">What is offer</span> 

        <div class="services_container container grid">
            @foreach ($services as $service)
                <div class="services_content">
                    <div>
                        <i class="uil {{$service->icon}} services_icon"></i>
                        <h3 class="services_title">{{$service->name}}</h3>
                    </div>
                    <span class="button button--flex button--small button--link services_button">
                        View More
                        <i class="uil uil-arrow-right button_icon"></i>
                    </span>

                    <div class="services_modal ">
                        <div class="services_modal-content">
                            <h4 class="services_modal-title">{{ $service->name }}</h4>
                            <i class="uil uil-times services_modal-close"></i>

                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>{{ $service->description }}</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Web page development.</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>I create ux element interactions.</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>I position your company brand.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </section>

    <!--==================== PORTFOLIO ====================-->
    <section class="portfolio section" id="portfolio">
        <h2 class="section__title">Portfolio</h2>  
        <span class="section__subtitle">Most recent work</span>

        <div class="portfolio_container container swiper-container">
        <div class="swiper-wrapper">
            @foreach ($projects as $project)
                <div class="portfolio_content grid swiper-slide">
                    @if ($project->image)
                        <img src="{{ asset('assets/img/' . $project->image) }}" alt="" class="portfolio_img">
                    @else
                        <img src="{{ asset('assets/img/portfolio.png') }}" alt="" class="portfolio_img">
                    @endif

                    <div class="portfolio_data">
                        <h3 class="portfolio_title">{{$project->title}}</h3>
                        <p class="portfolio_description">
                            {{$project->description}}
                        </p>
                        <a href="{{$project->link}}" class="button button--flex button--small portfolio_button">
                            Visit 
                            <i class="uil uil-arrow-right button_icon"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <!--Add Arrow-->
        <div class="swiper-button-next">
            <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
        </div>
        <div class="swiper-button-prev">
            <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
        </div>
        <!--Add Pagination-->
        <div class="swiper-pagination"></div>
        </div>
    </section>

    <!--==================== PROJECT IN MIND ====================-->
    <section class="project section">
        <div class="project_bg">
        <div class="project_container container grid">
            <div class="project_data">
                <h2 class="project_title">You have new project</h2>
                <p class="project_description">Contact me now and get a 50% discounted</p>
                <a href="#contact" class="button button--flex button--white">
                    Contact Me 
                    <i class="uil uil-message project_icon button_icon"></i>
                </a>
            </div>
            @foreach ($abouts as $about)
                @if ($about->home_image)
                    <img src="{{ asset('assets/img/' . $about->home_image) }}" alt="" class="project_img">
                @else
                    <img src="{{ asset('assets/img/home.png') }}" alt="" class="project_img">
                @endif
            @endforeach
        </div>
        </div>
    </section>

    <!--==================== TESTIMONIAL ====================-->
    <section class="testimonial section">
        <h2 class="section__title">Testimonial</h2>  
        <span class="section__subtitle">My client saying</span>

        <div class="testimonial_container container swiper-container">
        <div class="swiper-wrapper">
            @foreach ($testimonials as $testimonial)
                <div class="testimonial_content swiper-slide">
                    <div class="testimonial_data">
                        <div class="testimonial_header">
                            @if ($testimonial->image)
                                <img src="{{ asset('assets/img/' . $testimonial->image) }}" alt="" class="testimonial_img">
                            @else
                            <img src="{{ asset('assets/img/testimonial1.jpeg') }}" alt="" class="testimonial_img">
                            @endif

                            <div>
                                <h3 class="testimonial_name">{{ $testimonial->name }}</h3>
                                <span class="testimonial_client">{{ $testimonial->function }}</span>
                            </div>
                        </div>

                        <div>
                            {!! str_repeat('<i class="uil uil-star testimonial_icon-star"></i>', $testimonial->rating) !!}
                        </div>
                    </div>
                    <p class="testimonial_description">
                        {{ $testimonial->testimony }}
                    </p>
                </div>
            @endforeach
        </div>
        <!--Add Pagination-->
        <div class="swiper-pagination swiper-pagination-testimonial"></div>
        </div>
    </section>

    <!--==================== CONTACT ME ====================-->
    <section class="contact section" id="contact">
        <h2 class="section__title">Contact Me</h2>
        <span class="section__subtitle">Get in touch</span>

        <div class="contact_container container grid">
            @foreach ($abouts as $about)
                <div>
                    <div class="contact_information">
                        <i class="uil uil-phone contact_icon"></i>

                        <div>
                            <h3 class="contact_title">Call Me</h3>
                            <span class="contact_subtitle">{{$about->phone}}/span>
                        </div>
                    </div>
                    <div class="contact_information">
                        <i class="uil uil-envelope contact_icon"></i>

                        <div>
                            <h3 class="contact_title">Email</h3>
                            <span class="contact_subtitle">{{$about->email}}</span>
                        </div>
                    </div>
                    <div class="contact_information">
                        <i class="uil uil-map-marker contact_icon"></i>

                        <div>
                            <h3 class="contact_title">Location</h3>
                            <span class="contact_subtitle">{{$about->address}}</span>
                        </div>
                    </div>
                </div>
            @endforeach

            <form method="post" action="{{route('contact.store')}}#contact" class="contact_form grid" id="contact-form">
                @csrf
                <div class="contact_inputs grid">
                    <div class="contact_content">
                        <label for="name" class="contact_label">Name</label>
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <input type="text" class="contact_input" name="name" id="name" value="{{ old('name') }}">
                    </div>
                    <div class="contact_content">
                        <label for="email" class="contact_label">Email</label>
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <input type="email" class="contact_input" name="email" id="email" value="{{ old('email') }}">
                    </div>
                </div>
                    <div class="contact_content">
                        <label for="project" class="contact_label">Project</label>
                        @error('project')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <input type="text" class="contact_input" name="project" id="project" value="{{ old('project') }}">
                    </div>
                <div class="contact_content">
                    <label for="description" class="contact_label">Project description</label>
                    @error('description')
                        <span class="error">{{ $message }}</span>
                    @enderror
                    <textarea name="description" id="description" cols="0" rows="7" class="contact_input">{{ old('description') }}</textarea>
                </div>
                <div>
                    <button type="submit" class="button button--flex">
                        Send Message
                        <i class="uil uil-message button_icon"></i>
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
