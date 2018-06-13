<?php
	include("applicationtop.php");
	include("applicationmenu.php");
	
?>
				<!-- page content -->
				<div class="right_col" role="main">
					<div class="">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Market Prices <small> </small></h2>
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
                  <div class="x_content">
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Item</th>
                          <th>Category</th>
                          <th>Buyer / Seller</th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>Amount</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php
                      	//include('api/db_connect.php');

			//// connecting to db
			//$db = new DB_CONNECT();
			
			//$con = $db->connect();
			
            $result_data = DB::query("SELECT mp.date, mp.item, mpc.categoryName, mp.buyer_seller, mp.name, mp.phone, mp.address, CONCAT(mp.amount, ' ' , mp.measure) as amount FROM marketprices mp, marketproductcategory mpc WHERE mpc.id = mp.catergory and mp.status = 1");
			
			foreach($result_data as $marketprice)
			{
                      ?>
                    <tr>
                          <td><?php echo $marketprice['date']; ?></td>
                          <td><?php echo $marketprice['item']; ?></td>
                          <td><?php echo $marketprice['categoryName']; ?></td>
                          <td><?php echo $marketprice['buyer_seller']; ?></td>
                          <td><?php echo $marketprice['name']; ?></td>
                          <td><?php echo $marketprice['phone']; ?></td>
                          <td><?php echo $marketprice['address']; ?></td>
                          <td><?php echo $marketprice['amount']; ?></td>
                          
                        </tr>
                     <?php
                     	}
                     ?>   
                      </tbody>
                    </table>
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
		<!-- Datatables -->
		<script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
		<script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
		<script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
		<script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
		<script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
		<script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
		<script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
		<script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
		<script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
		<script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
		<script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
		<script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
		<script src="vendors/jszip/dist/jszip.min.js"></script>
		<script src="vendors/pdfmake/build/pdfmake.min.js"></script>
		<script src="vendors/pdfmake/build/vfs_fonts.js"></script>
		<!-- Custom Theme Scripts -->
		<script src="build/js/custom.min.js"></script>
	</body>
</html>