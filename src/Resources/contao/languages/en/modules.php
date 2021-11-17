<?php

declare(strict_types=1);

/*
 * This file is part of Starter Bundle.
 * 
 * (c) Steffen Unger 2021 <steffen.development@gmail.com>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/steffenu/starter-bundle
 */

use Steffenu\StarterBundle\Controller\FrontendModule\StarterFrontendCollectionController;

/**
 * Backend modules
 */
$GLOBALS['TL_LANG']['MOD']['starter_backend_modules'] = 'Starter Backend Modul';
$GLOBALS['TL_LANG']['MOD']['starter_backend_collection'] = ['Test Backend Modul', 'Zum Testen'];

/**
 * Frontend modules
 */
$GLOBALS['TL_LANG']['FMD']['starter_frontend_modules'] = 'Starter Frontend Modul';
$GLOBALS['TL_LANG']['FMD'][StarterFrontendCollectionController::TYPE] = ['Test Frontend Modul', 'Zum Testen'];

