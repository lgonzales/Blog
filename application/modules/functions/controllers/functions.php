<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Functions extends MX_Controller 
{
	function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
		header('Location:	' . base_url() );
	}
	
	public function createLoginBox ( $data )
	{
       	$user = ( $data['user'] != "X" ) ? $data['user'] : "Invitado";
		$content = '<div id="toppanel">
			<div id="panel">
				<div class="content clearfixlogin">
					<div class="left">
						<h1>'.$data['title'].'</h1>
						<h2>'.$data['slogan'].'</h2>		
						<p class="grey">'.$data['content']['body'].'</p>
						<h2>'.$data['content']['pie'].'</h2>
					</div>
					<div class="left">
						<!-- Login Form -->
						<form class="clearfixlogin" action="#" method="post">
							<h1>Ingreso de Usuarios</h1>
							<label class="grey" for="log">Email:</label>
							<input class="field" type="text" name="log" id="log" value="" size="23" />
							<label class="grey" for="pwd">Password:</label>
							<input class="field" type="password" name="pwd" id="pwd" size="23" />
				    	<label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Recordarme</label>
						<div class="clearlogin"></div>
							<input type="submit" name="submit" value="Ingresar" class="bt_login" />
							<a class="lost-pwd" href="'.base_url().'userCp/lostPwd">Olvido su Password?</a>
						</form>
					</div>
					<div class="left right">			
						<!-- Register Form -->
						<form action="#" method="post">
							<h1>No eres Usuario? Registrate ahora!</h1>				
							<label class="grey" for="signup">Nombres:</label>
							<input class="field" type="text" name="fname" id="fname" value="" size="23" />
							<label class="grey" for="signup">Apellidos:</label>
							<input class="field" type="text" name="lname" id="lname" value="" size="23" />
							<label class="grey" for="email">Email:</label>
							<input class="field" type="text" name="email" id="email" size="23" />
							<label>El Password se le enviara a su direccion de correo.</label>
							<input type="submit" name="submit" value="Registrarse" class="bt_register" />
						</form>
					</div>
				</div>
			</div>
			<div class="tab">
				<ul class="login">
					<li class="left">&nbsp;</li>
					<li >Hola '.$user.'!</li>
					<li class="sep">|</li>
					<li id="toggle">
						<a id="open" class="open" href="#">Ingresar | Registrarse</a>
						<a id="close" style="display: none;" class="close" href="#">Cerrar el panel</a>			
					</li>
					<li class="right">&nbsp;</li>
				</ul> 
			</div>
		</div>
		';
		return $content;
	}
	
	public function includeFileHeader ( $array, $type = 'CSS', $template = 'X' )
	{
		$regreso = "";
		switch ($type)
		{
			case 'text/javascript':
			
			break;
			case 'text/css':
			
			break;
			case 'JS':
				foreach ( $array as $key => $value )
				{
					if (  $template == 'X' )
					{
						$regreso .= "<script src=\"".base_url()."resources/common/js/".$value.".js\"></script>\n";
					} else {
						$regreso .= "<script src=\"".base_url()."resources/common/template/".$template."/".$value.".js\"></script>\n";
					}
				}
			break;
			default:
				foreach ( $array as $value )
				{
					if ( $template == 'X' )
					{
						$regreso .= "<link rel=\"stylesheet\" href=\"".base_url()."resources/common/css/".$value.".css\" />\n";
					} else {
						$regreso .= "<link rel=\"stylesheet\" href=\"".base_url()."resources/templates/".$template."/css/".$value.".css\" />\n";
					}
				}
			break;
		}
		return $regreso;
	}
}
