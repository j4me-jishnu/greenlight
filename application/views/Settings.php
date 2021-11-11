<div id="sub-container">
  <div id="mainMenu">
    <i class="fas fa-chevron-left" style="color: #8e9090"></i> MAIN MENU
  </div>
  <hr />
  <div id="sub-container-content">
    <!-- <div class="sidenavContentHeader">Prime Video</div>
    <a href="#"><div class="sidenavContent">All Videos</div></a> -->
  </div>
</div>
</div>

<!--Not Sidenav-->
<div>

  <div class="main-sec"></div>
  <div class="breadcrumb-area">
    <div class="overlay overlay-bg"></div>
    <div class="container-fluid">
      <!-- <div class="breadcrumb-content">
        <h2 class="text-white"></h2>
        <ul>
          <li><a href="index.html">Home</a>
          </li>
          <li class="active">Inner Category</li>
        </ul>
      </div> -->
    </div>
  </div>
  <!-- breadcrumb -->
  <!--product Start-->

  <section class="section-padding our-product bg-light-theme">
    <input type="hidden" id="response" value="<?php echo $this->session->flashdata('response'); ?>" />
    <div class="container-fluid custom-container">
      <section class="section-padding our-product bg-light-theme">
        <h3>Change password</h3>
        <form method="post" enctype="multipart/form-data"  action="<?php echo base_url(); ?>Settings/changePassword">
          <div class="form-group">
            <input type="email" class="form-control" name="user_email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="exampleInputPassword1" name="current_password" placeholder="Current password">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="exampleInputPassword1" name="new_password" placeholder="New password">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="exampleInputPassword1" name="confirm_password" placeholder="Confirm new password">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </section>
    </div>
  </section>
