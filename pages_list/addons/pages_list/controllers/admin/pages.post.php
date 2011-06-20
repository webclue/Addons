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
// $Id: pages.php 11464 2010-12-23 14:59:10Z alexions $
//

if ( !defined('AREA') ) { die('Access denied'); }

/* POST data processing */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if ($mode == 'update') {
            $page_id = empty($_REQUEST['page_id']) ? $_REQUEST['page_data']['page_id'] : $_REQUEST['page_id'];
		if (!empty($_REQUEST['page_data']['page'])) {
			// Updating page image
			fn_attach_image_pairs('pages_main', 'page', $_REQUEST['page_data']['page_id'], DESCR_SL);
		}
	}
}
?>