 <?php   

use Steffenu\ContaoExampleBundle\Widget\Backend\CustomWidget;
    
    // contao/config/config.php
/*     $GLOBALS['BE_MOD']['content']['my_module_1'] = [
        'tables' => ['tl_my_module_1'],
    ]; */


/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['steffen_modules']['my_module_1'] = array(
	'tables' => array('tl_my_module_1')
);

/* 
* Widget
*/



$GLOBALS['BE_FFL']['custom_widget'] = CustomWidget::class;