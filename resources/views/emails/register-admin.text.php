<?php echo translate('Hello administrator…') ?>


<?php echo translate('A prospective user has registered with webtrees at %s.', $base_url . ' - ' . escapeHtml($tree->getTitle())) ?>


<?php echo translate('Username') ?> - <?php echo escapeHtml($user->getUserName()) ?>

<?php echo translate('Real name') ?> - <?php echo escapeHtml($user->getRealName()) ?>

<?php echo translate('Email address') ?> - <?php echo escapeHtml($user->getEmail()) ?>

<?php echo translate('Comments') ?> - <?php echo escapeHtml($user_comments) ?>

<?php echo translate('The user has been sent an email with the information necessary to confirm the access request.') ?>


<?php echo translate('You will be informed by email when this prospective user has confirmed the request. You can then complete the process by activating the username. The new user will not be able to sign in until you activate the account.') ?>
