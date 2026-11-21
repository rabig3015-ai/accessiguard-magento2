<?php
/**
 * Position option source model for AccessiGuard Magento 2 admin configuration.
 *
 * @category  SagunTech
 * @package   SagunTech_AccessiGuard
 * @license   GPL-2.0-or-later
 */

namespace SagunTech\AccessiGuard\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Position implements OptionSourceInterface
{
    /**
     * Return available corner positions for the accessibility widget.
     *
     * @return array<int, array<string, mixed>>
     */
    public function toOptionArray(): array
    {
        return [
            ['value' => 'bottom-right', 'label' => __('Bottom Right')],
            ['value' => 'bottom-left', 'label' => __('Bottom Left')],
        ];
    }
}
