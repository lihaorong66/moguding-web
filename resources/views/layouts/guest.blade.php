<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge, chrome=1">
    <title>@yield ( 'title' ) - 蘑菇云</title>
    @section ( 'style' )
        <link rel="stylesheet" href="{{ asset ( 'assets/bootstrap@4.6.1/css/bootstrap.min.css' ) }}" />
        <link rel="stylesheet" href="{{ asset ( 'assets/fontawesome@6.0.0/css/fontawesome.min.css' ) }}" />
        <link rel="stylesheet" href="{{ asset ( 'assets/toastr@2.1.1/css/toastr.min.css' ) }}" />
        <link rel="stylesheet" href="{{ asset ( 'css/app.css' ) }}" />
    @show
</head>
<body class="bg-gradient-login">

<div class="container-login">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-12 col-md-9">
            <div class="card shadow-sm my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="login-form">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">@yield ( 'title' )</h1>
                                </div>
                                @yield ( 'content' )
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section ( 'script' )
    <script src="{{ asset ( 'assets/jquery@3.6.0/js/jquery.min.js' ) }}"></script>
    <script src="{{ asset ( 'assets/popper@2.11.2/js/popper.min.js' ) }}"></script>
    <script src="{{ asset ( 'assets/bootstrap@4.6.1/js/bootstrap.min.js' ) }}"></script>
    <script src="{{ asset ( 'assets/jquery.easing@1.4.1/js/jquery.easing.min.js' ) }}"></script>
    <script src="{{ asset ( 'assets/toastr@2.1.1/js/toastr.min.js' ) }}"></script>
    <script src="{{ asset ( 'js/app.min.js' ) }}"></script>
    @include ( 'shared._messages' )
@show

</body>
</html>
