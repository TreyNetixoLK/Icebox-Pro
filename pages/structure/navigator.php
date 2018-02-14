<div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft"> <?php echo date("h:i:sa");?> </h1>
                      <p class="animated fadeInRight"> <?php echo date("l");?> </p>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header" href="main.php?page=dashboard"><span class="fa-home fa"></span> Dashboard </a>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-trophy fa"></span> Ordering
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="main.php?page=newsale">Create New Order</a></li>
                        <li><a href="main.php?page=newsale">Search Order</a></li>
                        <li><a href="main.php?page=createquote">Generate Quote</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-book fa"></span> Knowledge
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="chartjs.html">Domain Pricing</a></li>
                        <li><a href="morris.html">Morris</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a href="https://github.com/login" target="_blank" class="tree-toggle nav-header">
                        <span class="fa-github fa"></span> Github
                      </a>
                    </li>
                    <li class="ripple">
                      <a href="https://github.com/login" target="_blank" class="tree-toggle nav-header">
                        <span class="fa-slack fa"></span> Slack
                      </a>
                    </li>
                  </ul>
                </div>
            </div>
          <!-- end: Left Menu -->