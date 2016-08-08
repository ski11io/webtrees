<div id="login-register-page">
	<div class="confirm">
		<p><?php echo translate('Hello %s…<br>Thank you for your registration.', escape($user->getRealNameHtml())) ?>
		</p>
		<p>
			<?php echo translate('We will now send a confirmation email to the address <b>%s</b>. You must verify your account request by following instructions in the confirmation email. If you do not confirm your account request within seven days, your application will be rejected automatically. You will have to apply again.<br><br>After you have followed the instructions in the confirmation email, the administrator still has to approve your request before your account can be used.<br><br>To sign in to this website, you will need to know your username and password.', escape($user->getEmail())) ?>
		</p>
	</div>
</div>
