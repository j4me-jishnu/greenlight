<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
#social_target {
  padding: 10px;
  font-size: 20px;
  width: 40px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}
.comment {
  padding: 5px;
    overflow: scroll;
}

</style>
<div id="sub-container">
  <div id="mainMenu">
    <i class="fas fa-chevron-left" style="color: #8e9090"></i> MAIN MENU
  </div>
  <hr/>
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
          <li class="active">Various Kinds Of Palm Plants</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- breadcrumb -->
  <!--Shop-Details-->
  <section class="section-padding bg-light-theme">
    <div class="container">
      <div class="row">

        <div class="col-lg-5">
          <div class="gallery-top">
            <!-- <?php var_dump($product_page[0]->pro_list_img) ?> -->
            <img src="<?php echo base_url() ?>admin/assets/uploads/productlist/<?php echo $product_page[0]->pro_list_img; ?>" alt=""><br><br>
          </div>
        </div>
        <div class="col-lg-7">
          <?php foreach($product_page as $pages1): ?>
            <div class="shop-detail-contents mb-md-40 mt-md-40">
              <div class="shop-detail-content-wrapper">

                <h3 class="text-custom-black"><?php echo $pages1->pro_list_name ?></h3>
                <div id="star" class="">
                  <!-- Here comes the rating -->
                </div>
              </div><br>

              <!-- session userd id -->
              <input type="hidden" id="sess_user_id" value="<?php echo $this->session->userdata('user_id')  ?>">
              <input type="hidden" id="product_id" value="<?php echo $pages1->pro_list_id ?>">
              <!-- Rating -->
              <div class="price">
                <h4 class="text-custom-red price-tag">&#8377;<?php echo $pages1->pro_list_dicount_price ?> <span class="text-light-white fw-400 fs-14"><strike>&#8377;<?php echo $pages1->prod_list_price_original ?></strike></span></h4>
              </div>
              <div class="product-full-des mb-20">
                <p class="mb-0"><?php echo $pages1->pro_list_details ?></p>
              </div>
              <div class="availibity mt-20">
                <?php if($pages1->pro_list_stock >0){ ?>
                  <h6 class="text-custom-black fw-600">Availability: <span class="text-success ml-2">In Stock</span></h6>
                <?php }else{ ?>
                  <h6 class="text-custom-black fw-600">Availability: <span class="text-danger ml-2">No Stock</span></h6>
                <?php } ?>
              </div>
              <div class="quantity mb-xl-20">
                <!-- <h6 class="text-custom-black mb-0 mr-2 fw-600">Qty:</h6>
                <div class="product-qty-input">
                <button class="minus-btn" type="button" name="button"> <i class="fas fa-minus"></i>
              </button>
              <input type="text" class="form-control form-control-qty text-center" name="name" value="1">
              <button class="plus-btn" type="button" name="button"> <i class="fas fa-plus"></i>
            </button>
          </div> -->
          <a href="http://www.facebook.com/sharer.php?u=<?php echo $current_url; ?>" class="fa fa-facebook" style="background: #3B5998;color: white;" id="social_target" target="_blank"></a>
          <a href="http://twitter.com/share?url=http://<?php echo $current_url; ?>&text=Simple Share Buttons&hashtags=simplesharebuttons" class="fa fa-twitter" style="background: #55ACEE;color: white;" id="social_target" target="_blank"></a>
          <a href="https://api.whatsapp.com/send?text=<?php echo $current_url; ?>" class="fa fa-whatsapp" style="background: #25D366;color: white;" id="social_target" target="_blank"></a>
          <a href="https://telegram.me/share/url?url=<?php echo $current_url; ?>&text=Greenlight Product Link:" class="fa fa-telegram" style="background: #0088cc;color: white;" id="social_target" target="_blank"></a>
          <a href="mailto:?Subject=Simple Share Buttons&Body=I%20Found%20this%20Product%20Online%20and%20Here%20is%20the%20link <?php echo $current_url; ?>" class="fa fa-envelope" style="background: #55ACEE;color: white;" id="social_target" target="_blank"></a>
        </div>
        <div class="shop-bottom">
          <div class="shop-meta mt-20">
            <h6 class="text-custom-black mb-0 fw-600">Categories:</h6>
            <ul class="list-inline ml-2">
              <?php foreach($pro_cat as $category){ ?>
                <?php if($category->pro_cat_id == $pages1->pro_cat_id_fk){ ?>
                  <li class="list-inline-item"><a href="#"><?php echo $category->prod_cat_name; ?></a>
                  <?php } }?>
                </li>
                <li class="list-inline-item"><a href="#"><?php echo $pages1->pro_sub_cat_name ?></a>
                </li>
                <li class="list-inline-item"><a href="#">Deal</a>
                </li>
              </ul>
            </div>
            <div class="shop-meta mt-20">
              <h6 class="text-custom-black mb-0 fw-600">Tags:</h6>
              <ul class="list-inline ml-2">
                <?php foreach($pro_cat as $category){ ?>
                  <?php if($category->pro_cat_id == $pages1->pro_cat_id_fk){ ?>
                    <li class="list-inline-item"><a href="#"><?php echo $category->prod_cat_name; ?></a>
                    <?php }} ?>
                  </li>
                  <li class="list-inline-item"><a href="#"><?php echo $pages1->pro_sub_cat_name ?></a>
                  </li>
                  <li class="list-inline-item"><a href="#">New Arrivel</a>
                  </li>
                </ul>
              </div>
              <br><br>
              <a href="<?php echo base_url() ?>Productpage/getAllPostsOfSeller/<? echo $pages1->id; ?>" class="btn-solid btn-info ">View seller - <?php echo $pages1->first_name." ".$pages1->last_name; ?></a>
              <div class="product-btn mt-20 ">
                <a href="#" class="btn-solid with-line ml-2 btn-success" data-toggle="modal" data-target="#myModal">Chat with Seller</a>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>






      <!-- Comment and Description Section -Jishnu-->
      <ul class="nav nav-pills">
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#one">Description</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#two">Comments</a></li>
      </ul>
      <div class="tab-content container-fluid scroll">
        <div class="container tab-pane active" id="one"><br>
          <p><?php echo $product_details->pro_list_details; ?></p>
        </div>
        <div class="container tab-pane" id="two"><br>
          <form class="" action="<?php echo base_url(); ?>Comments/addProductComment" method="post">
            <div class="row">
              <div class="form-group col-md-8">
                <input type="hidden" class="" id="product_list_id" name="product_id" value="<?php echo $pro_list_id; ?>">
                <input type="text" class="form-control" name="post_comment" placeholder="Leave a comment..." required>
              </div>
              <div class="form-group col-md-2">
                <button type="submit" class="btn btn-primary active" name="submit">Post</button>
              </div>
            </div>
          </form>
          <div class="scroll">
            <div class="tab-content container-fluid scroll">
              <p>Previous comments...</p>
              <ul class="list-group">
                <div class="row">
                  <?php foreach ($single_item_comments as $comment) { ?>
                    <div class="form-group col-md-10">

                      <li class="list-group-item comment"><?php echo $comment->cmt_description;?></li>
                      <span> <b><p style="color:rgb(79, 79, 82); font-size:10px;" align="right"><?php
                      echo date("F d, y",strtotime($comment->created_at));

                       echo "&nbsp&nbsp&nbsp&nbsp&nbsp".$comment->first_name; ?></p></b> </span>
                    </div>
                  <?php } ?>
                </div>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Shop-Details End-->
