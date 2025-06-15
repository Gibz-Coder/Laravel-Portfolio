@extends('layouts.notFoundPage.base')
@section('content')
  <div class="main-content p-0">
      <div class="panel error-panel">
          <div class="panel-body h-100 d-flex flex-column align-items-center justify-content-center">
              <div class="part-img">
                  <img src="{{ asset('assets/img/error-404.png') }}" alt="404">
              </div>
              <div class="part-txt text-center">
                  <h2 class="error-subtitle">Page Not Found</h2>
                  <a href="{{ url('/admin/dashboard') }}" class="btn btn-primary py-2 px-5 rounded-pill">Go to Home Page</a>
              </div>
          </div>
      </div>
  </div>
@endsection