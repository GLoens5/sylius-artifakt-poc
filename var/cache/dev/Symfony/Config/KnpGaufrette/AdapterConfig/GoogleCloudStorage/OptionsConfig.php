<?php

namespace Symfony\Config\KnpGaufrette\AdapterConfig\GoogleCloudStorage;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class OptionsConfig 
{
    private $directory;
    private $acl;
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function directory($value): self
    {
        $this->directory = $value;
    
        return $this;
    }
    
    /**
     * @default 'private'
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
        if (null !== $this->directory) {
            $output['directory'] = $this->directory;
        }
        if (null !== $this->acl) {
            $output['acl'] = $this->acl;
        }
    
        return $output;
    }

}
