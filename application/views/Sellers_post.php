<div id="sub-container">
  <div id="mainMenu">
    <i class="fas fa-chevron-left" style="color: #8e9090"></i> MAIN MENU
  </div>
  <hr />
</div>
</div>
<style>
.select-cat-wrp .dropdown-select .dd-searchbox
{
  display: none;
}
.select-cat-wrp .dropdown-select
{
  height: 48px;
}
.select-cat-wrp .form-group
{
  margin-bottom:20px;
  margin-top: 30px;
}
</style>
<div class="edit-prf-plant-wrap col-lg-12">
  <h2 class="text-center">Your Subscription Detalis</h2>
    <div class="form-group">
      <b><p class="text-center">Current Plan  :</p></b>
      <b><p class="text-center">Posts Available  :</p></b>
    </div>
</div>
<div class="edit-prf-plant-wrap col-lg-12">

  <h2 class="text-center">Add product details</h2>

  <div class="select-cat-wrp">
    <form class="" action="<?php echo base_url(); ?>Productpage/addNewPost" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleFormControlSelect1">Category</label>
        <select class="form-control" aria-label="Default select example" id="category_select" onchange="getsub(this)" required>
          <option selected>Choose Category</option>
          <?php foreach ($category_list as $category) { ?>
            <option value="<?php echo $category->pro_cat_id; ?>"><?php echo $category->prod_cat_name; ?></option>
          <?php } ?>
        </select>

        <input type="hidden" name="category_id" id="cat_id" value="">
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect2">Sub Category</label>
        <select class="form-group" aria-label="Default select example" id="sub_cat" onchange="getsubcat(this)"required>
        <option>Select Sub category</option>
        </select>
        <!-- Change this value -->
        <input type="hidden" name="sub_cat_id" id="sub_cat_id" value="1">
      </div>

      <div class="form-group">
        <label for="exampleFormControlFile1">Product Image</label>
        <input type="file" class="form-control-file" id="" name="post_image" value="Add Image">
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">Tiltle</label>
        <input type="text" name="product_title" class="form-control" id="" placeholder="Name of your product" required>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea class="form-control" id="" name="product_description" placeholder="Describe your product!" rows="3" required></textarea>
      </div>
      <div class="col-md-12">
        <label >Do you want to add offer?</label>
        <br>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="" name="is_offer" class="" value="1">Yes
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="" name="is_offer" class="" value="0">No
        </div>
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">Orginal Price</label>
        <input type="text" class="form-control"name="og_price" placeholder="Original price" required>
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">Offer Price</label>
        <input type="text" class="form-control" name="offer_price" placeholder="Offer price">
      </div>
      <button class="post-now-btn">Post Now</button>
    </form>
  </div>
</div>
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
      var response = '<option value="0" selected="selected">Select</option>';
      data.forEach((number, index) => {
        response += '<option value='+number.pro_sub_cat_id+'>'+number.pro_sub_cat_name+' disabled=false</option>';
      });
      console.log(response);
      $('#sub_cat').html(response);
      $('#sub_cat').focus();
      $("#sub_cat" ).prop( "disabled", false );
    }
  });
}

function getsubcat(data){
  var sub_cat_id=data.value;
  document.getElementById('sub_cat_id').value=sub_cat_id;
}


</script>
