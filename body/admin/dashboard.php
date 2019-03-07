<div class="container custom-me">
    <h4 class="dash-header"><B>Dashboard</B></h4>
<div class="row add-me">

<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo  $dashboard->fetch_total_post();?></h3>

              <p>Total Posts</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <b class="small-box-footer">Total Post <i class="fa fa-commenting-o" aria-hidden="true"></i> </b>
          </div>
        </div>


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $dashboard->fetch_total_comments();?></h3>

              <p>Total Comments</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <b class="small-box-footer">Total Comments <i class="fa fa-comments" aria-hidden="true"></i> </b>
          </div>
        </div>


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box header-bg">
            <div class="inner">
              <h3> <?php echo $dashboard->fetch_total_replies(); ?> </h3>

              <p>Total Replies</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <b class="small-box-footer">Total Replies <i class="fa fa-reply-all" aria-hidden="true"></i> </b>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $dashboard->total_videos();  ?></h3>

              <p>Total Videos Posted</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <b class="small-box-footer">Videos <i class="fa fa-file-video-o" aria-hidden="true"></i> </b>
          </div>
        </div>

</div>

















<div class="row add-me" style="margin-top:30px;">

<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php  $dashboard->total_clicks();?></h3>

              <p>Total Post Views</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <b class="small-box-footer">Views <i class="fa fa-eye"></i>  </b>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php $dashboard->total_videos_viewed();?></h3>

              <p>Total Videos Views</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <b  class="small-box-footer"> Views <i class="fa fa-eye"></i> </b>
          </div>
        </div>


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box header-bg">
            <div class="inner">
              <h3><?php $dashboard->registered_user(); ?> </h3>

              <p>Registered Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">Registered Users <i class="fa fa-user-o" aria-hidden="true"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php $dashboard->clicked_videos();?></h3>

              <p>Total Video Clicks</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <b class="small-box-footer">Total Video Clicks <i class="fa fa-file-video-o" aria-hidden="true"></i>
            
            
             </b>
          </div>
        </div>

</div>






<!--second row-->



<div class="row extra-style">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header head-note">
                                <h4><center><b>Browser Usage <i class="fa fa-globe" aria-hidden="true"></i></b></center></h4>
                            </div>
                            <div class="content">

                            <div class="row">
                <div class="col-md-8">
                  <div class="chart-responsive">
                  <canvas id="myChart"  width="400" height="400"></canvas>    
                </div>
                 
                </div>
               
                <div class="col-md-4">
                  <ul class="chart-legend clearfix">
                    <li><i class="fa fa-square " style="background:rgb(255, 99, 132) !important;color:rgb(255, 99, 132) !important;"></i> Chrome</li>
                    <li><i class="fa fa-square" style="background:rgb(54, 162, 235) !important;color:rgb(54, 162, 235)!important;"></i>Safari</li>
                    <li><i class="fa fa-square " style="background:rgb(0, 166, 90);color:rgb(0, 166, 90);"></i>IE</li>
                    <li><i class="fa fa-square" style="background:rgb(243, 156, 18);color:rgb(243, 156, 18);" ></i>Firefox</li>
                    <li><i class="fa fa-square" style="background:rgb(0, 123, 255);color:rgb(0, 123, 255);"></i> Opera</li>
                    <li><i class="fa fa-square" style="background:rgb(136, 146, 191);color:rgb(136, 146, 191);"></i>Blackberry</li>
                    <li><i class="fa fa-square" style="background:rgb(255, 228, 225);color:rgb(255, 228, 225);"></i>Nokia</li>
                    <li><i class="fa fa-square"style="background:rgb(160, 82, 45);color:rgb(160, 82, 45);"></i>Iphone</li>
                    <li><i class="fa fa-square" style="background:rgb(154, 205, 50);color:rgb(154, 205, 50);"></i>Ipad</li>
                    
                  </ul>
                </div>
               
              </div>

                            </div>
                      </div>
                    </div>

                     
                    <div class="col-md-6">
                        <div class="card">
                        <div class="header head-note">
                                <h4><center><b>Post Views <i class="fa fa-eye" aria-hidden="true"></i></b></center></h4>
                            </div>
                            <div class="content">
                            <canvas id="chartjs-0" width="400" height="400"></canvas>

                            </div>
                    </div>
                </div>



     

                <div class="col-md-12" style="margin-top:20px;">
                    <div class="row ">
                  <div class="col-md-6">
                      <div class="card">
                          <div class="header head-note">
                              <h4><center><b>Newest Admins <i class="fa fa-users" aria-hidden="true"></i></b></center></h4>
                          </div>
                           <div class="content">
                              <div class="row margin-though">
                                  
                                  <?php $dashboard->fetch_last_registered_six_admin();?>

                                  
                              </div>

                           <div class="ending">
                           <center><a href="view-admin.php">View More</a></center>
                           </div>

                           </div>
                      </div>
                       </div>    
                  


                <div class="col-md-6">

               
                <div class="card">
                            <div class="header head-note">
                                <h4><center><b>Viewers By Continent <i class="fa fa-globe" aria-hidden="true"></i></b></center></h4>
                            </div>
                            <div class="content">

                            <div class="row">
                <div class="col-md-8">
                  <div class="chart-responsive">
                  <canvas id="myChart2"  width="400" height="400"></canvas>    
                </div>
                 
                </div>
               
                <div class="col-md-4">
                  <ul class="chart-legend clearfix">
                    <li><i class="fa fa-circle-o text-red header-bg"></i> Asia</li>
                    <li><i class="fa fa-circle-o text-green bg-green"></i>Africa</li>
                    <li><i class="fa fa-circle-o text-yellow bg-yellow"></i>Europe</li>
                    <li><i class="fa fa-circle-o text-aqua bg-aqua"></i>North America</li>
                    <li><i class="fa fa-circle-o text-light-blue text-primary bg-primary"></i>South America</li>
                  </ul>
                </div>
               
              </div>

              </div>

                            </div>
                      </div>
                


                </div>

                 </div>

















                

</div>

<script src="../assets/js/Chart.min.js"></script>