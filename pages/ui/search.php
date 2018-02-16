
        <!-- start: Content -->
        <div id="content" class="article-v1">
            <div class="panel box-shadow-none content-header">

            </div>
            <div class="col-md-12">
              <div class="panel">
                <div class="pull-right article-v1-time">
                  </div>
                  <div class="panel-body">
                    <div class="col-md-12 text-center article-v1-title"><h1>Search Order Details</h1></div>
                    <br /><br /><br /><br /><br /><br />
                    <div class="col-md-12  article-v1-body">
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

                    <!-- end of Progress Bar -->
                  </div>
                  <div class="col-md-12 article-v1-footer">


               </div>
             </div>
             </div>
            </div>
        </div>
        <!-- end: content -->
