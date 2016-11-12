<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.meta')
    <title>@yield('title')</title>
    @include('layouts.css')
    @yield('css')

</head>

<body role="document">

@include('layouts.facebook')

<div id="app">

    <!-- Fixed navbar -->
    @include('layouts.nav')


    <div class="container theme-showcase" role="main">

        @yield('content')
        @include('layouts.bottom')


    </div> <!-- /container -->

</div>

@include('layouts.scripts')
@include('Alerts::show')
@yield('scripts')


</body>
</html>