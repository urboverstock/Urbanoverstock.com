<?php
if(!defined('ACTIVE_STATUS')) define('ACTIVE_STATUS', '1');
if(!defined('PRDOCUT_IMAGE_TYPE')) define('PRDOCUT_IMAGE_TYPE', 'I');
if(!defined('PRDOCUT_VIDEO_TYPE')) define('PRDOCUT_VIDEO_TYPE', 'V');
if(!defined('COMMON_ERROR')) define('COMMON_ERROR', 'Something went wrong, please try again later!');

defined('ORDER_PENDING') OR define('ORDER_PENDING', 0);
defined('ORDER_PROCESS') OR define('ORDER_PROCESS', 1);
defined('ORDER_ON_DELIVERY') OR define('ORDER_ON_DELIVERY', 2);
defined('ORDER_COMPLETED') OR define('ORDER_COMPLETED', 3);
defined('ORDER_DECLINED') OR define('ORDER_DECLINED', 4);

defined('LOGOUT') OR define('LOGOUT', 0);
defined('LOGIN') OR define('LOGIN', 1);