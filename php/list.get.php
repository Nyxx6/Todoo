<?php 
require "Classes/lists.class.php";
require "Classes/categ.class.php";
$lists = new Lists();
$list = $lists->Getuserlist($_SESSION['USER_ID'])->fetchAll(PDO::FETCH_ASSOC);
function cat($c){
	$c = explode(" ",$c);
	return $c;
}
?>
<!-- multiple select row Datatable start -->
					<div class="card-box mb-30">
						<div class="pd-20">
							<h4 class="text-blue h4">User Data with multi select row</h4>
						</div>
						<div class="pb-20">
							<table class="data-table table hover multiple-select-row nowrap">
								<thead>								
									<tr>
										<th>Number</th>
										<th class="table-plus datatable-nosort">Title</th>
										<th>Description</th>
										<th>Color</th>
                                        <th>Privacy</th>
                                        <th>Categories</th>
										<th>Start Date</th>
										<th>End Date</th>
										<th class="datatable-nosort">Edit</th>
									</tr>
								</thead>
								<tbody><?php $i=0; while(isset($list[$i])) { ?>
									<tr>
										<td><?php echo $list[$i]['LIST_ID']; ?></td>
										<td class="table-plus"><?php echo $list[$i]['LIST_TITLE']; ?></td>
										<td><?php echo $list[$i]['LIST_DESC']; ?></td>
										<td><?php echo $list[$i]['LIST_COLOR']; ?></td>
										<td><?php echo $list[$i]['LIST_PRIV']; ?></td>
										<td><?php foreach(cat($list[$i]['LIST_CAT']) as $c)
										 echo $c; ?></td>
										<td><?php echo $list[$i]['LIST_START']; ?></td>
										<td><?php echo $list[$i]['LIST_END']; ?></td>
										<td><a <?php $us = "us".$list[$i]['LIST_ID'];  ?>
                                                class="btn-block" data-toggle="modal" data-target="#<?php echo $us; ?>" 
									          ><i class="icon-copy ion-edit"></i></a>
                                            <a href=""><span class="icon-copy ti-archive"></span></a></td>
									</tr>
						</div>
					</div>
					<!-- multiple select row Datatable End -->
                    <!--Modal Edit Start-->
                    <div class="modal fade" id="<?php echo $us; ?>"  role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-body">
                                    <form action="" method="">
                                    <div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Title :</label>
												<input type="text" class="form-control" value="<?php echo $list[$i]['LIST_TITLE']; ?>" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Description :</label>
												<input type="email" class="form-control" value="<?php echo $list[$i]['LIST_DESC']; ?>" />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Select Category :</label>
												<select class="custom-select form-control">
													<option value="<?php echo $list[$i]['LIST_DATE']; ?>"><?php echo $list[$i]['LIST_DATE']; ?></option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Date of Birth :</label>
												<input
													type="text"
													class="form-control date-picker"
													placeholder="Select Date"
                                                    value="<?php echo $user[$i]['USER_BD']; ?>"
												/>
											</div>
										</div>
									</div>
                                    <div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Password :</label>
												<input type="text" class="form-control" name="password" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Confirm Password :</label>
												<input type="text" class="form-control" name="conf-password"/>
											</div>
										</div>
                                    </div>    
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Save changes</button>
								</div></form>
							</div>
						</div>
					</div>
                    <?php $i++;} ?>
                </tbody>
			</table>

                   
                    