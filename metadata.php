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
$aModule = array(
    'id'          => 'vt-rca',
    'title'       => '<strong style="color:#c700bb;border: 1px solid #c700bb;padding: 0 2px;background:white;">VT</strong> Random Category Articles',
    'description' => 'getting some random articles from a specal category or a whole category tree<hr/>
			<h2>usage:</h2>put this code into list.tpl to insert the list of newest articles
			<textarea cols="80" rows="2">[{block name="category_newestarticles"}][{/block}]</textarea><br/>
            edit the vt-nca/out/blocks/category_newestarticles.tpl file to change the appearance<hr/>
            <h2>displaying newest articles of a particular category</h2>
            <textarea cols="80" rows="2">[{include file="widget/product/list.tpl" type=$oViewConf->getViewThemeParam("sStartPageListDisplayType") head="header" products=$oView->getNewestCategoryArticles("##CATEGORY-OXID##") showMainLink=true}]</textarea>',
    'thumbnail'   => 'oxid-vt.jpg',
    'version'     => '0.8 (2013-10-25)</dd><dt>newest version</dt><dd><img src="https://raw.github.com/vanilla-thunder/vt-rca/master/copy_this/modules/vt-rca/version.jpg" /><br/>
		 <a style="display: inline-block; padding: 1px 15px; background: #f0f0f0; border: 1px solid gray" href="https://github.com/vanilla-thunder/vt-rca/" target="_blank">info</a>
		 <a style="display: inline-block; padding: 1px 15px; background: #f0f0f0; border: 1px solid gray" href="https://github.com/vanilla-thunder/vt-rca/archive/master.zip">download</a>',
    'author'      => 'Marat Bedoev',
    'email'       => 'oxid@marat.ws',
    'url'         => 'https://github.com/vanilla-thunder/',
    'extend'      => array(
        'start'            => 'vt-rca/extend/start_rca',
        'oxubase'          => 'vt-rca/extend/oxubase_rca',
        'oxarticlelist'    => 'vt-rca/extend/oxarticlelist_rca',
        'manufacturerlist' => 'vt-rca/extend/manufacturerlist_rca',
        /*
        'alist'            => 'vt-rca/extend/alist_nca',

        'details'          => 'vt-rca/extend/details_nca',
        */
    ),
    'files'       => array(
        'oxw_vtRCA'     => 'vt-rca/files/oxw_vtrca.php',
    ),
    'templates'   => array(
        'oxw_vtrca.tpl' => 'vt-rca/views/oxw_vtrca.tpl',
    )
);