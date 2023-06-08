	<body>
		<div class="container">
			<!-- form  -->
			<div class="row d-flex justify-content-center">
				<div class="col col-8">
					<div class="p-5 col-11">
						<div class="row text-center">
							<div class="col">
								<h3 class="">Welcome Back</h3>
								<small class="text-secondary">Organize your recording like never !
								</small>
							</div>
						</div>
						<br />
						<hr />
						<br />
						<form action="<?php echo base_url('auth') ?>" method="POST">
							<div class="form-group">
								<label class="lead">Enter Phone number</label>
								<input type="text" class="form-control" name="number" />
								<small class="text-danger"><?php echo form_error('number') ?></small>
							</div>

							<div class="form-group">
								<label class="lead">Enter your code</label>
								<input type="text" class="form-control" name="pin" />
								<small class="text-danger"><?php echo form_error('pin') ?></small>
							</div>

							<div class="form-group text-center">
								<button type="submit" class="btn btn-dark form-control">
									Login
								</button>
							</div>
						</form>
						<div class="row">
							<div class="col">
								<a href="/signup" class="text-dark"><u>Don't have an account ?</u></a>
							</div>
							<div class="col d-flex justify-content-end">
								<a href="" class="text-dark"><u>Forgot your code PIN ?</u></a>
							</div>
						</div>
						<br />
						<br />

						<?php if ($this->session->flashdata('success')) {  ?>
							<div class="col alert alert-success alert-dismissible fade show" role="alert">
								<i class="bi bi-check-lg"></i> LogIn Successfully
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						<?php } ?>

						<?php if ($this->session->flashdata('error')) {  ?>
							<div class="col alert alert-danger alert-dismissible fade show" role="alert">
								<i class="bi bi-exclamation-circle-fill mx-3"></i> LogIn Failed
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						<?php } ?>



						<?php if ($this->session->flashdata('empty')) {  ?>
							<div class="col alert alert-danger alert-dismissible fade show" role="alert">
								<i class="bi bi-exclamation-circle-fill mx-3"></i> Fill in the information provided
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</body>
