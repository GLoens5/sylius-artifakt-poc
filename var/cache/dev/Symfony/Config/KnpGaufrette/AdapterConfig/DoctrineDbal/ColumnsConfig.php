<?php

namespace Symfony\Config\KnpGaufrette\AdapterConfig\DoctrineDbal;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ColumnsConfig 
{
    private $key;
    private $content;
    private $mtime;
    private $checksum;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function key($value): self
    {
        $this->key = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function content($value): self
    {
        $this->content = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function mtime($value): self
    {
        $this->mtime = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function checksum($value): self
    {
        $this->checksum = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['key'])) {
            $this->key = $value['key'];
            unset($value['key']);
        }
    
        if (isset($value['content'])) {
            $this->content = $value['content'];
            unset($value['content']);
        }
    
        if (isset($value['mtime'])) {
            $this->mtime = $value['mtime'];
            unset($value['mtime']);
        }
    
        if (isset($value['checksum'])) {
            $this->checksum = $value['checksum'];
            unset($value['checksum']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->key) {
            $output['key'] = $this->key;
        }
        if (null !== $this->content) {
            $output['content'] = $this->content;
        }
        if (null !== $this->mtime) {
            $output['mtime'] = $this->mtime;
        }
        if (null !== $this->checksum) {
            $output['checksum'] = $this->checksum;
        }
    
        return $output;
    }

}
