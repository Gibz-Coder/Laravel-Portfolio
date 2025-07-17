@extends('layouts.admin.home')
@section('content')    

<section class="overview" id="overview">
    <div class="overview_left">
        <div class="titlebar">
            <h1 style="padding-left: 10px;">Overview Dashboard</h1>
        </div>

        <!-- TOP CARDS -->
        <div class="overview_cards ">
            <div class="overview_cards-item card">
                <div class="overview_data">
                    <p>Skills</p>
                    @if($skillCount > 0)
                        <span>{{ $skillCount }}</span>
                    @else
                        <span>0</span>
                    @endif
                </div>
                <div class="overview_link">
                    <span></span>
                    <a href="{{ route('admin.skills.index') }}">View Skills</a>
                </div>
            </div>
            <div class="overview_cards-item card">
                <div class="overview_data">
                    <p>Educations</p>
                    @if($educationCount > 0)
                        <span>{{ $educationCount }}</span>
                    @else
                        <span>0</span>
                    @endif
                </div>
                <div class="overview_link">
                    <span></span>
                    <a href="{{ route('admin.educations.index') }}">View Educations</a>
                </div>
            </div>
            <div class="overview_cards-item card">
                <div class="overview_data">
                    <p>Experience</p>
                    @if ($experienceCount > 0)
                        <span>{{ $experienceCount }}</span>
                    @else
                        <span>0</span>
                    @endif
                </div>
                <div class="overview_link">
                    <span></span>
                    <a href="{{ route('admin.experiences.index') }}">View Experiences</a>
                </div>
            </div>
            <div class="overview_cards-item card">
                <div class="overview_data">
                    <p>Services</p>
                    @if ($serviceCount > 0)
                        <span>{{ $serviceCount }}</span>
                    @else
                        <span>0</span>
                    @endif
                </div>
                <div class="overview_link">
                    <span></span>
                    <a href="{{ route('admin.services.index') }}">View Services</a>
                </div>
            </div>
            <div class="overview_cards-item card">
                <div class="overview_data">
                    <p>Projects</p>
                    @if ($projectCount > 0)
                        <span>{{ $projectCount }}</span>
                    @else
                        <span>0</span>
                    @endif
                </div>
                <div class="overview_link">
                    <span></span>
                    <a href="{{ route('admin.projects.index') }}">View Projects</a>
                </div>
            </div>
            <div class="overview_cards-item card">
                <div class="overview_data">
                    <p>Testimonials</p>
                    @if ($testimonialCount > 0)
                        <span>{{ $testimonialCount }}</span>
                    @else
                        <span>0</span>
                    @endif
                </div>
                <div class="overview_link">
                    <span></span>
                    <a href="{{ route('admin.testimonials.index') }}">View Testimonials</a>
                </div>
            </div>
            <div class="overview_cards-item card">
                <div class="overview_data">
                    <p>Messages</p>
                    @if ($messageCount > 0)
                        <span>{{ $messageCount }}</span>
                    @else
                        <span>0</span>
                    @endif
                </div>
                <div class="overview_link">
                    <span></span>
                    <a href="{{ route('admin.messages.index') }}">View Messages</a>
                </div>
            </div>
            <div class="overview_cards-item card">
                <div class="overview_data">
                    <p>Users</p>
                    @if ($userCount > 0)
                        <span>{{ $userCount }}</span>
                    @else
                        <span>0</span>
                    @endif
                </div>
                <div class="overview_link">
                    <span></span>
                    <a href="{{ route('admin.users.index') }}">View Users</a>
                </div>
            </div>
            
            
        </div>
        <!-- MEDIUM CARDS -->
        <div class="overview_table ">
            <div>
                <div class="titlebar">
                    <h1>Latest Projects</h1>
                </div>
                <div class="table ui-card">
                    <div class="overview_table-header">
                        <p>Image</p> 
                        <p>Project</p>
                    </div>
                    @foreach ($projects as $project)
                    <div class="overview_table-items" >
                        @if ($project->image)
                            <img src="{{ asset('assets/img/' . $project->image) }}" alt="" class="project_img-list">
                        @else
                            <img src="{{ asset('assets/img/no-image.png') }}" alt="" class="project_img-list">
                        @endif
                        <a>{{ $project->title }}</a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div>
                <div class="titlebar">
                    <h1>Latest Testimonials</h1>
                </div>
                <div class="table">
                    <div class="overview_table-header">
                        <p>Image</p> 
                        <p>Testimonial</p>
                    </div>
                    @foreach ($testimonials as $testimonial)
                    <div class="overview_table-items">
                        @if ($testimonial->image)
                            <img src="{{ asset('assets/img/' . $testimonial->image) }}" alt="" class="testimonial_img-list">
                        @else
                            <img src="{{ asset('assets/img/no-image.png') }}" alt="" class="testimonial_img-list">
                        @endif
                        <a>{{ $testimonial->name }}</a>
                        <p>{{ Str::limit ($testimonial->testimony, 50) }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        
    </div>
    <div class="overview_right">
        <div class="overview_analyse ui-card">
            <canvas id="myChart"></canvas>
        </div>
        <div class="titlebar">
            <h1>Skills</h1>
        </div>
        <div class="overview_skills">
            @foreach ($services as $service)
                <div class="overview_skills-title">
                    <h2>{{ $service->name }}</h2>
                </div>
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
            @endforeach
        </div>
    </div>
    
</section>
@endsection