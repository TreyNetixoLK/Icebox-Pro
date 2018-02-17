<style>
/** Colors **/
ol.progress-track {
  display: table;
  list-style-type: none;
  margin: 0;
  padding: 2em 1em;
  table-layout: fixed;
  width: 100%;
}
ol.progress-track li {
  display: table-cell;
  line-height: 3em;
  position: relative;
  text-align: center;
}
ol.progress-track li .icon-wrap {
  border-radius: 50%;
  top: -1.5em;
  color: #fff;
  display: block;
  height: 2.5em;
  margin: 0 auto -2em;
  left: 0;
  right: 0;
  position: absolute;
  width: 2.5em;
}
ol.progress-track li .icon-check-mark,
ol.progress-track li .icon-down-arrow {
  height: 25px;
  width: 15px;
  display: inline-block;
  fill: currentColor;
}
ol.progress-track li .progress-text {
  position: relative;
  top: 10px;
}
ol.progress-track li.progress-done {
  border-top: 7px solid #87ba51;
  transition: border-color 1s ease-in-out;
  -webkit-transition: border-color 1s ease-in-out;
  -moz-transition: border-color 1s ease-in-out;
}
ol.progress-track li.progress-done .icon-down-arrow {
  display: none;
}
ol.progress-track li.progress-done.progress-current .icon-wrap {
  background-color: #0070c0;
}
ol.progress-track li.progress-done.progress-current .icon-wrap .icon-check-mark {
  display: none;
}
ol.progress-track li.progress-done.progress-current .icon-wrap .icon-down-arrow {
  display: block;
}
ol.progress-track li.progress-done .icon-wrap {
  background-color: #4a6a28;
  border: 5px solid #87ba51;
}
ol.progress-track li.progress-todo {
  border-top: 7px solid #ddd;
  color: black;
}
ol.progress-track li.progress-todo .icon-wrap {
  background-color: #fff;
  border: 5px solid #ddd;
  border-radius: 50%;
  bottom: 1.5em;
  color: #fff;
  display: block;
  height: 2.5em;
  margin: 0 auto -2em;
  position: relative;
  width: 2.5em;
}
ol.progress-track li.progress-todo .icon-wrap .icon-check-mark,
ol.progress-track li.progress-todo .icon-wrap .icon-down-arrow {
  display: none;
}


</style>
        <!-- start: Content -->
        <div id="content" class="article-v1">
            <div class="panel box-shadow-none content-header">

            </div>
            <div class="col-md-12">
              <div class="panel">
                <div class="pull-right article-v1-time">
                  <em> Order Reference : #XXXX</em></div>
                  <div class="panel-body">
                    <div class="col-md-12 text-center article-v1-title"><h1>Project Name</h1></div>
                    <div class="col-md-12  article-v1-body">
                      <br /><br />
                    <!-- Progress Bar -->

                    <ol class="progress-track">
  <li class="progress-done">
    <center>
      <div class="icon-wrap">
        <svg class="icon-state icon-check-mark">
          <use xlink:href="#icon-check-mark"></use>
        </svg>

        <svg class="icon-state icon-down-arrow">
          <use xlink:href="#icon-down-arrow"></use>
        </svg>
      </div>
      <span class="progress-text">Appraisal</span>
    </center>
  </li>

  <li class="progress-done progress-current">
    <center>
      <div class="icon-wrap">
        <svg class="icon-state icon-check-mark">
          <use xlink:href="#icon-check-mark"></use>
        </svg>

        <svg class="icon-state icon-down-arrow">
          <use xlink:href="#icon-down-arrow"></use>
        </svg>
      </div>
      <span class="progress-text">UI Design</span>
    </center>
  </li>

  <li class="progress-todo">
    <center>
      <div class="icon-wrap">
        <svg class="icon-state icon-check-mark">
          <use xlink:href="#icon-check-mark"></use>
        </svg>

        <svg class="icon-state icon-down-arrow">
          <use xlink:href="#icon-down-arrow"></use>
        </svg>
      </div>
      <span class="progress-text">DB Design</span>
    </center>
  </li>

  <li class="progress-todo">
    <center>
      <div class="icon-wrap">
        <svg class="icon-state icon-check-mark">
          <use xlink:href="#icon-check-mark"></use>
        </svg>

        <svg class="icon-state icon-down-arrow">
          <use xlink:href="#icon-down-arrow"></use>
        </svg>
      </div>
      <span class="progress-text">Development</span>
    </center>
  </li>
  <li class="progress-todo">
    <center>
      <div class="icon-wrap">
        <svg class="icon-state icon-check-mark">
          <use xlink:href="#icon-check-mark"></use>
        </svg>

        <svg class="icon-state icon-down-arrow">
          <use xlink:href="#icon-down-arrow"></use>
        </svg>
      </div>
      <span class="progress-text">Testing</span>
    </center>
  </li>
  <li class="progress-todo">
    <center>
      <div class="icon-wrap">
        <svg class="icon-state icon-check-mark">
          <use xlink:href="#icon-check-mark"></use>
        </svg>

        <svg class="icon-state icon-down-arrow">
          <use xlink:href="#icon-down-arrow"></use>
        </svg>
      </div>
      <span class="progress-text">Completed</span>
    </center>
  </li>
</ol>

                    <!-- end of Progress Bar -->
                    <div class="col-md-12">
                      <!-- Order Information Section -->
                      <h3>Project Information</h3>
                      <br />

                      <!-- end of Order Information -->
                    </div>

                    <div class="col-md-12">
                      <!-- Order Notes Section -->
                      <h3>History</h3>
                      <br />
                      <div class="responsive-table">
<table class="table table-striped table-bordered" width="100%" cellspacing="0">
<thead>
 <tr>
   <th>Date and Time</th>
   <th>user</th>
   <th>Comments</th>
 </tr>
</thead>
<tbody>
 <tr>
   <td>System Architect</td>
   <td>Edinburgh</td>
   <td>61</td>
   </tr>
</tbody>
 </table>
</div>
                      <!-- end of Order Notes -->
                    </div>
                  </div>
                  <div class="col-md-12 article-v1-footer">


               </div>
             </div>
             </div>
            </div>
        </div>
        <!-- end: content -->
<script>

</script>
