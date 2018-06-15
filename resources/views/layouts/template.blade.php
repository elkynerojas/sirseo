<!DOCTYPE HTML>

<html>
    <!--head-->
    @include('layouts.head')
    <body>
        <!-- Wrapper -->
            <div id="wrapper">

                <!-- title -->
                    @include('layouts.title')

                <!-- Menu -->
                @include('layouts.menu')
                <!-- Main -->
                    <div id="main">
                        <div class="inner">
                            <!--header-->
                            @include('layouts.header')
                            @yield('content')
                        </div>
                    </div>

                <!-- Footer -->
                    @include('layouts.footer')

            </div>

        <!-- Scripts -->
           @include('layouts.scripts')
           @yield('scripts')

    </body>
</html>
