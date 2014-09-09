<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:		2011
 * Date:		$Date$
 * -----------------------------------------------------------------------
 * @author		$Author$
 * @copyright	2006-2011 EQdkp-Plus Developer Team
 * @link		http://eqdkp-plus.com
 * @package		eqdkp-plus
 * @version		$Rev$
 * 
 * $Id$
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$german_array = array(
	'classes' => array(
		0	=> 'Unbekannt',
		1	=> 'Berserker',
		2	=> 'Ingenieur',
		3	=> 'Outlander',
		4	=> 'Embermage',
	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Mensch',
	),
	'factions' => array(
		'normal'		=> 'Normal',
		'monsterplay'	=> 'MonsterPlay'
	),
	'lang' => array(
		'torchlight2'					=> 'Torchlight 2',
		'uc_race'						=> 'Rasse',
		'uc_class'						=> 'Klasse',

		// Admin Settings
		'core_sett_fs_gamesettings'		=> 'Torchlight 2 Einstellungen',
		'uc_faction'					=> 'Fraktion',
		'uc_faction_help'				=> 'Wähle die Standard-Fraktion',
	),
);

?>