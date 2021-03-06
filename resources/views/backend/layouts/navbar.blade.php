<nav class="navbar navbar-expand-sm navbar-default">

    <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
        <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
    </div>

    <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="{{asset('index.html')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
            </li>
            <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-puzzle-piece"></i><a href="{{asset('ui-buttons.html')}}">Buttons</a></li>
                    <li><i class="fa fa-id-badge"></i><a href="{{asset('ui-badges.html')}}">Badges</a></li>
                    <li><i class="fa fa-bars"></i><a href="{{asset('ui-tabs.html')}}">Tabs</a></li>
                    <li><i class="fa fa-share-square-o"></i><a href="{{asset('ui-social-buttons.html')}}">Social Buttons</a></li>
                    <li><i class="fa fa-id-card-o"></i><a href="{{asset('ui-cards.html')}}">Cards</a></li>
                    <li><i class="fa fa-exclamation-triangle"></i><a href="{{asset('ui-alerts.html')}}">Alerts</a></li>
                    <li><i class="fa fa-spinner"></i><a href="{{asset('ui-progressbar.html')}}">Progress Bars</a></li>
                    <li><i class="fa fa-fire"></i><a href="{{asset('ui-modals.html')}}">Modals</a></li>
                    <li><i class="fa fa-book"></i><a href="{{asset('ui-switches.html')}}">Switches</a></li>
                    <li><i class="fa fa-th"></i><a href="{{asset('ui-grids.html')}}">Grids</a></li>
                    <li><i class="fa fa-file-word-o"></i><a href="{{asset('ui-typgraphy.html')}}">Typography</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-table"></i><a href="{{asset('tables-basic.html')}}">Basic Table</a></li>
                    <li><i class="fa fa-table"></i><a href="{{asset('tables-data.html')}}">Data Table</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-th"></i><a href="{{asset('forms-basic.html')}}">Basic Form</a></li>
                    <li><i class="menu-icon fa fa-th"></i><a href="{{asset('forms-advanced.html')}}">Advanced Form</a></li>
                </ul>
            </li>

            <h3 class="menu-title">Icons</h3><!-- /.menu-title -->

            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{asset('font-fontawesome.html')}}">Font Awesome</a></li>
                    <li><i class="menu-icon ti-themify-logo"></i><a href="{{asset('font-themify.html')}}">Themefy Icons</a></li>
                </ul>
            </li>
            <li>
                <a href="{{asset('widgets.html')}}"> <i class="menu-icon ti-email"></i>Widgets </a>
            </li>
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-line-chart"></i><a href="{{asset('charts-chartjs.html')}}">Chart JS</a></li>
                    <li><i class="menu-icon fa fa-area-chart"></i><a href="{{asset('charts-flot.html')}}">Flot Chart</a></li>
                    <li><i class="menu-icon fa fa-pie-chart"></i><a href="{{asset('charts-peity.html')}}">Peity Chart</a></li>
                </ul>
            </li>

            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-map-o"></i><a href="{{asset('maps-gmap.html')}}">Google Maps</a></li>
                    <li><i class="menu-icon fa fa-street-view"></i><a href="{{asset('maps-vector.html')}}">Vector Maps</a></li>
                </ul>
            </li>
            <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-sign-in"></i><a href="{{asset('login')}}">Login</a></li>
                    <li><i class="menu-icon fa fa-sign-in"></i><a href="{{asset('page-register.html')}}">Register</a></li>
                    <li><i class="menu-icon fa fa-paper-plane"></i><a href="{{asset('pages-forget.html')}}">Forget Pass</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
