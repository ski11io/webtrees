<p>
	<?php echo translate('Hello administrator…') ?>
</p>

<p>
	<?php echo translate('A new user (%1$s) has requested an account (%2$s) and verified an email address (%3$s).',escapeHtml($user->getRealName()),escapeHtml($user->getUserName()),escapeHtml($user->getEmail())) ?>
</p>

<p>
	<?php echo translate('You need to review the account details.') ?>
</p>

<a href="<?php echo $base_url ?>admin_users.php?action=edit&amp;user_id=<?php echo $user->getUserId() ?>">
	<?php echo escapeHtml($user->getRealName()) ?>
</a>

<ul>
	<li>
		<?php echo translate('Set the status to “approved”.') ?>
	</li>
	<li>
		<?php echo translate('Set the access level for each tree.') ?>
	</li>
	<li>
		<?php echo translate('Link the user account to an individual.') ?>
	</li>
</ul>
