<style>
.rating{
  display: flex;
  padding: 0;
  margin: 0;
}
.rating li{
  list-style: none;
}
.rating-item{
  border: 1px solid #fff;
  cursor: pointer;
  font-size: 2em;
  color: #FFA500;
}
.rating-item::before{
  content: "\2605";
}
.rating-item.active ~ .rating-item::before{
  content: "\2606";
}
.rating:hover .rating-item::before{
  content: "\2605";
}
.rating-item:hover ~ .rating-item::before{
  content: "\2606";
}
</style>

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
    <div class="container">
      <div class="section-bg-color">
        <div class="row">
          <div class="col-lg-8 center">
            <p>
            </p>
            <!-- Wishlist Table Area -->
            <form class="" action="<?php echo base_url(); ?>Productpage/addRatingandReview" method="post" enctype="multipart/form-data">
              <h3>Post your feedback here</h3>
              <table>
                <tr>
                  <td>Add Rating</td>
                  <td>
                    <div class="container" id="rating">
                      <ul class="rating">
                        <li class="rating-item active" data-rate="1"></li>
                        <li class="rating-item" data-rate="2"></li>
                        <li class="rating-item" data-rate="3"></li>
                        <li class="rating-item" data-rate="4"></li>
                        <li class="rating-item" data-rate="5"></li>
                      </ul>
                      <input type="hidden" id="rating_count" name="rating_count" value="">
                    </div>
                  </td>
                </tr>
                <input type="hidden" name="user_id" value="<?php echo $chat_data['records']->chat_from; ?>">
                <input type="hidden" name="seller_id" value="<?php echo $chat_data['records']->chat_to; ?>">
                <input type="hidden" name="product_id" value="<?php echo $chat_data['records']->chat_product_id; ?>">
                <tr>
                  <td>Add your comments</td>
                  <td> <textarea class="form-control" name="review_comments" rows="5" cols="40"></textarea> </td>
                </tr>
                <tr>
                  <td>Upload product image</td>
                  <td><input class="form-control" name="upload_image" type="file" id="formFile" required></td>
                </tr>
              </table><br><br>
              <td><button type="submit" class="btn btn-success" name="button">Add</button> </td>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- compare main wrapper end -->
  </section>
  <script>
  const container=document.querySelector('.rating');
  const items = container.querySelectorAll('.rating-item')
  container.onclick = e =>{
    const elClass = e.target.classList;
    if(!elClass.contains('active')){
      items.forEach(
        item=>item.classList.remove('active')
      );
      console.log(e.target.getAttribute('data-rate'));
      document.getElementById("rating_count").value = e.target.getAttribute('data-rate');
      elClass.add('active');
    }
  };
  </script>
