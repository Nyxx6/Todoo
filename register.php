<?php
require "./php/user.signup.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Todoo</title>
         <script src="vendors/scripts/verify.js"></script>

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
		<link
			rel="stylesheet"
			type="text/css"
			href="vendors/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

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
		<div class="login-header box-shadow">
			<div
				class="container-fluid d-flex justify-content-between align-items-center"
			>
				<div class="brand-logo">
				    <a href="index.php">
						<!--<span class='ico' style="margin-left:-50px;width: 200px;"></span>-->
						<h2 class="text-blue">TODOO</h2>
				    </a>
				</div>
				<div class="justify-content-between">
      			  <span class="text-yellow" style="font-family:Roboto;font-weight:600;font-size:20px">Be your time master</span>
 			    </div>
				<div class="login-menu">
					<ul>
						<li>
							<a href="index.php" 
								class="btn btn-outline-primary btn-lg btn-block" >
								Login
							</a>
						</li>
					</ul>
				</div>
				
			</div>
		</div>
		<div
			class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
		>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6">
						<img src="src\images\reg.svg" style="max-width: 95%;margin-left:20px" />
					</div>
					<div class="col-md-6">
						<div class="login-box box-shadow border-radius-10">
							<div class="register-title">
								<h2 class="text-center text-primary">Register</h2>
							</div>
							<small class="form-text text-muted mb-20"><?php echo $err['empty'] ?? '' //var_dump($post->data)?></small>
							<form id="Register" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
								<div class="form-group">
									<label class="form-control-label">Email*</label>
									<input
										class="form-control form-control-lg"
										type="email"
										value="<?php echo $_POST['email'] ?? '' ?>"
										name="email"
                                           id="email"
                                           onkeyup="ValidateRegister(email.value)"
                                           
									/>
								</div>
                                
                                
								<div class="form-group ">
								<label class="form-control-label">Pseudo*</label>
									<input
										class="form-control form-control-lg"
										type="text"
										value="<?php echo $_POST['username'] ?? '' ?>"
										name="username"
                                           id="username"
									/>
								</div>
                                
                                
								<div class="form-group">
									<label class="form-control-label">Password*</label>
									<input
										class="form-control form-control-lg"
										type="password"
										name="password"
                                           id="password"
                                           onkeyup="ValidateRegister(password.value)"
									/>
									<small class="form-text text-muted"><?php echo $err['password'] ?? ''  ?></small>
								</div>
                                
                                
                                
								<div class="form-group ">
								<label class="form-control-label">Confirm Password*</label>
									<input
										class="form-control form-control-lg"
										type="password"
										name="conf-password"
                                        id="conf-password"
									/>
									<small class="form-text text-muted"><?php echo $err['conf-password'] ?? ''  ?></small>
								</div>
								<div class="row align-items-center">
									<div class="col-sm-12">
										<div class="input-group mb-0">
											<input class="btn btn-primary btn-lg btn-block" name="submit" type="submit" value="Register"
                                                 id="sub"  disabled  >																				
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>		
		<?php include("php/footer.php") ?>
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
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
