<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    {{-- theme meta --}}
    <meta name="theme-name" content="quixlab" />
  
    <title>Ashraf Ahmed | Main Template</title>
    {{-- Favicon icon --}}
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images')}}/favicon.png">
    {{-- Pignose Calender --}}
    <link href="{{asset('assets/plugins')}}/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    {{-- Chartist --}}
    <link rel="stylesheet" href="{{asset('assets/plugins')}}/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="{{asset('assets/plugins')}}/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    {{-- Custom Stylesheet --}}
    <link href="{{asset('assets/css')}}/style.css" rel="stylesheet">

</head>

<body>

    {{--PRELOADER STARTS--}}
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    {{--*******************
        Preloader end
    ********************--}}

    
    {{--**********************************
        Main wrapper start
    ***********************************--}}
    <div id="main-wrapper">

        {{--TOP NAVIGATION STARTS--}}
        @include('components.top-nav')
        {{--TOP NAVIGATION ENDS--}}

        {{--HEADER STARTS--}}
        @include('components.header')
        {{--HEADER ENDS--}}
        {{--SIDE NAVIGATION STARTS--}}
        @include('components.nav')
        {{--SIDE NAVIGATION ENDS--}}

        {{--CONTENT BODY STARTS--}}
        @yield('content')
        {{--CONTENT BODY ENDS--}}
        
        
        {{--FOOTER STARTS--}}
        @include('components.footer')
        {{--FOOTER ENDS--}}
    </div>
    {{--**********************************
        Main wrapper end
    ***********************************--}}

    {{--**********************************
        Scripts
    ***********************************--}}
    <script src="{{asset('assets/plugins')}}/common/common.min.js"></script>
    <script src="{{asset('assets/js')}}/custom.min.js"></script>
    <script src="{{asset('assets/js')}}/settings.js"></script>
    <script src="{{asset('assets/js')}}/gleek.js"></script>
    <script src="{{asset('assets/js')}}/styleSwitcher.js"></script>

    {{-- Chartjs --}}
    <script src="{{asset('assets/plugins')}}/chart.js/Chart.bundle.min.js"></script>
    {{-- Circle progress --}}
    <script src="{{asset('assets/plugins')}}/circle-progress/circle-progress.min.js"></script>
    {{-- Datamap --}}
    <script src="{{asset('assets/plugins')}}/d3v3/index.js"></script>
    <script src="{{asset('assets/plugins')}}/topojson/topojson.min.js"></script>
    <script src="{{asset('assets/plugins')}}/datamaps/datamaps.world.min.js"></script>
    {{-- Morrisjs --}}
    <script src="{{asset('assets/plugins')}}/raphael/raphael.min.js"></script>
    <script src="{{asset('assets/plugins')}}/morris/morris.min.js"></script>
    {{-- Pignose Calender --}}
    <script src="{{asset('assets/plugins')}}/moment/moment.min.js"></script>
    <script src="{{asset('assets/plugins')}}/pg-calendar/js/pignose.calendar.min.js"></script>
    {{-- ChartistJS --}}
    <script src="{{asset('assets/plugins')}}/chartist/js/chartist.min.js"></script>
    <script src="{{asset('assets/plugins')}}/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="{{asset('assets/js')}}/dashboard/dashboard-1.js"></script>

</body>

</html>