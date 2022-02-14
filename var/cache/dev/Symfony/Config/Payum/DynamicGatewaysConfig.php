<?php

namespace Symfony\Config\Payum;

require_once __DIR__.\DIRECTORY_SEPARATOR.'DynamicGateways'.\DIRECTORY_SEPARATOR.'ConfigStorageConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'DynamicGateways'.\DIRECTORY_SEPARATOR.'EncryptionConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class DynamicGatewaysConfig 
{
    private $sonataAdmin;
    private $configStorage;
    private $encryption;
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function sonataAdmin($value): self
    {
        $this->sonataAdmin = $value;
    
        return $this;
    }
    
    public function configStorage(string $key, array $value = []): \Symfony\Config\Payum\DynamicGateways\ConfigStorageConfig
    {
        if (!isset($this->configStorage[$key])) {
            return $this->configStorage[$key] = new \Symfony\Config\Payum\DynamicGateways\ConfigStorageConfig($value);
        }
        if ([] === $value) {
            return $this->configStorage[$key];
        }
    
        throw new InvalidConfigurationException('The node created by "configStorage()" has already been initialized. You cannot pass values the second time you call configStorage().');
    }
    
    public function encryption(array $value = []): \Symfony\Config\Payum\DynamicGateways\EncryptionConfig
    {
        if (null === $this->encryption) {
            $this->encryption = new \Symfony\Config\Payum\DynamicGateways\EncryptionConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "encryption()" has already been initialized. You cannot pass values the second time you call encryption().');
        }
    
        return $this->encryption;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['sonata_admin'])) {
            $this->sonataAdmin = $value['sonata_admin'];
            unset($value['sonata_admin']);
        }
    
        if (isset($value['config_storage'])) {
            $this->configStorage = array_map(function ($v) { return new \Symfony\Config\Payum\DynamicGateways\ConfigStorageConfig($v); }, $value['config_storage']);
            unset($value['config_storage']);
        }
    
        if (isset($value['encryption'])) {
            $this->encryption = new \Symfony\Config\Payum\DynamicGateways\EncryptionConfig($value['encryption']);
            unset($value['encryption']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->sonataAdmin) {
            $output['sonata_admin'] = $this->sonataAdmin;
        }
        if (null !== $this->configStorage) {
            $output['config_storage'] = array_map(function ($v) { return $v->toArray(); }, $this->configStorage);
        }
        if (null !== $this->encryption) {
            $output['encryption'] = $this->encryption->toArray();
        }
    
        return $output;
    }

}
