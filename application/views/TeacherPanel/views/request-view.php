

  <div class="app-content content container-fluid">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
          <div class="breadcrumb-wrapper col-xs-12">
          </div>
        </div>
      </div>
      <div class="content-body">
        <!-- Table head options start -->
        <div class="row">
          <div class="col-xs-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Course Requests</h4>
                <a class="heading-elements-toggle">
                  <i class="icon-ellipsis font-medium-3"></i>
                </a>
              </div>
            </div>
          

                <div class="single-commemts">
                  <?php 
                      $check=0;
                      foreach($requests as $request){
                        if($bids!=false){
                          foreach($bids as $bid){
                            if($bid['req_id']==$request['req_id']){
                              $check=1;
                            } } 
                        }
                        if($check==0){
                    ?>
                    <div class="col-md-2 user">
                      <a href="#">
                        <img src="../app-assets/images/user.png" alt="" />
                      </a>
                    </div>
                    

                    <div class="col-md-10 user-comment">
                        <a href="#">
                          <?php if($request['stype']==0){?>
                            <h4><?php echo $request['sfname']; ?></h4>
                          <?php } else {?>
                            <h4><?php echo $request['tfname']; ?></h4>
                          <?php }?>
                        </a>
                        <p><?php echo $request['des']; ?></p>
                        <h5>Subject</h5>
                        <p><?php echo $request['c_name']; ?></p>
                        <h5>Place</h5>
                        <p><?php echo $request['place']; ?></p>
                        <a class="comme" href="#">On <?php echo $request['date']; ?></a>
                        <div class="user-bwn">
                          <a href="<?php echo base_url().'TeacherPanel/main/submitBid/'.$request['req_id']; ?>">Submit Proposal</a>
                        </div>
                    </div>

                    <div class="clearfix"> </div>
                    <?php } else{echo "<h5>No Requests</h5>"; } } ?>

                  </div>                              
          </div>
        </div>
        <!-- Table head options end -->
      </div>
    </div>
  </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


