<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? "laravel" }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

<div class="logo-section mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <img src="{{ Vite::asset('resources/images/logo-colored.png') }}" class="img-fluid" width="100">
                    <a class="btn btn-primary h-25" href="{{ route('home.index') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-section">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 87vh">
            {{ $slot }}
        </div>
    </div>
</div>

</body>
</html>