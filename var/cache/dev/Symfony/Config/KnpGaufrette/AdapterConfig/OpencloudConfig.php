<?php

namespace Symfony\Config\KnpGaufrette\AdapterConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class OpencloudConfig 
{
    private $objectStoreId;
    private $containerName;
    private $createContainer;
    private $detectContentType;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function objectStoreId($value): self
    {
        $this->objectStoreId = $value;
    
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
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['object_store_id'])) {
            $this->objectStoreId = $value['object_store_id'];
            unset($value['object_store_id']);
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
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->objectStoreId) {
            $output['object_store_id'] = $this->objectStoreId;
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
    
        return $output;
    }

}
