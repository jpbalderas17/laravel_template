@php
    $auth_user=Auth::user();
@endphp
<header class="main-header brand-bg">
    <a href="index.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img src='dist/img/sgtsi favico.png' /></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>RSC</b> IS</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php
                            $image="/dist/img/user_placeholder.png";
                        ?>
                        <img src="<?php echo $image;?>" class="user-image" alt="User Image">
                        <span class="hidden-xs">
                            {{ $auth_user["last_name"].", ".$auth_user["first_name"]." ".$auth_user["middle_name"] }}
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?php echo $image;?>" class="img-circle" alt="User Image">
                            <p>
                                {{ $auth_user["last_name"].", ".$auth_user["first_name"]." ".$auth_user["middle_name"] }}
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ url('user/my_profile') }}" class="btn btn-flat btn-default ">My Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-flat btn-default ">Logout</a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
