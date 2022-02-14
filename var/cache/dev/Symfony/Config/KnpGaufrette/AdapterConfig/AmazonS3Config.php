<?php

namespace Symfony\Config\KnpGaufrette\AdapterConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'AmazonS3'.\DIRECTORY_SEPARATOR.'OptionsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class AmazonS3Config 
{
    private $amazonS3Id;
    private $bucketName;
    private $create;
    private $options;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function amazonS3Id($value): self
    {
        $this->amazonS3Id = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function bucketName($value): self
    {
        $this->bucketName = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function create($value): self
    {
        $this->create = $value;
    
        return $this;
    }
    
    public function options(array $value = []): \Symfony\Config\KnpGaufrette\AdapterConfig\AmazonS3\OptionsConfig
    {
        if (null === $this->options) {
            $this->options = new \Symfony\Config\KnpGaufrette\AdapterConfig\AmazonS3\OptionsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "options()" has already been initialized. You cannot pass values the second time you call options().');
        }
    
        return $this->options;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['amazon_s3_id'])) {
            $this->amazonS3Id = $value['amazon_s3_id'];
            unset($value['amazon_s3_id']);
        }
    
        if (isset($value['bucket_name'])) {
            $this->bucketName = $value['bucket_name'];
            unset($value['bucket_name']);
        }
    
        if (isset($value['create'])) {
            $this->create = $value['create'];
            unset($value['create']);
        }
    
        if (isset($value['options'])) {
            $this->options = new \Symfony\Config\KnpGaufrette\AdapterConfig\AmazonS3\OptionsConfig($value['options']);
            unset($value['options']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->amazonS3Id) {
            $output['amazon_s3_id'] = $this->amazonS3Id;
        }
        if (null !== $this->bucketName) {
            $output['bucket_name'] = $this->bucketName;
        }
        if (null !== $this->create) {
            $output['create'] = $this->create;
        }
        if (null !== $this->options) {
            $output['options'] = $this->options->toArray();
        }
    
        return $output;
    }

}
