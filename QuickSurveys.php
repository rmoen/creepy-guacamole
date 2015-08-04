<?php
/**
 * QuickSurveys extension - Displays configured surveys on Mobile and Desktop.
 *
 * For more info see http://mediawiki.org/wiki/Extension:QuickSurveys
 *
 * @file
 * @ingroup Extensions
 * @author Bahodir Mansurov, Joaquin Hernandez, Jon Robson, Rob Moen 2015
 */
if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'QuickSurveys' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['QuickSurveys'] = __DIR__ . '/i18n';
	return;
} else {
	die( 'This version of the QuickSurveys extension requires MediaWiki 1.25+' );
}
