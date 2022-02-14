<?php

namespace Symfony\Config\SyliusUser\ResourcesConfig\User\Verification;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class TokenConfig 
{
    private $length;
    private $fieldName;
    
    /**
     * @default 16
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function length($value): self
    {
        $this->length = $value;
    
        return $this;
    }
    
    /**
     * @default 'emailVerificationToken'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldName($value): self
    {
        $this->fieldName = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['length'])) {
            $this->length = $value['length'];
            unset($value['length']);
        }
    
        if (isset($value['field_name'])) {
            $this->fieldName = $value['field_name'];
            unset($value['field_name']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->length) {
            $output['length'] = $this->length;
        }
        if (null !== $this->fieldName) {
            $output['field_name'] = $this->fieldName;
        }
    
        return $output;
    }

}
