@extends('coaching.layout')
@section('content')
    <div class="col-lg-12">
        <div class="breadcrumb-main">
            <h4 class="text-capitalize breadcrumb-title">{{ $title }}</h4>
            <div class="breadcrumb-action justify-content-center flex-wrap">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('coaching') }}"><i class="uil uil-estate"></i>Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
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

    {{-- <div class="col-xxl-12 col-sm-12  mb-md-50 mb-30">
        <div class="card banner-feature banner-feature--5">
            <div class="banner-feature__shape">
                <img src="{{ url('assets/img/svg/group9010.svg') }}" alt="img">
            </div>
            <div class="d-flex justify-content-center">
                <div class="card-body">
                    <h1 class="banner-feature__heading color-white">{{ $title }}</h1>
                    <p class="banner-feature__para ">Create a new batch & help to build a beautyfull life.</p>
                    <button class="banner-feature__btn btn color-primary btn-md px-20 bg-white radius-xs fs-15">Create Batch</button>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="col-lg-12">
        <div class="card card-Vertical card-default card-md mb-4">
            <div class="card-header">
                <h6>Batch Details</h6>
            </div>
            <div class="card-body py-md-30">
                <form method="POST" action="">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-25">
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                placeholder="Batch Name*" name="batch_name" required
                                value="{{ !empty($coaching['batch_name']) ? $coaching['batch_name'] : '' }}"
                                autocomplete="off">
                            @error('batch_name')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-25">
                            <input type="date" class="form-control ih-medium ip-gray radius-xs b-light px-15"
                                placeholder="Starting From*" name="starting_date" required
                                value="{{ !empty($coaching['starting_date']) ? $coaching['starting_date'] : '' }}"
                                autocomplete="off">
                            @error('starting_date')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="layout-button mt-0">
                                <button type="reset" class="btn btn-default btn-squared btn-light px-20 "
                                    onclick="window.history.back()">cancel</button>
                                <button type="submit" class="btn btn-primary btn-default btn-squared px-30">save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
