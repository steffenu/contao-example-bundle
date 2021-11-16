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

namespace Medy\ContaoMyTest;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class MedyContaoMyTest.
 */
class MedyContaoMyTest extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container): void
    {
        parent::build($container);
    }
}
