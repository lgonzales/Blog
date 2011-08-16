<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller 
{
	function __construct()
        {
                parent::__construct();
	}

	public function index()
	{
		$includeCssExtern = array(
			'maqueta'
		);
		$includeCss = modules::run('functions/includeFileHeader', $includeCssExtern, 'CSS', 'default');
		$includeJs = array(
			'jquery.header'
		);
		$dataLogin = array(
			'title'		=> 'Titulo de mi pagina web'
			,'slogan'	=> 'Slogan de mi Pagina Web'
			,'user'		=> 'Invitado'
			,'content'	=> array(
				'body'		=> 'Contenido xD'
				,'footer'	=> 'Pie de pagina'
			)
		);
        $header['title'] 		= 'Blog :: Tutorial CodeIgniter :: Quizzpot ';
        $header['extraScripts'] = '';
        $header['includeScripts'] = modules::run('functions/includeFileHeader',$includeJs, 'JS');
        $header['includeCss'] = $includeCss;
        $header['topBarLogin']	= modules::run('functions/createLoginBox', $dataLogin);
       	$this->load->view('header', $header);
	}
}
