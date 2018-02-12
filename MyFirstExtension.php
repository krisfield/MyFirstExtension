<?php

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'MyFirstExtension' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['MyFirstExtension'] = __DIR__ . '/i18n';
	$wgExtensionMessagesFiles['MyFirstExtensionAlias'] = __DIR__ . '/MyFirstExtension.i18n.alias.php';
	$wgExtensionMessagesFiles['MyFirstExtensionMagic'] = __DIR__ . '/MyFirstExtension.i18n.magic.php';
	wfWarn(
		'Deprecated PHP entry point used for MyFirstExtension extension. Please use wfLoadExtension ' .
		'instead, see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return true;
} else {
	die( 'This version of the MyFirstExtension extension requires MediaWiki 1.25+' );
}
