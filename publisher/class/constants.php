<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * @copyright       The XUUPS Project http://sourceforge.net/projects/xuups/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         Publisher
 * @subpackage      Include
 * @since           1.0
 * @author          trabis <lusopoemas@gmail.com>
 * @version         $Id: constants.php 10374 2012-12-12 23:39:48Z trabis $
 */

defined('XOOPS_ROOT_PATH') or die('Restricted access');

/**
 * Interface PublisherConstants
 */
interface PublisherConstants
{
// ITEM status
    const _PUBLISHER_STATUS_NOTSET    = -1;
    const _PUBLISHER_STATUS_ALL       = 0;
    const _PUBLISHER_STATUS_SUBMITTED = 1;
    const _PUBLISHER_STATUS_PUBLISHED = 2;
    const _PUBLISHER_STATUS_OFFLINE   = 3;
    const _PUBLISHER_STATUS_REJECTED  = 4;

// Notification Events
    const _PUBLISHER_NOT_CATEGORY_CREATED = 1;
    const _PUBLISHER_NOT_ITEM_SUBMITTED   = 2;
    const _PUBLISHER_NOT_ITEM_PUBLISHED   = 3;
    const _PUBLISHER_NOT_ITEM_REJECTED    = 4;

// Form constants
    const _PUBLISHER_SUMMARY = 1;
//const _PUBLISHER_DISPLAY_SUMMARY = 2;
    const _PUBLISHER_AVAILABLE_PAGE_WRAP = 3;
    const _PUBLISHER_ITEM_TAG            = 4;
    const _PUBLISHER_IMAGE_ITEM          = 5;
//const _PUBLISHER_IMAGE_UPLOAD = 6;
    const _PUBLISHER_ITEM_UPLOAD_FILE      = 7;
    const _PUBLISHER_UID                   = 8;
    const _PUBLISHER_DATESUB               = 9;
    const _PUBLISHER_STATUS                = 10;
    const _PUBLISHER_ITEM_SHORT_URL        = 11;
    const _PUBLISHER_ITEM_META_KEYWORDS    = 12;
    const _PUBLISHER_ITEM_META_DESCRIPTION = 13;
    const _PUBLISHER_WEIGHT                = 14;
    const _PUBLISHER_ALLOWCOMMENTS         = 15;
//const _PUBLISHER_PERMISSIONS_ITEM = 16;
//const _PUBLISHER_PARTIAL_VIEW = 17;
    const _PUBLISHER_DOHTML       = 18;
    const _PUBLISHER_DOSMILEY     = 19;
    const _PUBLISHER_DOXCODE      = 20;
    const _PUBLISHER_DOIMAGE      = 21;
    const _PUBLISHER_DOLINEBREAK  = 22;
    const _PUBLISHER_NOTIFY       = 23;
    const _PUBLISHER_SUBTITLE     = 24;
    const _PUBLISHER_AUTHOR_ALIAS = 25;

// Global constants
    const _PUBLISHER_SEARCH = 1;
    const _PUBLISHER_RATE   = 2;

// File status
    const _PUBLISHER_STATUS_FILE_NOTSET   = -1;
    const _PUBLISHER_STATUS_FILE_ACTIVE   = 1;
    const _PUBLISHER_STATUS_FILE_INACTIVE = 2;

}
