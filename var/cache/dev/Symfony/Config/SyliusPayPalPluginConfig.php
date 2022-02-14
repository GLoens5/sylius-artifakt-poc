<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusPayPalPlugin'.\DIRECTORY_SEPARATOR.'LoggingConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class SyliusPayPalPluginConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $sandbox;
    private $logging;
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function sandbox($value): self
    {
        $this->sandbox = $value;
    
        return $this;
    }
    
    public function logging(array $value = []): \Symfony\Config\SyliusPayPalPlugin\LoggingConfig
    {
        if (null === $this->logging) {
            $this->logging = new \Symfony\Config\SyliusPayPalPlugin\LoggingConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "logging()" has already been initialized. You cannot pass values the second time you call logging().');
        }
    
        return $this->logging;
    }
    
    public function getExtensionAlias(): string
    {
        return 'sylius_pay_pal_plugin';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['sandbox'])) {
            $this->sandbox = $value['sandbox'];
            unset($value['sandbox']);
        }
    
        if (isset($value['logging'])) {
            $this->logging = new \Symfony\Config\SyliusPayPalPlugin\LoggingConfig($value['logging']);
            unset($value['logging']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->sandbox) {
            $output['sandbox'] = $this->sandbox;
        }
        if (null !== $this->logging) {
            $output['logging'] = $this->logging->toArray();
        }
    
        return $output;
    }

}
