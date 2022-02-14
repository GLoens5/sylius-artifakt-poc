<?php

namespace Symfony\Config\SyliusTaxation;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'TaxCategoryConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'TaxRateConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ResourcesConfig 
{
    private $taxCategory;
    private $taxRate;
    
    public function taxCategory(array $value = []): \Symfony\Config\SyliusTaxation\Resources\TaxCategoryConfig
    {
        if (null === $this->taxCategory) {
            $this->taxCategory = new \Symfony\Config\SyliusTaxation\Resources\TaxCategoryConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "taxCategory()" has already been initialized. You cannot pass values the second time you call taxCategory().');
        }
    
        return $this->taxCategory;
    }
    
    public function taxRate(array $value = []): \Symfony\Config\SyliusTaxation\Resources\TaxRateConfig
    {
        if (null === $this->taxRate) {
            $this->taxRate = new \Symfony\Config\SyliusTaxation\Resources\TaxRateConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "taxRate()" has already been initialized. You cannot pass values the second time you call taxRate().');
        }
    
        return $this->taxRate;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['tax_category'])) {
            $this->taxCategory = new \Symfony\Config\SyliusTaxation\Resources\TaxCategoryConfig($value['tax_category']);
            unset($value['tax_category']);
        }
    
        if (isset($value['tax_rate'])) {
            $this->taxRate = new \Symfony\Config\SyliusTaxation\Resources\TaxRateConfig($value['tax_rate']);
            unset($value['tax_rate']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->taxCategory) {
            $output['tax_category'] = $this->taxCategory->toArray();
        }
        if (null !== $this->taxRate) {
            $output['tax_rate'] = $this->taxRate->toArray();
        }
    
        return $output;
    }

}
