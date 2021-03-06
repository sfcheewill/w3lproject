<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/static/admins/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/admins/custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/static/admins/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/admins/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/admins/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/static/admins/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/admins/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/admins/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/static/admins/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/static/admins/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/admins/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/static/admins/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/admins/css/themer.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/admins/css/my.css" media="screen">


<title>@yield('title')</title>

</head>

<body>
	<!-- Header -->
	<div id="mws-header" class="clearfix">
    
    	<!-- Logo Container -->
    	<div id="mws-logo-container">
        
        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
            	<img src="/static/admins/images/mws-logo.png" alt="mws admin">
			</div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
        	<!-- Notifications -->
        	<div id="mws-user-notif" class="mws-dropdown-menu">
            	<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a>
                
                <!-- Unread notification count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Notifications dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-notifications">
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Notifications</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
            	<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>
                
                <!-- Unred messages count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Messages dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-messages">
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Messages</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
            	<!-- User Photo -->
            	<div id="mws-user-photo">
                	<a href="/admin"><img src="/static/admins/example/profile.jpg" alt="User Photo"></a>
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        {{session('name')}}
                    </div>
                    <ul>
                    	<li><a href="/admin/{{session('id')}}">Authority</a></li>
                        <li><a href="/admin/{{session('id')}}/edit">Change Password</a></li>
                        <li><a href="/adminlogin">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
        	<!-- Searchbox -->
        	<div id="mws-searchbox" class="mws-inset">
            	<form action="typography.html">
                	<input type="text" class="mws-search-input" placeholder="Search...">
                    <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                </form>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icol32-user-green"></i> 管理员管理</a>
                        <ul class="closed">
                            <li><a href="/adminuser/create">管理员添加</a></li>
                            <li><a href="/adminuser">管理员列表</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icol32-group"></i> 角色管理</a>
                        <ul class="closed">
                            <li><a href="/adminrolelist/create">角色添加</a></li>
                            <li><a href="/adminrolelist">角色列表</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icol32-lightning"></i> 权限管理</a>
                        <ul class="closed">
                            <li><a href="/adminnodelist/create">权限添加</a></li>
                            <li><a href="/adminnodelist">权限列表</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icol32-user"></i> 会员管理</a>
                        <ul class="closed">
                            <li><a href="/adminusers">会员列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icol32-twitter-2"></i> 分类管理</a>
                        <ul class="closed">
                            <li><a href="/admincate/create">分类添加</a></li>
                            <li><a href="/admincate">分类列表</a></li>
                        </ul>
                    </li>
                    
                     <li>
                        <a href="#"><i class="icol32-handbag"></i> 商品管理</a>
                        <ul class="closed">
                            <li><a href="/admingoods/create">商品添加</a></li>
                            <li><a href="/admingoods">商品列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icol32-bell"></i> 公告管理</a>
                        <ul class="closed">
                            <li><a href="/adminnotice/create">公告添加</a></li>
                            <li><a href="/adminnotice">公告列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icol32-attach"></i> 友情链接管理</a>
                        <ul class="closed">
                            <li><a href="/adminlink">友情链接列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icol32-photos"></i> 轮播图管理</a>
                        <ul class="closed">
                            <li><a href="/adminslideshow/create">轮播图添加</a></li>
                            <li><a href="/adminslideshow">轮播图列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icol32-sound"></i> 广告图片管理</a>
                        <ul class="closed">
                            <li><a href="/advertising/create">广告图添加</a></li>
                            <li><a href="/advertising">广告图列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icol32-layer-edit"></i> 会员订单管理</a>
                        <ul class="closed">
                            <li><a href="/adminorder">订单列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icol32-document-quote"></i> 站内信管理</a>
                        <ul class="closed">
                            <li><a href="/sendstand/create">站内信模板添加</a></li>
                            <li><a href="/sendstand">站内信模板列表</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icol32-color-wheel"></i> 抽奖模块管理</a>
                        <ul class="closed">
                            <li><a href="/award/create">抽奖板块添加</a></li>
                            <li><a href="/award">抽奖板块列表</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icol32-shopping"></i> 优惠券管理</a>
                        <ul class="closed">
                            <li><a href="/mylottry">用户优惠券列表</a></li>
                        </ul>
                    </li>
                </ul>
            </div>         
        </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
            	<div class="container">
                    @if(session('success'))
                       <div class="mws-form-message success">
                         {{session('success')}}
                      </div>
                    @endif
                  
                    @if(session('error'))
                      <div class="mws-form-message warning">
                         {{session('error')}}
                      </div>
                    @endif
                    @section('content')
                    @show                   
                </div>
                <!-- footer -->
                <div id="mws-footer">
                    Copyright Your Website 2012. All Rights Reserved.
                </div>
        </div>
        <!-- Main Container End -->
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="/static/admins/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/static/admins/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/static/admins/js/libs/jquery.placeholder.min.js"></script>
    <script src="/static/admins/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/static/admins/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/static/admins/jui/jquery-ui.custom.min.js"></script>
    <script src="/static/admins/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/static/admins/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/static/admins/plugins/flot/jquery.flot.min.js"></script>
    <script src="/static/admins/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/static/admins/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/static/admins/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/static/admins/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="/static/admins/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/static/admins/plugins/validate/jquery.validate-min.js"></script>
    <script src="/static/admins/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/static/admins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/static/admins/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/static/admins/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/static/admins/js/demo/demo.dashboard.js"></script>

</body>
</html>