
<!DOCTYPE html>

<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="gt-ie8 gt-ie9 not-ie"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Dashboard - PixelAdmin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

	<!-- Open Sans font from Google CDN -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin" rel="stylesheet" type="text/css">

	<!-- Pixel Admin's css -->
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/pixel-admin.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/widgets.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/rtl.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/themes.min.css" rel="stylesheet" type="text/css">

	<!--[if lt IE 9]>
		<script src="/assets/js/ie.min.js"></script>
	<![endif]-->
</head>

<body class="theme-default main-menu-animated">

<script>var init = [];</script>

<div id="main-wrapper">

	<div id="main-navbar" class="navbar navbar-inverse" role="navigation">
		<!-- Main menu toggle -->
		<button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">HIDE MENU</span></button>

		<div class="navbar-inner">
			<!-- Main navbar header -->
			<div class="navbar-header">

				<!-- Logo -->
				<a href="{{ URL::route('user.dashboard') }}" class="navbar-brand">
					Sightseeing.io
				</a>

				<!-- Main navbar toggle -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>

			</div> <!-- / .navbar-header -->

			<div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
				<div>
					<ul class="nav navbar-nav">
						<li>
							<a href="#">Home</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
							<ul class="dropdown-menu">
								<li><a href="#">First item</a></li>
								<li><a href="#">Second item</a></li>
								<li class="divider"></li>
								<li><a href="#">Third item</a></li>
							</ul>
						</li>
					</ul> <!-- / .navbar-nav -->

					<div class="right clearfix">
						<ul class="nav navbar-nav pull-right right-navbar-nav">

<!-- 3. $NAVBAR_ICON_BUTTONS =======================================================================

							Navbar Icon Buttons

							NOTE: .nav-icon-btn triggers a dropdown menu on desktop screens only. On small screens .nav-icon-btn acts like a hyperlink.

							Classes:
							* 'nav-icon-btn-info'
							* 'nav-icon-btn-success'
							* 'nav-icon-btn-warning'
							* 'nav-icon-btn-danger'
-->
							<li class="nav-icon-btn nav-icon-btn-danger dropdown">
								<a href="#notifications" class="dropdown-toggle" data-toggle="dropdown">
									<span class="label">5</span>
									<i class="nav-icon fa fa-bullhorn"></i>
									<span class="small-screen-text">Notifications</span>
								</a>

								<!-- NOTIFICATIONS -->

								<!-- Javascript -->
								<script>
									init.push(function () {
										$('#main-navbar-notifications').slimScroll({ height: 250 });
									});
								</script>
								<!-- / Javascript -->

								<div class="dropdown-menu widget-notifications no-padding" style="width: 300px">
									<div class="notifications-list" id="main-navbar-notifications">

										<div class="notification">
											<div class="notification-title text-danger">SYSTEM</div>
											<div class="notification-description"><strong>Error 500</strong>: Syntax error in index.php at line <strong>461</strong>.</div>
											<div class="notification-ago">12h ago</div>
											<div class="notification-icon fa fa-hdd-o bg-danger"></div>
										</div> <!-- / .notification -->

										<div class="notification">
											<div class="notification-title text-info">STORE</div>
											<div class="notification-description">You have <strong>9</strong> new orders.</div>
											<div class="notification-ago">12h ago</div>
											<div class="notification-icon fa fa-truck bg-info"></div>
										</div> <!-- / .notification -->

										<div class="notification">
											<div class="notification-title text-default">CRON DAEMON</div>
											<div class="notification-description">Job <strong>"Clean DB"</strong> has been completed.</div>
											<div class="notification-ago">12h ago</div>
											<div class="notification-icon fa fa-clock-o bg-default"></div>
										</div> <!-- / .notification -->

										<div class="notification">
											<div class="notification-title text-success">SYSTEM</div>
											<div class="notification-description">Server <strong>up</strong>.</div>
											<div class="notification-ago">12h ago</div>
											<div class="notification-icon fa fa-hdd-o bg-success"></div>
										</div> <!-- / .notification -->

										<div class="notification">
											<div class="notification-title text-warning">SYSTEM</div>
											<div class="notification-description"><strong>Warning</strong>: Processor load <strong>92%</strong>.</div>
											<div class="notification-ago">12h ago</div>
											<div class="notification-icon fa fa-hdd-o bg-warning"></div>
										</div> <!-- / .notification -->

									</div> <!-- / .notifications-list -->
									<a href="#" class="notifications-link">MORE NOTIFICATIONS</a>
								</div> <!-- / .dropdown-menu -->
							</li>
							<li class="nav-icon-btn nav-icon-btn-success dropdown">
								<a href="#messages" class="dropdown-toggle" data-toggle="dropdown">
									<span class="label">10</span>
									<i class="nav-icon fa fa-envelope"></i>
									<span class="small-screen-text">Income messages</span>
								</a>

								<!-- MESSAGES -->

								<!-- Javascript -->
								<script>
									init.push(function () {
										$('#main-navbar-messages').slimScroll({ height: 250 });
									});
								</script>
								<!-- / Javascript -->

								<div class="dropdown-menu widget-messages-alt no-padding" style="width: 300px;">
									<div class="messages-list" id="main-navbar-messages">

										<div class="message">
											<img src="/assets/demo/avatars/2.jpg" alt="" class="message-avatar">
											<a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
											<div class="message-description">
												from <a href="#">Robert Jang</a>
												&nbsp;&nbsp;·&nbsp;&nbsp;
												2h ago
											</div>
										</div> <!-- / .message -->

										<div class="message">
											<img src="/assets/demo/avatars/3.jpg" alt="" class="message-avatar">
											<a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
											<div class="message-description">
												from <a href="#">Michelle Bortz</a>
												&nbsp;&nbsp;·&nbsp;&nbsp;
												2h ago
											</div>
										</div> <!-- / .message -->

										<div class="message">
											<img src="/assets/demo/avatars/4.jpg" alt="" class="message-avatar">
											<a href="#" class="message-subject">Lorem ipsum dolor sit amet.</a>
											<div class="message-description">
												from <a href="#">Timothy Owens</a>
												&nbsp;&nbsp;·&nbsp;&nbsp;
												2h ago
											</div>
										</div> <!-- / .message -->

										<div class="message">
											<img src="/assets/demo/avatars/5.jpg" alt="" class="message-avatar">
											<a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
											<div class="message-description">
												from <a href="#">Denise Steiner</a>
												&nbsp;&nbsp;·&nbsp;&nbsp;
												2h ago
											</div>
										</div> <!-- / .message -->

										<div class="message">
											<img src="/assets/demo/avatars/2.jpg" alt="" class="message-avatar">
											<a href="#" class="message-subject">Lorem ipsum dolor sit amet.</a>
											<div class="message-description">
												from <a href="#">Robert Jang</a>
												&nbsp;&nbsp;·&nbsp;&nbsp;
												2h ago
											</div>
										</div> <!-- / .message -->

										<div class="message">
											<img src="/assets/demo/avatars/2.jpg" alt="" class="message-avatar">
											<a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
											<div class="message-description">
												from <a href="#">Robert Jang</a>
												&nbsp;&nbsp;·&nbsp;&nbsp;
												2h ago
											</div>
										</div> <!-- / .message -->

										<div class="message">
											<img src="/assets/demo/avatars/3.jpg" alt="" class="message-avatar">
											<a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
											<div class="message-description">
												from <a href="#">Michelle Bortz</a>
												&nbsp;&nbsp;·&nbsp;&nbsp;
												2h ago
											</div>
										</div> <!-- / .message -->

										<div class="message">
											<img src="/assets/demo/avatars/4.jpg" alt="" class="message-avatar">
											<a href="#" class="message-subject">Lorem ipsum dolor sit amet.</a>
											<div class="message-description">
												from <a href="#">Timothy Owens</a>
												&nbsp;&nbsp;·&nbsp;&nbsp;
												2h ago
											</div>
										</div> <!-- / .message -->

										<div class="message">
											<img src="/assets/demo/avatars/5.jpg" alt="" class="message-avatar">
											<a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
											<div class="message-description">
												from <a href="#">Denise Steiner</a>
												&nbsp;&nbsp;·&nbsp;&nbsp;
												2h ago
											</div>
										</div> <!-- / .message -->

										<div class="message">
											<img src="/assets/demo/avatars/2.jpg" alt="" class="message-avatar">
											<a href="#" class="message-subject">Lorem ipsum dolor sit amet.</a>
											<div class="message-description">
												from <a href="#">Robert Jang</a>
												&nbsp;&nbsp;·&nbsp;&nbsp;
												2h ago
											</div>
										</div> <!-- / .message -->

									</div> <!-- / .messages-list -->
									<a href="#" class="messages-link">MORE MESSAGES</a>
								</div> <!-- / .dropdown-menu -->
							</li>
<!-- /3. $END_NAVBAR_ICON_BUTTONS -->

							<li>
								<form class="navbar-form pull-left">
									<input type="text" class="form-control" placeholder="Search">
								</form>
							</li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
									<img src="/assets/demo/avatars/1.jpg" alt="">
									<span>John Doe</span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#"><span class="label label-warning pull-right">New</span>Profile</a></li>
									<li><a href="#"><span class="badge badge-primary pull-right">New</span>Account</a></li>
									<li><a href="#"><i class="dropdown-icon fa fa-cog"></i>&nbsp;&nbsp;Settings</a></li>
									<li class="divider"></li>
									<li><a href="pages-signin.html"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
								</ul>
							</li>
						</ul> <!-- / .navbar-nav -->
					</div> <!-- / .right -->
				</div>
			</div> <!-- / #main-navbar-collapse -->
		</div> <!-- / .navbar-inner -->
	</div> <!-- / #main-navbar -->
<!-- /2. $END_MAIN_NAVIGATION -->


<!-- 4. $MAIN_MENU =================================================================================

		Main menu

		Notes:
		* to make the menu item active, add a class 'active' to the <li>
		  example: <li class="active">...</li>
		* multilevel submenu example:
			<li class="mm-dropdown">
			  <a href="#"><span class="mm-text">Submenu item text 1</span></a>
			  <ul>
				<li>...</li>
				<li class="mm-dropdown">
				  <a href="#"><span class="mm-text">Submenu item text 2</span></a>
				  <ul>
					<li>...</li>
					...
				  </ul>
				</li>
				...
			  </ul>
			</li>
-->
	<div id="main-menu" role="navigation">
		<div id="main-menu-inner">
			<div class="menu-content top" id="menu-content-demo">
				<!-- Menu custom content demo
					 CSS:        styles/pixel-admin-less/demo.less or styles/pixel-admin-scss/_demo.scss
					 Javascript: html//assets/demo/demo.js
				 -->
				<div>
					<div class="text-bg"><span class="text-slim">Welcome,</span> <span class="text-semibold">John</span></div>

					<img src="/assets/demo/avatars/1.jpg" alt="" class="">
					<div class="btn-group">
						<a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-envelope"></i></a>
						<a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-user"></i></a>
						<a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-cog"></i></a>
						<a href="#" class="btn btn-xs btn-danger btn-outline dark"><i class="fa fa-power-off"></i></a>
					</div>
					<a href="#" class="close">&times;</a>
				</div>
			</div>
			<ul class="navigation">
				<li>
					<a href="index.html"><i class="menu-icon fa fa-dashboard"></i><span class="mm-text">Dashboard</span></a>
				</li>
				<li class="mm-dropdown">
					<a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">Layouts</span><span class="label label-warning">Updated</span></a>
					<ul>
						<li>
							<a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Grid</span></a>
						</li>
						<li>
							<a tabindex="-1" href="layouts-main-menu.html"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">Main menu</span><span class="label label-warning">Updated</span></a>
						</li>
					</ul>
				</li>
				<li>
					<a href="stat-panels.html"><i class="menu-icon fa fa-tasks"></i><span class="mm-text">Stat panels</span></a>
				</li>
				<li>
					<a href="widgets.html"><i class="menu-icon fa fa-flask"></i><span class="mm-text">Widgets</span></a>
				</li>
				<li class="mm-dropdown">
					<a href="#"><i class="menu-icon fa fa-desktop"></i><span class="mm-text">UI elements</span></a>
					<ul>
						<li>
							<a tabindex="-1" href="ui-buttons.html"><span class="mm-text">Buttons</span></a>
						</li>
						<li>
							<a tabindex="-1" href="ui-typography.html"><span class="mm-text">Typography</span></a>
						</li>
						<li>
							<a tabindex="-1" href="ui-tabs.html"><span class="mm-text">Tabs &amp; Accordions</span></a>
						</li>
						<li>
							<a tabindex="-1" href="ui-modals.html"><span class="mm-text">Modals</span></a>
						</li>
						<li>
							<a tabindex="-1" href="ui-alerts.html"><span class="mm-text">Alerts &amp; Tooltips</span></a>
						</li>
						<li>
							<a tabindex="-1" href="ui-components.html"><span class="mm-text">Components</span></a>
						</li>
						<li>
							<a tabindex="-1" href="ui-panels.html"><span class="mm-text">Panels</span></a>
						</li>
						<li>
							<a tabindex="-1" href="ui-jqueryui.html"><span class="mm-text">jQuery UI</span></a>
						</li>
						<li>
							<a tabindex="-1" href="ui-icons.html"><span class="mm-text">Icons</span></a>
						</li>
						<li>
							<a tabindex="-1" href="ui-utility-classes.html"><span class="mm-text">Utility classes</span></a>
						</li>
					</ul>
				</li>
				<li class="mm-dropdown">
					<a href="#"><i class="menu-icon fa fa-check-square"></i><span class="mm-text">Form components</span></a>
					<ul>
						<li>
							<a tabindex="-1" href="forms-layouts.html"><span class="mm-text">Layouts</span></a>
						</li>
						<li>
							<a tabindex="-1" href="forms-general.html"><span class="mm-text">General</span></a>
						</li>
						<li>
							<a tabindex="-1" href="forms-advanced.html"><span class="mm-text">Advanced</span></a>
						</li>
						<li>
							<a tabindex="-1" href="forms-pickers.html"><span class="mm-text">Pickers</span></a>
						</li>
						<li>
							<a tabindex="-1" href="forms-validation.html"><span class="mm-text">Validation</span></a>
						</li>
						<li>
							<a tabindex="-1" href="forms-editors.html"><span class="mm-text">Editors</span></a>
						</li>
					</ul>
				</li>
				<li>
					<a href="tables.html"><i class="menu-icon fa fa-table"></i><span class="mm-text">Tables</span></a>
				</li>
				<li>
					<a href="charts.html"><i class="menu-icon fa fa-bar-chart-o"></i><span class="mm-text">Charts</span></a>
				</li>
				<li class="mm-dropdown">
					<a href="#"><i class="menu-icon fa fa-files-o"></i><span class="mm-text">Pages</span><span class="label label-success">16</span></a>
					<ul>
						<li>
							<a tabindex="-1" href="pages-search.html"><span class="mm-text">Search results</span></a>
						</li>
						<li>
							<a tabindex="-1" href="pages-pricing.html"><span class="mm-text">Plans &amp; pricing</span></a>
						</li>
						<li>
							<a tabindex="-1" href="pages-faq.html"><span class="mm-text">FAQ</span></a>
						</li>
						<li>
							<a tabindex="-1" href="pages-profile.html"><span class="mm-text">Profile</span></a>
						</li>
						<li>
							<a tabindex="-1" href="pages-timeline.html"><span class="mm-text">Timeline</span></a>
						</li>
						<li>
							<a tabindex="-1" href="pages-signin.html"><span class="mm-text">Sign In</span></a>
						</li>
						<li>
							<a tabindex="-1" href="pages-signup.html"><span class="mm-text">Sign Up</span></a>
						</li>
						<li>
							<a tabindex="-1" href="pages-signin-alt.html"><span class="mm-text">Sign In Alt</span></a>
						</li>
						<li>
							<a tabindex="-1" href="pages-signup-alt.html"><span class="mm-text">Sign Up Alt</span></a>
						</li>
						<li>
							<a tabindex="-1" href="pages-invoice.html"><span class="mm-text">Invoice</span></a>
						</li>
						<li>
							<a tabindex="-1" href="pages-404.html"><span class="mm-text">Error 404</span></a>
						</li>
						<li>
							<a tabindex="-1" href="pages-500.html"><span class="mm-text">Error 500</span></a>
						</li>
						<li class="mm-dropdown">
							<a href="#"><i class="menu-icon fa fa-envelope"></i><span class="mm-text">Messages</span></a>
							<ul>
								<li>
									<a tabindex="-1" href="pages-inbox.html"><span class="mm-text">Inbox</span></a>
								</li>
								<li>
									<a tabindex="-1" href="pages-show-email.html"><span class="mm-text">Show message</span></a>
								</li>
								<li>
									<a tabindex="-1" href="pages-new-email.html"><span class="mm-text">New message</span></a>
								</li>
							</ul>
						</li>
						<li>
							<a tabindex="-1" href="pages-blank.html"><span class="mm-text">Blank page</span></a>
						</li>
					</ul>
				</li>
				<li>
					<a href="complete-ui.html"><i class="menu-icon fa fa-briefcase"></i><span class="mm-text">Complete UI</span></a>
				</li>
				<li>
					<a href="color-builder.html"><i class="menu-icon fa fa-tint"></i><span class="mm-text">Color Builder</span></a>
				</li>
				<li class="mm-dropdown">
					<a href="#"><i class="menu-icon fa fa-sitemap"></i><span class="mm-text">Menu levels</span><span class="badge badge-primary">6</span></a>
					<ul>
						<li>
							<a tabindex="-1" href="#"><span class="mm-text">Menu level 1.1</span><span class="badge badge-danger">12</span><span class="label label-info">21</span></a>
						</li>
						<li>
							<a tabindex="-1" href="#"><span class="mm-text">Menu level 1.2</span></a>
						</li>
						<li class="mm-dropdown">
							<a tabindex="-1" href="#"><span class="mm-text">Menu level 1.3</span><span class="label label-warning">5</span></a>
							<ul>
								<li>
									<a tabindex="-1" href="#"><span class="mm-text">Menu level 2.1</span></a>
								</li>
								<li class="mm-dropdown">
									<a tabindex="-1" href="#"><span class="mm-text">Menu level 2.2</span></a>
									<ul>
										<li class="mm-dropdown">
											<a tabindex="-1" href="#"><span class="mm-text">Menu level 3.1</span></a>
											<ul>
												<li>
													<a tabindex="-1" href="#"><span class="mm-text">Menu level 4.1</span></a>
												</li>
											</ul>
										</li>
										<li>
											<a tabindex="-1" href="#"><span class="mm-text">Menu level 3.2</span></a>
										</li>
									</ul>
								</li>
								<li>
									<a tabindex="-1" href="#"><span class="mm-text">Menu level 2.2</span></a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul> <!-- / .navigation -->
			<div class="menu-content">
				<a href="pages-invoice.html" class="btn btn-primary btn-block btn-outline dark">Create Invoice</a>
			</div>
		</div> <!-- / #main-menu-inner -->
	</div> <!-- / #main-menu -->
<!-- /4. $MAIN_MENU -->

	<div id="content-wrapper">
		<ul class="breadcrumb breadcrumb-page">
			<div class="breadcrumb-label text-light-gray">You are here: </div>
			<li><a href="#">Home</a></li>
			<li class="active"><a href="#">Dashboard</a></li>
		</ul>
		<div class="page-header">

			<div class="row">
				<!-- Page header, center on small screens -->
				<h1 class="col-xs-12 col-sm-4 text-center text-left-sm"><i class="fa fa-dashboard page-header-icon"></i>&nbsp;&nbsp;Dashboard</h1>

				<div class="col-xs-12 col-sm-8">
					<div class="row">
						<hr class="visible-xs no-grid-gutter-h">
						<!-- "Create project" button, width=auto on desktops -->
						<div class="pull-right col-xs-12 col-sm-auto"><a href="#" class="btn btn-primary btn-labeled" style="width: 100%;"><span class="btn-label icon fa fa-plus"></span>Create project</a></div>

						<!-- Margin -->
						<div class="visible-xs clearfix form-group-margin"></div>

						<!-- Search field -->
						<form action="" class="pull-right col-xs-12 col-sm-6">
							<div class="input-group no-margin">
								<span class="input-group-addon" style="border:none;background: #fff;background: rgba(0,0,0,.05);"><i class="fa fa-search"></i></span>
								<input type="text" placeholder="Search..." class="form-control no-padding-hr" style="border:none;background: #fff;background: rgba(0,0,0,.05);">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div> <!-- / .page-header -->


		<div class="row">
			<div class="col-md-8">

