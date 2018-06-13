<?php
?>
				<div class="col-md-3 left_col menu_fixed">
					<div class="left_col scroll-view">
						<div class="navbar nav_title" style="border: 0;">
							<a href="index.html" class="site_title"><img src="images/favicon.png" alt="Agrineti" height="50" width="180"></a>
						</div>

						<div class="clearfix"></div>

						<br />

						<!-- sidebar menu -->
						<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
							<div class="menu_section">
								<h3>Navigation</h3>
								<ul class="nav side-menu">
									<li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard </a></li>
									<li><a href="marketprices.php"><i class="fa fa-money"></i> Market Prices </a></li>
									<li><a><i class="fa fa-comments-o"></i> Broadcasts <span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu">
											<li><a href="broadcastcalendar.php">Calendar</a></li>
											<li><a href="broadcastcreate.php">Create Broadcast</a></li>
											<li><a href="broadcastsent.php">Sent Messages</a></li>
											<li><a href="broadcastsurvey.php">Survey BroadCast</a></li>
										</ul>
									</li>
									<li><a><i class="fa fa-windows"></i> Farmers Registration<span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu">
											<li><a href="farmercreate.php">Create New Farmer</a></li>
											<li><a href="farmersearch.php">View Farmers</a></li>
											<li><a href="farmergroups.php">Create Groups</a></li>
											<li><a href="farmersupload.php">Upload Farmers</a></li>
										</ul>
									</li>
									<li><a href="weathermap.php"><i class="fa fa-bolt"></i> Weather Map </a></li>
									
									<li><a><i class="fa fa-table"></i> Field Data Surveys <span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu">
											<li><a href="fieldinfestationmap.php">Infestation Map</a></li>
											<li><a href="fieldscoutforms.php">Scout Forms</a></li>
											<li><a href="fieldinfestationprojections.php">Infestation Analytics & Projects</a></li>
											<li><a href="fieldusersurveys.php">Surveys Responses</a></li>
											<li><a href="fieldcropthresholddata.php">Crop Threshold Data</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
						<!-- /sidebar menu -->

						<!-- /menu footer buttons -->
						<div class="sidebar-footer hidden-small">
							<a data-toggle="tooltip" data-placement="top" title="Settings">
							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
							</a>
							<a data-toggle="tooltip" data-placement="top" title="FullScreen">
							<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
							</a>
							<a data-toggle="tooltip" data-placement="top" title="Lock">
							<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
							</a>
							<a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
							<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
							</a>
						</div>
						<!-- /menu footer buttons -->
					</div>
				</div>
				

				<!-- top navigation -->
				<div class="top_nav">
					<div class="nav_menu">
						<nav>
							<div class="nav toggle">
								<a id="menu_toggle"><i class="fa fa-bars"></i></a>
							</div>

							<ul class="nav navbar-nav navbar-right">
								<li class="">
									<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<?php echo $_SESSION["authenticateduserdisplayname"]; ?>
										<span class=" fa fa-angle-down"></span>
									</a>
									<ul class="dropdown-menu dropdown-usermenu pull-right">
										<li><a href="javascript:;">Change Password</a></li>
										<li><a href="javascript:;"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- /top navigation -->