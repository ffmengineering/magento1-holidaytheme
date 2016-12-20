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
 * Overlay block
 *
 * @category    Ffm_Holidaythemes
 * @author      Sander Mangel <s.mangel@fitforme.nl>
 */
class Ffm_Holidaythemes_Block_Adminhtml_Overlay extends Mage_Adminhtml_Block_Abstract
{
    /**
     * check if user has seen action already by key
     * @param $key string
     * @return bool
     */
    public function showTheme($key)
    {
        $session = $this->getSession();

        return ($session->getData("holidaytheme_once_{$key}") == 1) ? true : false;
    }

    /**
     * @param string $key
     * @return string
     */
    public function getToggleUrl($key)
    {
        return Mage::getModel('adminhtml/url')->getUrl('*/ffmtheme/removeSession', ['theme' => $key]);
    }

    /**
     * get the Admin session
     * @return Mage_Admin_Model_Session
     */
    protected function getSession()
    {
        return Mage::getSingleton('admin/session');
    }
}