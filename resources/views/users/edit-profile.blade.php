@extends('layouts.default')
@section('content')

<style>
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

</style>


<div class="container">
    <div class="main-body">    
          <div class="row gutters-sm">
            <div class="col-md-6 mx-auto mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <form action="{{ route('profile.update', $user) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <img src="{{ asset('default.png') }}" alt="{{ $user->name }}" class="rounded-circle" width="150">
                        <div class="mt-3">
                            <div class="form-group mt-4">
                                <h6 class="text-left">Name:</h6>
                                <input type="text" name="name" class="form-control shadow-none border-0" value="{{ $user->name }}" placeholder="Enter Your Name...">
                            </div>
                            <div class="form-group">
                                <h6 class="text-left">Bio:</h6>
                                <input type="text" name="bio" class="form-control shadow-none border-0" value="{{ $user->bio }}" placeholder="Enter Your bio">
                            </div>
                            <div class="form-group">
                                <h6 class="text-left">Email:</h6>
                                <input type="text" name="email" class="form-control shadow-none border-0" value="{{ $user->email }}" placeholder="Enter Your E-mail address">
                            </div>
                          <button type="submit" class="btn btn-primary text-uppercase" title="update profile">update</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection
