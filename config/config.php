<?php
$fb_api_version = 'v2.11';


$fb_scope = isset($_GET['scope']) ? $_GET['scope'] : 'manage_pages,publish_pages,publish_actions,public_profile,ads_management,ads_read,business_management,pages_manage_cta,user_events,read_insights';
$fb_app_id = isset($_GET['appid']) ? $_GET['appid'] : '';
$fb_app_secret = isset($_GET['appsecret']) ? $_GET['appsecret'] : '';
$fb_page_id = isset($_GET['pageid']) ? $_GET['pageid'] : '331620140239896';
