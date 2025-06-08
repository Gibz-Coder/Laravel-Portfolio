@extends('layouts.notFoundPage.base')
@section('content')
  <div class="notfound-body">
    <div class="notfound-container">
        <div class='notfound-card'>
          <h1>404</h1>
          <h2>Oops! Page Not Found!</h2>
          <br>
          <p>
            It seems like the page you're looking for <br />
            does not exist or might have been removed.
          </p>
          <div>
          <br>
            <a href="/" class="btn btn-link">Back to Home</a>
          </div>
        </div>
    </div>
</div>
@endsection