<?php include('header.php');
include('./database/config.php');
if(isset($_GET['cust_id'])){
    $query="SELECT * FROM `customer_tbl` WHERE `cust_id`='".$_GET['cust_id']."'";
    $rec=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($rec)){
        $cust_id=$row['cust_id'];
        $customer_name=$row['customer_name'];
        $mobile_no=$row['mobile_no'];
        $al_mobile=$row['al_mobile'];
        $email=$row['email'];
        $pending_payment=$row['pending_payment'];
        $city=$row['city'];
        $village=$row['village'];
        $pincode=$row['pincode'];
        $state=$row['state'];
        $address=$row['address'];
    }
}

?>

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Edit Customer</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Sejal Acqua</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Edit Customer</a></li>
         </ol>
	   </div>
     </div>
    <!-- End Breadcrumb-->
	<form role="form" action="#" id="updateCustomer" method="POST" class="form-horizontal ">
     <div class="row">
        <div class="col-lg-6">
          <div class="card card-form">
            <div class="card-header text-uppercase">Customer Basic Details</div>
             <div class="card-body">
              
                 <div class="form-group">
                            <label> Customer Full Name *</label>
                            <input type="hidden" name="cust_id" id="cust_id" class="form-control" value="<?php echo $cust_id; ?>">
                            <input type="text" placeholder="Enter Customer Name" id="custname" name="custname" class="form-control" value="<?php echo $customer_name; ?>" required>
                        </div>
                        <div class="form-group row">
						<div class="col-md-6">
                            <label>Mobile No</label>
                            <input type="text" id="mobile" maxlength="10" name="mobile"  placeholder="Enter Mobile No" class="form-control dob" value="<?php echo $mobile_no; ?>" required>
                       <span id="errmsg"></span>
					   </div>
						<div class="col-md-6">
                            <label>Alternative No</label>
                            <input type="text" id="mobile2" maxlength="10" name="mobile2"  placeholder="Alternative Mobile No" class="form-control dob" value="<?php echo $al_mobile; ?>">
                        <span id="errmsg1"></span>
						</div>
						</div>
                        <div class="form-group row">
						<div class="col-md-6">
						<label>Email Id</label>
                            <input type="email"  placeholder="Customer Email Id" id="cemail" name="cemail" class="form-control" value="<?php echo $email; ?>">
						</div>
							<div class="col-md-6">
						<label>Pending Payment</label>
                            <input type="number" min="0" placeholder="Previous Pending Payment" id="pendingPayment" name="pendingPayment" value="<?php echo $pending_payment; ?>" class="form-control">
						</div>
						</div>
						</div>
					  </div>
					</div>
					   <div class="col-lg-6">
					  <div class="card card-form">
						<div class="card-header text-uppercase">Address Details</div>
						 <div class="card-body">
							 <div class="form-group">
										<label>Full Address</label>
										<input type="text" placeholder="Full Address" name="address" id="address" class="form-control" value="<?php echo $address; ?>">
									</div>
									<div class="form-group row">
										<div class="col-md-6">
										 <label>State</label>
										  <select class="form-control" id="state" name="state" required>
										   <option value="<?php echo $state; ?>" selected><?php echo $state; ?></option>
											<option value="Maharashtra">Maharashtra</option>
										</select>
										</div>
										<div class="col-md-6">
										<label>City</label>
										<select class="form-control" id="city" name="city" required>
											<option value="<?php echo $city; ?>" selected><?php echo $city; ?></option>
											<option value="Savda-Faizpur">Savda-Faizpur</option>
											<option value="Raver">Raver</option>
											<option value="Bhusawal">Bhusawal</option>
											<option value="Yawal">Yawal</option>
											<option value="Pal">Pal</option>
											<option value="Muktainagar">Muktainagar</option>
											<option value="Jalgaon">Jalgaon</option>
											<option value="Jamner">Jamner</option>
											<option value="Burhanpur">Burhanpur</option>
										</select>
										</div>
									</div>
									<div class="form-group row">
									<div class="col-md-6">
										<label>Town/Village</label>
										<input type="text" placeholder="Enter Town/Village" name="town" id="town" class="form-control" value="<?php echo $village; ?>">
									</div>
									<div class="col-md-6">
									<label>Pincode</label>
										<input type="number" placeholder="Enter Pincode" name="pincode" id="pincode" class="form-control" value="<?php echo $pincode; ?>">
									</div>
									</div>
						 
						</div>
					  </div>
					</div>
				  </div><!--End Row-->
					<button type="submit" name="save" id="saveCust" class="btn btn-secondary pull-right waves-effect waves-light m-1" >Update</button>
				 </form>
				 </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<?php include('footer.php') ?>
	<!--End footer-->
   
  </div><!--End wrapper-->
  <div class="modal fade" id="formsubmit">
                  <div class="modal-dialog">
                    <div class="modal-content animated flipInX">
                      <div class="modal-header">
                        <h5 class="modal-title"><i class="fa fa-user-o"></i>Customer Update</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
					  
                       <p>Customer Updation Done Successfully...<br>Thank You !!</span></p>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="javascript:window.history.back();" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                      </div>
                    </div>
                  </div>
                </div>
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/customfunction.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- waves effect js -->
  <script src="assets/js/waves.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>

  <!--Bootstrap Touchspin Js-->
    <script src="assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js"></script>
    <script src="assets/plugins/bootstrap-touchspin/js/bootstrap-touchspin-script.js"></script>

    <!--Select Plugins Js-->
    <script src="assets/plugins/select2/js/select2.min.js"></script>
    <!--Inputtags Js-->
    <script src="assets/plugins/inputtags/js/bootstrap-tagsinput.js"></script>

    <!--Bootstrap Datepicker Js-->
    <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script>
      $('#default-datepicker').datepicker({
        todayHighlight: true,
        autoclose: true
      });
      $('#autoclose-datepicker').datepicker({
        autoclose: true,
        todayHighlight: true
      });

      $('#inline-datepicker').datepicker({
         todayHighlight: true
      });

      $('#dateragne-picker .input-daterange').datepicker({
       });

    </script>
    <!--Multi Select Js-->
    <script src="assets/plugins/jquery-multi-select/jquery.multi-select.js"></script>
    <script src="assets/plugins/jquery-multi-select/jquery.quicksearch.js"></script>
