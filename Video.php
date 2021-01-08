<?php
error_reporting(0);
require 'header.php'; $page = "Video";

if($_GET['Music-Player'])
{

?>


   

<div class="col-lg-7">
                  <div class="iq-card iq-card-transparent  ">
					 
                     <div class="iq-card-body">
                         <video src="test/2.mp4"  controls autoplay></video>
                        <div class="player1 row">
                           <div class="details1 col-6 col-sm-6 col-lg-6">
                              <div class="now-playing1"></div>
                              <div class="track-art1"></div>
							  
                              <div>
                                 <div class="track-name1 text-danger">Pop Smoke</div>
                                 <div class="track-artist1">Cascada</div>
								  
                              </div>
							    
                           </div>
                           <div class="slider_container1 col-sm-5 col-lg-5">
                              <div class="current-time1">00:00</div>
                              <input type="range" min="1" max="100" value="0" class="seek_slider1" onchange="seekTo1()">
                              <div class="total-duration1">00:00</div>
                           </div>
                           <div class="buttons1 col-6 col-sm-2 col-lg-3">
                              <div class="prev-track1" onclick="prevTrack1()"><i class="fa fa-step-backward fa-2x"></i></div>
                              <div class="playpause-track1" onclick="playpauseTrack1()"><i class="fa fa-play-circle fa-3x"></i></div>
                              <div class="next-track1" onclick="nextTrack1()"><i class="fa fa-step-forward fa-2x"></i></div>
                           </div>
                           <div class="slider_container1 col-sm-4 col-lg-4">
                              <i class="fa fa-volume-down"></i>
                              <input type="range" min="1" max="100" value="99" class="volume_slider1" onchange="setVolume1()">
                              <i class="fa fa-volume-up"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-lg-5">
                  <div class="iq-card iq-card-transparent">
                     <div class="iq-card-body p-0">
                        <ul class="list-unstyled row mb-0">
                           <li class="col-lg-6 col-md-6">
                              <div class="iq-card iq-card-transparent">
                                 <div class="iq-card-body p-0">
                                    <div class="media align-items-center">
                                       <div class="iq-thumb-hotsong">
                                          <div class="iq-music-overlay"></div>
                                          <a href="music-player.html"><img src="images/dashboard/album-song/01.png"  class="img-fluid avatar-60" alt="">
                                          </a>
                                          <div class="overlay-music-icon">
                                             <a href="music-player.html">
                                                <i class="las la-play-circle font-size-24"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0">Girls Like You</h6>
                                          <small>Juice WRLD</small>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-lg-6 col-md-6">
                              <div class="iq-card iq-card-transparent">
                                 <div class="iq-card-body p-0">
                                    <div class="media align-items-center">
                                       <div class="iq-thumb-hotsong">
                                          <div class="iq-music-overlay"></div>
                                          <a href="music-player.html"><img src="images/dashboard/album-song/02.png"  class="img-fluid avatar-60" alt="">
                                          </a>
                                          <div class="overlay-music-icon">
                                             <a href="music-player.html">
                                                <i class="las la-play-circle font-size-24"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 iq-song-title">Lucid Dreams</h6>
                                          <small>Lady Gaga</small>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-lg-6 col-md-6">
                              <div class="iq-card iq-card-transparent">
                                 <div class="iq-card-body p-0">
                                    <div class="media align-items-center">
                                       <div class="iq-thumb-hotsong">
                                          <div class="iq-music-overlay"></div>
                                          <a href="music-player.html"><img src="images/dashboard/album-song/03.png"  class="img-fluid avatar-60" alt="">
                                          </a>
                                          <div class="overlay-music-icon">
                                             <a href="music-player.html">
                                                <i class="las la-play-circle font-size-24"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0">Better Now</h6>
                                          <small>Beyonce</small>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-lg-6 col-md-6">
                              <div class="iq-card iq-card-transparent">
                                 <div class="iq-card-body p-0">
                                    <div class="media align-items-center">
                                       <div class="iq-thumb-hotsong">
                                          <div class="iq-music-overlay"></div>
                                          <a href="music-player.html"><img src="images/dashboard/album-song/04.png"  class="img-fluid avatar-60" alt="">
                                          </a>
                                          <div class="overlay-music-icon">
                                             <a href="music-player.html">
                                                <i class="las la-play-circle font-size-24"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 iq-song-title">No Tears Left To Cry</h6>
                                          <small>Ariana Grande</small>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-lg-6 col-md-6">
                              <div class="iq-card iq-card-transparent">
                                 <div class="iq-card-body p-0">
                                    <div class="media align-items-center">
                                       <div class="iq-thumb-hotsong">
                                          <div class="iq-music-overlay"></div>
                                          <a href="music-player.html"><img src="images/dashboard/album-song/05.png"  class="img-fluid avatar-60" alt="">
                                          </a>
                                          <div class="overlay-music-icon">
                                             <a href="music-player.html">
                                                <i class="las la-play-circle font-size-24"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 iq-song-title">I Like Me Better</h6>
                                          <small>Lauv</small>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-lg-6 col-md-6">
                              <div class="iq-card iq-card-transparent">
                                 <div class="iq-card-body p-0">
                                    <div class="media align-items-center">
                                       <div class="iq-thumb-hotsong">
                                          <div class="iq-music-overlay"></div>
                                          <a href="music-player.html"><img src="images/dashboard/album-song/06.png"  class="img-fluid avatar-60" alt="">
                                          </a>
                                          <div class="overlay-music-icon">
                                             <a href="music-player.html">
                                                <i class="las la-play-circle font-size-24"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 iq-song-title">Whatever It Takes</h6>
                                          <small>George Michael</small>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-lg-6 col-md-6">
                              <div class="iq-card iq-card-transparent">
                                 <div class="iq-card-body p-0">
                                    <div class="media align-items-center">
                                       <div class="iq-thumb-hotsong">
                                          <div class="iq-music-overlay"></div>
                                          <a href="music-player.html"><img src="images/dashboard/album-song/07.png"  class="img-fluid avatar-60" alt="">
                                          </a>
                                          <div class="overlay-music-icon">
                                             <a href="music-player.html">
                                                <i class="las la-play-circle font-size-24"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 iq-song-title">In My Blood</h6>
                                          <small>Lil Pump</small>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-lg-6 col-md-6">
                              <div class="iq-card iq-card-transparent">
                                 <div class="iq-card-body p-0">
                                    <div class="media align-items-center">
                                       <div class="iq-thumb-hotsong">
                                          <div class="iq-music-overlay"></div>
                                          <a href="music-player.html"><img src="images/dashboard/album-song/08.png"  class="img-fluid avatar-60" alt="">
                                          </a>
                                          <div class="overlay-music-icon">
                                             <a href="music-player.html">
                                                <i class="las la-play-circle font-size-24"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 iq-song-title">Too Good At Goodbyes</h6>
                                          <small>Stevie Wonder</small>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-lg-6 col-md-6">
                              <div class="iq-card iq-card-transparent mb-md-0">
                                 <div class="iq-card-body p-0">
                                    <div class="media align-items-center">
                                       <div class="iq-thumb-hotsong">
                                          <div class="iq-music-overlay"></div>
                                          <a href="music-player.html"><img src="images/dashboard/album-song/09.png"  class="img-fluid avatar-60" alt="">
                                          </a>
                                          <div class="overlay-music-icon">
                                             <a href="music-player.html">
                                                <i class="las la-play-circle font-size-24"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 iq-song-title">This Is America</h6>
                                          <small>Drake</small>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-lg-6 col-md-6">
                              <div class="iq-card iq-card-transparent mb-md-0 mb-0">
                                 <div class="iq-card-body p-0">
                                    <div class="media align-items-center">
                                       <div class="iq-thumb-hotsong">
                                          <div class="iq-music-overlay"></div>
                                          <a href="music-player.html"><img src="images/dashboard/album-song/10.png"  class="img-fluid avatar-60" alt="">
                                          </a>
                                          <div class="overlay-music-icon">
                                             <a href="music-player.html">
                                                <i class="las la-play-circle font-size-24"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 iq-song-title">What Lovers Do</h6>
                                          <small>Dolly Parton</small>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>


 <div class="col-lg-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between align-items-center">
                        <div class="iq-header-title">
                           <h4 class="card-title">Artist</h4>
                        </div>
                        <div class="d-flex align-items-center iq-view">
                           <b class="mb-0 text-primary"><a href="Artist.php?Album=Atif-Aslam">View More <i class="las la-angle-right"></i></a></b>
                        </div>
                     </div>
                     <div class="iq-card-body">
						 
                        <ul class="list-unstyled row feature-album-artist mb-0">
                           <li class="col-lg-2  iq-music-box">
                              <div class="iq-thumb-artist">
                                 <div class="iq-music-overlay"></div>
                                 <a href="Artist.php?Album-Play=Atif-Aslam">
                                    <img src="images/dashboard/feature-album-artist/01.png" class="w-100 img-fluid" alt="">
                                 </a>
                                 <div class="overlay-music-icon">
                                    <a href="music-player.html">
                                       <i class="las la-play-circle"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="feature-list text-center">
                                 <h6 class="font-weight-600  mb-0">Pixie Lott</h6>
                              </div>
                           </li>
                           <li class="col-lg-2  iq-music-box">
                              <div class="iq-thumb-artist">
                                 <div class="iq-music-overlay"></div>
                                 <a href="music-player.html">
                                    <img src="images/dashboard/feature-album-artist/02.png" class="w-100 img-fluid" alt="">
                                 </a>
                                 <div class="overlay-music-icon">
                                    <a href="Artist.php?Album-Play=Atif-Aslam">
                                       <i class="las la-play-circle"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="feature-list text-center">
                                 <h6 class="font-weight-600 mb-0">Jessie Ware</h6>
                              </div>
                           </li>
                           <li class="col-lg-2  iq-music-box">
                              <div class="iq-thumb-artist">
                                 <div class="iq-music-overlay"></div>
                                 <a href="music-player.html">
                                    <img src="images/dashboard/feature-album-artist/03.png" class="w-100 img-fluid" alt="">
                                 </a>
                                 <div class="overlay-music-icon">
                                    <a href="music-player.html">
                                       <i class="las la-play-circle"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="feature-list text-center">
                                 <h6 class="font-weight-600  mb-0">Alesha Dixon</h6>
                              </div>
                           </li>
                           <li class="col-lg-2  iq-music-box">
                              <div class="iq-thumb-artist">
                                 <div class="iq-music-overlay"></div>
                                 <a href="music-player.html">
                                    <img src="images/dashboard/feature-album-artist/04.png" class="w-100 img-fluid" alt="">
                                 </a>
                                 <div class="overlay-music-icon">
                                    <a href="music-player.html">


                                       <i class="las la-play-circle"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="feature-list text-center">
                                 <h6 class="font-weight-600  mb-0">Sarah Connor</h6>
                              </div>
                           </li>
                           <li class="col-lg-2  iq-music-box">
                              <div class="iq-thumb-artist">
                                 <div class="iq-music-overlay"></div>
                                 <a href="music-player.html">
                                    <img src="images/dashboard/feature-album-artist/05.png" class="w-100 img-fluid" alt="">
                                 </a>
                                 <div class="overlay-music-icon">
                                    <a href="music-player.html">
                                       <i class="las la-play-circle"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="feature-list text-center">
                                 <h6 class="font-weight-600 mb-0">Agnes</h6>
                              </div>
                           </li>
							
                           <li class="col-lg-2 iq-music-box">
							   
                              <div class="iq-thumb-artist ">
                                 <div class="iq-music-overlay"></div>
                                 <a href="music-player.html">
                                    <img src="images/dashboard/feature-album-artist/06.png" class="w-100 img-fluid" alt="">
                                 </a>
                                 <div class="overlay-music-icon">
                                    <a href="music-player.html">
                                       <i class="las la-play-circle"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="feature-list text-center">
                                 <h6 class="font-weight-600  mb-0">Rebecca</h6>
                              </div>
                           </li>
                           <li class="col-lg-2  iq-music-box">
                              <div class="iq-thumb-artist">
                                 <div class="iq-music-overlay"></div>
                                 <a href="music-player.html">
                                    <img src="images/dashboard/feature-album-artist/07.png" class="w-100 img-fluid" alt="">
                                 </a>
                                 <div class="overlay-music-icon">
                                    <a href="music-player.html">
                                       <i class="las la-play-circle"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="feature-list text-center">
                                 <h6 class="font-weight-600 mb-0">Grace </h6>
                              </div>
                           </li>
                           <li class="col-lg-2  iq-music-box">
                              <div class="iq-thumb-artist">
                                 <div class="iq-music-overlay"></div>
                                 <a href="music-player.html">
                                    <img src="images/dashboard/feature-album-artist/08.png" class="w-100 img-fluid" alt="">
                                 </a>
                                 <div class="overlay-music-icon">
                                    <a href="music-player.html">
                                       <i class="las la-play-circle"></i>
                                    </a>
                                 </div>
                              </div>

                              <div class="feature-list text-center">
                                 <h6 class="font-weight-600  mb-0">Courtney</h6>
                              </div>
                           </li>
                           <li class="col-lg-2  iq-music-box">
                              <div class="iq-thumb-artist">
                                 <div class="iq-music-overlay"></div>
                                 <a href="music-player.html">
                                    <img src="images/dashboard/feature-album-artist/09.png" class="w-100 img-fluid" alt="">
                                 </a>
                                 <div class="overlay-music-icon">
                                    <a href="music-player.html">
                                       <i class="las la-play-circle"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="feature-list text-center">
                                 <h6 class="font-weight-600 mb-0">Billie Eilish</h6>
                              </div>
                           </li>
                           <li class="col-lg-2  iq-music-box">
                              <div class="iq-thumb-artist">
                                 <div class="iq-music-overlay"></div>
                                 <a href="music-player.html">
                                    <img src="images/dashboard/feature-album-artist/10.png" class="w-100 img-fluid" alt="">
                                 </a>
                                 <div class="overlay-music-icon">
                                    <a href="music-player.html">
                                       <i class="las la-play-circle"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="feature-list text-center">
                                 <h6 class="font-weight-600  mb-0">Normani</h6>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
         





<?php }else{ ?>


<div class="col-lg-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Bollywood Songs</h4>
                        </div>
                        <div class="d-flex align-items-center iq-view">
                           <b class="mb-0 text-primary"><a href="Audio.php">Back <i class="las la-angle-right"></i></a></b>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <ul class="list-unstyled row  iq-box-hover mb-0">
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card ">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="Video.php?Music-Player=Arjit-singh">
                                          <img src="images/dashboard/popular-hindi-song/01.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="Video.php?Music-Player=Arjit-singh">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Said Sum</h6>
                                       <p class="mb-0">Moneybagg Yo</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.html">
                                          <img src="images/dashboard/popular-hindi-song/02.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.html">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Toosie Slide</h6>
                                       <p class="mb-0">Drake</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.html">
                                          <img src="images/dashboard/popular-hindi-song/03.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.html">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Girls In The Hood</h6>
                                       <p class="mb-0">Megan Thee </p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.html">
                                          <img src="images/dashboard/popular-hindi-song/04.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.html">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Supalonely</h6>
                                       <p class="mb-0">BENEE Featuring</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.html">
                                          <img src="images/dashboard/popular-hindi-song/05.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.html">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Walk Em Down</h6>
                                       <p class="mb-0">NLE Choppa</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.html">
                                          <img src="images/dashboard/popular-hindi-song/06.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.html">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Blood On</h6>
                                       <p class="mb-0">Juice WRLD</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.html">
                                          <img src="images/dashboard/popular-hindi-song/07.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.html">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">One Big Country</h6>
                                       <p class="mb-0">LOCASH</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.html">
                                          <img src="images/dashboard/popular-hindi-song/08.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.html">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Righteous</h6>
                                       <p class="mb-0">Juice WRLD</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-sm-0  mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.html">
                                          <img src="images/dashboard/popular-hindi-song/09.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.html">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Got What I Got</h6>
                                       <p class="mb-0">Jason Aldean</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-md-0 mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.html">
                                          <img src="images/dashboard/popular-hindi-song/10.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.html">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">I Love My Country</h6>
                                       <p class="mb-0">Florida Georgia</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-sm-0 mb-md-0 mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.html">
                                          <img src="images/dashboard/popular-hindi-song/11.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.html">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Got It On Me</h6>
                                       <p class="mb-0">Summer Walker</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-0 mb-sm-0 mb-md-0 mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.html">
                                          <img src="images/dashboard/popular-hindi-song/12.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.html">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Like That</h6>
                                       <p class="mb-0">Stefflon Don</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>


<div class="col-lg-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Hollywood Songs</h4>
                        </div>
                        <div class="d-flex align-items-center iq-view">
                           <b class="mb-0 text-primary"><a href="Albums.php">Back <i class="las la-angle-right"></i></a></b>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <ul class="list-unstyled row  iq-box-hover mb-0">
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card ">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.html">
                                          <img src="images/dashboard/popular-hindi-song/01.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.html">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Said Sum</h6>
                                       <p class="mb-0">Moneybagg Yo</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.html">
                                          <img src="images/dashboard/popular-hindi-song/02.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.html">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Toosie Slide</h6>
                                       <p class="mb-0">Drake</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.html">
                                          <img src="images/dashboard/popular-hindi-song/03.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.html">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Girls In The Hood</h6>
                                       <p class="mb-0">Megan Thee </p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.html">
                                          <img src="images/dashboard/popular-hindi-song/04.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.html">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Supalonely</h6>
                                       <p class="mb-0">BENEE Featuring</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.html">
                                          <img src="images/dashboard/popular-hindi-song/05.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.html">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Walk Em Down</h6>
                                       <p class="mb-0">NLE Choppa</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.html">
                                          <img src="images/dashboard/popular-hindi-song/06.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.html">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Blood On</h6>
                                       <p class="mb-0">Juice WRLD</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.html">
                                          <img src="images/dashboard/popular-hindi-song/07.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.html">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">One Big Country</h6>
                                       <p class="mb-0">LOCASH</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.html">
                                          <img src="images/dashboard/popular-hindi-song/08.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.html">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Righteous</h6>
                                       <p class="mb-0">Juice WRLD</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-sm-0  mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.html">
                                          <img src="images/dashboard/popular-hindi-song/09.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.html">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Got What I Got</h6>
                                       <p class="mb-0">Jason Aldean</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-md-0 mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.html">
                                          <img src="images/dashboard/popular-hindi-song/10.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.html">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">I Love My Country</h6>
                                       <p class="mb-0">Florida Georgia</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-sm-0 mb-md-0 mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.html">
                                          <img src="images/dashboard/popular-hindi-song/11.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.html">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Got It On Me</h6>
                                       <p class="mb-0">Summer Walker</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                              <div class="iq-card mb-0 mb-sm-0 mb-md-0 mb-lg-0">
                                 <div class="iq-card-body p-0">
                                    <div class="iq-thumb">
                                       <div class="iq-music-overlay"></div>
                                       <a href="music-player.html">
                                          <img src="images/dashboard/popular-hindi-song/12.png" class="img-border-radius img-fluid w-100" alt="">
                                       </a>
                                       <div class="overlay-music-icon">
                                          <a href="music-player.html">
                                             <i class="las la-play-circle"></i>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="feature-list text-center">
                                       <h6 class="font-weight-600  mb-0">Like That</h6>
                                       <p class="mb-0">Stefflon Don</p>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>






<?php
	
}
	
require 'footer.php';
?>