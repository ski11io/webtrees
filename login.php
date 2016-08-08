<?php
/**
 * webtrees: online genealogy
 * Copyright (C) 2016 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
namespace Fisharebest\Webtrees;

use Fisharebest\Webtrees\Http\Controllers\LoginController;

/**
 * Defined in session.php
 *
 * @global Tree $WT_TREE
 */
global $WT_TREE;

define('WT_SCRIPT_NAME', 'login.php');
require './includes/session.php';

$controller = new LoginController;

switch (Filter::get('route')) {
default:
case 'login':
	$controller->loginPage($WT_TREE);
	break;

case 'login-action':
	$controller->loginAction($WT_TREE);
	break;

case 'logout':
	$controller->logoutAction();
	break;

case 'password-reset':
	$controller->passwordResetPage();
	break;

case 'password-reset-action':
	$controller->passwordResetAction($WT_TREE);
	break;

case 'registration-page':
	$controller->registrationPage();
	break;

case 'registration-action':
	$controller->registrationAction($WT_TREE);
	break;
}
