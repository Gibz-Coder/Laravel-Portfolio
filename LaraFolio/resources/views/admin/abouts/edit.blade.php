@extends('layouts.admin.base')
@section('content')
<section class="about" id="about">
    <form method="POST" action="{{ route('admin.abouts.update', $about->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        @include('admin.abouts.form', ['formMode' => 'edit'])
    </form>

    <div class="card-wrapper" style="margin-top:-5px">
        <div class="wrapper_left">
            <div class="card">
                <h2>Social media</h2>
                <div class="social_table-heading">
                    <p>Link</p>
                    <p>Icon</p>
                    <p></p>
                </div>
                <!-- item 1 -->
                <div class="social_table-items">
                    <p>Backend Developer</p>
                    <button class="service_table-icon">
                        <i class=" fas fa-pencil-alt"></i>
                    </button>
                    <button class=" danger" >
                        delete
                    </button>
                </div> 
                <br>
                <form action="">
                    <div class="social_table-heading">
                        <p>Link</p>
                        <span style="color:#006fbb;">(Find your icon class: Font Awesome)</span>
                        <p></p>
                    </div>
                    <p></p>
                    <div class="social_table-items">
                        <input type="text">
                        <input type="text">
                        <button>
                            Add Media
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="wrapper_right hidden">
                
        </div>
    </div>
    
</section>
@endsection
