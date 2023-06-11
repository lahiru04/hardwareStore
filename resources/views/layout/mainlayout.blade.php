
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="POS - Bootstrap Admin Template">
        <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Marble & Ceramic corp</title>


        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Animation CSS -->
        <link rel="stylesheet" href="assets/css/animate.css">

        <!-- Datatable CSS -->
        <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

        <!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- Select2 CSS -->
        <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="assets/plugins/owlcarousel/owl.carousel.min.css">





    </head>
    <body>
        <div id="global-loader" >
            <div class="whirly-loader"> </div>
        </div>
        <!-- Main Wrapper -->
        <div class="main-wrapper">

            <!-- Header -->
            <div class="header">

                <!-- Logo -->
                <div class="header-left active">
                    <a href="index" class="logo logo-normal">
                        <img src="assets/img/logo.png"  alt="">
                    </a>
                    <a href="index" class="logo logo-white">
                        <img src="assets/img/logo-white.png"  alt="">
                    </a>
                    <a href="index" class="logo-small">
                        <img src="assets/img/logo-small.png"  alt="">
                    </a>
                    <a id="toggle_btn" href="javascript:void(0);">
                    </a>
                </div>
                <!-- /Logo -->

                <a id="mobile_btn" class="mobile_btn" href="#sidebar">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>

                <!-- Header Menu -->
                <ul class="nav user-menu">

                    <!-- Search -->
                    <li class="nav-item">
                        <div class="top-nav-search">

                            <a href="javascript:void(0);" class="responsive-search">
                                <i class="fa fa-search"></i>
                            </a>
                            <form action="#">
                                <div class="searchinputs">
                                    <input type="text" placeholder="Search Here ...">
                                    <div class="search-addon">
                                        <span><img src="assets/img/icons/closes.svg" alt="img"></span>
                                    </div>
                                </div>
                                <a class="btn"  id="searchdiv"><img src="assets/img/icons/search.svg" alt="img"></a>
                            </form>
                        </div>
                    </li>
                    <!-- /Search -->

                    <!-- Flag -->
                    <li class="nav-item dropdown has-arrow flag-nav">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);" role="button">
                            <img src="assets/img/flags/us1.png" alt="" height="20">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="assets/img/flags/us.png" alt="" height="16"> English
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="assets/img/flags/fr.png" alt="" height="16"> French
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="assets/img/flags/es.png" alt="" height="16"> Spanish
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="assets/img/flags/de.png" alt="" height="16"> German
                            </a>
                        </div>
                    </li>
                    <!-- /Flag -->

                    <!-- Notifications -->
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                            <img src="assets/img/icons/notification-bing.svg"   alt="img"> <span class="badge rounded-pill">4</span>
                        </a>
                        <div class="dropdown-menu notifications">
                            <div class="topnav-dropdown-header">
                                <span class="notification-title">Notifications</span>
                                <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <a href="activities">
                                            <div class="media d-flex">
                                                <span class="avatar flex-shrink-0">
                                                    <img alt="" src="assets/img/profiles/avatar-02.jpg">
                                                </span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details"><span class="noti-title">{{Auth::user()->name}}</span> added new task <span class="noti-title">Patient appointment booking</span></p>
                                                    <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities">
                                            <div class="media d-flex">
                                                <span class="avatar flex-shrink-0">
                                                    <img alt="" src="assets/img/profiles/avatar-03.jpg">
                                                </span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
                                                    <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities">
                                            <div class="media d-flex">
                                                <span class="avatar flex-shrink-0">
                                                    <img alt="" src="assets/img/profiles/avatar-06.jpg">
                                                </span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
                                                    <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities">
                                            <div class="media d-flex">
                                                <span class="avatar flex-shrink-0">
                                                    <img alt="" src="assets/img/profiles/avatar-17.jpg">
                                                </span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
                                                    <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities">
                                            <div class="media d-flex">
                                                <span class="avatar flex-shrink-0">
                                                    <img alt="" src="assets/img/profiles/avatar-13.jpg">
                                                </span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
                                                    <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topnav-dropdown-footer">
                                <a href="activities">View all Notifications</a>
                            </div>
                        </div>
                    </li>
                    <!-- /Notifications -->

                    <li class="nav-item dropdown has-arrow main-drop">
                        <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                            <span class="user-img"><img src="assets/img/profiles/avator1.jpg" alt="">
                                <span class="status online"></span></span>
                        </a>
                        <div class="dropdown-menu menu-drop-user">
                            <div class="profilename">
                                <div class="profileset">
                                    <span class="user-img"><img src="assets/img/profiles/avator1.jpg" alt="">
                                        <span class="status online"></span></span>
                                    <div class="profilesets">
                                        <h6>{{Auth::user()->name}}</h6>
                                        <h5>Admin</h5>
                                    </div>
                                </div>
                                <hr class="m-0">
                                <a class="dropdown-item" href="profile"> <i class="me-2"  data-feather="user"></i> My Profile</a>
                                <a class="dropdown-item" href="generalsettings"><i class="me-2" data-feather="settings"></i>Settings</a>
                                <hr class="m-0">
                                <a class="dropdown-item logout pb-0" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <img src="assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
                                    
                                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- /Header Menu -->

                <!-- Mobile Menu -->
                <div class="dropdown mobile-user-menu">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="profile">My Profile</a>
                        <a class="dropdown-item" href="generalsettings">Settings</a>
                        <a class="dropdown-item" href="signin">Logout</a>
                    </div>
                </div>
                <!-- /Mobile Menu -->
            </div>
            <!-- Header -->

            <!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu">
                        <ul>
                            <li class="active">
                                <a href="index" ><img src="assets/img/icons/dashboard.svg" alt="img"><span> Dashboard</span> </a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="assets/img/icons/product.svg" alt="img"><span> Product</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="productlist">Product List</a></li>
                                    <li><a href="addproduct">Add Product</a></li>
                                    <li><a href="categorylist">Category List</a></li>
                                    <li><a href="addcategory">Add Category</a></li>
                                    <li><a href="subcategorylist">Sub Category List</a></li>
                                    <li><a href="subaddcategory">Add Sub Category</a></li>
                                    <li><a href="brandlist">Brand List</a></li>
                                    <li><a href="addbrand">Add Brand</a></li>
                                    <li><a href="importproduct">Import Products</a></li>
                                    <li><a href="barcode">Print Barcode</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="assets/img/icons/sales1.svg" alt="img"><span> Sales</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="saleslist">Sales List</a></li>
                                    <li><a href="pos">POS</a></li>
                                    <li><a href="pos">New Sales</a></li>
                                    <li><a href="salesreturnlists">Sales Return List</a></li>
                                    <li><a href="createsalesreturns">New Sales Return</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="assets/img/icons/purchase1.svg" alt="img"><span> Purchase</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="purchaselist">Purchase List</a></li>
                                    <li><a href="addpurchase">Add Purchase</a></li>
                                    <li><a href="importpurchase">Import Purchase</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="assets/img/icons/expense1.svg" alt="img"><span> Expense</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="expenselist">Expense List</a></li>
                                    <li><a href="createexpense">Add Expense</a></li>
                                    <li><a href="expensecategory">Expense Category</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="assets/img/icons/quotation1.svg" alt="img"><span> Quotation</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="quotationList">Quotation List</a></li>
                                    <li><a href="addquotation">Add Quotation</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="assets/img/icons/transfer1.svg" alt="img"><span> Transfer</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="transferlist">Transfer  List</a></li>
                                    <li><a href="addtransfer">Add Transfer </a></li>
                                    <li><a href="importtransfer">Import Transfer </a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="assets/img/icons/return1.svg" alt="img"><span> Return</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="salesreturnlist">Sales Return List</a></li>
                                    <li><a href="createsalesreturn">Add Sales Return </a></li>
                                    <li><a href="purchasereturnlist">Purchase Return List</a></li>
                                    <li><a href="createpurchasereturn">Add Purchase Return </a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="assets/img/icons/users1.svg" alt="img"><span> People</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="customerlist">Customer List</a></li>
                                    <li><a href="addcustomer">Add Customer  </a></li>
                                    <li><a href="supplierlist">Supplier List</a></li>
                                    <li><a href="addsupplier">Add Supplier </a></li>
                                    <li><a href="userlist">User List</a></li>
                                    <li><a href="adduser">Add User</a></li>
                                    <li><a href="storelist">Store List</a></li>
                                    <li><a href="addstore">Add Store</a></li>
                                </ul>
                            </li>														<li class="submenu">
                                <a href="javascript:void(0);"><img src="assets/img/icons/places.svg" alt="img"><span> Places</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="newcountry">New Country</a></li>
                                    <li><a href="countrieslist">Countries list</a></li>
                                    <li><a href="newstate">New State </a></li>
                                    <li><a href="statelist">State list</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="components" ><i data-feather="layers"></i><span> Components</span> </a>
                            </li>
                            <li>
                                <a href="blankpage" ><i data-feather="file"></i><span> Blank Page</span> </a>
                            </li>
                            <li  class="submenu">
                                <a href="javascript:void(0);"><i data-feather="alert-octagon"></i> <span> Error Pages  </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="error-404">404 Error </a></li>
                                    <li><a href="error-500">500 Error </a></li>
                                </ul>
                            </li>
                            <li  class="submenu">
                                <a href="javascript:void(0);"><i data-feather="box"></i> <span>Elements </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="sweetalerts">Sweet Alerts</a></li>
                                    <li><a href="tooltip">Tooltip</a></li>
                                    <li><a href="popover">Popover</a></li>
                                    <li><a href="ribbon">Ribbon</a></li>
                                    <li><a href="clipboard">Clipboard</a></li>
                                    <li><a href="drag-drop">Drag & Drop</a></li>
                                    <li><a href="rangeslider">Range Slider</a></li>
                                    <li><a href="rating">Rating</a></li>
                                    <li><a href="toastr">Toastr</a></li>
                                    <li><a href="text-editor">Text Editor</a></li>
                                    <li><a href="counter">Counter</a></li>
                                    <li><a href="scrollbar">Scrollbar</a></li>
                                    <li><a href="spinner">Spinner</a></li>
                                    <li><a href="notification">Notification</a></li>
                                    <li><a href="lightbox">Lightbox</a></li>
                                    <li><a href="stickynote">Sticky Note</a></li>
                                    <li><a href="timeline">Timeline</a></li>
                                    <li><a href="form-wizard">Form Wizard</a></li>
                                </ul>
                            </li>
                            <li  class="submenu">
                                <a href="javascript:void(0);"><i data-feather="bar-chart-2"></i> <span> Charts  </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="chart-apex">Apex Charts</a></li>
                                    <li><a href="chart-js">Chart Js</a></li>
                                    <li><a href="chart-morris">Morris Charts</a></li>
                                    <li><a href="chart-flot">Flot Charts</a></li>
                                    <li><a href="chart-peity">Peity Charts</a></li>
                                </ul>
                            </li>
                            <li  class="submenu">
                                <a href="javascript:void(0);"><i data-feather="award"></i><span> Icons  </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="icon-fontawesome">Fontawesome Icons</a></li>
                                    <li><a href="icon-feather">Feather Icons</a></li>
                                    <li><a href="icon-ionic">Ionic Icons</a></li>
                                    <li><a href="icon-material">Material Icons</a></li>
                                    <li><a href="icon-pe7">Pe7 Icons</a></li>
                                    <li><a href="icon-simpleline">Simpleline Icons</a></li>
                                    <li><a href="icon-themify">Themify Icons</a></li>
                                    <li><a href="icon-weather">Weather Icons</a></li>
                                    <li><a href="icon-typicon">Typicon Icons</a></li>
                                    <li><a href="icon-flag">Flag Icons</a></li>
                                </ul>
                            </li>
                            <li  class="submenu">
                                <a href="javascript:void(0);"><i data-feather="columns"></i> <span> Forms  </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="form-basic-inputs">Basic Inputs </a></li>
                                    <li><a href="form-input-groups">Input Groups </a></li>
                                    <li><a href="form-horizontal">Horizontal Form </a></li>
                                    <li><a href="form-vertical"> Vertical Form </a></li>
                                    <li><a href="form-mask">Form Mask </a></li>
                                    <li><a href="form-validation">Form Validation </a></li>
                                    <li><a href="form-select2">Form Select2 </a></li>
                                    <li><a href="form-fileupload">File Upload </a></li>
                                </ul>
                            </li>
                            <li  class="submenu">
                                <a href="javascript:void(0);"><i data-feather="layout"></i> <span> Table  </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="tables-basic" >Basic Tables </a></li>
                                    <li><a href="data-tables">Data Table </a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="assets/img/icons/product.svg" alt="img"><span> Application</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="chat">Chat</a></li>
                                    <li><a href="calendar">Calendar</a></li>
                                    <li><a href="email">Email</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="assets/img/icons/time.svg" alt="img"><span> Report</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="purchaseorderreport">Purchase order report</a></li>
                                    <li><a href="inventoryreport">Inventory Report</a></li>
                                    <li><a href="salesreport">Sales Report</a></li>
                                    <li><a href="invoicereport">Invoice Report</a></li>
                                    <li><a href="purchasereport">Purchase Report</a></li>
                                    <li><a href="supplierreport">Supplier Report</a></li>
                                    <li><a href="customerreport">Customer Report</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="assets/img/icons/users1.svg" alt="img"><span> Users</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="newuser">New User </a></li>
                                    <li><a href="userlists">Users List</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><img src="assets/img/icons/settings.svg" alt="img"><span> Settings</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="generalsettings">General Settings</a></li>
                                    <li><a href="emailsettings">Email Settings</a></li>
                                    <li><a href="paymentsettings">Payment Settings</a></li>
                                    <li><a href="currencysettings">Currency Settings</a></li>
                                    <li><a href="grouppermissions">Group Permissions</a></li>
                                    <li><a href="taxrates">Tax Rates</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Sidebar -->

            <div class="page-wrapper">
                <div class="content">
                    @yield('content')
                </div>
            </div>

        </div>
        <!-- /Main Wrapper -->

        <!-- jQuery -->
        <script src="assets/js/jquery-3.6.0.min.js"></script>

        <!-- Feather Icon JS -->
        <script src="assets/js/feather.min.js"></script>

        <!-- Slimscroll JS -->
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- Datatable JS -->
        <script src="assets/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/dataTables.bootstrap4.min.js"></script>

        <!-- Bootstrap Core JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <!-- Chart JS -->
        <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
        <script src="assets/plugins/apexchart/chart-data.js"></script>

        <!-- Custom JS -->
        <script src="assets/js/script.js"></script>

        <script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
        <script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>
        <!-- Select2 JS -->
        <script src="assets/plugins/select2/js/select2.min.js"></script>
        <script src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>

        @yield('jScript')

    </body>
</html>
