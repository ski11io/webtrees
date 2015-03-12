<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEnNf
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEnNf extends LocaleEn {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryNf;
	}
}