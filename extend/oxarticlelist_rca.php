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
class oxarticlelist_rca extends oxarticlelist_rca_parent {

    /**
     * @param      $sId             oxCategory oxId
     * @param int  $iAmount         amount of articles to be loaded
     * @param bool $blFullCatTree   true = browse full category tree instead single category
     */
    public function loadRandomCategoryArticles($sId, $iAmount = 1,  $blFullCatTree = null)
    {
        //var_dump($sId);
        //var_dump($iAmount);
        //var_dump($blFullCatTree);

        $oDb = oxDb::getDb(true);
        $sSelect =  "SELECT a.oxid FROM ".getViewName('oxarticles')." a ".
                    " JOIN oxobject2category b ON a.oxid = b.oxobjectid".
                    " JOIN oxcategories c ON b.oxcatnid = c.oxid".
                    " WHERE c.oxid = ".$oDb->qstr($sId);

        if($blFullCatTree) { $sSelect .= " OR c.oxrootid = ".$oDb->qstr($sId)." OR c.oxrootid = ".$oDb->qstr(oxCategory::getRootId($sId)); }

        $sSelect .= " AND a.oxactive = 1 AND a.oxissearch = 1 ORDER BY RAND() LIMIT $iAmount";
        //var_dump($sSelect);

        $aIds = $oDb->getCol($sSelect);
        $this->loadIds($aIds);
    }

    /**
     * @param      $sId             oxManufacturer oxId
     * @param int  $iAmount         amount of articles to be loaded
     */
    public function loadRandomManufacturerArticles($sId, $iAmount = 1)
    {
        //var_dump($sId);
        //var_dump($iAmount);

        $sArticleTable = getViewName('oxarticles');
        $sSelect = "SELECT * FROM $sArticleTable WHERE oxmanufacturerid = '$sId' AND  oxactive = 1 and oxissearch = 1  ORDER BY RAND() LIMIT $iAmount";
        $this->selectString($sSelect);
    }

}