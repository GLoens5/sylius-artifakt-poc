<?php

namespace ContainerPxokFAr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSyliusFixtures_SuiteRegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'sylius_fixtures.suite_registry' shared service.
     *
     * @return \Sylius\Bundle\FixturesBundle\Suite\LazySuiteRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/sylius/fixtures-bundle/src/Suite/SuiteRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/sylius/fixtures-bundle/src/Suite/LazySuiteRegistry.php';

        $a = ($container->services['Sylius\\Bundle\\FixturesBundle\\Suite\\SuiteFactoryInterface'] ?? $container->load('getSuiteFactoryInterfaceService'));

        if (isset($container->services['sylius_fixtures.suite_registry'])) {
            return $container->services['sylius_fixtures.suite_registry'];
        }

        $container->services['sylius_fixtures.suite_registry'] = $instance = new \Sylius\Bundle\FixturesBundle\Suite\LazySuiteRegistry($a);

        $instance->addSuite('default', ['listeners' => ['orm_purger' => ['priority' => 0, 'options' => [0 => []]], 'logger' => ['priority' => 0, 'options' => [0 => []]]], 'fixtures' => ['locale' => ['options' => [0 => ['locales' => [0 => 'en_US', 1 => 'de_DE', 2 => 'fr_FR', 3 => 'pl_PL', 4 => 'es_ES', 5 => 'es_MX', 6 => 'pt_PT', 7 => 'zh_CN']]], 'priority' => 0, 'name' => 'locale'], 'currency' => ['options' => [0 => ['currencies' => [0 => 'EUR', 1 => 'USD', 2 => 'PLN', 3 => 'CAD', 4 => 'CNY', 5 => 'NZD', 6 => 'GBP', 7 => 'AUD', 8 => 'MXN']]], 'priority' => 0, 'name' => 'currency'], 'geographical' => ['options' => [0 => ['countries' => [0 => 'US', 1 => 'FR', 2 => 'DE', 3 => 'AU', 4 => 'CA', 5 => 'MX', 6 => 'NZ', 7 => 'PT', 8 => 'ES', 9 => 'CN', 10 => 'GB', 11 => 'PL'], 'zones' => ['US' => ['name' => 'United States of America', 'countries' => [0 => 'US']], 'WORLD' => ['name' => 'Rest of the World', 'countries' => [0 => 'FR', 1 => 'DE', 2 => 'AU', 3 => 'CA', 4 => 'MX', 5 => 'NZ', 6 => 'PT', 7 => 'ES', 8 => 'CN', 9 => 'GB', 10 => 'PL']]]]], 'priority' => 0, 'name' => 'geographical'], 'menu_taxon' => ['name' => 'taxon', 'options' => [0 => ['custom' => ['category' => ['code' => 'MENU_CATEGORY', 'name' => 'Category', 'translations' => ['en_US' => ['name' => 'Category'], 'fr_FR' => ['name' => 'Catégorie']]]]]], 'priority' => 0], 'channel' => ['options' => [0 => ['custom' => ['fashion_web_store' => ['name' => 'Fashion Web Store', 'code' => 'FASHION_WEB', 'locales' => [0 => 'en_US'], 'currencies' => [0 => 'USD'], 'enabled' => true, 'hostname' => $container->getEnv('resolve:SYLIUS_FIXTURES_HOSTNAME'), 'theme_name' => $container->getEnv('resolve:SYLIUS_FIXTURES_THEME_NAME'), 'shop_billing_data' => ['company' => 'Sylius', 'tax_id' => '0001112222', 'country_code' => 'US', 'street' => 'Test St. 15', 'city' => 'eCommerce Town', 'postcode' => '00 33 22'], 'menu_taxon' => 'MENU_CATEGORY', 'contact_phone_number' => '+41 123 456 789', 'contact_email' => 'contact@example.com']]]], 'priority' => 0, 'name' => 'channel'], 'payment_method' => ['options' => [0 => ['custom' => ['cash_on_delivery' => ['code' => 'cash_on_delivery', 'name' => 'Cash on delivery', 'channels' => [0 => 'FASHION_WEB']], 'bank_transfer' => ['code' => 'bank_transfer', 'name' => 'Bank transfer', 'channels' => [0 => 'FASHION_WEB'], 'enabled' => true]]]], 'priority' => 0, 'name' => 'payment_method'], 'shipping_method' => ['options' => [0 => ['custom' => ['ups' => ['code' => 'ups', 'name' => 'UPS', 'enabled' => true, 'channels' => [0 => 'FASHION_WEB']], 'dhl_express' => ['code' => 'dhl_express', 'name' => 'DHL Express', 'channels' => [0 => 'FASHION_WEB']], 'fedex' => ['code' => 'fedex', 'name' => 'FedEx', 'channels' => [0 => 'FASHION_WEB']]]]], 'priority' => 0, 'name' => 'shipping_method'], 'customer_group' => ['options' => [0 => ['custom' => ['retail' => ['code' => 'retail', 'name' => 'Retail'], 'wholesale' => ['code' => 'wholesale', 'name' => 'Wholesale']]]], 'priority' => 0, 'name' => 'customer_group'], 'shop_user' => ['name' => 'shop_user', 'options' => [0 => ['random' => 20, 'custom' => [0 => ['email' => 'shop@example.com', 'first_name' => 'John', 'last_name' => 'Doe', 'password' => 'sylius']]]], 'priority' => 0], 'admin_user' => ['name' => 'admin_user', 'options' => [0 => ['custom' => [0 => ['email' => 'sylius@example.com', 'username' => 'sylius', 'password' => 'sylius', 'enabled' => true, 'locale_code' => 'en_US', 'first_name' => 'John', 'last_name' => 'Doe', 'avatar' => '@SyliusCoreBundle/Resources/fixtures/adminAvatars/john.jpg'], 1 => ['email' => 'api@example.com', 'username' => 'api', 'password' => 'sylius-api', 'enabled' => true, 'locale_code' => 'en_US', 'first_name' => 'Luke', 'last_name' => 'Brushwood', 'api' => true, 'avatar' => '@SyliusCoreBundle/Resources/fixtures/adminAvatars/luke.jpg']]]], 'priority' => 0], 'tax_category' => ['options' => [0 => ['custom' => ['clothing' => ['code' => 'clothing', 'name' => 'Clothing'], 'other' => ['code' => 'other', 'name' => 'Other']]]], 'priority' => 0, 'name' => 'tax_category'], 'tax_rate' => ['options' => [0 => ['custom' => ['clothing_tax' => ['code' => 'clothing_sales_tax_7', 'name' => 'Clothing Sales Tax 7%', 'zone' => 'US', 'category' => 'clothing', 'amount' => 0.07], 'default_sales_tax' => ['code' => 'sales_tax_20', 'name' => 'Sales Tax 20%', 'zone' => 'US', 'category' => 'other', 'amount' => 0.2]]]], 'priority' => 0, 'name' => 'tax_rate'], 'promotion' => ['options' => [0 => ['custom' => ['christmas' => ['code' => 'christmas', 'name' => 'Christmas', 'channels' => [0 => 'FASHION_WEB'], 'coupon_based' => true, 'coupons' => [0 => ['code' => 'CHRISTMAS_SALE', 'expires_at' => 'December 24', 'usage_limit' => 10, 'per_customer_usage_limit' => 1]]], 'new_year' => ['code' => 'new_year', 'name' => 'New Year', 'usage_limit' => 10, 'priority' => 2, 'starts_at' => '-7 day', 'ends_at' => '7 day', 'channels' => [0 => 'FASHION_WEB'], 'rules' => [0 => ['type' => 'item_total', 'configuration' => ['FASHION_WEB' => ['amount' => 100.0]]]], 'actions' => [0 => ['type' => 'order_fixed_discount', 'configuration' => ['FASHION_WEB' => ['amount' => 10.0]]]]]]]], 'priority' => 0, 'name' => 'promotion'], 'tshirt_taxon' => ['name' => 'taxon', 'options' => [0 => ['custom' => ['category' => ['code' => 'MENU_CATEGORY', 'name' => 'Category', 'translations' => ['en_US' => ['name' => 'Category'], 'fr_FR' => ['name' => 'Catégorie']], 'children' => [0 => ['code' => 't_shirts', 'name' => 'T-shirts', 'slug' => 't-shirts', 'translations' => ['en_US' => ['name' => 'T-shirts'], 'fr_FR' => ['name' => 'T-shirts']], 'children' => [0 => ['code' => 'mens_t_shirts', 'translations' => ['en_US' => ['name' => 'Men', 'slug' => 't-shirts/men'], 'fr_FR' => ['name' => 'Hommes', 'slug' => 't-shirts/hommes']]], 1 => ['code' => 'womens_t_shirts', 'translations' => ['en_US' => ['name' => 'Women', 'slug' => 't-shirts/women'], 'fr_FR' => ['name' => 'Femmes', 'slug' => 't-shirts/femmes']]]]]]]]]], 'priority' => 0], 'tshirt_attribute' => ['name' => 'product_attribute', 'options' => [0 => ['custom' => [0 => ['name' => 'T-shirt brand', 'code' => 't_shirt_brand', 'type' => 'text'], 1 => ['name' => 'T-shirt collection', 'code' => 't_shirt_collection', 'type' => 'text'], 2 => ['name' => 'T-shirt material', 'code' => 't_shirt_material', 'type' => 'text'], 3 => ['name' => 'Damage reduction', 'code' => 'damage_reduction', 'type' => 'percent', 'translatable' => false]]]], 'priority' => 0], 'tshirt_option' => ['name' => 'product_option', 'options' => [0 => ['custom' => [0 => ['name' => 'T-shirt size', 'code' => 't_shirt_size', 'values' => ['t_shirt_size_s' => 'S', 't_shirt_size_m' => 'M', 't_shirt_size_l' => 'L', 't_shirt_size_xl' => 'XL', 't_shirt_size_xxl' => 'XXL']]]]], 'priority' => 0], 'tshirt_product' => ['name' => 'product', 'options' => [0 => ['custom' => [0 => ['name' => 'Everyday white basic T-Shirt', 'tax_category' => 'clothing', 'channels' => [0 => 'FASHION_WEB'], 'main_taxon' => 'womens_t_shirts', 'taxons' => [0 => 't_shirts', 1 => 'womens_t_shirts'], 'product_attributes' => ['t_shirt_brand' => 'You are breathtaking', 't_shirt_collection' => 'Sylius Summer 2019', 't_shirt_material' => '100% cotton', 'damage_reduction' => 0.1], 'product_options' => [0 => 't_shirt_size'], 'images' => [0 => ['path' => '@SyliusCoreBundle/Resources/fixtures/t-shirts/woman/t-shirt_01.jpg', 'type' => 'main']]], 1 => ['name' => 'Loose white designer T-Shirt', 'tax_category' => 'clothing', 'channels' => [0 => 'FASHION_WEB'], 'main_taxon' => 'womens_t_shirts', 'taxons' => [0 => 't_shirts', 1 => 'womens_t_shirts'], 'product_attributes' => ['t_shirt_brand' => 'Modern Wear', 't_shirt_collection' => 'Sylius Summer 2019', 't_shirt_material' => '100% cotton'], 'product_options' => [0 => 't_shirt_size'], 'images' => [0 => ['path' => '@SyliusCoreBundle/Resources/fixtures/t-shirts/woman/t-shirt_02.jpg', 'type' => 'main']]], 2 => ['name' => 'Ribbed copper slim fit Tee', 'tax_category' => 'clothing', 'channels' => [0 => 'FASHION_WEB'], 'main_taxon' => 'womens_t_shirts', 'taxons' => [0 => 't_shirts', 1 => 'womens_t_shirts'], 'product_attributes' => ['t_shirt_brand' => 'Celsius Small', 't_shirt_collection' => 'Sylius Summer 2019', 't_shirt_material' => '100% viscose'], 'product_options' => [0 => 't_shirt_size'], 'images' => [0 => ['path' => '@SyliusCoreBundle/Resources/fixtures/t-shirts/woman/t-shirt_03.jpg', 'type' => 'main']]], 3 => ['name' => 'Sport basic white T-Shirt', 'tax_category' => 'clothing', 'channels' => [0 => 'FASHION_WEB'], 'main_taxon' => 'mens_t_shirts', 'taxons' => [0 => 't_shirts', 1 => 'mens_t_shirts'], 'product_attributes' => ['t_shirt_brand' => 'You are breathtaking', 't_shirt_collection' => 'Sylius Winter 2019', 't_shirt_material' => '100% viscose'], 'product_options' => [0 => 't_shirt_size'], 'images' => [0 => ['path' => '@SyliusCoreBundle/Resources/fixtures/t-shirts/man/t-shirt_01.jpg', 'type' => 'main']]], 4 => ['name' => 'Raglan grey & black Tee', 'tax_category' => 'clothing', 'channels' => [0 => 'FASHION_WEB'], 'main_taxon' => 'mens_t_shirts', 'taxons' => [0 => 't_shirts', 1 => 'mens_t_shirts'], 'product_attributes' => ['t_shirt_brand' => 'You are breathtaking', 't_shirt_collection' => 'Sylius Winter 2019', 't_shirt_material' => '100% cotton'], 'product_options' => [0 => 't_shirt_size'], 'images' => [0 => ['path' => '@SyliusCoreBundle/Resources/fixtures/t-shirts/man/t-shirt_02.jpg', 'type' => 'main']]], 5 => ['name' => 'Oversize white cotton T-Shirt', 'tax_category' => 'clothing', 'channels' => [0 => 'FASHION_WEB'], 'main_taxon' => 'mens_t_shirts', 'taxons' => [0 => 't_shirts', 1 => 'mens_t_shirts'], 'product_attributes' => ['t_shirt_brand' => 'Modern Wear', 't_shirt_collection' => 'Sylius Summer 2019', 't_shirt_material' => '100% cotton'], 'product_options' => [0 => 't_shirt_size'], 'images' => [0 => ['path' => '@SyliusCoreBundle/Resources/fixtures/t-shirts/man/t-shirt_03.jpg', 'type' => 'main']]]]]], 'priority' => 0], 'cap_taxon' => ['name' => 'taxon', 'options' => [0 => ['custom' => ['category' => ['code' => 'MENU_CATEGORY', 'name' => 'Category', 'translations' => ['en_US' => ['name' => 'Category'], 'fr_FR' => ['name' => 'Catégorie']], 'children' => [0 => ['code' => 'caps', 'name' => 'Caps', 'slug' => 'caps', 'translations' => ['en_US' => ['name' => 'Caps'], 'fr_FR' => ['name' => 'Bonnets']], 'children' => [0 => ['code' => 'simple_caps', 'translations' => ['en_US' => ['name' => 'Simple', 'slug' => 'caps/simple'], 'fr_FR' => ['name' => 'Simple', 'slug' => 'bonnets/simple']]], 1 => ['code' => 'caps_with_pompons', 'translations' => ['en_US' => ['name' => 'With pompons', 'slug' => 'caps/with-pompons'], 'fr_FR' => ['name' => 'À pompon', 'slug' => 'bonnets/a-pompon']]]]]]]]]], 'priority' => 0], 'cap_attribute' => ['name' => 'product_attribute', 'options' => [0 => ['custom' => [0 => ['name' => 'Cap brand', 'code' => 'cap_brand', 'type' => 'text'], 1 => ['name' => 'Cap collection', 'code' => 'cap_collection', 'type' => 'text'], 2 => ['name' => 'Cap material', 'code' => 'cap_material', 'type' => 'text']]]], 'priority' => 0], 'cap_product' => ['name' => 'product', 'options' => [0 => ['custom' => [0 => ['name' => 'Knitted burgundy winter cap', 'tax_category' => 'other', 'channels' => [0 => 'FASHION_WEB'], 'main_taxon' => 'caps_with_pompons', 'taxons' => [0 => 'caps', 1 => 'caps_with_pompons'], 'product_attributes' => ['cap_brand' => 'You are breathtaking', 'cap_collection' => 'Sylius Winter 2019', 'cap_material' => '100% wool'], 'images' => [0 => ['path' => '@SyliusCoreBundle/Resources/fixtures/caps/cap_01.jpg', 'type' => 'main']]], 1 => ['name' => 'Knitted wool-blend green cap', 'tax_category' => 'other', 'channels' => [0 => 'FASHION_WEB'], 'main_taxon' => 'simple_caps', 'taxons' => [0 => 'caps', 1 => 'simple_caps'], 'product_attributes' => ['cap_brand' => 'Modern Wear', 'cap_collection' => 'Sylius Winter 2019', 'cap_material' => '100% wool'], 'images' => [0 => ['path' => '@SyliusCoreBundle/Resources/fixtures/caps/cap_02.jpg', 'type' => 'main']]], 2 => ['name' => 'Knitted white pompom cap', 'tax_category' => 'other', 'channels' => [0 => 'FASHION_WEB'], 'main_taxon' => 'caps_with_pompons', 'taxons' => [0 => 'caps', 1 => 'caps_with_pompons'], 'product_attributes' => ['cap_brand' => 'Celsius Small', 'cap_collection' => 'Sylius Winter 2019', 'cap_material' => '100% wool'], 'images' => [0 => ['path' => '@SyliusCoreBundle/Resources/fixtures/caps/cap_03.jpg', 'type' => 'main']]], 3 => ['name' => 'Cashmere-blend violet beanie', 'tax_category' => 'other', 'channels' => [0 => 'FASHION_WEB'], 'main_taxon' => 'simple_caps', 'taxons' => [0 => 'caps', 1 => 'simple_caps'], 'product_attributes' => ['cap_brand' => 'Date & Banana', 'cap_collection' => 'Sylius Winter 2019', 'cap_material' => '100% cashmere'], 'images' => [0 => ['path' => '@SyliusCoreBundle/Resources/fixtures/caps/cap_04.jpg', 'type' => 'main']]]]]], 'priority' => 0], 'dress_taxon' => ['name' => 'taxon', 'options' => [0 => ['custom' => ['category' => ['code' => 'MENU_CATEGORY', 'name' => 'Category', 'translations' => ['en_US' => ['name' => 'Category'], 'fr_FR' => ['name' => 'Catégorie']], 'children' => [0 => ['code' => 'dresses', 'translations' => ['en_US' => ['name' => 'Dresses'], 'fr_FR' => ['name' => 'Robes']]]]]]]], 'priority' => 0], 'dress_attribute' => ['name' => 'product_attribute', 'options' => [0 => ['custom' => [0 => ['name' => 'Dress brand', 'code' => 'dress_brand', 'type' => 'text'], 1 => ['name' => 'Dress collection', 'code' => 'dress_collection', 'type' => 'text'], 2 => ['name' => 'Dress material', 'code' => 'dress_material', 'type' => 'text'], 3 => ['name' => 'Length', 'code' => 'length', 'type' => 'integer', 'translatable' => false]]]], 'priority' => 0], 'dress_option' => ['name' => 'product_option', 'options' => [0 => ['custom' => [0 => ['name' => 'Dress size', 'code' => 'dress_size', 'values' => ['dress_s' => 'S', 'dress_m' => 'M', 'dress_l' => 'L', 'dress_xl' => 'XL', 'dress_xxl' => 'XXL']], 1 => ['name' => 'Dress height', 'code' => 'dress_height', 'values' => ['dress_height_petite' => 'Petite', 'dress_height_regular' => 'Regular', 'dress_height_tall' => 'Tall']]]]], 'priority' => 0], 'dress_product' => ['name' => 'product', 'options' => [0 => ['custom' => [0 => ['name' => 'Beige strappy summer dress', 'tax_category' => 'clothing', 'channels' => [0 => 'FASHION_WEB'], 'main_taxon' => 'dresses', 'taxons' => [0 => 'dresses'], 'product_attributes' => ['dress_brand' => 'You are breathtaking', 'dress_collection' => 'Sylius Summer 2019', 'dress_material' => '100% polyester'], 'product_options' => [0 => 'dress_size', 1 => 'dress_height'], 'images' => [0 => ['path' => '@SyliusCoreBundle/Resources/fixtures/dresses/dress_01.jpg', 'type' => 'main']]], 1 => ['name' => 'Off shoulder boho dress', 'tax_category' => 'clothing', 'channels' => [0 => 'FASHION_WEB'], 'main_taxon' => 'dresses', 'taxons' => [0 => 'dresses'], 'product_attributes' => ['dress_brand' => 'You are breathtaking', 'dress_collection' => 'Sylius Summer 2019', 'dress_material' => '100% wool'], 'product_options' => [0 => 'dress_size', 1 => 'dress_height'], 'images' => [0 => ['path' => '@SyliusCoreBundle/Resources/fixtures/dresses/dress_02.jpg', 'type' => 'main']]], 2 => ['name' => 'Ruffle wrap festival dress', 'tax_category' => 'clothing', 'channels' => [0 => 'FASHION_WEB'], 'main_taxon' => 'dresses', 'taxons' => [0 => 'dresses'], 'product_attributes' => ['dress_brand' => 'You are breathtaking', 'dress_collection' => 'Sylius Summer 2019', 'dress_material' => '100% polyester', 'length' => 100], 'product_options' => [0 => 'dress_size', 1 => 'dress_height'], 'images' => [0 => ['path' => '@SyliusCoreBundle/Resources/fixtures/dresses/dress_03.jpg', 'type' => 'main']]]]]], 'priority' => 0], 'jeans_taxon' => ['name' => 'taxon', 'options' => [0 => ['custom' => ['category' => ['code' => 'MENU_CATEGORY', 'name' => 'Category', 'translations' => ['en_US' => ['name' => 'Category'], 'fr_FR' => ['name' => 'Catégorie']], 'children' => [0 => ['code' => 'jeans', 'name' => 'Jeans', 'slug' => 'jeans', 'translations' => ['en_US' => ['name' => 'Jeans'], 'fr_FR' => ['name' => 'Jeans']], 'children' => [0 => ['code' => 'mens_jeans', 'translations' => ['en_US' => ['name' => 'Men', 'slug' => 'jeans/men'], 'fr_FR' => ['name' => 'Hommes', 'slug' => 'jeans/hommes']]], 1 => ['code' => 'womens_jeans', 'translations' => ['en_US' => ['name' => 'Women', 'slug' => 'jeans/women'], 'fr_FR' => ['name' => 'Femmes', 'slug' => 'jeans/femmes']]]]]]]]]], 'priority' => 0], 'jeans_attribute' => ['name' => 'product_attribute', 'options' => [0 => ['custom' => [0 => ['name' => 'Jeans brand', 'code' => 'jeans_brand', 'type' => 'text'], 1 => ['name' => 'Jeans collection', 'code' => 'jeans_collection', 'type' => 'text'], 2 => ['name' => 'Jeans material', 'code' => 'jeans_material', 'type' => 'text']]]], 'priority' => 0], 'jeans_option' => ['name' => 'product_option', 'options' => [0 => ['custom' => [0 => ['name' => 'Jeans size', 'code' => 'jeans_size', 'values' => ['jeans_size_s' => 'S', 'jeans_size_m' => 'M', 'jeans_size_l' => 'L', 'jeans_size_xl' => 'XL', 'jeans_size_xxl' => 'XXL']]]]], 'priority' => 0], 'jeans_product' => ['name' => 'product', 'options' => [0 => ['custom' => [0 => ['name' => '911M regular fit jeans', 'tax_category' => 'clothing', 'channels' => [0 => 'FASHION_WEB'], 'main_taxon' => 'mens_jeans', 'taxons' => [0 => 'jeans', 1 => 'mens_jeans'], 'product_attributes' => ['jeans_brand' => 'You are breathtaking', 'jeans_collection' => 'Sylius Winter 2019', 'jeans_material' => '100% jeans'], 'product_options' => [0 => 'jeans_size'], 'images' => [0 => ['path' => '@SyliusCoreBundle/Resources/fixtures/jeans/man/jeans_01.jpg', 'type' => 'main']]], 1 => ['name' => '330M slim fit jeans', 'tax_category' => 'clothing', 'channels' => [0 => 'FASHION_WEB'], 'main_taxon' => 'mens_jeans', 'taxons' => [0 => 'jeans', 1 => 'mens_jeans'], 'product_attributes' => ['jeans_brand' => 'Modern Wear', 'jeans_collection' => 'Sylius Winter 2019', 'jeans_material' => '100% jeans'], 'product_options' => [0 => 'jeans_size'], 'images' => [0 => ['path' => '@SyliusCoreBundle/Resources/fixtures/jeans/man/jeans_02.jpg', 'type' => 'main']]], 2 => ['name' => '990M regular fit jeans', 'tax_category' => 'clothing', 'channels' => [0 => 'FASHION_WEB'], 'main_taxon' => 'mens_jeans', 'taxons' => [0 => 'jeans', 1 => 'mens_jeans'], 'product_attributes' => ['jeans_brand' => 'Celsius Small', 'jeans_collection' => 'Sylius Winter 2019', 'jeans_material' => '100% jeans'], 'product_options' => [0 => 'jeans_size'], 'images' => [0 => ['path' => '@SyliusCoreBundle/Resources/fixtures/jeans/man/jeans_03.jpg', 'type' => 'main']]], 3 => ['name' => '007M black elegance jeans', 'tax_category' => 'clothing', 'channels' => [0 => 'FASHION_WEB'], 'main_taxon' => 'mens_jeans', 'taxons' => [0 => 'jeans', 1 => 'mens_jeans'], 'product_attributes' => ['jeans_brand' => 'Date & Banana', 'jeans_collection' => 'Sylius summer 2019', 'jeans_material' => '100% jeans'], 'product_options' => [0 => 'jeans_size'], 'images' => [0 => ['path' => '@SyliusCoreBundle/Resources/fixtures/jeans/man/jeans_04.svg', 'type' => 'main']]], 4 => ['name' => '727F patched cropped jeans', 'tax_category' => 'clothing', 'channels' => [0 => 'FASHION_WEB'], 'main_taxon' => 'womens_jeans', 'taxons' => [0 => 'jeans', 1 => 'womens_jeans'], 'product_attributes' => ['jeans_brand' => 'You are breathtaking', 'jeans_collection' => 'Sylius Winter 2019', 'jeans_material' => '100% jeans'], 'product_options' => [0 => 'jeans_size'], 'images' => [0 => ['path' => '@SyliusCoreBundle/Resources/fixtures/jeans/woman/jeans_01.jpg', 'type' => 'main']]], 5 => ['name' => '111F patched jeans with fancy badges', 'tax_category' => 'clothing', 'channels' => [0 => 'FASHION_WEB'], 'main_taxon' => 'womens_jeans', 'taxons' => [0 => 'jeans', 1 => 'womens_jeans'], 'product_attributes' => ['jeans_brand' => 'You are breathtaking', 'jeans_collection' => 'Sylius Winter 2019', 'jeans_material' => '100% jeans'], 'product_options' => [0 => 'jeans_size'], 'images' => [0 => ['path' => '@SyliusCoreBundle/Resources/fixtures/jeans/woman/jeans_02.jpg', 'type' => 'main']]], 6 => ['name' => '000F office grey jeans', 'tax_category' => 'clothing', 'channels' => [0 => 'FASHION_WEB'], 'main_taxon' => 'womens_jeans', 'taxons' => [0 => 'jeans', 1 => 'womens_jeans'], 'product_attributes' => ['jeans_brand' => 'Modern Wear', 'jeans_collection' => 'Sylius Winter 2019', 'jeans_material' => '100% jeans'], 'product_options' => [0 => 'jeans_size'], 'images' => [0 => ['path' => '@SyliusCoreBundle/Resources/fixtures/jeans/woman/jeans_03.jpg', 'type' => 'main']]], 7 => ['name' => '666F boyfriend jeans with rips', 'tax_category' => 'clothing', 'channels' => [0 => 'FASHION_WEB'], 'main_taxon' => 'womens_jeans', 'taxons' => [0 => 'jeans', 1 => 'womens_jeans'], 'product_attributes' => ['jeans_brand' => 'Modern Wear', 'jeans_collection' => 'Sylius Winter 2019', 'jeans_material' => '100% jeans'], 'product_options' => [0 => 'jeans_size'], 'images' => [0 => ['path' => '@SyliusCoreBundle/Resources/fixtures/jeans/woman/jeans_04.jpg', 'type' => 'main']]]]]], 'priority' => 0], 'product_review' => ['options' => [0 => ['random' => 40]], 'priority' => 0, 'name' => 'product_review'], 'similar_product_association' => ['options' => [0 => ['amount' => 3]], 'priority' => 0, 'name' => 'similar_product_association'], 'fulfilled_order' => ['name' => 'order', 'options' => [0 => ['amount' => 12, 'channel' => 'FASHION_WEB', 'fulfilled' => true]], 'priority' => 0], 'new_order' => ['name' => 'order', 'options' => [0 => ['amount' => 8, 'channel' => 'FASHION_WEB']], 'priority' => 0], 'address' => ['options' => [0 => ['random' => 10, 'prototype' => ['country_code' => 'US']]], 'priority' => 0, 'name' => 'address']]]);

        return $instance;
    }
}
