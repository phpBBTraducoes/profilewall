<?php
/**
*
* Profile Wall
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
* Brazilian Portuguese translation by eunaumtenhoid (c) 2018 [ver 1.2.1] (https://github.com/phpBBTraducoes)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_PROFILEWALL'			    => 'Mural do perfil',
	'SS_HELPER_NOTY'	            => 'SiteSplat BBcore não existe!<br /> Baixe o <a href="http://sitesplat.com" target="_blank">BBcore</a> e copie a pasta BBcore em sua pasta de extensão sitesplat.',
	'PROFILEWALL_NOTICE'	        => '<div class="phpinfo"><p>A Configuração para esta extensão está em <strong>%1$s » %2$s » %3$s</strong>.<br/>Certifique-se de definir as tarefas de permissão. <strong>Permissões &#187; Tarefas de Permissão</strong> e ambos <strong>"Tarefas do moderador"</strong> e <strong>"Tarefas do usuário"</strong></p></div>',
	
	
	'ACL_U_PROFILE_WALL_VIEW'			=> 'Pode ver comentários de perfil',
	'ACL_U_PROFILE_WALL_EDIT'			=> 'Pode editar comentários de perfil',
	'ACL_U_PROFILE_WALL_POST'			=> 'Pode postar comentários de perfil',
	'ACL_U_PROFILE_WALL_LIKE'			=> 'Pode curtir comentários de perfil',

	'ACL_M_PROFILE_WALL_EDIT'			=> 'Pode editar comentários de perfil',
    'ACL_M_PROFILE_WALL_SOFT_DEL'		=> 'Pode soft delete comentários de perfil',
	'ACL_M_PROFILE_WALL_VIEW_SOFT_DEL'	=> 'Pode ver comentários de perfil soft delete',

));
