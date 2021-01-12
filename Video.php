<?php
error_reporting(0);
require 'header.php'; $page = "Video";

if($_GET['Watch'])
{

?>


<div class="container-fluid relative animatedParent animateOnce">
    <div class="wrapper animated fadeInUpShort p-4 mt-2">
        <div class="row">
            <div class="col-lg-8">
               <?php Single_video_song_play(); ?>
                <div class="card mt-1 ">
                    <div class="card-body p-0">
                        <div class="lightSlider has-items-overlay playlist"
                             data-item="3"
                             data-item-xl="3"
                             data-item-lg="3"
                             data-item-md="3"
                             data-item-sm="1"
                             data-auto="false"
                             data-pager="false"
                             data-controls="true"
                             data-loop="false">
                            <div>
                                <div class="p-2 bg-primary text-white">
                                    <h5 class="font-weight-normal s-14">Views</h5>
                                    <span class="s-48 font-weight-lighter text-primary">140</span>
                                    <div> Likes
                                        <span class="text-primary">
                                            <i class="icon icon-arrow_downward"></i> 67%</span>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="p-2">
                                    <h5 class="font-weight-normal s-14">Share</h5>
                                    <span class="s-48 font-weight-lighter amber-text">700</span>
                                    <div>
                                            <span class="amber-text">
                                            <i class="icon icon-arrow_downward"></i> 34</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="p-2 light">
                                    <h5 class="font-weight-normal s-14">Comments</h5>
                                    <span class="s-48 font-weight-lighter text-indigo">411</span>
                                    <div> Iron
                                        <span class="text-indigo">
                                            <i class="icon icon-arrow_downward"></i> 89%</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="p-2">
                                    <h5 class="font-weight-normal s-14">Likes</h5>
                                    <span class="s-48 font-weight-lighter pink-text">224</span>
                                    <div> Sodium
                                        <span class="pink-text">
                                            <i class="icon icon-arrow_downward"></i> 47%</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card mt-1 mb-5">
                    <div class="card-body">
                        <div class="media my-5 ">
                            <div class="avatar avatar-md mr-3 mt-1">
                                <img src="assets/img/demo/u7.png" alt="user">
                            </div>
                            <div class="media-body">
                                <h6 class="mt-0">Ami Fro</h6>
                                Cras sit amet nibh libero, in gravida nulla.
                            </div>
                        </div>
                        <div class="media my-5 ">
                            <div class="avatar avatar-md mr-3 mt-1">
                                <img src="assets/img/demo/u6.png" alt="user">
                            </div>
                            <div class="media-body">
                                <h6 class="mt-0">Sara Kamzoon</h6>
                                vestibulum in vulputate at, tempus viverra turpis.
                                <div class="media p-2 my-4">
                                    <a href="#">
                                        <div class="avatar avatar-md mr-3 mt-1">
                                            <img src="assets/img/demo/u8.png" alt="user">
                                        </div>
                                    </a>
                                    <div class="media-body">
                                        <h6 class="mt-0">Joe Doe</h6>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin.
                                    </div>
                                </div>
                                <div class="media p-2 my-4">
                                    <a href="#">
                                        <div class="avatar avatar-md mr-3 mt-1">
                                            <img src="assets/img/demo/u7.png" alt="user">
                                        </div>
                                    </a>
                                    <div class="media-body">
                                        <h6 class="mt-0">Find Doe

                                        </h6>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media my-5 ">
                            <div class="avatar avatar-md mr-3 mt-1">
                                <img src="assets/img/demo/u9.png" alt="user">
                            </div>

                            <div class="media-body">
                                <h6 class="mt-0">Ami Fro</h6>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                sollicitudin. Cras purus odio, vestibulum in
                                vulputate at, tempus viverra turpis.
                            </div>
                        </div>
                        <div class="media my-5 ">
                            <div class="avatar avatar-md mr-3 mt-1">
                                <img src="assets/img/demo/u10.png" alt="user">
                            </div>
                            <div class="media-body">
                                <h6 class="mt-0">Ami Fro </h6>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                sollicitudin. Cras purus odio, vestibulum in
                                vulputate at, tempus viverra turpis.
                            </div>
                        </div>
                    </div>
                </div>
				
				  <div class="card mt-1 mb-5 post-comments my-5">
                            
                            <div class="card-body">
                                <form class="form-material">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Name"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Subject"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                      <textarea rows="5" class="form-control r-0"
                                                                placeholder="Message"></textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row text-center">

                                        <div class="col-lg-12"><input type="submit" class="btn btn-primary r-0"
                                                                      value="Post Comment"></div>
                                    </div>
                                </form>
                            </div>
                        </div>

            </div>
            <div class="col-12 col-lg-4">
                <div class="card pt-3">
                    <div class="card-header">
                        <h6>You May Also like</h6>
                    </div>
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <div class="align-self-center">
                                <ul class="nav nav-pills mb-3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active show r-20" id="w3--tab1" data-toggle="tab"
                                           href="#w3-tab1" role="tab" aria-controls="tab1" aria-expanded="true"
                                           aria-selected="true">Album</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link r-20" id="w3--tab2" data-toggle="tab" href="#w3-tab2"
                                           role="tab" aria-controls="tab2" aria-selected="false">Playlist</a>
                                    </li>
                                   
                                </ul>
                            </div>
                           

                        </div>
                    </div>
                    <div class="card-body no-p">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="w3-tab1" role="tabpanel"
                                 aria-labelledby="w3-tab1">
                               <?php All_videos_by_one_Album(); ?>
                            </div>
                            <div class="tab-pane fade " id="w3-tab2" role="tabpanel"
                                 aria-labelledby="w3-tab2">
                                 <div class="d-flex align-items-center mb-4 ">
                                    <div class="col-5">
                                        <img src="assets/img/demo/v4.jpg" alt="Card image">
                                    </div>
                                    <div class="ml-3">
                                        <a href="video-single.html">
                                            <h6>new, Sounds of Kolachi, Record Studio Season</h6>
                                        </a>
                                        <small class="mt-1">Record Studio</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-4 ">
                                    <div class="col-5">
                                        <img src="assets/img/demo/v2.jpg" alt="Card image">
                                    </div>
                                    <div class="ml-3">
                                        <a href="video-single.html">
                                            <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                                        </a>
                                        <small class="mt-1">Record Studio</small>
                                    </div>
                                </div>
                            </div>
                          
                        </div>

                    </div>
                </div>
				
				
                <div class="my-4">
                    <div class="d-flex align-items-center mb-4 ">
                        <div class="col-5">
                            <img src="assets/img/demo/v5.jpg" alt="Card image">
                        </div>
                        <div class="ml-3">
                            <a href="video-single.html">
                                <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                            </a>
                            <small class="mt-1">Record Studio</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 ">
                        <div class="col-5">
                            <img src="assets/img/demo/v1.jpg" alt="Card image">
                        </div>
                        <div class="ml-3">
                            <a href="video-single.html">
                                <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                            </a>
                            <small class="mt-1">Record Studio</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 ">
                        <div class="col-5">
                            <img src="assets/img/demo/v6.jpg" alt="Card image">
                        </div>
                        <div class="ml-3">
                            <a href="video-single.html">
                                <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                            </a>
                            <small class="mt-1">Record Studio</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 ">
                        <div class="col-5">
                            <img src="assets/img/demo/v7.jpg" alt="Card image">
                        </div>
                        <div class="ml-3">
                            <a href="video-single.html">
                                <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                            </a>
                            <small class="mt-1">Record Studio</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 ">
                        <div class="col-5">
                            <img src="assets/img/demo/v8.jpg" alt="Card image">
                        </div>
                        <div class="ml-3">
                            <a href="video-single.html">
                                <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                            </a>
                            <small class="mt-1">Record Studio</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 ">
                        <div class="col-5">
                            <img src="assets/img/demo/v9.jpg" alt="Card image">
                        </div>
                        <div class="ml-3">
                            <a href="video-single.html">
                                <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                            </a>
                            <small class="mt-1">Record Studio</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 ">
                        <div class="col-5">
                            <img src="assets/img/demo/v10.jpg" alt="Card image">
                        </div>
                        <div class="ml-3">
                            <a href="video-single.html">
                                <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                            </a>
                            <small class="mt-1">Record Studio</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 ">
                        <div class="col-5">
                            <img src="assets/img/demo/v11.jpg" alt="Card image">
                        </div>
                        <div class="ml-3">
                            <a href="video-single.html">
                                <h6>Ilallah, Sounds of Kolachi, Record Studio Season</h6>
                            </a>
                            <small class="mt-1">Record Studio</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



<?php }else{ ?>
<div class="container-fluid relative animatedParent animateOnce">
    <div class="wrapper animated fadeInUpShort p-md-5 p-3">
		
		<section class="section">
            <h1 class="my-5 text-primary">Videos</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Architecto atque aut blanditiis consectetur
            </p>
        </section>
		<hr style="background-color: #341920;">
  <section class="section">
            <div class="d-flex">
                <div class="mb-4">
                    <h4>You May Like</h4>
                    <p>Checkout new recommended videos</p>
                </div>
            </div>
            <div class=" no-b r-0">
                <div class="my-3">
                    <div class="lightSlider"
                         data-item="3"
                         data-item-lg="2"
                         data-item-md="1"
                         data-item-sm="1"
                         data-auto="false"
                         data-pager="false"
                         data-controls="true"
                         data-loop="false">
						
                        <div class="col-lg-3 col-md-6 mb-4">
                   <div class="card no-b">
                       <img src="assets/img/demo/v11.jpg" alt="">
                       <div class="p-3">
                           <div class="mb-1">
                               <a href="video-single.html">
                                   <h4>Ilallah, Sounds of Kolachi, Record Studio Season</h4>
                               </a>
                           </div>
                           <small>r----Record Studio</small>
                       </div>
                   </div>
               </div>
						 <div class="col-lg-3 col-md-6 mb-4">
                   <div class="card no-b">
                       <img src="assets/img/demo/v11.jpg" alt="">
                       <div class="p-3">
                           <div class="mb-1">
                               <a href="video-single.html">
                                   <h4>Ilallah, Sounds of Kolachi, Record Studio Season</h4>
                               </a>
                           </div>
                           <small>Record Studio</small>
                       </div>
                   </div>
               </div>
                       
					 <div class="col-lg-3 col-md-6 mb-4">
                   <div class="card no-b">
                       <img src="assets/img/demo/v11.jpg" alt="">
                       <div class="p-3">
                           <div class="mb-1">
                               <a href="video-single.html">
                                   <h4>Ilallah, Sounds of Kolachi, Record Studio Season</h4>
                               </a>
                           </div>
                           <small>Record Studio</small>
                       </div>
                   </div>
               </div>
						 <div class="col-lg-3 col-md-6 mb-4">
                   <div class="card no-b">
                       <img src="assets/img/demo/v11.jpg" alt="">
                       <div class="p-3">
                           <div class="mb-1">
                               <a href="video-single.html">
                                   <h4>Ilallah, Sounds of Kolachi, Record Studio Season</h4>
                               </a>
                           </div>
                           <small>Record Studio</small>
                       </div>
                   </div>
               </div>
						 <div class="col-lg-3 col-md-6 mb-4">
                   <div class="card no-b">
                       <img src="assets/img/demo/v11.jpg" alt="">
                       <div class="p-3">
                           <div class="mb-1">
                               <a href="video-single.html">
                                   <h4>Ilallah, Sounds of Kolachi, Record Studio Season</h4>
                               </a>
                           </div>
                           <small>Record Studio</small>
                       </div>
                   </div>
               </div>
						 <div class="col-lg-3 col-md-6 mb-4">
                   <div class="card no-b">
                       <img src="assets/img/demo/v11.jpg" alt="">
                       <div class="p-3">
                           <div class="mb-1">
                               <a href="video-single.html">
                                   <h4>Ilallah, Sounds of Kolachi, Record Studio Season</h4>
                               </a>
                           </div>
                           <small>Record Studio</small>
                       </div>
                   </div>
               </div>
                    </div>
                </div>
            </div>
        </section>
		
		
		<hr style="background-color: #341920;">
		


  <section class="section">
           <div class="d-flex">
               <div class="mb-4">
                   <h4>Latest For You</h4>
                   <p>Checkout new recommended videos</p>
               </div>
           </div>
           <div class="row">
               <div class="col-lg-3 col-md-6 mb-4">
                   <div class="card no-b">
                       <img src="assets/img/demo/v11.jpg" alt="">
                       <div class="p-3">
                           <div class="mb-1">
                               <a href="video-single.html">
                                   <h4>Ilallah, Sounds of Kolachi, Record Studio Season</h4>
                               </a>
                           </div>
                           <small>Record Studio</small>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6 mb-4">
                   <div class="card no-b">
                       <img src="assets/img/demo/v1.jpg" alt="">
                       <div class="p-3">
                           <div class="mb-1">
                               <a href="video-single.html">
                                   <h4>Ilallah, Sounds of Kolachi, Record Studio Season</h4>
                               </a>
                           </div>
                           <small>Record Studio</small>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6 mb-4">
                   <div class="card no-b">
                       <img src="assets/img/demo/v9.jpg" alt="">
                       <div class="p-3">
                           <div class="mb-1">
                               <a href="video-single.html">
                                   <h4>Ilallah, Sounds of Kolachi, Record Studio Season</h4>
                               </a>
                           </div>
                           <small>Record Studio</small>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6 mb-4">
                   <div class="card no-b">
                       <img src="assets/img/demo/v1.jpg" alt="">
                       <div class="p-3">
                           <div class="mb-1">
                               <a href="video-single.html">
                                   <h4>Ilallah, Sounds of Kolachi, Record Studio Season</h4>
                               </a>
                           </div>
                           <small>Record Studio</small>
                       </div>
                   </div>
               </div>
           </div>
           <div class="row mt-4">
               <div class="col-lg-3 col-md-6 mb-4">
                   <div class="card no-b">
                       <img src="assets/img/demo/v1.jpg" alt="">
                       <div class="p-3">
                           <div class="mb-1">
                               <a href="video-single.html">
                                   <h4>Ilallah, Sounds of Kolachi, Record Studio Season</h4>
                               </a>
                           </div>
                           <small>Record Studio</small>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6 mb-4">
                   <div class="card no-b">
                       <img src="assets/img/demo/v2.jpg" alt="">
                       <div class="p-3">
                           <div class="mb-1">
                               <a href="video-single.html">
                                   <h4>Ilallah, Sounds of Kolachi, Record Studio Season</h4>
                               </a>
                           </div>
                           <small>Record Studio</small>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6 mb-4">
                   <div class="card no-b">
                       <img src="assets/img/demo/v3.jpg" alt="">
                       <div class="p-3">
                           <div class="mb-1">
                               <a href="video-single.html">
                                   <h4>Ilallah, Sounds of Kolachi, Record Studio Season</h4>
                               </a>
                           </div>
                           <small>Record Studio</small>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-md-6 mb-4">
                   <div class="card no-b">
                       <img src="assets/img/demo/v4.jpg" alt="">
                       <div class="p-3">
                           <div class="mb-1">
                               <a href="video-single.html">
                                   <h4>Ilallah, Sounds of Kolachi, Record Studio Season</h4>
                               </a>
                           </div>
                           <small>Record Studio</small>
                       </div>
                   </div>
               </div>
           </div>
       </section>		
		
		<hr style="background-color: #341920;">
		
		
		
		
		
	</div>
	</div>





<?php
	
}
	
require 'footer.php';
?>