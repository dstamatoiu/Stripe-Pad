<?php

use StripePad\Exceptions\ViewException;
/**
 * View
 */
class View
{
	/**
	 * notification
	 *
	 * @var mixed
	 */
	var $notification;
	/**
	 * path
	 *
	 * @var mixed
	 */
	var $path;
	/**
	 * isAuthenticated
	 *
	 * @var mixed
	 */
	var $isAuthenticated;
	/**
	 * log
	 *
	 * @var mixed
	 */
	var $log;

	function __construct()
	{
		$this->log = log::singleton();
		
	}

	public function show($name = 'custom/home.php', $vars = array(), $show_menu = true)
	{
		try{
			$this->renderTemplate($name,$vars,$show_menu);		
		
		}catch(ViewException $e){
		
		}
	}	
	
	public function renderTemplate($name,$vars,$show_menu){
		$isAuthenticated = $this->isAuthenticated;
		/* Template meta data */
		$page = $name;
		$base_url = APP_DOMAIN;
		$base_title =  APP_NAME;
		$hookBeforeApp = '';
		# Defaults (not empty)
		$HOOK_JS = '';
		$SEO_TITLE = SEO_TITLE; # Default Meta Title
		$SEO_DESCRIPTION = SEO_DESCRIPTION; # Default meta tag description

		/* Template Data */
		if (is_array($vars)) foreach ($vars as $key => $value) $$key = $value;

		/* TEMPLATE
	    ***********************/
		$viewsFolder = APP_PATH . "views/";

		$template = $viewsFolder . $name;

		if (file_exists($template) == false) {
			throw new ViewException(ViewException::TPL_NOT_FOUND." ".$template);
			
		}

		if (DEBUG_MODE) {
			echo '<!-- Template StripePad: ' . $template . ' -->';
		}

		if ($isAuthenticated) {
			include $viewsFolder . "layout/private/header.php";
			include $viewsFolder . "layout/private/menu-private.php";
			include($template);
			include $viewsFolder . "layout/private/footer.php";
		} else {
			include $viewsFolder . "layout/public/header.php";
			include $viewsFolder . "layout/public/menu-public.php";
			include($template);
			include $viewsFolder . "layout/public/footer.php";
		}

		echo '<!-- Powered by StripePad {STRIPE_PAD_VERSION}-->';

		$this->log->push(str_replace(APP_DOMAIN, '/', getCurrentUrl()), 'pageview', get_masked_ip());
		if (isset($_SESSION['errors'])) unset($_SESSION['errors']);
		if (isset($_SESSION['alerts'])) unset($_SESSION['alerts']);
	}

	static function error404()
	{
		$log = log::singleton();
		$log->push(getCurrentUrl(), '404');
		header('HTTP/1.0 404 Not Found');
		include(APP_PATH.'views/errors/404.php');
	}
}
