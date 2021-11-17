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

namespace Steffenu\StarterBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class SteffenuStarterBundle
 */
class SteffenuStarterBundle extends Bundle
{
	/**
	 * {@inheritdoc}
	 */
	public function build(ContainerBuilder $container): void
	{
		parent::build($container);
		
	}
}
