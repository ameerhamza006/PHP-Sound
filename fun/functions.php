<?php 

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "sound";

$connect = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);



#For Audio Songs
#All Album view
function View_All_Album()
{
	
	global $connect;
	
	$s = "select * from audio";
	$r = mysqli_query($connect,$s);
	$f = mysqli_fetch_array($r);
	$fk_album = $f['3'];
	
	
	$select = "select * from album where id='$fk_album'";
	
	$run_select = mysqli_query($connect,$select);
	
	if($run_select){
		$sno = 0;
		while($fetch = mysqli_fetch_array($run_select))
		{
			$id = $fetch['0'];
			$title = $fetch['1'];
			$year = $fetch['2'];
			$artist = $fetch['3'];
			$language = $fetch['4'];
			$image = $fetch['5'];
			
			$select_year = "select * from years where id='$year'";
			$run_year = mysqli_query($connect,$select_year);
			$fetch_year = mysqli_fetch_array($run_year);
			$year_name = $fetch_year['3'];
			
			$select_artist = "select * from artist where id='$artist'";
			$run_artist = mysqli_query($connect,$select_artist);
			$fetch_artist = mysqli_fetch_array($run_artist);
			$artist_name = $fetch_artist['1'];
			
			$select_language = "select * from languages where id='$language'";
			$run_language = mysqli_query($connect,$select_language);
			$fetch_language = mysqli_fetch_array($run_language);
			$language_name = $fetch_language['1'];
			
			
	
	      if($fetch){
			  
			   echo "<div class='col-lg-3 col-md-2 col-sm-3 my-2'>
                            <figure>
                                <div class='img-wrapper'>
                                    <img src='dash-board/Artist/$artist_name/$title/$image' style='height: 255px ;width: 400px ;' alt='/'>
                                    <div class='img-overlay text-white text-center'>
                                        <a href='Albums.php?Albums=$title'>
                                            <div class='figcaption mt-3'>
                                                <i class='icon-link s-48'></i>
                                                <h5 class='mt-5'>$title</h5>
                                                <span>$artist_name</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class='figure-title text-center p-2'>
                                        <h5>$title</h5>
                                        <span>$artist_name</span>
                                    </div>
                                </div>
                            </figure>
                        </div>";
			  
	                       
		  }else{
			   echo "<tr>
                     <td></td>
                     <td class='text-danger'>Result Not found</td>
                     <td></td>
			  </tr>";
		  }
		}
	}else{
		
		
		
	}
	
}



#single album view
function Single_View_Album()
{
	global $connect;
	$get_name = $_GET['Albums'];
	
	$select = "select * from album where name='$get_name'";
	$select_run = mysqli_query($connect,$select);
	$album_fetch = mysqli_fetch_array($select_run);
	$fk_album = $album_fetch['0'];
	$album_name_single = $album_fetch['1'];
	$fk_year = $album_fetch['2'];
	$album_image = $album_fetch['5'];
	$artist_id = $album_fetch['3'];
	
	$selectt = "select * from artist where id='$artist_id'";
	$run = mysqli_query($connect,$selectt);
	$f = mysqli_fetch_array($run);
	$artist_name_single = $f['1'];
	
	$selecttt = "select * from years where id='$fk_year'";
	$runn = mysqli_query($connect,$selecttt);
	$ff = mysqli_fetch_array($runn);
	$year_name_single = $ff['3'];
	
	$select_Audio = "select * from audio where fk_album='$fk_album'";
	$Audio_run = mysqli_query($connect,$select_Audio);
	
	
	
     echo    "<section class='relative imggg' data-bg-possition='center'
                >
            <div class='wrapper has-bottom-gradient'>
                <div class='row pt-5 ml-lg-5 mr-lg-5'>
                    <div class='col-md-10 offset-1'>
                        <div class='row my-5 pt-5'>
                            <div class='col-md-3'>
                                <img src='dash-board/Artist/$artist_name_single/$album_name_single/$album_image' style='height: 250px ;width: 200px ;' alt='/'>
                            </div>
                            <div class='col-md-9'>
                                <div class='d-md-flex align-items-center justify-content-between'>
                                    <h1 class='my-3 text-white '>$album_name_single</h1>
                                    <div class='ml-auto mb-2'>
                                        <a href='#' style=' color: #fff;' class='snackbar' data-text='Bookmark clicked'
                                           data-pos='top-right'
                                           data-showAction='true'
                                           data-actionText='ok'
                                           data-actionTextColor='#fff'
                                           data-backgroundColor='#0c101b'><i class='icon-bookmark s-24'></i></a>
                                        <a href='#' style=' color: #fff;' class='snackbar ml-3' data-text='You like this song'
                                           data-pos='top-right'
                                           data-showAction='true'
                                           data-actionText='ok'
                                           data-actionTextColor='#fff'
                                           data-backgroundColor='#0c101b'><i class='icon-heart s-24'></i></a>
                                        <a href='#' style=' color: #fff;' class='snackbar ml-3' data-text='Thanks for sharing'
                                           data-pos='top-right'
                                           data-showAction='true'
                                           data-actionText='ok'
                                           data-actionTextColor='#fff'
                                           data-backgroundColor='#0c101b'><i class='icon-share-1 s-24'></i></a>
                                    </div>
                                </div>

                                <div class='text-white my-2'>
                                    <p >Album: $album_name_single</p>
										  <p>Artist: $artist_name_single</p>
										  <p>Release: $year_name_single</p>
                                </div>
                                <div class='pt-3'>
                                    <a href='#' class='btn btn-primary btn-lg'><i class='icon-play s-28'></i> PLAY</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='bottom-gradient '></div>
        </section>
       

        <div class='wrapper p-3 p-lg-5'>
          
            <section>
                <div class='row'>
                    <div class='col-lg-10 offset-lg-1'>
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class='playlist'>
                                    <ul class='list-group'>";
										
	
	                                  while($Audio_fetch = mysqli_fetch_array($Audio_run))
									  {
										  
										  
	
	
	$id = $Audio_fetch['0'];
	$title = $Audio_fetch['1'];
	$artist = $Audio_fetch['2'];
	$album = $Audio_fetch['3'];
	$language = $Audio_fetch['4'];
	$year = $Audio_fetch['5'];
	$ganre = $Audio_fetch['6'];
	$lyrics = $Audio_fetch['7'];
	$composer = $Audio_fetch['8'];
	$descrip = $Audio_fetch['9'];
	$image = $Audio_fetch['10'];
	$audio = $Audio_fetch['11'];
	
	
	#for artist name
	$select_Artist = "select * from artist where id='$artist'";
	$artist_run = mysqli_query($connect,$select_Artist);
	$artist_fetch = mysqli_fetch_array($artist_run);
	$artist_name = $artist_fetch['1'];
	
	#for language name
	$select_language = "select * from languages where id='$language'";
	$language_run = mysqli_query($connect,$select_language);
	$language_fetch = mysqli_fetch_array($language_run);
	$language_name = $language_fetch['1'];
	
	#for Year name
	$select_year = "select * from years where id='$year'";
	$year_run = mysqli_query($connect,$select_year);
	$year_fetch = mysqli_fetch_array($year_run);
	$year_name = $year_fetch['1'];
	
	#for lyrics name
	$select_lyrics = "select * from lyrics where id='$lyrics'";
	$lyrics_run = mysqli_query($connect,$select_lyrics);
	$lyrics_fetch = mysqli_fetch_array($lyrics_run);
	$lyrics_name = $lyrics_fetch['1'];
	
	#for Album name
	$select_Album = "select * from album where id='$album'";
	$Album_run = mysqli_query($connect,$select_Album);
	$Album_fetch = mysqli_fetch_array($Album_run);
	$album_name = $Album_fetch['1'];
										  
	
    $getID3 = new getID3;			  
    $filename = "dash-board/Artist/$artist_name/$album_name/$title/$audio";
    $ThisFileInfo = $getID3->analyze($filename);
    $getID3->CopyTagsToComments($ThisFileInfo);
    
										  
									  
                                      echo   "<li class='list-group-item my-1'>
                                            <div class='d-flex align-items-center'>
                                                <div class='col-1'>
                                                    <a class='no-ajaxy media-url' href='dash-board/Artist/$artist_name/$album_name/$title/$audio' data-wave='dash-board/Artist/track1.json'>
                                                        <i class='icon-play s-28'></i>
                                                    </a>
                                                </div>
												
												<div class='col-6'>
                                                       <figure class='avatar-md float-left  mr-3 mt-1'>
                                                           <img class='r-3' src='dash-board/Artist/$artist_name/$album_name/$title/$image' alt=''>
                                                       </figure>
                                                       <h6>$title</h6>$artist_name
                                                   </div>
												
                                                <span class=' ml-auto'>" .$ThisFileInfo['playtime_string']. "</span>
                                                <a href='#' class='ml-auto'><i class='icon-share-1'></i></a>
                                                <div class='ml-auto'>
                                                    <a href='#' class='btn btn-outline-primary btn-sm d-none d-lg-block'>Buy at
                                                        iTunes</a>
                                                </div>
                                            </div>
                                        </li>";
									  }
                                       
                                    echo "</ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        

        </div>";
	
	
	
	
	
	
	
	
	
	
}




