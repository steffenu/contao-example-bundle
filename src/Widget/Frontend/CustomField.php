<?php
// src/Widget/Frontend/CustomField.php
namespace Steffenu\ContaoExampleBundle\Widget\Frontend;

use Contao\Widget;

class CustomField extends Widget
{
    protected $blnSubmitInput = true;
    protected $blnForAttribute = true;
    protected $strTemplate = 'form_custom_field';
    protected $strPrefix = 'widget widget-custom-field';

    public function generate(): string
    {
        // Not actually used
        return '';
    }
}
