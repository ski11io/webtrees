<p>
	<?php echo translate('Hello %s…', escape($user->getRealName())) ?>
</p>

<p>
	<?php echo translate('A new password has been requested for your username.') ?>
</p>

<p>
	<?php echo translate('Username') ?> - <?php echo escape($user->getUserName()) ?>
	<br>
	<?php echo translate('Password') ?> - <?php echo escape($password) ?>
</p>

<p>
	<?php echo translate('After you have signed in, select the “My account” link under the “My pages” menu and fill in the password fields to change your password.') ?>
</p>

<a href="<?php echo escape($login_url) ?>">
	<?php echo escape($login_url) ?>
</a>