<!-- 5. $UPLOADS_CHART =============================================================================

				Uploads chart
-->
				<!-- Javascript -->
				<script>
					init.push(function () {
						var uploads_data = [
							{ day: '2014-03-10', v: 20 },
							{ day: '2014-03-11', v: 10 },
							{ day: '2014-03-12', v: 15 },
							{ day: '2014-03-13', v: 12 },
							{ day: '2014-03-14', v: 5  },
							{ day: '2014-03-15', v: 5  },
							{ day: '2014-03-16', v: 20 }
						];
						Morris.Line({
							element: 'hero-graph',
							data: uploads_data,
							xkey: 'day',
							ykeys: ['v'],
							labels: ['Value'],
							lineColors: ['#fff'],
							lineWidth: 2,
							pointSize: 4,
							gridLineColor: 'rgba(255,255,255,.5)',
							resize: true,
							gridTextColor: '#fff',
							xLabels: "day",
							xLabelFormat: function(d) {
								return ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov', 'Dec'][d.getMonth()] + ' ' + d.getDate();
							},
						});
					});
				</script>
				<!-- / Javascript -->

				<div class="stat-panel">
					<div class="stat-row">
						<!-- Small horizontal padding, bordered, without right border, top aligned text -->
						<div class="stat-cell col-sm-4 padding-sm-hr bordered no-border-r valign-top">
							<!-- Small padding, without top padding, extra small horizontal padding -->
							<h4 class="padding-sm no-padding-t padding-xs-hr"><i class="fa fa-cloud-upload text-primary"></i>&nbsp;&nbsp;Uploads</h4>
							<!-- Without margin -->
							<ul class="list-group no-margin">
								<!-- Without left and right borders, extra small horizontal padding, without background, no border radius -->
								<li class="list-group-item no-border-hr padding-xs-hr no-bg no-border-radius">
									Documents <span class="label label-pa-purple pull-right">34</span>
								</li> <!-- / .list-group-item -->
								<!-- Without left and right borders, extra small horizontal padding, without background -->
								<li class="list-group-item no-border-hr padding-xs-hr no-bg">
									Audio <span class="label label-danger pull-right">128</span>
								</li> <!-- / .list-group-item -->
								<!-- Without left and right borders, without bottom border, extra small horizontal padding, without background -->
								<li class="list-group-item no-border-hr no-border-b padding-xs-hr no-bg">
									Videos <span class="label label-success pull-right">12</span>
								</li> <!-- / .list-group-item -->
							</ul>
						</div> <!-- /.stat-cell -->
						<!-- Primary background, small padding, vertically centered text -->
						<div class="stat-cell col-sm-8 bg-primary padding-sm valign-middle">
							<div id="hero-graph" class="graph" style="height: 230px;"></div>
						</div>
					</div>
				</div> <!-- /.stat-panel -->
<!-- /5. $UPLOADS_CHART -->

<!-- 6. $EASY_PIE_CHARTS ===========================================================================

				Easy Pie charts
-->
				<!-- Javascript -->
				<script>
					init.push(function () {
						// Easy Pie Charts
						var easyPieChartDefaults = {
							animate: 2000,
							scaleColor: false,
							lineWidth: 6,
							lineCap: 'square',
							size: 90,
							trackColor: '#e5e5e5'
						}
						$('#easy-pie-chart-1').easyPieChart($.extend({}, easyPieChartDefaults, {
							barColor: PixelAdmin.settings.consts.COLORS[1]
						}));
						$('#easy-pie-chart-2').easyPieChart($.extend({}, easyPieChartDefaults, {
							barColor: PixelAdmin.settings.consts.COLORS[1]
						}));
						$('#easy-pie-chart-3').easyPieChart($.extend({}, easyPieChartDefaults, {
							barColor: PixelAdmin.settings.consts.COLORS[1]
						}));
					});
				</script>
				<!-- / Javascript -->

				<div class="row">
					<div class="col-xs-4">
						<!-- Centered text -->
						<div class="stat-panel text-center">
							<div class="stat-row">
								<!-- Dark gray background, small padding, extra small text, semibold text -->
								<div class="stat-cell bg-dark-gray padding-sm text-xs text-semibold">
									<i class="fa fa-globe"></i>&nbsp;&nbsp;BANDWIDTH
								</div>
							</div> <!-- /.stat-row -->
							<div class="stat-row">
								<!-- Bordered, without top border, without horizontal padding -->
								<div class="stat-cell bordered no-border-t no-padding-hr">
									<div class="pie-chart" data-percent="43" id="easy-pie-chart-1">
										<div class="pie-chart-label">12.3TB</div>
									</div>
								</div>
							</div> <!-- /.stat-row -->
						</div> <!-- /.stat-panel -->
					</div>
					<div class="col-xs-4">
						<div class="stat-panel text-center">
							<div class="stat-row">
								<!-- Dark gray background, small padding, extra small text, semibold text -->
								<div class="stat-cell bg-dark-gray padding-sm text-xs text-semibold">
									<i class="fa fa-flash"></i>&nbsp;&nbsp;PICK LOAD
								</div>
							</div> <!-- /.stat-row -->
							<div class="stat-row">
								<!-- Bordered, without top border, without horizontal padding -->
								<div class="stat-cell bordered no-border-t no-padding-hr">
									<div class="pie-chart" data-percent="93" id="easy-pie-chart-2">
										<div class="pie-chart-label">93%</div>
									</div>
								</div>
							</div> <!-- /.stat-row -->
						</div> <!-- /.stat-panel -->
					</div>
					<div class="col-xs-4">
						<div class="stat-panel text-center">
							<div class="stat-row">
								<!-- Dark gray background, small padding, extra small text, semibold text -->
								<div class="stat-cell bg-dark-gray padding-sm text-xs text-semibold">
									<i class="fa fa-cloud"></i>&nbsp;&nbsp;USED RAM
								</div>
							</div> <!-- /.stat-row -->
							<div class="stat-row">
								<!-- Bordered, without top border, without horizontal padding -->
								<div class="stat-cell bordered no-border-t no-padding-hr">
									<div class="pie-chart" data-percent="75" id="easy-pie-chart-3">
										<div class="pie-chart-label">12GB</div>
									</div>
								</div>
							</div> <!-- /.stat-row -->
						</div> <!-- /.stat-panel -->
					</div>
				</div>
			</div>
<!-- /6. $EASY_PIE_CHARTS -->

			<div class="col-md-4">
				<div class="row">

<!-- 7. $EARNED_TODAY_STAT_PANEL ===================================================================

					Earned today stat panel
