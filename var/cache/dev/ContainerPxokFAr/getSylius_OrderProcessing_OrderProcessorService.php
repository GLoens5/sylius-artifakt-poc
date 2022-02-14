<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSylius_OrderProcessing_OrderProcessorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius.order_processing.order_processor' shared service.
     *
     * @return \Sylius\Component\Order\Processor\CompositeOrderProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Order/Processor/OrderProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Component/Order/Processor/CompositeOrderProcessor.php';

        $container->services['sylius.order_processing.order_processor'] = $instance = new \Sylius\Component\Order\Processor\CompositeOrderProcessor();

        $instance->addProcessor(($container->services['sylius.order_processing.order_adjustments_clearer'] ?? $container->load('getSylius_OrderProcessing_OrderAdjustmentsClearerService')), 60);
        $instance->addProcessor(($container->services['sylius.order_processing.order_shipment_processor'] ?? $container->load('getSylius_OrderProcessing_OrderShipmentProcessorService')), 50);
        $instance->addProcessor(($container->services['sylius.order_processing.order_prices_recalculator'] ?? $container->load('getSylius_OrderProcessing_OrderPricesRecalculatorService')), 40);
        $instance->addProcessor(($container->services['sylius.order_processing.shipping_charges_processor'] ?? $container->load('getSylius_OrderProcessing_ShippingChargesProcessorService')), 30);
        $instance->addProcessor(($container->services['sylius.order_processing.order_promotion_processor'] ?? $container->load('getSylius_OrderProcessing_OrderPromotionProcessorService')), 20);
        $instance->addProcessor(($container->services['sylius.order_processing.order_taxes_processor'] ?? $container->load('getSylius_OrderProcessing_OrderTaxesProcessorService')), 10);
        $instance->addProcessor(($container->services['sylius.order_processing.order_payment_processor.checkout'] ?? $container->load('getSylius_OrderProcessing_OrderPaymentProcessor_CheckoutService')), 0);

        return $instance;
    }
}