#song view by Ganres
function Song_view_ganre()
{
	global $connect;
	
	
	$select = "select * from ganres";
	$run = mysqli_query($connect,$select);
	
	
	
	while($fetch = mysqli_fetch_array($run)){
		
		
	$g_id = $fetch['0']; 
	$g_name = $fetch['1']; 
		
		if(!$ganre ){
	
echo  "   <section class='section mt-4'>
				  <div class='row row-eq-height'>
                    <div class='col-lg-12'>
                        <div class='card no-b mb-md-3 p-2'>
<div class='card-body no-p'>
<div class='tab-content' id='v-pills-tabContent1'>
				
				  <div class='card-body has-items-overlay playlist p-5'>
                <div class='d-flex relative align-items-center justify-content-between'>
                    <div class='mb-4'>
                        <h4>$g_name Songs</h4>
                        <p>Enjoy some new awesome music</p>
                    </div>
                    <a href='Songs.php?Ganre=$g_name'>View $g_name Songs<i class='icon-angle-right ml-3'></i></a>
                </div>
                <div class='lightSlider has-items-overlay playlist'
                     data-item='6'
                     data-item-lg='3'
                     data-item-md='3'
                     data-item-sm='2'
                     data-auto='false'
                     data-pager='false'
                     data-controls='true'
                     data-loop='false'>";
		
		$select_Audio = "select * from audio where fk_ganre='$g_id'";
	$Audio_run = mysqli_query($connect,$select_Audio);
	while( $Audio_fetch = mysqli_fetch_array($Audio_run)){
												
												
												
	
		
	$id = $Audio_fetch['0'];
	$title = $Audio_fetch['1'];
	$artist = $Audio_fetch['2'];
	$album = $Audio_fetch['3'];
	$language = $Audio_fetch['4'];
	$year = $Audio_fetch['5'];
	$ganre = $Audio_fetch['6'];
	$lyrics = $Audio_fetch['7'];
	$composer = $Audio_fetch['8'];
	$descrip = $Audio_fetch['9'];
	$image = $Audio_fetch['10'];
	$audio = $Audio_fetch['11'];
											
												
	#for artist name
	$select_Artist = "select * from artist where id='$artist'";
	$artist_run = mysqli_query($connect,$select_Artist);
	$artist_fetch = mysqli_fetch_array($artist_run);
	$artist_name = $artist_fetch['1'];
	
	
	#for Album name
	$select_Album = "select * from album where id='$album'";
	$Album_run = mysqli_query($connect,$select_Album);
	$Album_fetch = mysqli_fetch_array($Album_run);
	$album_name = $Album_fetch['1'];											
												
												
                                               echo  "  <div class='col-md-2 mb-3'>
                       <figure class='mb-2'>
                                                        <div class='img-wrapper r-10'>
                                                            <img class=' r-10' src='dash-board/Artist/$artist_name/$album_name/$title/$image'
                                                                 alt='/'>
                                                           <div class='img-overlay text-white'>
                                    <div class='figcaption'>
                                        <ul class='list-inline d-flex align-items-center justify-content-between'>
                                            <li class='list-inline-item'>
                                                <a href='#' class='snackbar' data-text='Added to favourites' data-pos='top-right' data-showaction='true' data-actiontext='ok' data-actiontextcolor='#fff' data-backgroundcolor='#0c101b'>
                                                    <i class='icon-heart-o s-18'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item '>
                                                <a class='no-ajaxy media-url' href='dash-board/Artist/$artist_name/$album_name/$title/$audio' data-wave='dash-board/Artist/track1.json'>
                                                    <i class='icon-play ' style='
    font-size: 17px;
'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item'>
                                                <a href='Songs.php?Music-Player=$title'><i class='icon-more s-18 pt-3'></i></a></li>
                                        </ul>
                                        <div class='text-center' style='
    margin-top: -0.5rem!important;
'>
                                            <h5>$title</h5>
                                            <span>$artist_name</span>
                                        </div>
                                    </div>
                                </div>
                                                        </div>
                                                    </figure>
						<div class='figure-title'>
                                                        <h6>$title</h6>
                                                        <small>$artist_name</small>
                                                    </div>
                    </div>
					
					 <div class='col-md-2 mb-3'>
                       <figure class='mb-2'>
                                                        <div class='img-wrapper r-10'>
                                                            <img class=' r-10' src='assets/img/demo/a7.jpg'

                                                                 alt='/'>
                                                           <div class='img-overlay text-white'>
                                    <div class='figcaption'>
                                        <ul class='list-inline d-flex align-items-center justify-content-between'>
                                            <li class='list-inline-item'>
                                                <a href='#' class='snackbar' data-text='Added to favourites' data-pos='top-right' data-showaction='true' data-actiontext='ok' data-actiontextcolor='#fff' data-backgroundcolor='#0c101b'>
                                                    <i class='icon-heart-o s-18'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item '>
                                                <a class='no-ajaxy media-url' href='assets/media/track2.mp3' data-wave='assets/media/track2.json'>
                                                    <i class='icon-play ' style='
    font-size: 20px;
'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item'>
                                                <a href='album-single.html'><i class='icon-more s-18 pt-3'></i></a></li>
                                        </ul>
                                        <div class='text-center' style='
    margin-top: -0.5rem!important;
'>
                                            <h5>To Phir Ao</h5>
                                            <span>Joe Doe</span>
                                        </div>
                                    </div>
                                </div>
                                                        </div>
                                                    </figure>
						<div class='figure-title'>
                                                        <h6>To Phir Ao</h6>
                                                        <small>Atif Aslam</small>
                                                    </div>
                    </div>
					 <div class='col-md-2 mb-3'>
                       <figure class='mb-2'>
                                                        <div class='img-wrapper r-10'>
                                                            <img class=' r-10' src='assets/img/demo/a7.jpg'
                                                                 alt='/'>
                                                           <div class='img-overlay text-white'>
                                    <div class='figcaption'>
                                        <ul class='list-inline d-flex align-items-center justify-content-between'>
                                            <li class='list-inline-item'>
                                                <a href='#' class='snackbar' data-text='Added to favourites' data-pos='top-right' data-showaction='true' data-actiontext='ok' data-actiontextcolor='#fff' data-backgroundcolor='#0c101b'>
                                                    <i class='icon-heart-o s-18'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item '>
                                                <a class='no-ajaxy media-url' href='assets/media/track2.mp3' data-wave='assets/media/track2.json'>
                                                    <i class='icon-play ' style='
    font-size: 25px;
'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item'>
                                                <a href='album-single.html'><i class='icon-more s-18 pt-3'></i></a></li>
                                        </ul>
                                        <div class='text-center' style='
    margin-top: -0.5rem!important;
'>
                                            <h5>To Phir Ao</h5>
                                            <span>Joe Doe</span>
                                        </div>
                                    </div>
                                </div>
                                                        </div>
                                                    </figure>
						<div class='figure-title'>
                                                        <h6>To Phir Ao</h6>
                                                        <small>Atif Aslam</small>
                                                    </div>
                    </div>
					 <div class='col-md-2 mb-3'>
                       <figure class='mb-2'>
                                                        <div class='img-wrapper r-10'>
                                                            <img class=' r-10' src='assets/img/demo/a7.jpg'
                                                                 alt='/'>
                                                           <div class='img-overlay text-white'>
                                    <div class='figcaption'>
                                        <ul class='list-inline d-flex align-items-center justify-content-between'>
                                            <li class='list-inline-item'>
                                                <a href='#' class='snackbar' data-text='Added to favourites' data-pos='top-right' data-showaction='true' data-actiontext='ok' data-actiontextcolor='#fff' data-backgroundcolor='#0c101b'>
                                                    <i class='icon-heart-o s-18'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item '>
                                                <a class='no-ajaxy media-url' href='assets/media/track2.mp3' data-wave='assets/media/track2.json'>
                                                    <i class='icon-play ' style='
    font-size: 25px;
'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item'>
                                                <a href='album-single.html'><i class='icon-more s-18 pt-3'></i></a></li>
                                        </ul>
                                        <div class='text-center' style='
    margin-top: -0.5rem!important;
'>
                                            <h5>To Phir Ao</h5>
                                            <span>Joe Doe</span>
                                        </div>
                                    </div>
                                </div>
                                                        </div>
                                                    </figure>
						<div class='figure-title'>
                                                        <h6>To Phir Ao</h6>
                                                        <small>Atif Aslam</small>
                                                    </div>
                    </div>
					 <div class='col-md-2 mb-3'>
                       <figure class='mb-2'>
                                                        <div class='img-wrapper r-10'>
                                                            <img class=' r-10' src='assets/img/demo/a7.jpg'
                                                                 alt='/'>
                                                           <div class='img-overlay text-white'>
                                    <div class='figcaption'>
                                        <ul class='list-inline d-flex align-items-center justify-content-between'>
                                            <li class='list-inline-item'>
                                                <a href='#' class='snackbar' data-text='Added to favourites' data-pos='top-right' data-showaction='true' data-actiontext='ok' data-actiontextcolor='#fff' data-backgroundcolor='#0c101b'>
                                                    <i class='icon-heart-o s-18'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item '>
                                                <a class='no-ajaxy media-url' href='assets/media/track2.mp3' data-wave='assets/media/track2.json'>
                                                    <i class='icon-play ' style='
    font-size: 25px;
'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item'>
                                                <a href='album-single.html'><i class='icon-more s-18 pt-3'></i></a></li>
                                        </ul>
                                        <div class='text-center' style='
    margin-top: -0.5rem!important;
'>
                                            <h5>To Phir Ao</h5>
                                            <span>Joe Doe</span>
                                        </div>
                                    </div>
                                </div>
                                                        </div>
                                                    </figure>
						<div class='figure-title'>
                                                        <h6>To Phir Ao</h6>
                                                        <small>Atif Aslam</small>
                                                    </div>
                    </div>
					 <div class='col-md-2 mb-3'>
                       <figure class='mb-2'>
                                                        <div class='img-wrapper r-10'>
                                                            <img class=' r-10' src='assets/img/demo/a7.jpg'
                                                                 alt='/'>
                                                           <div class='img-overlay text-white'>
                                    <div class='figcaption'>
                                        <ul class='list-inline d-flex align-items-center justify-content-between'>
                                            <li class='list-inline-item'>
                                                <a href='#' class='snackbar' data-text='Added to favourites' data-pos='top-right' data-showaction='true' data-actiontext='ok' data-actiontextcolor='#fff' data-backgroundcolor='#0c101b'>
                                                    <i class='icon-heart-o s-18'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item '>
                                                <a class='no-ajaxy media-url' href='assets/media/track2.mp3' data-wave='assets/media/track2.json'>
                                                    <i class='icon-play ' style='
    font-size: 25px;
'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item'>
                                                <a href='album-single.html'><i class='icon-more s-18 pt-3'></i></a></li>
                                        </ul>
                                        <div class='text-center' style='
    margin-top: -0.5rem!important;
'>
                                            <h5>To Phir Ao</h5>
                                            <span>Joe Doe</span>
                                        </div>
                                    </div>
                                </div>
                                                        </div>
                                                    </figure>
						<div class='figure-title'>
                                                        <h6>To Phir Ao</h6>
                                                        <small>Atif Aslam</small>
                                                    </div>
                    </div>
					 <div class='col-md-2 mb-3'>
                       <figure class='mb-2'>
                                                        <div class='img-wrapper r-10'>
                                                            <img class=' r-10' src='assets/img/demo/a7.jpg'
                                                                 alt='/'>
                                                           <div class='img-overlay text-white'>
                                    <div class='figcaption'>
                                        <ul class='list-inline d-flex align-items-center justify-content-between'>
                                            <li class='list-inline-item'>
                                                <a href='#' class='snackbar' data-text='Added to favourites' data-pos='top-right' data-showaction='true' data-actiontext='ok' data-actiontextcolor='#fff' data-backgroundcolor='#0c101b'>
                                                    <i class='icon-heart-o s-18'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item '>
                                                <a class='no-ajaxy media-url' href='assets/media/track2.mp3' data-wave='assets/media/track2.json'>
                                                    <i class='icon-play ' style='
    font-size: 25px;
'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item'>
                                                <a href='album-single.html'><i class='icon-more s-18 pt-3'></i></a></li>
                                        </ul>
                                        <div class='text-center' style='
    margin-top: -0.5rem!important;
'>
                                            <h5>To Phir Ao</h5>
                                            <span>Joe Doe</span>
                                        </div>
                                    </div>
                                </div>
                                                        </div>
                                                    </figure>
						<div class='figure-title'>
                                                        <h6>To Phir Ao</h6>
                                                        <small>Atif Aslam</small>
                                                    </div>
                    </div>
					
					";
	
												}
												
                                            echo "        </div>
                
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
            </section>";
		
		}
	
	}
	
	
	
	
}



