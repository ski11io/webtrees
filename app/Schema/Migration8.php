<?php
namespace Fisharebest\Webtrees\Schema;

/**
 * webtrees: online genealogy
 * Copyright (C) 2015 webtrees development team
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
use Fisharebest\Webtrees\Database;
use PDOException;

/**
 * Class Migration8 - upgrade the database schema from version 8 to version 9.
 */
class Migration8 implements MigrationInterface {
	/** {@inheritDoc} */
	public function upgrade() {
		// Add support for the persian/jalali calendar
		try {
			Database::exec(
				"ALTER TABLE `##dates` CHANGE d_type d_type ENUM('@#DGREGORIAN@', '@#DJULIAN@', '@#DHEBREW@', '@#DFRENCH R@', '@#DHIJRI@', '@#DROMAN@', '@#DJALALI@')"
			);
		} catch (PDOException $ex) {
			// Already been run?
		}
	}
}