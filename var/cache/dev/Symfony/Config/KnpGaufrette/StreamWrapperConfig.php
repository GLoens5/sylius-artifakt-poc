<?php

namespace Symfony\Config\KnpGaufrette;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class StreamWrapperConfig 
{
    private $protocol;
    private $filesystems;
    
    /**
     * @default 'gaufrette'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function protocol($value): self
    {
        $this->protocol = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filesystems(string $key, $value): self
    {
        $this->filesystems[$key] = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['protocol'])) {
            $this->protocol = $value['protocol'];
            unset($value['protocol']);
        }
    
        if (isset($value['filesystems'])) {
            $this->filesystems = $value['filesystems'];
            unset($value['filesystems']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->protocol) {
            $output['protocol'] = $this->protocol;
        }
        if (null !== $this->filesystems) {
            $output['filesystems'] = $this->filesystems;
        }
    
        return $output;
    }

}
