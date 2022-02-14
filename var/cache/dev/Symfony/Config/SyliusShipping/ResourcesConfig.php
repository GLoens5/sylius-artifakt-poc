<?php

namespace Symfony\Config\SyliusShipping;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'ShipmentConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'ShipmentUnitConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'ShippingMethodConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'ShippingMethodRuleConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'ShippingCategoryConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ResourcesConfig 
{
    private $shipment;
    private $shipmentUnit;
    private $shippingMethod;
    private $shippingMethodRule;
    private $shippingCategory;
    
    public function shipment(array $value = []): \Symfony\Config\SyliusShipping\Resources\ShipmentConfig
    {
        if (null === $this->shipment) {
            $this->shipment = new \Symfony\Config\SyliusShipping\Resources\ShipmentConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "shipment()" has already been initialized. You cannot pass values the second time you call shipment().');
        }
    
        return $this->shipment;
    }
    
    public function shipmentUnit(array $value = []): \Symfony\Config\SyliusShipping\Resources\ShipmentUnitConfig
    {
        if (null === $this->shipmentUnit) {
            $this->shipmentUnit = new \Symfony\Config\SyliusShipping\Resources\ShipmentUnitConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "shipmentUnit()" has already been initialized. You cannot pass values the second time you call shipmentUnit().');
        }
    
        return $this->shipmentUnit;
    }
    
    public function shippingMethod(array $value = []): \Symfony\Config\SyliusShipping\Resources\ShippingMethodConfig
    {
        if (null === $this->shippingMethod) {
            $this->shippingMethod = new \Symfony\Config\SyliusShipping\Resources\ShippingMethodConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "shippingMethod()" has already been initialized. You cannot pass values the second time you call shippingMethod().');
        }
    
        return $this->shippingMethod;
    }
    
    public function shippingMethodRule(array $value = []): \Symfony\Config\SyliusShipping\Resources\ShippingMethodRuleConfig
    {
        if (null === $this->shippingMethodRule) {
            $this->shippingMethodRule = new \Symfony\Config\SyliusShipping\Resources\ShippingMethodRuleConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "shippingMethodRule()" has already been initialized. You cannot pass values the second time you call shippingMethodRule().');
        }
    
        return $this->shippingMethodRule;
    }
    
    public function shippingCategory(array $value = []): \Symfony\Config\SyliusShipping\Resources\ShippingCategoryConfig
    {
        if (null === $this->shippingCategory) {
            $this->shippingCategory = new \Symfony\Config\SyliusShipping\Resources\ShippingCategoryConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "shippingCategory()" has already been initialized. You cannot pass values the second time you call shippingCategory().');
        }
    
        return $this->shippingCategory;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['shipment'])) {
            $this->shipment = new \Symfony\Config\SyliusShipping\Resources\ShipmentConfig($value['shipment']);
            unset($value['shipment']);
        }
    
        if (isset($value['shipment_unit'])) {
            $this->shipmentUnit = new \Symfony\Config\SyliusShipping\Resources\ShipmentUnitConfig($value['shipment_unit']);
            unset($value['shipment_unit']);
        }
    
        if (isset($value['shipping_method'])) {
            $this->shippingMethod = new \Symfony\Config\SyliusShipping\Resources\ShippingMethodConfig($value['shipping_method']);
            unset($value['shipping_method']);
        }
    
        if (isset($value['shipping_method_rule'])) {
            $this->shippingMethodRule = new \Symfony\Config\SyliusShipping\Resources\ShippingMethodRuleConfig($value['shipping_method_rule']);
            unset($value['shipping_method_rule']);
        }
    
        if (isset($value['shipping_category'])) {
            $this->shippingCategory = new \Symfony\Config\SyliusShipping\Resources\ShippingCategoryConfig($value['shipping_category']);
            unset($value['shipping_category']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->shipment) {
            $output['shipment'] = $this->shipment->toArray();
        }
        if (null !== $this->shipmentUnit) {
            $output['shipment_unit'] = $this->shipmentUnit->toArray();
        }
        if (null !== $this->shippingMethod) {
            $output['shipping_method'] = $this->shippingMethod->toArray();
        }
        if (null !== $this->shippingMethodRule) {
            $output['shipping_method_rule'] = $this->shippingMethodRule->toArray();
        }
        if (null !== $this->shippingCategory) {
            $output['shipping_category'] = $this->shippingCategory->toArray();
        }
    
        return $output;
    }

}
