<?php

namespace Symfony\Config\SyliusMailer;

require_once __DIR__.\DIRECTORY_SEPARATOR.'EmailsConfig'.\DIRECTORY_SEPARATOR.'SenderConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class EmailsConfig 
{
    private $subject;
    private $template;
    private $enabled;
    private $sender;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @deprecated The "subject" option is deprecated since SyliusMailerBundle 1.5
     * @return $this
     */
    public function subject($value): self
    {
        $this->subject = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function template($value): self
    {
        $this->template = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    public function sender(array $value = []): \Symfony\Config\SyliusMailer\EmailsConfig\SenderConfig
    {
        if (null === $this->sender) {
            $this->sender = new \Symfony\Config\SyliusMailer\EmailsConfig\SenderConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "sender()" has already been initialized. You cannot pass values the second time you call sender().');
        }
    
        return $this->sender;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['subject'])) {
            $this->subject = $value['subject'];
            unset($value['subject']);
        }
    
        if (isset($value['template'])) {
            $this->template = $value['template'];
            unset($value['template']);
        }
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['sender'])) {
            $this->sender = new \Symfony\Config\SyliusMailer\EmailsConfig\SenderConfig($value['sender']);
            unset($value['sender']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->subject) {
            $output['subject'] = $this->subject;
        }
        if (null !== $this->template) {
            $output['template'] = $this->template;
        }
        if (null !== $this->enabled) {
            $output['enabled'] = $this->enabled;
        }
        if (null !== $this->sender) {
            $output['sender'] = $this->sender->toArray();
        }
    
        return $output;
    }

}
