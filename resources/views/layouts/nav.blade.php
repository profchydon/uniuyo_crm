<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container-fluid nav-container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand crm-header" id="ui" href="#"> University of Uyo CRM Portals </a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">

              @if (Route::has('login'))
                  <div class="top-right links">
                      @auth
                          <a href="{{ url('/home') }}">Home</a>
                      @else
                          <a href="" class="nav-a" data-toggle="modal" data-target=".loginform">Login</a>
                          <a href="" class="nav-a" data-toggle="modal" data-target=".registerform">Register</a>
                      @endauth
                  </div>
              @endif


                <!-- <li>
                    <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">dashboard</i>
                        <p class="hidden-lg hidden-md">Dashboard</p>
                    </a>
                </li>

                <li>
                    <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">person</i>
                        <p class="hidden-lg hidden-md">Profile</p>
                    </a>
                </li> -->
            </ul>


        </div>
    </div>
</nav>
