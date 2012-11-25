<?php
/**
* acp_permissions_titania (Titania Permission Set) [English]
*
* @package language
* @copyright (c) 2008 phpBB Customisation Database Team
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License, version 2
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

/**
*	MODDERS PLEASE NOTE
*
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
/*$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> 'Actions',
		'content'		=> 'Content',
		'forums'		=> 'Forums',
		'misc'			=> 'Misc',
		'permissions'	=> 'Permissions',
		'pm'			=> 'Private messages',
		'polls'			=> 'Polls',
		'post'			=> 'Post',
		'post_actions'	=> 'Post actions',
		'posting'		=> 'Posting',
		'profile'		=> 'Profile',
		'settings'		=> 'Settings',
		'topic_actions'	=> 'Topic actions',
		'user_group'	=> 'Users &amp; Groups',
	),
));*/

$lang['permission_cat']['titania'] = 'Titania';
$lang['permission_cat']['titania_moderate'] = 'Titania - Moderacja';

$lang = array_merge($lang, array(
	// Common
	'acl_u_titania_contrib_submit'		=> array('lang' => 'Może dodawać wpisy', 'cat' => 'titania'),
	'acl_u_titania_faq_create'			=> array('lang' => 'Może tworzyć wpisy w FAQ (dla własnych wpisów)', 'cat' => 'titania'),
	'acl_u_titania_faq_edit'			=> array('lang' => 'Może edytować wpisy w FAQ (dla własnych wpisów)', 'cat' => 'titania'),
	'acl_u_titania_faq_delete'			=> array('lang' => 'Może kasować wpisy w FAQ (dla własnych wpisów)', 'cat' => 'titania'),
	'acl_u_titania_rate'				=> array('lang' => 'Może oceniać', 'cat' => 'titania'),
	'acl_u_titania_topic'				=> array('lang' => 'Może tworzyć nowe tematy', 'cat' => 'titania'),
	'acl_u_titania_post'				=> array('lang' => 'Może tworzyć nowe posty', 'cat' => 'titania'),
	'acl_u_titania_post_approved'		=> array('lang' => 'Może pisać posty <strong>bez</strong> zatwierdzenia', 'cat' => 'titania'),
	'acl_u_titania_post_edit_own'		=> array('lang' => 'Może edytować własne posty', 'cat' => 'titania'),
	'acl_u_titania_post_delete_own'		=> array('lang' => 'Może kasować własne posty', 'cat' => 'titania'),
	'acl_u_titania_post_mod_own'		=> array('lang' => 'Może moderować własne tematy', 'cat' => 'titania'),
	'acl_u_titania_post_attach'			=> array('lang' => 'Może dodawać pliki do postów', 'cat' => 'titania'),
	'acl_u_titania_bbcode'				=> array('lang' => 'Może dodawać BBCode', 'cat' => 'titania'),
	'acl_u_titania_smilies'				=> array('lang' => 'Może dodawać uśmieszki', 'cat' => 'titania'),

	'acl_u_titania_post_hard_delete'	=> array('lang' => 'Może <strong>trwale</strong> usuwać posty i tematy (posty i temat, które użytkownik jest w stanie usunąć w inny sposób).', 'cat' => 'titania'),

	// Moderation
	'acl_u_titania_mod_author_mod'			=> array('lang' => 'Może moderować profile autorów', 'cat' => 'titania_moderate'),
	'acl_u_titania_mod_contrib_mod'			=> array('lang' => 'Może moderować wszystkie wpisy', 'cat' => 'titania_moderate'),
	'acl_u_titania_mod_faq_mod'				=> array('lang' => 'Może moderować wpisy w FAQ', 'cat' => 'titania_moderate'),
	'acl_u_titania_mod_rate_reset'			=> array('lang' => 'Może resetować oceny', 'cat' => 'titania_moderate'),
	'acl_u_titania_mod_post_mod'			=> array('lang' => 'Może moderować tematy', 'cat' => 'titania_moderate'),

	'acl_u_titania_mod_style_queue_discussion'			=> array('lang' => 'Może widzieć dyskusje kolejki stylów', 'cat' => 'titania_moderate'),
	'acl_u_titania_mod_style_queue'						=> array('lang' => 'Może widzieć kolejke stylów', 'cat' => 'titania_moderate'),
	'acl_u_titania_mod_style_validate'					=> array('lang' => 'Może sprawdzać style', 'cat' => 'titania_moderate'),
	'acl_u_titania_mod_style_moderate'					=> array('lang' => 'Może moderować style', 'cat' => 'titania_moderate'),
	'acl_u_titania_mod_style_clr'                       => array('lang' => 'Może edytować domyślne ColorizeIt', 'cat' => 'titania_moderate'),

	'acl_u_titania_mod_modification_queue_discussion'	=> array('lang' => 'Może widzieć dyskuje kolejki modyfikacji', 'cat' => 'titania_moderate'),
	'acl_u_titania_mod_modification_queue'				=> array('lang' => 'Może widzieć kolejke modyfikacji', 'cat' => 'titania_moderate'),
	'acl_u_titania_mod_modification_validate'			=> array('lang' => 'Może sprawdzać modyfikacje', 'cat' => 'titania_moderate'),
	'acl_u_titania_mod_modification_moderate'			=> array('lang' => 'Może moderować modyfikacje', 'cat' => 'titania_moderate'),

	'acl_u_titania_mod_translation_queue_discussion'		=> array('lang' => 'Może widzieć dyskusje kolejki tłumaczeń', 'cat' => 'titania_moderate'),
	'acl_u_titania_mod_translation_queue'					=> array('lang' => 'Może widzieć kolejkę tłumaczeń', 'cat' => 'titania_moderate'),
	'acl_u_titania_mod_translation_validate'				=> array('lang' => 'Może sprawdzać tłumaczenia', 'cat' => 'titania_moderate'),
	'acl_u_titania_mod_translation_moderate'				=> array('lang' => 'Może moderować tłumaczenia', 'cat' => 'titania_moderate'),

	'acl_u_titania_mod_converter_queue_discussion'		=> array('lang' => 'Może widzieć dyskusje kolejki konwerterów', 'cat' => 'titania_moderate'),
	'acl_u_titania_mod_converter_queue'					=> array('lang' => 'Może widzieć kolejkę konwerterów', 'cat' => 'titania_moderate'),
	'acl_u_titania_mod_converter_validate'				=> array('lang' => 'Może sprawdzać konwertery', 'cat' => 'titania_moderate'),
	'acl_u_titania_mod_converter_moderate'				=> array('lang' => 'Może moderować konwertery', 'cat' => 'titania_moderate'),

	'acl_u_titania_mod_bbcode_queue_discussion'			=> array('lang' => 'Może widzieć dyskusje kolejki Dodatkowych BBCode', 'cat' => 'titania_moderate'),
	'acl_u_titania_mod_bbcode_queue'					=> array('lang' => 'Może widzieć kolejkę Dodatkowych BBCode', 'cat' => 'titania_moderate'),
	'acl_u_titania_mod_bbcode_validate'					=> array('lang' => 'Może sprawdzać Dodatkowe BBCode', 'cat' => 'titania_moderate'),
	'acl_u_titania_mod_bbcode_moderate'					=> array('lang' => 'Może moderować Dodatkowe BBCode', 'cat' => 'titania_moderate'),
	
	'acl_u_titania_mod_bridge_queue_discussion'			=> array('lang' => 'Może widzieć dyskusje kolejki mostów', 'cat' => 'titania_moderate'),
	'acl_u_titania_mod_bridge_queue'					=> array('lang' => 'Może widzieć kolejkę mostów', 'cat' => 'titania_moderate'),
	'acl_u_titania_mod_bridge_validate'					=> array('lang' => 'Może sprawdzać mosty', 'cat' => 'titania_moderate'),
	'acl_u_titania_mod_bridge_moderate'					=> array('lang' => 'Może moderować mosty', 'cat' => 'titania_moderate'),

	'acl_u_titania_mod_official_tool_moderate'			=> array('lang' => 'Może zatwierdzać/moderować oficjalne narzędzia', 'cat' => 'titania_moderate'),

	'acl_u_titania_admin'			=> array('lang' => 'Może <strong>administrować</strong> Titanią', 'cat' => 'titania_moderate'),
));

?>