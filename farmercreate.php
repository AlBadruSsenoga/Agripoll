<?php
	include("applicationtop.php");
	include("applicationmenu.php");
	
?>
<script type="text/javascript">
    //jQuery.noConflict();
    
       $(document).ready(function(){
        
        });
    
    function saveContact(){
    
          var name = $("#name").val();
          var phone= $("#phone").val();
          var location= $("#location").val();
         var group= $("#group").val();

          if (name.length == 0 || phone.length == 0 || location.length == 0) {
            alert("Please correct the errors first!");
          }else{
            var myKeyVals = {"name" : name, "phone":phone, "location":location};

            $.ajax({
                type: 'POST',
                url: 'api/save_contacts.php',
                data: myKeyVals,
                dataType: 'json',
                success: function (msg) {
                //console.log(msg);
                    if(msg.success == 1){
                      clearFields();
                      successToastAuto("Contact Successfully Saved!");
                   }else{
                       errorToastAuto("Error Occured!");
                    }
                },
                error: function (request, status, error) {
                    errorToastAuto(error);
                }
            });
            clearFields();
        }
       }
       function clearFields(){
          $("#name").val("");
          $("#phone").val("");
          $("#location").val("");
          $("#group").val("");
       }
    </script>
    
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone">Phone <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="phone" name="phone" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="location">Location <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea maxlength="155" id="location" required="required" class="form-control col-md-7 col-xs-12" row="2" name="location"></textarea>
                        </div>
                      </div>
                     
                     <!-- failed to make this group section insert into db :: mahad-->
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="group">Group</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="group" name="group">
                            <option value ="CO">Choose option</option>
                            <option value = "Coffee_Farmers_jja">Coffee_Farmers_jja</option>
                            <option value = "Maize_Farmers_Iganga">Maize_Farmers_Iganga</option>
                            
                          </select>
                        </div>
                      </div>

                       

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <!-- <button class="btn btn-primary" type="button">Cancel</button> -->
                          <a class="btn btn-primary reset" onclick="clearFields()">Clear</a>
              <!-- <button class="btn btn-primary" type="reset">Reset</button> clearFields -->
                          <!-- <button type="submit" class="btn btn-success">Send</button> -->
                          <a class="btn btn-success submit" onclick="saveContact()">Save</a>
                        </div>
                      </div>

                    </form>
                    
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
    <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="vendors/skycons/skycons.js"></script>
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
    <!-- JQVMap -->
    <script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
	
  </body>
</html>
