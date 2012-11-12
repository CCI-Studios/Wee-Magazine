<?php
class JConfig {
	public $offline = '0';
	public $offline_message = '';
	public $sitename = 'Wee Magazine';
	public $editor = 'jce';
	public $list_limit = '20';
	public $access = '1';
	public $debug = '0';
	public $debug_lang = '0';
	public $dbtype = 'mysqli';
	public $host = '';
	public $user = '';
	public $password = '';
	public $db = '';
	public $dbprefix = 'wnfw0_';
	public $live_site = '';
	public $secret = 'sYE9rBBldZJSNP7L';
	public $gzip = '0';
	public $error_reporting = '-1';
	public $helpurl = 'http://help.joomla.org/proxy/index.php?option=com_help&keyref=Help16:{keyref}';
	public $ftp_host = '127.0.0.1';
	public $ftp_port = '21';
	public $ftp_user = '';
	public $ftp_pass = '';
	public $ftp_root = '';
	public $ftp_enable = '0';
	public $offset = 'UTC';
	public $offset_user = 'UTC';
	public $mailer = 'mail';
	public $mailfrom = 'jbennett@ccistudios.com';
	public $fromname = 'Wee Magazine';
	public $sendmail = '/usr/sbin/sendmail';
	public $smtpauth = '0';
	public $smtpuser = '';
	public $smtppass = '';
	public $smtphost = 'localhost';
	public $smtpsecure = 'none';
	public $smtpport = '25';
	public $caching = '0';
	public $cache_handler = 'file';
	public $cachetime = '15';
	public $MetaDesc = '';
	public $MetaKeys = '';
	public $MetaAuthor = '1';
	public $sef = '1';
	public $sef_rewrite = '1';
	public $sef_suffix = '1';
	public $unicodeslugs = '1';
	public $feed_limit = '10';
	public $log_path = '/home/wee/public_html/log';
	public $tmp_path = '/home/wee/public_html/tmp';
	public $lifetime = '120';
	public $session_handler = 'database';
	public $MetaRights = '';
	public $sitename_pagetitles = '1';
	public $force_ssl = '0';
	public $feed_email = 'author';
	public $cookie_domain = '';
	public $cookie_path = '';
	public $MetaTitle = '1';
	public $legacy = '0';
	public $xmlrpc_server = '1';
	public $debug_db = '0';

	public function __construct() {
		$this->host = getenv('MYSQL_DB_HOST');
		$this->user = getenv('MYSQL_USERNAME');
		$this->password = getenv('MYSQL_PASSWORD');
		$this->db = getenv('MYSQL_DB_NAME');

		$this->log_path = dirname(__FILE__) . '/log';
		$this->tmp_path = dirname(__FILE__) . '/tmp';
		$this->secret = getenv('JOOMLA_SECRET');
	}
}