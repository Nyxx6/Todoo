<?php 
require "Classes/users.class.php";
$users = new Users();
$user = $users->GetAll()->fetchAll(PDO::FETCH_ASSOC);
function type(int $i) {
    if($i) return "Admin";
    return "User";
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
										<th>ID</th>
										<th class="table-plus datatable-nosort">Username</th>
										<th>Email</th>
										<th>Age</th>
										<th>Start Date</th>
										<th>Stats</th>
										<th class="datatable-nosort">Edit</th>
									</tr>
								</thead>
								<tbody><?php $i=0; while(isset($user[$i])) { ?>
									<tr>
										<td><?php echo $user[$i]['USER_ID']; ?></td>
										<td class="table-plus"><?php echo $user[$i]['USER_NAME']; ?></td>
										<td><?php echo $user[$i]['USER_EMAIL']; ?></td>
										<td><?php echo $user[$i]['USER_BD']; ?></td>
										<td><?php echo $user[$i]['USER_DATE']; ?></td>
										<td><?php echo type($user[$i]['USER_TYPE']); ?></td>
										<td><a <?php $us = "us".$user[$i]['USER_ID'];  ?>
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
												<label>Username :</label>
												<input type="text" class="form-control" value="<?php echo $user[$i]['USER_NAME']; ?>" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Email Address :</label>
												<input type="email" class="form-control" value="<?php echo $user[$i]['USER_EMAIL']; ?>" />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Select Type :</label>
												<select class="custom-select form-control">
													<option value="<?php echo $user[$i]['USER_DATE']; ?>"><?php echo $user[$i]['USER_DATE']; ?></option>
													<option value="0">User</option>
													<option value="1">Admin</option>
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

                   
                    