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
$german_array = array(
	'factions' => array(
			1 => 'Förderation',
			2 => 'TOS Förderation',
			3 => 'Klingonisches Reich',
			4 => 'Romulanisches Reich',
			5 => 'Dominion',
	),
	'classes' => array(
			0 => 'Unbekannt',
			1 => 'Ingineur',
			2 => 'Wissenschaftler',
			3 => 'Taktiker',
	),
	'races' => array(
		0	=> 'Unknown',
		//Fed
		1 => 'Andorianer',
		2 => 'Bajoraner',
		3 => 'Benzit',
		4 => 'Betazoid',
		5 => 'Bolianer',
		6 => 'Menschen',
		7 => 'Saurianer',
		8 => 'Trill',
		9 => 'Vereinigte Trill',
		10 => 'Vulkanier',
		11 => 'Tellariten',
		12 => 'Caitianer',
		13 => 'Rigelianer',
		14 => 'Pakled',
		15 => 'Klingonen',
		16 => 'Ferengi',
		17 => 'Talaxianer',
		18 => 'Ex-Borg',
		19 => 'Cardassianer',
			
		//TOS Fed
		20 => 'Andorianer',	
		21 => 'Menschen',
		22 => 'Tellariten',
		23 => 'Vulkanier',

		//Klingon Empire	
		24 => 'Gorn',
		25 => 'Klingonen',
		26 => 'Letheaner',
		27 => 'Nausikaaner',
		28 => 'Orioner',
		29 => 'Vereinigte Trill',
		30 => 'Feresaner',
		31 => 'Talaxianer',
		32 => 'Ex-Borg',
		33 => 'Cardassianer',
			
		//Romulan
		34 => 'Rolumaner',
		35 => 'Remaner',
		36 => 'Ex-Borg',
			
		//Domion
		37	=> "Jem'Hadar",
		38	=> "Jem'Hadar Vanguard",
	),

	'lang' => array(
		'sto'						=> 'Star Trek Online',
		'uc_faction'				=> 'Fraktion',
		'uc_race'					=> 'Rasse',
		'uc_class'					=> 'Spezialisierung',
		'uc_ruf'					=> 'Ruf',
		'uc_cat_uc_ruf'				=> 'Ruf',
		'uc_level'					=> 'Level',
		'uc_ruf_1'					=> 'Omage-Einsatzteam',
		'uc_ruf_2'					=> 'Nukara-Einsatzteam',
		'uc_ruf_3'					=> 'Neu-Romulus',
		'uc_ruf_4'					=> 'Dyson-Oberkommando',
		'uc_ruf_5'					=> 'Verteidiungskommando 8472',
		'uc_ruf_6'					=> 'Delta-Allianz',
		'uc_ruf_7'					=> 'Iconianer-Widerstand',
		'uc_ruf_8'					=> 'Terranische Sondereinheit',
		'uc_ruf_9'					=> 'Temporale Verteidigungsinitiative',
		'uc_ruf_10'					=> 'Lukari-Restaurationsinitiative',
		'uc_ruf_11'					=> 'Manöver-Wettkampf',
		'uc_ruf_12'					=> 'Gamme-Einsatzteam',
		'uc_ruf_13'					=> 'Ereignisse',
	),
);

?>