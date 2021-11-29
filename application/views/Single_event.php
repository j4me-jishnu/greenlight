<style media="screen">
.fa {
  padding: 20px;
  font-size: 50px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}

.fa-android {
  background: #a4c639;
  color: white;
}

.fa-dribbble {
  background: #ea4c89;
  color: white;
}

.fa-vimeo {
  background: #45bbff;
  color: white;
}

.fa-tumblr {
  background: #2c4762;
  color: white;
}

.fa-vine {
  background: #00b489;
  color: white;
}

.fa-foursquare {
  background: #45bbff;
  color: white;
}

.fa-stumbleupon {
  background: #eb4924;
  color: white;
}

.fa-flickr {
  background: #f40083;
  color: white;
}

.fa-yahoo {
  background: #430297;
  color: white;
}

.fa-soundcloud {
  background: #ff5500;
  color: white;
}

.fa-reddit {
  background: #ff5700;
  color: white;
}

.fa-rss {
  background: #ff6600;
  color: white;
}

</style>
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
  <!-- <div class="breadcrumb-area">
  <div class="overlay overlay-bg"></div>
  <div class="container-fluid">
</div>
</div> -->
<!-- breadcrumb -->
<!--product Start-->
<input type="hidden" id="response" value="<?php echo $this->session->flashdata('response');?>" />


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

<section class="events-wrpap-inner">
  <div class="container">
    <div class="col-md-12">
      <div class="row">
        <div class="col-lg-4">
          <div class="">
            <a href="#">
              <img src="<?php echo base_url(); ?>admin/assets/uploads/events/<?php echo $event_details->event_image; ?>" class="img-fluid full-width" style="width:360px; float: left; margin-right:10px;" alt="product-img">

            </div>

          </div>
          <div class="col-lg-12">
            <h4 class=""><?php echo $event_details->event_name; ?></h4>
            <p><?php echo $event_details->event_desc; ?>. It is a long established fact that a reader will be distracted by the readable content of a page whenLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>         </a>

              <!-- This QR Code need to show while sharing the image -->
              <!-- <img src="data:image/png;base64,<?php echo $event_details->event_qr; ?>" alt="QR Code" /> -->

                  <section class="section-padding our-product bg-light-theme">
                    <h3>Share to friends</h3>
                    <a href="https://www.facebook.com/search/top?q=greenlight" class="fa fa-facebook"></a>
                    <a href="https://twitter.com/" class="fa fa-twitter"></a>
                    <a href="https://mail.google.com/" class="fa fa-google"></a>
                    <a href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
                    <a href="https://www.youtube.com/results?search_query=greenlight" class="fa fa-youtube"></a>
                    <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                  </section>

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
  <form class="" action="<?php echo base_url(); ?>Category/addUserToEvent" method="post">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Join Now !</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-6">
              <div class="form-group">
                <label class="text-light-white fs-14">First name</label>
                <input type="text" name="first_name" class="form-control form-control-submit" placeholder="First Name" required="">
              </div>

              <input type="hidden" name="event_user_id" class="form-control" id="" placeholder="Enter E-mail" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
              <input type="hidden" name="event_id" class="form-control" id="" placeholder="Enter E-mail" name="event_id" value="<?php echo $event_details->event_id ?>">

            </div>
            <div class="col-lg-6 col-md-12 col-sm-6">
              <div class="form-group">
                <label class="text-light-white fs-14">Last name</label>
                <input type="text" name="last_name" class="form-control form-control-submit" placeholder="Last Name" required="">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label class="text-light-white fs-14">Email</label>
                <input type="email" name="event_user_email" class="form-control form-control-submit" placeholder="Email I'd" required="">
              </div>

            </div>

            <div class="col-12">
              <div class="form-group">
                <label class="text-light-white fs-14">Phone Number</label>
                <input type="text" name="event_user_mob" class="form-control form-control-submit" placeholder="Phone Number" required="">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Join</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
