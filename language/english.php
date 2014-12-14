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
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'FED-Engineering',
		2	=> 'FED-Science',
		3	=> 'FED-Tactical',
		4	=> 'KDF-Engineering',
		5	=> 'KDF-Science',
		6	=> 'KDF-Tactical',
		7	=> 'RR-Engineering',
		8	=> 'RR-Science',
		9	=> 'RR-Tactical',
	),
	'races' => array(
		//Federation
		0	=> 'Unknown',
		1	=> 'Human',
		2	=> 'Vulcan',
		3	=> 'Bajoran',
		4	=> 'Bolian',
		5	=> 'Benzite ',
		6	=> 'Betazoid',
		7	=> 'Andorian',
		8	=> 'Saurian',
		9	=> 'Tellarite',
		10	=> 'Ferengi',
		11	=> 'Pakled',
		12	=> 'Caitian',
		13	=> 'Rigelian',
		//Klingon Empire
		14	=> 'Orion',
		15	=> 'Gorn',
		16	=> 'Nausicaan',
		17	=> 'Lethean',
		18	=> 'Ferasan',
		//Shared
		19	=> 'Klingon',
		20	=> 'Liberated Borg',
		21	=> 'Alien',
		22	=> 'Trill',
		23	=> 'Romulan',
		24	=> 'Reman',
	),

	'lang' => array(
		'sto'						=> 'Star Trek Online',
		'uc_race'					=> 'Race',
		'uc_class'					=> 'Class',
	),
);

?>