#song view by Languages
function Song_view_Languages()
{
	global $connect;
	
	
	$select = "select * from languages";
	$run = mysqli_query($connect,$select);
	
	
	
	while($fetch = mysqli_fetch_array($run)){
		
		
	$g_id = $fetch['0']; 
	$g_name = $fetch['1']; 
		
		if(!$language ){
	
echo  "   <section class='section mt-4'>
				  <div class='row row-eq-height'>
                    <div class='col-lg-12'>
                        <div class='card no-b mb-md-3 p-2'>
<div class='card-body no-p'>
<div class='tab-content' id='v-pills-tabContent1'>
				
				  <div class='card-body has-items-overlay playlist p-5'>
                <div class='d-flex relative align-items-center justify-content-between'>
                    <div class='mb-4'>
                        <h4>$g_name Songs</h4>
                        <p>Enjoy some new awesome music</p>
                    </div>
                    <a href='Songs.php?Language=$g_name'>View $g_name Songs<i class='icon-angle-right ml-3'></i></a>
                </div>
                <div class='lightSlider has-items-overlay playlist'
                     data-item='6'
                     data-item-lg='3'
                     data-item-md='3'
                     data-item-sm='2'
                     data-auto='false'
                     data-pager='false'
                     data-controls='true'
                     data-loop='false'>";
		
		$select_Audio = "select * from audio where fk_lang='$g_id'";
	$Audio_run = mysqli_query($connect,$select_Audio);
	while( $Audio_fetch = mysqli_fetch_array($Audio_run)){
												
												
												
	
		
	$id = $Audio_fetch['0'];
	$title = $Audio_fetch['1'];
	$artist = $Audio_fetch['2'];
	$album = $Audio_fetch['3'];
	$language = $Audio_fetch['4'];
	$year = $Audio_fetch['5'];
	$ganre = $Audio_fetch['6'];
	$lyrics = $Audio_fetch['7'];
	$composer = $Audio_fetch['8'];
	$descrip = $Audio_fetch['9'];
	$image = $Audio_fetch['10'];
	$audio = $Audio_fetch['11'];
											
												
	#for artist name
	$select_Artist = "select * from artist where id='$artist'";
	$artist_run = mysqli_query($connect,$select_Artist);
	$artist_fetch = mysqli_fetch_array($artist_run);
	$artist_name = $artist_fetch['1'];
	
	
	#for Album name
	$select_Album = "select * from album where id='$album'";
	$Album_run = mysqli_query($connect,$select_Album);
	$Album_fetch = mysqli_fetch_array($Album_run);
	$album_name = $Album_fetch['1'];											
												
												
                                               echo  "  <div class='col-md-2 mb-3'>
                       <figure class='mb-2'>
                                                        <div class='img-wrapper r-10'>
                                                            <img class=' r-10' src='dash-board/Artist/$artist_name/$album_name/$title/$image'
                                                                 alt='/'>
                                                           <div class='img-overlay text-white'>
                                    <div class='figcaption'>
                                        <ul class='list-inline d-flex align-items-center justify-content-between'>
                                            <li class='list-inline-item'>
                                                <a href='#' class='snackbar' data-text='Added to favourites' data-pos='top-right' data-showaction='true' data-actiontext='ok' data-actiontextcolor='#fff' data-backgroundcolor='#0c101b'>
                                                    <i class='icon-heart-o s-18'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item '>
                                                <a class='no-ajaxy media-url' href='dash-board/Artist/$artist_name/$album_name/$title/$audio' data-wave='dash-board/Artist/track1.json'>
                                                    <i class='icon-play ' style='
    font-size: 17px;
'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item'>
                                                <a href='Songs.php?Music-Player=$title'><i class='icon-more s-18 pt-3'></i></a></li>
                                        </ul>
                                        <div class='text-center' style='
    margin-top: -0.5rem!important;
'>
                                            <h5>$title</h5>
                                            <span>$artist_name</span>
                                        </div>
                                    </div>
                                </div>
                                                        </div>
                                                    </figure>
						<div class='figure-title'>
                                                        <h6>$title</h6>
                                                        <small>$artist_name</small>
                                                    </div>
                    </div>
					
					 <div class='col-md-2 mb-3'>
                       <figure class='mb-2'>
                                                        <div class='img-wrapper r-10'>
                                                            <img class=' r-10' src='assets/img/demo/a7.jpg'

                                                                 alt='/'>
                                                           <div class='img-overlay text-white'>
                                    <div class='figcaption'>
                                        <ul class='list-inline d-flex align-items-center justify-content-between'>
                                            <li class='list-inline-item'>
                                                <a href='#' class='snackbar' data-text='Added to favourites' data-pos='top-right' data-showaction='true' data-actiontext='ok' data-actiontextcolor='#fff' data-backgroundcolor='#0c101b'>
                                                    <i class='icon-heart-o s-18'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item '>
                                                <a class='no-ajaxy media-url' href='assets/media/track2.mp3' data-wave='assets/media/track2.json'>
                                                    <i class='icon-play ' style='
    font-size: 20px;
'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item'>
                                                <a href='album-single.html'><i class='icon-more s-18 pt-3'></i></a></li>
                                        </ul>
                                        <div class='text-center' style='
    margin-top: -0.5rem!important;
'>
                                            <h5>To Phir Ao</h5>
                                            <span>Joe Doe</span>
                                        </div>
                                    </div>
                                </div>
                                                        </div>
                                                    </figure>
						<div class='figure-title'>
                                                        <h6>To Phir Ao</h6>
                                                        <small>Atif Aslam</small>
                                                    </div>
                    </div>
					 <div class='col-md-2 mb-3'>
                       <figure class='mb-2'>
                                                        <div class='img-wrapper r-10'>
                                                            <img class=' r-10' src='assets/img/demo/a7.jpg'
                                                                 alt='/'>
                                                           <div class='img-overlay text-white'>
                                    <div class='figcaption'>
                                        <ul class='list-inline d-flex align-items-center justify-content-between'>
                                            <li class='list-inline-item'>
                                                <a href='#' class='snackbar' data-text='Added to favourites' data-pos='top-right' data-showaction='true' data-actiontext='ok' data-actiontextcolor='#fff' data-backgroundcolor='#0c101b'>
                                                    <i class='icon-heart-o s-18'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item '>
                                                <a class='no-ajaxy media-url' href='assets/media/track2.mp3' data-wave='assets/media/track2.json'>
                                                    <i class='icon-play ' style='
    font-size: 25px;
'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item'>
                                                <a href='album-single.html'><i class='icon-more s-18 pt-3'></i></a></li>
                                        </ul>
                                        <div class='text-center' style='
    margin-top: -0.5rem!important;
'>
                                            <h5>To Phir Ao</h5>
                                            <span>Joe Doe</span>
                                        </div>
                                    </div>
                                </div>
                                                        </div>
                                                    </figure>
						<div class='figure-title'>
                                                        <h6>To Phir Ao</h6>
                                                        <small>Atif Aslam</small>
                                                    </div>
                    </div>
					 <div class='col-md-2 mb-3'>
                       <figure class='mb-2'>
                                                        <div class='img-wrapper r-10'>
                                                            <img class=' r-10' src='assets/img/demo/a7.jpg'
                                                                 alt='/'>
                                                           <div class='img-overlay text-white'>
                                    <div class='figcaption'>
                                        <ul class='list-inline d-flex align-items-center justify-content-between'>
                                            <li class='list-inline-item'>
                                                <a href='#' class='snackbar' data-text='Added to favourites' data-pos='top-right' data-showaction='true' data-actiontext='ok' data-actiontextcolor='#fff' data-backgroundcolor='#0c101b'>
                                                    <i class='icon-heart-o s-18'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item '>
                                                <a class='no-ajaxy media-url' href='assets/media/track2.mp3' data-wave='assets/media/track2.json'>
                                                    <i class='icon-play ' style='
    font-size: 25px;
'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item'>
                                                <a href='album-single.html'><i class='icon-more s-18 pt-3'></i></a></li>
                                        </ul>
                                        <div class='text-center' style='
    margin-top: -0.5rem!important;
'>
                                            <h5>To Phir Ao</h5>
                                            <span>Joe Doe</span>
                                        </div>
                                    </div>
                                </div>
                                                        </div>
                                                    </figure>
						<div class='figure-title'>
                                                        <h6>To Phir Ao</h6>
                                                        <small>Atif Aslam</small>
                                                    </div>
                    </div>
					 <div class='col-md-2 mb-3'>
                       <figure class='mb-2'>
                                                        <div class='img-wrapper r-10'>
                                                            <img class=' r-10' src='assets/img/demo/a7.jpg'
                                                                 alt='/'>
                                                           <div class='img-overlay text-white'>
                                    <div class='figcaption'>
                                        <ul class='list-inline d-flex align-items-center justify-content-between'>
                                            <li class='list-inline-item'>
                                                <a href='#' class='snackbar' data-text='Added to favourites' data-pos='top-right' data-showaction='true' data-actiontext='ok' data-actiontextcolor='#fff' data-backgroundcolor='#0c101b'>
                                                    <i class='icon-heart-o s-18'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item '>
                                                <a class='no-ajaxy media-url' href='assets/media/track2.mp3' data-wave='assets/media/track2.json'>
                                                    <i class='icon-play ' style='
    font-size: 25px;
'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item'>
                                                <a href='album-single.html'><i class='icon-more s-18 pt-3'></i></a></li>
                                        </ul>
                                        <div class='text-center' style='
    margin-top: -0.5rem!important;
'>
                                            <h5>To Phir Ao</h5>
                                            <span>Joe Doe</span>
                                        </div>
                                    </div>
                                </div>
                                                        </div>
                                                    </figure>
						<div class='figure-title'>
                                                        <h6>To Phir Ao</h6>
                                                        <small>Atif Aslam</small>
                                                    </div>
                    </div>
					 <div class='col-md-2 mb-3'>
                       <figure class='mb-2'>
                                                        <div class='img-wrapper r-10'>
                                                            <img class=' r-10' src='assets/img/demo/a7.jpg'
                                                                 alt='/'>
                                                           <div class='img-overlay text-white'>
                                    <div class='figcaption'>
                                        <ul class='list-inline d-flex align-items-center justify-content-between'>
                                            <li class='list-inline-item'>
                                                <a href='#' class='snackbar' data-text='Added to favourites' data-pos='top-right' data-showaction='true' data-actiontext='ok' data-actiontextcolor='#fff' data-backgroundcolor='#0c101b'>
                                                    <i class='icon-heart-o s-18'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item '>
                                                <a class='no-ajaxy media-url' href='assets/media/track2.mp3' data-wave='assets/media/track2.json'>
                                                    <i class='icon-play ' style='
    font-size: 25px;
'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item'>
                                                <a href='album-single.html'><i class='icon-more s-18 pt-3'></i></a></li>
                                        </ul>
                                        <div class='text-center' style='
    margin-top: -0.5rem!important;
'>
                                            <h5>To Phir Ao</h5>
                                            <span>Joe Doe</span>
                                        </div>
                                    </div>
                                </div>
                                                        </div>
                                                    </figure>
						<div class='figure-title'>
                                                        <h6>To Phir Ao</h6>
                                                        <small>Atif Aslam</small>
                                                    </div>
                    </div>
					 <div class='col-md-2 mb-3'>
                       <figure class='mb-2'>
                                                        <div class='img-wrapper r-10'>
                                                            <img class=' r-10' src='assets/img/demo/a7.jpg'
                                                                 alt='/'>
                                                           <div class='img-overlay text-white'>
                                    <div class='figcaption'>
                                        <ul class='list-inline d-flex align-items-center justify-content-between'>
                                            <li class='list-inline-item'>
                                                <a href='#' class='snackbar' data-text='Added to favourites' data-pos='top-right' data-showaction='true' data-actiontext='ok' data-actiontextcolor='#fff' data-backgroundcolor='#0c101b'>
                                                    <i class='icon-heart-o s-18'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item '>
                                                <a class='no-ajaxy media-url' href='assets/media/track2.mp3' data-wave='assets/media/track2.json'>
                                                    <i class='icon-play ' style='
    font-size: 25px;
'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item'>
                                                <a href='album-single.html'><i class='icon-more s-18 pt-3'></i></a></li>
                                        </ul>
                                        <div class='text-center' style='
    margin-top: -0.5rem!important;
'>
                                            <h5>To Phir Ao</h5>
                                            <span>Joe Doe</span>
                                        </div>
                                    </div>
                                </div>
                                                        </div>
                                                    </figure>
						<div class='figure-title'>
                                                        <h6>To Phir Ao</h6>
                                                        <small>Atif Aslam</small>
                                                    </div>
                    </div>
					
					";
												
												}
												
                                            echo "        </div>
                
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
            </section>";
		}
		
	}
	
}




