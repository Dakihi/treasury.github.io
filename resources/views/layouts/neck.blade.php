<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="well container-fluid">
        <div class="pull-left" style="left: 50px">
        <!--  <b>DDO Code:{{ Session::get('ddo_code') }}&nbsp;&nbsp;&nbsp;Treasury Code:{{Session::get('trea_code')}}</b>-->
        </div>
         <div class="pull-right" style="left: 300px">
          <b>Date:{{Carbon\Carbon::now()->toFormattedDateString()}}</b>
         </div>
      </div>
    </section>