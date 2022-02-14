<?php

namespace Symfony\Config\KnpGaufrette\AdapterConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class AzureBlobStorageConfig 
{
    private $blobProxyFactoryId;
    private $containerName;
    private $createContainer;
    private $detectContentType;
    private $multiContainerMode;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function blobProxyFactoryId($value): self
    {
        $this->blobProxyFactoryId = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function containerName($value): self
    {
        $this->containerName = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function createContainer($value): self
    {
        $this->createContainer = $value;
    
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
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function multiContainerMode($value): self
    {
        $this->multiContainerMode = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['blob_proxy_factory_id'])) {
            $this->blobProxyFactoryId = $value['blob_proxy_factory_id'];
            unset($value['blob_proxy_factory_id']);
        }
    
        if (isset($value['container_name'])) {
            $this->containerName = $value['container_name'];
            unset($value['container_name']);
        }
    
        if (isset($value['create_container'])) {
            $this->createContainer = $value['create_container'];
            unset($value['create_container']);
        }
    
        if (isset($value['detect_content_type'])) {
            $this->detectContentType = $value['detect_content_type'];
            unset($value['detect_content_type']);
        }
    
        if (isset($value['multi_container_mode'])) {
            $this->multiContainerMode = $value['multi_container_mode'];
            unset($value['multi_container_mode']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->blobProxyFactoryId) {
            $output['blob_proxy_factory_id'] = $this->blobProxyFactoryId;
        }
        if (null !== $this->containerName) {
            $output['container_name'] = $this->containerName;
        }
        if (null !== $this->createContainer) {
            $output['create_container'] = $this->createContainer;
        }
        if (null !== $this->detectContentType) {
            $output['detect_content_type'] = $this->detectContentType;
        }
        if (null !== $this->multiContainerMode) {
            $output['multi_container_mode'] = $this->multiContainerMode;
        }
    
        return $output;
    }

}
