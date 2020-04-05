<?php

namespace Dongdonggo\Sku;

use Encore\Admin\Form\Field;

class SkuField extends Field
{
    protected $view = 'sku::sku_field';

    protected static $js = [
        'vendor/dongdonggo/sku/sku.js'
    ];

    protected static $css = [
        'vendor/dongdonggo/sku/sku.css'
    ];

    public function render()
    {

        $this->script = <<< EOF
window.DemoSku = new dongdonggoSKU('{$this->getElementClassSelector()}')
EOF;
        return parent::render();
    }

}
