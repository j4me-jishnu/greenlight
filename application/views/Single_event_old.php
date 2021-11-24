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












  <div class="breadcrumb-area">
    <div class="overlay overlay-bg"></div>
    <div class="container-fluid">
      <div class="breadcrumb-content">
        <h2 class="text-white">Events</h2>
        <ul>
          <li><a href="index.html">Home</a>
          </li>
          <li class="active">Events Details</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- breadcrumb -->
  <section class="events-wrpap-inner">
    <div class="container">
      <div class="col-md-12">
        <div class="row">
          <div class="col-lg-4">
            <div class="">
              <a href="#">
                <img src="assets/img/shop/product1.jpg" class="img-fluid full-width" alt="product-img">
              </div>
            </div>
            <div class="col-lg-12">
              <h4 class="">Event 1</h4>
              <p>It is a long established fact that a reader will be distracted by the readable content of a page whenLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>         </a>
              <div class="join-nw-wraper">
                <a href="#" class="join-nw-btn" data-toggle="modal" data-target="#exampleModal">Join Now</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Join Now</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-6">
              <div class="form-group">
                <label class="text-light-white fs-14">First name</label>
                <input type="text" name="#" class="form-control form-control-submit" placeholder="First Name" required="">
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-6">
              <div class="form-group">
                <label class="text-light-white fs-14">Last name</label>
                <input type="text" name="#" class="form-control form-control-submit" placeholder="Last Name" required="">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="text-light-white fs-14">Email</label>
                <input type="email" name="#" class="form-control form-control-submit" placeholder="Email I'd" required="">
              </div>

            </div>

            <div class="col-12">
              <div class="form-group">
                <label class="text-light-white fs-14">Phone Number</label>
                <input type="email" name="#" class="form-control form-control-submit" placeholder="Phone Number" required="">
              </div>

            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
