<?php include 'inc/header.php'; ?>

	<div class="container">
		<div class="jumbotron">
			<h3 class="display-3" style="text-align: center;">ADMIN & MODERATOR LOGIN</h3>
			<hr>
			<div class="my-4">
				<div class="row">
					<?php if(count((array)$chkAdminExist)):?>

						<?php else:?>
					<div class="col-lg-4">
						<?php echo anchor("welcome/adminRegister", "Admin Register", ['class'=>'btn btn-success']); ?>
					</div>
					<?php endif;?>
					<div class="col-lg-4">
						<?php echo anchor("welcome/login", "Admin Login", ['class'=>'btn btn-success']); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include 'inc/footer.php'; ?>
