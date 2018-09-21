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
		public $version				= '1.1.2';
		protected $this_game		= 'sto';
		protected $types			= array('classes', 'races', 'factions');
		protected $classes			= array();
		protected $races			= array();
		protected $factions			= array();
		public $langs				= array('english', 'german');

		protected $class_dependencies = array(
			array(
					'name'		=> 'faction',
					'type'		=> 'factions',
					'admin'		=> false,
					'decorate'	=> true,
					'parent'	=> false,
					'colorize'	=> true,
			),
				
			array(
				'name'		=> 'race',
				'type'		=> 'races',
				'admin'		=> false,
				'decorate'	=> true,
				'parent'	=> array(
					'faction' => array(
						1 => array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19),
						2 => array(0,20,21,22,23),
						3 => array(0,24,25,26,27,28,29,30,31,32,33),
						4 => array(0,34,35,36),
						5 => array(0,37,38),
					),
				),
			),
			array(
				'name'		=> 'class',
				'type'		=> 'classes',
				'admin'		=> false,
				'decorate'	=> false,
				'primary'	=> true,
				'colorize'	=> false,
				'roster'	=> true,
				'recruitment' => true,
					'parent'	=> array(
							'faction' => array(
									1 => 'all',
									2 => 'all',
									3 => 'all',
									4 => 'all',
									5 => 'all',
							),
					),
			),
		);

		protected $class_colors = array(
			1	=> '#c69f44',
			2	=> '#256895',
			3	=> '#aa251f',
		);

		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= false;
		public $lang			= false;

		protected function load_filters($langs) {}

		public function install($install=false){}
		
		public function profilefields(){
			// Category 'character' is a fixed one! All others are created dynamically!
			$this->load_type('professions', array($this->lang));
			$this->load_type('realmlist', array($this->lang));
			$xml_fields = array(
					'level'	=> array(
							'type'			=> 'spinner',
							'category'		=> 'character',
							'lang'			=> 'uc_level',
							'max'			=> 65,
							'min'			=> 1,
							'undeletable'	=> false,
							'sort'			=> 4
					),
					'ruf1'	=> array(
							'type'			=> 'dropdown',
							'category'		=> 'uc_ruf',
							'lang'			=> 'uc_ruf_1',
							'options'		=> array(''=>'', 'I' => 'I', 'II' => 'II', 'III' => 'III', 'IV' => 'IV', 'V' => 'V'),
							'tolang'		=> true,
							'undeletable'	=> false,
							'sort'			=> 1
					),
					'ruf2'	=> array(
							'type'			=> 'dropdown',
							'category'		=> 'uc_ruf',
							'lang'			=> 'uc_ruf_2',
							'options'		=> array(''=>'', 'I' => 'I', 'II' => 'II', 'III' => 'III', 'IV' => 'IV', 'V' => 'V'),
							'tolang'		=> true,
							'undeletable'	=> false,
							'sort'			=> 1
					),
					'ruf3'	=> array(
							'type'			=> 'dropdown',
							'category'		=> 'uc_ruf',
							'lang'			=> 'uc_ruf_3',
							'options'		=> array(''=>'', 'I' => 'I', 'II' => 'II', 'III' => 'III', 'IV' => 'IV', 'V' => 'V'),
							'tolang'		=> true,
							'undeletable'	=> false,
							'sort'			=> 1
					),
					'ruf4'	=> array(
							'type'			=> 'dropdown',
							'category'		=> 'uc_ruf',
							'lang'			=> 'uc_ruf_4',
							'options'		=> array(''=>'', 'I' => 'I', 'II' => 'II', 'III' => 'III', 'IV' => 'IV', 'V' => 'V'),
							'tolang'		=> true,
							'undeletable'	=> false,
							'sort'			=> 1
					),
					'ruf5'	=> array(
							'type'			=> 'dropdown',
							'category'		=> 'uc_ruf',
							'lang'			=> 'uc_ruf_5',
							'options'		=> array(''=>'', 'I' => 'I', 'II' => 'II', 'III' => 'III', 'IV' => 'IV', 'V' => 'V'),
							'tolang'		=> true,
							'undeletable'	=> false,
							'sort'			=> 1
					),
					'ruf6'	=> array(
							'type'			=> 'dropdown',
							'category'		=> 'uc_ruf',
							'lang'			=> 'uc_ruf_6',
							'options'		=> array(''=>'', 'I' => 'I', 'II' => 'II', 'III' => 'III', 'IV' => 'IV', 'V' => 'V'),
							'tolang'		=> true,
							'undeletable'	=> false,
							'sort'			=> 1
					),
					'ruf7'	=> array(
							'type'			=> 'dropdown',
							'category'		=> 'uc_ruf',
							'lang'			=> 'uc_ruf_7',
							'options'		=> array(''=>'', 'I' => 'I', 'II' => 'II', 'III' => 'III', 'IV' => 'IV', 'V' => 'V'),
							'tolang'		=> true,
							'undeletable'	=> false,
							'sort'			=> 1
					),
					'ruf8'	=> array(
							'type'			=> 'dropdown',
							'category'		=> 'uc_ruf',
							'lang'			=> 'uc_ruf_8',
							'options'		=> array(''=>'', 'I' => 'I', 'II' => 'II', 'III' => 'III', 'IV' => 'IV', 'V' => 'V'),
							'tolang'		=> true,
							'undeletable'	=> false,
							'sort'			=> 1
					),
					'ruf9'	=> array(
							'type'			=> 'dropdown',
							'category'		=> 'uc_ruf',
							'lang'			=> 'uc_ruf_9',
							'options'		=> array(''=>'', 'I' => 'I', 'II' => 'II', 'III' => 'III', 'IV' => 'IV', 'V' => 'V'),
							'tolang'		=> true,
							'undeletable'	=> false,
							'sort'			=> 1
					),
					'ruf10'	=> array(
							'type'			=> 'dropdown',
							'category'		=> 'uc_ruf',
							'lang'			=> 'uc_ruf_10',
							'options'		=> array(''=>'', 'I' => 'I', 'II' => 'II', 'III' => 'III', 'IV' => 'IV', 'V' => 'V'),
							'tolang'		=> true,
							'undeletable'	=> false,
							'sort'			=> 1
					),
					'ruf11'	=> array(
							'type'			=> 'dropdown',
							'category'		=> 'uc_ruf',
							'lang'			=> 'uc_ruf_11',
							'options'		=> array(''=>'', 'I' => 'I', 'II' => 'II', 'III' => 'III', 'IV' => 'IV', 'V' => 'V'),
							'tolang'		=> true,
							'undeletable'	=> false,
							'sort'			=> 1
					),
					'ruf12'	=> array(
							'type'			=> 'dropdown',
							'category'		=> 'uc_ruf',
							'lang'			=> 'uc_ruf_12',
							'options'		=> array(''=>'', 'I' => 'I', 'II' => 'II', 'III' => 'III', 'IV' => 'IV', 'V' => 'V'),
							'tolang'		=> true,
							'undeletable'	=> false,
							'sort'			=> 1
					),
					'ruf13'	=> array(
							'type'			=> 'dropdown',
							'category'		=> 'uc_ruf',
							'lang'			=> 'uc_ruf_13',
							'options'		=> array(''=>'', 'I' => 'I', 'II' => 'II', 'III' => 'III', 'IV' => 'IV', 'V' => 'V'),
							'tolang'		=> true,
							'undeletable'	=> false,
							'sort'			=> 1
					),
			);
			return $xml_fields;
		}
	}
}
?>
