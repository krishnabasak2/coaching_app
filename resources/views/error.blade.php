<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coaching</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('assets/css/plugin.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">

    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ url('assets/css/line.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <div class="min-vh-100 content-center">
                    <div class="error-page text-center">
                        <img src="{{ url('assets/img/svg/404.svg') }}" alt="404" class="svg">
                        <div class="error-page__title">{{$status ? $status : '500'}}</div>
                        {{-- <h5 class="fw-500">Sorry! the page you are looking for doesn't exist.</h5> --}}
                        <h5 class="fw-500">Sorry! Something went wrong Please try again after some time.</h5>
                        {{-- <div class="content-center mt-30">
                            <a href="index.html" class="btn btn-primary btn-default btn-squared px-30">Return
                                Home</a>
                        </div> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgYKHZB_QKKLWfIRaYPCadza3nhTAbv7c"></script>

    <script src="{{ url('assets/js/plugins.min.js') }}"></script>
    <script src="{{ url('assets/js/script.min.js') }}"></script>
</body>

</html>
