<body>
	<div class="container-fluid">
		<header id="headingBorder">
			<img src="<?php echo base_url();?>assets/images/logo.png" align="left">
			<h1>USA Travelers</h1>
		</header>
		<div class="content">
			<h2 align="center" style="margin-top:120px">Reset Password</h2>
			<div style="margin-bottom: 120px">
				<form class="form-horizontal" role="form" method="get" action="<?php echo base_url();?>resetpassword/performresetpassword">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 col-sm-offset-2 control-label">Email</label>
						<div class="col-sm-4">
							<input type="email" class="form-control" id="emailid" placeholder="Email" />
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-2 col-sm-offset-5">
							<button type="submit" class="btn btn-primary">Reset</button>
						</div>
					</div>

				</form>
			</div>
		</div>