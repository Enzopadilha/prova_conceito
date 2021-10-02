<?php
class JConfig {
	public $offline = false;
	public $offline_message = 'Este site está em manutenção.<br>Por favor, volte em breve.';
	public $display_offline_message = 1;
	public $offline_image = '';
	public $sitename = 'Enzo';
	public $editor = 'tinymce';
	public $captcha = '0';
	public $list_limit = 20;
	public $access = 1;
	public $debug = false;
	public $debug_lang = false;
	public $debug_lang_const = true;
	public $dbtype = 'mysql';
	public $host = 'db';
	public $user = 'joomla';
	public $password = 'teste';
	public $db = 'joomla_enzo';
	public $dbprefix = 'ub1vr_';
	public $dbencryption = 0;
	public $dbsslverifyservercert = false;
	public $dbsslkey = '';
	public $dbsslcert = '';
	public $dbsslca = '';
	public $dbsslcipher = '';
	public $force_ssl = 0;
	public $live_site = '';
	public $secret = 'N8hgQvLcyk0pHRQb';
	public $gzip = false;
	public $error_reporting = 'default';
	public $helpurl = 'https://help.joomla.org/proxy?keyref=Help{major}{minor}:{keyref}&lang={langcode}';
	public $offset = 'UTC';
	public $mailonline = true;
	public $mailer = 'mail';
	public $mailfrom = 'enzo.padilha@iesb.edu.br';
	public $fromname = 'Enzo';
	public $sendmail = '/usr/sbin/sendmail';
	public $smtpauth = false;
	public $smtpuser = '';
	public $smtppass = '';
	public $smtphost = 'localhost';
	public $smtpsecure = 'none';
	public $smtpport = 25;
	public $caching = 0;
	public $cache_handler = 'file';
	public $cachetime = 15;
	public $cache_platformprefix = false;
	public $MetaDesc = '';
	public $MetaAuthor = true;
	public $MetaVersion = false;
	public $robots = '';
	public $sef = true;
	public $sef_rewrite = false;
	public $sef_suffix = false;
	public $unicodeslugs = false;
	public $feed_limit = 10;
	public $feed_email = 'none';
	public $log_path = '/app/administrator/logs';
	public $tmp_path = '/app/tmp';
	public $lifetime = 15;
	public $session_handler = 'database';
	public $shared_session = false;
	public $session_metadata = true;
}