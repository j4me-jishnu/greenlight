
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
<div class="main-sec"></div>
<!-- <div class="breadcrumb-area">
<div class="overlay overlay-bg"></div>
<div class="container-fluid">
</div>
</div> -->

<!-- <section class="events-wrpap">
<div class="container">
<div class="col-md-12">
<div class="row">
<?php foreach ($event_details as $event) { ?>
<div class="col-lg-4">
<div class="product-box mb-md-20">
<a href="<?php echo base_url(); ?>Category/getSingleEvent/<?php echo $event->event_id; ?>">
<img src="<?php echo base_url(); ?>admin/assets/uploads/events/<?php echo $event->event_image; ?>" class="img-fluid full-width" alt="product-img">
<h4 class="text-center"><?php echo $event->event_name; ?></h4>
<p><?php echo $event->event_desc; ?></p>         </a>
</div>
</div>
<?php } ?>

</div>
</div>
</div>
</section> -->
<section class="slider-section">
  <div id="carousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
      <li data-target="#carousel" data-slide-to="2"></li>
    </ol> <!-- End of Indicators -->

    <!-- Carousel Content -->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active" style="background-image: url('https://cdn.pixabay.com/photo/2020/04/03/15/27/flower-meadow-4999277_960_720.jpg');">
        <div class="carousel-caption d-none d-md-block">
          <h2>New Events </h2>
          <p>Cool description for Amazon Forest.</p>
        </div>
      </div> <!-- End of Carousel Item -->

      <div class="carousel-item" style="background-image: url('https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_960_720.jpg');">
        <div class="carousel-caption d-none d-md-block">
          <h2>Awesome Experience</h2>
          <p>Awesome description for bridge.</p>
        </div>
      </div> <!-- End of Carousel Item -->

      <div class="carousel-item" style="background-image: url('https://cdn.pixabay.com/photo/2015/04/23/21/59/tree-736875_960_720.jpg');">
        <div class="carousel-caption d-none d-md-block">
          <h2>Campaigns </h2>
          <p>Beauty of Flowers & Grass.</p>
        </div>
      </div> <!-- End of Carousel Item -->
    </div> <!-- End of Carousel Content -->

    <!-- Previous & Next -->
    <a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only"></span>
    </a>
    <a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only"></span>
    </a>
  </div> <!-- End of Carousel -->
</section> <!-- End of Slider -->


<!-- breadcrumb -->


<section class="events-wrpap">
  <div class="container">
    <h3>Latest Offers</h3>
    <div class="col-md-12">
      <?php if(!empty($latest_offers)){ ?>
      <div class="row">
        <?php foreach ($latest_offers as $offer) { ?>
        <div class="col-lg-4">
          <div class="product-box mb-md-20">
            <!-- <a href="<?php echo base_url(); ?>Category/getSingleEvent/<?php echo $event->event_id; ?>"> -->
              <img src="<?php echo base_url(); ?>admin/assets/uploads/productlist/<?php echo $offer->pro_list_img; ?>" class="img-fluid full-width evnt-main-img-cmn" alt="product-img">
              <h4 class="text-center"><?php echo $offer->pro_list_name; ?></h4>
              <p><?php echo $offer->pro_list_details; ?></p>
            <!-- </a> -->
            </div>
          </div>
        <?php } ?>
        </div>
      <?php } else { ?>
        <div class="row">
            <div class="product-box mb-md-20">
              <h5>No special offer available for now!</h5>
            </div>
        </div>
      <?php } ?>
      </div>
    </section>

    <br>
  <section class="events-wrpap">
    <div class="container">
      <h3>Other offers</h3>
      <div class="col-md-12">
        <div class="row">
          <?php foreach ($offers as $offer) { ?>
          <div class="col-lg-4">
            <div class="product-box mb-md-20">
              <!-- <a href="<?php echo base_url(); ?>Category/getSingleEvent/<?php echo $event->event_id; ?>"> -->
                <img src="<?php echo base_url(); ?>admin/assets/uploads/offers/<?php echo $offer->off_img; ?>" class="img-fluid full-width evnt-main-img-cmn" alt="product-img">
                <h4 class="text-center"><?php echo $offer->off_name; ?></h4>
                <p><?php echo $offer->off_description; ?></p>
              <!-- </a> -->
              </div>
            </div>
          <?php } ?>
          </div>
        </div>
      </section>
