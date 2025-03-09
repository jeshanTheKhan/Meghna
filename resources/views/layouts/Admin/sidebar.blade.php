
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-user"></i> User details update <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{ route('admin.all.user') }}">All-Client</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-user"></i> Client Details <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{ route('admin.add.client') }}">Add-Client</a></li>
                    <li><a href="{{ route('admin.all.client') }}">All-Client</a></li>
                  </ul>
                </li>
                <li><a><i class=" fa fa-database"></i> Cylinder Manufacture <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{ route('admin.add.cylinder-manu') }}">Add</a></li>
                    <li><a href="{{ route('admin.all.cylinder-manu') }}">All</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-circle"></i> Cylinder Origin <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{ route('admin.add.cylinder-origin') }}">Add Origin</a></li>
                    <li><a href="{{ route('admin.all.cylinder-origin') }}">All Origin</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-clipboard"></i> Cylinder Report <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{ route('admin.add.report') }}">Add Report</a></li>
                    <li><a href="{{ route('admin.all.report') }}">All Report</a></li>
                  </ul>
                </li>
               
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->