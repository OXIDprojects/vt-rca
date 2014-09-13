<?php
class oxw_vtRCA extends oxWidget
{

    protected $_sThisTemplate = 'oxw_vtrca.tpl';


    public function getRandomArticles()
    {
        $sCatId = $this->getViewParameter("cnid");
        $iAmount = $this->getViewParameter("amount");
        $blFullCatTree = $this->getViewParameter("fulltree");

        if(!$sCatId) { return null; }

        /** @var oxArticleList $oList */
        $oList = oxNew("oxArticleList");
        $oList->loadRandomCategoryArticles($sCatId, $iAmount, $blFullCatTree);
        //var_dump($oList);
        return $oList;
    }
}