#Single song play for Get_Ganre And Get_Languages
function Single_song_play()
{
	global $connect;
	
	$get_name = $_GET['Music-Player'];
	
	$select_Audio = "select * from audio where title='$get_name'";
	$Audio_run = mysqli_query($connect,$select_Audio);
	$Audio_fetch = mysqli_fetch_array($Audio_run);
		$id = $Audio_fetch['0'];
	$title = $Audio_fetch['1'];
	$artist = $Audio_fetch['2'];
	$album = $Audio_fetch['3'];
	$language = $Audio_fetch['4'];
	$year = $Audio_fetch['5'];
	$ganre = $Audio_fetch['6'];
	$lyrics = $Audio_fetch['7'];
	$composer = $Audio_fetch['8'];
	$descrip = $Audio_fetch['9'];
	$image = $Audio_fetch['10'];
	$audio = $Audio_fetch['11'];
	
								
	
	$selectt = "select * from artist where id='$artist'";
	$run = mysqli_query($connect,$selectt);
	$f = mysqli_fetch_array($run);
	$artist_name_single = $f['1'];
	
	
	$selecttt = "select * from album where id='$album'";
	$runn = mysqli_query($connect,$selecttt);
	$ff = mysqli_fetch_array($runn);
	$album_name_single = $ff['1'];
	
	
	$selectttt = "select * from years where id='$year'";
	$runnn = mysqli_query($connect,$selectttt);
	$fff = mysqli_fetch_array($runnn);
	$year_name_single = $fff['3'];
	
	 $getID3 = new getID3;			  
    $filename = "dash-board/Artist/$artist_name_single/$album_name_single/$title/$audio";
    $ThisFileInfo = $getID3->analyze($filename);
    $getID3->CopyTagsToComments($ThisFileInfo);
    
	
     echo    "<section class='relative imggg' data-bg-possition='center'
                 >
            <div class='wrapper has-bottom-gradient'>
                <div class='row pt-5 ml-lg-5 mr-lg-5'>
                    <div class='col-md-10 offset-1'>
                        <div class='row my-5 pt-5'>
                            <div class='col-md-3'>
                                <img src='dash-board/Artist/$artist_name_single/$album_name_single/$title/$image' style='height: 250px ;width: 200px ;' alt='/'>
                            </div>
                            <div class='col-md-9'>
                                <div class='d-md-flex align-items-center justify-content-between'>
                                    <h1 class='my-3 text-white '>$title</h1>
                                    <div class='ml-auto mb-2'>
                                        <a href='#' style=' color: #fff;' class='snackbar' data-text='Bookmark clicked'
                                           data-pos='top-right'
                                           data-showAction='true'
                                           data-actionText='ok'
                                           data-actionTextColor='#fff'
                                           data-backgroundColor='#0c101b'><i class='icon-bookmark s-24'></i></a>
                                        <a href='#' style=' color: #fff;' class='snackbar ml-3' data-text='You like this song'
                                           data-pos='top-right'
                                           data-showAction='true'
                                           data-actionText='ok'
                                           data-actionTextColor='#fff'
                                           data-backgroundColor='#0c101b'><i class='icon-heart s-24'></i></a>
                                        <a href='#' style=' color: #fff;' class='snackbar ml-3' data-text='Thanks for sharing'
                                           data-pos='top-right'
                                           data-showAction='true'
                                           data-actionText='ok'
                                           data-actionTextColor='#fff'
                                           data-backgroundColor='#0c101b'><i class='icon-share-1 s-24'></i></a>
                                    </div>
                                </div>

                                <div class='text-white my-2'>
                                   
										<p >Album: $album_name_single</p>
										  <p>Artist: $artist_name_single</p>
										  <p>Release: $year_name_single</p>
										  
                                </div>
                                <div class='pt-3' >
								
                                    <a href='#' class='btn btn-primary btn-lg'> <i class='icon-play s-28'></i> PLAY</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='bottom-gradient '></div>
        </section>
       

        <div class='wrapper p-3 p-lg-5'>
          
            <section>
                <div class='row'>
                    <div class='col-lg-10 offset-lg-1'>
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class='playlist'>
                                    <ul class='list-group'>
										
	
	                                
	
										  
									  
                                      <li class='list-group-item my-1'>
                                            <div class='d-flex align-items-center'>
                                                <div class='col-1'>
                                                    <a class='no-ajaxy media-url' href='dash-board/Artist/$artist_name_single/$album_name_single/$title/$audio' data-wave='dash-board/Artist/track1.json'>
                                                        <i class='icon-play s-28'></i>
                                                    </a>
                                                </div>
												
												<div class='col-6'>
                                                       <figure class='avatar-md float-left  mr-3 mt-1'>
                                                           <img class='r-3' src='dash-board/Artist/$artist_name_single/$album_name_single/$title/$image' alt=''>
                                                       </figure>
                                                       <h6>$title</h6>$artist_name_single
                                                   </div>
												
                                                <span class=' ml-auto'>" .$ThisFileInfo['playtime_string']. "</span>
                                                <a href='#' class='ml-auto'><i class='icon-share-1'></i></a>
                                                <div class='ml-auto'>
                                                    <a href='#' class='btn btn-outline-primary btn-sm d-none d-lg-block'>Buy at
                                                        iTunes</a>
                                                </div>
                                            </div>
                                        </li>
									  
                                       
                                   </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        

        </div>";
	
	
}



