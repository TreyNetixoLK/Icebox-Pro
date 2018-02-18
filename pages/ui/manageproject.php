<div id="content">
 <div class="col-md-12" style="padding:20px;">
   <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Manage Project</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                        </div>
                                      </div>
                                      <div class="panel-body">

                                                       <div class="col-md-12">
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
                                                           <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtcompname">
                                                         </div>
                                                         <div class="form-group">
                                                           <label for="disabledTextInput">Order Type</label>
                                                           <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtcompname">
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
                                                             
                                                       </div>
                                                       <div class="col-xs-6">
                                                       <div class="form-group">
                                                         <label for="disabledTextInput">Customer / Company Name</label>
                                                         <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtcompname">
                                                       </div>
                                                        
                                                        <div class="panel panel-info">
                                                        <div class="panel-heading">
                                                        <h4 class="panel-title">Project Milestone</h4>
                                                        </div>
                                                        <div class="panel-body">
                                                        <div class="responsive-table">
                                                        <table class="table table-striped table-bordered" width="100%" cellspacing="0">
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
                                                        <!-- Add her e->
                                                           
                                                     </div>






                      <!-- IT ENDS HERE -->
                    </div>




                                      </div>
                                    </div>
 </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});
</script>