<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusMailer'.\DIRECTORY_SEPARATOR.'SenderConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SyliusMailer'.\DIRECTORY_SEPARATOR.'EmailsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class SyliusMailerConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $senderAdapter;
    private $rendererAdapter;
    private $sender;
    private $emails;
    private $templates;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function senderAdapter($value): self
    {
        $this->senderAdapter = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function rendererAdapter($value): self
    {
        $this->rendererAdapter = $value;
    
        return $this;
    }
    
    public function sender(array $value = []): \Symfony\Config\SyliusMailer\SenderConfig
    {
        if (null === $this->sender) {
            $this->sender = new \Symfony\Config\SyliusMailer\SenderConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "sender()" has already been initialized. You cannot pass values the second time you call sender().');
        }
    
        return $this->sender;
    }
    
    public function emails(string $code, array $value = []): \Symfony\Config\SyliusMailer\EmailsConfig
    {
        if (!isset($this->emails[$code])) {
            return $this->emails[$code] = new \Symfony\Config\SyliusMailer\EmailsConfig($value);
        }
        if ([] === $value) {
            return $this->emails[$code];
        }
    
        throw new InvalidConfigurationException('The node created by "emails()" has already been initialized. You cannot pass values the second time you call emails().');
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function templates(string $name, $value): self
    {
        $this->templates[$name] = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'sylius_mailer';
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['sender_adapter'])) {
            $this->senderAdapter = $value['sender_adapter'];
            unset($value['sender_adapter']);
        }
    
        if (isset($value['renderer_adapter'])) {
            $this->rendererAdapter = $value['renderer_adapter'];
            unset($value['renderer_adapter']);
        }
    
        if (isset($value['sender'])) {
            $this->sender = new \Symfony\Config\SyliusMailer\SenderConfig($value['sender']);
            unset($value['sender']);
        }
    
        if (isset($value['emails'])) {
            $this->emails = array_map(function ($v) { return new \Symfony\Config\SyliusMailer\EmailsConfig($v); }, $value['emails']);
            unset($value['emails']);
        }
    
        if (isset($value['templates'])) {
            $this->templates = $value['templates'];
            unset($value['templates']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->senderAdapter) {
            $output['sender_adapter'] = $this->senderAdapter;
        }
        if (null !== $this->rendererAdapter) {
            $output['renderer_adapter'] = $this->rendererAdapter;
        }
        if (null !== $this->sender) {
            $output['sender'] = $this->sender->toArray();
        }
        if (null !== $this->emails) {
            $output['emails'] = array_map(function ($v) { return $v->toArray(); }, $this->emails);
        }
        if (null !== $this->templates) {
            $output['templates'] = $this->templates;
        }
    
        return $output;
    }

}
