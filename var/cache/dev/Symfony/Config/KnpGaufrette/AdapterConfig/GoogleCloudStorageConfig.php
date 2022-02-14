<?php

namespace Symfony\Config\KnpGaufrette\AdapterConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'GoogleCloudStorage'.\DIRECTORY_SEPARATOR.'OptionsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class GoogleCloudStorageConfig 
{
    private $serviceId;
    private $bucketName;
    private $detectContentType;
    private $options;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function serviceId($value): self
    {
        $this->serviceId = $value;
    
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
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function detectContentType($value): self
    {
        $this->detectContentType = $value;
    
        return $this;
    }
    
    public function options(array $value = []): \Symfony\Config\KnpGaufrette\AdapterConfig\GoogleCloudStorage\OptionsConfig
    {
        if (null === $this->options) {
            $this->options = new \Symfony\Config\KnpGaufrette\AdapterConfig\GoogleCloudStorage\OptionsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "options()" has already been initialized. You cannot pass values the second time you call options().');
        }
    
        return $this->options;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['service_id'])) {
            $this->serviceId = $value['service_id'];
            unset($value['service_id']);
        }
    
        if (isset($value['bucket_name'])) {
            $this->bucketName = $value['bucket_name'];
            unset($value['bucket_name']);
        }
    
        if (isset($value['detect_content_type'])) {
            $this->detectContentType = $value['detect_content_type'];
            unset($value['detect_content_type']);
        }
    
        if (isset($value['options'])) {
            $this->options = new \Symfony\Config\KnpGaufrette\AdapterConfig\GoogleCloudStorage\OptionsConfig($value['options']);
            unset($value['options']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->serviceId) {
            $output['service_id'] = $this->serviceId;
        }
        if (null !== $this->bucketName) {
            $output['bucket_name'] = $this->bucketName;
        }
        if (null !== $this->detectContentType) {
            $output['detect_content_type'] = $this->detectContentType;
        }
        if (null !== $this->options) {
            $output['options'] = $this->options->toArray();
        }
    
        return $output;
    }

}
