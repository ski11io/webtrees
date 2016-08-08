<div id="login-page">
	<h2>
		<?php echo translate('Request a new password') ?>
	</h2>

	<div id="login-box">
		<div id="new_passwd">
			<form id="new_passwd_form" name="new_passwd_form" action="?route=password-reset-action" method="post">
				<?php echo $csrf_field ?>
				<div>
					<label>
						<?php echo translate('Username or email address') ?>
						<input type="text" name="username">
					</label>
				</div>
				<div>
					<button type="submit">
						<?php echo /* I18N: A button label. */ translate('continue') ?>
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
