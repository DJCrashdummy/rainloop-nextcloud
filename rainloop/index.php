<?php

/**
 * nextcloud - RainLoop mail plugin
 *
 * @author RainLoop Team & PAB
 * @copyright 2017 RainLoop Team & PAB
 *
 */

OCP\User::checkLoggedIn();
OCP\App::checkAppEnabled('rainloop');
\OC::$server->getNavigationManager()->setActiveEntry('rainloop_index');

// Load the empty file ../css/style.css, that's needed to allow theming of
// the Nextcloud header and navigation if rainloop is the active app.
OCP\Util::addStyle('rainloop', 'style');

include_once OC_App::getAppPath('rainloop').'/lib/RainLoopHelper.php';

$sUrl = OC_RainLoop_Helper::normalizeUrl(OC_RainLoop_Helper::getAppUrl());

$oTemplate = new OCP\Template('rainloop', 'index', 'user');
$oTemplate->assign('rainloop-iframe-url', OC_RainLoop_Helper::normalizeUrl($sUrl).'?OwnCloudAuth');

$oTemplate->printpage();
