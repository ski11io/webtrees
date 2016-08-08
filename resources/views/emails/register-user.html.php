<p>
	<?php echo translate('Hello %s…', escapeHtml($user->getRealName())) ?>
</p>

<p>
	<?php echo translate('You (or someone claiming to be you) has requested an account at %1$s using the email address %2$s.', escapeHtml($base_url . ' ' . $tree->getTitle()), escapeHtml($user->getEmail())) ?>
</p>

<p>
	<?php echo translate('Follow this link to verify your email address.') ?>
</p>

<p>
	<a href="<?php echo $login_url ?>?user_name=<?php echo rawurlencode($user->getUserName()) ?>&amp;user_hashcode=<?php echo rawurlencode($user->getPreference('reg_hashcode')) ?>&amp;action=userverify&amp;ged=<?php echo rawurlencode($tree->getName()) ?>">
		<?php echo escapeHtml($login_url) ?>?user_name=<?php echo escapeHtml($user->getUserName()) ?>&amp;user_hashcode=<?php echo escapeHtml($user->getPreference('reg_hashcode')) ?>&amp;action=userverify&amp;ged=<?php echo escapeHtml($tree->getName()) ?>
	</a>
</p>

<p>
	<?php echo translate('Username') ?> - <?php echo escapeHtml($user->getUserName()) ?>
	<br>
	<?php echo translate('Comments') ?> - <?php echo escapeHtml($user->getPreference('comment')) ?>
</p>

<p>
	<?php echo translate('If you didn’t request an account, you can just delete this message.') ?>
</p>
