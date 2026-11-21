<?php
/**
 * Frontend Widget Block for SagunTech AccessiGuard.
 *
 * @category  SagunTech
 * @package   SagunTech_AccessiGuard
 * @license   GPL-2.0-or-later
 */

namespace SagunTech\AccessiGuard\Block;

use Magento\Framework\View\Element\Template;
use Magento\Store\Model\ScopeInterface;

class Widget extends Template
{
    private const XML_PATH_ENABLED = 'accessiguard/general/enabled';
    private const XML_PATH_POSITION = 'accessiguard/general/position';
    private const XML_PATH_ACCENT_COLOR = 'accessiguard/general/accent_color';
    private const XML_PATH_SHOW_POWERED_BY = 'accessiguard/general/show_powered_by';

    /**
     * Check whether the AccessiGuard widget is enabled for the active store.
     *
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->_scopeConfig->isSetFlag(
            self::XML_PATH_ENABLED,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get the configured widget corner position.
     *
     * @return string
     */
    public function getPosition(): string
    {
        $position = (string) $this->_scopeConfig->getValue(
            self::XML_PATH_POSITION,
            ScopeInterface::SCOPE_STORE
        );

        return in_array($position, ['bottom-right', 'bottom-left'], true)
            ? $position
            : 'bottom-right';
    }

    /**
     * Get the configured hex accent color.
     *
     * @return string
     */
    public function getAccentColor(): string
    {
        $color = trim((string) $this->_scopeConfig->getValue(
            self::XML_PATH_ACCENT_COLOR,
            ScopeInterface::SCOPE_STORE
        ));

        return preg_match('/^#(?:[0-9a-fA-F]{3}|[0-9a-fA-F]{6})$/', $color)
            ? $color
            : '#2563eb';
    }

    /**
     * Whether to show the optional attribution footer link.
     *
     * @return bool
     */
    public function showPoweredBy(): bool
    {
        return $this->_scopeConfig->isSetFlag(
            self::XML_PATH_SHOW_POWERED_BY,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Return JSON-encoded AccessiGuardConfig for inline storefront initialization.
     *
     * @return string
     */
    public function getWidgetConfigJson(): string
    {
        $config = [
            'position' => $this->getPosition(),
            'accentColor' => $this->getAccentColor(),
            'showPoweredBy' => $this->showPoweredBy(),
            'autoInit' => true,
        ];

        $json = json_encode(
            $config,
            JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT
        );

        return $json !== false ? $json : '{}';
    }
}
