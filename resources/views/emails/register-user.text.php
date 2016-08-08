<?php echo translate('Hello %s…', $user->getRealName()) ?>


<?php echo translate('You (or someone claiming to be you) has requested an account at %1$s using the email address %2$s.', $base_url . ' ' . $tree->getTitle(), $user->getEmail()) ?>


<?php echo translate('Follow this link to verify your email address.') ?>


<?php echo $login_url ?>?user_name=<?php rawurlencode($user->getUserName()) ?>&user_hashcode=<?php echo rawurlencode($user->getPreference('reg_hashcode')) ?>&action=userverify&ged=<?php echo rawurlencode($tree->getName()) ?>


<?php echo translate('Username') ?> - <?php echo $user->getUserName() ?>

<?php echo translate('Comments') ?> - <?php echo $user->getPreference('comment') ?>


<?php echo translate('If you didn’t request an account, you can just delete this message.') ?>
