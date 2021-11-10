<?php  $seller_id=$all_seller_posts[0]->user_id; ?>


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
        <h2 class="text-white"></h2>
        <ul>
          <li><a href="index.html">Home</a>
          </li>
          <li class="active">Inner Category</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="">
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off">Toggle button</button>
    <button type="buttona" class="btn btn-primary active" data-bs-toggle="button" autocomplete="off" aria-pressed="true">Active toggle button</button>
    <button type="button" class="btn btn-primary" disabled data-bs-toggle="button" autocomplete="off">Disabled toggle button</button> -->
  </div>
  <br><br>
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="container">
          <img src="<?php echo base_url(); ?>admin/assets/uploads/user_profile/<?php echo $user_image_header[0]->user_pimage_name; ?> " style="height:300px; width:300px; border: 1px solid #000; border-radius: 50%;"  alt="...">
        </div>
      </div>

      <div class="col-sm" >
        <br><br><br>
        <h2><?php echo $seller_details->first_name; ?></h2>

        <!-- <h5>Following   :  <b><span id="following_count"></span></b></h5> -->
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <h5>Followers </h5>
            </div>
            <div class="col-sm">
              <input type="hidden" id="count_follower" name="" value="">
              <p id="followers_count"></p>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-sm">
                <h5>Following </h5>
              </div>
              <div class="col-sm">
                <input type="hidden" id="count_following" name="" value="">
                <p id="following_count"> </p>

              </div>
            </div>
          </div>
        </div>

        <input type="hidden" id="seller_id" name="" value="<?php echo $seller_id; ?>">
        <input type="hidden" id="user_id" name="" value="<?php  echo $user_image_header[0]->user_id_fk ?>">

        <button type="button" class="btn btn-outline-success" id="follow">Follow</button>
        <button type="button" class="btn btn-outline-success" id="unfollow">Unfollow</button>
      </div>
    </div>

    <!-- breadcrumb -->
    <!--product Start-->
    <section class="section-padding our-product bg-light-theme">
      <div class="container-fluid custom-container">
        <section class="section-padding our-product bg-light-theme">
          <div class="container-fluid custom-container">
            <div class="row">
              <div class="offrs-wrp">
                <h4>All Ads created by  this seller</h4>
              </div>

              <div class="col-xl-12 col-lg-12" >
                <div class="full-width">
                  <div class="row">

                    <?php foreach ($all_seller_posts as $post) { ?>
                      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="product-box mb-md-20">
                          <div class="product-img">
                            <a href="#">
                              <img src="<?php echo base_url(); ?>admin/assets/uploads/productlist/<?php echo $post->pro_list_img; ?>">
                            </a>
                            <div class="product-badge">
                              <div class="product-label new"> <span>New</span>
                              </div>
                              <div class="product-label discount"> <span>15%</span>
                              </div>
                            </div>
                            <div class="button-group"> <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist" tabindex="-1"><i class="pe-7s-like"></i></a>
                              <a href="compare.html" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to Compare" tabindex="-1"><i class="pe-7s-refresh-2"></i></a><a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><i class="pe-7s-search"></i></span></a>
                            </div>

                          </div>
                          <div class="product-caption text-center"> <span class="product-category"><a href="#"></a></span>
                            <h6 class="product-title fw-500 mt-10"><a href="shop-details.html" class="text-light-black"><?php echo $post->pro_list_name; ?></a></h6>
                            <div class="product-money mt-10"> <span class="text-dark-red fw-500">&#8377;<?php echo $post->pro_list_dicount_price; ?></span>
                              <span class="text-price">&#8377; <?php echo $post->prod_list_price_original; ?></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php } ?>



                  </div>

                </div>
                <div class="custom-pagination align-item-center">
                  <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true">«</span>
                          <span class="sr-only">Previous</span>
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a>
                      </li>
                      <li class="page-item active"><a class="page-link" href="#">2</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">3</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true">»</span>
                          <span class="sr-only">Next</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>

              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
    <script>
    $(document).ready(function(){
      $('#follow').hide();
      $('#unfollow').hide();
      // var status = parseFloat(status.getAttribute('data-id'));
      var user_id = parseFloat($('#user_id').val());
      var seller_id = parseFloat($('#seller_id').val());

      $.ajax({
        url:"<?php echo base_url();?>Productpage/getTotalFollowers",
        type: 'POST',
        data:{
          seller_id:seller_id,
        },
        dataType: 'json',
        success:function(data){
          document.getElementById("followers_count").innerHTML=data.followers_count;
          document.getElementById("count_follower").value = data.followers_count;
        }
      });
      $.ajax({
        url:"<?php echo base_url();?>Productpage/getTotalFollowing",
        type: 'POST',
        data:{
          seller_id:seller_id,
        },
        dataType: 'json',
        success:function(data){
          document.getElementById("following_count").innerHTML=data.following_count;
          document.getElementById("count_following").value = data.following_count;
        }
      });

      $.ajax({
        url:"<?php echo base_url();?>Productpage/checkFollowerStatus",
        type: 'POST',
        data:{
          user_id:user_id,
          seller_id:seller_id,
        },
        dataType: 'json',
        success:function(data){
          if(data.status==true){
            $('#unfollow').show();
          }else{
            $('#follow').show();
          }
        }
      });
    });
    $("#unfollow" ).click(function() {
      var user_id = parseFloat($('#user_id').val());
      var seller_id = parseFloat($('#seller_id').val());
      $.ajax({
        url:"<?php echo base_url();?>Productpage/unfollow",
        type: 'POST',
        data:{
          user_id:user_id,
          seller_id:seller_id,
        },
        dataType: 'json',
        success:function(data){
          console.log(data);
          if(data.status){
            // var less_count=parseFloat($('#count_follower').val())-1;
            document.getElementById("followers_count").innerHTML=data.count;
            // console.log(less_count);
            $("#unfollow").hide();
            $("#follow").show();
          }
          else{
            alert(data.message);
          }
        }
      });
    });

    $("#follow" ).click(function() {
      var user_id = parseFloat($('#user_id').val());
      var seller_id = parseFloat($('#seller_id').val());
      $.ajax({
        url:"<?php echo base_url();?>Productpage/follow",
        type: 'POST',
        data:{
          user_id:user_id,
          seller_id:seller_id,
        },
        dataType: 'json',
        success:function(data){
          console.log(data);
          if(data.status){
            // var add_count=parseFloat($('#count_following').val())+1;
            document.getElementById("followers_count").innerHTML=data.count;
            $("#follow").hide();
            $("#unfollow").show();
          }
          else{
            alert(data.message);
          }
        }
      });
    });

    </script>

    <!--Product-end-->
