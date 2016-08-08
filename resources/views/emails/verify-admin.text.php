<?php echo translate('Hello administrator…') ?>


<?php echo translate('A new user (%1$s) has requested an account (%2$s) and verified an email address (%3$s).', $user->getRealName(), $user->getUserName(), $user->getEmail()) ?>


<?php echo translate('You need to review the account details.') ?>


<?php echo $base_url ?>admin_users.php?action=edit&user_id=<?php echo $user->getUserId() ?>


* <?php echo translate('Set the status to “approved”.') ?>

* <?php echo translate('Set the access level for each tree.') ?>

* <?php echo translate('Link the user account to an individual.') ?>
