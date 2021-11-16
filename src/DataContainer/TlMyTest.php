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

namespace Medy\ContaoMyTest\DataContainer;

use Contao\CoreBundle\ServiceAnnotation\Callback;
use Contao\DataContainer;
use Medy\ContaoMyTest\Model\MyTestModel;
use Twig\Environment as TwigEnvironment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class TlMyTest
{
    /**
     * @var TwigEnvironment
     */
    private $twig;

    /**
     * TlMyTest constructor.
     */
    public function __construct(TwigEnvironment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @Callback(table="tl_my_test", target="fields.title.input_field")
     *
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function generateCustomHtmlMarkup(DataContainer $dc): string
    {
        $objModel = MyTestModel::findByPk($dc->id);

        return "<h1>TEST</h1>";
/*         return $this->twig->render(
            '@MedyContaoMyTest/custom_html.html.twig',
            [
                'title' => $objModel ? $objModel->title : 'still empty',
            ]
        ); */
    }
}
