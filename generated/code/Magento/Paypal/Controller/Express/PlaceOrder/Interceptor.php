<?php
namespace Magento\Paypal\Controller\Express\PlaceOrder;

/**
 * Interceptor class for @see \Magento\Paypal\Controller\Express\PlaceOrder
 */
class Interceptor extends \Magento\Paypal\Controller\Express\PlaceOrder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Sales\Model\OrderFactory $orderFactory, \Magento\Paypal\Model\Express\Checkout\Factory $checkoutFactory, \Magento\Framework\Session\Generic $paypalSession, \Magento\Framework\Url\Helper\Data $urlHelper, \Magento\Customer\Model\Url $customerUrl, \Magento\Checkout\Api\AgreementsValidatorInterface $agreementValidator, ?\Magento\Sales\Api\PaymentFailuresInterface $paymentFailures = null)
    {
        $this->___init();
        parent::__construct($context, $customerSession, $checkoutSession, $orderFactory, $checkoutFactory, $paypalSession, $urlHelper, $customerUrl, $agreementValidator, $paymentFailures);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
