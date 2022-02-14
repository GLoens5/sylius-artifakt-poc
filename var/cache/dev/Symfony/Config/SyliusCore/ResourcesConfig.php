<?php

namespace Symfony\Config\SyliusCore;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'ProductImageConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'AvatarImageConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'TaxonImageConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'ProductTaxonConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'ChannelPricingConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'ShopBillingDataConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ResourcesConfig 
{
    private $productImage;
    private $avatarImage;
    private $taxonImage;
    private $productTaxon;
    private $channelPricing;
    private $shopBillingData;
    
    public function productImage(array $value = []): \Symfony\Config\SyliusCore\Resources\ProductImageConfig
    {
        if (null === $this->productImage) {
            $this->productImage = new \Symfony\Config\SyliusCore\Resources\ProductImageConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "productImage()" has already been initialized. You cannot pass values the second time you call productImage().');
        }
    
        return $this->productImage;
    }
    
    public function avatarImage(array $value = []): \Symfony\Config\SyliusCore\Resources\AvatarImageConfig
    {
        if (null === $this->avatarImage) {
            $this->avatarImage = new \Symfony\Config\SyliusCore\Resources\AvatarImageConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "avatarImage()" has already been initialized. You cannot pass values the second time you call avatarImage().');
        }
    
        return $this->avatarImage;
    }
    
    public function taxonImage(array $value = []): \Symfony\Config\SyliusCore\Resources\TaxonImageConfig
    {
        if (null === $this->taxonImage) {
            $this->taxonImage = new \Symfony\Config\SyliusCore\Resources\TaxonImageConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "taxonImage()" has already been initialized. You cannot pass values the second time you call taxonImage().');
        }
    
        return $this->taxonImage;
    }
    
    public function productTaxon(array $value = []): \Symfony\Config\SyliusCore\Resources\ProductTaxonConfig
    {
        if (null === $this->productTaxon) {
            $this->productTaxon = new \Symfony\Config\SyliusCore\Resources\ProductTaxonConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "productTaxon()" has already been initialized. You cannot pass values the second time you call productTaxon().');
        }
    
        return $this->productTaxon;
    }
    
    public function channelPricing(array $value = []): \Symfony\Config\SyliusCore\Resources\ChannelPricingConfig
    {
        if (null === $this->channelPricing) {
            $this->channelPricing = new \Symfony\Config\SyliusCore\Resources\ChannelPricingConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "channelPricing()" has already been initialized. You cannot pass values the second time you call channelPricing().');
        }
    
        return $this->channelPricing;
    }
    
    public function shopBillingData(array $value = []): \Symfony\Config\SyliusCore\Resources\ShopBillingDataConfig
    {
        if (null === $this->shopBillingData) {
            $this->shopBillingData = new \Symfony\Config\SyliusCore\Resources\ShopBillingDataConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "shopBillingData()" has already been initialized. You cannot pass values the second time you call shopBillingData().');
        }
    
        return $this->shopBillingData;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['product_image'])) {
            $this->productImage = new \Symfony\Config\SyliusCore\Resources\ProductImageConfig($value['product_image']);
            unset($value['product_image']);
        }
    
        if (isset($value['avatar_image'])) {
            $this->avatarImage = new \Symfony\Config\SyliusCore\Resources\AvatarImageConfig($value['avatar_image']);
            unset($value['avatar_image']);
        }
    
        if (isset($value['taxon_image'])) {
            $this->taxonImage = new \Symfony\Config\SyliusCore\Resources\TaxonImageConfig($value['taxon_image']);
            unset($value['taxon_image']);
        }
    
        if (isset($value['product_taxon'])) {
            $this->productTaxon = new \Symfony\Config\SyliusCore\Resources\ProductTaxonConfig($value['product_taxon']);
            unset($value['product_taxon']);
        }
    
        if (isset($value['channel_pricing'])) {
            $this->channelPricing = new \Symfony\Config\SyliusCore\Resources\ChannelPricingConfig($value['channel_pricing']);
            unset($value['channel_pricing']);
        }
    
        if (isset($value['shop_billing_data'])) {
            $this->shopBillingData = new \Symfony\Config\SyliusCore\Resources\ShopBillingDataConfig($value['shop_billing_data']);
            unset($value['shop_billing_data']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->productImage) {
            $output['product_image'] = $this->productImage->toArray();
        }
        if (null !== $this->avatarImage) {
            $output['avatar_image'] = $this->avatarImage->toArray();
        }
        if (null !== $this->taxonImage) {
            $output['taxon_image'] = $this->taxonImage->toArray();
        }
        if (null !== $this->productTaxon) {
            $output['product_taxon'] = $this->productTaxon->toArray();
        }
        if (null !== $this->channelPricing) {
            $output['channel_pricing'] = $this->channelPricing->toArray();
        }
        if (null !== $this->shopBillingData) {
            $output['shop_billing_data'] = $this->shopBillingData->toArray();
        }
    
        return $output;
    }

}
