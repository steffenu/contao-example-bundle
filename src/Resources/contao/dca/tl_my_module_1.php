<?php

declare(strict_types=1);

/*
 * This file is part of Contao My Test Bundle.
 *
 * (c) Medy 2021 <medy@gmail.com>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/medy/contao-my-test
 */

/**
 * Table tl_my_module_1
 */
$GLOBALS['TL_DCA']['tl_my_module_1'] = array(
	// Config
	'config'      => array(
		'dataContainer'    => 'Table',
		'enableVersioning' => true,
		'sql'              => array(
			'keys' => array(
				'id' => 'primary'
			)
		),
	),

	'list'        => array(
		'sorting'           => array(
			'mode'        => 2,
			'fields'      => array('title'),
			'flag'        => 1,
			'panelLayout' => 'filter;sort,search,limit'
		),
		'label'             => array(
			'fields' => array('title'),
			'format' => '%s',
		),
		'global_operations' => array(
			'all' => array(
				'label'      => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'       => 'act=select',
				'class'      => 'header_edit_all',
				'attributes' => 'onclick="Backend.getScrollOffset()" accesskey="e"'
			)
		),
		'operations'        => array(
			'edit'   => array(
				'label' => &$GLOBALS['TL_LANG']['tl_my_module_1']['edit'],
				'href'  => 'act=edit',
				'icon'  => 'edit.gif'
			),
			'copy'   => array(
				'label' => &$GLOBALS['TL_LANG']['tl_my_module_1']['copy'],
				'href'  => 'act=copy',
				'icon'  => 'copy.gif'
			),
			'delete' => array(
				'label'      => &$GLOBALS['TL_LANG']['tl_my_module_1']['delete'],
				'href'       => 'act=delete',
				'icon'       => 'delete.gif',
				'attributes' => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
			),
			'show'   => array(
				'label'      => &$GLOBALS['TL_LANG']['tl_my_module_1']['show'],
				'href'       => 'act=show',
				'icon'       => 'show.gif',
				'attributes' => 'style="margin-right:3px"'
			),
		)
	),
	// Palettes
	'palettes'    => array(
		'default'      => '{first_legend},title,selectField,checkboxField,multitextField;{second_legend},addSubpalette;{customHtml_legend},customHtml'
	),

	// Fields
	'fields'      => array(
		'id'             => array(
			'sql' => "int(10) unsigned NOT NULL auto_increment"
		),
		'tstamp'         => array(
			'sql' => "int(10) unsigned NOT NULL default '0'"
		),
		'title'          => array(
			'inputType' => 'custom_widget',
			'exclude'   => true,
			'search'    => true,
			'filter'    => true,
			'sorting'   => true,
			'flag'      => 1,
			'eval'      => array('mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50'),
			'sql'       => "varchar(255) NOT NULL default ''"
		)
	)
);
