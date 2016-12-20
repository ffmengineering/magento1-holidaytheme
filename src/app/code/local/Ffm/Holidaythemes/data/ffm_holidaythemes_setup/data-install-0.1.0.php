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
 * Data installer for Xmas wishes
 *
 * @category    Ffm_Holidaythemes
 * @author      Sander Mangel <s.mangel@fitforme.nl>
 */

Mage::getModel('adminnotification/inbox')->parse([
    [
        'severity'      => Mage_AdminNotification_Model_Inbox::SEVERITY_NOTICE,
        'date_added'    => gmdate('Y-m-d H:i:s', time()),
        'title'         => 'Happy holidays from the FitForMe team!',
        'description'   => 'The whole FitForMe team wishes you a merry X-mas and a wonderful 2017',
        'url'           => 'https://www.fitforme.com/about-us/working-for-fitforme/'
    ]
]);
