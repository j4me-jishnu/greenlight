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
        <h2 class="text-white">My Chat</h2>
        <ul>
          <li><a href="index.html">Home</a>
          </li>
          <li class="active">My Chat</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- breadcrumb -->
  <section class="compare-page-wrapper section-padding">
    <h2><?php echo $this->session->flashdata('response'); ?></h2> 
    <!-- compare main wrapper start -->
    <div class="container">
      <div class="section-bg-color">
        <div class="row">
          <div class="col-lg-12">
            <!-- Wishlist Table Area -->
            <div class="cart-table table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="pro-thumbnail">Sl.No</th>
                    <th class="pro-title">Chat To</th>
                    <th class="pro-title">Product</th>
                    <th class="pro-title">Date</th>
                    <th class="pro-price">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i=0;
                  foreach($mychat as $mchat){
                    $i=$i+1;
                    ?>
                    <tr>
                      <td class="pro-title"><?php echo $i; ?></td>
                      <td class="pro-price"><?php echo $mchat->first_name; ?></td>
                      <td class="pro-price"><img src="<?php echo base_url() ?>admin/assets/uploads/productlist/<?php echo $mchat->pro_list_img ?>" style="width:50px;height: 50px;"><br><?php echo $mchat->pro_list_name;?></td>
                      <td class="pro-price"><?php echo date('d-m-Y',strtotime($mchat->chat_date)); ?></td>
                      <!-- <td class="pro-price"><a href="<?php echo base_url() ?>chatmsg/<?php echo $mchat->chat_id;?>/<?php echo $mchat->chat_product_id;?>" style="font-size: 12px;"><i class="fa fa-edit"></i></a></td> -->
                      <td> <a href="<?php echo base_url(); ?>Productpage/addReviewandRatings/<?php echo $mchat->pro_list_id; ?>">Add Review</a> </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- compare main wrapper end -->
  </section>


  <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Add Review and Ratings</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="" action="<?php echo base_url(); ?>Productpage/addReviewandRatings" method="post" style="border-color: 0px;">
            <table>
              <tr>
                <td>Your rating</td>
                <td> <select class="form-group" name="rating_count">
                  <option value=5>5 star</option>
                  <option value=4>4 star</option>
                  <option value=3>3 star</option>
                  <option value=2>2 star</option>
                  <option value=1>1 star</option>
                </select> </td>
              </tr>
              <tr>
                <td></td>
                <td> <input id="temp" type="text" name="" value=""> </td>
              </tr>
              <tr>
                <td>Your comments</td>
                <td> <textarea name="description" value=""> </textarea></td>
              </tr>
            </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary"><u>Add review</u></button>
        </div>
      </form>
      </div>
    </div>
  </div> -->


  <script>
  function getStarsClicked(star_count){
    var star = star_count.getAttribute('data-id');
    document.getElementById("temp").innerHTML=star;
  }

</script>
