<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#FEE49F">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">






    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <meta name="msapplication-TileColor" content="#c3c3c3">


    @if(config('app.env') == 'local')
    <script>
        document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
             ':35729/livereload.js?snipver=1"></' + 'script>')
    </script>
    @else
    {{-- @include('block.googleAnalitic') --}}
    @endif
</head>

<body class="bg-gradient-primary">

        @php /*
        @if(Request::route()->getName()=="history")
        @php($bg_color="bg-history")
        @else
        @php($bg_color="")
        @endif
        class="{{$bg_color}}"
        */ @endphp
        <div id="wrapper">

            <!-- Sidebar -->
            @include("admin::inc.sidebar")
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    @include("admin::inc.topbar.index")

                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid" id="app">

                        {{--@include("admin::inc.table") --}}
                        @yield('content')
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                @include("admin::inc.footer")

                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
    @section('scripts')
            <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}?v=1.0.19" defer></script>
    @show
</body>

</html>