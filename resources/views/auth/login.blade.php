<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Couaching</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('assets/css/plugin.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">

    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ url('assets/css/line.css') }}">
</head>

<body>
    <main class="main-content">
        <div class="admin">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-8">
                        <div class="edit-profile">
                            <div class="edit-profile__logos">
                                <a href="index.html">
                                    <img class="dark" src="{{ url('assets/img/logo-dark.png') }}" alt>
                                </a>
                            </div>
                            <div class="card border-0">
                                <div class="card-header">
                                    <div class="edit-profile__title">
                                        <h6>{{ $title }}</h6>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="edit-profile__body">
                                        @if (Session::has('message'))
                                            <div class=" alert alert-danger  alert-dismissible fade show "
                                                role="alert">
                                                <div class="alert-content">
                                                    <p>{{ Session::get('message') }}</p>
                                                    <button type="button" class="btn-close text-capitalize"
                                                        data-bs-dismiss="alert" aria-label="Close">
                                                        <img src="{{ url('assets/img/svg/x.svg') }}" alt="x"
                                                            class="svg" aria-hidden="true">
                                                    </button>
                                                </div>
                                            </div>
                                        @endif
                                        <form action="" method="POST">
                                            @csrf
                                            <div class="form-group mb-25">
                                                <label for="username">Email Address</label>
                                                <input type="text" class="form-control" name="email" id="username"
                                                    placeholder="name@example.com">
                                                @error('email')
                                                    <small style="color: red"> {{ $message }} </small>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-15">
                                                <label for="password-field">password</label>
                                                <div class="position-relative">
                                                    <input id="password-field" type="password" class="form-control"
                                                        name="password" name="password" placeholder="Password">
                                                    <div
                                                        class="uil uil-eye-slash text-lighten fs-15 field-icon toggle-password2">
                                                    </div>
                                                    @error('password')
                                                        <small style="color: red"> {{ $message }} </small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="admin-condition">
                                                <a href="forget-password.html">forget password?</a>
                                            </div>
                                            <div
                                                class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                <button
                                                    class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn ">
                                                    Log in
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div id="overlayer">
        <div class="loader-overlay">
            <div class="dm-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </div>
    </div>

    <script src="{{ url('assets/js/plugins.min.js') }}"></script>
    <script src="{{ url('assets/js/script.min.js') }}"></script>

</body>

</html>
