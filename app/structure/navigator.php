<?php include('app/appdata/hunter.php')?>
<nav class="cm-navbar cm-navbar-midnight">
    <div class="cm-flex"><a href="index.html"><img src="assets/img/logo3_White.png" height="50px" width="100px"></a></div>
    <div class="btn btn-midnight md-menu-white" data-toggle="cm-menu"></div>
</nav>
<div id="cm-menu-content">
    <div id="cm-menu-items-wrapper">
        <div id="cm-menu-scroller">
            <ul class="cm-menu-items">
              <li><a href="#" class="sf-dashboard-alt"></a></li>
                <li><a href="main.php?page=dashboard" class="sf-dashboard-alt">Dashboard</a></li>
                <li class="cm-submenu">
                    <a class="sf-user-male-alt">Customer Management <span class="caret"></span></a>
                    <ul>
                        <li><a href="main.php?page=createcust">Create Customer Profile</a></li>
                        <li><a href="main.php?page=editcust">Edit Customer Details</a></li>
                        <li><a href="main.php?page=allcustomers">Customer List</a></li>
                    </ul>
                </li>
                <li class="cm-submenu">
                    <a class="sf-bag">Sales Management <span class="caret"></span></a>
                    <ul>
                        <li><a href="main.php?page=neworder">Create a new Order</a></li>
                        <li><a href="main.php?page=search">Search Order</a></li>
                        <li><a href="main.php?page=manageorder">Manage Order</a></li>
                        <li><a href="main.php?page=createquote">Generate Quotation</a></li>
                    </ul>
                </li>
                <li class="cm-submenu">
                    <a class="sf-brick">Project Management <span class="caret"></span></a>
                    <ul>
                        <li><a href="main.php?page=search">Search Project</a></li>
                        <li><a href="main.php?page=manageproj_new">Manage Project</a></li>
                        <li><a href="main.php?page=pendingproj">Pending Projects</a></li>
                        <li><a href="https://trello.com/login" target="_blank">Project Board</a></li>
                    </ul>
                </li>
                <li class="cm-submenu">
                    <a class="sf-database">Network Management <span class="caret"></span></a>
                    <ul>
                      <!--  <li><a href="main.php?page=netwdashboard">Dashboard</a></li> -->
                        <li><a href="main.php?page=serverstatus">Create a new Server</a></li>
                        <li><a href="main.php?page=manageservers">Manage Services</a></li>
                        <li><a href="main.php?page=whole_netstat">Server Monitor</a></li>
                        <li><a href="https://akismet.com/account/" target="_blank">Search Engine Optimize</a></li>
                        <li><a href="https://tickets.cpanel.net/review/login.cgi?loggedout=1" target="_blank">Cpanel Support Portal</a></li>
                        <li><a href="https://support.plesk.com/access/unauthenticated?brand_id=848585&return_to=https%3A%2F%2Fplesk.zendesk.com%2F" target="_blank">Plesk Support Portal</a></li>
                    </ul>
                </li>
                <li class="cm-submenu">
                    <a class="sf-terminal">Development <span class="caret"></span></a>
                    <ul>
                        <li><a href="https://devops.netixo.lk/mantis/login_page.php" target="_blank">Mantis BT</a></li>
                    </ul>
                </li>
                <li class="cm-submenu">
                    <a class="sf-money">Finance Management <span class="caret"></span></a>
                    <ul>
                        <li><a href="main.php?page=plans">Plan & Pricing</a></li>
                        <li><a href="https://avabill.netixo.lk/auth/login" target="_blank">Avabill</a></li>
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

            </ul>\
        </div>
    </div>
</div>
</div>
<header id="cm-header">
    <nav class="cm-navbar cm-navbar-midnight">
        <div class="btn btn-midnight md-menu-white hidden-md hidden-lg" data-toggle="cm-menu"></div>
        <div class="cm-flex">
            <form id="cm-search" action="index.html" method="get">
                <input type="search" name="q" autocomplete="off" name="txtsearch" placeholder="Search order by Netixo Reference">
            </form>
        </div>
        <div class="dropdown pull-right">
            <button class="btn btn-midnight md-account-circle-white" data-toggle="dropdown"></button>
            <ul class="dropdown-menu">
              <li>
                <div align="center">
                  <img src="assets/img/pp/blank.png" height="70px" width="70px" alt="" class="img-thumbnail"> <br />
                  <div style="color:black;">
                  <strong><?php echo $fullname; ?></strong><br /><i><?php echo $desg; ?></i><br /></div>
                </div>
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
