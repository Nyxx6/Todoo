<?php
require "./php/user.login.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Todoo</title>

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
	<body class="login-page">
		<div class="login-header box-shadow">
			<div
				class="container-fluid d-flex justify-content-between align-items-center">
				<div class="brand-logo">
				    <a href="index.php">
						<h2 class="text-blue">TODOO</h2>
				    </a>
				</div>
				<div class="justify-content-between">
      			  <span class="text-yellow" style="font-family:Roboto;font-weight:600;font-size:20px">Be your time master</span>
 			    </div>
				<div class="login-menu">
					<ul>
						<li>
							<a href="register.php" 
								class="btn btn-outline-primary btn-lg btn-block" >
								Register
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
					<div class="col-md-6 col-lg-7">
						<img src="src/images/signup.png" style="margin-top:-20px;margin-bottom:20px;max-width:90%" />
					</div>
					<div class="col-md-6 col-lg-5">
						<div class="login-box box-shadow border-radius-10">
							<div class="login-title">
								<h2 class="text-center text-primary">Login To Todoo </h2>
							</div>
							<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
								<!--role-->
								<div class="select-role">
									<div class="btn-group btn-group-toggle" data-toggle="buttons">
										<label class="btn bg-white">
											<input type="radio" name="options" id="admin">
											<div class="icon">
												<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="svg replaced-svg">
													<g id="briefcase" transform="translate(-16.495 -48.714)">
														<rect id="base" width="40" height="40" transform="translate(16.495 48.714)" fill="rgba(255,255,255,0)"></rect>
													<g id="Group_10" data-name="Group 10" transform="translate(17.495 34.714)">
              											<rect id="Rectangle_1" data-name="Rectangle 1" width="2.2" height="2.2" transform="translate(17.9 36.012)" fill="#1b00ff"></rect>
	  													<path id="Path_1" data-name="Path 1" d="M25.911,233.329H22.34v1.113a1.113,1.113,0,0,1-1.113,1.113H16.773a1.113,1.113,0,0,1-1.113-1.113v-1.113H12.089A14.359,14.359,0,0,1,0,226.7v13.307H38V226.7A14.359,14.359,0,0,1,25.911,233.329Z" transform="translate(0 -195.063)" fill="#1b00ff"></path>
      													<path id="Path_2" data-name="Path 2" d="M36.127,22.68H30.486V21.566A5.573,5.573,0,0,0,24.92,16H16.013a5.573,5.573,0,0,0-5.566,5.566V22.68H4.806a3.336,3.336,0,0,0-3.222,2.508A12.06,12.06,0,0,0,13.555,36.039h3.571V34.926a1.113,1.113,0,0,1,1.113-1.113h4.453a1.113,1.113,0,0,1,1.113,1.113v1.113h3.571A12.06,12.06,0,0,0,39.349,25.188,3.336,3.336,0,0,0,36.127,22.68Zm-7.867,0H12.673V21.566a3.344,3.344,0,0,1,3.34-3.34H24.92a3.344,3.344,0,0,1,3.34,3.34Z" transform="translate(-1.466)" fill="#1b00ff"></path>
      													<path id="Path_3" data-name="Path 3" d="M0,436v1.113a3.344,3.344,0,0,0,3.34,3.34H34.66a3.344,3.344,0,0,0,3.34-3.34V436Z" transform="translate(0 -388.828)" fill="#1b00ff"></path>
   													</g>
  													</g>
												</svg>
											</div>
											Admin
										</label>
										<label class="btn bg-white">
											<input type="radio" name="role" id="user" checked>
											<div class="icon">
												<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="svg replaced-svg">
													<g id="person" transform="translate(66.7 -14.994)">
														<rect id="base" width="40" height="40" transform="translate(-66.7 14.994)" fill="rgba(255,255,255,0)"></rect>
														<g id="Group_9" data-name="Group 9" transform="translate(-73 14)">
															<path id="Path_4" data-name="Path 4" d="M15.248,79.481H36.78a5.03,5.03,0,0,0,4.948-5.1,5.246,5.246,0,0,0-2.217-4.288A53.783,53.783,0,0,0,33.969,66.7h0a11.329,11.329,0,0,1-4.829,3.553,9.034,9.034,0,0,1-3.127.572,8.779,8.779,0,0,1-3.087-.531,10.825,10.825,0,0,1-4.868-3.553c-1.306.694-3.285,1.878-5.541,3.389A5.191,5.191,0,0,0,10.3,74.418h0A5.02,5.02,0,0,0,15.248,79.481Z" transform="translate(0 -39.487)" fill="#1b00ff"></path>
    														<path id="Path_5" data-name="Path 5" d="M23.926,19.76a7.374,7.374,0,0,0,1.559,3.267,10.364,10.364,0,0,0,6,7.064,6.825,6.825,0,0,0,4.87,0,10.282,10.282,0,0,0,6-7.064,7.374,7.374,0,0,0,1.559-3.267c.351-1.307.7-3.144-.234-4.451a.562.562,0,0,1-.117-.163c.078-.449.117-.9.156-1.307,1.091-7.677-2.961-8.167-3.429-8.167-.039,0-.039-.041-.078-.041a5.293,5.293,0,0,0-5.767-3.553C31.914,2.65,26.615,2,26.615,2a2.648,2.648,0,0,0,.9,2c-4.481,2.858-3.663,8.983-3.234,11.148a.562.562,0,0,0-.117.163C23.225,16.615,23.576,18.453,23.926,19.76Zm2.338-3.593h.117v-.041A3.827,3.827,0,0,1,27.628,12a10.855,10.855,0,0,0,7.091-.98c6.156-2.777,6.7,5.145,6.7,5.145h.117c.623,0,1.286.531.584,3.063-.545,2-1.052,2.573-1.4,2.573a8.418,8.418,0,0,1-4.987,6.452,5.3,5.3,0,0,1-3.663,0A8.5,8.5,0,0,1,27.082,21.8c-.39-.041-.9-.613-1.4-2.573C24.978,16.656,25.641,16.166,26.264,16.166Z" transform="translate(-7.845 0)" fill="#1b00ff"></path>
    													</g>
 													</g>
												</svg>
											</div>
											User
										</label>
									</div>
								</div><?php echo $err['empty'] ?? ''  ?>
								<!--role-->
								<div class="input-group custom">
									<input
										type="text"
										class="form-control form-control-lg"
										value="<?php echo $_POST['username'] ?? '' ?>"
										name="username" 
									/>
									<div class="input-group-append custom">
										<span class="input-group-text"
											><i class="icon-copy dw dw-user1"></i
										></span>
									</div>
									<small class="form-text text-muted"><?php echo $err['username'] ?? ''  ?></small>
								</div>
								<div class="input-group custom">
									<input
										type="password"
										class="form-control form-control-lg"
										placeholder="********"
										name="password" 
									/>
									<div class="input-group-append custom">
										<span class="input-group-text"
											><i class="dw dw-padlock1"></i
										></span>
									</div>
								</div><small class="form-text text-muted"><?php echo $err['password'] ?? ''  ?></small>
								<div class="row pb-30">
									<div class="col-6">
										<div class="custom-control custom-checkbox">
											<input
												type="checkbox"
												class="custom-control-input"
												id="customCheck1"
												name=""
											/>
											<label class="custom-control-label" for="customCheck1"
												>Remember me</label
											>
										</div>
									</div>
									<div class="col-6">
										<div class="forgot-password">
											<a href="forgot-password.php">Forgot Password</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="input-group mb-0">
											<input class="btn btn-primary btn-lg btn-block" 
											type="submit" value="Sign In" name="submit"
											id="sub"
											>
										</div>
										<div
											class="font-16 weight-600 pt-10 pb-10 text-center"
											data-color="#707373"
										>
											OR
										</div>
										<div class="input-group mb-0">
											<a  class="btn btn-outline-primary btn-lg btn-block" 
												onmouseover="this.innerHTML='Create one !';"
												onmouseout="this.innerHTML='Don\'t have an account?';"
												href="register.php">Don't have an account?
											</a>
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
