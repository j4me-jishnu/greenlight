<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1 class="row">
      <!-- Company Management -->
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Offers</li>
    </ol>
  </section><br>

  <!-- Main content -->
  <section class="content">
    <input type="hidden" id="response" value="<?php echo $this->session->flashdata('response');?>" />
    <div class="box">
      <div class="box-header">
        <div class="row">
          <div class="col-sm-10">
            <h3>Event participants</h3>
          </div>

        </div>
        <div class="box-body">
          <table id="participants" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>SINO</th>
                <th>Participant Name</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
