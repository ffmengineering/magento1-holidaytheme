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
 * Themes admin controller.
 *
 * @category    Ffm_Holidaythemes
 * @author      Sander Mangel <s.mangel@fitforme.nl>
 */
class Ffm_Holidaythemes_Adminhtml_FfmthemeController extends Mage_Adminhtml_Controller_Action
{

    /**
     * init the location.
     *
     * @return Ffm_Locations_Model_Location
     */
    public function removeSessionAction()
    {
        $theme = $this->getRequest()->getParam('theme');

        $session = $this->getSession();
        $currentValue = $session->getData("holidaytheme_once_{$theme}");
        $session->setData("holidaytheme_once_{$theme}", ($currentValue == 0) ? 1 : 0);

        $this->_redirect('*/system_account/');
    }

    /**
     * get the Admin session
     * @return Mage_Admin_Model_Session
     */
    protected function getSession()
    {
        return Mage::getSingleton('admin/session');
    }

    /**
     * Check if admin has permissions to visit controller.
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('system/myaccount');
    }
}
