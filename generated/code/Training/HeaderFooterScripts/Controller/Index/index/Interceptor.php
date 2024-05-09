<?php
namespace Training\HeaderFooterScripts\Controller\Index\index;

/**
 * Interceptor class for @see \Training\HeaderFooterScripts\Controller\Index\index
 */
class Interceptor extends \Training\HeaderFooterScripts\Controller\Index\index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->___init();
        parent::__construct($pageFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
