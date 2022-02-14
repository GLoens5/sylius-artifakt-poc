<?php

namespace Symfony\Config\SyliusProduct;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'ProductConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'ProductVariantConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'ProductOptionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'ProductOptionValueConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'ProductAssociationConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'ProductAssociationTypeConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ResourcesConfig 
{
    private $product;
    private $productVariant;
    private $productOption;
    private $productOptionValue;
    private $productAssociation;
    private $productAssociationType;
    
    public function product(array $value = []): \Symfony\Config\SyliusProduct\Resources\ProductConfig
    {
        if (null === $this->product) {
            $this->product = new \Symfony\Config\SyliusProduct\Resources\ProductConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "product()" has already been initialized. You cannot pass values the second time you call product().');
        }
    
        return $this->product;
    }
    
    public function productVariant(array $value = []): \Symfony\Config\SyliusProduct\Resources\ProductVariantConfig
    {
        if (null === $this->productVariant) {
            $this->productVariant = new \Symfony\Config\SyliusProduct\Resources\ProductVariantConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "productVariant()" has already been initialized. You cannot pass values the second time you call productVariant().');
        }
    
        return $this->productVariant;
    }
    
    public function productOption(array $value = []): \Symfony\Config\SyliusProduct\Resources\ProductOptionConfig
    {
        if (null === $this->productOption) {
            $this->productOption = new \Symfony\Config\SyliusProduct\Resources\ProductOptionConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "productOption()" has already been initialized. You cannot pass values the second time you call productOption().');
        }
    
        return $this->productOption;
    }
    
    public function productOptionValue(array $value = []): \Symfony\Config\SyliusProduct\Resources\ProductOptionValueConfig
    {
        if (null === $this->productOptionValue) {
            $this->productOptionValue = new \Symfony\Config\SyliusProduct\Resources\ProductOptionValueConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "productOptionValue()" has already been initialized. You cannot pass values the second time you call productOptionValue().');
        }
    
        return $this->productOptionValue;
    }
    
    public function productAssociation(array $value = []): \Symfony\Config\SyliusProduct\Resources\ProductAssociationConfig
    {
        if (null === $this->productAssociation) {
            $this->productAssociation = new \Symfony\Config\SyliusProduct\Resources\ProductAssociationConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "productAssociation()" has already been initialized. You cannot pass values the second time you call productAssociation().');
        }
    
        return $this->productAssociation;
    }
    
    public function productAssociationType(array $value = []): \Symfony\Config\SyliusProduct\Resources\ProductAssociationTypeConfig
    {
        if (null === $this->productAssociationType) {
            $this->productAssociationType = new \Symfony\Config\SyliusProduct\Resources\ProductAssociationTypeConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "productAssociationType()" has already been initialized. You cannot pass values the second time you call productAssociationType().');
        }
    
        return $this->productAssociationType;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['product'])) {
            $this->product = new \Symfony\Config\SyliusProduct\Resources\ProductConfig($value['product']);
            unset($value['product']);
        }
    
        if (isset($value['product_variant'])) {
            $this->productVariant = new \Symfony\Config\SyliusProduct\Resources\ProductVariantConfig($value['product_variant']);
            unset($value['product_variant']);
        }
    
        if (isset($value['product_option'])) {
            $this->productOption = new \Symfony\Config\SyliusProduct\Resources\ProductOptionConfig($value['product_option']);
            unset($value['product_option']);
        }
    
        if (isset($value['product_option_value'])) {
            $this->productOptionValue = new \Symfony\Config\SyliusProduct\Resources\ProductOptionValueConfig($value['product_option_value']);
            unset($value['product_option_value']);
        }
    
        if (isset($value['product_association'])) {
            $this->productAssociation = new \Symfony\Config\SyliusProduct\Resources\ProductAssociationConfig($value['product_association']);
            unset($value['product_association']);
        }
    
        if (isset($value['product_association_type'])) {
            $this->productAssociationType = new \Symfony\Config\SyliusProduct\Resources\ProductAssociationTypeConfig($value['product_association_type']);
            unset($value['product_association_type']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->product) {
            $output['product'] = $this->product->toArray();
        }
        if (null !== $this->productVariant) {
            $output['product_variant'] = $this->productVariant->toArray();
        }
        if (null !== $this->productOption) {
            $output['product_option'] = $this->productOption->toArray();
        }
        if (null !== $this->productOptionValue) {
            $output['product_option_value'] = $this->productOptionValue->toArray();
        }
        if (null !== $this->productAssociation) {
            $output['product_association'] = $this->productAssociation->toArray();
        }
        if (null !== $this->productAssociationType) {
            $output['product_association_type'] = $this->productAssociationType->toArray();
        }
    
        return $output;
    }

}
