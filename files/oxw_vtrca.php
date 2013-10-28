<?php
class oxw_vtRCA extends oxWidget
{

    protected $_sThisTemplate = 'oxw_vtrca.tpl';


    public function getRandomArticles($sId, $iAmount = 1,  $blFullCatTree = false)
    {
        $oDb = oxDb::getDb(true);
        $sSelect =  "SELECT a.oxid FROM oxarticles a ".
                    " JOIN oxobject2category b ON a.oxid = b.oxobjectid".
                    " JOIN oxcategories c ON b.oxcatnid = c.oxid".
                    " WHERE c.oxid = ".$oDb->qstr($sId);
        if($blFullCatTree) { $sSelect .= "OR c.oxrootid = ".$oDb->qstr($sId); }
        $sSelect .= " ORDER BY RAND() LIMIT $iAmount";

        $aIds = $oDb->getCol($sSelect);
        //return $aIds;

        /** @var oxArticleList $oList */
        $oList = oxNew("oxArticleList");
        //$oList->init("oxarticle");
        $oList->loadIds($aIds);

        /** @var oxArticle $oBase */


        //return $sSelect;

        //$oList->selectString($sSelect);
        return $oList;
    }
}