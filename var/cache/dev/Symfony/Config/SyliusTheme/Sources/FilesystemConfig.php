<?php

namespace Symfony\Config\SyliusTheme\Sources;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class FilesystemConfig 
{
    private $enabled;
    private $filename;
    private $scanDepth;
    private $directories;
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @default 'composer.json'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filename($value): self
    {
        $this->filename = $value;
    
        return $this;
    }
    
    /**
     * Restrict depth to scan for configuration file inside theme folder
     * @default 1
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function scanDepth($value): self
    {
        $this->scanDepth = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function directories($value): self
    {
        $this->directories = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['filename'])) {
            $this->filename = $value['filename'];
            unset($value['filename']);
        }
    
        if (isset($value['scan_depth'])) {
            $this->scanDepth = $value['scan_depth'];
            unset($value['scan_depth']);
        }
    
        if (isset($value['directories'])) {
            $this->directories = $value['directories'];
            unset($value['directories']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->enabled) {
            $output['enabled'] = $this->enabled;
        }
        if (null !== $this->filename) {
            $output['filename'] = $this->filename;
        }
        if (null !== $this->scanDepth) {
            $output['scan_depth'] = $this->scanDepth;
        }
        if (null !== $this->directories) {
            $output['directories'] = $this->directories;
        }
    
        return $output;
    }

}
