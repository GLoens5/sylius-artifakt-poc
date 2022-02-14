<?php

namespace Symfony\Config\SyliusCustomer;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'CustomerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'CustomerGroupConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ResourcesConfig 
{
    private $customer;
    private $customerGroup;
    
    public function customer(array $value = []): \Symfony\Config\SyliusCustomer\Resources\CustomerConfig
    {
        if (null === $this->customer) {
            $this->customer = new \Symfony\Config\SyliusCustomer\Resources\CustomerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "customer()" has already been initialized. You cannot pass values the second time you call customer().');
        }
    
        return $this->customer;
    }
    
    public function customerGroup(array $value = []): \Symfony\Config\SyliusCustomer\Resources\CustomerGroupConfig
    {
        if (null === $this->customerGroup) {
            $this->customerGroup = new \Symfony\Config\SyliusCustomer\Resources\CustomerGroupConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "customerGroup()" has already been initialized. You cannot pass values the second time you call customerGroup().');
        }
    
        return $this->customerGroup;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['customer'])) {
            $this->customer = new \Symfony\Config\SyliusCustomer\Resources\CustomerConfig($value['customer']);
            unset($value['customer']);
        }
    
        if (isset($value['customer_group'])) {
            $this->customerGroup = new \Symfony\Config\SyliusCustomer\Resources\CustomerGroupConfig($value['customer_group']);
            unset($value['customer_group']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->customer) {
            $output['customer'] = $this->customer->toArray();
        }
        if (null !== $this->customerGroup) {
            $output['customer_group'] = $this->customerGroup->toArray();
        }
    
        return $output;
    }

}
