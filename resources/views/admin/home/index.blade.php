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
                    <span>16</span>
                </div>
                <div class="overview_link">
                    <span></span>
                    <a href="#">View Skills</a>
                </div>
            </div>
            <div class="overview_cards-item card">
                <div class="overview_data">
                    <p>Educations</p>
                    <span>16</span>
                </div>
                <div class="overview_link">
                    <span></span>
                    <a href="#">View Educations</a>
                </div>
            </div>
            <div class="overview_cards-item card">
                <div class="overview_data">
                    <p>Experience</p>
                    <span>16</span>
                </div>
                <div class="overview_link">
                    <span></span>
                    <a href="#">View Experiences</a>
                </div>
            </div>
            <div class="overview_cards-item card">
                <div class="overview_data">
                    <p>Services</p>
                    <span>16</span>
                </div>
                <div class="overview_link">
                    <span></span>
                    <a href="#">View Services</a>
                </div>
            </div>
            <div class="overview_cards-item card">
                <div class="overview_data">
                    <p>Projects</p>
                    <span>9</span>
                </div>
                <div class="overview_link">
                    <span></span>
                    <a href="#">View Projects</a>
                </div>
            </div>
            <div class="overview_cards-item card">
                <div class="overview_data">
                    <p>Testimonials</p>
                    <span>9</span>
                </div>
                <div class="overview_link">
                    <span></span>
                    <a href="#">View Testimonials</a>
                </div>
            </div>
            <div class="overview_cards-item card">
                <div class="overview_data">
                    <p>Messages</p>
                    <span>9</span>
                </div>
                <div class="overview_link">
                    <span></span>
                    <a href="#">View Messages</a>
                </div>
            </div>
            <div class="overview_cards-item card">
                <div class="overview_data">
                    <p>Users</p>
                    <span>9</span>
                </div>
                <div class="overview_link">
                    <span></span>
                    <a href="#">View Users</a>
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
                        <p>Product</p>
                    </div>
                    <div class="overview_table-items" >
                        <img src="{{ asset('assets/img/no-image.png') }}" />
                        <a>Product item.name item.name item.name</a>
                    </div>
                    <div class="overview_table-items" >
                        <img src="{{ asset('assets/img/no-image.png') }}" />
                        <a>Product item.name item.name item.name</a>
                    </div>
                    <div class="overview_table-items" >
                        <img src="{{ asset('assets/img/no-image.png') }}" />
                        <a>Product item.name item.name item.name</a>
                    </div>
                    <div class="overview_table-items" >
                        <img src="{{ asset('assets/img/no-image.png') }}" />
                        <a>Product item.name item.name item.name</a>
                    </div>
                    <div class="overview_table-items" >
                        <img src="{{ asset('assets/img/no-image.png') }}" />
                        <a>Product item.name item.name item.name</a>
                    </div>
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
                    <div class="overview_table-items" >
                        <img src="{{ asset('assets/img/avatar.jpg') }}" style="height:60px;width:60px;" />
                        <a>Product item.name item.name item.name</a>
                    </div>
                    <div class="overview_table-items" >
                        <img src="{{ asset('assets/img/avatar.jpg') }}" style="height:60px;width:60px;" />
                        <a>Product item.name item.name item.name</a>
                    </div>
                    <div class="overview_table-items" >
                        <img src="{{ asset('assets/img/avatar.jpg') }}" style="height:60px;width:60px;" />
                        <a>Product item.name item.name item.name</a>
                    </div>
                    <div class="overview_table-items" >
                        <img src="{{ asset('assets/img/avatar.jpg') }}" style="height:60px;width:60px;" />
                        <a>Product item.name item.name item.name</a>
                    </div>
                    <div class="overview_table-items" >
                        <img src="{{ asset('assets/img/avatar.jpg') }}" style="height:60px;width:60px;" />
                        <a>Product item.name item.name item.name</a>
                    </div>
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
            <div class="overview_skills-title">
                <h2>Frontend developer</h2>
            </div>
            <div class="skills_data">
                <div class="skills_titles">
                    <h3 class="skills_name">HTML</h3>
                    <span class="skills_number">90%</span>
                </div>
                <div class="skills_bar">
                    <span class="skills_percentage skills_html"></span>
                </div>
            </div>
            <div class="skills_data">
                <div class="skills_titles">
                    <h3 class="skills_name">CSS</h3>
                    <span class="skills_number">80%</span>
                </div>
                <div class="skills_bar">
                    <span class="skills_percentage skills_css"></span>
                </div>
            </div>
            <div class="skills_data">
                <div class="skills_titles">
                    <h3 class="skills_name">JavaScript</h3>
                    <span class="skills_number">75%</span>
                </div>
                <div class="skills_bar">
                    <span class="skills_percentage skills_js"></span>
                </div>
            </div>
        </div>
        <br>
        <div class="overview_skills">
            <div class="overview_skills-title">
                <h2>Backend developer</h2>
            </div>
            <div class="skills_data">
                <div class="skills_titles">
                    <h3 class="skills_name">PHP</h3>
                    <span class="skills_number">90%</span>
                </div>
                <div class="skills_bar">
                    <span class="skills_percentage skills_html"></span>
                </div>
            </div>
            <div class="skills_data">
                <div class="skills_titles">
                    <h3 class="skills_name">Node Js</h3>
                    <span class="skills_number">80%</span>
                </div>
                <div class="skills_bar">
                    <span class="skills_percentage skills_css"></span>
                </div>
            </div>
            <div class="skills_data">
                <div class="skills_titles">
                    <h3 class="skills_name">Python</h3>
                    <span class="skills_number">75%</span>
                </div>
                <div class="skills_bar">
                    <span class="skills_percentage skills_js"></span>
                </div>
            </div>
            <div class="skills_data">
                <div class="skills_titles">
                    <h3 class="skills_name">Ruby</h3>
                    <span class="skills_number">75%</span>
                </div>
                <div class="skills_bar">
                    <span class="skills_percentage skills_js"></span>
                </div>
            </div>
        </div>
        <br>
        <div class="overview_skills">
            <div class="overview_skills-title">
                <h2>Designer</h2>
            </div>
            <div class="skills_data">
                <div class="skills_titles">
                    <h3 class="skills_name">Figma</h3>
                    <span class="skills_number">90%</span>
                </div>
                <div class="skills_bar">
                    <span class="skills_percentage skills_html"></span>
                </div>
            </div>
            <div class="skills_data">
                <div class="skills_titles">
                    <h3 class="skills_name">Sketch</h3>
                    <span class="skills_number">80%</span>
                </div>
                <div class="skills_bar">
                    <span class="skills_percentage skills_css"></span>
                </div>
            </div>
            <div class="skills_data">
                <div class="skills_titles">
                    <h3 class="skills_name">Adobe XD</h3>
                    <span class="skills_number">75%</span>
                </div>
                <div class="skills_bar">
                    <span class="skills_percentage skills_js"></span>
                </div>
            </div>
            <div class="skills_data">
                <div class="skills_titles">
                    <h3 class="skills_name">Photoshop</h3>
                    <span class="skills_number">75%</span>
                </div>
                <div class="skills_bar">
                    <span class="skills_percentage skills_js"></span>
                </div>
            </div>
        </div>
    </div>
    
</section>
@endsection