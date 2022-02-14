<?php

namespace Symfony\Config\SonataBlock;

require_once __DIR__.\DIRECTORY_SEPARATOR.'BlockConfig'.\DIRECTORY_SEPARATOR.'TemplateConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'BlockConfig'.\DIRECTORY_SEPARATOR.'ExceptionConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class BlockConfig 
{
    private $contexts;
    private $templates;
    private $cache;
    private $settings;
    private $exception;
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function contexts($value): self
    {
        $this->contexts = $value;
    
        return $this;
    }
    
    public function template(array $value = []): \Symfony\Config\SonataBlock\BlockConfig\TemplateConfig
    {
        return $this->templates[] = new \Symfony\Config\SonataBlock\BlockConfig\TemplateConfig($value);
    }
    
    /**
     * @default 'sonata.cache.noop'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cache($value): self
    {
        $this->cache = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function setting(string $id, $value): self
    {
        $this->settings[$id] = $value;
    
        return $this;
    }
    
    public function exception(array $value = []): \Symfony\Config\SonataBlock\BlockConfig\ExceptionConfig
    {
        if (null === $this->exception) {
            $this->exception = new \Symfony\Config\SonataBlock\BlockConfig\ExceptionConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "exception()" has already been initialized. You cannot pass values the second time you call exception().');
        }
    
        return $this->exception;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['contexts'])) {
            $this->contexts = $value['contexts'];
            unset($value['contexts']);
        }
    
        if (isset($value['templates'])) {
            $this->templates = array_map(function ($v) { return new \Symfony\Config\SonataBlock\BlockConfig\TemplateConfig($v); }, $value['templates']);
            unset($value['templates']);
        }
    
        if (isset($value['cache'])) {
            $this->cache = $value['cache'];
            unset($value['cache']);
        }
    
        if (isset($value['settings'])) {
            $this->settings = $value['settings'];
            unset($value['settings']);
        }
    
        if (isset($value['exception'])) {
            $this->exception = new \Symfony\Config\SonataBlock\BlockConfig\ExceptionConfig($value['exception']);
            unset($value['exception']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->contexts) {
            $output['contexts'] = $this->contexts;
        }
        if (null !== $this->templates) {
            $output['templates'] = array_map(function ($v) { return $v->toArray(); }, $this->templates);
        }
        if (null !== $this->cache) {
            $output['cache'] = $this->cache;
        }
        if (null !== $this->settings) {
            $output['settings'] = $this->settings;
        }
        if (null !== $this->exception) {
            $output['exception'] = $this->exception->toArray();
        }
    
        return $output;
    }

}
