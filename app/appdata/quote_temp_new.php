<?php include("connection.php"); ?>
<?php
// Turn off all error reporting
error_reporting(0);
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/styles.css">
   <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
   <link rel="stylesheet" href="assets/css/morris.css">
       <!-- favicons
 ================================================== -->
 <link rel="icon" type="image/png" href="imgs/favic.png">

   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>

</head>

<body>
   <div class="col-md-1"></div>
   <div align="center">
   <div class="row">
   <div class="col-md-10">

   <!-- Starting Template Page 01 from Here -->
   <font face="Verdana">
    <table border="0" width="700px" height="1400px">
       <tr>
        <td height="100px"><img src="imgs/logo3.png" style="width:195px; height:100px;"></td>
       </tr>
       <tr>
        <td align='right'><br /><b>Date : <?php echo date('Y-m-d');?></b></td>
      </tr>
       <tr>
        <td><?php echo $request['scontact']?></b>
       </td>
       </tr>
       <tr>
        <td><?php echo $request['com_name']?></td>
      </tr>
      <tr>
        <td><?php echo $request['address1']?></td>
      </tr>
      <tr>
        <td><?php echo $request['address3']?></td>
      </tr>
      <tr>
        <td><?php echo $request['address4']?></td>
      </tr>
      <tr>
        <td><?php echo $request['country']?></td>
       </tr>
       <tr>
         <td><br /><br />Dear Sir / Madam,</td>
        </tr>
        <tr>
          <td align='center'><h3><u>Quotation for&nbsp;<?php echo $request['type']; ?>&nbsp;Project - #N<?php echo $request['ord_ref']?></u></h3></td>
         </tr>
         <tr>
           <td><br />This quotation is with regards to your recent request for the subjected solution by Netixo.</td>
          </tr>
          <tr>
            <td><br /><br />
              <div class="alert alert-default" role="alert">
<table class="table table-condensed"  width="630px">

       <tr>
           <td><b>Description</b></td>
           <td align="center" width="100px"><b>Price [LKR]</b></td>
       </tr>
       <tr>
           <td><i><?php echo $request['description'] ?></i></td>
           <td align="center" valign="middle"><b style="color:red"><?php echo $request['price'] ?>.00</b><br /></td>
       </tr>

       </table>
</div>

            </td>
           </tr>
            <tr>
              <td><h3 align="left"><b>Terms and Conditions</b></h3>
                      <ul align="justify">
                      <li>The final output of the product might be different from the initial prototype design based on the customers’ requirements.</li><br /><br />
                      <li>If the client is happy to proceed with the proposal, a down payment of 35% from the full amount need to be paid in order to commence the work.</li><br /><br />
                      <li>Domain and Hosting plans will be only valid for a period of 01 year after purchase and will need to be renewed annually. </li><br /><br />
                      <li>Once the designing of the project is completed the Account Manager will send a link via email to preview the designed solution before been hosted.</li><br /><br />
                      <li>The full payment needs to be settled before the solution is delivered. </li>
                      <br />
                      </ul>

                      </td>
             </tr>
             <tr>
               <td><br />If you are happy to proceed with this proposal. Please forward this quotation with your approval to <a href="mailto:sales@netixo.lk">sales@netixo.lk</a> within 10 working days.</td>
              </tr>
              <tr>
                <td><br /></td></font>
               </tr>
              <tr>
                <td align='center' style="color:#B0ADAC; font-family:Ubuntu;"><i>This is a system generated document. Therefore signature not required.</i></td>
               </tr>
    </table>
   <!-- Ending Template Page 01from Here -->
   </div>
   <div class="col-md-1"></div>
   </div>
   </div>
</body>
</html>
