<?php include('app/appdata/hunter.php')?>
<nav class="cm-navbar cm-navbar-primary">
    <div class="cm-flex"><a href="index.html"><img src="assets/img/logo3_White.png" height="50px" width="100px"></a></div>
    <div class="btn btn-primary md-menu-white" data-toggle="cm-menu"></div>
</nav>
<div id="cm-menu-content">
    <div id="cm-menu-items-wrapper">
        <div id="cm-menu-scroller">
            <ul class="cm-menu-items">
                <li><a href="main.php?page=dashboard" class="sf-dashboard-alt">Dashboard</a></li>
                <li class="cm-submenu">
                    <a class="sf-user-male-alt">Customer Management <span class="caret"></span></a>
                    <ul>
                        <li><a href="main.php?page=createcust">Create Customer Profile</a></li>
                        <li><a href="main.php?page=editcust">Edit Customer Details</a></li>
                    </ul>
                </li>
                <li class="cm-submenu">
                    <a class="sf-bag">Order Management <span class="caret"></span></a>
                    <ul>
                        <li><a href="main.php?page=neworder">Create a new Order</a></li>
                        <li><a href="main.php?page=search">Search Order</a></li>
                        <li><a href="main.php?page=createquote">Generate Quotation</a></li>
                    </ul>
                </li>
                <li class="cm-submenu">
                    <a class="sf-brick">Project Management <span class="caret"></span></a>
                    <ul>
                        <li><a href="main.php?page=search">Search Project</a></li>
                        <li><a href="main.php?page=manageproj">Manage Project</a></li>
                        <li><a href="main.php?page=pendingproj">Pending Projects</a></li>
                    </ul>
                </li>
                <li class="cm-submenu">
                    <a class="sf-terminal">Network Management <span class="caret"></span></a>
                    <ul>
                        <li><a href="main.php?page=serverstatus">Server Status</a></li>
                        <li><a href="main.php?page=manageservers">Manage Servers</a></li>
                        <li><a href="main.php?page=whole_netstat">Wholesale Network Status</a></li>
                    </ul>
                </li>
                <li class="cm-submenu">
                    <a class="sf-money">Finance Management <span class="caret"></span></a>
                    <ul>
                        <li><a href="main.php?page=plans">Plan & Pricing</a></li>
                        <li><a href="https://www.sampathvishwa.com/SVRClientWeb/ActionController" target="_blank">Online Banking - Sampath Vishwa</a></li>
                    </ul>
                </li>
                <li class="cm-submenu">
                    <a class="sf-monitor">Report Management <span class="caret"></span></a>
                    <ul>
                        <li><a href="main.php?page=rep_allact_serv">Configuration Report</a></li>

                    </ul>
                </li>
                <li class="cm-submenu">
                    <a class="sf-profile-group">User Management <span class="caret"></span></a>
                    <ul>
                        <li><a href="main.php?page=newuser">Create New User</a></li>
                        <li><a href="main.php?page=reset_pw">Reset Password</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</div>
</div>
<header id="cm-header">
    <nav class="cm-navbar cm-navbar-primary">
        <div class="btn btn-primary md-menu-white hidden-md hidden-lg" data-toggle="cm-menu"></div>
        <div class="cm-flex">
            <h1>Home</h1>
            <form id="cm-search" action="index.html" method="get">
                <input type="search" name="q" autocomplete="off" placeholder="Search...">
            </form>
        </div>
        <div class="pull-right">
            <div id="cm-search-btn" class="btn btn-primary md-search-white" data-toggle="cm-search"></div>
        </div>

        <div class="dropdown pull-right">
            <button class="btn btn-primary md-account-circle-white" data-toggle="dropdown"></button>
            <ul class="dropdown-menu">
                <li class="disabled text-center">
                    <a style="cursor:default;"><strong>Hi&nbsp;<?php echo $fullname; ?> !!</strong></a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="main.php?page=changepw"><i class="fa fa-fw fa-key"></i> Change Password</a>
                </li>
                <li>
                    <a href="app/appdata/logout.php"><i class="fa fa-fw fa-sign-out"></i> Sign out</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
