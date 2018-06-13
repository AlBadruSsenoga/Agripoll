<?php
	include("applicationtop.php");
	include("applicationmenu.php");
?>
				<!-- page content -->
				<div class="right_col" role="main">
					<div class="">
						<div class="row top_tiles">
							<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="tile-stats">
									<div class="icon"><i class="fa fa-bug"></i></div>
									<div class="count">012</div>
									<h3>Infestation Types</h3>
								</div>
							</div>
							<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="tile-stats">
									<div class="icon"><i class="fa fa-comments-o"></i></div>
									<div class="count">179</div>
									<h3>Broadcasted Alerts</h3>
								</div>
							</div>
							<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="tile-stats">
									<div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
									<div class="count">102</div>
									<h3>Breakout Sites</h3>
								</div>
							</div>
							<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="tile-stats">
									<div class="icon"><i class="fa fa-check-square-o"></i></div>
									<div class="count">139</div>
									<h3>Farmer Sign ups</h3>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<div class="x_panel">
									<div class="x_title">
										<h2>Broadcast Alerts Summary <small>Weekly progress</small></h2>
										
										<div class="clearfix"></div>
									</div>
									<div class="x_content">
										<div class="col-md-9 col-sm-12 col-xs-12">
											<div class="demo-container" style="height:280px">
												<div id="chart_plot_02" class="demo-placeholder"></div>
											</div>
											<div class="tiles">
												<div class="col-md-4 tile">
													<span>Pest Reports</span>
													<span class="sparkline11 graph" style="height: 160px;">
														<canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
													</span>
												</div>
												<div class="col-md-4 tile">
													<span>Market Trends</span>
													<span class="sparkline22 graph" style="height: 160px;">
														<canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
													</span>
												</div>
												<div class="col-md-4 tile">
													<span>Registrations</span>
													<span class="sparkline11 graph" style="height: 160px;">
														<canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-12 col-xs-12">
											<div>
												<div class="x_title">
													<h2>Farmer Queries</h2>
													<ul class="nav navbar-right panel_toolbox">
														<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
														</li>
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
															<ul class="dropdown-menu" role="menu">
																<li><a href="#">Settings 1</a>
																</li>
																<li><a href="#">Settings 2</a>
																</li>
															</ul>
														</li>
														<li><a class="close-link"><i class="fa fa-close"></i></a>
														</li>
													</ul>
													<div class="clearfix"></div>
												</div>
												<ul class="list-unstyled top_profiles scroll-view">
													<li class="media event">
														<a class="pull-left border-aero profile_thumb">
															<i class="fa fa-user aero"></i>
														</a>
														<div class="media-body">
															<a class="title" href="#">Ms. Mary Akot</a>
															<p><strong>Category: </strong> Weeds </p>
															<p> <small>What will be...</small></p>
														</div>
													</li>
													<li class="media event">
														<a class="pull-left border-green profile_thumb">
															<i class="fa fa-user green"></i>
														</a>
														<div class="media-body">
															<a class="title" href="#">Mr. Isaac Leti</a>
															<p><strong>Category: </strong> Seasons </p>
															<p> <small>Should I plant...</small></p>
														</div>
													</li>
													<li class="media event">
														<a class="pull-left border-blue profile_thumb">
															<i class="fa fa-user blue"></i>
														</a>
														<div class="media-body">
															<a class="title" href="#">Mr. Nyanzi Dodovico</a>
															<p><strong>Category: </strong> Market </p>
															<p> <small>The Cost of Beans At...</small></p>
														</div>
													</li>
													<li class="media event">
														<a class="pull-left border-aero profile_thumb">
															<i class="fa fa-user aero"></i>
														</a>
														<div class="media-body">
															<a class="title" href="#">Ms. Masitula Nuwagaba</a>
															<p><strong>Category: </strong> Market </p>
															<p> <small>My Ref12009 still pending...</small></p>
														</div>
													</li>
													<li class="media event">
														<a class="pull-left border-green profile_thumb">
															<i class="fa fa-user green"></i>
														</a>
														<div class="media-body">
															<a class="title" href="#">Mrs. Wangoda Jane</a>
															<p><strong>Category: </strong> Herbicides </p>
															<p> <small>Is fungicide praying...</small></p>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /page content -->

			<?php
				include("applicationfooter.php");
			?>
			</div>
		</div>

		<!-- jQuery -->
		<script src="vendors/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap -->
		<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- FastClick -->
		<script src="vendors/fastclick/lib/fastclick.js"></script>
		<!-- NProgress -->
		<script src="vendors/nprogress/nprogress.js"></script>
		<!-- jQuery custom content scroller -->
		<script src="vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
		<!-- Chart.js -->
		<script src="vendors/Chart.js/dist/Chart.min.js"></script>
		<!-- jQuery Sparklines -->
		<script src="vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
		<!-- Flot -->
		<script src="vendors/Flot/jquery.flot.js"></script>
		<script src="vendors/Flot/jquery.flot.pie.js"></script>
		<script src="vendors/Flot/jquery.flot.time.js"></script>
		<script src="vendors/Flot/jquery.flot.stack.js"></script>
		<script src="vendors/Flot/jquery.flot.resize.js"></script>
		<!-- Flot plugins -->
		<script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
		<script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
		<script src="vendors/flot.curvedlines/curvedLines.js"></script>
		<!-- DateJS -->
		<script src="vendors/DateJS/build/date.js"></script>
		<!-- bootstrap-daterangepicker -->
		<script src="vendors/moment/min/moment.min.js"></script>
		<script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
		<!-- Custom Theme Scripts -->
		<script src="build/js/custom.min.js"></script>
	</body>
</html>