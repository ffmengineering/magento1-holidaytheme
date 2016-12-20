<?php
/**
 * Ffm_Holidaythemes extension.
 *
 *              *
 *             /.\
 *            /..'\
 *           /'.'.'\
 *          /.''.''.\
 *         /.'.'.'.'.\
 *  "'""""/'.''.'.''.'\""'"'"
 *        ^^^^[_]^^^^^^
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the OSL 3.0 License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/OSL-3.0
 *
 * @package       Ffm_Holidaythemes
 * @copyright      Copyright (c) 2016
 * @license        OSL 3.0 http://opensource.org/licenses/OSL-3.0
 */
/**
 * Observer adding feature toggles
 *
 * @category    Ffm_Holidaythemes
 * @author      Sander Mangel <s.mangel@fitforme.nl>
 */
class Ffm_Holidaythemes_Model_Observers_AddMyAccountSection
{
    public function coreBlockAbstractToHtmlBefore($event)
    {
        $this->addMyAccountSection($event);
    }

    protected function addMyAccountSection($event)
    {
        /** @var Mage_Core_Block_Abstract $block */
        $block = $event->getEvent()->getBlock();

        if ($block instanceof Mage_Adminhtml_Block_System_Account_Edit_Form) {
            /** @var Varien_Data_Form $form */
            $form = $block->getForm();

            if ($form instanceof Varien_Data_Form) {

                $fieldset = $form->addFieldset('theme_fieldset', ['legend' => Mage::helper('adminhtml')->__('Theme settings')]);

                $snow2016url = Mage::getModel('adminhtml/url')->getUrl('*/ffmtheme/removeSession', ['theme' => 'snow2016']);
                $fieldset->addField('snow2016', 'note', [
                    'label' => Mage::helper('core')->__('Winter 2016'),
                    'text' => '',
                    'name'  => 'snow2016',
                    'after_element_html' => '<button type="button" onclick="window.location.href=\''.$snow2016url.'\'">Toggle on / off</button>'
                ]);
            }
        }
    }
}
