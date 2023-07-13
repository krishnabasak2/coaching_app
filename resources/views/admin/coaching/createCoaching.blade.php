@extends('admin.layout')
@section('content')
    <div class="col-lg-12">
        <div class="breadcrumb-main">
            <h4 class="text-capitalize breadcrumb-title">Create Coaching</h4>
            <div class="breadcrumb-action justify-content-center flex-wrap">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}"><i class="uil uil-estate"></i>Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Create Coaching</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    @if (Session::has('message'))
        <div class=" alert alert-success  alert-dismissible fade show " role="alert">
            <div class="alert-content">
                <p>{{ Session::get('message') }}</p>
                <button type="button" class="btn-close text-capitalize" data-bs-dismiss="alert" aria-label="Close">
                    <img src="{{ url('assets/img/svg/x.svg') }}" alt="x" class="svg" aria-hidden="true">
                </button>
            </div>
        </div>
    @endif

    <div class="col-lg-12">
        <div class="card card-Vertical card-default card-md mb-4">
            <div class="card-header">
                <h6>Coaching Details</h6>
            </div>
            <div class="card-body py-md-30">
                <form method="POST" action="">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-25">
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                placeholder="Coaching Name*" name="coachingName" required
                                value="{{ !empty($coaching['name']) ? $coaching['name'] : '' }}" autocomplete="off">
                            @error('coachingName')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-25">
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                placeholder="Coaching Hade Name*" name="hadeName" required
                                value="{{ !empty($coaching['hade_name']) ? $coaching['hade_name'] : '' }}" autocomplete="off">
                            @error('hadeName')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-25">
                            <input type="email" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                placeholder="Email*" name="email" required
                                value="{{ !empty($coaching['email']) ? $coaching['email'] : '' }}" autocomplete="off">
                            @error('email')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-25">
                            <input type="number" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                placeholder="Phone No.*" name="phone" required
                                value="{{ !empty($coaching['phone']) ? $coaching['phone'] : '' }}" autocomplete="off">
                            @error('phone')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-25">
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                placeholder="Password*" name="password" {{ !empty($coaching['name']) ? '' : 'required' }} autocomplete="off">
                            @error('password')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-25">
                            <input type="number" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                placeholder="Max Students*" name="maxStudent" required
                                value="{{ !empty($coaching['max_student']) ? $coaching['max_student'] : '' }}" autocomplete="off">
                            @error('maxStudent')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-25">
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                placeholder="Address*" name="address" required
                                value="{{ !empty($coaching['address']) ? $coaching['address'] : '' }}" autocomplete="off">
                            @error('address')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="layout-button mt-0">
                                <button type="reset" class="btn btn-default btn-squared btn-light px-20 " onclick="window.history.back()">cancel</button>
                                <button type="submit" class="btn btn-primary btn-default btn-squared px-30">save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
