<div id="content">
 <div class="col-md-12" style="padding:20px;">
   <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Create New Order</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="icon-user icons icon text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body">
                                      
                                   <form action="" method="post">
    <div class="col-xs-6">
 	<div class="form-group">
      <label for="disabledSelect">Order Type</label>
      <select id="disabledSelect" class="form-control" name="txtordtype">
        <option></option>
        <option>Dynamic Web Site</option>
        <option>Static Web Site</option>
        <option>Mobile Application</option>
        <option>Solution Development</option>
      </select>
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Customer / Company Name</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Sunshine Holdings" name="txtcompname">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Business Registration No</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="WA/02/49950" name="txtbusregno">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">NIC No</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="XXXXXXXXXV" name="txtnicno">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Name of Authorised Contact</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="John Smith" name="txtauthcontact">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Contact No. of Authorised Contact</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Contact Number with country code for oversease clients" name="txtcontactno">
    </div>
    </div>
    <div class="col-xs-6">
     <div class="form-group">
      <label for="disabledTextInput">Email Address</label>
      <input type="email" id="disabledTextInput" class="form-control" placeholder="example@domain.com" name="txtemail">
    </div>
      <div class="form-group">
      <label for="disabledTextInput">Permanent Address</label>
       <input type="text" id="disabledTextInput" class="form-control" placeholder="Address Line 01" name="txtadd1">
    <div class="form-group">
    <label for="disabledTextInput"></label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Address Line 02" name="txtadd2">
    </div>
    <div class="form-group">
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Address Line 03" name="txtadd3">
    </div>
    <div class="form-group">
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Address Line 04" name="txtadd4">
    </div>
    </div>
      <div class="form-group">
      <label for="disabledTextInput">Requested Domain Name</label>
       <input type="text" id="disabledTextInput" class="form-control" placeholder="example.com" name="txtreqdomainname">
    </div>
    <div class="form-group">
      <label for="disabledSelect">Plan Name</label>
      <select class="form-control" name="plan">
        <option></option>
    	<?php 
		  
		  $sql4 =mysqli_query($connect,"select * from tbl_packages");
		  while($row=mysqli_fetch_array($sql4))
		  {
		?>
		<option><?php echo $row["pkg_name"] ?></option> 
		  <?php 
			  
		  }
		  
		  ?>
      </select>
    </div>

    </div>
    <div class="col-xs-12">
    <div class="form-group">
      <label for="disabledTextInput">Requirement</label>
      <textarea class="form-control" rows="3" name="txtcomments" data-length="800" placeholder="Please describe the customers requirement"></textarea>
        </div></div>
                                        <hr/>
    <div align="center">
    <button type="submit" class="btn btn-success" name="Btn_CreateSale">Create Order</button>
    <button type="reset" class="btn btn-primary">Reset All Fields</button>
    </div>
</form>
                                          
                                          
                                          
                                       
                                      </div>
                                    </div>
 </div>
</div>