#all songs by ganres
function all_song_ganre()
{
	
	global $connect;
	$get_ganre = $_GET['Ganre'];
	
	$select = "select * from ganres where name='$get_ganre'";
	$run = mysqli_query($connect,$select);
	
    $fetch = mysqli_fetch_array($run);
		
	$g_id = $fetch['0']; 
	$g_name = $fetch['1']; 
	
	
	$select_Audio = "select * from audio where fk_ganre='$g_id'";
	$Audio_run = mysqli_query($connect,$select_Audio);
	
	
	
	
	
	
echo  "<section class='section mt-4'>
	
                <div class=' row-eq-height'>
                    <div class='col-lg-12'>
                        <div class='card no-b mb-md-3 p-2'>
<div class='card-body no-p'>
<div class='tab-content' id='v-pills-tabContent1'>

	
	
  <div class='card-body has-items-overlay playlist p-5'>
	  
	   <div class='d-flex relative align-items-center justify-content-between'>
                    <div class='mb-4'>
                        <h4>$g_name Songs</h4>
                        <p>Enjoy some new awesome music</p>
                    </div>
                   
                </div>
                                            <div class='row'>";
											
	                                   while($Audio_fetch = mysqli_fetch_array($Audio_run))
									   {
										   	$id = $Audio_fetch['0'];
	$title = $Audio_fetch['1'];
	$artist = $Audio_fetch['2'];
	$album = $Audio_fetch['3'];
	$language = $Audio_fetch['4'];
	$year = $Audio_fetch['5'];
	$ganre = $Audio_fetch['6'];
	$lyrics = $Audio_fetch['7'];
	$composer = $Audio_fetch['8'];
	$descrip = $Audio_fetch['9'];
	$image = $Audio_fetch['10'];
	$audio = $Audio_fetch['11'];
										   
										   
	$selectt = "select * from artist where id='$artist'";
	$run = mysqli_query($connect,$selectt);
	$f = mysqli_fetch_array($run);
	$artist_name = $f['1'];
	
	
	$selecttt = "select * from album where id='$album'";
	$runn = mysqli_query($connect,$selecttt);
	$ff = mysqli_fetch_array($runn);
	$album_name = $ff['1'];
	
                                                echo "<div class='col-md-2 mb-3'>
                                                    <figure class='mb-2'>
                                                        <div class='img-wrapper r-10'>
                                                            <img class=' r-10' src='dash-board/Artist/$artist_name/$album_name/$title/$image'
                                                                 alt='/'>
                                                           <div class='img-overlay text-white'>
                                    <div class='figcaption'>
                                        <ul class='list-inline d-flex align-items-center justify-content-between'>
                                            <li class='list-inline-item'>
                                                <a href='#' class='snackbar' data-text='Added to favourites' data-pos='top-right' data-showaction='true' data-actiontext='ok' data-actiontextcolor='#fff' data-backgroundcolor='#0c101b'>
                                                    <i class='icon-heart-o s-18'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item '>
                                                <a class='no-ajaxy media-url' href='dash-board/Artist/$artist_name/$album_name/$title/$audio' data-wave='dash-board/Artist/track1.json'>
                                                    <i class='icon-play s-48'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item'>
                                                <a href='Songs.php?Music-Player=$title'><i class='icon-more s-18 pt-3'></i></a></li>
                                        </ul>
                                        <div class='text-center mt-2'>
                                            <h5>$title</h5>
                                            <span>$artist_name</span>
                                        </div>
                                    </div>
                                </div>
                                                        </div>
                                                    </figure>
                                                    <div class='figure-title'>
                                                        <h6>$title</h6>
                                                        <small>$artist_name</small>
                                                    </div>
                                                </div>";
												}
												
												
												
                                           echo "</div>
	  
	  
	  
                                          
                                        </div>
	</div>
	</div>
	</div>
	</div>
	</div>
</section>";
	
	
	
}





