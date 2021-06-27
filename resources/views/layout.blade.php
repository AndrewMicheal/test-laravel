<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel = "stylesheet" href = "{{asset('css/bootstrap.min.css')}}"/>
    <!-- علشان لو كل صفحة ليها style خاص بيها -->
    @yield('pages_style') 
</head>
<body>
    @yield('main')
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- علشان لو كل صفحة ليها js خاص بيها -->
    @yield('pages_script')

</body>
</html>