<?php

/**
 * vt Random Category Articles
 * Copyright (C) 2013  Marat Bedoev
 * 
 * This program is free software;
 * you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation;
 * either version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses/>
 */
class manufacturerlist_rca extends manufacturerlist_rca_parent {

	public function getRandomArticles($iAmount = 1) {
		// newest articles
		$oManufacturer = $this->getActManufacturer();
		$smId = $oManufacturer->getId();

		$oArtList = oxNew('oxarticlelist');
		$oArtList->loadRandomManufacturerArticles($smId, $iAmount);
		if ($oArtList->count()) {
			return $oArtList;
		}

		return null;
	}

}