<section class="section-padding shop-description">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-header-left">
          <h3 class="text-light-black header-title title">Related Items <span class="fs-14">

          </div>
        </div>
        <?php foreach($related_pro as $relateds){ ?>
          <?php foreach($product_page as $page7){?>
            <?php if($page7->pro_list_id != $relateds->pro_list_id){ ?>
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="product-box mb-md-20">
                  <div class="product-img">
                    <a href="<?php echo base_url() ?>singleProduct/<?php echo $relateds->pro_list_id ?>">
                      <img src="<?php echo base_url() ?>admin/assets/uploads/productlist/<?php echo $relateds->pro_list_img ?>" class="img-fluid full-width" alt="product-img">
                    </a>
                    <div class="product-badge">
                      <div class="product-label new"> <span>Deal</span>
                      </div>
                      <div class="product-label discount"> <span>15%</span>
                      </div>
                    </div>
                    <div class="button-group"> <a href="" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist" tabindex="-1"><i class="pe-7s-like"></i></a>
                      <a href="#" onclick="product_list_modal(<?php echo $relateds->pro_list_id ?>)" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick View"><i class="pe-7s-search"></i></span></a>
                    </div>

                  </div>
                  <div class="product-caption text-center"> <span class="product-category"><a href="#"><?php echo $relateds->pro_sub_cat_name ?></a></span>
                    <h6 class="product-title fw-500 mt-10"><a href="shop-details.html" class="text-light-black"><?php echo $relateds->pro_list_name ?></a></h6>
                    <div class="product-money mt-10"> <span class="text-dark-red fw-500">&#8377;<?php echo $relateds->pro_list_dicount_price ?></span>
                      <span class="text-price">&#8377; <?php echo $relateds->prod_list_price_original; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            <?php }}} ?>
          </div>
        </div>


        <!--modal window-->
        <?php //if($chats==0){ ?>
          <div id="myModal" class="modal fade" aria-labelledby="myModalLabel" aria-hidden="true" tabindex="-1" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">

                <!--<div class="modal-header">

                <h4 class="modal-title">Write a Message to <?php //echo $pages1->first_name ?></h4>
              </div>-->
              <form name="" method="post" action="<?php echo base_url() ?>chat_insert">

                <input type="hidden" id="product_id" name="product_id" value="<?php echo $pages1->pro_list_id ?>">
                <input type="hidden" name="from_id" value="<?php echo $this->session->userdata('user_id')  ?>">
                <input type="hidden" id="to"  name="to_id" value="<?php echo $pages1->user_id; ?>">

                <div class="modal-body" id="myModalBody">

                  <h4 class="modal-title" style="text-align: center;font-weight: bold;margin-top:40px;">Write a Message to <?php echo $pages1->first_name; ?></h4>
                  <br>

                  <div class="form-group">

                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="Wirte Your Message Here" style="border-top: none;border-right: none;border-left: none;background: #e6e5e3;"><?php echo set_value('message'); ?></textarea>
                  </div>

                  <div id="alert-msg"></div>
                </div>
                <div class="modal-footer">
                  <input class="btn btn-primary" id="submit" name="submit" type="submit" value="Send Message" />
                  <input class="btn btn-danger" type="button" data-dismiss="modal" value="Close" />
                </div>
                <?php echo form_close(); ?>
              </div>
            </form>
          </div>
        </div>
        <?php //}?>
        <!---end-->






        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      </section>
      <!-- Shop-Details-Description END -->
      <script type="text/javascript">
      $(document).ready(function(){
        var product_id=$('#product_list_id').val();
        // console.log(parseFloat(product_id));
        $.ajax({
          url:"<?php echo base_url();?>Productpage/getStarRating",
          type: 'POST',
          data:{
            product_id:product_id,
          },
          dataType: 'json',
          success:function(data){
            console.log(data);
            if(data.status){
              var a=document.getElementById("star");
              for(i=0;i<data.total_rating;i++){
                a.insertAdjacentHTML("beforebegin", "<span style='color:orange'><i class='fas fa-star'></i></span>");
              }
            }
            else{
              console.log(data);
              var a=document.getElementById("star");
              a.insertAdjacentHTML("beforebegin", "<span style='color:grey'><i class='fas fa-star'></i></i><i class='fas fa-star'></i></i><i class='fas fa-star'></i></i><i class='fas fa-star'></i></i><i class='fas fa-star'></i></i></span>");
            }

          }
        });
      });
      </script>
