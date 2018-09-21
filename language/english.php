<?php
/*	Project:	EQdkp-Plus
 *	Package:	Star Trek Online game package
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
	'factions' => array(
			1 => 'Federation',
			2 => 'TOS Federation',
			3 => 'Klingon Empire',
			4 => 'Romulan Republic',
			5 => 'Dominion',
	),
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Engineering',
		2	=> 'Science',
		3	=> 'Tactical',
	),
	'races' => array(
			0	=> 'Unknown',
			//Fed
			1 => 'Andorian',
			2 => 'Bajoran',
			3 => 'Benzite',
			4 => 'Betazoid',
			5 => 'Bolian',
			6 => 'Human',
			7 => 'Saurian',
			8 => 'Trill',
			9 => 'Joined Trill',
			10 => 'Vulcan',
			11 => 'Tellarite',
			12 => 'Caitian',
			13 => 'Rigelian',
			14 => 'Pakled',
			15 => 'Klingon',
			16 => 'Ferengi',
			17 => 'Talaxian',
			18 => 'Liberated Borg',
			19 => 'Cardassian',
			
			//TOS Fed
			20 => 'Andorian',
			21 => 'Human',
			22 => 'Tellarite',
			23 => 'Vulcan',
			
			//Klingon Empire
			24 => 'Gorn',
			25 => 'Klingon',
			26 => 'Lethean',
			27 => 'Nausicaan',
			28 => 'Orion',
			29 => 'Joined Trill',
			30 => 'Ferasan',
			31 => 'Talaxian',
			32 => 'Liberated Borg',
			33 => 'Cardassian',
			
			//Romulan
			34 => 'Roluman',
			35 => 'Reman',
			36 => 'Liberated Borg',
			
			//Domion
			37	=> "Jem'Hadar",
			38	=> "Jem'Hadar Vanguard",
	),

	'lang' => array(
		'sto'						=> 'Star Trek Online',
		'uc_race'					=> 'Race',
		'uc_class'					=> 'Class',
		'uc_faction'				=> 'Faction',
		'uc_ruf'					=> 'Reputation',
		'uc_cat_uc_ruf'				=> 'Reputation',
		'uc_level'					=> 'Level',
		'uc_ruf_1'					=> 'Task Force Omega',
		'uc_ruf_2'					=> 'New Romulus',
		'uc_ruf_3'					=> 'Nukara Strikeforce',
		'uc_ruf_4'					=> 'Dyson Joint Command',
		'uc_ruf_5'					=> '8472 Counter-Command',
		'uc_ruf_6'					=> 'Delta Alliance',
		'uc_ruf_7'					=> 'Iconian Resistance',
		'uc_ruf_8'					=> 'Terran Task Force',
		'uc_ruf_9'					=> 'Temporal Defense Initiative',
		'uc_ruf_10'					=> 'Lukari Restoration Initiative',
		'uc_ruf_11'					=> 'Competitive Wargames',
		'uc_ruf_12'					=> 'Gamma Task Force',
		'uc_ruf_13'					=> 'Events',
	),
);

?>