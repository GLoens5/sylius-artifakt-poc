<?php

namespace Symfony\Config\KnpGaufrette\AdapterConfig\AmazonS3;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class OptionsConfig 
{
    private $create;
    private $region;
    private $directory;
    private $acl;
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function create($value): self
    {
        $this->create = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function region($value): self
    {
        $this->region = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function directory($value): self
    {
        $this->directory = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function acl($value): self
    {
        $this->acl = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['create'])) {
            $this->create = $value['create'];
            unset($value['create']);
        }
    
        if (isset($value['region'])) {
            $this->region = $value['region'];
            unset($value['region']);
        }
    
        if (isset($value['directory'])) {
            $this->directory = $value['directory'];
            unset($value['directory']);
        }
    
        if (isset($value['acl'])) {
            $this->acl = $value['acl'];
            unset($value['acl']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->create) {
            $output['create'] = $this->create;
        }
        if (null !== $this->region) {
            $output['region'] = $this->region;
        }
        if (null !== $this->directory) {
            $output['directory'] = $this->directory;
        }
        if (null !== $this->acl) {
            $output['acl'] = $this->acl;
        }
    
        return $output;
    }

}
