<?php

/*
 * This file is part of Contao My Test Bundle.
 *
 * (c) Medy 2021 <medy@gmail.com>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/medy/contao-my-test
 */

use Medy\ContaoMyTest\Model\MyTestModel;

/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['test_modules']['my_test'] = array(
	'tables' => array('tl_my_test')
);

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_my_test'] = MyTestModel::class;
