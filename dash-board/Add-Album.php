<?php
$page = "Add-Album";
require 'header.php';

#for Artist Dropdown
$select = "select * from artist";
$run = mysqli_query($connect,$select);

#for Language Dropdown
$selectt = "select * from languages";
$runn = mysqli_query($connect,$selectt);

#for Year Dropdown
$selecttt = "select * from years";
$runnn = mysqli_query($connect,$selecttt);




?>



 
                  <div class="col-sm-12 col-lg-12">
                     <div class="iq-card">
						 <?php Add_Album(); ?>
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Add Albums</h4>
                            
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="List-Album.php" class="btn btn-primary">List Album</a>
                        </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
                              <div class="form-row">
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Title</label>
                                    <input type="text" name="altitle" class="form-control" id="validationCustom01"  required>
                                    <div class="valid-feedback">
                                       Looks good!
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">Artist</label>
                                    <select name="alartist" class="form-control" id="validationCustom04" required>
										
                                       <option selected disabled value="">Choose...</option>
									<?php while($fetch = mysqli_fetch_array($run)){ $id = $fetch['id']; $name = $fetch['name']; ?>
                                       <option value="<?php echo $id ?>"><?php echo $name ?></option>
										<?php } ?>
                                    </select>
                                    <div class="invalid-feedback">
                                       Please select a valid state.
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">Language</label>
                                    <select name="allang" class="form-control" id="validationCustom04" required>
                                       <option selected disabled value="">Choose...</option>
                                      <?php while($fetch = mysqli_fetch_array($runn)){ $idd = $fetch['id']; $namee = $fetch['name']; ?>
                                       <option value="<?php echo $idd ?>"><?php echo $namee ?></option>
										<?php } ?>
                                    </select>
                                    <div class="invalid-feedback">
                                       Please select a valid state.
                                    </div>
                                 </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">Year</label>
                                    <select name="alyear" class="form-control" id="validationCustom04" required>
                                       <option selected disabled value="">Choose...</option>
										<?php while($fetch = mysqli_fetch_array($runnn)){ $iddd = $fetch['id']; $month = $fetch['month']; $date = $fetch['date']; $year = $fetch['year']; ?>
                                       <option value="<?php echo $iddd ?>"><?php echo $year ?></option>
										<?php } ?>
                                       
                                    </select>
                                    <div class="invalid-feedback">
                                       Please select a valid state.
                                    </div>
                                 </div>
								 
                                 <div class="col-md-12 mb-3">
                                    <label for="validationCustom05">Choose Image</label>
							<div class="custom-file">
                                 <input type="file" name="alpic" class="custom-file-input" id="customFile validationCustom05"  required>
                                 <label class="custom-file-label" for="customFile">Choose file</label>
								<div class="invalid-feedback">
                                       Please provide a valid zip.
                                    </div>
                              </div>
                                   
                                    
                                 </div>
                              </div>
                             
                              <button class="btn btn-primary" name="btnal" type="submit">Add Album</button>
                           </form>
                        </div>
                     </div>
					  
					  
                    
                  </div>





<?php
require 'footer.php';
?>