<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>General</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- BOOTSTRAP  --}}
       <link href="{{ url('assets/css/style.css') }}" rel="stylesheet" />
       <script src="{{ url('assets/js/chart.js') }}"></script>
       <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
       <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
   {{-- END OF BOOTSTRAP FONT AWESOME   --}}
    {{-- END OF BOOTSTRAP FONT AWESOME --}}
       <link rel="stylesheet" href="{{url('fontawesome/css/all.min.css')}}" />
       {{-- END OF FONT AWESOME --}} 
         
</head>
<body style="background-image: url('https://t4.ftcdn.net/jpg/07/94/30/45/360_F_794304521_O4o0Y5UrvKtDxBNHY9utMowV2VhuhRpk.jpg');">>
    <div class="container-fluid">
        @include('navbar') <!-- Include your navigation bar -->

        <div class="row">
            <!-- Sidebar Section -->
            <div class="col-lg-2">
                <div class="container-fluid">
                    @include('sidebar') <!-- Include your sidebar file here -->
                </div>
            </div>

            <!-- Main Content Section -->
            <div class="col-lg-10">
                @yield('content') <!-- Main content area where different views can be yielded -->
            </div>
        </div>

        @include('footer')
    </div>
    
</body>
</html>