#all songs by languages
function all_song_language()
{
	
	global $connect;
	$get_lang = $_GET['Language'];
	
	$select = "select * from languages where name='$get_lang'";
	$run = mysqli_query($connect,$select);
	
    $fetch = mysqli_fetch_array($run);
		
	$g_id = $fetch['0']; 
	$g_name = $fetch['1']; 
	
	
	$select_Audio = "select * from audio where fk_lang='$g_id'";
	$Audio_run = mysqli_query($connect,$select_Audio);
	
	
	
	
	
	
echo  "<section class='section mt-4'>
	
                <div class=' row-eq-height'>
                    <div class='col-lg-12'>
                        <div class='card no-b mb-md-3 p-2'>
<div class='card-body no-p'>
<div class='tab-content' id='v-pills-tabContent1'>

	
	
  <div class='card-body has-items-overlay playlist p-5'>
	  
	   <div class='d-flex relative align-items-center justify-content-between'>
                    <div class='mb-4'>
                        <h4>$g_name Songs</h4>
                        <p>Enjoy some new awesome music</p>
                    </div>
                   
                </div>
                                            <div class='row'>";
											
	                                   while($Audio_fetch = mysqli_fetch_array($Audio_run))
									   {
										   	$id = $Audio_fetch['0'];
	$title = $Audio_fetch['1'];
	$artist = $Audio_fetch['2'];
	$album = $Audio_fetch['3'];
	$language = $Audio_fetch['4'];
	$year = $Audio_fetch['5'];
	$ganre = $Audio_fetch['6'];
	$lyrics = $Audio_fetch['7'];
	$composer = $Audio_fetch['8'];
	$descrip = $Audio_fetch['9'];
	$image = $Audio_fetch['10'];
	$audio = $Audio_fetch['11'];
										   
										   
	$selectt = "select * from artist where id='$artist'";
	$run = mysqli_query($connect,$selectt);
	$f = mysqli_fetch_array($run);
	$artist_name = $f['1'];
	
	
	$selecttt = "select * from album where id='$album'";
	$runn = mysqli_query($connect,$selecttt);
	$ff = mysqli_fetch_array($runn);
	$album_name = $ff['1'];
	
                                                echo "<div class='col-md-2 mb-3'>
                                                    <figure class='mb-2'>
                                                        <div class='img-wrapper r-10'>
                                                            <img class=' r-10' src='dash-board/Artist/$artist_name/$album_name/$title/$image'
                                                                 alt='/'>
                                                           <div class='img-overlay text-white'>
                                    <div class='figcaption'>
                                        <ul class='list-inline d-flex align-items-center justify-content-between'>
                                            <li class='list-inline-item'>
                                                <a href='#' class='snackbar' data-text='Added to favourites' data-pos='top-right' data-showaction='true' data-actiontext='ok' data-actiontextcolor='#fff' data-backgroundcolor='#0c101b'>
                                                    <i class='icon-heart-o s-18'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item '>
                                                <a class='no-ajaxy media-url' href='dash-board/Artist/$artist_name/$album_name/$title/$audio' data-wave='dash-board/Artist/track1.json'>
                                                    <i class='icon-play s-48'></i>
                                                </a>
                                            </li>
                                            <li class='list-inline-item'>
                                                <a href='Songs.php?Music-Player=$title'><i class='icon-more s-18 pt-3'></i></a></li>
                                        </ul>
                                        <div class='text-center mt-2'>
                                            <h5>$title</h5>
                                            <span>$artist_name</span>
                                        </div>
                                    </div>
                                </div>
                                                        </div>
                                                    </figure>
                                                    <div class='figure-title'>
                                                        <h6>$title</h6>
                                                        <small>$artist_name</small>
                                                    </div>
                                                </div>";
												}
												
												
												
                                           echo "</div>
	  
	  
	  
                                          
                                        </div>
	</div>
	</div>
	</div>
	</div>
	</div>
</section>";
	
	
	
}



#all Artist
function All_Artist()
{
	global $connect;
	
	$select = "select * from artist";
	$run = mysqli_query($connect,$select);
	
	while($fetch = mysqli_fetch_array($run))
	{
		$id = $fetch['0'];
		$name = $fetch['1'];
		$song_type = $fetch['2'];
		$bio = $fetch['3'];
		$image = $fetch['4'];
		
		#for songs count 
		$ad = "select * from audio where fk_artist='$id'";
		$runnn = mysqli_query($connect,$ad);
		$count_song = mysqli_num_rows($runnn);
		
		
		#for Album count
		$al = "select * from album where fk_artist='$id' ";
		$runn = mysqli_query($connect,$al);
		$count = mysqli_num_rows($runn);
		
		echo 	"<div class='col-md-4 mb-3' style='margin-top: 40px;'>
                <figure class='avatar avatar-md float-left mr-3 mt-1'>
                    <img src='dash-board/Artist/$name/$image' alt=''>
                </figure>
                <div>
                    <h6><a href='Artist.php?Album=$name'>$name</a></h6>
                    $count Albums - $count_song Songs
                </div>
            </div>";
			
        
		
		
		
	}
}




#All Album by Artist
function Artist_All_Album()
{
	$get_name = $_GET['Album'];
	
	global $connect;
	
	$selectt = "select * from artist where name='$get_name'";
	$run_selectt = mysqli_query($connect,$selectt);
	$f = mysqli_fetch_array($run_selectt);
	$a_id = $f['0'];
	
	$select = "select * from album where fk_artist='$a_id'";
	
	$run_select = mysqli_query($connect,$select);
	
	if($run_select){
		$sno = 0;
		while($fetch = mysqli_fetch_array($run_select))
		{
			$id = $fetch['0'];
			$title = $fetch['1'];
			$year = $fetch['2'];
			$artist = $fetch['3'];
			$language = $fetch['4'];
			$image = $fetch['5'];
			
			
			
			$select_artist = "select * from artist where id='$artist'";
			$run_artist = mysqli_query($connect,$select_artist);
			$fetch_artist = mysqli_fetch_array($run_artist);
			$artist_name = $fetch_artist['1'];
			
			
			
	
	      if($title){
			  
			   echo "<div class='col-lg-3 col-md-2 col-sm-3 my-2'>
                            <figure>
                                <div class='img-wrapper'>
                                    <img src='dash-board/Artist/$artist_name/$title/$image' style='height: 255px ;width: 400px ;' alt='/'>
                                    <div class='img-overlay text-white text-center'>
                                        <a href='Albums.php?Albums=$title'>
                                            <div class='figcaption mt-3'>
                                                <i class='icon-link s-48'></i>
                                                <h5 class='mt-5'>$title</h5>
                                                <span>$artist_name</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class='figure-title text-center p-2'>
                                        <h5>$title</h5>
                                        <span>$artist_name</span>
                                    </div>
                                </div>
                            </figure>
                        </div>";
			  
	                       
		  }else{
			   echo "<tr>
                     <td></td>
                     <td class='text-danger'>Result Not found</td>
                     <td></td>
			  </tr>";
		  }
		}
	}else{
		
		
		
	}
	
}



