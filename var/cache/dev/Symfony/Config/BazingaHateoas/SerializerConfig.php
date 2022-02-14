<?php

namespace Symfony\Config\BazingaHateoas;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class SerializerConfig 
{
    private $json;
    private $xml;
    
    /**
     * @default 'hateoas.serializer.json_hal'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function json($value): self
    {
        $this->json = $value;
    
        return $this;
    }
    
    /**
     * @default 'hateoas.serializer.xml'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function xml($value): self
    {
        $this->xml = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['json'])) {
            $this->json = $value['json'];
            unset($value['json']);
        }
    
        if (isset($value['xml'])) {
            $this->xml = $value['xml'];
            unset($value['xml']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->json) {
            $output['json'] = $this->json;
        }
        if (null !== $this->xml) {
            $output['xml'] = $this->xml;
        }
    
        return $output;
    }

}
