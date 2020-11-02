<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('frontend.layout.css')

</head>

<body>

    @include('frontend.layout.menu')

    @include('frontend.layout.breadcrumbs')

    @yield('content')


    @include('frontend.layout.footer')

    @include('frontend.layout.script')


</body>


</html>
