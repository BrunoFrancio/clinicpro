<!doctype html>
<html lang="en" dir="ltr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>HexaDash</title>

   <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">

   <!-- inject:css-->

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/bootstrap/bootstrap.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/daterangepicker.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/fontawesome.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/footable.standalone.min.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/fullcalendar@5.2.0.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/jquery-jvectormap-2.0.5.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/jquery.mCustomScrollbar.min.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/leaflet.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/line-awesome.min.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/magnific-popup.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/MarkerCluster.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/MarkerCluster.Default.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/select2.min.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/slick.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/star-rating-svg.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/trumbowyg.min.css') }}">

   <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/wickedpicker.min.css') }}">

   <link rel="stylesheet" href="{{ asset('style.css') }}">

   <!-- endinject -->

   <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon.png') }}">

   <!-- Fonts -->
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head> 

<body class="layout-light side-menu">
   <div class="mobile-search">
      <form action="/" class="search-form">
         <img src="img/svg/search.svg" alt="search" class="svg">
         <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..." aria-label="Search">
      </form>
   </div>
   <div class="mobile-author-actions"></div>
   <header class="header-top">
      <nav class="navbar navbar-light">
         <div class="navbar-left">
            <div class="logo-area">
               <a class="navbar-brand" href="index.html">
                  <img class="dark" src="img/logo-dark.png" alt="logo">
                  <img class="light" src="img/logo-white.png" alt="logo">
               </a>
               <a href="#" class="sidebar-toggle">
                  <img class="svg" src="img/svg/align-center-alt.svg" alt="img"></a>
            </div>
            <div class="top-menu">

               <div class="hexadash-top-menu position-relative">
                  <ul class="d-flex align-items-center flex-wrap">
                     <li class="has-subMenu">
                        <a href="#" class="active">Dashboard</a>
                        <ul class="subMenu">
                           <li class="active">
                              <a href="index.html">Demo 1</a>
                           </li>
                           <li class="">
                              <a href="demo2.html">Demo 2</a>
                           </li>
                           <li class="">
                              <a href="demo3.html">Demo 3</a>
                           </li>
                           <li class="">
                              <a href="demo4.html">Demo 4</a>
                           </li>
                           <li class="">
                              <a href="demo5.html">Demo 5</a>
                           </li>
                           <li class="">
                              <a href="demo6.html">Demo 6</a>
                           </li>
                           <li class="">
                              <a href="demo7.html">Demo 7</a>
                           </li>
                           <li class="">
                              <a href="demo8.html">Demo 8</a>
                           </li>
                           <li class="">
                              <a href="demo9.html">Demo 9</a>
                           </li>
                           <li class="">
                              <a href="demo10.html">Demo 10</a>
                           </li>
                        </ul>
                     </li>
                     <li class="has-subMenu">
                        <a href="#" class="">Layouts</a>
                        <ul class="subMenu">
                           <li class="l_sidebar">
                              <a href="#" data-layout="light">Light Mode</a>
                           </li>
                           <li class="l_sidebar">
                              <a href="#" data-layout="dark">Dark Mode</a>
                           </li>
                           <li class="l_navbar">
                              <a href="#" data-layout="side">Side Menu</a>
                           </li>
                           <li class="layout">
                              <a href="../rtl">RTL</a>
                           </li>
                           <li class="layout">
                              <a href="../ltr">LTR</a>
                           </li>
                        </ul>
                     </li>
                     <li class="has-subMenu">
                        <a href="#" class="">Apps</a>
                        <ul class="megaMenu-wrapper megaMenu-dropdown">
                           <li>
                              <ul>
                                 <li class="has-subMenu-left">
                                    <a href="#" class="">
                                       <img src="img/svg/mail.svg" alt="mail" class="svg nav-icon">
                                       <span class="menu-text">Email</span>
                                    </a>
                                    <ul class="subMenu">
                                       <li>
                                          <a href="inbox.html" class="">Inbox</a>
                                       </li>
                                       <li>
                                          <a href="read-email.html" class="">Read
                                             Email</a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="chat.html" class="">
                                       <img src="img/svg/message-square.svg" alt="message-square" class="svg nav-icon">
                                       <span class="menu-text">Chat</span>
                                       <span class="badge badge-success menuItem rounded-circle">3</span>
                                    </a>
                                 </li>
                                 <li class="has-subMenu-left">
                                    <a href="#" class="">
                                       <img src="img/svg/shopping-cart.svg" alt="shopping-cart" class="svg nav-icon">
                                       <span class="menu-text text-initial">eCommerce</span>
                                    </a>
                                    <ul class="subMenu">
                                       <li>
                                          <a href="products.html" class="">Products</a>
                                       </li>
                                       <li>
                                          <a href="product-details.html" class="">Product Details</a>
                                       </li>
                                       <li>
                                          <a href="add-product.html" class="">Product
                                             Add</a>
                                       </li>
                                       <li>
                                          <a href="" class="">Product Edit</a>
                                       </li>
                                       <li>
                                          <a href="cart.html" class="">Cart</a>
                                       </li>
                                       <li>
                                          <a href="order.html" class="">Orders</a>
                                       </li>
                                       <li>
                                          <a href="sellers.html" class="">Sellers</a>
                                       </li>
                                       <li>
                                          <a href="invoice.html" class="">Invoices</a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="has-subMenu-left">
                                    <a href="#" class="">
                                       <span class="nav-icon uil uil-folder"></span>
                                       <span class="menu-text">Project</span>
                                    </a>
                                    <ul class="subMenu">
                                       <li>
                                          <a href="projects.html" class="">Project</a>
                                       </li>
                                       <li>
                                          <a href="application-ui.html" class="">Project Details</a>
                                       </li>
                                       <li>
                                          <a href="create.html" class="">Create
                                             Project</a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="calendar.html" class="">
                                       <span class="nav-icon uil uil-calendar-alt"></span>
                                       <span class="menu-text">Calendar</span>
                                    </a>
                                 </li>
                                 <li class="has-subMenu-left">
                                    <a href="#" class="">
                                       <span class="nav-icon uil uil-users-alt"></span>
                                       <span class="menu-text">Users</span>
                                    </a>
                                    <ul class="subMenu">
                                       <li>
                                          <a href="users-membar.html" class="">Team</a>
                                       </li>
                                       <li>
                                          <a href="users-card.html" class="">Users
                                             Grid</a>
                                       </li>
                                       <li>
                                          <a href="users-list.html" class="">Users
                                             List</a>
                                       </li>
                                       <li>
                                          <a href="users-card2.html" class="">Users
                                             Grid
                                             style</a>
                                       </li>
                                       <li>
                                          <a href="users-group.html" class="">Users
                                             Group</a>
                                       </li>
                                       <li>
                                          <a href="user-info.html" class="">Add
                                             User</a>
                                       </li>
                                       <li>
                                          <a href="users-datatable.html" class="">Users
                                             Table</a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="has-subMenu-left">
                                    <a href="#" class="">
                                       <img src="img/svg/user-check.svg" alt="user-check" class="svg nav-icon">
                                       <span class="menu-text">Contact</span>
                                    </a>
                                    <ul class="subMenu">
                                       <li>
                                          <a class="" href="contact-1.html">Contact 1</a>
                                       </li>
                                       <li>
                                          <a class="" href="contact-2.html">Contact 2</a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="chat.html" class="">
                                       <img src="img/svg/bookmark.svg" alt="bookmark" class="svg nav-icon">
                                       <span class="menu-text">Note</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="chat.html" class="">
                                       <img src="img/svg/activity.svg" alt="activity" class="svg nav-icon">
                                       <span class="menu-text">To-Do</span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li>
                              <ul>
                                 <li>
                                    <a href="kanban.html" class="">
                                       <img src="img/svg/columns.svg" alt="columns" class="svg nav-icon">
                                       <span class="menu-text">Kanban Board</span>
                                    </a>
                                 </li>
                                 <li class="has-subMenu-left">
                                    <a href="#" class="">
                                       <img src="img/svg/repeat.svg" alt="repeat" class="svg nav-icon">
                                       <span class="menu-text">Import & Export</span>
                                    </a>
                                    <ul class="subMenu">
                                       <li>
                                          <a class="" href="import.html">Import</a>
                                       </li>
                                       <li>
                                          <a class="" href="export.html">Export</a>
                                       </li>
                                       <li>
                                          <a class="" href="export-selected.html">Export Selected
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="file-manager.html" class="">
                                       <img src="img/svg/file.svg" alt="file" class="svg nav-icon">
                                       <span class="menu-text">File Manager</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="task-app.html" class="">
                                       <img src="img/svg/clipboard.svg" alt="clipboard" class="svg nav-icon">
                                       <span class="menu-text">Task App</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="bookmarks.html" class="">
                                       <span class="nav-icon uil uil-bookmark"></span>
                                       <span class="menu-text">Bookmarks</span>
                                    </a>
                                 </li>
                                 <li class="has-subMenu-left">
                                    <a href="#" class="">
                                       <img src="img/svg/user.svg" alt="user" class="svg nav-icon">
                                       <span class="menu-text">Social app</span>
                                    </a>
                                    <ul class="subMenu">
                                       <li>
                                          <a href="profile.html" class="">My
                                             Profile</a>
                                       </li>
                                       <li>
                                          <a href="profile-setting.html" class="">Profile Settings</a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="has-subMenu-left">
                                    <a href="#" class="">
                                       <span class="nav-icon uil uil-user"></span>
                                       <span class="menu-text">Support</span>
                                    </a>
                                    <ul class="subMenu">
                                       <li>
                                          <a class="" href="support-ticket.html">Support
                                             Ticket</a>
                                       </li>
                                       <li>
                                          <a class="" href="support-details.html">Ticket Details</a>
                                       </li>
                                       <li>
                                          <a class="" href="new-ticket.html">New
                                             Ticket</a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="has-subMenu-left">
                                    <a href="#" class="">
                                       <span class="nav-icon uil uil-search"></span>
                                       <span class="menu-text">JobSearch</span>
                                    </a>
                                    <ul class="subMenu">
                                       <li>
                                          <a class="" href="jobSearch.html">Grid view</a>
                                       </li>
                                       <li>
                                          <a class="" href="jobSearchList.html">List View</a>
                                       </li>
                                       <li>
                                          <a class="" href="jobDetails.html">Details</a>
                                       </li>
                                       <li>
                                          <a class="" href="job-apply.html">Apply</a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="has-subMenu-left">
                                    <a href="#" class="">
                                       <span class="nav-icon uil uil-table"></span>
                                       <span class="menu-text">Table</span>
                                    </a>
                                    <ul class="subMenu">
                                       <li>
                                          <a href="basic-table.html" class="">Basic
                                             Table</a>
                                       </li>
                                       <li>
                                          <a href="datatable.html" class="">Data
                                             Table</a>
                                       </li>
                                       <li>
                                          <a href="dynamic-table.html" class="">
                                             Dynamic Table
                                          </a>
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <li class="has-subMenu">
                        <a href="#" class="">Crud</a>
                        <ul class="subMenu">
                           <li class="has-subMenu-left">
                              <a href="#" class="">
                                 <img src="img/svg/shopping-cart.svg" alt="shopping-cart" class="svg nav-icon">
                                 <span class="menu-text">Firestore Crud</span>
                              </a>
                              <ul class="subMenu">
                                 <li>
                                    <a class="" href="firestore.html">View All</a>
                                 </li>
                                 <li>
                                    <a class="" href="firestore-add.html">Add
                                       New</a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <li class="has-subMenu">
                        <a href="#" class="">Features</a>
                        <ul class="subMenu">
                           <li>
                              <a href="editors.html" class="">
                                 <img src="img/svg/edit.svg" alt="svg" class="svg nav-icon">
                                 <span class="menu-text">Editors</span>
                              </a>
                           </li>
                           <li class="has-subMenu-left">
                              <a href="#" class="">
                                 <img src="img/svg/grid.svg" alt="grid" class="svg nav-icon">
                                 <span class="menu-text">Icons</span>
                              </a>
                              <ul class="subMenu">
                                 <li>
                                    <a href="unicon-icons.html" class="">Unicon
                                       Icons</a>
                                 </li>
                                 <li>
                                    <a href="fontawesome.html" class="">Font
                                       Awesome</a>
                                 </li>
                                 <li>
                                    <a href="lineawesome.html" class="">Line
                                       Awesome</a>
                                 </li>
                              </ul>
                           </li>
                           <li class="has-subMenu-left">
                              <a href="#" class="">
                                 <img src="img/svg/bar-chart-2.svg" alt="bar-chart-2" class="svg nav-icon">
                                 <span class="menu-text">Charts</span>
                              </a>
                              <ul class="subMenu">
                                 <li>
                                    <a class="" href="charts.html">Chart JS</a>
                                 </li>
                                 <li>
                                    <a class="" href="google-chart.html">Google
                                       Charts</a>
                                 </li>
                                 <li>
                                    <a class="" href="peity-chart.html">Peity
                                       Charts</a>
                                 </li>
                              </ul>
                           </li>
                           <li class="has-subMenu-left">
                              <a href="#" class="">
                                 <img src="img/svg/disc.svg" alt="disc" class="svg nav-icon">
                                 <span class="menu-text">Froms</span>
                              </a>
                              <ul class="subMenu">
                                 <li>
                                    <a class="" href="form.html">Basics</a>
                                 </li>
                                 <li>
                                    <a class="" href="form-layouts.html">Layouts</a>
                                 </li>
                                 <li>
                                    <a class="" href="form-elements.html">Elements</a>
                                 </li>
                                 <li>
                                    <a class="" href="form-components.html">Components</a>
                                 </li>
                                 <li>
                                    <a class="" href="form-validations.html">Validations</a>
                                 </li>
                              </ul>
                           </li>
                           <li class="has-subMenu-left">
                              <a href="#" class="">
                                 <img src="img/svg/map.svg" alt="map" class="svg nav-icon">
                                 <span class="menu-text">Maps</span>
                              </a>
                              <ul class="subMenu">
                                 <li>
                                    <a href="google-map.html" class="">Google
                                       Maps</a>
                                 </li>
                                 <li>
                                    <a href="leaflet-map.html" class="">Leaflet
                                       Maps</a>
                                 </li>
                                 <li>
                                    <a href="vector-map.html" class="">Vector
                                       Maps</a>
                                 </li>
                              </ul>
                           </li>
                           <li class="has-subMenu-left">
                              <a href="#" class="">
                                 <img src="img/svg/server.svg" alt="server" class="svg nav-icon">
                                 <span class="menu-text">Widget</span>
                              </a>
                              <ul class="subMenu">
                                 <li>
                                    <a class="" href="widget-charts.html">Chart</a>
                                 </li>
                                 <li>
                                    <a class="" href="widget-mixed.html">Mixed</a>
                                 </li>
                                 <li>
                                    <a class="" href="widget-card.html">Card</a>
                                 </li>
                              </ul>
                           </li>
                           <li class="has-subMenu-left">
                              <a href="#" class="">
                                 <img src="img/svg/square.svg" alt="square" class="svg nav-icon">
                                 <span class="menu-text">Wizards</span>
                              </a>
                              <ul class="subMenu">
                                 <li>
                                    <a href="checkout-wizard6.html" class="">Wizard
                                       1</a>
                                 </li>
                                 <li>
                                    <a href="checkout-wizard7.html" class="">Wizard
                                       2</a>
                                 </li>
                                 <li>
                                    <a href="checkout-wizard8.html" class="">Wizard
                                       3</a>
                                 </li>
                                 <li>
                                    <a href="checkout-wizard9.html" class="">Wizard
                                       4</a>
                                 </li>
                                 <li>
                                    <a href="checkout-wizard10.html" class="">Wizard
                                       5</a>
                                 </li>
                              </ul>
                           </li>
                           <li class="has-subMenu-left">
                              <a href="#" class="">
                                 <img src="img/svg/book.svg" alt="book" class="svg nav-icon">
                                 <span class="menu-text">Knowledge Base</span>
                              </a>
                              <ul class="subMenu">
                                 <li>
                                    <a class="" href="knowledgebase.html">Knowledge
                                       Base</a>
                                 </li>
                                 <li>
                                    <a class="" href="knowledgebase-2.html">All
                                       Article</a>
                                 </li>

                                 <li>
                                    <a class="" href="knowledgebase-3.html">Single Article</a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <li class="mega-item has-subMenu">
                        <a href="#" class="">Pages</a>
                        <ul class="megaMenu-wrapper megaMenu-small">
                           <li>
                              <ul>
                                 <li>
                                    <a href="changelog.html" class="">
                                       <span class="menu-text">Changelog</span>
                                       <span class="badge badge-info-10 menuItem rounded-pill">1.1.2</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="profile-setting.html" class="">
                                       <span class="menu-text">Settings</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="gallery.html" class="">
                                       <span class="menu-text">Gallery 1</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="gallery2.html" class="">
                                       <span class="menu-text">Gallery 2</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="pricing.html" class="">
                                       <span class="menu-text">Pricing</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="banner.html" class="">
                                       <span class="menu-text">Banners</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="testimonial.html" class="">
                                       <span class="menu-text">Testimonial</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="faq.html" class="">
                                       <span class="menu-text">FAQ's</span>
                                    </a>
                                 </li>

                                 <li>
                                    <a href="search.html" class="">
                                       <span class="menu-text">Search Results</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="blank.html" class="">
                                       <span class="menu-text">Blank Page</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a class="" href="knowledgebase.html">Knowledge
                                       <span class="menu-text">Base</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a class="" href="knowledgebase-2.html">All
                                       <span class="menu-text">Article</span>
                                    </a>
                                 </li>

                                 <li>
                                    <a class="" href="knowledgebase-3.html">
                                       <span class="menu-text">Single Article</span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li>
                              <ul>
                                 <li>
                                    <a href="support.html" class="">
                                       <span class="menu-text">Support Center</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="blog.html" class="">Blog Style 1</a>
                                 </li>
                                 <li>
                                    <a href="blog2.html" class="">Blog Style 2</a>
                                 </li>
                                 <li>
                                    <a href="blog3.html" class="">Blog Style 3</a>
                                 </li>
                                 <li>
                                    <a href="blog-details.html" class="">Blog
                                       Details</a>
                                 </li>
                                 <li>
                                    <a href="course.html" class="">Course</a>
                                 </li>
                                 <li>
                                    <a href="course-details.html" class="">Course
                                       Details</a>
                                 </li>
                                 <li>
                                    <a href="terms.html" class="">
                                       <span class="menu-text">Terms & Conditions</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="maintenance.html" class="">
                                       <span class="menu-text">Maintenance</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="404.html" class="">
                                       <span class="menu-text">404</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="coming-soon.html" class="">
                                       <span class="menu-text">Coming Soon</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="login.html" class="">
                                       <span class="menu-text">Log In</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="sign-up.html" class="">
                                       <span class="menu-text">Sign Up</span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <li class="mega-item has-subMenu">
                        <a href="#" class="">Components</a>
                        <ul class="megaMenu-wrapper megaMenu-wide">
                           <li>
                              <span class="mega-title">Components</span>
                              <ul>
                                 <li>
                                    <a class="" href="alert.html">Alert</a>
                                 </li>
                                 <li>
                                    <a class="" href="avatar.html">Avatar</a>
                                 </li>
                                 <li>
                                    <a class="" href="badge.html">Badge</a>
                                 </li>
                                 <li>
                                    <a class="" href="breadcrumbs.html">Breadcrumb</a>
                                 </li>
                                 <li>
                                    <a class="" href="buttons.html">Button</a>
                                 </li>
                                 <li>
                                    <a class="" href="cards.html">Cards</a>
                                 </li>
                                 <li>
                                    <a class="" href="carousel.html">Carousel</a>
                                 </li>
                                 <li>
                                    <a class="" href="checkbox.html">Checkbox</a>
                                 </li>
                                 <li>
                                    <a class="" href="collapse.html">Collapse</a>
                                 </li>
                                 <li>
                                    <a class="" href="comments.html">Comments</a>
                                 </li>
                              </ul>
                           </li>
                           <li>
                              <span class="mega-title">Components</span>
                              <ul>
                                 <li>
                                    <a class="" href="dashboard-base.html">Typography</a>
                                 </li>
                                 <li>
                                    <a class="" href="date-picker.html">DatePicker</a>
                                 </li>
                                 <li>
                                    <a class="" href="drawer.html">Drawer</a>
                                 </li>
                                 <li>
                                    <a class="" href="drag-drop.html">Drag &
                                       Drop</a>
                                 </li>
                                 <li>
                                    <a class="" href="dropdown.html">Dropdown</a>
                                 </li>
                                 <li>
                                    <a class="" href="empty.html">Empty</a>
                                 </li>
                                 <li>
                                    <a class="" href="input.html">Input</a>
                                 </li>
                                 <li>
                                    <a class="" href="list.html">List</a>
                                 </li>
                                 <li>
                                    <a class="" href="menu.html">Menu</a>
                                 </li>
                                 <li>
                                    <a class="" href="message.html">Message</a>
                                 </li>
                              </ul>
                           </li>
                           <li>
                              <span class="mega-title">Components</span>
                              <ul>
                                 <li>
                                    <a class="" href="modal.html">Modals</a>
                                 </li>
                                 <li>
                                    <a class="" href="notifications.html">Notification</a>
                                 </li>
                                 <li>
                                    <a class="" href="page-header.html">Page
                                       Headers</a>
                                 </li>
                                 <li>
                                    <a class="" href="pagination.html">Paginations</a>
                                 </li>
                                 <li>
                                    <a class="" href="progressbar.html">Progress</a>
                                 </li>
                                 <li>
                                    <a class="" href="radio.html">Radio</a>
                                 </li>
                                 <li>
                                    <a class="" href="rate.html">Rate</a>
                                 </li>
                                 <li>
                                    <a class="" href="result.html">Result</a>
                                 </li>
                                 <li>
                                    <a class="" href="select.html">Select</a>
                                 </li>
                                 <li>
                                    <a class="" href="skeleton.html">Skeleton</a>
                                 </li>
                                 <li>
                                    <a class="" href="time-picker.html">Timepicker</a>
                                 </li>
                              </ul>
                           </li>
                           <li>
                              <span class="mega-title">Components</span>
                              <ul>
                                 <li>
                                    <a class="" href="slider.html">Slider</a>
                                 </li>
                                 <li>
                                    <a class="" href="spin.html">Spinner</a>
                                 </li>
                                 <li>
                                    <a class="" href="statistics.html">Statistic</a>
                                 </li>
                                 <li>
                                    <a class="" href="steps.html">Steps</a>
                                 </li>
                                 <li>
                                    <a class="" href="switch.html">Switch</a>
                                 </li>
                                 <li>
                                    <a class="" href="tab.html">Tabs</a>
                                 </li>
                                 <li>
                                    <a class="" href="tag.html">Tags</a>
                                 </li>
                                 <li>
                                    <a class="" href="timeline.html">Timeline</a>
                                 </li>
                                 <li>
                                    <a class="" href="timeline-2.html">Timeline
                                       2</a>
                                 </li>
                                 <li>
                                    <a class="" href="timeline-3.html">Timeline
                                       3</a>
                                 </li>
                                 <li>
                                    <a class="" href="uploads.html">Upload</a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>

            </div>
         </div>
         <!-- ends: navbar-left -->
         <div class="navbar-right">
            <ul class="navbar-right__menu">
               <li class="nav-search">
                  <a href="#" class="search-toggle">
                     <i class="uil uil-search"></i>
                     <i class="uil uil-times"></i>
                  </a>
                  <form action="/" class="search-form-topMenu">
                     <span class="search-icon uil uil-search"></span>
                     <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..." aria-label="Search">
                  </form>
               </li>
               <li class="nav-message">
                  <div class="dropdown-custom">
                     <a href="javascript:;" class="nav-item-toggle icon-active">
                        <img class="svg" src="img/svg/message.svg" alt="img">
                     </a>
                     <div class="dropdown-parent-wrapper">
                        <div class="dropdown-wrapper">
                           <h2 class="dropdown-wrapper__title">Messages <span class="badge-circle badge-success ms-1">2</span></h2>
                           <ul>
                              <li class="author-online has-new-message">
                                 <div class="user-avater">
                                    <img src="img/team-1.png" alt="">
                                 </div>
                                 <div class="user-message">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>
                                       <span class="time-posted">3 hrs ago</span>
                                    </p>
                                    <p>
                                       <span class="desc text-truncate" style="max-width: 215px;">Lorem
                                          ipsum
                                          dolor amet cosec Lorem ipsum</span>
                                       <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                    </p>
                                 </div>
                              </li>
                              <li class="author-offline has-new-message">
                                 <div class="user-avater">
                                    <img src="img/team-1.png" alt="">
                                 </div>
                                 <div class="user-message">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>
                                       <span class="time-posted">3 hrs ago</span>
                                    </p>
                                    <p>
                                       <span class="desc text-truncate" style="max-width: 215px;">Lorem
                                          ipsum
                                          dolor amet cosec Lorem ipsum</span>
                                       <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                    </p>
                                 </div>
                              </li>
                              <li class="author-online has-new-message">
                                 <div class="user-avater">
                                    <img src="img/team-1.png" alt="">
                                 </div>
                                 <div class="user-message">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>
                                       <span class="time-posted">3 hrs ago</span>
                                    </p>
                                    <p>
                                       <span class="desc text-truncate" style="max-width: 215px;">Lorem
                                          ipsum
                                          dolor amet cosec Lorem ipsum</span>
                                       <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                    </p>
                                 </div>
                              </li>
                              <li class="author-offline">
                                 <div class="user-avater">
                                    <img src="img/team-1.png" alt="">
                                 </div>
                                 <div class="user-message">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>
                                       <span class="time-posted">3 hrs ago</span>
                                    </p>
                                    <p>
                                       <span class="desc text-truncate" style="max-width: 215px;">Lorem
                                          ipsum
                                          dolor amet cosec Lorem ipsum</span>
                                    </p>
                                 </div>
                              </li>
                              <li class="author-offline">
                                 <div class="user-avater">
                                    <img src="img/team-1.png" alt="">
                                 </div>
                                 <div class="user-message">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>
                                       <span class="time-posted">3 hrs ago</span>
                                    </p>
                                    <p>
                                       <span class="desc text-truncate" style="max-width: 215px;">Lorem
                                          ipsum
                                          dolor amet cosec Lorem ipsum</span>
                                    </p>
                                 </div>
                              </li>
                           </ul>
                           <a href="" class="dropdown-wrapper__more">See All Message</a>
                        </div>
                     </div>
                  </div>
               </li>
               <!-- ends: nav-message -->
               <li class="nav-notification">
                  <div class="dropdown-custom">
                     <a href="javascript:;" class="nav-item-toggle icon-active">
                        <img class="svg" src="img/svg/alarm.svg" alt="img">
                     </a>
                     <div class="dropdown-parent-wrapper">
                        <div class="dropdown-wrapper">
                           <h2 class="dropdown-wrapper__title">Notifications <span class="badge-circle badge-warning ms-1">4</span></h2>
                           <ul>
                              <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                 <div class="nav-notification__type nav-notification__type--primary">
                                    <img class="svg" src="img/svg/inbox.svg" alt="inbox">
                                 </div>
                                 <div class="nav-notification__details">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                                       <span>sent you a message</span>
                                    </p>
                                    <p>
                                       <span class="time-posted">5 hours ago</span>
                                    </p>
                                 </div>
                              </li>
                              <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                 <div class="nav-notification__type nav-notification__type--secondary">
                                    <img class="svg" src="img/svg/upload.svg" alt="upload">
                                 </div>
                                 <div class="nav-notification__details">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                                       <span>sent you a message</span>
                                    </p>
                                    <p>
                                       <span class="time-posted">5 hours ago</span>
                                    </p>
                                 </div>
                              </li>
                              <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                 <div class="nav-notification__type nav-notification__type--success">
                                    <img class="svg" src="img/svg/log-in.svg" alt="log-in">
                                 </div>
                                 <div class="nav-notification__details">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                                       <span>sent you a message</span>
                                    </p>
                                    <p>
                                       <span class="time-posted">5 hours ago</span>
                                    </p>
                                 </div>
                              </li>
                              <li class="nav-notification__single nav-notification__single d-flex flex-wrap">
                                 <div class="nav-notification__type nav-notification__type--info">
                                    <img class="svg" src="img/svg/at-sign.svg" alt="at-sign">
                                 </div>
                                 <div class="nav-notification__details">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                                       <span>sent you a message</span>
                                    </p>
                                    <p>
                                       <span class="time-posted">5 hours ago</span>
                                    </p>
                                 </div>
                              </li>
                              <li class="nav-notification__single nav-notification__single d-flex flex-wrap">
                                 <div class="nav-notification__type nav-notification__type--danger">
                                    <img src="img/svg/heart.svg" alt="heart" class="svg">
                                 </div>
                                 <div class="nav-notification__details">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                                       <span>sent you a message</span>
                                    </p>
                                    <p>
                                       <span class="time-posted">5 hours ago</span>
                                    </p>
                                 </div>
                              </li>
                           </ul>
                           <a href="" class="dropdown-wrapper__more">See all incoming activity</a>
                        </div>
                     </div>
                  </div>
               </li>
               <!-- ends: .nav-notification -->
               <li class="nav-settings">
                  <div class="dropdown-custom">
                     <a href="javascript:;" class="nav-item-toggle">
                        <img src="img/setting.png" alt="setting">
                     </a>
                     <div class="dropdown-parent-wrapper">
                        <div class="dropdown-wrapper dropdown-wrapper--large">
                           <ul class="list-settings">
                              <li class="d-flex">
                                 <div class="me-3"><img src="img/mail.png" alt=""></div>
                                 <div class="flex-grow-1">
                                    <h6>
                                       <a href="" class="stretched-link">All Features</a>
                                    </h6>
                                    <p>Introducing Increment subscriptions </p>
                                 </div>
                              </li>
                              <li class="d-flex">
                                 <div class="me-3"><img src="img/color-palette.png" alt=""></div>
                                 <div class="flex-grow-1">
                                    <h6>
                                       <a href="" class="stretched-link">Themes</a>
                                    </h6>
                                    <p>Third party themes that are compatible</p>
                                 </div>
                              </li>
                              <li class="d-flex">
                                 <div class="me-3"><img src="img/home.png" alt=""></div>
                                 <div class="flex-grow-1">
                                    <h6>
                                       <a href="" class="stretched-link">Payments</a>
                                    </h6>
                                    <p>We handle billions of dollars</p>
                                 </div>
                              </li>
                              <li class="d-flex">
                                 <div class="me-3"><img src="img/video-camera.png" alt=""></div>
                                 <div class="flex-grow-1">
                                    <h6>
                                       <a href="" class="stretched-link">Design Mockups</a>
                                    </h6>
                                    <p>Share planning visuals with clients</p>
                                 </div>
                              </li>
                              <li class="d-flex">
                                 <div class="me-3"><img src="img/document.png" alt=""></div>
                                 <div class="flex-grow-1">
                                    <h6>
                                       <a href="" class="stretched-link">Content Planner</a>
                                    </h6>
                                    <p>Centralize content gethering and editing</p>
                                 </div>
                              </li>
                              <li class="d-flex">
                                 <div class="me-3"><img src="img/microphone.png" alt=""></div>
                                 <div class="flex-grow-1">
                                    <h6>
                                       <a href="" class="stretched-link">Diagram Maker</a>
                                    </h6>
                                    <p>Plan user flows & test scenarios</p>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </li>
               <!-- ends: .nav-support -->
               <li class="nav-flag-select">
                  <div class="dropdown-custom">
                     <a href="javascript:;" class="nav-item-toggle"><img src="img/flag.png" alt="" class="rounded-circle"></a>
                     <div class="dropdown-parent-wrapper">
                        <div class="dropdown-wrapper dropdown-wrapper--small">
                           <a href=""><img src="img/eng.png" alt=""> English</a>
                           <a href=""><img src="img/ger.png" alt=""> German</a>
                           <a href=""><img src="img/spa.png" alt=""> Spanish</a>
                           <a href=""><img src="img/tur.png" alt=""> Turkish</a>
                           <a href=""><img src="img/iraq.png" alt=""> Arabic</a>
                        </div>
                     </div>

                  </div>
               </li>
               <!-- ends: .nav-flag-select -->
               <li class="nav-author">
                  <div class="dropdown-custom">
                     <a href="javascript:;" class="nav-item-toggle"><img src="img/author-nav.jpg" alt="" class="rounded-circle">
                        <span class="nav-item__title">Danial<i class="las la-angle-down nav-item__arrow"></i></span>
                     </a>
                     <div class="dropdown-parent-wrapper">
                        <div class="dropdown-wrapper">
                           <div class="nav-author__info">
                              <div class="author-img">
                                 <img src="img/author-nav.jpg" alt="" class="rounded-circle">
                              </div>
                              <div>
                                 <h6>Rabbi Islam Rony</h6>
                                 <span>UI Designer</span>
                              </div>
                           </div>
                           <div class="nav-author__options">
                              <ul>
                                 <li>
                                    <a href="">
                                       <i class="uil uil-user"></i> Profile</a>
                                 </li>
                                 <li>
                                    <a href="">
                                       <i class="uil uil-setting"></i>
                                       Settings</a>
                                 </li>
                                 <li>
                                    <a href="">
                                       <i class="uil uil-key-skeleton"></i> Billing</a>
                                 </li>
                                 <li>
                                    <a href="">
                                       <i class="uil uil-users-alt"></i> Activity</a>
                                 </li>
                                 <li>
                                    <a href="">
                                       <i class="uil uil-bell"></i> Help</a>
                                 </li>
                              </ul>
                              <a href="" class="nav-author__signout">
                                 <i class="uil uil-sign-out-alt"></i> Sign Out</a>
                           </div>
                        </div>
                        <!-- ends: .dropdown-wrapper -->
                     </div>
                  </div>
               </li>
               <!-- ends: .nav-author -->
            </ul>
            <!-- ends: .navbar-right__menu -->
            <div class="navbar-right__mobileAction d-md-none">
               <a href="#" class="btn-search">
                  <img src="img/svg/search.svg" alt="search" class="svg feather-search">
                  <img src="img/svg/x.svg" alt="x" class="svg feather-x"></a>
               <a href="#" class="btn-author-action">
                  <img class="svg" src="img/svg/more-vertical.svg" alt="more-vertical"></a>
            </div>
         </div>
         <!-- ends: .navbar-right -->
      </nav>
   </header>
   <main class="main-content">

      <div class="sidebar-wrapper">
         <div class="sidebar sidebar-collapse" id="sidebar">
            <div class="sidebar__menu-group">
               <ul class="sidebar_nav">
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-create-dashboard"></span>
                        <span class="menu-text">Dashboard</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="index.html">Demo 1</a>
                        </li>
                        <li class="">
                           <a href="demo2.html">Demo 2</a>
                        </li>
                        <li class="">
                           <a href="demo3.html">Demo 3</a>
                        </li>
                        <li class="">
                           <a href="demo4.html">Demo 4</a>
                        </li>
                        <li class="">
                           <a href="demo5.html">
                              Demo 5</a>
                        </li>
                        <li class="">
                           <a href="demo6.html">
                              Demo 6</a>
                        </li>
                        <li class="">
                           <a href="demo7.html">
                              Demo 7</a>
                        </li>
                        <li class="">
                           <a href="demo8.html">
                              Demo 8</a>
                        </li>
                        <li class="">
                           <a href="demo9.html">
                              Demo 9</a>
                        </li>
                        <li class="">
                           <a href="demo10.html">
                              Demo 10</a>
                        </li>
                     </ul>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-window-section"></span>
                        <span class="menu-text">Layouts</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="l_sidebar">
                           <a href="#" data-layout="light">Light Mode</a>
                        </li>
                        <li class="l_sidebar">
                           <a href="#" data-layout="dark">Dark Mode</a>
                        </li>
                        <li class="l_navbar">
                           <a href="#" data-layout="top">Top Menu</a>
                        </li>
                        <li class="layout">
                           <a href="../rtl">RTL</a>
                        </li>
                        <li class="layout">
                           <a href="../ltr">LTR</a>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <a href="changelog.html" class="">
                        <span class="nav-icon uil uil-arrow-growth"></span>
                        <span class="menu-text">Changelog</span>
                        <span class="badge badge-info-10 menuItem rounded-pill">1.1.6</span>
                     </a>
                  </li>
                  <li class="menu-title mt-30">
                     <span>Applications</span>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-envelope"></span>
                        <span class="menu-text">Email</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="inbox.html">Inbox</a>
                        </li>
                        <li class="">
                           <a href="read-email.html">Read
                              Email</a>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <a href="chat.html" class="">
                        <span class="nav-icon uil uil-chat"></span>
                        <span class="menu-text">Chat</span>
                        <span class="badge badge-success menuItem rounded-circle">3</span>
                     </a>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-bag"></span>
                        <span class="menu-text text-initial">eCommerce</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="products.html">Products</a>
                        </li>
                        <li class="">
                           <a href="product-details.html">Product
                              Details</a>
                        </li>
                        <li class="">
                           <a href="add-product.html">Product
                              Add</a>
                        </li>
                        <li class="">
                           <a href="add-product.html">Product
                              Edit</a>
                        </li>
                        <li class="">
                           <a href="cart.html">Cart</a>
                        </li>
                        <li class="">
                           <a href="order.html">Orders</a>
                        </li>
                        <li class="">
                           <a href="sellers.html">Sellers</a>
                        </li>
                        <li class="">
                           <a href="invoice.html">Invoices</a>
                        </li>
                     </ul>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-folder"></span>
                        <span class="menu-text">Project</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="projects.html">Project</a>
                        </li>
                        <li class="">
                           <a href="application-ui.html">Project
                              Details</a>
                        </li>
                        <li class="">
                           <a href="create.html">Create
                              Project</a>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <a href="calendar.html" class="active">
                        <span class="nav-icon uil uil-calendar-alt"></span>
                        <span class="menu-text">Calendar</span>
                     </a>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-users-alt"></span>
                        <span class="menu-text">Users</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="users-membar.html">Team</a>
                        </li>
                        <li class="">
                           <a href="users-card.html">Users Grid</a>
                        </li>
                        <li class="">
                           <a href="users-list.html">Users
                              List</a>
                        </li>
                        <li class="">
                           <a href="users-card2.html">Users Grid
                              style</a>
                        </li>
                        <li class="">
                           <a href="users-group.html">Users
                              Group</a>
                        </li>
                        <li class="">
                           <a href="user-info.html">Add User</a>
                        </li>
                        <li class="">
                           <a href="users-datatable.html">Users
                              Table</a>
                        </li>

                     </ul>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-at"></span>
                        <span class="menu-text">Contact</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="contact-2.html">Contact
                              Grid</a>
                        </li>
                        <li class="">
                           <a href="contact-1.html">Contact
                              List</a>
                        </li>
                        <li class="">
                           <a href="contact-3.html">Contact
                              Create</a>
                        </li>
                     </ul>
                  </li>
                  <li class="">
                     <a href="note.html">
                        <span class="nav-icon uil uil-clipboard-notes"></span>
                        <span class="menu-text">Note</span>
                     </a>
                  </li>
                  <li class="">
                     <a href="to-do.html">
                        <span class="nav-icon uil uil-check-square"></span>
                        <span class="menu-text">To-Do</span>
                     </a>
                  </li>
                  <li class="">
                     <a href="kanban.html">
                        <span class="nav-icon uil uil-expand-arrows"></span>
                        <span class="menu-text">Kanban Board</span>

                     </a>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-exchange"></span>
                        <span class="menu-text">Import & Export</span>
                        <span class="toggle-icon"></span>

                     </a>
                     <ul>
                        <li class="">
                           <a href="import.html">Import</a>
                        </li>
                        <li class="">
                           <a href="export.html">Export</a>
                        </li>
                        <li class="">
                           <a href="export-selected.html">Export
                              Selected
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="">
                     <a href="file-manager.html">
                        <span class="nav-icon uil uil-file"></span>
                        <span class="menu-text">File Manager</span>
                     </a>
                  </li>
                  <li class="">
                     <a href="task-app.html">
                        <span class="nav-icon uil uil-lightbulb-alt"></span>
                        <span class="menu-text">Task App</span>

                     </a>
                  </li>
                  <li class="">
                     <a href="bookmarks.html">
                        <span class="nav-icon uil uil-bookmark"></span>
                        <span class="menu-text">Bookmarks</span>
                     </a>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-apps"></span>
                        <span class="menu-text">Social App</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="profile.html">My Profile</a>
                        </li>
                        <li class="">
                           <a href="profile-setting.html">Profile
                              Settings</a>
                        </li>
                     </ul>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-books"></span>
                        <span class="menu-text">Learning App</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="course.html">Course</a>
                        </li>
                        <li class="">
                           <a href="course-details.html">Course
                              Details</a>
                        </li>
                     </ul>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-user"></span>
                        <span class="menu-text">Support</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="support-ticket.html">Support
                              Ticket</a>
                        </li>
                        <li class="">
                           <a href="support-details.html">Ticket
                              Details</a>
                        </li>
                        <li class="">
                           <a href="new-ticket.html">New
                              Ticket</a>
                        </li>
                     </ul>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-search"></span>
                        <span class="menu-text">JobSearch</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="jobSearch.html">Grid
                              view</a>
                        </li>
                        <li class="">
                           <a href="jobSearchList.html">List view</a>
                        </li>
                        <li class="">
                           <a href="jobDetails.html">Details</a>
                        </li>
                        <li class="">
                           <a href="job-apply.html">Apply</a>
                        </li>
                     </ul>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-table"></span>
                        <span class="menu-text">Table</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="basic-table.html">Basic
                              Table</a>
                        </li>
                        <li class="">
                           <a href="datatable.html">Data
                              Table</a>
                        </li>
                        <li class="">
                           <a href="dynamic-table.html">
                              Dynamic Table
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="menu-title mt-30">
                     <span>CRUD</span>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-database"></span>
                        <span class="menu-text">Firestore Crud</span>
                        <span class="toggle-icon"></span>

                     </a>
                     <ul>
                        <li class="">
                           <a href="firestore.html">View All</a>
                        </li>
                        <li class="">
                           <a href="firestore-add.html">Add
                              New</a>
                        </li>
                     </ul>
                  </li>
                  <li class="menu-title mt-30">
                     <span>Features</span>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-layers"></span>
                        <span class="menu-text">UI Elements</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="alert.html">Alert</a>
                        </li>
                        <li class="">
                           <a href="avatar.html">Avatar</a>
                        </li>
                        <li class="">
                           <a href="badge.html">Badge</a>
                        </li>
                        <li class="">
                           <a href="breadcrumbs.html">Breadcrumb</a>
                        </li>
                        <li class="" class="">
                           <a href="buttons.html">Button</a>
                        </li>
                        <li class="">
                           <a href="cards.html">Cards</a>
                        </li>
                        <li class="">
                           <a href="carousel.html">Carousel</a>
                        </li>
                        <li class="">
                           <a href="checkbox.html">Checkbox</a>
                        </li>
                        <li class="">
                           <a href="collapse.html">Collapse</a>
                        </li>
                        <li class="">
                           <a href="comments.html">Comments</a>
                        </li>
                        <li class="">
                           <a href="date-picker.html">DatePicker</a>
                        </li>
                        <li class="">
                           <a href="drawer.html">Drawer</a>
                        </li>
                        <li class="">
                           <a href="drag-drop.html">Drag &
                              Drop</a>
                        </li>
                        <li class="">
                           <a href="dropdown.html">Dropdown</a>
                        </li>
                        <li class="">
                           <a href="empty.html">Empty</a>
                        </li>
                        <li class="">
                           <a href="grid.html">Grid</a>
                        </li>
                        <li class="">
                           <a href="input.html">Input</a>
                        </li>
                        <li class="">
                           <a href="list.html">List</a>
                        </li>
                        <li class="">
                           <a href="menu.html">Menu</a>
                        </li>
                        <li class="">
                           <a href="message.html">Message</a>
                        </li>
                        <li class="">
                           <a href="modal.html">Modals</a>
                        </li>
                        <li class="">
                           <a href="notifications.html">Notification</a>
                        </li>
                        <li class="">
                           <a href="page-header.html">Page
                              Headers</a>
                        </li>
                        <li class="">
                           <a href="pagination.html">Paginations</a>
                        </li>
                        <li class="">
                           <a href="progressbar.html">Progress</a>
                        </li>
                        <li class="">
                           <a href="radio.html">Radio</a>
                        </li>
                        <li class="">
                           <a href="rate.html">Rate</a>
                        </li>
                        <li class="">
                           <a href="result.html">Result</a>
                        </li>
                        <li class="">
                           <a href="select.html">Select</a>
                        </li>
                        <li class="">
                           <a href="skeleton.html">Skeleton</a>
                        </li>
                        <li class="">
                           <a href="slider.html">Slider</a>
                        </li>
                        <li class="">
                           <a href="spin.html">Spinner</a>
                        </li>
                        <li class="">
                           <a href="statistics.html">Statistic</a>
                        </li>
                        <li class="">
                           <a href="steps.html">Steps</a>
                        </li>
                        <li class="">
                           <a href="switch.html">Switch</a>
                        </li>
                        <li class="">
                           <a href="tab.html">Tabs</a>
                        </li>
                        <li class="">
                           <a href="tag.html">Tags</a>
                        </li>
                        <li class="">
                           <a href="timeline.html">Timeline</a>
                        </li>
                        <li class="">
                           <a href="timeline-2.html">Timeline 2</a>
                        </li>
                        <li class="">
                           <a href="timeline-3.html">Timeline
                              3</a>
                        </li>
                        <li class="">
                           <a href="time-picker.html">Timepicker</a>
                        </li>
                        <li class="">
                           <a href="dashboard-base.html">Typography</a>
                        </li>
                        <li class="">
                           <a href="uploads.html">Upload</a>
                        </li>
                     </ul>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-chart"></span>
                        <span class="menu-text">Charts</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="charts.html">Chart JS</a>
                        </li>
                        <li class="">
                           <a href="apexchart.html">
                              <span class="menu-text">Apexchart</span>
                              <span class="badge badge-success menuItem">New</span>
                           </a>
                        </li>
                        <li class="">
                           <a href="google-chart.html">Google
                              Charts</a>
                        </li>
                        <li class="">
                           <a href="peity-chart.html">Peity
                              Charts</a>
                        </li>
                     </ul>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-keyhole-circle"></span>
                        <span class="menu-text">Froms</span>
                        <span class="toggle-icon"></span>

                     </a>
                     <ul>
                        <li class="">
                           <a href="form.html">Basics</a>
                        </li>
                        <li class="">
                           <a href="form-layouts.html">Layouts</a>
                        </li>
                        <li class="">
                           <a href="form-elements.html">Elements</a>
                        </li>
                        <li class="">
                           <a href="form-components.html">Components</a>
                        </li>
                        <li class="">
                           <a href="form-validations.html">Validations</a>
                        </li>
                     </ul>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-server"></span>
                        <span class="menu-text">Widget</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="widget-charts.html">Chart</a>
                        </li>
                        <li class="">
                           <a href="widget-mixed.html">Mixed</a>
                        </li>
                        <li class="">
                           <a href="widget-card.html">Card</a>
                        </li>
                     </ul>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-square"></span>
                        <span class="menu-text">Wizards</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="checkout-wizard6.html">Wizard
                              1</a>
                        </li>
                        <li class="">
                           <a href="checkout-wizard7.html">Wizard
                              2</a>
                        </li>
                        <li class="">
                           <a href="checkout-wizard8.html">Wizard
                              3</a>
                        </li>
                        <li class="">
                           <a href="checkout-wizard9.html">Wizard
                              4</a>
                        </li>
                        <li class="">
                           <a href="checkout-wizard10.html">Wizard
                              5</a>
                        </li>
                     </ul>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-grid"></span>
                        <span class="menu-text">Icons</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="unicon-icons.html">Unicon
                              Icons</a>
                        </li>
                        <li class="">
                           <a href="fontawesome.html">Font
                              Awesome</a>
                        </li>
                        <li class="">
                           <a href="lineawesome.html">Line
                              Awesome</a>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <a href="editors.html" class="">
                        <span class="nav-icon uil uil-edit"></span>
                        <span class="menu-text">Editors</span>
                     </a>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-map"></span>
                        <span class="menu-text">Maps</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="google-map.html">Google
                              Maps</a>
                        </li>
                        <li class="">
                           <a href="leaflet-map.html">Leaflet
                              Maps</a>
                        </li>
                        <li class="">
                           <a href="vector-map.html">Vector
                              Maps</a>
                        </li>
                     </ul>
                  </li>
                  <li class="menu-title mt-30">
                     <span>Pages</span>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-images"></span>
                        <span class="menu-text">Gallery</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="gallery.html">Gallery 1</a>
                        </li>
                        <li class="">
                           <a href="gallery2.html">Gallery 2</a>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <a href="pricing.html" class="">
                        <span class="nav-icon uil uil-bill"></span>
                        <span class="menu-text">Pricing</span>
                     </a>
                  </li>
                  <li class="">
                     <a href="banner.html">
                        <span class="nav-icon uil uil-thumbs-up"></span>
                        <span class="menu-text">Banners</span>
                     </a>
                  </li>
                  <li class="">
                     <a href="testimonial.html">
                        <span class="nav-icon uil uil-book-open"></span>
                        <span class="menu-text">Testimonial</span>
                     </a>
                  </li>
                  <li class="">
                     <a href="faq.html">
                        <span class="nav-icon uil uil-question-circle"></span>
                        <span class="menu-text">FAQ's</span>
                     </a>
                  </li>
                  <li class="">
                     <a href="search.html">
                        <span class="nav-icon uil uil-credit-card-search"></span>
                        <span class="menu-text">Search Results</span>
                     </a>
                  </li>
                  <li class="">
                     <a href="blank.html">
                        <span class="nav-icon uil uil-circle"></span>
                        <span class="menu-text">Blank Page</span>
                     </a>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-window"></span>
                        <span class="menu-text">Knowledge Base</span>
                        <span class="toggle-icon"></span>

                     </a>
                     <ul>
                        <li class="">
                           <a href="knowledgebase.html">Knowledge
                              Base</a>
                        </li>
                        <li class="">
                           <a href="knowledgebase-2.html">All
                              Article</a>
                        </li>

                        <li class="">
                           <a href="knowledgebase-3.html">Single
                              Article</a>
                        </li>
                     </ul>
                  </li>
                  <li class="">
                     <a href="support.html">
                        <span class="nav-icon uil uil-headphones"></span>
                        <span class="menu-text">Support Center</span>
                     </a>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-images"></span>
                        <span class="menu-text">Blog</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="blog.html">style 1</a>
                        </li>
                        <li class="">
                           <a href="blog2.html">Style 2</a>
                        </li>
                        <li class="">
                           <a href="blog3.html">Style 3</a>
                        </li>
                        <li class="">
                           <a href="blog-details.html">Details</a>
                        </li>
                     </ul>
                  </li>
                  <li class="">
                     <a href="terms.html">
                        <span class="nav-icon uil uil-question-circle"></span>
                        <span class="menu-text">Terms & Conditions</span>
                     </a>
                  </li>
                  <li class="">
                     <a href="maintenance.html">
                        <span class="nav-icon uil uil-airplay"></span>
                        <span class="menu-text">Maintenance</span>
                     </a>
                  </li>
                  <li class="">
                     <a href="404.html">
                        <span class="nav-icon uil uil-exclamation-triangle"></span>
                        <span class="menu-text">404</span>
                     </a>
                  </li>
                  <li class="">
                     <a href="coming-soon.html">
                        <span class="nav-icon uil uil-sync"></span>
                        <span class="menu-text">Coming Soon</span>
                     </a>
                  </li>
                  <li class="">
                     <a href="login.html">
                        <span class="nav-icon uil uil-signin"></span>
                        <span class="menu-text">Log In</span>
                     </a>
                  </li>
                  <li class="">
                     <a href="sign-up.html">
                        <span class="nav-icon uil uil-sign-out-alt"></span>
                        <span class="menu-text">Sign Up</span>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>