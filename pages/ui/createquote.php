<div id="content">
 <div class="col-md-12" style="padding:20px;">
   <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Generate Quotation</h4>
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
                                                           <input type="text" id="disabledTextInput" class="form-control" placeholder="Sunshine Holdings" name="txtcompname">
                                                         </div>
                                                       </div>
                                                       <div class="col-xs-6">
                                                       <div class="form-group">
                                                         <label for="disabledTextInput">Customer / Company Name</label>
                                                         <input type="text" id="disabledTextInput" class="form-control" placeholder="Sunshine Holdings" name="txtcompname">
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
 </div>
</div>
