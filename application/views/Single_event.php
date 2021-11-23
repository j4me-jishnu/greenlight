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
  <input type="hidden" id="response" value="<?php echo $this->session->flashdata('response');?>" />

  <section class="section-padding our-product bg-light-theme">
    <div class="container-fluid custom-container">
      <section class="section-padding our-product bg-light-theme">
        <h3>Join on exclusive events</h3>

        <div class="container-fluid">
            <div class="">
              <div class="product-box mb-md-20">

                  <img src="<?php echo base_url(); ?>admin/assets/uploads/events/<?php echo $event_details->event_image; ?>" class="img-fluid full-width" alt="product-img">
                </div>
                <h4 class="text-center"><?php echo $event_details->event_name; ?></h4>
                <p><?php echo $event_details->event_desc; ?></p>
              </div>
          </div>
          <div class="col-lg-4">
            <img src="data:image/png;base64,<?php echo $event_details->event_qr; ?>" alt="Red dot" />
          </div>
      </section>
      <section>
          <div class="containter">
            <fieldset>
              <legend>Add your personal details</legend>
              <div class="container">
                <!-- <h2>Vertical (basic) form</h2> -->
                <form method="post" action="<?php echo base_url(); ?>Category/addUserToEvent">
                  <div class="form-group">
                    <input type="hidden" name="event_user_id" class="form-control" id="" placeholder="Enter E-mail" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                    <input type="hidden" name="event_id" class="form-control" id="" placeholder="Enter E-mail" name="event_id" value="<?php echo $event_details->event_id ?>">
                    <input type="email" name="event_user_email" class="form-control" id="" placeholder="Enter E-mail" name="event_user_email" required>
                  </div>

                  <div class="form-group">
                    <input type="text" name="event_user_mob" class="form-control" id="" placeholder="Enter mobile Number" name="event_user_mobile" required>
                  </div>
                  <button type="submit" class="btn btn-success">Join</button>
                </form>
              </div>
            </fieldset>
          </div>
      </section>
    </div>
  </section>
