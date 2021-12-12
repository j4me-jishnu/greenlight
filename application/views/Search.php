
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
          <li class="active">Search results</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- breadcrumb -->


<!--product Start-->
  <section class="section-padding our-product bg-light-theme">
    <div class="container-fluid custom-container">
      <div class="row">
        <div class="col-xl-3 col-lg-4">
          <div class="side-bar mb-md-40">
            <div class="main-box padding-20 trending-blog-cat mb-xl-20">
              <h4 class="text-light-black">Price</h4>
              <div class="delivery-slider" id="price_range">
                <input type="text" class="delivery-range-slider" value="" oninput="ranger()" id="myRange" />
              </div>
            </div>
            <div class="main-box padding-20 trending-blog-cat mb-xl-20">
              <h4 class="text-light-black">Categories</h4>
                <div class="filter">
                  <?php foreach($categories as $categories1) { ?>
                    <input type="checkbox" class="category54" onclick="cat('<?php echo $categories1->pro_sub_cat_id ?>')" id="catgeory_<?php echo $categories1->pro_sub_cat_id ?>" name="catgeory3" value="<?php echo $categories1->pro_sub_cat_id ?>">
                    <label for="catgeory3"><?php echo $categories1->pro_sub_cat_name ?></label><br>
                    <?php } ?>
                </div>
            </div>
          </div>
        </div>
        <div class="col-xl-9 col-lg-8">
          <div class="full-width">
            <div class="row">
              <div class="" id="filter_data">
                <input type="text" id="search" value="<?php echo $search; ?>">
              </div>
            </div>
          </div>
          <div class="container">
  <div class="row">
    <div class="col">
      Column
    </div>

          <div class="custom-pagination align-item-center">
            <!--<nav aria-label="Page navigation example" id="pagination_label">
            </nav>-->
            <div align="center" id="pagination_label">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <style>
#loading
{
  text-align:center;
  background: url('<?php echo base_url(); ?>asset/loader.gif') no-repeat center;
  height: 150px;
}

.pagination>li>a, .pagination>li>span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #65a15a;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
}

.pagination>li>a:focus, .pagination>li>a:hover, .pagination>li>span:focus, .pagination>li>span:hover {
    z-index: 2;
    color: #fff;
    background-color: #65a15a;
    border-color: #ddd;
}
</style>
  <!--Product-end-->
  <script>
    function ranger() {
    var range = document.getElementById('myRange');
    console.log(range.value);
    var range_val = range.value;
    var price_val = range_val.replace('$','');
    if(price_val == '10k')
      price_val = 1000;
    return price_val;
};
function cat(category) {
    // var category23 = document.getElementById('catgeory3').value;
    var categoryArray = [];
    $('input[name="catgeory3"]:checked').each(function() {
      categoryArray.push(this.value);
    });
    filter_data(1,categoryArray);
    return category;
};
$( document ).ready(function() {

  filter_data(1);






$(document).on("click", ".pagination li a", function(event){
    event.preventDefault();
    var page = $(this).data("ci-pagination-page");
    filter_data(page);
  });



// $('.category54').click(function(){
//         filter_data(1);
//     });


});
</script>
