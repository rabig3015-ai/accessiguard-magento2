<?php
/**
 * SagunTech AccessiGuard Magento 2 Module Registration.
 *
 * @category  SagunTech
 * @package   SagunTech_AccessiGuard
 * @author    Rabi Ghimire <support@saguntech.com>
 * @license   GPL-2.0-or-later
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'SagunTech_AccessiGuard',
    __DIR__
);
