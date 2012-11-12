<?php
/**
 * @package AkeebaBackup
 * @copyright Copyright (c)2009-2012 Nicholas K. Dionysopoulos
 * @license GNU General Public License version 3, or later
 *
 * @since 1.3
 */

defined('_JEXEC') or die();

/**
 * A centralized place for GUI-related helper functions
 */
class AkeebaHelperIncludes
{
	static $viewHelpMap = array(
		'backup'		=> 'backup-now.html',
		'buadmin'		=> 'adminsiter-backup-files.html',
		'config'		=> 'configuration.html',
		'cpanel'		=> 'ch03.html#control-panel',
		'dbef'			=> 'database-tables-exclusion.html',
		'fsfilter'		=> 'exclude-data-from-backup.html#files-and-directories-exclusion',
		'log'			=> 'view-log.html',
		'profiles'		=> 'using-basic-operations.html#id4812849',
		'eff'			=> 'off-site-directories-inclusion.html',
		'extfilter'		=> 'extension-filters.html',
		'multidb'		=> 'include-data-to-archive.html#multiple-db-definitions',
		'regexdbfilter'	=> 'regex-database-tables-exclusion.html',
		'regexfsfilter'	=> 'regex-files-directories-exclusion.html',
		'stw'			=> 'stw.html',
		'restore'		=> '',
		'acl'			=> 'access-control.html'
	);

	static public function addHelp($view)
	{
		if( array_key_exists($view, self::$viewHelpMap) )
		{
			$page = self::$viewHelpMap[$view];
			if(empty($page)) return;
			self::addLiveHelpButton($page);
		}
	}

	static public function addLiveHelpButton( $page )
	{
		if(strpos($page, '.html') === false) $page .= '.html';
		if(strpos($page, '#') === false) $page .= '#maincol';
		$bar = JToolBar::getInstance('toolbar');
		$label = 'JTOOLBAR_HELP';
		$bar->appendButton( 'Popup', 'help', $label, 'https://www.akeebabackup.com/documentation/akeeba-backup-documentation/'.$page, 900, 500 );
	}
}