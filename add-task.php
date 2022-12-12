<?php 
require "php/log.php";
require "./php/categ.set.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Todoo - Lists</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="vendors/images/apple-touch-icon.png"
		/>
		
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="vendors/images/favicon-16x16.png"
		/>
		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
		
		<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="vendors/styles/icon-font.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="vendors/styles/icon-font.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/jquery-steps/jquery.steps.css"
		/>
		<!-- bootstrap-tagsinput css -->
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css"
		/>
		<!-- JS VERIF -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script
			src="vendors/scripts/verif.js"
		></script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
	</head>
	<body>
		<?php require "php/header.php" ?>
		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Add a new List</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="dashboard.php">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											New List
										</li>
									</ol>
								</nav>
							</div>
							<div class="col-md-6">
								<div class="text-right">
									<div class="btn btn-primary btn-md">
										<a data-toggle="modal" data-target="#addcat" style="color:white">+Add Categories</a>
									</div>
								</div>
							</div>
							<!--Modal-->
							<div class="modal fade" id="addcat">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Add Categories</h5>
											<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form method="post" action="add-list.php">
												<div class="form-group">
													<label class="text-black font-w500">Category Tag</label>
													<input name="tag" value="<?php echo $_POST['tag'] ?? '' ?>" type="text" class="form-control" required>
													<small class="form-text text-muted"><?php echo $err['tag'] ?? ''  ?></small>
												</div>										    
											</form>
										</div>
									</div>
								</div>
							</div>
							<!--Modal-->
						</div>
					</div>

					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<h4 class="text-blue h4">List n°-</h4>						
						</div>
							<div class="wizard-content">
							<form id="formlist" class="wizard-circle vertical" method="get" action="add-list.php">
									
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Title :</label>
                                            <input type="text" class="form-control" name="" placeholder="Task's Title"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Type :</label>
                                            <select class="form-control" name="lid">
                                                <option value="">List 1</option>
                                                <option value="">List 2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <label>Last delay :</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <style type="text/css" position:absolute>
                                            </style>                   
											<input
                                           		class="form-control datetimepicker"
                                           		placeholder="Choose Date and time"
                                           		type="text"/>
                                        </div>
                                    </div>                                    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Finished :</label>
                                            <input type="checkbox">
                                        </div>
                                    </div>
                                </div>	
								<div class=" text-right">
									<div class="btn-list">
										<input class="btn btn-primary btn-lg" id="sub" type="submit" name="submit" value="Submit">	
										<input class="btn btn-warning btn-md" type="reset" id="reset" value="Reset">	
									</div>
								</div>		
							</form>
						</div>		
					<!-- success Popup html Start -->
					<div
						class="modal fade"
						id="success-modal"
						tabindex="-1"
						role="dialog"
						aria-labelledby="exampleModalCenterTitle"
						aria-hidden="true"
					>
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-body text-center font-18">
									<h3 class="mb-20">List added successfully!</h3>
									<div class="mb-30 text-center">
										<img src="vendors/images/success.png" />
									</div>
								</div>
								<div class="modal-footer justify-content-center">
									<a	
										href="./add-task.php"
										class="btn btn-primary"
										style="color:white !important;"
									>
										Add other tasks
									</a>
									<button
										type="button"
										class="btn btn-button"
										data-dismiss="modal"
									>
										Cancel
									</button>
								</div>
							</div>
						</div>
					</div>
					<!-- success Popup html End -->
				</div>
				<div class="footer-wrap pd-20 mb-20 card-box">
					DeskApp - Bootstrap 4 Admin Template By
					<a href="https://github.com/dropways" target="_blank"
						>Ankit Hingarajiya</a
					>
				</div>
			</div>
		</div>
		<?php require "php/footer.php" ?>
		<a target="_blank" href="https://icons8.com/icon/67464/file"></a>
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<script src="src/plugins/jquery-steps/jquery.steps.js"></script>
		<script src="vendors/scripts/steps-setting.js"></script>
		<!-- bootstrap-tagsinput js -->
		<script src="src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>