<?php

// src/Widget/Backend/CustomWidget.php
namespace Steffenu\ContaoExampleBundle\Widget\Backend;

use Contao\StringUtil;
use Contao\Widget;

class CustomWidget extends Widget
{
    protected $blnSubmitInput = true;
    protected $blnForAttribute = true;
    protected $strTemplate = 'be_widget';

    public function generate(): string
    {
        return sprintf(
            '<input type="text" name="%s" id="ctrl_%s" class="tl_custom_widget%s" value="%s">
             <p style="margin-top:5px;"> Extra Paragraph added for no reason ;)</p>
             <h1 style="color:red;">Some Random H1 Text </h1>',
            $this->name,
            $this->id,
            ($this->class ? ' ' . $this->class : ''),
            StringUtil::specialchars($this->value)
        );
    }
}