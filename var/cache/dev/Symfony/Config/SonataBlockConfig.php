<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SonataBlock'.\DIRECTORY_SEPARATOR.'ProfilerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SonataBlock'.\DIRECTORY_SEPARATOR.'HttpCacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SonataBlock'.\DIRECTORY_SEPARATOR.'TemplatesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SonataBlock'.\DIRECTORY_SEPARATOR.'ContainerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SonataBlock'.\DIRECTORY_SEPARATOR.'BlockConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SonataBlock'.\DIRECTORY_SEPARATOR.'BlocksByClassConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SonataBlock'.\DIRECTORY_SEPARATOR.'ExceptionConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help creating config.
 */
class SonataBlockConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $profiler;
    private $defaultContexts;
    private $contextManager;
    private $httpCache;
    private $templates;
    private $container;
    private $blocks;
    private $blocksByClass;
    private $exception;
    
    public function profiler(array $value = []): \Symfony\Config\SonataBlock\ProfilerConfig
    {
        if (null === $this->profiler) {
            $this->profiler = new \Symfony\Config\SonataBlock\ProfilerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "profiler()" has already been initialized. You cannot pass values the second time you call profiler().');
        }
    
        return $this->profiler;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function defaultContexts($value): self
    {
        $this->defaultContexts = $value;
    
        return $this;
    }
    
    /**
     * @default 'sonata.block.context_manager.default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function contextManager($value): self
    {
        $this->contextManager = $value;
    
        return $this;
    }
    
    public function httpCache(array $value = []): \Symfony\Config\SonataBlock\HttpCacheConfig
    {
        if (null === $this->httpCache) {
            $this->httpCache = new \Symfony\Config\SonataBlock\HttpCacheConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "httpCache()" has already been initialized. You cannot pass values the second time you call httpCache().');
        }
    
        return $this->httpCache;
    }
    
    public function templates(array $value = []): \Symfony\Config\SonataBlock\TemplatesConfig
    {
        if (null === $this->templates) {
            $this->templates = new \Symfony\Config\SonataBlock\TemplatesConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "templates()" has already been initialized. You cannot pass values the second time you call templates().');
        }
    
        return $this->templates;
    }
    
    public function container(array $value = []): \Symfony\Config\SonataBlock\ContainerConfig
    {
        if (null === $this->container) {
            $this->container = new \Symfony\Config\SonataBlock\ContainerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "container()" has already been initialized. You cannot pass values the second time you call container().');
        }
    
        return $this->container;
    }
    
    public function block(string $id, array $value = []): \Symfony\Config\SonataBlock\BlockConfig
    {
        if (!isset($this->blocks[$id])) {
            return $this->blocks[$id] = new \Symfony\Config\SonataBlock\BlockConfig($value);
        }
        if ([] === $value) {
            return $this->blocks[$id];
        }
    
        throw new InvalidConfigurationException('The node created by "block()" has already been initialized. You cannot pass values the second time you call block().');
    }
    
    public function blocksByClass(string $class, array $value = []): \Symfony\Config\SonataBlock\BlocksByClassConfig
    {
        if (!isset($this->blocksByClass[$class])) {
            return $this->blocksByClass[$class] = new \Symfony\Config\SonataBlock\BlocksByClassConfig($value);
        }
        if ([] === $value) {
            return $this->blocksByClass[$class];
        }
    
        throw new InvalidConfigurationException('The node created by "blocksByClass()" has already been initialized. You cannot pass values the second time you call blocksByClass().');
    }
    
    public function exception(array $value = []): \Symfony\Config\SonataBlock\ExceptionConfig
    {
        if (null === $this->exception) {
            $this->exception = new \Symfony\Config\SonataBlock\ExceptionConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "exception()" has already been initialized. You cannot pass values the second time you call exception().');
        }
    
        return $this->exception;
    }
    
    public function getExtensionAlias(): string
    {
        return 'sonata_block';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['profiler'])) {
            $this->profiler = new \Symfony\Config\SonataBlock\ProfilerConfig($value['profiler']);
            unset($value['profiler']);
        }
    
        if (isset($value['default_contexts'])) {
            $this->defaultContexts = $value['default_contexts'];
            unset($value['default_contexts']);
        }
    
        if (isset($value['context_manager'])) {
            $this->contextManager = $value['context_manager'];
            unset($value['context_manager']);
        }
    
        if (isset($value['http_cache'])) {
            $this->httpCache = new \Symfony\Config\SonataBlock\HttpCacheConfig($value['http_cache']);
            unset($value['http_cache']);
        }
    
        if (isset($value['templates'])) {
            $this->templates = new \Symfony\Config\SonataBlock\TemplatesConfig($value['templates']);
            unset($value['templates']);
        }
    
        if (isset($value['container'])) {
            $this->container = new \Symfony\Config\SonataBlock\ContainerConfig($value['container']);
            unset($value['container']);
        }
    
        if (isset($value['blocks'])) {
            $this->blocks = array_map(function ($v) { return new \Symfony\Config\SonataBlock\BlockConfig($v); }, $value['blocks']);
            unset($value['blocks']);
        }
    
        if (isset($value['blocks_by_class'])) {
            $this->blocksByClass = array_map(function ($v) { return new \Symfony\Config\SonataBlock\BlocksByClassConfig($v); }, $value['blocks_by_class']);
            unset($value['blocks_by_class']);
        }
    
        if (isset($value['exception'])) {
            $this->exception = new \Symfony\Config\SonataBlock\ExceptionConfig($value['exception']);
            unset($value['exception']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->profiler) {
            $output['profiler'] = $this->profiler->toArray();
        }
        if (null !== $this->defaultContexts) {
            $output['default_contexts'] = $this->defaultContexts;
        }
        if (null !== $this->contextManager) {
            $output['context_manager'] = $this->contextManager;
        }
        if (null !== $this->httpCache) {
            $output['http_cache'] = $this->httpCache->toArray();
        }
        if (null !== $this->templates) {
            $output['templates'] = $this->templates->toArray();
        }
        if (null !== $this->container) {
            $output['container'] = $this->container->toArray();
        }
        if (null !== $this->blocks) {
            $output['blocks'] = array_map(function ($v) { return $v->toArray(); }, $this->blocks);
        }
        if (null !== $this->blocksByClass) {
            $output['blocks_by_class'] = array_map(function ($v) { return $v->toArray(); }, $this->blocksByClass);
        }
        if (null !== $this->exception) {
            $output['exception'] = $this->exception->toArray();
        }
    
        return $output;
    }

}
