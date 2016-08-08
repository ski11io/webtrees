<p>
	<?php echo translate('Hello administrator…') ?>
</p>

<p>
	<?php echo translate('A prospective user has registered with webtrees at %s.', escapeHtml($base_url . ' - ' . $tree->getTitle())) ?>
</p>

<ul>
	<li>
		<?php echo translate('Username') ?> - <?php echo escapeHtml($user->getUserName()) ?>
	</li>
	<li>
		<?php echo translate('Real name') ?> - <?php echo escapeHtml($user->getRealName()) ?>
	</li>
	<li>
		<?php echo translate('Email address') ?> - <?php echo escapeHtml($user->getEmail()) ?>
	</li>
	<li>
		<?php echo translate('Comments') ?> - <?php echo escapeHtml($user_comments) ?>
	</li>
</ul>

<p>
	<?php echo translate('The user has been sent an email with the information necessary to confirm the access request.') ?>
</p>

<p>
	<?php echo translate('You will be informed by email when this prospective user has confirmed the request. You can then complete the process by activating the username. The new user will not be able to sign in until you activate the account.') ?>
</p>
