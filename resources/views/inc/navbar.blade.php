
<nav class="navbar navbar-expand-lg navbar-light bg-light">
                <!-- Branding Image/logo -->
        <a class="nav-link" href="{{ url('/') }}">
            <img src="{{url ('img/logo2.png')  }}"  style="width:160px; height: 90px;" href="/">
        </a> 
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">      
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Programs
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="bootcamp">Coding Bootcamp</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="advisory">Student Advisory</a>
        </div>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="tuition">Tuition</a>
      </li>
       <li class="nav-item">
         
        <a class="nav-link" href="articles">Articles</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="/about">About</a>
      </li>     

       <!-- Authentication Links -->
      @if (Auth::guest())
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/register') }}">Add admin</a>
          </li>          
      @else
          <!--  @if(!empty($is_admin) && $is_admin)
          //   <li><a href="{{ url('/register') }}">Add admin</a></li>  
          // @endif-->
              <li class="dropdown">
                  <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="dropdown-toggle"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li class="nav-item">
                          <a class="nav-link" href="{{ url('/logout') }}"
                              onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
      @endif
     
    </ul>
    
  </div>
</nav>

