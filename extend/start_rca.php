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
class start_rca extends start_rca_parent
{
    public function getRandomArticle($sCatId = null, $blFullCatTree = null)
    {
        $sCatId = ($sCatId) ? $sCatId : $this->getActCatId();
        if ($sCatId)
        {
            /** @var oxArticleList $oList */
            $oArticle = oxNew("oxArticle");
            $oArticle->loadRandomCategoryArticles($sCatId, $iAmount, $blFullCatTree);
            //var_dump($oList->count());
            if ($oList->count())
            {
                return $oArticle;
            }
        }

        return false;
    }

    public function getRandomCategoryArticles($sCatId = null, $iAmount = 1, $blFullCatTree = null)
    {
        $sCatId = ($sCatId) ? $sCatId : $this->getActCatId();
        if ($this->_getLoadActionsParam() && $sCatId)
        {
            /** @var oxArticleList $oList */
            $oList = oxNew("oxArticleList");
            $oList->loadRandomCategoryArticles($sCatId, $iAmount, $blFullCatTree);
            //var_dump($oList->count());
            if ($oList->count())
            {
                return $oList;
            }
        }

        return false;
    }

}