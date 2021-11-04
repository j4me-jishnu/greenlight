
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
  <center>
    <div class="edit-prf-plant-wrap col-lg-12">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">


          <form name="" method="post" action="<?php echo base_url() ?>chat_insert">

            <input type="hidden" id="product_id" name="product_id" value="<?php foreach($chat_msgs as $chat){echo $chat->pro_list_id;} ?>">
            <input type="hidden" name="from_id" value="<?php echo $this->session->userdata('user_id')  ?>">
            <input type="hidden" id="to"  name="to_id" value="<?php foreach($chat_msgs as $chat){echo $chat->chat_from;} ?>">


            <div class='panel panel-default' style="border:1px #ccc solid;">
              <div class="panel-title">
                <h3 class="panel-heading text-center">Chat With <?php foreach($chat_msgs as $chat){echo $chat->first_name;} ?></h3><hr>
              </div>
              <div class="panel-body">

                <?php foreach($chat2 as $chatmsg2){ ?>
                  <div class="form-group" style="float: left;"><div class="col-md-12"><textarea class="form-control" id="message" name="message" rows="3" placeholder="Wirte Your Message Here" style="border-top: none;border-right: none;border-left: none;background: #e6e5e3;" disabled=""><?php  echo $chatmsg2->chat_from_msg; ?></textarea><br><br></div></div>
                <?php } ?>



                <br><br><br>
                <?php foreach($chat_msg as $chatmsg){ ?>
                  <div class="form-group" style="float: left;"><div class="col-md-12"><textarea class="form-control" id="message" name="message" rows="3" placeholder="Wirte Your Message Here" style="border-top: none;border-right: none;border-left: none;background: #e6e5e3;" disabled=""><?php echo $chatmsg->chat_from_msg; ?></textarea><br></div></div>
                <?php } ?>

                <div class="form-group">
                  <div class="col-md-12" style="">
                    <textarea class="form-control" id="message" name="message" rows="3" placeholder="Wirte Your Message Here" style="border-top: none;border-right: none;border-left: none;background: #e6e5e3;"><?php echo set_value('message'); ?></textarea>
                  </div>
                </div>
                <br>  <br>  <br>  <br>  <br>  <br>   <br>  <br>   <br>  <br>
                <div class="col-md-12 text-right" style="padding: 15px;border-top: 1px solid #ccc;">
                  <input class="btn btn-primary" id="submit" name="submit" type="submit" value="Send Message" />
                </div>
                <br>
              </div>
            </div>
          </div>
        </form>

      </div>

    </div>
  </center>
