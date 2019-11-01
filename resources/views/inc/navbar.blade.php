
{{-- local custom css --}}
        <link rel="stylesheet" href="/css/nav.css">

        
     
<div class="topnav">  
  <div class="text-center mx-8">
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
                  <!-- Branding Image/logo -->
          <a class="nav-ink2" href="{{ url('/') }}">&nbsp;      &nbsp;  
              <img src="{{url ('img/logo2.png')  }}"  style="width:160px; height: 90px;">
          </a> 
  
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">      
      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown line" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <strong>Programs</strong> 
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="bootcamp">Coding Bootcamp</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="advisory">Student Advisory</a>
          </div>
        </li>
        &nbsp;
        &nbsp;
        <li class="{{ Request::is('tuition') ? 'active' : '' }}">
          <a class="nav-link" href="tuition" id="line"><strong>Tuition</strong> </a>
        </li>

        <li class="{{ Request::is('articles') ? 'active' : '' }}">         
          <a class="nav-link" href="articles" id="line"><strong>Articles</strong> </a>
        </li>

        <li class="{{ Request::is('about') ? 'active' : '' }}">
          <a class="nav-link" href="/about" id="line"><strong>About</strong> </a>
        </li>  
        <li class="{{ Request::is('subscribe') ? 'active' : '' }}">
          <a class="nav-link" href="subscribe" id="line"><strong>Subscribe</strong> </a>
        </li>   

        <!-- Authentication Links for login and admin adding -->
        @if (Auth::guest())
            <li class="{{ Request::is('login') ? 'active' : '' }}">
              <a class="nav-link" href="{{ url('/login') }}" id="line"><strong></strong> </a>
            </li>
            <li class="{{ Request::is('register') ? 'active' : '' }}">
              <a class="nav-link" href="{{ url('/register') }}" id="line"><strong></strong> </a>
            </li>   &nbsp;      &nbsp;       
        @else
                <li class="{{ Request::is('tuition') ? 'active' : '' }}">
                <a class="nav-link" href="home" id="line"><strong>U-Home</strong> </a>
                </li>

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
    </nav><br><br>
  </div>
</div>
