<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusGrid'.\DIRECTORY_SEPARATOR.'TemplatesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusGrid'.\DIRECTORY_SEPARATOR.'GridsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class SyliusGridConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $drivers;
    private $templates;
    private $grids;
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function drivers($value): self
    {
        $this->drivers = $value;
    
        return $this;
    }
    
    public function templates(array $value = []): \Symfony\Config\SyliusGrid\TemplatesConfig
    {
        if (null === $this->templates) {
            $this->templates = new \Symfony\Config\SyliusGrid\TemplatesConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "templates()" has already been initialized. You cannot pass values the second time you call templates().');
        }
    
        return $this->templates;
    }
    
    public function grids(string $code, array $value = []): \Symfony\Config\SyliusGrid\GridsConfig
    {
        if (!isset($this->grids[$code])) {
            return $this->grids[$code] = new \Symfony\Config\SyliusGrid\GridsConfig($value);
        }
        if ([] === $value) {
            return $this->grids[$code];
        }
    
        throw new InvalidConfigurationException('The node created by "grids()" has already been initialized. You cannot pass values the second time you call grids().');
    }
    
    public function getExtensionAlias(): string
    {
        return 'sylius_grid';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['drivers'])) {
            $this->drivers = $value['drivers'];
            unset($value['drivers']);
        }
    
        if (isset($value['templates'])) {
            $this->templates = new \Symfony\Config\SyliusGrid\TemplatesConfig($value['templates']);
            unset($value['templates']);
        }
    
        if (isset($value['grids'])) {
            $this->grids = array_map(function ($v) { return new \Symfony\Config\SyliusGrid\GridsConfig($v); }, $value['grids']);
            unset($value['grids']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->drivers) {
            $output['drivers'] = $this->drivers;
        }
        if (null !== $this->templates) {
            $output['templates'] = $this->templates->toArray();
        }
        if (null !== $this->grids) {
            $output['grids'] = array_map(function ($v) { return $v->toArray(); }, $this->grids);
        }
    
        return $output;
    }

}
