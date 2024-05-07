<?php
namespace Training\Example\Controller\Index\Page;

/**
 * Interceptor class for @see \Training\Example\Controller\Index\Page
 */
class Interceptor extends \Training\Example\Controller\Index\Page implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function __contruct(\Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__contruct');
        return $pluginInfo ? $this->___callPlugins('__contruct', func_get_args(), $pluginInfo) : parent::__contruct($pageFactory);
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
