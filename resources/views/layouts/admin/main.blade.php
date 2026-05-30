<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') - TOEFL PNC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{asset('images/logo_pnc_2.png')}}">
    @stack('styles')
</head>

<body>
    <div id="wrapper">
        <!-- Sidebar -->
        @include('layouts.admin.sidebar')

        <!-- Page Content -->\
        <div id="content" class="p-0">
            <!-- Header -->
            @include('layouts.admin.header')

            <!-- Main Content -->
            <div class="container-fluid p-4">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{asset('js/admin.js')}}"></script>
    @include('layouts.admin.footer')
    @stack('scripts')
</body>
</html>