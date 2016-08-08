<?php echo translate('Hello %s…', $user->getRealName()) ?>


<?php echo translate('A new password has been requested for your username.') ?>


<?php echo translate('Username') ?> - <?php echo $user->getUserName() ?>

<?php echo translate('Password') ?> - <?php echo $password ?>


<?php echo translate('After you have signed in, select the “My account” link under the “My pages” menu and fill in the password fields to change your password.') ?>


<?php echo $login_url ?>
