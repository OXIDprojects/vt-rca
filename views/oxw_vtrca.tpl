[{if $oView->getRandomArticles()}]
    [{include file="widget/product/boxproducts.tpl" _boxId="random" _oBoxProducts=$oView->getRandomArticles() _sHeaderIdent="VTRCA_HEADER"}]
    [{* oxstyle widget=$oView->getClassName() *}]
[{/if}]