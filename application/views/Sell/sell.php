<div id="sub-container">
  <div id="mainMenu">
    <i class="fas fa-chevron-left" style="color: #8e9090"></i> MAIN MENU
  </div>
  <hr />
</div>
</div>

<div>
  <div class="edit-prf-plant-wrap col-lg-12">
    <h2 class="text-center">Post your ad</h2>
    <div class="choos-cat-wrp col-md-8">
      <h5>CHOOSE A CATEGORY</h5>
      <!-- <nav class='animated bounceInDown'> -->
      <?php foreach($post_ad as $post_ads1){ ?>
        <div class="btn-group dropright">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><?php echo $post_ads1->prod_cat_name ?></button>
          <div class="dropdown-menu">
            <?php foreach($post_ad_sub as $post_ad_sub1){ ?>
              <?php if($post_ads1->pro_cat_id == $post_ad_sub1->pro_cat_id_fk){ ?>
                <a href="<?php echo base_url() ?>addSellProduct/<?php echo $post_ad_sub1->pro_sub_cat_id?>" class="dropdown-item"><?php echo $post_ad_sub1->pro_sub_cat_name ?></a>
              <?php }else{ ?>
              <?php }} ?>
            </div>
          </div>
        <?php } ?>
      </div>
      <!-- </nav> -->
    </div>
  </div>

  <div class="container">
    <div class="choos-cat-wrp col-md-8">
      <!-- <h5>ADD YOUR ITEM</h5> -->
      <fieldset>
        <legend><h2>Add your product</h2></legend>
        <div class="container">
          <!-- <div class="mb-3 row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="" placeholder="">
        </div>
      </div> -->
      <!-- <div class="mb-3 row">
      <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
    </div>
  </div> -->

  <div class="mb-3 row">
    <!-- <p><?php var_dump($categories); ?></p> -->
    <label for="inputPassword" class="col-sm-2 col-form-label">Category</label>
    <div class="col-sm-10">
      <select class="form-select"  name="category_select" id="category_select" onchange="getsubcat(this)">
        <option>Choose Category</option>
        <?php foreach ($categories as $category): ?>
          <option value="<?php echo $category->pro_cat_id; ?>"><?php echo $category->prod_cat_name; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
  </div>
  <div class="col-sm-10">
    <select class="" name="sub_cat" id="sub_cat">

    </select>
  </div>
</div>
</fieldset>
</div>
</div>
<div class="">
  <p></p>
</div>
<script>
function getsubcat(id){
  var cat_id=parseFloat(id.value);
  $.ajax({
    url: '<?php echo base_url(); ?>Sell/getSubCategories',
    type: 'post',
    data: {cat_id:cat_id},
    success: function(response){
      var result=JSON.parse(response);
      // console.log(result);
      result.forEach((item, index) => {
        console.log(item.pro_sub_cat_name);
        var x = document.getElementById("sub_cat");
        var option = document.createElement("option");
        option.text = item.pro_sub_cat_name;
        option.value = item.pro_sub_cat_id;
        x.add(option);
      });
    }
  });
}
</script>
