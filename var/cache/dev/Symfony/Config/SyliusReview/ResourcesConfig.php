<?php

namespace Symfony\Config\SyliusReview;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ResourcesConfig'.\DIRECTORY_SEPARATOR.'ReviewConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ResourcesConfig'.\DIRECTORY_SEPARATOR.'ReviewerConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ResourcesConfig 
{
    private $subject;
    private $review;
    private $reviewer;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function subject($value): self
    {
        $this->subject = $value;
    
        return $this;
    }
    
    public function review(array $value = []): \Symfony\Config\SyliusReview\ResourcesConfig\ReviewConfig
    {
        if (null === $this->review) {
            $this->review = new \Symfony\Config\SyliusReview\ResourcesConfig\ReviewConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "review()" has already been initialized. You cannot pass values the second time you call review().');
        }
    
        return $this->review;
    }
    
    public function reviewer(array $value = []): \Symfony\Config\SyliusReview\ResourcesConfig\ReviewerConfig
    {
        if (null === $this->reviewer) {
            $this->reviewer = new \Symfony\Config\SyliusReview\ResourcesConfig\ReviewerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "reviewer()" has already been initialized. You cannot pass values the second time you call reviewer().');
        }
    
        return $this->reviewer;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['subject'])) {
            $this->subject = $value['subject'];
            unset($value['subject']);
        }
    
        if (isset($value['review'])) {
            $this->review = new \Symfony\Config\SyliusReview\ResourcesConfig\ReviewConfig($value['review']);
            unset($value['review']);
        }
    
        if (isset($value['reviewer'])) {
            $this->reviewer = new \Symfony\Config\SyliusReview\ResourcesConfig\ReviewerConfig($value['reviewer']);
            unset($value['reviewer']);
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
        if (null !== $this->review) {
            $output['review'] = $this->review->toArray();
        }
        if (null !== $this->reviewer) {
            $output['reviewer'] = $this->reviewer->toArray();
        }
    
        return $output;
    }

}
