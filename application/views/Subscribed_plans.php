
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
      <!-- <div class="breadcrumb-content">
        <h2 class="text-white"></h2>
        <ul>
          <li><a href="index.html">Home</a>
          </li>
          <li class="active">Inner Category</li>
        </ul>
      </div> -->
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
              <h4>My Subscription Plans</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>

            <div class="col-xl-12 col-lg-12" >
              <div class="full-width">
                <div class="row">



                  <?php foreach ($subscribed_plans as $plan) { ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                      <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"><h4><?php
                          if($plan->pay_amt==299){ echo "Basic Plan"; }
                          elseif($plan->pay_amt==699){ echo "Premium Plan"; }
                          elseif($plan->pay_amt==999){ echo "Ultimate Plan"; }
                          ?></h4> <h6>-Active</h6> </li>
                          <li class="list-group-item">Plan Amount : <?php echo $plan->pay_amt;  ?></li>
                          <li class="list-group-item">Subscription date : <?php echo date('d-m-Y', strtotime($plan->pay_enter_datetime)); ?></li>
                          <li class="list-group-item"><b>Expiry date :
                            <?php
                            if($plan->pay_amt==299){ echo date('d-m-Y', strtotime($plan->pay_enter_datetime."+30 days")); }
                            elseif($plan->pay_amt==699){ echo date('d-m-Y', strtotime($plan->pay_enter_datetime."+60 days")); }
                            elseif($plan->pay_amt==999){ echo date('d-m-Y', strtotime($plan->pay_enter_datetime."+90 days")); }
                            ?>
                          </b></li>
                          <li class="list-group-item"><b>
                          <!-- <li class="list-group-item"><b>Remaining days : -->
                            <?php
                            if($plan->pay_amt==299){
                              $future = strtotime('4 July 2010');
                              $now = time();
                              /*Show remaining days here*/

                            }
                            elseif($plan->pay_amt==699){
                              $future=date('d-m-Y', strtotime($plan->pay_enter_datetime."+60 days"));
                              $timefromdb=date('d-m-Y', strtotime($plan->pay_enter_datetime));
                              /* Show Remaining days here*/
                            }
                            elseif($plan->pay_amt==999){
                              $future=date('d-m-Y', strtotime($plan->pay_enter_datetime."+90 days"));
                              $timefromdb=date('d-m-Y', strtotime($plan->pay_enter_datetime));
                              /* Show Remaining days here*/
                            }
                            ?>
                          </b></li>
                        </ul>
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
  <!--Product-end-->
