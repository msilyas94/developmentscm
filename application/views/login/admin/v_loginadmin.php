<div id="main" role="main">

			<!-- MAIN CONTENT -->
			<div id="content" class="container">

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 hidden-xs hidden-sm">
						<h1 class="txt-color-red login-header-big"><b>MY</b> <b>T</b>ELKOM <b>A</b>KSES</h1>
						<div class="hero">

							<div class="pull-left login-desc-box-l">
								<h4 class="paragraph-header">info </h4>
								<div class="login-app-icons">


								</div>
							</div>
							
							<img src="<?php echo base_url();?>assets/img/legota.jpg" class="pull-right display-image" alt="" style="width:350px">
	
						</div>

						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<marquee>Mitra Telkom Akses Existing : 429 Mitra</marquee>
							</div>
							
						</div>


					</div>
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
						<div class="well no-padding">
							
								<?php $attributes = array('class' => 'smart-form client-form', 'id' => 'login-form');

								echo form_open('login/login_process', $attributes);
								?>
								<header>
									Sign In
								</header>

								<fieldset>
									
									<section>
										<label class="label">Username</label>
										<label class="input"> <i class="icon-append fa fa-user"></i>
											<input type="text" name="username">
											<b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Please enter email address/username</b></label>
									</section>

									<section>
										<label class="label">Password</label>
										<label class="input"> <i class="icon-append fa fa-lock"></i>
											<input type="password" name="password">
											<b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Enter your password</b> </label>
										<div class="note">
											<a href="forgotpassword.html">Forgot password?</a>
										</div>
									</section>

									<section>
										<label class="checkbox">
											<input type="checkbox" name="remember" checked="">
											<i></i>Stay signed in</label>
									</section>
								</fieldset>
								<footer>
									<button type="submit" class="btn btn-primary">
										Sign in
									</button>
								</footer>
							<?php echo form_close();?>

						</div>
						
						
						
					</div>

				</div>
				<address> <strong>PT. TELKOM AKSES</strong><br>Gedung Telkom Jakarta Barat Jl. S.Parman Kav. 8<br> Jakarta 11440<br> <abbr title="Phone">P:</abbr> +(62) 21 2933 700 <br><abbr title="Phone">FAX:</abbr> +(62) 21 2933 600</address> 
				<address> <strong>Website : </strong><br> www.telkomakses.co.id </address>
			</div>


		</div>