-->
					<div class="col-sm-4 col-md-12">
						<div class="stat-panel">
							<!-- Danger background, vertically centered text -->
							<div class="stat-cell bg-danger valign-middle">
								<!-- Stat panel bg icon -->
								<i class="fa fa-trophy bg-icon"></i>
								<!-- Extra large text -->
								<span class="text-xlg"><span class="text-lg text-slim">$</span><strong>147</strong></span><br>
								<!-- Big text -->
								<span class="text-bg">Earned today</span><br>
								<!-- Small text -->
								<span class="text-sm"><a href="#">See details in your profile</a></span>
							</div> <!-- /.stat-cell -->
						</div> <!-- /.stat-panel -->
					</div>
<!-- /7. $EARNED_TODAY_STAT_PANEL -->


<!-- 8. $RETWEETS_GRAPH_STAT_PANEL =================================================================

					Retweets graph stat panel
-->
					<div class="col-sm-4 col-md-12">
						<!-- Javascript -->
						<script>
							init.push(function () {
								$("#stats-sparklines-3").pixelSparkline([275,490,397,487,339,403,402,312,300], {
									type: 'line',
									width: '100%',
									height: '45px',
									fillColor: '',
									lineColor: '#fff',
									lineWidth: 2,
									spotColor: '#ffffff',
									minSpotColor: '#ffffff',
									maxSpotColor: '#ffffff',
									highlightSpotColor: '#ffffff',
									highlightLineColor: '#ffffff',
									spotRadius: 4,
									highlightLineColor: '#ffffff'
								});
							});
						</script>
						<!-- / Javascript -->

						<div class="stat-panel">
							<div class="stat-row">
								<!-- Purple background, small padding -->
								<div class="stat-cell bg-pa-purple padding-sm">
									<!-- Extra small text -->
									<div class="text-xs" style="margin-bottom: 5px;">RETWEETS GRAPH</div>
									<div class="stats-sparklines" id="stats-sparklines-3" style="width: 100%"></div>
								</div>
							</div> <!-- /.stat-row -->
							<div class="stat-row">
								<!-- Bordered, without top border, horizontally centered text -->
								<div class="stat-counters bordered no-border-t text-center">
									<!-- Small padding, without horizontal padding -->
									<div class="stat-cell col-xs-4 padding-sm no-padding-hr">
										<!-- Big text -->
										<span class="text-bg"><strong>312</strong></span><br>
										<!-- Extra small text -->
										<span class="text-xs text-muted">TWEETS</span>
									</div>
									<!-- Small padding, without horizontal padding -->
									<div class="stat-cell col-xs-4 padding-sm no-padding-hr">
										<!-- Big text -->
										<span class="text-bg"><strong>1000</strong></span><br>
										<!-- Extra small text -->
										<span class="text-xs text-muted">FOLLOWERS</span>
									</div>
									<!-- Small padding, without horizontal padding -->
									<div class="stat-cell col-xs-4 padding-sm no-padding-hr">
										<!-- Big text -->
										<span class="text-bg"><strong>523</strong></span><br>
										<!-- Extra small text -->
										<span class="text-xs text-muted">FOLLOWING</span>
									</div>
								</div> <!-- /.stat-counters -->
							</div> <!-- /.stat-row -->
						</div> <!-- /.stat-panel -->
					</div>
<!-- /8. $RETWEETS_GRAPH_STAT_PANEL -->

<!-- 9. $UNIQUE_VISITORS_STAT_PANEL ================================================================

					Unique visitors stat panel
-->
					<div class="col-sm-4 col-md-12">
						<!-- Javascript -->
						<script>
							init.push(function () {
								$("#stats-sparklines-2").pixelSparkline(
									[275,490,397,487,339,403,402,312,300,294,411,367,319,416,355,416,371,479,279,361,312,269,402,327,474,422,375,283,384,372], {
									type: 'bar',
									height: '36px',
									width: '100%',
									barSpacing: 2,
									zeroAxis: false,
									barColor: '#ffffff'
								});
							});
						</script>
						<!-- / Javascript -->

						<div class="stat-panel">
							<div class="stat-row">
								<!-- Warning background -->
								<div class="stat-cell bg-warning">
									<!-- Big text -->
									<span class="text-bg">11% more</span><br>
									<!-- Small text -->
									<span class="text-sm">Unique visitors today</span>
								</div>
							</div> <!-- /.stat-row -->
							<div class="stat-row">
								<!-- Warning background, small padding, without top padding, horizontally centered text -->
								<div class="stat-cell bg-warning padding-sm no-padding-t text-center">
									<div id="stats-sparklines-2" class="stats-sparklines" style="width: 100%"></div>
								</div>
							</div> <!-- /.stat-row -->
						</div> <!-- /.stat-panel -->
					</div>
				</div>
			</div>
		</div>
<!-- /9. $UNIQUE_VISITORS_STAT_PANEL -->

		<!-- Page wide horizontal line -->
		<hr class="no-grid-gutter-h grid-gutter-margin-b no-margin-t">

		<div class="row">

<!-- 10. $SUPPORT_TICKETS ==========================================================================

			Support tickets
