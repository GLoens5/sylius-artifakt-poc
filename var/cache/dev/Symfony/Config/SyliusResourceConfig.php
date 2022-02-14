<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusResource'.\DIRECTORY_SEPARATOR.'ResourcesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusResource'.\DIRECTORY_SEPARATOR.'SettingsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusResource'.\DIRECTORY_SEPARATOR.'TranslationConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help creating config.
 */
class SyliusResourceConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $resources;
    private $settings;
    private $translation;
    private $drivers;
    private $authorizationChecker;
    
    public function resources(string $name, array $value = []): \Symfony\Config\SyliusResource\ResourcesConfig
    {
        if (!isset($this->resources[$name])) {
            return $this->resources[$name] = new \Symfony\Config\SyliusResource\ResourcesConfig($value);
        }
        if ([] === $value) {
            return $this->resources[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "resources()" has already been initialized. You cannot pass values the second time you call resources().');
    }
    
    public function settings(array $value = []): \Symfony\Config\SyliusResource\SettingsConfig
    {
        if (null === $this->settings) {
            $this->settings = new \Symfony\Config\SyliusResource\SettingsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "settings()" has already been initialized. You cannot pass values the second time you call settings().');
        }
    
        return $this->settings;
    }
    
    public function translation(array $value = []): \Symfony\Config\SyliusResource\TranslationConfig
    {
        if (null === $this->translation) {
            $this->translation = new \Symfony\Config\SyliusResource\TranslationConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "translation()" has already been initialized. You cannot pass values the second time you call translation().');
        }
    
        return $this->translation;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function drivers($value): self
    {
        $this->drivers = $value;
    
        return $this;
    }
    
    /**
     * @default 'sylius.resource_controller.authorization_checker.disabled'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function authorizationChecker($value): self
    {
        $this->authorizationChecker = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'sylius_resource';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['resources'])) {
            $this->resources = array_map(function ($v) { return new \Symfony\Config\SyliusResource\ResourcesConfig($v); }, $value['resources']);
            unset($value['resources']);
        }
    
        if (isset($value['settings'])) {
            $this->settings = new \Symfony\Config\SyliusResource\SettingsConfig($value['settings']);
            unset($value['settings']);
        }
    
        if (isset($value['translation'])) {
            $this->translation = new \Symfony\Config\SyliusResource\TranslationConfig($value['translation']);
            unset($value['translation']);
        }
    
        if (isset($value['drivers'])) {
            $this->drivers = $value['drivers'];
            unset($value['drivers']);
        }
    
        if (isset($value['authorization_checker'])) {
            $this->authorizationChecker = $value['authorization_checker'];
            unset($value['authorization_checker']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->resources) {
            $output['resources'] = array_map(function ($v) { return $v->toArray(); }, $this->resources);
        }
        if (null !== $this->settings) {
            $output['settings'] = $this->settings->toArray();
        }
        if (null !== $this->translation) {
            $output['translation'] = $this->translation->toArray();
        }
        if (null !== $this->drivers) {
            $output['drivers'] = $this->drivers;
        }
        if (null !== $this->authorizationChecker) {
            $output['authorization_checker'] = $this->authorizationChecker;
        }
    
        return $output;
    }

}
