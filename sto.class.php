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

if(!class_exists('sto')) {
	class sto extends game_generic {
		protected static $apiLevel	= 20;
		public $version				= '1.1.0';
		protected $this_game		= 'sto';
		protected $types			= array('classes', 'races');
		protected $classes			= array();
		protected $races			= array();
		protected $factions			= array();
		public $langs				= array('english', 'german');

		protected $class_dependencies = array(
			array(
				'name'		=> 'race',
				'type'		=> 'races',
				'admin'		=> false,
				'decorate'	=> true,
				'parent'	=> false
			),
			array(
				'name'		=> 'class',
				'type'		=> 'classes',
				'admin'		=> false,
				'decorate'	=> true,
				'primary'	=> true,
				'colorize'	=> true,
				'roster'	=> true,
				'recruitment' => true,
				'parent'	=> false
			),
		);

		protected $class_colors = array(
			1	=> '#c69f44',
			2	=> '#256895',
			3	=> '#aa251f',
			4	=> '#c69f44',
			5	=> '#256895',
			6	=> '#aa251f',
			7	=> '#c69f44',
			8	=> '#256895',
			9	=> '#aa251f',
			10	=> '#c69f44',
			11	=> '#256895',
			12	=> '#aa251f',
			13	=> '#c69f44',
			14	=> '#256895',
			15	=> '#aa251f',
		);

		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= false;
		public $lang			= false;

		protected function load_filters($langs) {}

		public function install($install=false){}
	}
}
?>