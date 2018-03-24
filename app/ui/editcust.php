<?php include ("app/appdata/connection.php"); ?>
<div id="global">
    <div class="container-fluid cm-container-white">
        <h2 style="margin-top:0;">Welcome to ICEBOX Pro !</h2>
    </div>
    <div class="container-fluid">

        <div class="row cm-fix-height">
        </div>
        <div class="panel panel-default">

            <div class="panel-body">
              <div align="center">
              <form class="form-inline" method="post">
              <label for="disabledTextInput">Search Using</label>&nbsp;
              <select id="disabledSelect" class="form-control" name="txtordtype">
                <option></option>
                <option>Dynamic Web Site</option>
                <option>Static Web Site</option>
                <option>Mobile Application</option>
                <option>Web Application</option>
                <option>Windows Application</option>
                <option>Telco Solution</option>
              </select> &nbsp; &nbsp;
              <label for="disabledTextInput">Value</label> &nbsp;
              <input type="text" id="disabledTextInput" class="form-control" placeholder="Reference without the prefix 'N'" style="width: 300px;" name="txtsearch" value="<?php if(isset($_POST['txtsearch'])){ echo($_POST['txtsearch']); } ?>"> &nbsp;<button type="submit" class="btn btn-primary" name="btn_Search">Search</button>
               </form>
              </div>
              <br />
              <form action="" method="post">
            <div class="col-xs-6">
            <div class="form-group">
            <label for="disabledTextInput">First Name</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="Sunshine Holdings" name="txtcompname">
            </div>
            <div class="form-group">
            <label for="disabledTextInput">Designation</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="WA/02/49950" name="txtbusregno">
            </div>
            <div class="form-group">
            <label for="disabledTextInput">NIC No</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="XXXXXXXXXV" name="txtnicno">
            </div>
            <div class="form-group">
            <label for="disabledTextInput">Contact Number</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="John Smith" name="txtauthcontact">
            </div>
            </div>
            <div class="col-xs-6">
            <div class="form-group">
            <label for="disabledTextInput">Last Name</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="example@domain.com" name="txtemail">
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

            </div>
                   <hr/>
            <div align="center">
            <button type="submit" class="btn btn-warning" name="Btn_CreateSale">Update Information</button>
            <button type="reset" class="btn btn-info">Reset Fields</button>
            </div>
            </form>

            </div>
        </div>
    </div>
