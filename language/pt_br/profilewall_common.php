<?php
/**
*
* Profile Wall
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
* Brazilian Portuguese translation by eunaumtenhoid [2018][ver 1.2.1] (https://github.com/phpBBTraducoes)
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
	'PROFILE_COMMENT'						=> array(
		1	=> '%1s comentário no perfil',
		2	=> '%1s comentários no perfil'
	),
	'PROFILE_REPLIES'						=> array(
		1	=> '%1s resposta no perfil',
		2	=> '%1s respostas no perfil'
	),
	
	'PROFILE_VIEW_COMMENT'					=> 'Comentários no perfil',
	'PROFILE_VIEW_REPLY'				    => 'Respostas no perfil',
	'PROFILE_WALL'							=> 'Mural do perfil',
	'POST_COMMENT'							=> 'Novo comentário',
	'POST_REPLY'							=> 'Postar resposta',
	'SHOW_REPLY'							=> 'Mostrar respostas',
	'HIDE_REPLY'							=> 'Ocultar respostas',
	'SHOW_COUNTERS'							=> 'Mostrar contadores',
	'SHOW_COUNTERS_EXPLAIN'					=> 'Exibe os contadores no tópico-perfil',
	'REPLY_ENABLED'							=> 'Ativar resposta',
	'REPLY_ENABLED_EXPLAIN'					=> 'Ativa resposta global',
	'HIDE_REPLY_EXPLAIN'					=> 'Oculta as respostas por padrão',
	'REPLY_PADDING'							=> 'Respondendo preenchimento',
	'REPLY_PADDING_EXPLAIN'					=> 'Quantidade de pixels que uma resposta é preenchimento da esquerda',
	'HIDE_FORM'								=> 'Ocultar formulário',
	'EDIT'									=> 'Editar',
	'COMMENT_UPDATED'						=> 'Respota atualizada',
	'NEW_COMMENT_PLACEHOLDER'			    => 'Digite seu comentário. BBcodes e smiles padrão são permitidos',

	'NOTIFICATION_PROFILE_COMMENT' 			=> '%1s postou um comentário no seu perfil.',
	'NOTIFICATION_PROFILE_COMMENT_OPTION'	=> 'Alguém postou um comentário no seu perfil',
	'NOTIFICATION_PROFILE_REPLY'			=> '%s postou uma resposta a um comentário.',
	'NOTIFICATION_PROFILE_COMMENT_REPLY'	=> 'Alguém respondeu uma das suas respostas em uma página de perfil',
));
