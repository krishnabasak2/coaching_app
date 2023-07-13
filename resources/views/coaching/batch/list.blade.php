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

    @if (!empty($list))
        @foreach ($list as $item)
            <div class="col-xl-4 mb-25 col-md-6">
                <div class="user-group radius-xl media-ui media-ui--early pt-30 pb-25">
                    <div class="border-bottom px-30">
                        <div class="media user-group-media d-flex justify-content-between">
                            <div class="media-body d-flex align-items-center flex-wrap text-capitalize my-sm-0 my-n2">
                                <a href="application-ui.html">
                                    <h6 class="mt-0  fw-500 user-group media-ui__title bg-transparent">
                                        {{ $item['batch_name'] }}
                                    </h6>
                                </a>
                                @if ($item['status'] == 'active')
                                    <span
                                        class="my-sm-0 my-2 media-badge text-uppercase color-white bg-success">{{ $item['status'] }}</span>
                                @elseif($item['status'] == 'suspend')
                                    <span
                                        class="my-sm-0 my-2 media-badge text-uppercase color-white bg-danger">{{ $item['status'] }}</span>
                                @endif
                            </div>
                            <div class="mt-n15">
                                <div class="dropdown dropleft">
                                    <button class="btn-link border-0 bg-transparent p-0" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ url('assets/img/svg/more-horizontal.svg') }}" alt="more-horizontal"
                                            class="svg">
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">View</a>
                                        <a class="dropdown-item"
                                            href="{{ url('admin/coaching/edit') }}/{{ $item['id'] }}">Edit</a>

                                        @if ($item['status'] == 'active')
                                            <a class="dropdown-item" href="#"
                                                onclick="batchStatus({{ $item['id'] }}, 'suspend')">Suspend</a>
                                        @elseif($item['status'] == 'suspend')
                                            <a class="dropdown-item" href="#"
                                                onclick="batchStatus({{ $item['id'] }}, 'active')">Active</a>
                                        @endif

                                        @if ($item['deleted_at'] == null)
                                            <a class="dropdown-item" href="#"
                                                onclick="batchStatus({{ $item['id'] }}, 'trash')">Trash</a>
                                        @else
                                            <a class="dropdown-item" href="#"
                                                onclick="batchStatus({{ $item['id'] }}, 'restore')">Restore</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="user-group-people mt-15 text-capitalize">
                            <div class="user-group-project">
                                <div class="d-flex align-items-center user-group-progress-top">
                                    <div class="media-ui__start">
                                        <span class="color-light fs-12">Start Date</span>
                                        <p class="fs-14 fw-500 color-dark mb-0">{{ $item['starting_date'] }}</p>
                                    </div>
                                    <div class="media-ui__end">
                                        <span class="color-light fs-12">end date</span>
                                        <p class="fs-16 fw-500 color-success mb-0">-</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="user-group-progress-bar">
                            <div class="progress-wrap d-flex align-items-center mb-0">
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 83%;"
                                        aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="progress-percentage">83%</span>
                            </div>
                            <p class="color-light fs-12 mb-20">12 / 15 tasks completed</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $list->links() }}
    @endif

@endsection
@push('script')
    <script>
        const batchStatus = (id, status) => {
            swal({
                    title: "Are you sure?",
                    text: `Do you want to change status!`,
                    icon: "warning",
                    buttons: true,
                    dangerMode: status == 'delete' || status == 'trash' || status == 'restore' ? true : false,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        let url = base_url + '/coaching/batch/status/' + id + '/' + status;
                        fetch(url).then(res => res.json())
                            .then(data => {
                                if (data.status == true) {
                                    swal({
                                        title: "Done!",
                                        text: data.message,
                                        icon: "success",
                                        button: "Okay",
                                    }).then(() => window.location.reload());
                                } else {
                                    swal({
                                        title: "Oops!",
                                        text: data.message,
                                        icon: "error",
                                        button: "Okay",
                                    }).then(() => window.location.reload());
                                }
                            });
                    }
                });
        }
    </script>
@endpush
