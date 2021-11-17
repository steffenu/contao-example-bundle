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

namespace Steffenu\StarterBundle\Controller\ContentElement;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\ServiceAnnotation\ContentElement;
use Contao\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class TestElementController
 *
 * @ContentElement(TestElementController::TYPE, category="starter_elements", template="ce_test_element")
 */
class TestElementController extends AbstractContentElementController
{
    public const TYPE = 'test_element';

    /**
     * Generate the content element
     */
    protected function getResponse(Template $template, ContentModel $model, Request $request): ?Response
    {
        $template->text = $model->text;

        return $template->getResponse();
    }
}
