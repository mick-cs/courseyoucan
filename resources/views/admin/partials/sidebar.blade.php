      <!-- sidebar-->
      <aside class="aside">
         <!-- START Sidebar (left)-->
         <div class="aside-inner">
            <nav class="sidebar">
               <!-- START sidebar nav-->
               <ul class="nav">
                  <!-- START user info-->
                  <li>
                     <div class="item user-block text-center">
                        <!-- User picture-->
                        <div class="user-block-picture">
                           <div class="user-block-status">
                              <img src="{{asset('admin/img/user/02.jpg')}}" alt="Avatar" width="60" height="60" class="img-thumbnail img-circle">
                              <div class="circle circle-success circle-lg"></div>
                           </div>
                        </div>
                        <!-- Name and Job-->
                        <div class="user-block-info mb-lg">
                           <span class="user-block-name">Hello, {{Auth::user()->username}}</span>
                           <span class="user-block-role">Super Administrator</span>
                        </div>
                        <a class="btn btn-danger" href="{!! URL::to('admin/logout') !!}"> Logout </a>
                     </div>
                  </li>
                  <!-- END user info-->
                  <!-- Iterates over all sidebar items-->
                  <li class="nav-heading ">
                     <span>Main Navigation</span>
                  </li>
                  <li class="{{ Request::is( 'admin/dashboard') ? 'active' : '' }}">
                     <a href="{!! URL::to('admin/dashboard') !!}" title="Dashboard">
                        <em class="icon-speedometer"></em>
                        <span>Dashboard</span>
                     </a>
                  </li>
                  <li class="{{ Request::is( 'admin/articles') || Request::is( 'admin/article-new') ? 'active' : '' }}">
                     <a href="#articles" title="Articles" data-toggle="collapse">
                        <em class="icon-pin"></em>
                        <span>Articles</span>
                     </a>
                     <ul id="articles" class="nav sidebar-subnav collapse {{ Request::is( 'admin/articles') || Request::is( 'admin/article-new') ? 'in' : '' }}">
                        <li class="sidebar-subnav-header">Articles</li>
                        <li class="{{(Request::is( 'admin/articles/publish') || Request::is( 'admin/articles/all') || Request::is( 'admin/articles/trash'))? 'active' : '' }}">
                           <a href="{!! URL::to('admin/articles/all') !!}" title="Horizontal">
                              <span>All Articles</span>
                           </a>
                        </li>
                        <li class="{{Request::is( 'admin/article-new') ? 'active' : '' }}">
                           <a href="{!! URL::to('admin/article-new') !!}" title="Horizontal">
                              <span>Add New</span>
                           </a>
                        </li>
                        <li class="{{Request::is( 'admin/category') ? 'active' : '' }}">
                           <a href="{!! URL::to('admin/category') !!}" title="Horizontal">
                              <span>Categories</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  
                  <li class=" ">
                     <a href="#pages" title="Pages" data-toggle="collapse">
                        <em class="icon-doc"></em>
                        <span>Pages</span>
                     </a>
                     <ul id="pages" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Pages</li>
                        <li class="{{(Request::is( 'admin/pages/publish') || Request::is( 'admin/pages/all') || Request::is( 'admin/pages/trash'))? 'active' : '' }}">
                           <a href="{!! URL::to('admin/pages/all') !!}" title="Horizontal">
                              <span>All Pages</span>
                           </a>
                        </li>
                        <li class="{{Request::is( 'admin/add-new-page') ? 'active' : '' }}">
                           <a href="{!! URL::to('admin/add-new-page') !!}" title="Horizontal">
                              <span>Add New</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-heading ">
                     <span>Appearance</span>
                  </li>
                  <li class=" ">
                     <a href="#elements" title="Elements" data-toggle="collapse">
                        <em class="icon-chemistry"></em>
                        <span data-localize="sidebar.nav.element.ELEMENTS">Elements</span>
                     </a>
                     <ul id="elements" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Elements</li>
                        <li class=" ">
                           <a href="buttons.html" title="Buttons">
                              <span data-localize="sidebar.nav.element.BUTTON">Buttons</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="notifications.html" title="Notifications">
                              <span data-localize="sidebar.nav.element.NOTIFICATION">Notifications</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="sweetalert.html" title="Sweet Alert">
                              <span>Sweet Alert</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="tour.html" title="Tour">
                              <span>Tour</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="carousel.html" title="Carousel">
                              <span data-localize="sidebar.nav.element.INTERACTION">Carousel</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="spinners.html" title="Spinners">
                              <span data-localize="sidebar.nav.element.SPINNER">Spinners</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="animations.html" title="Animations">
                              <span data-localize="sidebar.nav.element.ANIMATION">Animations</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="dropdown-animations.html" title="Dropdown">
                              <span data-localize="sidebar.nav.element.DROPDOWN">Dropdown</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="nestable.html" title="Nestable">
                              <span>Nestable</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="sortable.html" title="Sortable">
                              <span>Sortable</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="panels.html" title="Panels">
                              <span data-localize="sidebar.nav.element.PANEL">Panels</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="portlets.html" title="Portlets">
                              <span data-localize="sidebar.nav.element.PORTLET">Portlets</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="grid.html" title="Grid">
                              <span data-localize="sidebar.nav.element.GRID">Grid</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="grid-masonry.html" title="Grid Masonry">
                              <span data-localize="sidebar.nav.element.GRID_MASONRY">Grid Masonry</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="typo.html" title="Typography">
                              <span data-localize="sidebar.nav.element.TYPO">Typography</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="icons-font.html" title="Font Icons">
                              <div class="pull-right label label-success">+400</div>
                              <span data-localize="sidebar.nav.element.FONT_ICON">Font Icons</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="icons-weather.html" title="Weather Icons">
                              <div class="pull-right label label-success">+100</div>
                              <span data-localize="sidebar.nav.element.WEATHER_ICON">Weather Icons</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="colors.html" title="Colors">
                              <span data-localize="sidebar.nav.element.COLOR">Colors</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=" ">
                     <a href="#forms" title="Forms" data-toggle="collapse">
                        <em class="icon-note"></em>
                        <span data-localize="sidebar.nav.form.FORM">Forms</span>
                     </a>
                     <ul id="forms" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Forms</li>
                        <li class=" ">
                           <a href="form-standard.html" title="Standard">
                              <span data-localize="sidebar.nav.form.STANDARD">Standard</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="form-extended.html" title="Extended">
                              <span data-localize="sidebar.nav.form.EXTENDED">Extended</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="form-validation.html" title="Validation">
                              <span data-localize="sidebar.nav.form.VALIDATION">Validation</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="form-wizard.html" title="Wizard">
                              <span>Wizard</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="form-upload.html" title="Upload">
                              <span>Upload</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="form-xeditable.html" title="xEditable">
                              <span>xEditable</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-heading ">
                     <span data-localize="sidebar.heading.MORE">More</span>
                  </li>
               </ul>
               <!-- END sidebar nav-->
            </nav>
         </div>
         <!-- END Sidebar (left)-->
      </aside>