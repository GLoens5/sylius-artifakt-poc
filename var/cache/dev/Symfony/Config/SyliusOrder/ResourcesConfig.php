<?php

namespace Symfony\Config\SyliusOrder;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'OrderConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'OrderItemConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'OrderItemUnitConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'AdjustmentConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'OrderSequenceConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ResourcesConfig 
{
    private $order;
    private $orderItem;
    private $orderItemUnit;
    private $adjustment;
    private $orderSequence;
    
    public function order(array $value = []): \Symfony\Config\SyliusOrder\Resources\OrderConfig
    {
        if (null === $this->order) {
            $this->order = new \Symfony\Config\SyliusOrder\Resources\OrderConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "order()" has already been initialized. You cannot pass values the second time you call order().');
        }
    
        return $this->order;
    }
    
    public function orderItem(array $value = []): \Symfony\Config\SyliusOrder\Resources\OrderItemConfig
    {
        if (null === $this->orderItem) {
            $this->orderItem = new \Symfony\Config\SyliusOrder\Resources\OrderItemConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "orderItem()" has already been initialized. You cannot pass values the second time you call orderItem().');
        }
    
        return $this->orderItem;
    }
    
    public function orderItemUnit(array $value = []): \Symfony\Config\SyliusOrder\Resources\OrderItemUnitConfig
    {
        if (null === $this->orderItemUnit) {
            $this->orderItemUnit = new \Symfony\Config\SyliusOrder\Resources\OrderItemUnitConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "orderItemUnit()" has already been initialized. You cannot pass values the second time you call orderItemUnit().');
        }
    
        return $this->orderItemUnit;
    }
    
    public function adjustment(array $value = []): \Symfony\Config\SyliusOrder\Resources\AdjustmentConfig
    {
        if (null === $this->adjustment) {
            $this->adjustment = new \Symfony\Config\SyliusOrder\Resources\AdjustmentConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "adjustment()" has already been initialized. You cannot pass values the second time you call adjustment().');
        }
    
        return $this->adjustment;
    }
    
    public function orderSequence(array $value = []): \Symfony\Config\SyliusOrder\Resources\OrderSequenceConfig
    {
        if (null === $this->orderSequence) {
            $this->orderSequence = new \Symfony\Config\SyliusOrder\Resources\OrderSequenceConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "orderSequence()" has already been initialized. You cannot pass values the second time you call orderSequence().');
        }
    
        return $this->orderSequence;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['order'])) {
            $this->order = new \Symfony\Config\SyliusOrder\Resources\OrderConfig($value['order']);
            unset($value['order']);
        }
    
        if (isset($value['order_item'])) {
            $this->orderItem = new \Symfony\Config\SyliusOrder\Resources\OrderItemConfig($value['order_item']);
            unset($value['order_item']);
        }
    
        if (isset($value['order_item_unit'])) {
            $this->orderItemUnit = new \Symfony\Config\SyliusOrder\Resources\OrderItemUnitConfig($value['order_item_unit']);
            unset($value['order_item_unit']);
        }
    
        if (isset($value['adjustment'])) {
            $this->adjustment = new \Symfony\Config\SyliusOrder\Resources\AdjustmentConfig($value['adjustment']);
            unset($value['adjustment']);
        }
    
        if (isset($value['order_sequence'])) {
            $this->orderSequence = new \Symfony\Config\SyliusOrder\Resources\OrderSequenceConfig($value['order_sequence']);
            unset($value['order_sequence']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->order) {
            $output['order'] = $this->order->toArray();
        }
        if (null !== $this->orderItem) {
            $output['order_item'] = $this->orderItem->toArray();
        }
        if (null !== $this->orderItemUnit) {
            $output['order_item_unit'] = $this->orderItemUnit->toArray();
        }
        if (null !== $this->adjustment) {
            $output['adjustment'] = $this->adjustment->toArray();
        }
        if (null !== $this->orderSequence) {
            $output['order_sequence'] = $this->orderSequence->toArray();
        }
    
        return $output;
    }

}