#all lyrical artist
function All_Lyrical()
{
	global $connect;
	
	$select = "select * from lyrics";
	$run = mysqli_query($connect,$select);
	
	while($fetch = mysqli_fetch_array($run))
	{
		$id = $fetch['0'];
		$name = $fetch['1'];
		$bio = $fetch['2'];
		$image = $fetch['3'];
		
		#for get Album id 
		$ad = "select * from audio where fk_lyrics='$id'";
		$runnn = mysqli_query($connect,$ad);
		$count_song = mysqli_num_rows($runnn);
		$f = mysqli_fetch_array($runnn);
		$fk_album = $f['3'];
		
		#for Album count
		$al = "select * from album where id='$fk_album'";
		$runn = mysqli_query($connect,$al);
		$count = mysqli_num_rows($runn);
		
		echo 	"<div class='col-md-4 mb-3' style='margin-top: 40px;'>
                <figure class='avatar avatar-md float-left mr-3 mt-1'>
                    <img src='dash-board/Lyrical/$name/$image' alt=''>
                </figure>
                <div>
                    <h6><a href='Artist.php?Album=$name'>$name</a></h6>
                    $count Albums - $count_song Songs
                </div>
            </div>";
			
        
		
		
		
	}
}



#All Album by lyrical
function Lyrical_All_Album()
{
	$get_name = $_GET['Album'];
	
	global $connect;
	
	$selectt = "select * from lyrics where name='$get_name'";
	$run_selectt = mysqli_query($connect,$selectt);
	$f = mysqli_fetch_array($run_selectt);
	$a_id = $f['0'];
	
	
	$selectl = "select * from audio where fk_lyrics='$a_id'";
	$run_selectl = mysqli_query($connect,$selectl);
	$fetchl = mysqli_fetch_array($run_selectl);
	$al_id = $fetchl['3'];
	
	$select = "select * from album where id='$al_id'";
	
	$run_select = mysqli_query($connect,$select);
	
	if($run_select){
		$sno = 0;
		while($fetch = mysqli_fetch_array($run_select))
		{
			$id = $fetch['0'];
			$title = $fetch['1'];
			$year = $fetch['2'];
			$artist = $fetch['3'];
			$language = $fetch['4'];
			$image = $fetch['5'];
			
			
			
			$select_artist = "select * from artist where id='$artist'";
			$run_artist = mysqli_query($connect,$select_artist);
			$fetch_artist = mysqli_fetch_array($run_artist);
			$artist_name = $fetch_artist['1'];
			
			
			
	
	      if($title){
			  
			   echo "<div class='col-lg-3 col-md-2 col-sm-3 my-2'>
                            <figure>
                                <div class='img-wrapper'>
                                    <img src='dash-board/Artist/$artist_name/$title/$image' style='height: 255px ;width: 400px ;' alt='/'>
                                    <div class='img-overlay text-white text-center'>
                                        <a href='Albums.php?Albums=$title'>
                                            <div class='figcaption mt-3'>
                                                <i class='icon-link s-48'></i>
                                                <h5 class='mt-5'>$title</h5>
                                                <span>$artist_name</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class='figure-title text-center p-2'>
                                        <h5>$title</h5>
                                        <span>$artist_name</span>
                                    </div>
                                </div>
                            </figure>
                        </div>";
			  
	                       
		  }else{
			   echo "<tr>
                     <td></td>
                     <td class='text-danger'>Result Not found</td>
                     <td></td>
			  </tr>";
		  }
		}
	}else{
		
		
		
	}
	
}


#For videos songs
#All Album view of video songs
function Videos_song_All_Album()
{
	
	global $connect;
	
	$s = "select * from videos";
	$r = mysqli_query($connect,$s);
	$f = mysqli_fetch_array($r);
	$fk_album = $f['3'];
	
	
	$select = "select * from album where id='$fk_album'";
	
	$run_select = mysqli_query($connect,$select);
	
	if($run_select){
		$sno = 0;
		while($fetch = mysqli_fetch_array($run_select))
		{
			$id = $fetch['0'];
			$title = $fetch['1'];
			$year = $fetch['2'];
			$artist = $fetch['3'];
			$language = $fetch['4'];
			$image = $fetch['5'];
			
			$select_year = "select * from years where id='$year'";
			$run_year = mysqli_query($connect,$select_year);
			$fetch_year = mysqli_fetch_array($run_year);
			$year_name = $fetch_year['3'];
			
			$select_artist = "select * from artist where id='$artist'";
			$run_artist = mysqli_query($connect,$select_artist);
			$fetch_artist = mysqli_fetch_array($run_artist);
			$artist_name = $fetch_artist['1'];
			
			$select_language = "select * from languages where id='$language'";
			$run_language = mysqli_query($connect,$select_language);
			$fetch_language = mysqli_fetch_array($run_language);
			$language_name = $fetch_language['1'];
			
			
	
	      if($fetch){
			  
			   echo "<div class='col-lg-3 col-md-2 col-sm-3 my-2'>
                            <figure>
                                <div class='img-wrapper'>
                                    <img src='dash-board/Artist/$artist_name/$title/$image' style='height: 255px ;width: 400px ;' alt='/'>
                                    <div class='img-overlay text-white text-center'>
                                        <a href='Albums.php?Albums=$title'>
                                            <div class='figcaption mt-3'>
                                                <i class='icon-link s-48'></i>
                                                <h5 class='mt-5'>$title</h5>
                                                <span>$artist_name</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class='figure-title text-center p-2'>
                                        <h5>$title</h5>
                                        <span>$artist_name</span>
                                    </div>
                                </div>
                            </figure>
                        </div>";
			  
	                       
		  }else{
			   echo "<tr>
                     <td></td>
                     <td class='text-danger'>Result Not found</td>
                     <td></td>
			  </tr>";
		  }
		}
	}else{
		
		
		
	}
	
}



#single video album view
function Single_View_video_Album()
{
	global $connect;
	$get_name = $_GET['Albums'];
	
	$select = "select * from album where name='$get_name'";
	$select_run = mysqli_query($connect,$select);
	$album_fetch = mysqli_fetch_array($select_run);
	$fk_album = $album_fetch['0'];
	$album_name_single = $album_fetch['1'];
	$album_image = $album_fetch['5'];
	$artist_id = $album_fetch['3'];
	
	$selectt = "select * from artist where id='$artist_id'";
	$run = mysqli_query($connect,$selectt);
	$f = mysqli_fetch_array($run);
	$artist_name_single = $f['1'];
	
	$select_Video = "select * from videos where fk_album='$fk_album'";
	$Video_run = mysqli_query($connect,$select_Video);
	
	
	
     echo    "
       

        <div class='wrapper p-3 p-lg-5'>
          <div class='d-flex' style='margin-left: 88px;'>
               <div class='mb-4'>
                   <h4>$album_name_single Video Songs </h4>
                   <p>Checkout new $album_name_single videos</p>
               </div>
           </div>
            <section>
                <div class='row'>
                    <div class='col-lg-10 offset-lg-1'>
                        <div class='row'>
                           ";
										
	
	                                  while($Video_fetch = mysqli_fetch_array($Video_run))
									  {
										  
										  
	
	
	$id = $Video_fetch['0'];
	$title = $Video_fetch['1'];
	$artist = $Video_fetch['2'];
	$album = $Video_fetch['3'];
	$language = $Video_fetch['4'];
	$year = $Video_fetch['5'];
	$ganre = $Video_fetch['6'];
	$lyrics = $Video_fetch['7'];
	$composer = $Video_fetch['8'];
	$descrip = $Video_fetch['9'];
	$image = $Video_fetch['10'];
	$video = $Video_fetch['11'];
	
	
	#for artist name
	$select_Artist = "select * from artist where id='$artist'";
	$artist_run = mysqli_query($connect,$select_Artist);
	$artist_fetch = mysqli_fetch_array($artist_run);
	$artist_name = $artist_fetch['1'];
	
	#for language name
	$select_language = "select * from languages where id='$language'";
	$language_run = mysqli_query($connect,$select_language);
	$language_fetch = mysqli_fetch_array($language_run);
	$language_name = $language_fetch['1'];
	
	#for Year name
	$select_year = "select * from years where id='$year'";
	$year_run = mysqli_query($connect,$select_year);
	$year_fetch = mysqli_fetch_array($year_run);
	$year_name = $year_fetch['1'];
	
	#for lyrics name
	$select_lyrics = "select * from lyrics where id='$lyrics'";
	$lyrics_run = mysqli_query($connect,$select_lyrics);
	$lyrics_fetch = mysqli_fetch_array($lyrics_run);
	$lyrics_name = $lyrics_fetch['1'];
	
	#for Album name
	$select_Album = "select * from album where id='$album'";
	$Album_run = mysqli_query($connect,$select_Album);
	$Album_fetch = mysqli_fetch_array($Album_run);
	$album_name = $Album_fetch['1'];
										  
	
    $getID3 = new getID3;			  
    $filename = "dash-board/Artist/$artist_name/$album_name/$title/$video";
    $ThisFileInfo = $getID3->analyze($filename);
    $getID3->CopyTagsToComments($ThisFileInfo);
    
										  
									  
                                      echo   " <div class='col-lg-3 col-md-6 mb-4'>
                   <div class='card no-b'>
				    <a href='Video.php?Watch=$title'>
                       <img src='dash-board/Artist/$artist_name/$album_name/$title/$image' alt='' style='height: 200px; width: 100%;' >
					    </a>
                       <div class='p-3'>
                           <div class='mb-1'>
                               <a href='Video.php?Watch=$title'>
                                   <h4>$title</h4>
                               </a>
                           </div>
                           <small><a href='Artist.php?Album=$artist_name'> $artist_name</a> - $album_name</small>
                       </div>
                   </div>
               </div>";
									  }
                                       
                                    echo "
                        </div>
                    </div>
                </div>
            </section>
        

        </div>";
	
	
	
	
	
	
	
	
	
	
}



