<?php

namespace Symfony\Config\BazingaHateoas;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'FileCacheConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class MetadataConfig 
{
    private $cache;
    private $fileCache;
    
    /**
     * @default 'file'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cache($value): self
    {
        $this->cache = $value;
    
        return $this;
    }
    
    public function fileCache(array $value = []): \Symfony\Config\BazingaHateoas\Metadata\FileCacheConfig
    {
        if (null === $this->fileCache) {
            $this->fileCache = new \Symfony\Config\BazingaHateoas\Metadata\FileCacheConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "fileCache()" has already been initialized. You cannot pass values the second time you call fileCache().');
        }
    
        return $this->fileCache;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['cache'])) {
            $this->cache = $value['cache'];
            unset($value['cache']);
        }
    
        if (isset($value['file_cache'])) {
            $this->fileCache = new \Symfony\Config\BazingaHateoas\Metadata\FileCacheConfig($value['file_cache']);
            unset($value['file_cache']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->cache) {
            $output['cache'] = $this->cache;
        }
        if (null !== $this->fileCache) {
            $output['file_cache'] = $this->fileCache->toArray();
        }
    
        return $output;
    }

}
