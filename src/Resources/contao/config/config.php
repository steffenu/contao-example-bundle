<?php

/*
 * This file is part of Starter Bundle.
 * 
 * (c) Steffen Unger 2021 <steffen.development@gmail.com>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/steffenu/starter-bundle
 */

use Steffenu\StarterBundle\Model\BackendStarterModel;

/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['starter_backend_modules']['starter_backend_collection'] = array(
    'tables' => array('tl_backend_starter')
);

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_backend_starter'] = BackendStarterModel::class;
