<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusTheme'.\DIRECTORY_SEPARATOR.'SourcesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusTheme'.\DIRECTORY_SEPARATOR.'AssetsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusTheme'.\DIRECTORY_SEPARATOR.'TemplatingConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusTheme'.\DIRECTORY_SEPARATOR.'TranslationsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help creating config.
 */
class SyliusThemeConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $sources;
    private $assets;
    private $templating;
    private $translations;
    private $context;
    private $legacyMode;
    
    public function sources(array $value = []): \Symfony\Config\SyliusTheme\SourcesConfig
    {
        if (null === $this->sources) {
            $this->sources = new \Symfony\Config\SyliusTheme\SourcesConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "sources()" has already been initialized. You cannot pass values the second time you call sources().');
        }
    
        return $this->sources;
    }
    
    public function assets(array $value = []): \Symfony\Config\SyliusTheme\AssetsConfig
    {
        if (null === $this->assets) {
            $this->assets = new \Symfony\Config\SyliusTheme\AssetsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "assets()" has already been initialized. You cannot pass values the second time you call assets().');
        }
    
        return $this->assets;
    }
    
    public function templating(array $value = []): \Symfony\Config\SyliusTheme\TemplatingConfig
    {
        if (null === $this->templating) {
            $this->templating = new \Symfony\Config\SyliusTheme\TemplatingConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "templating()" has already been initialized. You cannot pass values the second time you call templating().');
        }
    
        return $this->templating;
    }
    
    public function translations(array $value = []): \Symfony\Config\SyliusTheme\TranslationsConfig
    {
        if (null === $this->translations) {
            $this->translations = new \Symfony\Config\SyliusTheme\TranslationsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "translations()" has already been initialized. You cannot pass values the second time you call translations().');
        }
    
        return $this->translations;
    }
    
    /**
     * @default 'sylius.theme.context.settable'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function context($value): self
    {
        $this->context = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @deprecated "legacy_mode" at path "sylius_theme" is deprecated since Sylius/ThemeBundle 2.0 and will be removed in 3.0.
     * @return $this
     */
    public function legacyMode($value): self
    {
        $this->legacyMode = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'sylius_theme';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['sources'])) {
            $this->sources = new \Symfony\Config\SyliusTheme\SourcesConfig($value['sources']);
            unset($value['sources']);
        }
    
        if (isset($value['assets'])) {
            $this->assets = new \Symfony\Config\SyliusTheme\AssetsConfig($value['assets']);
            unset($value['assets']);
        }
    
        if (isset($value['templating'])) {
            $this->templating = new \Symfony\Config\SyliusTheme\TemplatingConfig($value['templating']);
            unset($value['templating']);
        }
    
        if (isset($value['translations'])) {
            $this->translations = new \Symfony\Config\SyliusTheme\TranslationsConfig($value['translations']);
            unset($value['translations']);
        }
    
        if (isset($value['context'])) {
            $this->context = $value['context'];
            unset($value['context']);
        }
    
        if (isset($value['legacy_mode'])) {
            $this->legacyMode = $value['legacy_mode'];
            unset($value['legacy_mode']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->sources) {
            $output['sources'] = $this->sources->toArray();
        }
        if (null !== $this->assets) {
            $output['assets'] = $this->assets->toArray();
        }
        if (null !== $this->templating) {
            $output['templating'] = $this->templating->toArray();
        }
        if (null !== $this->translations) {
            $output['translations'] = $this->translations->toArray();
        }
        if (null !== $this->context) {
            $output['context'] = $this->context;
        }
        if (null !== $this->legacyMode) {
            $output['legacy_mode'] = $this->legacyMode;
        }
    
        return $output;
    }

}
