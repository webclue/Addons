<?php
/***************************************************************************
*                                                                          *
*    Copyright (c) 2004 Simbirsk Technologies Ltd. All rights reserved.    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/


//
// $Id: func.php 11529 2011-01-05 13:56:15Z alexions $
//

if ( !defined('AREA') ) { die('Access denied'); }

function fn_pages_list_get_page_data(&$page_data, $lang_code)
{
    if (AREA == 'A') {
        $page_data['main_pair'] = fn_get_image_pairs($page_data['page_id'], 'page', 'M', true, false, $lang_code);
    }
    
    return true;
}

function fn_pages_list_post_get_pages(&$pages, $params, $lang_code)
{
    
    foreach($pages as $k => $page) {
        $pages[$k]['main_pair'] = fn_get_image_pairs($page['page_id'], 'page', 'M', true, false, $lang_code);
    }

    return true;
}
?>