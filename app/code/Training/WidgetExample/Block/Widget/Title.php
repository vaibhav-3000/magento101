<?php

declare(strict_types=1);
namespace Training\WidgetExample\Block\Widget;

use Magento\Widget\Block\BlockInterface;
use \Magento\Framework\View\Element\Template;
class Title extends Template implements BlockInterface{
    protected $_template = 'widget/title.phtml';
}