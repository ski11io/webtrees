<div id="login-page">
	<div id="login-text">
		<p class="center">
			<strong><?php echo translate('Welcome to this genealogy website') ?></strong>
		</p>

		<p style="white-space: pre-wrap;"><?php echo $welcome_text ?></p>
	</div>

	<div id="login-box">
		<form id="login-form" name="login-form" method="post" action="?route=login-action">
			<?php echo $csrf_field ?>
			<input type="hidden" name="url" value="<?php echo escape($url) ?>">
			<div>
				<label for="username">
					<?php echo translate('Username') ?>
					<input type="text" id="username" name="username" value="<?php echo escape($username) ?>" class="formField" autofocus>
				</label>
			</div>
			<div>
				<label for="password">
					<?php echo translate('Password') ?>
					<input type="password" id="password" name="password" class="formField">
				</label>
			</div>
			<div>
				<input type="submit" value="<?php echo /* I18N: A button label. */ translate('sign in') ?>">
			</div>
			<?php // Emails are sent from a TREE, not from a SITE. Therefore if there is no ?>
			<?php // tree available (initial setup or all trees private), then we can't send email. ?>
			<?php if ($tree): ?>
				<div>
					<a href="?route=password-reset">
						<?php echo translate('Forgot password?') ?>
					</a>
				</div>
				<?php if ($allow_registration): ?>
					<div>
						<a href="?route=registration-page">
							<?php echo translate('Request a new user account') ?>
						</a>
					</div>
					<?php endif; ?>
			<?php endif; ?>
		</form>
	</div>
</div>
