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

use Steffenu\StarterBundle\Controller\ContentElement\TestElementController;

/**
 * Content element
 */
$GLOBALS['TL_LANG']['CTE']['starter_elements'] = 'Example Starter Elemente';
$GLOBALS['TL_LANG']['CTE'][TestElementController::TYPE] = ['Test Content Element', 'Zum Testen'];

/**
 * Miscelaneous
 */
//$GLOBALS['TL_LANG']['MSC'][''] = '';

/**
 * Errors
 */
//$GLOBALS['TL_LANG']['ERR'][''] = '';
