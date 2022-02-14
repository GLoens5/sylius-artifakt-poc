<?php

namespace Symfony\Config\KnpGaufrette\AdapterConfig\AclAwareAmazonS3;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class UserConfig 
{
    private $group;
    private $id;
    private $permission;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function group($value): self
    {
        $this->group = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function id($value): self
    {
        $this->id = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function permission($value): self
    {
        $this->permission = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['group'])) {
            $this->group = $value['group'];
            unset($value['group']);
        }
    
        if (isset($value['id'])) {
            $this->id = $value['id'];
            unset($value['id']);
        }
    
        if (isset($value['permission'])) {
            $this->permission = $value['permission'];
            unset($value['permission']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->group) {
            $output['group'] = $this->group;
        }
        if (null !== $this->id) {
            $output['id'] = $this->id;
        }
        if (null !== $this->permission) {
            $output['permission'] = $this->permission;
        }
    
        return $output;
    }

}
