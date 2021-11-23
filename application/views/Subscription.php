
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
      <div class="breadcrumb-content">
        <h2 class="text-white">Packages</h2>

      </div>
    </div>
  </div>
  <!-- breadcrumb -->

  <?php if(!empty($subscription)){
    foreach ($subscription as $sub) {
      ?>
      <div class="wrapper pack-green">
        <div class="table <?php echo $sub->subp_name ?> col-md-4">
          <div class="price-section">
            <div class="price-area">
              <div class="inner-area">
                <span class="text">
                </span>
                <span class="" style="font-size:30px;">&#8377;<?php echo $sub->subp_price ?></span>
              </div>
            </div>
          </div>
          <div class="package-name">
          </div>
          <div class="features">
            <li>
              <span class="list-name">No Of Adds</span>
              <span class="icon check"><i class="fas fa-check-circle"></i></span>
            </li>
            <li>
              <span class="list-name">100% Responsive Design</span>
              <span class="icon check"><i class="fas fa-check-circle"></i></span>
            </li>
            <li>
              <span class="list-name">Credit Remove Permission</span>
              <span class="icon cross"><i class="far fa-times-circle"></i></span>
            </li>
            <li>
              <span class="list-name">Lifetime Template Updates</span>
              <span class="icon cross"><i class="far fa-times-circle"></i></span>
            </li>
            <div class="btn"><button><a href="<?php echo base_url() ?>Payment/<?php echo $subscription[0]->subp_id ?>" style="color:#ffd861;">Purchase</a></button></div>
          </div>
        </div>
      <?php }} else{?>
        <div class="container-lg">
          <h3>Currently there is no subscription plan available - Greenleafy</h3>
        </div>
<?php } ?>
</div>