function Single_video_song_play()
{
	global $connect;
	
	$get_name = $_GET['Watch'];
	
	$select_Video = "select * from videos where title='$get_name'";
	$Video_run = mysqli_query($connect,$select_Video);
	$Video_fetch = mysqli_fetch_array($Video_run);
		$id = $Video_fetch['0'];
	$title = $Video_fetch['1'];
	$artist = $Video_fetch['2'];
	$album = $Video_fetch['3'];
	$language = $Video_fetch['4'];
	$year = $Video_fetch['5'];
	$ganre = $Video_fetch['6'];
	$lyrics = $Video_fetch['7'];
	$composer = $Video_fetch['8'];
	$descrip = $Video_fetch['9'];
	$image = $Video_fetch['10'];
	$video = $Video_fetch['11'];
	
								
	
	$selectt = "select * from artist where id='$artist'";
	$run = mysqli_query($connect,$selectt);
	$f = mysqli_fetch_array($run);
	$artist_name_single = $f['1'];
	
	
	$selecttt = "select * from album where id='$album'";
	$runn = mysqli_query($connect,$selecttt);
	$ff = mysqli_fetch_array($runn);
	$album_name_single = $ff['1'];
	
	
	$selectttt = "select * from years where id='$year'";
	$runnn = mysqli_query($connect,$selectttt);
	$fff = mysqli_fetch_array($runnn);
	$year_name_single = $fff['3'];
	
	 $getID3 = new getID3;			  
    $filename = "dash-board/Artist/$artist_name_single/$album_name_single/$title/$video";
    $ThisFileInfo = $getID3->analyze($filename);
    $getID3->CopyTagsToComments($ThisFileInfo);
    
	
     echo    " <div class='video-responsive'>
                    
					
                    <div class='embed-responsive embed-responsive-16by9'>
                       <video  class='embed-responsive-item' height='540' controls autoplay  poster='dash-board/Artist/$artist_name_single/$album_name_single/$title/$image'>
						<source src='dash-board/Artist/$artist_name_single/$album_name_single/$title/$video' >
						</video>
						
						
                    </div>
					<div class='card no-b r-0'>
                        <div class='card-body p-4'>
                            <div class='d-lg-flex align-items-center'>
                                <h1 class='my-3 h4'>$title | $artist_name_single | $album_name_single</h1>
                                <div class='ml-auto'>
                                    <a href='#' class='snackbar' data-text='Added to favourites'
                                       data-pos='top-right'
                                       data-showAction='true'
                                       data-actionText='ok'
                                       data-actionTextColor='#fff'
                                       data-backgroundColor='#0c101b'><i class='icon-bookmark s-24'></i></a>
                                    <a href='#' class='snackbar ml-3' data-text='Added to favourites'
                                       data-pos='top-right'
                                       data-showAction='true'
                                       data-actionText='ok'
                                       data-actionTextColor='#fff'
                                       data-backgroundColor='#0c101b'><i class='icon-heart s-24'></i></a>
                                    <a href='#' class='snackbar ml-3' data-text='Added to favourites'
                                       data-pos='top-right'
                                       data-showAction='true'
                                       data-actionText='ok'
                                       data-actionTextColor='#fff'
                                       data-backgroundColor='#0c101b'><i class='icon-share-1 s-24'></i></a>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>";
	
	
}



#all video by 1 album view
function All_videos_by_one_Album()
{
	global $connect;
	$get_name = $_GET['Watch'];
	
	$select_Video_get = "select * from videos where title='$get_name'";
	$Video_get_run = mysqli_query($connect,$select_Video_get);
	$fetch_get_video = mysqli_fetch_array($Video_get_run);
	$get_album = $fetch_get_video['3'];
	
	$select = "select * from album where id='$get_album'";
	$select_run = mysqli_query($connect,$select);
	$album_fetch = mysqli_fetch_array($select_run);
	$fk_album = $album_fetch['0'];
	$album_name_single = $album_fetch['1'];
	$album_image = $album_fetch['5'];
	$artist_id = $album_fetch['3'];
	
	$selectt = "select * from artist where id='$artist_id'";
	$run = mysqli_query($connect,$selectt);
	$f = mysqli_fetch_array($run);
	$artist_name_single = $f['1'];
	
	$select_Video = "select * from videos where fk_album='$fk_album'";
	$Video_run = mysqli_query($connect,$select_Video);
	
				
	
	                                  while($Video_fetch = mysqli_fetch_array($Video_run))
									  {
										  
										  
	
	
	$id = $Video_fetch['0'];
	$title = $Video_fetch['1'];
	$artist = $Video_fetch['2'];
	$album = $Video_fetch['3'];
	$language = $Video_fetch['4'];
	$year = $Video_fetch['5'];
	$ganre = $Video_fetch['6'];
	$lyrics = $Video_fetch['7'];
	$composer = $Video_fetch['8'];
	$descrip = $Video_fetch['9'];
	$image = $Video_fetch['10'];
	$video = $Video_fetch['11'];
	
	
	#for artist name
	$select_Artist = "select * from artist where id='$artist'";
	$artist_run = mysqli_query($connect,$select_Artist);
	$artist_fetch = mysqli_fetch_array($artist_run);
	$artist_name = $artist_fetch['1'];
	
	#for language name
	$select_language = "select * from languages where id='$language'";
	$language_run = mysqli_query($connect,$select_language);
	$language_fetch = mysqli_fetch_array($language_run);
	$language_name = $language_fetch['1'];
	
	#for Year name
	$select_year = "select * from years where id='$year'";
	$year_run = mysqli_query($connect,$select_year);
	$year_fetch = mysqli_fetch_array($year_run);
	$year_name = $year_fetch['1'];
	
	#for lyrics name
	$select_lyrics = "select * from lyrics where id='$lyrics'";
	$lyrics_run = mysqli_query($connect,$select_lyrics);
	$lyrics_fetch = mysqli_fetch_array($lyrics_run);
	$lyrics_name = $lyrics_fetch['1'];
	
	#for Album name
	$select_Album = "select * from album where id='$album'";
	$Album_run = mysqli_query($connect,$select_Album);
	$Album_fetch = mysqli_fetch_array($Album_run);
	$album_name = $Album_fetch['1'];
										  
	
    $getID3 = new getID3;			  
    $filename = "dash-board/Artist/$artist_name/$album_name/$title/$video";
    $ThisFileInfo = $getID3->analyze($filename);
    $getID3->CopyTagsToComments($ThisFileInfo);
    
										  
									  
                                      echo   "  <div class='d-flex align-items-center mb-4 ''>
                                    <div class='col-5'>
									 <a href='Video.php?Watch=$title'>
                                        <img src='dash-board/Artist/$artist_name/$album_name/$title/$image' alt='Card image' style='height: 65px; width: 100%;'>
										</a>
                                    </div>
                                    <div class='ml-3'>
                                        <a href='Video.php?Watch=$title'>
                                            <h6>$title | $artist_name </h6>
                                        </a>
                                        <small class='mt-1'>$album_name</small>
                                    </div>
                                </div>";
									  }
                                       
                                  
	
	
	
	
	
	
	
	
	
}




?>