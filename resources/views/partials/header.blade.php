<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Brand</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
              <ul class="nav  float-right">
                <li nav-link>
                  <a href="/shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart
                    <span class="badge"> {{ Session::has('cart')? Session::get('cart')->totalQty : '' }} </span>
                  </a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> User Management </a>
                    <ul class="dropdown-menu">
                      @if(Auth::check())
                        <li><a href="/user/profile">User Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/user/logout">Logout</a></li>
                      @else
                        <li><a href="/signup">Signup</a></li>
                        <li><a href="/signin">Signin</a></li>
                      @endif
                        
                        
                        
                    </ul>
                </li>
            </ul>
        <!-- /.navbar-collapse -->
  </div>
</nav>