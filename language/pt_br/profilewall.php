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
	'PROFILE_COMMENT'		=> 'Comentário no perfil',
	'PROFILE_COMMENTS'		=> 'Comentários no perfil',
	'XS_COMMENT'			=> 'Comentários',
	'XS_REPLIES'			=> 'Respostas',
	
	'WALL'      			=> 'Mural',

	'MESSAGE_NOT_EXISTS'	=> 'Essa mensagem não existe.',
	'NO_POST_PERMISSION'	=> 'Parece que você não tem permissão para postar',
    'INFOMSG'			    => 'Atenção!',
	
	'EDIT_NO_PERMISSION'	=> 'Você não tem permissão para editar esse comentário.',
	'EDIT_NO_POSTED_DATA'	=> 'Nenhum dado foi dado para edição.',
	'SUCCESSFUL_EDIT'		=> 'A mensagem foi editada com sucesso!',
	'SUCCESSFUL_ADDED'		=> 'A mensagem foi adicionada com sucesso!',
	'EDIT_GET_MUST_AJAX'	=> 'A recuperação de mensagens para edição deve ser feita via AJAX.',
	'MESSAGE_NOT_EXISTS'	=> 'Essa mensagem não existe.',
	'MESSAGE_TO_SHORT'		=> 'Esta mensagem é muito curta.',
	
	'POST_COMMENT'			=> 'Postar comentário',
	'RESTORE'				=> 'Restaurar',
	'SOFT_DELETED'			=> 'Soft Deleted',

	'AJAX_ISSUE'			=> 'Houve um problema AJAX.',

	'IS_SOFT_DELETED'		=> 'This comment has been soft deleted.',
	'IS_EDITED'				=> 'Esta mensagem é editada.',
	'S_DEL'					=> 'Soft Delete',
	'S_RESTORE'				=> 'Restore Soft Deleted Comment',
	'S_DEL_CONFIRM'			=> 'Are you sure you would like to soft delete this comment? Note that the comment will still be visible to the board\'s moderators.',
	'S_RESTORE_CONFIRM'		=> 'Tem certeza de que gostaria de restaurar esse comentário?',
	'DELETE_NO_PERMISSION'	=> 'Você não tem permissão para deletar comentários.',

	'LIKE'						=> 'Curtir esse comentário ou resposta',
	'LIKE_OWN_POST_ERROR'		=> 'Você não pode curtir/não curtir seu próprio post.',
	'LIKE_LIKE_TIME_ERROR'		=> 'Você não pode curtir - não curtir um post tão rápido!',
	'LIKE_DISLIKE_REMOVE_INFO'	=> 'Para remover seu não curtir, clique no botão de não curtir.',
	'LIKE_LIKE_REMOVE_INFO'		=> 'Para remover o seu curtir, clique no botão "curtir".',
	'LIKE_POST_NO_AUTH'			=> 'Você não está autorizado a curtir/não curtir este post.',
	'LIKE_MODE_ERROR'			=> 'Mode does not exist',
	'LIKE_POST_ERROR'			=> 'O post não existe',
	'LIKES_REMOVED'				=> 'Curtir removido',
	'LIKES_GIVEN'				=> 'Curtir dado',	
		
	'PROFILE_RETURN'		=> 'Retornar ao perfil do usuário',
));
