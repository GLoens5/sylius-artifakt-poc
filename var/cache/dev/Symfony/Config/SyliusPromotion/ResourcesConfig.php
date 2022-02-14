<?php

namespace Symfony\Config\SyliusPromotion;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'PromotionSubjectConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'PromotionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'PromotionRuleConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'PromotionActionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Resources'.\DIRECTORY_SEPARATOR.'PromotionCouponConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ResourcesConfig 
{
    private $promotionSubject;
    private $promotion;
    private $promotionRule;
    private $promotionAction;
    private $promotionCoupon;
    
    public function promotionSubject(array $value = []): \Symfony\Config\SyliusPromotion\Resources\PromotionSubjectConfig
    {
        if (null === $this->promotionSubject) {
            $this->promotionSubject = new \Symfony\Config\SyliusPromotion\Resources\PromotionSubjectConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "promotionSubject()" has already been initialized. You cannot pass values the second time you call promotionSubject().');
        }
    
        return $this->promotionSubject;
    }
    
    public function promotion(array $value = []): \Symfony\Config\SyliusPromotion\Resources\PromotionConfig
    {
        if (null === $this->promotion) {
            $this->promotion = new \Symfony\Config\SyliusPromotion\Resources\PromotionConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "promotion()" has already been initialized. You cannot pass values the second time you call promotion().');
        }
    
        return $this->promotion;
    }
    
    public function promotionRule(array $value = []): \Symfony\Config\SyliusPromotion\Resources\PromotionRuleConfig
    {
        if (null === $this->promotionRule) {
            $this->promotionRule = new \Symfony\Config\SyliusPromotion\Resources\PromotionRuleConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "promotionRule()" has already been initialized. You cannot pass values the second time you call promotionRule().');
        }
    
        return $this->promotionRule;
    }
    
    public function promotionAction(array $value = []): \Symfony\Config\SyliusPromotion\Resources\PromotionActionConfig
    {
        if (null === $this->promotionAction) {
            $this->promotionAction = new \Symfony\Config\SyliusPromotion\Resources\PromotionActionConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "promotionAction()" has already been initialized. You cannot pass values the second time you call promotionAction().');
        }
    
        return $this->promotionAction;
    }
    
    public function promotionCoupon(array $value = []): \Symfony\Config\SyliusPromotion\Resources\PromotionCouponConfig
    {
        if (null === $this->promotionCoupon) {
            $this->promotionCoupon = new \Symfony\Config\SyliusPromotion\Resources\PromotionCouponConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "promotionCoupon()" has already been initialized. You cannot pass values the second time you call promotionCoupon().');
        }
    
        return $this->promotionCoupon;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['promotion_subject'])) {
            $this->promotionSubject = new \Symfony\Config\SyliusPromotion\Resources\PromotionSubjectConfig($value['promotion_subject']);
            unset($value['promotion_subject']);
        }
    
        if (isset($value['promotion'])) {
            $this->promotion = new \Symfony\Config\SyliusPromotion\Resources\PromotionConfig($value['promotion']);
            unset($value['promotion']);
        }
    
        if (isset($value['promotion_rule'])) {
            $this->promotionRule = new \Symfony\Config\SyliusPromotion\Resources\PromotionRuleConfig($value['promotion_rule']);
            unset($value['promotion_rule']);
        }
    
        if (isset($value['promotion_action'])) {
            $this->promotionAction = new \Symfony\Config\SyliusPromotion\Resources\PromotionActionConfig($value['promotion_action']);
            unset($value['promotion_action']);
        }
    
        if (isset($value['promotion_coupon'])) {
            $this->promotionCoupon = new \Symfony\Config\SyliusPromotion\Resources\PromotionCouponConfig($value['promotion_coupon']);
            unset($value['promotion_coupon']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->promotionSubject) {
            $output['promotion_subject'] = $this->promotionSubject->toArray();
        }
        if (null !== $this->promotion) {
            $output['promotion'] = $this->promotion->toArray();
        }
        if (null !== $this->promotionRule) {
            $output['promotion_rule'] = $this->promotionRule->toArray();
        }
        if (null !== $this->promotionAction) {
            $output['promotion_action'] = $this->promotionAction->toArray();
        }
        if (null !== $this->promotionCoupon) {
            $output['promotion_coupon'] = $this->promotionCoupon->toArray();
        }
    
        return $output;
    }

}
