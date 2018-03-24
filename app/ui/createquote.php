<div id="global">
    <div class="container-fluid cm-container-white">
        <h2 style="margin-top:0;">Welcome to ICEBOX Pro !</h2>
    </div>
    <div class="container-fluid">

        <div class="row cm-fix-height">
        </div>
        <div class="panel panel-default">

            <div class="panel-body">
              <!-- IT Starts from Here -->
              <div align="center">
              <form class="form-inline" method="post">
              <input type="text" id="disabledTextInput" class="form-control" placeholder="Reference without the prefix 'N'" style="width: 300px;" name="txtsearch" value="<?php if(isset($_POST['txtsearch'])){ echo($_POST['txtsearch']); } ?>"> &nbsp;<button type="submit" class="btn btn-primary" name="btn_Search">Search</button>
               </form>
              </div>
              <br />

              <div class="col-xs-6">
              <div class="form-group">
                <label for="disabledTextInput">Order Reference</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Sunshine Holdings" name="txtcompname" readonly>
              </div>
            </div>
            <div class="col-xs-6">
            <div class="form-group">
              <label for="disabledTextInput">Customer / Company Name</label>
              <input type="text" id="disabledTextInput" class="form-control" placeholder="Sunshine Holdings" name="txtcompname" readonly>
            </div>
          </div>
          <div class="col-xs-12">
          <div class="form-group">
            <label for="disabledTextInput">Requirement</label>
            <textarea class="form-control" rows="3" name="txtcomments" data-length="800" placeholder="Please describe the customers requirement"></textarea>
              </div></div>
              <div class="col-xs-12">
              <div class="form-group">
                <label for="disabledTextInput">Price</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="3200.00" name="txtcompname">
                  </div>
                  <br />
                  <div align="center">
                  <button type="submit" class="btn btn-success" name="Btn_CreateSale">Generate Quote</button>
                  <button type="reset" class="btn btn-primary">Reset All Fields</button>
                  </div>

                </div>
<!-- IT ENDS HERE -->
            </div>
        </div>
    </div>