<script>
$(document).ready(function(){
        $('#updateCustomer').on('submit', function (e) {
           $('#saveCust').attr("disabled", true);
			var custname    = $('#custname').val();
			var mobile    	= $('#mobile').val();
          e.preventDefault();
		if(custname && mobile){
          $.ajax({
            type: 'post',
            url: './database/update-customerdetails.php',
            data: $('#updateCustomer').serialize(),
            success: function (data) {
			  if(data==0){
				alert("This Equiry Already submited Please Check Again...!!!"); 
			  }
			  if(data==1){
              alert("Oops Something Is Went Wrong..");
			  }
			if(data==2){
			  $('#custname').val("");
			  $('#mobile').val("");
			  $('#mobile2').val("");
		      $('#cemail').val("");
		      $('#pendingPayment').val("");
		      $('#address').val("");
			  $('#state').val("");
		      $('#city').val("");
			  $('#town').val("");
		      $('#pincode').val("");
		      $('#saveCust').attr("disabled", false);
			  $('#cust_id').html(data);			  
			  $("#formsubmit").modal('show');
		    }
           }
         });
		}
		else{
			alert("Please Check All Details... There is Something Missing !!!");
			$('#saveCust').attr("disabled", false);
		}
		return false;
        });

      });

</script>	
	<script type='text/javascript'>//<![CDATA[,
		$(document).ready(function () {
		  //called when key is pressed in textbox
		  $("#mobile").keypress(function (e) {
			 //if the letter is not digit then display error and don't type anything
			 if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
				//display error message
				$("#errmsg").html("Enter Valid Digits Only").show().fadeOut(5000);
				$('#errmsg').css('color', 'red');
					   return false;
			}
		   });
		});
</script>
<script type='text/javascript'>//<![CDATA[,
		$(document).ready(function () {
		  //called when key is pressed in textbox
		  $("#mobile2").keypress(function (e) {
			 //if the letter is not digit then display error and don't type anything
			 if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
				//display error message
				$("#errmsg1").html("Enter Valid Digits Only").show().fadeOut(5000);
				$('#errmsg1').css('color', 'red');
					   return false;
			}
		   });
		});
</script>
<script>
$(document).ready(function(){

   $('#mobile').keyup(function() {
   $.ajax({
			type: 'POST',
			url: './database/mobilechecking.php',
			data: { searchname: $('#mobile').val() },
			success: function(data)
			{
				if(data==1){
				$('#errmsg').html("This Mobile No is Already Registered");
				$('#errmsg').css('color', 'green');
				$('#saveCust').attr("disabled", true);
				}
				if(data==2){
                $('#errmsg').html("");				
				$('#errmsg').css('color', 'red');
				$('#saveCust').attr("disabled", false);
				}
				if(data==3){
				$('#errmsg').html("Please Enter Mobile No");
				$('#errmsg').css('color', 'red');
				$('#saveCust').attr("disabled", true);
				}
			}
    });
});
});
</script>
	</body>
</html>
