
<!--BEGIN NAVBAR-->
<nav class="navbar navbar-default navbar-fixed-top" style='z-index: 3 !important;'>
    <div>
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a href="{{ url('/') }}">
                <img class="header-logo" src="{{asset('images/wordlogo.png')}}">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->


            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                  @include('layouts.public-menu')
            </ul>
        </div>
    </div>
</nav>
<!--END NAVBAR-->
