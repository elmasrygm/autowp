<?php

namespace Application\Spec\Table\Value;

use ArrayAccess;
use Laminas\View\Renderer\PhpRenderer;

class FuelTank
{
    protected int $primary;
    protected int $secondary;

    public function __construct(array $options)
    {
        $this->primary   = $options['primary'];
        $this->secondary = $options['secondary'];
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     * @param array|ArrayAccess $attribute
     * @param mixed             $value
     * @param mixed             $values
     */
    public function render(PhpRenderer $view, $attribute, $value, $values): ?string
    {
        $primary   = $values[$this->primary] ?? null;
        $secondary = $values[$this->secondary] ?? null;

        $html = $primary;
        if ($secondary) {
            $html .= '+' . $secondary;
        }

        if ($html) {
            $html .= ' <span class="unit" title="">'
                         . /* @phan-suppress-next-line PhanUndeclaredMethod */
                         $view->escapeHtml($view->translate('specs/unit/12/abbr'))
                     . '</span>';
        }

        return $html;
    }
}
