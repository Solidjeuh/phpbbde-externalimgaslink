<?php
/**
*
* External Image as link [English]
*
* @package language
* @copyright (c) 2016-2018 phpbb.de
* Nederlandse vertaling @ Solidjeuh <https://www.muziekpromo.net>
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
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
	'EXTIMGASLINK_CONFIG'			=> 'Toegestane afbeeldingen',
	'EXTIMGASLINK_CONFIG_EXPLAIN'	=> 'U kunt alleen afbeeldingen toestaan die afkomstig zijn van het domein van dit forum, of van zowel dit forum als externe beveiligde websites. Alle andere afbeeldingen worden vervangen door koppelingen.',
	'EXTIMGASLINK_INVALID_CONFIG'	=> 'De afbeelding bron die u hebt opgegeven, is ongeldig.',
	'EXTIMGASLINK_SECURE_SITES'		=> 'Alleen afbeeldingen van beveiligde websites en dit domein',
	'EXTIMGASLINK_SERVER_ONLY'		=> 'Alleen afbeeldingen van dit domein',

	'EXTIMGLINK'	=> '[ externe afbeelding ]',
));
