<nav class="navbar has-shadow">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item is-paddingless brand-item" href="{{route('home')}}">
                        <img src="{{asset('images/hms-logo.png')}}" alt="HMS logo">
                    </a>

                 @if (Request::segment(1) == "manage")
                    <a class="navbar-item is-hidden-desktop" id="admin-slideout-button">
                      <span class="icon">
                        <i class="fa fa-arrow-circle-o-right"></i>
                      </span>
                    </a>
                  @endif
                  <button class="button navbar-burger">
                      <span></span>
                      <span></span>
                      <span></span>
                    </button>
                   </div>
                   
                    <div class="navbar-menu">
                    <div class="navbar-start">
                    @guest
                    <a class="navbar-item is-tab is-active" href="{{ route('login') }}">Login</a>
                    @else
                    <a class="navbar-item is-tab is-active" href="{{ route('home') }}">Welcome</a>
                    @endguest
                    <a class="navbar-item is-tab " href="#">Solution</a>
                    <a class="navbar-item is-tab " href="#">Resources</a>
                    <a class="navbar-item is-tab " href="#">Contact Us</a>
                    <a class="navbar-item is-tab " href="#">About</a>
                    </div>

                    <div class="navbar-end nav-menu" style="overflow: visible">
                    @guest
                        <a href="{{ route('login') }}" class="navbar-item is-tab">Login</a>
                        <a href="{{ route('register') }}" class="navbar-item is-tab">Sign up</a>
                    @else
                        <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">Hey {{ Auth::user()->name }}</a>
                        <div class="navbar-dropdown is-right" style="overflow: visible;" >
                        <a href="#" class="navbar-item">
                        <span class="icon">
                        <i class="fa fa-fw fa-user-circle-o m-r-5"></i>
                        </span>Profile
                        </a>

                        <a href="#" class="navbar-item">
                        <span class="icon">
                        <i class="fa fa-fw fa-bell m-r-5"></i>
                        </span>Notifications
                        </a>
                        <a href="{{route('manage.dashboard')}}" class="navbar-item">
                        <span class="icon">
                        <i class="fa fa-fw fa-cog m-r-5"></i>
                        </span>Manage
                        </a>
                        <hr class="navbar-divider">
                        <a href="{{route('logout')}}" class="navbar-item" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        <span class="icon">
                             <i class="fa fa-fw fa-sign-out m-r-5"></i>
                           </span>
                            Logout
                        </a>
                         @include('_includes.forms.logout')
                        </div>
                    </div>
                    @endguest
                </div>
            </div>
            </div>
        </nav>