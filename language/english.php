<?php
/*	Project:	EQdkp-Plus
 *	Package:	Tochlight 2 game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$english_array =  array(
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Berserk',
		2	=> 'Engineer',
		3	=> 'Outlander',
		4	=> 'Embermage'
	),

	'races' => array(
		0	=> 'Unknown',
		1	=> 'Human',
	),
	'factions' => array(
		'normal'		=> 'Normal',
		'monsterplay'	=> 'MonsterPlay'
	),
	'lang' => array(
		'torchlight2'				=> 'Torchlight 2',
		'uc_race'					=> 'Race',
		'uc_class'					=> 'Class',

		// Admin Settings
		'core_sett_fs_gamesettings'	=> 'Torchlight 2 Settings',
		'uc_faction'				=> 'Faction',
		'uc_faction_help'			=> 'Select the default faction',
	),
);

?>