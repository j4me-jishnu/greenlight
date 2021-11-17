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
                  <select class="form-control" name="rating_count" >
                    <option value="5">5 Stars</option>
                    <option value="4">4 Stars</option>
                    <option value="3">3 Stars</option>
                    <option value="2">2 Stars</option>
                    <option value="1">1 Star</option>
                  </select>
                </td>
              </tr>

                <input type="hidden" name="user_id" value="<?php echo $chat_data['records']->chat_from; ?>">
                <input type="hidden" name="seller_id" value="<?php echo $chat_data['records']->chat_to; ?>">
                <input type="hidden" name="product_id" value="<?php echo $chat_data['records']->chat_product_id; ?>">
              <!-- Start from here -->
              <!-- <input type="hidden" name="seller_" value=""> -->
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
