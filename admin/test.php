
<div id="sub-container">
  <div id="mainMenu">
    <i class="fas fa-chevron-left" style="color: #8e9090"></i> MAIN MENU
  </div>
  <hr />
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
    <!-- compare main wrapper start -->
    <fieldset>
      <legend><h2>Your Subscription Detalis</h2></legend>
      <p>Current Plan  :</p>
      <p>Posts Available  :</p>

    </fieldset>
    <fieldset>
      <legend><h2>Add your product</h2></legend>
      <form class="" action="<?php echo base_url(); ?>Productpage/addNewPost" method="post" enctype="multipart/form-data">
        <div class="container">
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-10">
              <select class="form-group" aria-label="Default select example" id="category_select" onchange="getsub(this)" required>
                <option selected>Choose Category</option>
                <?php foreach ($category_list as $category) { ?>
                  <option value="<?php echo $category->pro_cat_id; ?>"><?php echo $category->prod_cat_name; ?></option>
                <?php } ?>
              </select>
              <input type="hidden" name="category_id" id="cat_id" value="">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Sub Category</label>
            <div class="col-sm-10">
              <select class="form-group" aria-label="Default select example" id="sub_cat" onchange="getsubcat(this)"required>
              <option disabled>Select Sub category</option>
            </select>
            <input type="hidden" name="sub_cat_id" id="sub_cat_id" value="">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Product Image</label>
          <div class="col-sm-10">
            <input type="file" name="post_image" value="Add Image">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Title</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="" placeholder="Name of your product" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
          <div class="col-sm-10">
            <textarea name="name" rows="8" cols="80" placeholder="Describe your product!" required></textarea>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Do you want to add offer?</label>
          <div class="col-sm-10">
            <input type="radio" id="html" name="is_offer" value=1 checked>Yes
            <input type="radio" id="html" name="is_offer" value=0>No
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Original price</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="og_price" placeholder="Original price" required>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Offer price</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="og_price" placeholder="Original price">
          </div>
        </div><br>
        <div class="mb-3 row">
          <div class="col-sm-10">
            <input type="submit" class="form-control btn btn-primary" name="submit" placeholder="" value="Add product">
          </div>
        </div>
      </div>
    </form>
  </fieldset>
</section>
<br>
<br>
<br>
<br>
<br>

<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<!-- Popper -->
<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- Range Slider -->
<script src="<?php echo base_url(); ?>assets/js/ion.rangeSlider.min.js"></script>
<!-- Swiper Slider -->
<script src="<?php echo base_url(); ?>assets/js/swiper.min.js"></script>
<!-- Nice Select -->
<script src="<?php echo base_url(); ?>assets/js/jquery.nice-select.min.js"></script>
<!-- magnific popup -->
<script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
<!-- Maps -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg"></script> -->
<!-- sticky sidebar -->
<script src="<?php echo base_url(); ?>assets/js/sticksy.js"></script>
<!-- Planteco Js -->
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

<script>
function getsub(data){
  var cat_id = data.value;
  document.getElementById('cat_id').value=cat_id;
  $.ajax({
    url:"<?php echo base_url();?>Productpage/getSubCategory",
    type: 'POST',
    data:{
      cat_id:cat_id,
    },
    dataType: 'json',
    success:function(data){
      var response = '<option disabled="disabled" value="0" selected="selected">Select</option>';
      data.forEach((number, index) => {
        response += '<option value='+number.pro_sub_cat_id+'>'+number.pro_sub_cat_name+'</option>';
      });
      $('#sub_cat').html(response);
      $('#sub_cat').focus();
    }
  });
}

function getsubcat(data){
  var sub_cat_id=data.value;
  document.getElementById('sub_cat_id').value=sub_cat_id;
}


</script>
