<div>
    <h1>vt-rca widget</h1>
    <hr/>
    <h3>[{$cnid}] // [{$amount}]</h3>
    [{foreach from=$oView->getRandomArticles("0f4fb00809cec9aa0910aa9c8fe36751",2) item="art" }]
        [{$art->oxarticles__oxtitle->value}]
        <hr/>
    [{/foreach}]
</div>
[{* oxstyle widget=$oView->getClassName() *}]