-->
			<!-- Javascript -->
			<script>
				init.push(function () {
					$('#dashboard-support-tickets .panel-body > div').slimScroll({ height: 300, alwaysVisible: true, color: '#888',allowPageScroll: true });
				})
			</script>
			<!-- / Javascript -->

			<div class="col-md-6">
				<div class="panel panel-success widget-support-tickets" id="dashboard-support-tickets">
					<div class="panel-heading">
						<span class="panel-title"><i class="panel-title-icon fa fa-bullhorn"></i>Support Tickets</span>
						<div class="panel-heading-controls">
							<div class="panel-heading-text"><a href="#">15 new tickets</a></div>
						</div>
					</div> <!-- / .panel-heading -->
					<div class="panel-body tab-content-padding">
						<!-- Panel padding, without vertical padding -->
						<div class="panel-padding no-padding-vr">

							<div class="ticket">
								<span class="label label-success ticket-label">Completed</span>
								<a href="#" title="" class="ticket-title">Server unavaible<span>[#201798]</span></a>
								<span class="ticket-info">
									Opened by <a href="#" title="">Timothy Owens</a> today
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-warning ticket-label">Pending</span>
								<a href="#" title="" class="ticket-title">Mobile App Problem<span>[#201797]</span></a>
								<span class="ticket-info">
									Opened by <a href="#">Denise Steiner</a> 2 days ago
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-info ticket-label">In progress</span>
								<a href="#" title="" class="ticket-title">
									<i class="fa fa-warning text-danger"></i>PayPal issue<span>[#201796]</span>
								</a>
								<span class="ticket-info">
									Opened by <a href="#">Robert Jang</a> 3 days ago
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-danger ticket-label">Rejected</span>
								<a href="#" title="" class="ticket-title">IE8 problem<span>[#201795]</span></a>
								<span class="ticket-info">
									Opened by <a href="#">Robert Jang</a> 4 days ago
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-success ticket-label">Completed</span>
								<a href="#" title="" class="ticket-title">Server unavaible<span>[#201794]</span></a>
								<span class="ticket-info">
									Opened by <a href="#">Timothy Owens</a> 5 days ago
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-success ticket-label">Completed</span>
								<a href="#" title="" class="ticket-title">Server unavaible<span>[#201798]</span></a>
								<span class="ticket-info">
									Opened by <a href="#" title="">Timothy Owens</a> today
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-warning ticket-label">Pending</span>
								<a href="#" title="" class="ticket-title">Mobile App Problem<span>[#201797]</span></a>
								<span class="ticket-info">
									Opened by <a href="#">Denise Steiner</a> 2 days ago
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-info ticket-label">In progress</span>
								<a href="#" title="" class="ticket-title">
									<i class="fa fa-warning text-danger"></i>PayPal issue<span>[#201796]</span>
								</a>
								<span class="ticket-info">
									Opened by <a href="#">Robert Jang</a> 3 days ago
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-danger ticket-label">Rejected</span>
								<a href="#" title="" class="ticket-title">IE8 problem<span>[#201795]</span></a>
								<span class="ticket-info">
									Opened by <a href="#">Robert Jang</a> 4 days ago
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-success ticket-label">Completed</span>
								<a href="#" title="" class="ticket-title">Server unavaible<span>[#201794]</span></a>
								<span class="ticket-info">
									Opened by <a href="#">Timothy Owens</a> 5 days ago
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-success ticket-label">Completed</span>
								<a href="#" title="" class="ticket-title">Server unavaible<span>[#201798]</span></a>
								<span class="ticket-info">
									Opened by <a href="#" title="">Timothy Owens</a> today
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-warning ticket-label">Pending</span>
								<a href="#" title="" class="ticket-title">Mobile App Problem<span>[#201797]</span></a>
								<span class="ticket-info">
									Opened by <a href="#">Denise Steiner</a> 2 days ago
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-info ticket-label">In progress</span>
								<a href="#" title="" class="ticket-title">
									<i class="fa fa-warning text-danger"></i>PayPal issue<span>[#201796]</span>
								</a>
								<span class="ticket-info">
									Opened by <a href="#">Robert Jang</a> 3 days ago
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-danger ticket-label">Rejected</span>
								<a href="#" title="" class="ticket-title">IE8 problem<span>[#201795]</span></a>
								<span class="ticket-info">
									Opened by <a href="#">Robert Jang</a> 4 days ago
								</span>
							</div> <!-- / .ticket -->

							<div class="ticket">
								<span class="label label-success ticket-label">Completed</span>
								<a href="#" title="" class="ticket-title">Server unavaible<span>[#201794]</span></a>
								<span class="ticket-info">
									Opened by <a href="#">Timothy Owens</a> 5 days ago
								</span>
							</div> <!-- / .ticket -->
						</div>
					</div> <!-- / .panel-body -->
				</div> <!-- / .panel -->
			</div>
<!-- /10. $SUPPORT_TICKETS -->

<!-- 11. $RECENT_ACTIVITY ==========================================================================

			Recent activity
-->
			<!-- Javascript -->
			<script>
				init.push(function () {
					$('#dashboard-recent .panel-body > div').slimScroll({ height: 300, alwaysVisible: true, color: '#888',allowPageScroll: true });
				})
			</script>
			<!-- / Javascript -->

			<div class="col-md-6">


				<div class="panel panel-warning" id="dashboard-recent">
					<div class="panel-heading">
						<span class="panel-title"><i class="panel-title-icon fa fa-fire text-danger"></i>Recent</span>
						<ul class="nav nav-tabs nav-tabs-xs">
							<li class="active">
								<a href="#dashboard-recent-comments" data-toggle="tab">Comments</a>
							</li>
							<li>
								<a href="#dashboard-recent-threads" data-toggle="tab">Forum threads</a>
							</li>
						</ul>
					</div> <!-- / .panel-heading -->
					<div class="tab-content">

						<!-- Comments widget -->

						<!-- Without padding -->
						<div class="widget-comments panel-body tab-pane no-padding fade active in" id="dashboard-recent-comments">
							<!-- Panel padding, without vertical padding -->
							<div class="panel-padding no-padding-vr">
								<div class="comment">
									<img src="/assets/demo/avatars/5.jpg" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-by">
											<a href="#" title="">Denise Steiner</a> commented on <a href="#" title="">Article Name</a>
										</div>
										<div class="comment-text">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-actions">
											<a href="#"><i class="fa fa-pencil"></i>Edit</a>
											<a href="#"><i class="fa fa-times"></i>Remove</a>
											<span class="pull-right">2 hours ago</span>
										</div>
									</div> <!-- / .comment-body -->
								</div> <!-- / .comment -->

								<div class="comment">
									<img src="/assets/demo/avatars/3.jpg" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-by">
											<a href="#" title="">Michelle Bortz</a> commented on <a href="#" title="">Article Name</a>
										</div>
										<div class="comment-text">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-actions">
											<a href="#"><i class="fa fa-pencil"></i>Edit</a>
											<a href="#"><i class="fa fa-times"></i>Remove</a>
											<span class="pull-right">2 hours ago</span>
										</div>
									</div> <!-- / .comment-body -->
								</div> <!-- / .comment -->

								<div class="comment">
									<img src="/assets/demo/avatars/2.jpg" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-by">
											<a href="#" title="">Robert Jang</a> commented on <a href="#" title="">Article Name</a>
										</div>
										<div class="comment-text">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-actions">
											<a href="#"><i class="fa fa-pencil"></i>Edit</a>
											<a href="#"><i class="fa fa-times"></i>Remove</a>
											<span class="pull-right">2 hours ago</span>
										</div>
									</div> <!-- / .comment-body -->
								</div> <!-- / .comment -->

								<div class="comment">
									<img src="/assets/demo/avatars/4.jpg" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-by">
											<a href="#" title="">Timothy Owens</a> commented on <a href="#" title="">Article Name</a>
										</div>
										<div class="comment-text">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-actions">
											<a href="#"><i class="fa fa-pencil"></i>Edit</a>
											<a href="#"><i class="fa fa-times"></i>Remove</a>
											<span class="pull-right">2 hours ago</span>
										</div>
									</div> <!-- / .comment-body -->
								</div> <!-- / .comment -->

								<div class="comment">
									<img src="/assets/demo/avatars/5.jpg" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-by">
											<a href="#" title="">Denise Steiner</a> commented on <a href="#" title="">Article Name</a>
										</div>
										<div class="comment-text">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-actions">
											<a href="#"><i class="fa fa-pencil"></i>Edit</a>
											<a href="#"><i class="fa fa-times"></i>Remove</a>
											<span class="pull-right">2 hours ago</span>
										</div>
									</div> <!-- / .comment-body -->
								</div> <!-- / .comment -->

								<div class="comment">
									<img src="/assets/demo/avatars/3.jpg" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-by">
											<a href="#" title="">Michelle Bortz</a> commented on <a href="#" title="">Article Name</a>
										</div>
										<div class="comment-text">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-actions">
											<a href="#"><i class="fa fa-pencil"></i>Edit</a>
											<a href="#"><i class="fa fa-times"></i>Remove</a>
											<span class="pull-right">2 hours ago</span>
										</div>
									</div> <!-- / .comment-body -->
								</div> <!-- / .comment -->

								<div class="comment">
									<img src="/assets/demo/avatars/2.jpg" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-by">
											<a href="#" title="">Robert Jang</a> commented on <a href="#" title="">Article Name</a>
										</div>
										<div class="comment-text">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-actions">
											<a href="#"><i class="fa fa-pencil"></i>Edit</a>
											<a href="#"><i class="fa fa-times"></i>Remove</a>
											<span class="pull-right">2 hours ago</span>
										</div>
									</div> <!-- / .comment-body -->
								</div> <!-- / .comment -->

								<div class="comment">
									<img src="/assets/demo/avatars/4.jpg" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-by">
											<a href="#" title="">Timothy Owens</a> commented on <a href="#" title="">Article Name</a>
										</div>
										<div class="comment-text">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-actions">
											<a href="#"><i class="fa fa-pencil"></i>Edit</a>
											<a href="#"><i class="fa fa-times"></i>Remove</a>
											<span class="pull-right">2 hours ago</span>
										</div>
									</div> <!-- / .comment-body -->
								</div> <!-- / .comment -->

								<div class="comment">
									<img src="/assets/demo/avatars/2.jpg" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-by">
											<a href="#" title="">Robert Jang</a> commented on <a href="#" title="">Article Name</a>
										</div>
										<div class="comment-text">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-actions">
											<a href="#"><i class="fa fa-pencil"></i>Edit</a>
											<a href="#"><i class="fa fa-times"></i>Remove</a>
											<span class="pull-right">2 hours ago</span>
										</div>
									</div> <!-- / .comment-body -->
								</div> <!-- / .comment -->

								<div class="comment">
									<img src="/assets/demo/avatars/4.jpg" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-by">
											<a href="#" title="">Timothy Owens</a> commented on <a href="#" title="">Article Name</a>
										</div>
										<div class="comment-text">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-actions">
											<a href="#"><i class="fa fa-pencil"></i>Edit</a>
											<a href="#"><i class="fa fa-times"></i>Remove</a>
											<span class="pull-right">2 hours ago</span>
										</div>
									</div> <!-- / .comment-body -->
								</div> <!-- / .comment -->
							</div>
						</div> <!-- / .widget-comments -->

						<!-- Threads widget -->

						<!-- Without padding -->
						<div class="widget-threads panel-body tab-pane no-padding fade" id="dashboard-recent-threads">
							<div class="panel-padding no-padding-vr">
								<div class="thread">
									<img src="/assets/demo/avatars/2.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="#" title="">Robert Jang</a> in <a href="#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->

								<div class="thread">
									<img src="/assets/demo/avatars/3.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="#" title="">Michelle Bortz</a> in <a href="#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->

								<div class="thread">
									<img src="/assets/demo/avatars/4.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="#" title="">Timothy Owens</a> in <a href="#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->

								<div class="thread">
									<img src="/assets/demo/avatars/5.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="#" title="">Denise Steiner</a> in <a href="#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->

								<div class="thread">
									<img src="/assets/demo/avatars/2.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="#" title="">Robert Jang</a> in <a href="#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->

								<div class="thread">
									<img src="/assets/demo/avatars/2.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="#" title="">Robert Jang</a> in <a href="#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->

								<div class="thread">
									<img src="/assets/demo/avatars/3.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="#" title="">Michelle Bortz</a> in <a href="#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->

								<div class="thread">
									<img src="/assets/demo/avatars/4.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="#" title="">Timothy Owens</a> in <a href="#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->

								<div class="thread">
									<img src="/assets/demo/avatars/5.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="#" title="">Denise Steiner</a> in <a href="#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->

								<div class="thread">
									<img src="/assets/demo/avatars/2.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="#" title="">Robert Jang</a> in <a href="#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->
								<div class="thread">
									<img src="/assets/demo/avatars/2.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="#" title="">Robert Jang</a> in <a href="#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->

								<div class="thread">
									<img src="/assets/demo/avatars/3.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="#" title="">Michelle Bortz</a> in <a href="#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->

								<div class="thread">
									<img src="/assets/demo/avatars/4.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="#" title="">Timothy Owens</a> in <a href="#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->

								<div class="thread">
									<img src="/assets/demo/avatars/5.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="#" title="">Denise Steiner</a> in <a href="#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->

								<div class="thread">
									<img src="/assets/demo/avatars/2.jpg" alt="" class="thread-avatar">
									<div class="thread-body">
										<span class="thread-time">14h</span>
										<a href="#" class="thread-title">Lorem ipsum dolor sit amet</a>
										<div class="thread-info">started by <a href="#" title="">Robert Jang</a> in <a href="#" title="">Forum name</a></div>
									</div> <!-- / .thread-body -->
								</div> <!-- / .thread -->
							</div>
						</div> <!-- / .panel-body -->
					</div>
				</div> <!-- / .widget-threads -->
			</div>
<!-- /11. $RECENT_ACTIVITY -->
		</div>

		<!-- Page wide horizontal line -->
		<hr class="no-grid-gutter-h grid-gutter-margin-b no-margin-t">

		<div class="row">

<!-- 12. $NEW_USERS_TABLE ==========================================================================

			New users table
-->
			<div class="col-md-7">
				<div class="panel panel-dark panel-light-green">
					<div class="panel-heading">
						<span class="panel-title"><i class="panel-title-icon fa fa-smile-o"></i>New users</span>
						<div class="panel-heading-controls">
							<ul class="pagination pagination-xs">
								<li><a href="#">«</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">»</a></li>
							</ul> <!-- / .pagination -->
						</div> <!-- / .panel-heading-controls -->
					</div> <!-- / .panel-heading -->
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Username</th>
								<th>Full Name</th>
								<th>E-mail</th>
								<th></th>
							</tr>
						</thead>
						<tbody class="valign-middle">
							<tr>
								<td>1</td>
								<td>
									<img src="/assets/demo/avatars/2.jpg" alt="" style="width:26px;height:26px;" class="rounded">&nbsp;&nbsp;<a href="#" title="">@rjang</a>
								</td>
								<td>Robert Jang</td>
								<td>rjang@example.com</td>
								<td></td>
							</tr>
							<tr>
								<td>2</td>
								<td>
									<img src="/assets/demo/avatars/3.jpg" alt="" style="width:26px;height:26px;" class="rounded">&nbsp;&nbsp;<a href="#" title="">@mbortz</a>
								</td>
								<td>Michelle Bortz</td>
								<td>mbortz@example.com</td>
								<td></td>
							</tr>
							<tr>
								<td>3</td>
								<td>
									<img src="/assets/demo/avatars/4.jpg" alt="" style="width:26px;height:26px;" class="rounded">&nbsp;&nbsp;<a href="#" title="">@towens</a>
								</td>
								<td>Timothy Owens</td>
								<td>towens@example.com</td>
								<td></td>
							</tr>
							<tr>
								<td>4</td>
								<td>
									<img src="/assets/demo/avatars/5.jpg" alt="" style="width:26px;height:26px;" class="rounded">&nbsp;&nbsp;<a href="#" title="">@dsteiner</a>
								</td>
								<td>Denise Steiner</td>
								<td>dsteiner@example.com</td>
								<td></td>
							</tr>
							<tr>
								<td>5</td>
								<td>
									<img src="/assets/demo/avatars/2.jpg" alt="" style="width:26px;height:26px;" class="rounded">&nbsp;&nbsp;<a href="#" title="">@rjang</a>
								</td>
								<td>Robert Jang</td>
								<td>rjang@example.com</td>
								<td></td>
							</tr>
							<tr>
								<td>6</td>
								<td>
									<img src="/assets/demo/avatars/3.jpg" alt="" style="width:26px;height:26px;" class="rounded">&nbsp;&nbsp;<a href="#" title="">@mbortz</a>
								</td>
								<td>Michelle Bortz</td>
								<td>mbortz@example.com</td>
								<td></td>
							</tr>
							<tr>
								<td>7</td>
								<td>
									<img src="/assets/demo/avatars/4.jpg" alt="" style="width:26px;height:26px;" class="rounded">&nbsp;&nbsp;<a href="#" title="">@towens</a>
								</td>
								<td>Timothy Owens</td>
								<td>towens@example.com</td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div> <!-- / .panel -->
			</div>
<!-- /12. $NEW_USERS_TABLE -->

<!-- 13. $RECENT_TASKS =============================================================================

			Recent tasks
-->
			<div class="col-md-5">
				<!-- Javascript -->
				<script>
					init.push(function () {
						$('.widget-tasks .panel-body').pixelTasks().sortable({
							axis: "y",
							handle: ".task-sort-icon",
							stop: function( event, ui ) {
								// IE doesn't register the blur when sorting
								// so trigger focusout handlers to remove .ui-state-focus
								ui.item.children( ".task-sort-icon" ).triggerHandler( "focusout" );
							}
						});
						$('#clear-completed-tasks').click(function () {
							$('.widget-tasks .panel-body').pixelTasks('clearCompletedTasks');
						});
					});
				</script>
				<!-- / Javascript -->

				<div class="panel widget-tasks panel-dark-gray">
					<div class="panel-heading">
						<span class="panel-title"><i class="panel-title-icon fa fa-tasks"></i>Recent tasks</span>
						<div class="panel-heading-controls">
							<button class="btn btn-xs btn-primary btn-outline dark" id="clear-completed-tasks"><i class="fa fa-eraser text-success"></i> Clear completed tasks</button>
						</div>
					</div> <!-- / .panel-heading -->
					<!-- Without vertical padding -->
					<div class="panel-body no-padding-vr">

						<div class="task">
							<span class="label label-warning pull-right">High</span>
							<div class="fa fa-arrows-v task-sort-icon"></div>
							<div class="action-checkbox">
								<label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label>
							</div>
							<a href="#" class="task-title">A very important task<span>1 hour left</span></a>
						</div> <!-- / .task -->

						<div class="task completed">
							<span class="label label-warning pull-right">High</span>
							<div class="fa fa-arrows-v task-sort-icon"></div>
							<div class="action-checkbox">
								<label class="px-single"><input type="checkbox" name="" value="" class="px" checked="checked"><span class="lbl"></span></label>
							</div>
							<a href="#" class="task-title">A very important task<span>58 minutes left</span></a>
						</div> <!-- / .task -->

						<div class="task completed">
							<div class="fa fa-arrows-v task-sort-icon"></div>
							<div class="action-checkbox">
								<label class="px-single"><input type="checkbox" name="" value="" class="px" checked="checked"><span class="lbl"></span></label>
							</div>
							<a href="#" class="task-title">A regular task</a>
						</div> <!-- / .task -->

						<div class="task">
							<div class="fa fa-arrows-v task-sort-icon"></div>
							<div class="action-checkbox">
								<label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label>
							</div>
							<a href="#" class="task-title">A regular task</a>
						</div> <!-- / .task -->

						<div class="task">
							<div class="fa fa-arrows-v task-sort-icon"></div>
							<div class="action-checkbox">
								<label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label>
							</div>
							<a href="#" class="task-title">A regular task</a>
						</div> <!-- / .task -->

						<div class="task">
							<span class="label pull-right">Low</span>
							<div class="fa fa-arrows-v task-sort-icon"></div>
							<div class="action-checkbox">
								<label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label>
							</div>
							<a href="#" class="task-title">An unimportant task</a>
						</div> <!-- / .task -->

						<div class="task">
							<span class="label pull-right">Low</span>
							<div class="fa fa-arrows-v task-sort-icon"></div>
							<div class="action-checkbox">
								<label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label>
							</div>
							<a href="#" class="task-title">An unimportant task</a>
						</div> <!-- / .task -->

						<div class="task">
							<div class="fa fa-arrows-v task-sort-icon"></div>
							<div class="action-checkbox">
								<label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label>
							</div>
							<a href="#" class="task-title">A regular task</a>
						</div> <!-- / .task -->

						<div class="task">
							<span class="label pull-right">Low</span>
							<div class="fa fa-arrows-v task-sort-icon"></div>
							<div class="action-checkbox">
								<label class="px-single"><input type="checkbox" name="" value="" class="px"><span class="lbl"></span></label>
							</div>
							<a href="#" class="task-title">An unimportant task</a>
						</div> <!-- / .task -->
					</div> <!-- / .panel-body -->
				</div> <!-- / .panel -->
			</div>
<!-- /13. $RECENT_TASKS -->

		</div>
	</div> <!-- / #content-wrapper -->
	<div id="main-menu-bg"></div>
</div> <!-- / #main-wrapper -->

<!-- Get jQuery from Google CDN -->
<!--[if !IE]> -->
	<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js">'+"<"+"/script>"); </script>
<!-- <![endif]-->
<!--[if lte IE 9]>
	<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">'+"<"+"/script>"); </script>
<![endif]-->


<!-- Pixel Admin's js -->
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/pixel-admin.min.js"></script>

<script type="text/javascript">
	init.push(function () {
		// Javascript code here
	})
	window.PixelAdmin.start(init);
</script>

</body>
</html>