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
                <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtcompname" readonly>
              </div>
              <div class="form-group">
                <label for="disabledTextInput">Order Type</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtcompname" readonly>
              </div>
             <div class="form-group">
             <label for="disabledTextInput">Comments</label>
             <textarea class="form-control" rows="3" name="txtcomments" data-length="800" placeholder=""></textarea>
             </div>
             <div class="form-group">
                <label for="disabledTextInput">Git / Bitbucket Repo</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="https://" name="txtcompname">
              </div>
             <div class="form-group">
                <label for="disabledTextInput">Server Name</label>
                <select id="disabledSelect" class="form-control" name="txtordtype">
                 <option></option>
                 <option>Dynamic Web Site</option>
                 <option>Static Web Site</option>
                 </select>
              </div>
              <div class="form-group">
                <label for="disabledTextInput">Capacity Required</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="MB" name="txtcompname">
              </div>

              <div class="form-group">
                <label for="disabledTextInput">Ordre Completion Date</label>
                <input type="date" id="disabledTextInput" class="form-control" placeholder="" name="txtcompname">
              </div>

            </div>
            <div class="col-xs-6">
            <div class="form-group">
              <label for="disabledTextInput">Customer / Company Name</label>
              <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtcompname" readonly>
            </div>

             <div class="panel panel-info">
             <div class="panel-heading">
             <h4 class="panel-title">Project Milestone</h4>
             </div>
             <div class="panel-body">
             <div class="responsive-table">
             <table class="" width="100%" cellspacing="0">
             <tbody>
             <tr>
                 <td>Order Appraisal</td>
                 <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="checkbox" class="checkbox" value="progress-done progress-current">
                 <label><small>Progressing</small></label>
                 </div></td>
                 <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="checkbox" class="checkbox" value="progress-done">
                 <label><small>Completed</small> </label>
                 </div></td>

             </tr>
             <tr>
                 <td>UI Design</td>
                    <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="checkbox" class="checkbox" value="progress-done progress-current" >
                 <label><small>Progressing</small></label>
                 </div></td>
                 <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="checkbox" class="checkbox" value="progress-done">
                 <label><small>Completed</small> </label>
                 </div></td>

             </tr>
             <tr>
                 <td>Database Design</td>
             <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="checkbox" class="checkbox" value="progress-done progress-current">
                 <label><small>Progressing</small></label>
                 </div></td>
                 <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="checkbox" class="checkbox" value="progress-done">
                 <label><small>Completed</small> </label>
                 </div></td>

             </tr>
             <tr>
                 <td>Development</td>
                               <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="checkbox" class="checkbox" value="progress-done progress-current">
                 <label><small>Progressing</small></label>
                 </div></td>
                 <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="checkbox" class="checkbox" value="progress-done">
                 <label><small>Completed</small> </label>
                 </div></td>

             </tr>
             <tr>
                 <td>Testing</td>
                    <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="checkbox" class="checkbox" value="progress-done progress-current">
                 <label><small>Progressing</small></label>
                 </div></td>
                 <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="checkbox" class="checkbox" value="progress-done">
                 <label><small>Completed</small> </label>
                 </div></td>

             </tr>
             <tr>
                 <td>Completion</td>
                        <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="checkbox" class="checkbox" value="progress-done progress-current">
                 <label><small>Progressing</small></label>
                 </div></td>
                 <td>
                 <div class="form-group form-animate-checkbox">
                 <input type="checkbox" class="checkbox" value="progress-done">
                 <label><small>Completed</small> </label>
                 </div></td>

             </tr>
             </tbody>
             </table>
             </div>


             </div>
             </div>

          </div>
          <br />
          <div align="center">
          <button type="submit" class="btn btn-warning" name="btn_Update">Update Changes</button>&nbsp;&nbsp;
          <button type="reset" class="btn btn-info" name="btn_Update">Reset Fields</button>
          </div>
<!-- IT ENDS HERE -->

            </div>
        </div>
    </div>
