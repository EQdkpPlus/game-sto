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
	'classes' => array(
		0	=> 'Unbekannt',
		1	=> 'FED-Ingenieur',
		2	=> 'FED-Wissenschaftler',
		3	=> 'FED-Taktiker',
		4	=> 'KDF-Ingenieur',
		5	=> 'KDF-Wissenschaftler',
		6	=> 'KDF-Taktiker',
		7	=> 'RR-Ingenieur',
		8	=> 'RR-Wissenschaftler',
		9	=> 'RR-Taktiker',
	),
	'races' => array(
		//Federation
		0	=> 'Unknown',
		1	=> 'Menschen',
		2	=> 'Vulkanier',
		3	=> 'Bajoraner',
		4	=> 'Bolian',
		5	=> 'Benzite ',
		6	=> 'Betazoiden',
		7	=> 'Andorian',
		8	=> 'Saurian',
		9	=> 'Tellariten',
		10	=> 'Ferengi',
		11	=> 'Pakled',
		12	=> 'Caitian',
		13	=> 'Rigelian',
		//Klingon Empire
		14	=> 'Orioner',
		15	=> 'Gorn',
		16	=> 'Nausicaaner',
		17	=> 'Lethean',
		18	=> 'Ferasan',
		//Shared
		19	=> 'Klingonen',
		20	=> 'Liberated Borg',
		21	=> 'Alien',
		22	=> 'Trill',
		23	=> 'Romulaner',
		24	=> 'Remaner',
	),

	'lang' => array(
		'sto'						=> 'Star Trek Online',
		'uc_race'					=> 'Rasse',
		'uc_class'					=> 'Klasse',
	),
);

?>