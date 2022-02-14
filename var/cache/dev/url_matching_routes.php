<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/_partial/channels' => [[['_route' => 'sylius_admin_partial_channel_index', '_controller' => 'sylius.controller.channel:indexAction', '_sylius' => ['repository' => ['method' => 'findAll'], 'template' => '$template', 'permission' => true]], null, ['GET' => 0], null, true, false, null]],
        '/admin/_partial/taxons/tree' => [[['_route' => 'sylius_admin_partial_taxon_tree', '_controller' => 'sylius.controller.taxon:indexAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findRootNodes'], 'permission' => true]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/taxons/root-nodes' => [[['_route' => 'sylius_admin_ajax_taxon_root_nodes', '_controller' => 'sylius.controller.taxon:indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findRootNodes']]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/taxons/leafs' => [[['_route' => 'sylius_admin_ajax_taxon_leafs', '_controller' => 'sylius.controller.taxon:indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findChildren', 'arguments' => ['parentCode' => '$parentCode']]]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/taxons/leaf' => [[['_route' => 'sylius_admin_ajax_taxon_by_code', '_controller' => 'sylius.controller.taxon:indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findBy', 'arguments' => [['code' => '$code']]]]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/taxons/search' => [[['_route' => 'sylius_admin_ajax_taxon_by_name_phrase', '_controller' => 'sylius.controller.taxon:indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findByNamePart', 'arguments' => ['phrase' => '$phrase', 'locale' => null, 'limit' => 25]]]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/taxons/generate-slug' => [[['_route' => 'sylius_admin_ajax_generate_taxon_slug', '_controller' => 'sylius.controller.taxon_slug:generateAction', '_format' => 'json'], null, ['GET' => 0], null, true, false, null]],
        '/admin/ajax/products/generate-slug' => [[['_route' => 'sylius_admin_ajax_generate_product_slug', '_controller' => 'sylius.controller.product_slug:generateAction', '_format' => 'json'], null, ['GET' => 0], null, true, false, null]],
        '/admin/ajax/products/search' => [[['_route' => 'sylius_admin_ajax_product_by_name_phrase', '_controller' => 'sylius.controller.product:indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findByNamePart', 'arguments' => ['phrase' => '$phrase', 'locale' => 'expr:service(\'sylius.context.locale\').getLocaleCode()', 'limit' => 25]]]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/products/code' => [[['_route' => 'sylius_admin_ajax_product_by_code', '_controller' => 'sylius.controller.product:indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findBy', 'arguments' => [['code' => '$code']]]]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/products' => [[['_route' => 'sylius_admin_ajax_product_index', '_controller' => 'sylius.controller.product:indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Default'], 'permission' => true, 'grid' => 'sylius_admin_product']], null, ['GET' => 0], null, true, false, null]],
        '/admin/ajax/product-taxons/update' => [[['_route' => 'sylius_admin_ajax_product_taxons_update_position', '_controller' => 'sylius.controller.product_taxon:updatePositionsAction', '_format' => 'json', '_sylius' => ['permission' => true]], null, ['PUT' => 0], null, false, false, null]],
        '/admin/ajax/product-variants/update' => [[['_route' => 'sylius_admin_ajax_product_variants_update_position', '_controller' => 'sylius.controller.product_variant:updatePositionsAction', '_format' => 'json', '_sylius' => ['permission' => true]], null, ['PUT' => 0], null, false, false, null]],
        '/admin/ajax/product-variants/search' => [[['_route' => 'sylius_admin_ajax_product_variants_by_phrase', '_controller' => 'sylius.controller.product_variant:indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findByPhraseAndProductCode', 'arguments' => ['phrase' => '$phrase', 'locale' => 'expr:service(\'sylius.context.locale\').getLocaleCode()', 'productCode' => '$productCode']]]], null, ['GET' => 0], null, false, false, null]],
        '/admin/ajax/product-variants' => [[['_route' => 'sylius_admin_ajax_product_variants_by_codes', '_controller' => 'sylius.controller.product_variant:indexAction', '_format' => 'json', '_sylius' => ['serialization_groups' => ['Autocomplete'], 'permission' => true, 'repository' => ['method' => 'findByCodesAndProductCode', 'arguments' => ['$code', '$productCode']]]], null, ['GET' => 0], null, true, false, null]],
        '/admin/ajax/render-province-form' => [[['_route' => 'sylius_admin_ajax_render_province_form', '_controller' => 'sylius.controller.province:choiceOrTextFieldFormAction', '_sylius' => ['template' => '@SyliusAdmin/Common/Form/_province.html.twig']], null, null, null, false, false, null]],
        '/admin/ajax/get-version' => [[['_route' => 'sylius_admin_ajax_get_version', '_controller' => 'sylius.controller.admin.notification:getVersionAction', '_format' => 'json'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'sylius_admin_dashboard', '_controller' => 'sylius.controller.admin.dashboard:indexAction'], null, null, null, true, false, null]],
        '/admin/statistics' => [[['_route' => 'sylius_admin_dashboard_statistics', '_controller' => 'sylius.controller.admin.dashboard:getRawData'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'sylius_admin_admin_user_index', '_controller' => 'sylius.controller.admin_user:indexAction', '_sylius' => ['grid' => 'sylius_admin_admin_user', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => ['form' => '@SyliusAdmin/AdminUser/_form.html.twig'], 'icon' => 'lock']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/users/new' => [[['_route' => 'sylius_admin_admin_user_create', '_controller' => 'sylius.controller.admin_user:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_admin_user_index', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => ['form' => '@SyliusAdmin/AdminUser/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/users/bulk-delete' => [[['_route' => 'sylius_admin_admin_user_bulk_delete', '_controller' => 'sylius.controller.admin_user:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => ['form' => '@SyliusAdmin/AdminUser/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/channels' => [[['_route' => 'sylius_admin_channel_index', '_controller' => 'sylius.controller.channel:indexAction', '_sylius' => ['grid' => 'sylius_admin_channel', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => ['form' => '@SyliusAdmin/Channel/_form.html.twig'], 'icon' => 'share alternate']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/channels/new' => [[['_route' => 'sylius_admin_channel_create', '_controller' => 'sylius.controller.channel:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_channel_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => ['form' => '@SyliusAdmin/Channel/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/channels/bulk-delete' => [[['_route' => 'sylius_admin_channel_bulk_delete', '_controller' => 'sylius.controller.channel:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => ['form' => '@SyliusAdmin/Channel/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/countries' => [[['_route' => 'sylius_admin_country_index', '_controller' => 'sylius.controller.country:indexAction', '_sylius' => ['grid' => 'sylius_admin_country', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_destinations', 'templates' => ['form' => '@SyliusAdmin/Country/_form.html.twig'], 'icon' => 'flag']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/countries/new' => [[['_route' => 'sylius_admin_country_create', '_controller' => 'sylius.controller.country:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_country_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_destinations', 'templates' => ['form' => '@SyliusAdmin/Country/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/countries/bulk-delete' => [[['_route' => 'sylius_admin_country_bulk_delete', '_controller' => 'sylius.controller.country:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_destinations', 'templates' => ['form' => '@SyliusAdmin/Country/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/currencies' => [[['_route' => 'sylius_admin_currency_index', '_controller' => 'sylius.controller.currency:indexAction', '_sylius' => ['grid' => 'sylius_admin_currency', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_currencies_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Currency/_form.html.twig'], 'icon' => 'dollar']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/currencies/new' => [[['_route' => 'sylius_admin_currency_create', '_controller' => 'sylius.controller.currency:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_currency_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_currencies_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Currency/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/currencies/bulk-delete' => [[['_route' => 'sylius_admin_currency_bulk_delete', '_controller' => 'sylius.controller.currency:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_currencies_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Currency/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/customers' => [[['_route' => 'sylius_admin_customer_index', '_controller' => 'sylius.controller.customer:indexAction', '_sylius' => ['grid' => 'sylius_admin_customer', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_your_customers', 'templates' => ['form' => '@SyliusAdmin/Customer/_form.html.twig'], 'icon' => 'users']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/customers/new' => [[['_route' => 'sylius_admin_customer_create', '_controller' => 'sylius.controller.customer:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_customer_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_your_customers', 'templates' => ['form' => '@SyliusAdmin/Customer/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/customers/bulk-delete' => [[['_route' => 'sylius_admin_customer_bulk_delete', '_controller' => 'sylius.controller.customer:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_your_customers', 'templates' => ['form' => '@SyliusAdmin/Customer/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/orders-statistics' => [[['_route' => 'sylius_admin_customer_orders_statistics', '_controller' => 'sylius.controller.customer_statistics:renderAction', '_sylius' => ['section' => 'admin', 'permission' => true]], null, ['GET' => 0], null, false, false, null]],
        '/admin/customer-groups' => [[['_route' => 'sylius_admin_customer_group_index', '_controller' => 'sylius.controller.customer_group:indexAction', '_sylius' => ['grid' => 'sylius_admin_customer_group', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => ['form' => '@SyliusAdmin/CustomerGroup/_form.html.twig'], 'icon' => 'archive']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/customer-groups/new' => [[['_route' => 'sylius_admin_customer_group_create', '_controller' => 'sylius.controller.customer_group:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_customer_group_update', 'permission' => true, 'vars' => ['header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => ['form' => '@SyliusAdmin/CustomerGroup/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/customer-groups/bulk-delete' => [[['_route' => 'sylius_admin_customer_group_bulk_delete', '_controller' => 'sylius.controller.customer_group:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => ['form' => '@SyliusAdmin/CustomerGroup/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/exchange-rates' => [[['_route' => 'sylius_admin_exchange_rate_index', '_controller' => 'sylius.controller.exchange_rate:indexAction', '_sylius' => ['grid' => 'sylius_admin_exchange_rate', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => ['form' => '@SyliusAdmin/ExchangeRate/_form.html.twig'], 'icon' => 'sliders']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/exchange-rates/new' => [[['_route' => 'sylius_admin_exchange_rate_create', '_controller' => 'sylius.controller.exchange_rate:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_exchange_rate_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => ['form' => '@SyliusAdmin/ExchangeRate/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/exchange-rates/bulk-delete' => [[['_route' => 'sylius_admin_exchange_rate_bulk_delete', '_controller' => 'sylius.controller.exchange_rate:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => ['form' => '@SyliusAdmin/ExchangeRate/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/inventory' => [[['_route' => 'sylius_admin_inventory_index', '_controller' => 'sylius.controller.product_variant:indexAction', '_sylius' => ['template' => '@SyliusAdmin/Crud/index.html.twig', 'grid' => 'sylius_admin_inventory', 'section' => 'admin', 'permission' => true, 'vars' => ['icon' => 'history', 'templates' => ['breadcrumb' => '@SyliusAdmin/Inventory/Index/_breadcrumb.html.twig'], 'header' => 'sylius.ui.inventory', 'subheader' => 'sylius.ui.manage_inventory']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/locales' => [[['_route' => 'sylius_admin_locale_index', '_controller' => 'sylius.controller.locale:indexAction', '_sylius' => ['grid' => 'sylius_admin_locale', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_languages_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Locale/_form.html.twig'], 'icon' => 'translate']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/locales/new' => [[['_route' => 'sylius_admin_locale_create', '_controller' => 'sylius.controller.locale:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_locale_index', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_languages_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Locale/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/locales/bulk-delete' => [[['_route' => 'sylius_admin_locale_bulk_delete', '_controller' => 'sylius.controller.locale:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_languages_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Locale/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/orders' => [[['_route' => 'sylius_admin_order_index', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => ['grid' => 'sylius_admin_order', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.process_your_orders', 'icon' => 'cart']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/payments' => [[['_route' => 'sylius_admin_payment_index', '_controller' => 'sylius.controller.payment:indexAction', '_sylius' => ['grid' => 'sylius_admin_payment', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_payments', 'icon' => 'payment']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/payment-methods' => [[['_route' => 'sylius_admin_payment_method_index', '_controller' => 'sylius.controller.payment_method:indexAction', '_sylius' => ['grid' => 'sylius_admin_payment_method', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => ['form' => '@SyliusAdmin/PaymentMethod/_form.html.twig'], 'icon' => 'payment']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/payment-methods/bulk-delete' => [[['_route' => 'sylius_admin_payment_method_bulk_delete', '_controller' => 'sylius.controller.payment_method:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => ['form' => '@SyliusAdmin/PaymentMethod/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/payment-gateways' => [[['_route' => 'sylius_admin_get_payment_gateways', '_controller' => 'sylius.controller.payment_method:getPaymentGatewaysAction', 'template' => '@SyliusAdmin/PaymentMethod/Gateways/paymentGateways.html.twig'], null, ['GET' => 0], null, false, false, null]],
        '/admin/products/bulk-delete' => [[['_route' => 'sylius_admin_product_bulk_delete', '_controller' => 'sylius.controller.product:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => ['form' => '@SyliusAdmin/Product/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/products' => [[['_route' => 'sylius_admin_product_index', '_controller' => 'sylius.controller.product:indexAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'grid' => 'sylius_admin_product', 'template' => '@SyliusAdmin/Product/index.html.twig', 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'icon' => 'cube']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/products/new/simple' => [[['_route' => 'sylius_admin_product_create_simple', '_controller' => 'sylius.controller.product:createAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'factory' => ['method' => 'createWithVariant'], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_product_update', 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => ['form' => '@SyliusAdmin/Product/_form.html.twig'], 'route' => ['name' => 'sylius_admin_product_create_simple']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product-association-types' => [[['_route' => 'sylius_admin_product_association_type_index', '_controller' => 'sylius.controller.product_association_type:indexAction', '_sylius' => ['grid' => 'sylius_admin_product_association_type', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAssociationType/_form.html.twig'], 'icon' => 'tasks']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/product-association-types/new' => [[['_route' => 'sylius_admin_product_association_type_create', '_controller' => 'sylius.controller.product_association_type:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_product_association_type_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAssociationType/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product-association-types/bulk-delete' => [[['_route' => 'sylius_admin_product_association_type_bulk_delete', '_controller' => 'sylius.controller.product_association_type:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAssociationType/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/product-attributes' => [[['_route' => 'sylius_admin_product_attribute_index', '_controller' => 'sylius.controller.product_attribute:indexAction', '_sylius' => ['grid' => 'sylius_admin_product_attribute', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAttribute/_form.html.twig'], 'icon' => 'cubes']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/product-attributes/bulk-delete' => [[['_route' => 'sylius_admin_product_attribute_bulk_delete', '_controller' => 'sylius.controller.product_attribute:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAttribute/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/attribute-types' => [[['_route' => 'sylius_admin_get_attribute_types', '_controller' => 'sylius.controller.product_attribute:getAttributeTypesAction', 'template' => '@SyliusAdmin/ProductAttribute/Types/attributeTypes.html.twig'], null, ['GET' => 0], null, false, false, null]],
        '/admin/attributes' => [[['_route' => 'sylius_admin_get_product_attributes', '_controller' => 'sylius.controller.product_attribute:renderAttributesAction', 'template' => '@SyliusAdmin/Product/Attribute/attributeChoice.html.twig'], null, ['GET' => 0], null, false, false, null]],
        '/admin/attribute-forms' => [[['_route' => 'sylius_admin_render_attribute_forms', '_controller' => 'sylius.controller.product_attribute:renderAttributeValueFormsAction', 'template' => '@SyliusAdmin/Product/Attribute/attributeValues.html.twig'], null, ['GET' => 0], null, false, false, null]],
        '/admin/product-options' => [[['_route' => 'sylius_admin_product_option_index', '_controller' => 'sylius.controller.product_option:indexAction', '_sylius' => ['grid' => 'sylius_admin_product_option', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductOption/_form.html.twig'], 'icon' => 'options']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/product-options/new' => [[['_route' => 'sylius_admin_product_option_create', '_controller' => 'sylius.controller.product_option:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_product_option_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductOption/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product-options/bulk-delete' => [[['_route' => 'sylius_admin_product_option_bulk_delete', '_controller' => 'sylius.controller.product_option:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductOption/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/product-reviews' => [[['_route' => 'sylius_admin_product_review_index', '_controller' => 'sylius.controller.product_review:indexAction', '_sylius' => ['grid' => 'sylius_admin_product_review', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_reviews_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductReview/_form.html.twig'], 'icon' => 'newspaper']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/product-reviews/bulk-delete' => [[['_route' => 'sylius_admin_product_review_bulk_delete', '_controller' => 'sylius.controller.product_review:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_reviews_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductReview/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/product-taxons/update' => [[['_route' => 'sylius_admin_product_taxons_update_position', '_controller' => 'sylius.controller.product_taxon:updateProductTaxonsPositionsAction'], null, ['PUT' => 0], null, false, false, null]],
        '/admin/promotions' => [[['_route' => 'sylius_admin_promotion_index', '_controller' => 'sylius.controller.promotion:indexAction', '_sylius' => ['grid' => 'sylius_admin_promotion', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => ['form' => '@SyliusAdmin/Promotion/_form.html.twig'], 'icon' => 'in cart']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/promotions/new' => [[['_route' => 'sylius_admin_promotion_create', '_controller' => 'sylius.controller.promotion:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_promotion_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => ['form' => '@SyliusAdmin/Promotion/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/promotions/bulk-delete' => [[['_route' => 'sylius_admin_promotion_bulk_delete', '_controller' => 'sylius.controller.promotion:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => ['form' => '@SyliusAdmin/Promotion/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/login' => [[['_route' => 'sylius_admin_login', '_controller' => 'sylius.controller.security:loginAction', '_sylius' => ['template' => '@SyliusAdmin/Security/login.html.twig', 'permission' => true, 'logged_in_route' => 'sylius_admin_dashboard']], null, ['GET' => 0], null, false, false, null]],
        '/admin/login-check' => [[['_route' => 'sylius_admin_login_check', '_controller' => 'sylius.controller.security:checkAction'], null, ['POST' => 0], null, false, false, null]],
        '/admin/logout' => [[['_route' => 'sylius_admin_logout'], null, ['GET' => 0], null, false, false, null]],
        '/admin/shipments' => [[['_route' => 'sylius_admin_shipment_index', '_controller' => 'sylius.controller.shipment:indexAction', '_sylius' => ['grid' => 'sylius_admin_shipment', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipments', 'icon' => 'truck']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/shipping-categories' => [[['_route' => 'sylius_admin_shipping_category_index', '_controller' => 'sylius.controller.shipping_category:indexAction', '_sylius' => ['grid' => 'sylius_admin_shipping_category', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingCategory/_form.html.twig'], 'icon' => 'list layout']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/shipping-categories/new' => [[['_route' => 'sylius_admin_shipping_category_create', '_controller' => 'sylius.controller.shipping_category:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_shipping_category_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingCategory/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/shipping-categories/bulk-delete' => [[['_route' => 'sylius_admin_shipping_category_bulk_delete', '_controller' => 'sylius.controller.shipping_category:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingCategory/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/shipping-methods' => [[['_route' => 'sylius_admin_shipping_method_index', '_controller' => 'sylius.controller.shipping_method:indexAction', '_sylius' => ['grid' => 'sylius_admin_shipping_method', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingMethod/_form.html.twig'], 'icon' => 'shipping']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/shipping-methods/new' => [[['_route' => 'sylius_admin_shipping_method_create', '_controller' => 'sylius.controller.shipping_method:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_shipping_method_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingMethod/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/shipping-methods/bulk-delete' => [[['_route' => 'sylius_admin_shipping_method_bulk_delete', '_controller' => 'sylius.controller.shipping_method:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingMethod/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/taxons/new' => [[['_route' => 'sylius_admin_taxon_create', '_controller' => 'sylius.controller.taxon:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Taxon/create.html.twig', 'redirect' => 'sylius_admin_taxon_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => ['form' => '@SyliusAdmin/Taxon/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/taxons/bulk-delete' => [[['_route' => 'sylius_admin_taxon_bulk_delete', '_controller' => 'sylius.controller.taxon:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => ['form' => '@SyliusAdmin/Taxon/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/taxons' => [[['_route' => 'sylius_admin_taxon_index', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController:redirectAction', 'route' => 'sylius_admin_taxon_create', 'permanent' => true], null, ['GET' => 0], null, true, false, null]],
        '/admin/tax-categories' => [[['_route' => 'sylius_admin_tax_category_index', '_controller' => 'sylius.controller.tax_category:indexAction', '_sylius' => ['grid' => 'sylius_admin_tax_category', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxCategory/_form.html.twig'], 'icon' => 'tags']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/tax-categories/new' => [[['_route' => 'sylius_admin_tax_category_create', '_controller' => 'sylius.controller.tax_category:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_tax_category_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxCategory/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/tax-categories/bulk-delete' => [[['_route' => 'sylius_admin_tax_category_bulk_delete', '_controller' => 'sylius.controller.tax_category:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxCategory/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/tax-rates' => [[['_route' => 'sylius_admin_tax_rate_index', '_controller' => 'sylius.controller.tax_rate:indexAction', '_sylius' => ['grid' => 'sylius_admin_tax_rate', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxRate/_form.html.twig'], 'icon' => 'money']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/tax-rates/new' => [[['_route' => 'sylius_admin_tax_rate_create', '_controller' => 'sylius.controller.tax_rate:createAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/create.html.twig', 'redirect' => 'sylius_admin_tax_rate_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxRate/_form.html.twig']]]], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/tax-rates/bulk-delete' => [[['_route' => 'sylius_admin_tax_rate_bulk_delete', '_controller' => 'sylius.controller.tax_rate:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxRate/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/zones' => [[['_route' => 'sylius_admin_zone_index', '_controller' => 'sylius.controller.zone:indexAction', '_sylius' => ['grid' => 'sylius_admin_zone', 'section' => 'admin', 'template' => '@SyliusAdmin\\Crud/index.html.twig', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => ['form' => '@SyliusAdmin/Zone/_form.html.twig'], 'icon' => 'world']]], null, ['GET' => 0], null, true, false, null]],
        '/admin/zones/bulk-delete' => [[['_route' => 'sylius_admin_zone_bulk_delete', '_controller' => 'sylius.controller.zone:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => ['form' => '@SyliusAdmin/Zone/_form.html.twig']], 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], null, ['DELETE' => 0], null, false, false, null]],
        '/api/v2/shop/addresses' => [
            [['_route' => 'api_addresses_shop_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Address', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'shop_get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_addresses_shop_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Address', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'shop_post'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/admin/channels' => [
            [['_route' => 'api_channels_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Channel\\Channel', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_channels_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Channel\\Channel', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_post'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/admin/countries' => [
            [['_route' => 'api_countries_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Country', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_countries_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Country', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_post'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/shop/countries' => [[['_route' => 'api_countries_shop_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Country', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'shop_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/currencies' => [
            [['_route' => 'api_currencies_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\Currency', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_currencies_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\Currency', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_post'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/shop/customers' => [[['_route' => 'api_customers_shop_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\Customer', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'shop_post'], null, ['POST' => 0], null, false, false, null]],
        '/api/v2/admin/locales' => [
            [['_route' => 'api_locales_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Locale\\Locale', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_locales_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Locale\\Locale', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_post'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/shop/locales' => [[['_route' => 'api_locales_shop_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Locale\\Locale', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'shop_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/orders' => [[['_route' => 'api_orders_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/shop/orders' => [
            [['_route' => 'api_orders_shop_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'shop_post'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_orders_shop_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'shop_get'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/v2/admin/payments' => [[['_route' => 'api_payments_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\Payment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/products' => [
            [['_route' => 'api_products_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_products_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_post'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/shop/products' => [[['_route' => 'api_products_shop_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'shop_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/product-images' => [[['_route' => 'api_product_images_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductImage', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/product-options' => [
            [['_route' => 'api_product_options_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOption', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_product_options_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOption', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_post'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/admin/product-reviews' => [[['_route' => 'api_product_reviews_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/shop/product-reviews' => [
            [['_route' => 'api_product_reviews_shop_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'shop_post'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_product_reviews_shop_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'shop_get'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/v2/admin/product-taxons' => [[['_route' => 'api_product_taxa_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductTaxon', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/product-variants' => [[['_route' => 'api_product_variants_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductVariant', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/shop/product-variants' => [[['_route' => 'api_product_variants_shop_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductVariant', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'shop_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/shop/reset-password-requests' => [[['_route' => 'api_reset_password_requests_shop_create_reset_password_request_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Bundle\\ApiBundle\\Command\\ResetPassword', '_api_identifiers' => ['resetPasswordToken'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'shop_create_reset_password_request'], null, ['POST' => 0], null, false, false, null]],
        '/api/v2/admin/shipments' => [[['_route' => 'api_shipments_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\Shipment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/shipping-methods' => [
            [['_route' => 'api_shipping_methods_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_shipping_methods_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_post'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/admin/taxons' => [
            [['_route' => 'api_taxa_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\Taxon', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_taxa_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\Taxon', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_post'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v2/shop/taxons' => [[['_route' => 'api_taxa_shop_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\Taxon', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'shop_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/admin/taxon-translations' => [[['_route' => 'api_taxon_translations_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\TaxonTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_get'], null, ['GET' => 0], null, false, false, null]],
        '/api/v2/shop/account-verification-requests' => [[['_route' => 'api_verify_customer_accounts_shop_resend_verification_email_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Bundle\\ApiBundle\\Command\\VerifyCustomerAccount', '_api_identifiers' => ['token'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'shop_resend_verification_email'], null, ['POST' => 0], null, false, false, null]],
        '/api/v2/admin/authentication-token' => [[['_route' => 'sylius_api_admin_authentication_token'], null, ['POST' => 0], null, false, false, null]],
        '/api/v2/shop/authentication-token' => [[['_route' => 'sylius_api_shop_authentication_token'], null, ['POST' => 0], null, false, false, null]],
        '/payment/capture/session-token' => [[['_route' => 'payum_capture_do_session', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doSessionTokenAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'sylius_shop_default_locale', '_controller' => 'sylius.controller.shop.locale_switch:switchAction'], null, ['GET' => 0], null, false, false, null]],
        '/.well-known/change-password' => [[['_route' => 'sylius_shop_request_password_reset_token_redirect', 'route' => 'sylius_shop_request_password_reset_token', 'permanent' => false, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction'], null, ['GET' => 0], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/paypal-webhook/api' => [[['_route' => 'sylius_paypal_plugin_webhook_refund_order', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\Webhook\\RefundOrderAction'], null, ['POST' => 0], null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:61)'
                    .'|([A-z0-9_-]*)/(.+)(*:86)'
                .')'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|_partial/(?'
                            .'|address/log\\-entry/([^/]++)(*:146)'
                            .'|customers/(?'
                                .'|latest/([^/]++)(*:182)'
                                .'|([^/]++)(*:198)'
                            .')'
                            .'|orders/(?'
                                .'|latest/([^/]++)(?'
                                    .'|(*:235)'
                                    .'|/([^/]++)(*:252)'
                                .')'
                                .'|([^/]++)/shipments/([^/]++)/ship(*:293)'
                            .')'
                            .'|pro(?'
                                .'|ducts/([^/]++)(*:322)'
                                .'|motions/([^/]++)(*:346)'
                            .')'
                            .'|taxons/([^/]++)(*:370)'
                        .')'
                        .'|ajax/taxons/([^/]++)/move(*:404)'
                        .'|impersonate(?:/([^/]++))?(*:437)'
                        .'|users/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:470)'
                                .'|remove\\-avatar(*:492)'
                            .')'
                            .'|(*:501)'
                        .')'
                        .'|c(?'
                            .'|hannels/([^/]++)(?'
                                .'|/edit(*:538)'
                                .'|(*:546)'
                            .')'
                            .'|ountries/([^/]++)/edit(*:577)'
                            .'|u(?'
                                .'|rrencies/([^/]++)/edit(*:611)'
                                .'|stomer(?'
                                    .'|s/([^/]++)(?'
                                        .'|/(?'
                                            .'|edit(*:649)'
                                            .'|orders(*:663)'
                                        .')'
                                        .'|(*:672)'
                                    .')'
                                    .'|\\-groups/([^/]++)(?'
                                        .'|/edit(*:706)'
                                        .'|(*:714)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|exchange\\-rates/([^/]++)(?'
                            .'|/edit(*:758)'
                            .'|(*:766)'
                        .')'
                        .'|locales/([^/]++)/edit(*:796)'
                        .'|orders/([^/]++)(?'
                            .'|(*:822)'
                            .'|/(?'
                                .'|history(*:841)'
                                .'|edit(*:853)'
                                .'|cancel(*:867)'
                                .'|payments/([^/]++)/(?'
                                    .'|complete(*:904)'
                                    .'|refund(*:918)'
                                .')'
                            .')'
                        .')'
                        .'|([^/]++)/(?'
                            .'|ship(*:945)'
                            .'|resend\\-confirmation\\-email(*:980)'
                        .')'
                        .'|p(?'
                            .'|ayment(?'
                                .'|s/([^/]++)/complete(*:1021)'
                                .'|\\-methods/(?'
                                    .'|([^/]++)(?'
                                        .'|/edit(*:1059)'
                                        .'|(*:1068)'
                                    .')'
                                    .'|new/([^/]++)(*:1090)'
                                .')'
                            .')'
                            .'|ro(?'
                                .'|duct(?'
                                    .'|s/(?'
                                        .'|([^/]++)(?'
                                            .'|(*:1129)'
                                            .'|/edit(*:1143)'
                                        .')'
                                        .'|taxon/([^/]++)(*:1167)'
                                        .'|new(*:1179)'
                                        .'|([^/]++)(?'
                                            .'|(*:1199)'
                                            .'|/variants(?'
                                                .'|(*:1220)'
                                                .'|/(?'
                                                    .'|new(*:1236)'
                                                    .'|([^/]++)/edit(*:1258)'
                                                    .'|bulk\\-delete(*:1279)'
                                                    .'|([^/]++)(*:1296)'
                                                    .'|generate(*:1313)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|\\-(?'
                                        .'|a(?'
                                            .'|ssociation\\-types/([^/]++)(?'
                                                .'|/edit(*:1369)'
                                                .'|(*:1378)'
                                            .')'
                                            .'|ttributes/([^/]++)(?'
                                                .'|/(?'
                                                    .'|edit(*:1417)'
                                                    .'|new(*:1429)'
                                                .')'
                                                .'|(*:1439)'
                                            .')'
                                        .')'
                                        .'|options/([^/]++)(?'
                                            .'|/edit(*:1474)'
                                            .'|(*:1483)'
                                        .')'
                                        .'|review(?'
                                            .'|s/([^/]++)(?'
                                                .'|/edit(*:1520)'
                                                .'|(*:1529)'
                                            .')'
                                            .'|/([^/]++)/(?'
                                                .'|accept(*:1558)'
                                                .'|reject(*:1573)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|motions/([^/]++)(?'
                                    .'|/(?'
                                        .'|edit(*:1613)'
                                        .'|coupons(?'
                                            .'|(*:1632)'
                                            .'|/(?'
                                                .'|new(*:1648)'
                                                .'|([^/]++)/edit(*:1670)'
                                                .'|generate(*:1687)'
                                                .'|bulk\\-delete(*:1708)'
                                                .'|([^/]++)(*:1725)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|(*:1737)'
                                .')'
                            .')'
                        .')'
                        .'|sh(?'
                            .'|ip(?'
                                .'|ments/([^/]++)(?'
                                    .'|/(?'
                                        .'|ship(*:1784)'
                                        .'|resend\\-confirmation\\-email(*:1820)'
                                    .')'
                                    .'|(*:1830)'
                                .')'
                                .'|ping\\-(?'
                                    .'|categories/([^/]++)(?'
                                        .'|/edit(*:1876)'
                                        .'|(*:1885)'
                                    .')'
                                    .'|methods/([^/]++)(?'
                                        .'|/(?'
                                            .'|edit(*:1922)'
                                            .'|archive(*:1938)'
                                        .')'
                                        .'|(*:1948)'
                                    .')'
                                .')'
                            .')'
                            .'|op\\-user/([^/]++)(*:1977)'
                        .')'
                        .'|tax(?'
                            .'|ons/(?'
                                .'|([^/]++)(?'
                                    .'|/edit(*:2016)'
                                    .'|(*:2025)'
                                .')'
                                .'|new/([^/]++)(*:2047)'
                            .')'
                            .'|\\-(?'
                                .'|categories/([^/]++)(?'
                                    .'|/edit(*:2089)'
                                    .'|(*:2098)'
                                .')'
                                .'|rates/([^/]++)(?'
                                    .'|/edit(*:2130)'
                                    .'|(*:2139)'
                                .')'
                            .')'
                        .')'
                        .'|zones/(?'
                            .'|([^/]++)(?'
                                .'|/edit(*:2176)'
                                .'|(*:2185)'
                            .')'
                            .'|(country|province|zone)/new(*:2222)'
                        .')'
                        .'|download/payouts\\-report/([^/]++)(*:2265)'
                        .'|enable\\-seller/([^/]++)(*:2297)'
                    .')'
                    .'|pi/v2(?'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:2343)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:2375)'
                            .'|contexts/(.+)(?:\\.([^/]++))?(*:2412)'
                            .'|admin/(?'
                                .'|a(?'
                                    .'|d(?'
                                        .'|dresses/([^/]++)(*:2454)'
                                        .'|justments/([^/]++)(*:2481)'
                                        .'|ministrators(?'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:2523)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:2562)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|vatar\\-images(?'
                                        .'|(?:\\.([^/]++))?(*:2605)'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:2643)'
                                        .')'
                                    .')'
                                .')'
                                .'|c(?'
                                    .'|hannels/([^/]++)(?'
                                        .'|(*:2678)'
                                        .'|/shop\\-billing\\-data(*:2707)'
                                    .')'
                                    .'|ountries/([^/]++)(?'
                                        .'|(*:2737)'
                                        .'|/provinces(*:2756)'
                                    .')'
                                    .'|u(?'
                                        .'|rrencies/([^/]++)(*:2787)'
                                        .'|stomer(?'
                                            .'|s/([^/]++)(*:2815)'
                                            .'|\\-groups(?'
                                                .'|(?:\\.([^/]++))?(?'
                                                    .'|(*:2853)'
                                                .')'
                                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                    .'|(*:2892)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|exchange\\-rates(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:2942)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:2981)'
                                    .')'
                                .')'
                                .'|locales/([^/]++)(*:3008)'
                                .'|order(?'
                                    .'|s/([^/]++)(?'
                                        .'|(*:3038)'
                                        .'|/(?'
                                            .'|cancel(*:3057)'
                                            .'|payments(*:3074)'
                                            .'|shipments(*:3092)'
                                        .')'
                                    .')'
                                    .'|\\-item(?'
                                        .'|s/([^/]++)(?'
                                            .'|(*:3125)'
                                            .'|/adjustments(*:3146)'
                                        .')'
                                        .'|\\-units/([^/]++)(*:3172)'
                                    .')'
                                .')'
                                .'|p(?'
                                    .'|ayment(?'
                                        .'|s/([^/]++)(?'
                                            .'|(*:3209)'
                                            .'|/complete(*:3227)'
                                        .')'
                                        .'|\\-methods/([^/]++)(*:3255)'
                                    .')'
                                    .'|ro(?'
                                        .'|duct(?'
                                            .'|s/([^/]++)(?'
                                                .'|(*:3290)'
                                            .')'
                                            .'|\\-(?'
                                                .'|association\\-type(?'
                                                    .'|s(?'
                                                        .'|(?:\\.([^/]++))?(?'
                                                            .'|(*:3347)'
                                                        .')'
                                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                            .'|(*:3386)'
                                                        .')'
                                                    .')'
                                                    .'|\\-translations/([^/\\.]++)(?:\\.([^/]++))?(*:3437)'
                                                .')'
                                                .'|images/([^/]++)(*:3462)'
                                                .'|option(?'
                                                    .'|s/([^/]++)(?'
                                                        .'|(*:3493)'
                                                        .'|/values(*:3509)'
                                                    .')'
                                                    .'|\\-(?'
                                                        .'|translations/([^/\\.]++)(?:\\.([^/]++))?(*:3562)'
                                                        .'|values/([^/]++)(*:3586)'
                                                    .')'
                                                .')'
                                                .'|reviews/([^/]++)(?'
                                                    .'|(*:3616)'
                                                    .'|/(?'
                                                        .'|accept(*:3635)'
                                                        .'|reject(*:3650)'
                                                    .')'
                                                .')'
                                                .'|t(?'
                                                    .'|axons/([^/]++)(*:3679)'
                                                    .'|ranslations/([^/]++)(*:3708)'
                                                .')'
                                                .'|variant(?'
                                                    .'|s/([^/]++)(*:3738)'
                                                    .'|\\-translation/([^/]++)(*:3769)'
                                                .')'
                                            .')'
                                        .')'
                                        .'|motions(?'
                                            .'|(?:\\.([^/]++))?(*:3806)'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:3844)'
                                            .')'
                                        .')'
                                        .'|vinces/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:3890)'
                                        .')'
                                    .')'
                                .')'
                                .'|sh(?'
                                    .'|ip(?'
                                        .'|ments/([^/]++)(?'
                                            .'|(*:3929)'
                                            .'|/ship(*:3943)'
                                        .')'
                                        .'|ping\\-(?'
                                            .'|categories(?'
                                                .'|(?:\\.([^/]++))?(?'
                                                    .'|(*:3993)'
                                                .')'
                                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                    .'|(*:4032)'
                                                .')'
                                            .')'
                                            .'|method(?'
                                                .'|s/([^/]++)(?'
                                                    .'|(*:4065)'
                                                    .'|/(?'
                                                        .'|archive(*:4085)'
                                                        .'|restore(*:4101)'
                                                    .')'
                                                .')'
                                                .'|\\-translations/([^/]++)(*:4135)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|op\\-billing\\-datas/([^/\\.]++)(?:\\.([^/]++))?(*:4191)'
                                .')'
                                .'|tax(?'
                                    .'|\\-categories(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:4240)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:4279)'
                                        .')'
                                    .')'
                                    .'|on(?'
                                        .'|s/([^/]++)(?'
                                            .'|(*:4308)'
                                        .')'
                                        .'|\\-translations/([^/]++)(*:4341)'
                                    .')'
                                .')'
                                .'|zone(?'
                                    .'|s(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:4381)'
                                        .')'
                                        .'|/(?'
                                            .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:4423)'
                                            .')'
                                            .'|([^/]++)/members(?:\\.([^/]++))?(*:4464)'
                                        .')'
                                    .')'
                                    .'|\\-members/([^/\\.]++)(?:\\.([^/]++))?(*:4510)'
                                .')'
                            .')'
                            .'|shop/(?'
                                .'|a(?'
                                    .'|d(?'
                                        .'|dresses/([^/]++)(?'
                                            .'|(*:4556)'
                                        .')'
                                        .'|justments/([^/]++)(*:4584)'
                                    .')'
                                    .'|ccount(?'
                                        .'|/orders/([^/]++)/payments/([^/]++)(*:4637)'
                                        .'|\\-verification\\-requests/([^/]++)(*:4679)'
                                    .')'
                                .')'
                                .'|c(?'
                                    .'|hannels/([^/]++)(*:4710)'
                                    .'|ountries/([^/]++)(*:4736)'
                                    .'|u(?'
                                        .'|rrencies/([^/]++)(*:4766)'
                                        .'|stomers/([^/]++)(?'
                                            .'|(*:4794)'
                                            .'|/password(*:4812)'
                                            .'|(*:4821)'
                                        .')'
                                    .')'
                                .')'
                                .'|locales/([^/]++)(*:4849)'
                                .'|order(?'
                                    .'|s/([^/]++)(?'
                                        .'|(*:4879)'
                                        .'|/(?'
                                            .'|items(?'
                                                .'|(*:4900)'
                                                .'|/([^/]++)(?'
                                                    .'|(*:4921)'
                                                    .'|(*:4930)'
                                                    .'|/adjustments(*:4951)'
                                                .')'
                                                .'|(*:4961)'
                                            .')'
                                            .'|a(?'
                                                .'|d(?'
                                                    .'|dress(*:4984)'
                                                    .'|justments(*:5002)'
                                                .')'
                                                .'|pply\\-coupon(*:5024)'
                                            .')'
                                            .'|shipments/([^/]++)(?'
                                                .'|(*:5055)'
                                                .'|/methods(*:5072)'
                                            .')'
                                            .'|payments/([^/]++)(?'
                                                .'|(*:5102)'
                                                .'|/(?'
                                                    .'|configuration(*:5128)'
                                                    .'|methods(*:5144)'
                                                .')'
                                            .')'
                                            .'|complete(*:5163)'
                                        .')'
                                        .'|(*:5173)'
                                    .')'
                                    .'|\\-item(?'
                                        .'|s/([^/]++)(*:5202)'
                                        .'|\\-units/([^/]++)(*:5227)'
                                    .')'
                                .')'
                                .'|p(?'
                                    .'|ayment(?'
                                        .'|s/([^/]++)(?'
                                            .'|(*:5264)'
                                            .'|/methods(*:5281)'
                                        .')'
                                        .'|\\-methods/([^/]++)(*:5309)'
                                    .')'
                                    .'|roduct(?'
                                        .'|s/([^/]++)(*:5338)'
                                        .'|\\-(?'
                                            .'|images/([^/]++)(*:5367)'
                                            .'|option(?'
                                                .'|s/([^/]++)(*:5395)'
                                                .'|\\-values/([^/]++)(*:5421)'
                                            .')'
                                            .'|reviews/([^/]++)(*:5447)'
                                            .'|t(?'
                                                .'|axons/([^/]++)(*:5474)'
                                                .'|ranslations/([^/]++)(*:5503)'
                                            .')'
                                            .'|variant(?'
                                                .'|s/([^/]++)(*:5533)'
                                                .'|\\-translation/([^/]++)(*:5564)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|reset\\-password\\-requests/([^/]++)(*:5611)'
                                .'|ship(?'
                                    .'|ments/([^/]++)(?'
                                        .'|(*:5644)'
                                        .'|/methods(*:5661)'
                                    .')'
                                    .'|ping\\-method(?'
                                        .'|s/([^/]++)(*:5696)'
                                        .'|\\-translations/([^/]++)(*:5728)'
                                    .')'
                                .')'
                                .'|taxon(?'
                                    .'|s/([^/]++)(*:5757)'
                                    .'|\\-translations/([^/]++)(*:5789)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/ajax/users/check(*:5896)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/ajax/cart/add(*:5995)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/ajax/cart/([^/]++)/remove(*:6106)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/ajax/render\\-province\\-form(*:6219)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/_partial/taxons/by\\-slug/(.+)(*:6334)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/_partial/taxons/by\\-code/([^/]++)(*:6453)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/_partial/taxons/by\\-channel\\-menu\\-taxon(*:6579)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/_partial/cart/summary(*:6686)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/_partial/cart/add\\-item(*:6795)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/_partial/products/latest/([^/]++)(*:6914)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/_partial/products/([^/]++)(*:7026)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/_partial/products/([^/]++)/reviews/latest(?:/([^/]++))?(*:7167)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/_partial/products/([^/]++)/associations/([^/]++)(*:7301)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)(*:7386)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/login(*:7477)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/login\\-check(*:7575)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/logout(*:7667)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/register(*:7761)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/register\\-after\\-checkout/([^/]++)(*:7881)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/forgotten\\-password(*:7986)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/forgotten\\-password/([^/]++)(*:8100)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/verify(*:8192)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/verify/([^/]++)(*:8293)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/products/([^/]++)(*:8396)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/taxons/(.+)(*:8493)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/products/([^/]++)/reviews(*:8604)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/products/([^/]++)/reviews/new(*:8719)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/cart(?'
                    .'|(*:8812)'
                .')'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/cart/([^/]++)/remove(*:8919)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/checkout(*:9013)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/checkout/address(*:9115)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/checkout/select\\-shipping(*:9226)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/checkout/complete(*:9329)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/contact(*:9422)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/order/thank\\-you(*:9524)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/order/([^/]++)/pay(*:9628)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/order/after\\-pay(*:9730)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/account/orders(*:9830)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/account/orders/([^/]++)(*:9939)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/account/address\\-book(*:10046)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/account/address\\-book/add(*:10158)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/account/address\\-book/([^/]++)/edit(*:10280)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/account/address\\-book/([^/]++)(*:10397)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/account/address\\-book/([^/]++)/set\\-as\\-default(*:10531)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/account(*:10625)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/account/dashboard(*:10729)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/account/profile/edit(*:10836)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/account/change\\-password(*:10947)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/switch\\-currency/([^/]++)(*:11059)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/switch\\-locale/([^/]++)(*:11169)'
                .'|/payment/(?'
                    .'|authorize/([^/]++)(*:11209)'
                    .'|capture/([^/]++)(*:11235)'
                    .'|notify/(?'
                        .'|unsafe/([^/]++)(*:11270)'
                        .'|([^/]++)(*:11288)'
                    .')'
                .')'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/pay\\-with\\-paypal/([^/]++)/([^/]++)(*:11412)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/create\\-pay\\-pal\\-order/([^/]++)(*:11531)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/create\\-pay\\-pal\\-order\\-from\\-cart/([^/]++)(*:11662)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/complete\\-pay\\-pal\\-order/([^/]++)(*:11783)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/complete\\-pay\\-pal\\-payment/([^/]++)(*:11906)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/process\\-pay\\-pal\\-order(*:12017)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/update\\-pay\\-pal\\-order(*:12127)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/pay\\-pal\\-order\\-payment\\-page/([^/]++)/create(*:12260)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/pay\\-pal\\-order\\-payment\\-page/([^/]++)/complete(*:12395)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/create\\-pay\\-pal\\-order\\-from\\-product/([^/]++)(*:12529)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/checkout/select\\-payment(*:12640)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/order/([^/]++)(*:12741)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/cancel\\-pay\\-pal\\-order(*:12851)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/cancel\\-pay\\-pal\\-payment(*:12963)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/order/([^/]++)/cancel\\-last\\-pay\\-pal\\-payment(*:13096)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/cancel\\-pay\\-pal\\-checkout\\-payment(*:13218)'
                .'|/([A-Za-z]{2,4}(?:_(?:[A-Za-z]{4}|[0-9]{3}))?(?:_(?:[A-Za-z]{2}|[0-9]{3}))?)/pay\\-pal\\-payment\\-error(*:13329)'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:13356)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:13404)'
                            .'|router(*:13420)'
                            .'|exception(?'
                                .'|(*:13442)'
                                .'|\\.css(*:13457)'
                            .')'
                        .')'
                        .'|(*:13469)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        61 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        86 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        146 => [[['_route' => 'sylius_admin_partial_address_log_entry_index', '_controller' => 'sylius.controller.address_log_entry:indexAction', '_sylius' => ['template' => '@SyliusUi/Grid/_history.html.twig', 'grid' => 'sylius_admin_address_log_entry', 'section' => 'admin', 'permission' => true]], ['id'], ['GET' => 0], null, false, true, null]],
        182 => [[['_route' => 'sylius_admin_partial_customer_latest', '_controller' => 'sylius.controller.customer:indexAction', '_sylius' => ['repository' => ['method' => 'findLatest', 'arguments' => ['!!int $count']], 'template' => '$template', 'permission' => true]], ['count'], ['GET' => 0], null, false, true, null]],
        198 => [[['_route' => 'sylius_admin_partial_customer_show', '_controller' => 'sylius.controller.customer:showAction', '_sylius' => ['template' => '$template', 'vars' => '$vars', 'permission' => true]], ['id'], ['GET' => 0], null, false, true, null]],
        235 => [[['_route' => 'sylius_admin_partial_order_latest', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => ['repository' => ['method' => 'findLatest', 'arguments' => ['!!int $count']], 'template' => '$template', 'permission' => true]], ['count'], ['GET' => 0], null, false, true, null]],
        252 => [[['_route' => 'sylius_admin_partial_order_latest_in_channel', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => ['repository' => ['method' => 'findLatestInChannel', 'arguments' => ['count' => '!!int $count', 'channel' => 'expr:notFoundOnNull(service(\'sylius.repository.channel\').findOneByCode($channelCode))']], 'template' => '$template', 'permission' => true]], ['channelCode', 'count'], ['GET' => 0], null, false, true, null]],
        293 => [[['_route' => 'sylius_admin_partial_shipment_ship', '_controller' => 'sylius.controller.shipment:updateAction', '_sylius' => ['event' => 'ship', 'repository' => ['method' => 'findOneByOrderId', 'arguments' => ['id' => '$id', 'orderId' => '$orderId']], 'state_machine' => ['graph' => 'sylius_shipment', 'transition' => 'ship'], 'section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Shipment/Partial/_ship.html.twig', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentShipType', 'vars' => ['route' => ['parameters' => ['orderId' => '$orderId', 'id' => '$id']]]]], ['orderId', 'id'], ['GET' => 0], null, false, false, null]],
        322 => [[['_route' => 'sylius_admin_partial_product_show', '_controller' => 'sylius.controller.product:showAction', '_sylius' => ['template' => '$template', 'vars' => '$vars', 'permission' => true]], ['id'], ['GET' => 0], null, false, true, null]],
        346 => [[['_route' => 'sylius_admin_partial_promotion_show', '_controller' => 'sylius.controller.promotion:showAction', '_sylius' => ['template' => '$template', 'vars' => '$vars', 'permission' => true]], ['id'], ['GET' => 0], null, false, true, null]],
        370 => [[['_route' => 'sylius_admin_partial_taxon_show', '_controller' => 'sylius.controller.taxon:showAction', '_sylius' => ['template' => '$template', 'vars' => '$vars', 'permission' => true]], ['id'], ['GET' => 0], null, false, true, null]],
        404 => [[['_route' => 'sylius_admin_ajax_taxon_move', '_controller' => 'sylius.controller.taxon:updateAction', '_format' => 'json', '_sylius' => ['permission' => true, 'form' => 'Sylius\\Bundle\\TaxonomyBundle\\Form\\Type\\TaxonPositionType']], ['id'], ['PUT' => 0], null, false, false, null]],
        437 => [[['_route' => 'sylius_admin_impersonate_user', '_controller' => 'sylius.controller.impersonate_user:impersonateAction', 'username' => '$username'], ['username'], null, null, false, true, null]],
        470 => [[['_route' => 'sylius_admin_admin_user_update', '_controller' => 'sylius.controller.admin_user:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_admin_user_index', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => ['form' => '@SyliusAdmin/AdminUser/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        492 => [[['_route' => 'sylius_admin_admin_user_remove_avatar', '_controller' => 'Sylius\\Bundle\\AdminBundle\\Action\\RemoveAvatarAction'], ['id'], ['PUT' => 0], null, false, false, null]],
        501 => [[['_route' => 'sylius_admin_admin_user_delete', '_controller' => 'sylius.controller.admin_user:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_users_able_to_access_administration_panel', 'templates' => ['form' => '@SyliusAdmin/AdminUser/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        538 => [[['_route' => 'sylius_admin_channel_update', '_controller' => 'sylius.controller.channel:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_channel_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => ['form' => '@SyliusAdmin/Channel/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        546 => [[['_route' => 'sylius_admin_channel_delete', '_controller' => 'sylius.controller.channel:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.configure_channels_available_in_your_store', 'templates' => ['form' => '@SyliusAdmin/Channel/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        577 => [[['_route' => 'sylius_admin_country_update', '_controller' => 'sylius.controller.country:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_country_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_destinations', 'templates' => ['form' => '@SyliusAdmin/Country/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        611 => [[['_route' => 'sylius_admin_currency_update', '_controller' => 'sylius.controller.currency:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_currency_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_currencies_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Currency/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        649 => [[['_route' => 'sylius_admin_customer_update', '_controller' => 'sylius.controller.customer:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_customer_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_your_customers', 'templates' => ['form' => '@SyliusAdmin/Customer/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        663 => [[['_route' => 'sylius_admin_customer_order_index', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Crud/index.html.twig', 'grid' => 'sylius_admin_customer_order', 'vars' => ['route' => ['parameters' => ['$customerId' => '$id']], 'templates' => ['breadcrumb' => '@SyliusAdmin/Customer/Order/Index/_breadcrumb.html.twig', 'header_title' => '@SyliusAdmin/Customer/Order/Index/_headerTitle.html.twig'], 'subheader' => 'sylius.ui.process_your_orders', 'icon' => 'cart']]], ['id'], ['GET' => 0], null, false, false, null]],
        672 => [[['_route' => 'sylius_admin_customer_show', '_controller' => 'sylius.controller.customer:showAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin/Customer/show.html.twig', 'permission' => true]], ['id'], null, null, false, true, null]],
        706 => [[['_route' => 'sylius_admin_customer_group_update', '_controller' => 'sylius.controller.customer_group:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_customer_group_update', 'permission' => true, 'vars' => ['header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => ['form' => '@SyliusAdmin/CustomerGroup/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        714 => [[['_route' => 'sylius_admin_customer_group_delete', '_controller' => 'sylius.controller.customer_group:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['header' => 'sylius.ui.customer_groups', 'subheader' => 'sylius.ui.manage_customer_groups', 'templates' => ['form' => '@SyliusAdmin/CustomerGroup/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        758 => [[['_route' => 'sylius_admin_exchange_rate_update', '_controller' => 'sylius.controller.exchange_rate:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_exchange_rate_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => ['form' => '@SyliusAdmin/ExchangeRate/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        766 => [[['_route' => 'sylius_admin_exchange_rate_delete', '_controller' => 'sylius.controller.exchange_rate:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_exchange_rates', 'templates' => ['form' => '@SyliusAdmin/ExchangeRate/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        796 => [[['_route' => 'sylius_admin_locale_update', '_controller' => 'sylius.controller.locale:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_locale_index', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_languages_available_in_the_store', 'templates' => ['form' => '@SyliusAdmin/Locale/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        822 => [[['_route' => 'sylius_admin_order_show', '_controller' => 'sylius.controller.order:showAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Order/show.html.twig']], ['id'], ['GET' => 0], null, false, true, null]],
        841 => [[['_route' => 'sylius_admin_order_history', '_controller' => 'sylius.controller.order:showAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Order/history.html.twig']], ['id'], ['GET' => 0], null, false, false, null]],
        853 => [[['_route' => 'sylius_admin_order_update', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Order/update.html.twig', 'form' => ['options' => ['validation_groups' => ['sylius_shipping_address_update']]]]], ['id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        867 => [[['_route' => 'sylius_admin_order_cancel', '_controller' => 'sylius.controller.order:applyStateMachineTransitionAction', '_sylius' => ['permission' => true, 'state_machine' => ['graph' => 'sylius_order', 'transition' => 'cancel'], 'redirect' => 'referer']], ['id'], ['PUT' => 0], null, false, false, null]],
        904 => [[['_route' => 'sylius_admin_order_payment_complete', '_controller' => 'sylius.controller.payment:applyStateMachineTransitionAction', '_sylius' => ['event' => 'complete', 'permission' => true, 'repository' => ['method' => 'findOneByOrderId', 'arguments' => ['id' => '$id', 'orderId' => '$orderId']], 'state_machine' => ['graph' => 'sylius_payment', 'transition' => 'complete'], 'redirect' => 'referer']], ['orderId', 'id'], ['PUT' => 0], null, false, false, null]],
        918 => [[['_route' => 'sylius_admin_order_payment_refund', '_controller' => 'sylius.controller.payment:applyStateMachineTransitionAction', '_sylius' => ['permission' => true, 'repository' => ['method' => 'findOneByOrderId', 'arguments' => ['id' => '$id', 'orderId' => '$orderId']], 'state_machine' => ['graph' => 'sylius_payment', 'transition' => 'refund'], 'redirect' => 'referer', 'flash' => 'sylius.payment.refunded']], ['orderId', 'id'], ['PUT' => 0], null, false, false, null]],
        945 => [[['_route' => 'sylius_admin_order_shipment_ship', '_controller' => 'sylius.controller.shipment:updateAction', '_sylius' => ['event' => 'ship', 'repository' => ['method' => 'findOneByOrderId', 'arguments' => ['id' => '$id', 'orderId' => '$orderId']], 'state_machine' => ['graph' => 'sylius_shipment', 'transition' => 'ship'], 'redirect' => 'referer', 'section' => 'admin', 'permission' => true, 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentShipType', 'vars' => ['route' => ['parameters' => ['orderId' => '$orderId', 'id' => '$id']]]]], ['id'], ['PUT' => 0], null, false, false, null]],
        980 => [[['_route' => 'sylius_admin_order_resend_confirmation_email', '_controller' => 'Sylius\\Bundle\\AdminBundle\\Action\\ResendOrderConfirmationEmailAction'], ['id'], ['GET' => 0], null, false, false, null]],
        1021 => [[['_route' => 'sylius_admin_payment_complete', '_controller' => 'sylius.controller.payment:applyStateMachineTransitionAction', '_sylius' => ['event' => 'complete', 'section' => 'admin', 'permission' => true, 'state_machine' => ['graph' => 'sylius_payment', 'transition' => 'complete'], 'redirect' => 'referer', 'flash' => 'sylius.payment.completed']], ['id'], ['PUT' => 0], null, false, false, null]],
        1059 => [[['_route' => 'sylius_admin_payment_method_update', '_controller' => 'sylius.controller.payment_method:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_payment_method_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => ['form' => '@SyliusAdmin/PaymentMethod/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1068 => [[['_route' => 'sylius_admin_payment_method_delete', '_controller' => 'sylius.controller.payment_method:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => ['form' => '@SyliusAdmin/PaymentMethod/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1090 => [[['_route' => 'sylius_admin_payment_method_create', '_controller' => 'sylius.controller.payment_method:createAction', '_sylius' => ['section' => 'admin', 'factory' => ['method' => 'createWithGateway', 'arguments' => ['gatewayFactory' => '$factory']], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_payment_method_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_payment_methods_available_to_your_customers', 'templates' => ['form' => '@SyliusAdmin/PaymentMethod/_form.html.twig'], 'route' => ['parameters' => ['factory' => '$factory']]]]], ['factory'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1129 => [[['_route' => 'sylius_admin_product_delete', '_controller' => 'sylius.controller.product:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => ['form' => '@SyliusAdmin/Product/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1143 => [[['_route' => 'sylius_admin_product_update', '_controller' => 'sylius.controller.product:updateAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'redirect' => 'referer', 'template' => '@SyliusAdmin/Crud/update.html.twig', 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'icon' => 'cube', 'templates' => ['form' => '@SyliusAdmin/Product/_form.html.twig', 'toolbar' => '@SyliusAdmin/Product/Update/_toolbar.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1167 => [[['_route' => 'sylius_admin_product_per_taxon_index', '_controller' => 'sylius.controller.product:indexAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'grid' => 'sylius_admin_product_from_taxon', 'template' => '@SyliusAdmin/Product/index.html.twig', 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'icon' => 'cube']]], ['taxonId'], ['GET' => 0], null, false, true, null]],
        1179 => [[['_route' => 'sylius_admin_product_create', '_controller' => 'sylius.controller.product:createAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_product_update', 'vars' => ['subheader' => 'sylius.ui.manage_your_product_catalog', 'templates' => ['form' => '@SyliusAdmin/Product/_form.html.twig'], 'route' => ['name' => 'sylius_admin_product_create']]]], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1199 => [[['_route' => 'sylius_admin_product_show', '_controller' => 'sylius.controller.product:showAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Product/show.html.twig']], ['id'], ['GET' => 0], null, false, true, null]],
        1220 => [[['_route' => 'sylius_admin_product_variant_index', '_controller' => 'sylius.controller.product_variant:indexAction', '_sylius' => ['template' => '@SyliusAdmin/ProductVariant/index.html.twig', 'grid' => 'sylius_admin_product_variant', 'section' => 'admin', 'permission' => true, 'vars' => ['route' => ['parameters' => ['productId' => '$productId']], 'templates' => ['breadcrumb' => '@SyliusAdmin/ProductVariant/Index/_breadcrumb.html.twig'], 'icon' => 'cubes', 'subheader' => 'sylius.ui.manage_variants']]], ['productId'], ['GET' => 0], null, true, false, null]],
        1236 => [[['_route' => 'sylius_admin_product_variant_create', '_controller' => 'sylius.controller.product_variant:createAction', '_sylius' => ['factory' => ['method' => 'createForProduct', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'grid' => 'sylius_admin_product_variant', 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_product_variant_index', 'parameters' => ['productId' => '$productId']], 'permission' => true, 'vars' => ['route' => ['parameters' => ['productId' => '$productId']], 'templates' => ['form' => '@SyliusAdmin/ProductVariant/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/ProductVariant/Create/_breadcrumb.html.twig', 'header_title' => '@SyliusAdmin/ProductVariant/Create/_headerTitle.html.twig']]]], ['productId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1258 => [[['_route' => 'sylius_admin_product_variant_update', '_controller' => 'sylius.controller.product_variant:updateAction', '_sylius' => ['template' => '@SyliusAdmin/Crud/update.html.twig', 'grid' => 'sylius_admin_product_variant', 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_product_variant_index', 'parameters' => ['productId' => '$productId']], 'permission' => true, 'repository' => ['method' => 'findOneByIdAndProductId', 'arguments' => ['id' => '$id', 'productId' => '$productId']], 'vars' => ['route' => ['parameters' => ['id' => '$id', 'productId' => '$productId']], 'templates' => ['form' => '@SyliusAdmin/ProductVariant/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/ProductVariant/Update/_breadcrumb.html.twig', 'toolbar' => '@SyliusAdmin/ProductVariant/Update/_toolbar.html.twig']]]], ['productId', 'id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        1279 => [[['_route' => 'sylius_admin_product_variant_bulk_delete', '_controller' => 'sylius.controller.product_variant:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'redirect' => 'referer', 'permission' => true, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], ['productId'], ['DELETE' => 0], null, false, false, null]],
        1296 => [[['_route' => 'sylius_admin_product_variant_delete', '_controller' => 'sylius.controller.product_variant:deleteAction', '_sylius' => ['section' => 'admin', 'redirect' => 'referer', 'permission' => true, 'repository' => ['method' => 'findOneByIdAndProductId', 'arguments' => ['id' => '$id', 'productId' => '$productId']]]], ['productId', 'id'], ['DELETE' => 0], null, false, true, null]],
        1313 => [[['_route' => 'sylius_admin_product_variant_generate', '_controller' => 'sylius.controller.product:updateAction', '_sylius' => ['template' => '@SyliusAdmin/ProductVariant/generate.html.twig', 'section' => 'admin', 'permission' => true, 'redirect' => ['route' => 'sylius_admin_product_variant_index', 'parameters' => ['productId' => '$productId']], 'form' => ['type' => 'Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductGenerateVariantsType'], 'repository' => ['method' => 'find', 'arguments' => ['$productId']], 'flash' => 'sylius.product_variant.generate']], ['productId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1369 => [[['_route' => 'sylius_admin_product_association_type_update', '_controller' => 'sylius.controller.product_association_type:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_product_association_type_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAssociationType/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1378 => [[['_route' => 'sylius_admin_product_association_type_delete', '_controller' => 'sylius.controller.product_association_type:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_association_types_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAssociationType/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1417 => [[['_route' => 'sylius_admin_product_attribute_update', '_controller' => 'sylius.controller.product_attribute:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_product_attribute_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAttribute/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1429 => [[['_route' => 'sylius_admin_product_attribute_create', '_controller' => 'sylius.controller.product_attribute:createAction', '_sylius' => ['section' => 'admin', 'factory' => ['method' => 'createTyped', 'arguments' => ['type' => '$type']], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_product_attribute_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAttribute/_form.html.twig'], 'route' => ['parameters' => ['type' => '$type']]]]], ['type'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1439 => [[['_route' => 'sylius_admin_product_attribute_delete', '_controller' => 'sylius.controller.product_attribute:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_attributes_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductAttribute/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1474 => [[['_route' => 'sylius_admin_product_option_update', '_controller' => 'sylius.controller.product_option:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_product_option_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductOption/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1483 => [[['_route' => 'sylius_admin_product_option_delete', '_controller' => 'sylius.controller.product_option:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_configuration_options_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductOption/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1520 => [[['_route' => 'sylius_admin_product_review_update', '_controller' => 'sylius.controller.product_review:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_product_review_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_reviews_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductReview/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1529 => [[['_route' => 'sylius_admin_product_review_delete', '_controller' => 'sylius.controller.product_review:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_reviews_of_your_products', 'templates' => ['form' => '@SyliusAdmin/ProductReview/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1558 => [[['_route' => 'sylius_admin_product_review_accept', '_controller' => 'sylius.controller.product_review:applyStateMachineTransitionAction', '_sylius' => ['permission' => true, 'state_machine' => ['graph' => 'sylius_product_review', 'transition' => 'accept'], 'redirect' => 'referer', 'flash' => 'sylius.review.accept']], ['id'], ['PUT' => 0], null, false, false, null]],
        1573 => [[['_route' => 'sylius_admin_product_review_reject', '_controller' => 'sylius.controller.product_review:applyStateMachineTransitionAction', '_sylius' => ['permission' => true, 'state_machine' => ['graph' => 'sylius_product_review', 'transition' => 'reject'], 'redirect' => 'referer', 'flash' => 'sylius.review.reject']], ['id'], ['PUT' => 0], null, false, false, null]],
        1613 => [[['_route' => 'sylius_admin_promotion_update', '_controller' => 'sylius.controller.promotion:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_promotion_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => ['form' => '@SyliusAdmin/Promotion/_form.html.twig', 'toolbar' => '@SyliusAdmin/Promotion/_toolbar.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1632 => [[['_route' => 'sylius_admin_promotion_coupon_index', '_controller' => 'sylius.controller.promotion_coupon:indexAction', '_sylius' => ['template' => '@SyliusAdmin/PromotionCoupon/index.html.twig', 'grid' => 'sylius_admin_promotion_coupon', 'section' => 'admin', 'permission' => true, 'vars' => ['route' => ['parameters' => ['promotionId' => '$promotionId']], 'templates' => ['breadcrumb' => '@SyliusAdmin/PromotionCoupon/Index/_breadcrumb.html.twig'], 'icon' => 'tags', 'subheader' => 'sylius.ui.manage_coupons']]], ['promotionId'], ['GET' => 0], null, true, false, null]],
        1648 => [[['_route' => 'sylius_admin_promotion_coupon_create', '_controller' => 'sylius.controller.promotion_coupon:createAction', '_sylius' => ['factory' => ['method' => 'createForPromotion', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.promotion\').find($promotionId))']], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'grid' => 'sylius_admin_promotion_coupon', 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_promotion_coupon_index', 'parameters' => ['promotionId' => '$promotionId']], 'permission' => true, 'vars' => ['route' => ['parameters' => ['promotionId' => '$promotionId']], 'templates' => ['form' => '@SyliusAdmin/PromotionCoupon/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/PromotionCoupon/Create/_breadcrumb.html.twig', 'header_title' => '@SyliusAdmin/PromotionCoupon/Create/_headerTitle.html.twig']]]], ['promotionId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1670 => [[['_route' => 'sylius_admin_promotion_coupon_update', '_controller' => 'sylius.controller.promotion_coupon:updateAction', '_sylius' => ['template' => '@SyliusAdmin/Crud/update.html.twig', 'grid' => 'sylius_admin_promotion_coupon', 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_promotion_coupon_index', 'parameters' => ['promotionId' => '$promotionId']], 'permission' => true, 'vars' => ['route' => ['parameters' => ['id' => '$id', 'promotionId' => '$promotionId']], 'templates' => ['form' => '@SyliusAdmin/PromotionCoupon/_form.html.twig', 'breadcrumb' => '@SyliusAdmin/PromotionCoupon/Update/_breadcrumb.html.twig'], 'subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns']]], ['promotionId', 'id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        1687 => [[['_route' => 'sylius_admin_promotion_coupon_generate', '_controller' => 'sylius.controller.promotion_coupon:generateAction', '_sylius' => ['template' => '@SyliusAdmin/PromotionCoupon/generate.html.twig', 'section' => 'admin', 'redirect' => ['route' => 'sylius_admin_promotion_coupon_index', 'parameters' => ['promotionId' => '$promotionId']], 'permission' => true]], ['promotionId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1708 => [[['_route' => 'sylius_admin_promotion_coupon_bulk_delete', '_controller' => 'sylius.controller.promotion_coupon:bulkDeleteAction', '_sylius' => ['section' => 'admin', 'redirect' => 'referer', 'permission' => true, 'paginate' => false, 'repository' => ['method' => 'findById', 'arguments' => ['$ids']]]], ['promotionId'], ['DELETE' => 0], null, false, false, null]],
        1725 => [[['_route' => 'sylius_admin_promotion_coupon_delete', '_controller' => 'sylius.controller.promotion_coupon:deleteAction', '_sylius' => ['section' => 'admin', 'redirect' => 'referer', 'permission' => true]], ['promotionId', 'id'], ['DELETE' => 0], null, false, true, null]],
        1737 => [[['_route' => 'sylius_admin_promotion_delete', '_controller' => 'sylius.controller.promotion:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_discounts_and_promotional_campaigns', 'templates' => ['form' => '@SyliusAdmin/Promotion/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1784 => [[['_route' => 'sylius_admin_shipment_ship', '_controller' => 'sylius.controller.shipment:updateAction', '_sylius' => ['event' => 'ship', 'section' => 'admin', 'permission' => true, 'state_machine' => ['graph' => 'sylius_shipment', 'transition' => 'ship'], 'redirect' => 'referer', 'flash' => 'sylius.shipment.shipped', 'form' => 'Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShipmentShipType']], ['id'], ['PUT' => 0], null, false, false, null]],
        1820 => [[['_route' => 'sylius_admin_shipment_resend_confirmation_email', '_controller' => 'Sylius\\Bundle\\AdminBundle\\Action\\ResendShipmentConfirmationEmailAction'], ['id'], ['GET' => 0], null, false, false, null]],
        1830 => [[['_route' => 'sylius_admin_shipment_show', '_controller' => 'sylius.controller.shipment:showAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Shipment/show.html.twig']], ['id'], ['GET' => 0], null, false, true, null]],
        1876 => [[['_route' => 'sylius_admin_shipping_category_update', '_controller' => 'sylius.controller.shipping_category:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_shipping_category_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingCategory/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1885 => [[['_route' => 'sylius_admin_shipping_category_delete', '_controller' => 'sylius.controller.shipping_category:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_categories_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingCategory/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1922 => [[['_route' => 'sylius_admin_shipping_method_update', '_controller' => 'sylius.controller.shipping_method:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_shipping_method_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingMethod/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        1938 => [[['_route' => 'sylius_admin_shipping_method_archive', '_controller' => 'sylius.controller.shipping_method:updateAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusUi/Grid/Action/archive.html.twig', 'form' => ['type' => 'Sylius\\Bundle\\ResourceBundle\\Form\\Type\\ArchivableType'], 'redirect' => ['route' => 'sylius_admin_shipping_method_index', 'parameters' => []]]], ['id'], ['PATCH' => 0], null, false, false, null]],
        1948 => [[['_route' => 'sylius_admin_shipping_method_delete', '_controller' => 'sylius.controller.shipping_method:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_shipping_methods_for_your_store', 'templates' => ['form' => '@SyliusAdmin/ShippingMethod/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        1977 => [[['_route' => 'sylius_admin_shop_user_delete', '_controller' => 'sylius.controller.shop_user:deleteAction', '_sylius' => ['section' => 'admin', 'redirect' => 'referer', 'permission' => true]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2016 => [[['_route' => 'sylius_admin_taxon_update', '_controller' => 'sylius.controller.taxon:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Taxon/update.html.twig', 'redirect' => 'sylius_admin_taxon_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => ['form' => '@SyliusAdmin/Taxon/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2025 => [[['_route' => 'sylius_admin_taxon_delete', '_controller' => 'sylius.controller.taxon:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => ['form' => '@SyliusAdmin/Taxon/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2047 => [[['_route' => 'sylius_admin_taxon_create_for_parent', '_controller' => 'sylius.controller.taxon:createAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'template' => '@SyliusAdmin/Taxon/create.html.twig', 'redirect' => 'sylius_admin_taxon_update', 'factory' => ['method' => 'createForParent', 'arguments' => ['expr:notFoundOnNull(service("sylius.repository.taxon").find($id))']], 'vars' => ['subheader' => 'sylius.ui.manage_categorization_of_your_products', 'templates' => ['form' => '@SyliusAdmin/Taxon/_form.html.twig']]]], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2089 => [[['_route' => 'sylius_admin_tax_category_update', '_controller' => 'sylius.controller.tax_category:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_tax_category_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxCategory/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2098 => [[['_route' => 'sylius_admin_tax_category_delete', '_controller' => 'sylius.controller.tax_category:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxCategory/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2130 => [[['_route' => 'sylius_admin_tax_rate_update', '_controller' => 'sylius.controller.tax_rate:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_tax_rate_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxRate/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2139 => [[['_route' => 'sylius_admin_tax_rate_delete', '_controller' => 'sylius.controller.tax_rate:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_taxation_of_your_products', 'templates' => ['form' => '@SyliusAdmin/TaxRate/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2176 => [[['_route' => 'sylius_admin_zone_update', '_controller' => 'sylius.controller.zone:updateAction', '_sylius' => ['section' => 'admin', 'template' => '@SyliusAdmin\\Crud/update.html.twig', 'redirect' => 'sylius_admin_zone_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => ['form' => '@SyliusAdmin/Zone/_form.html.twig']]]], ['id'], ['GET' => 0, 'PUT' => 1, 'PATCH' => 2], null, false, false, null]],
        2185 => [[['_route' => 'sylius_admin_zone_delete', '_controller' => 'sylius.controller.zone:deleteAction', '_sylius' => ['section' => 'admin', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => ['form' => '@SyliusAdmin/Zone/_form.html.twig']]]], ['id'], ['DELETE' => 0], null, false, true, null]],
        2222 => [[['_route' => 'sylius_admin_zone_create', '_controller' => 'sylius.controller.zone:createAction', '_sylius' => ['section' => 'admin', 'factory' => ['method' => 'createTyped', 'arguments' => ['type' => '$type']], 'template' => '@SyliusAdmin/Crud/create.html.twig', 'redirect' => 'sylius_admin_zone_update', 'permission' => true, 'vars' => ['subheader' => 'sylius.ui.manage_geographical_zones', 'templates' => ['form' => '@SyliusAdmin/Zone/_form.html.twig'], 'route' => ['parameters' => ['type' => '$type']]]]], ['type'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2265 => [[['_route' => 'sylius_paypal_plugin_admin_download_payouts_report', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\DownloadPayoutsReportAction'], ['id'], ['GET' => 0], null, false, true, null]],
        2297 => [[['_route' => 'sylius_paypal_plugin_admin_enable_seller', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\EnableSellerAction'], ['id'], ['POST' => 0], null, false, true, null]],
        2343 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        2375 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        2412 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        2454 => [[['_route' => 'api_addresses_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Address', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        2481 => [[['_route' => 'api_adjustments_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Adjustment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        2523 => [
            [['_route' => 'api_administrators_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User\\AdminUser', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_administrators_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User\\AdminUser', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        2562 => [
            [['_route' => 'api_administrators_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User\\AdminUser', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_administrators_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User\\AdminUser', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_administrators_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User\\AdminUser', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        2605 => [[['_route' => 'api_avatar_images_admin_post_collection', '_controller' => 'sylius.api.upload_avatar_image_action', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Component\\Core\\Model\\AvatarImage', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_post'], ['_format'], ['POST' => 0], null, false, true, null]],
        2643 => [
            [['_route' => 'api_avatar_images_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Component\\Core\\Model\\AvatarImage', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_avatar_images_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Component\\Core\\Model\\AvatarImage', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        2678 => [[['_route' => 'api_channels_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Channel\\Channel', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null]],
        2707 => [[['_route' => 'api_channels_shop_billing_data_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Component\\Core\\Model\\ShopBillingData', '_api_identifiers' => ['code' => ['App\\Entity\\Channel\\Channel', 'code', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_channels_shop_billing_data_get_subresource', '_api_subresource_context' => ['property' => 'shopBillingData', 'identifiers' => ['code' => ['App\\Entity\\Channel\\Channel', 'code', true]], 'collection' => false, 'operationId' => 'api_channels_shop_billing_data_get_subresource']], ['code'], ['GET' => 0], null, false, false, null]],
        2737 => [
            [['_route' => 'api_countries_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Country', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_countries_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Country', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_put'], ['code'], ['PUT' => 0], null, false, true, null],
        ],
        2756 => [[['_route' => 'api_countries_provinces_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Province', '_api_identifiers' => ['code' => ['App\\Entity\\Addressing\\Country', 'code', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_countries_provinces_get_subresource', '_api_subresource_context' => ['property' => 'provinces', 'identifiers' => ['code' => ['App\\Entity\\Addressing\\Country', 'code', true]], 'collection' => true, 'operationId' => 'api_countries_provinces_get_subresource']], ['code'], ['GET' => 0], null, false, false, null]],
        2787 => [[['_route' => 'api_currencies_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\Currency', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null]],
        2815 => [[['_route' => 'api_customers_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\Customer', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        2853 => [
            [['_route' => 'api_customer_groups_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\CustomerGroup', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_customer_groups_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\CustomerGroup', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        2892 => [
            [['_route' => 'api_customer_groups_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\CustomerGroup', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['code', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_customer_groups_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\CustomerGroup', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_put'], ['code', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_customer_groups_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\CustomerGroup', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_delete'], ['code', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        2942 => [
            [['_route' => 'api_exchange_rates_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\ExchangeRate', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_exchange_rates_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\ExchangeRate', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        2981 => [
            [['_route' => 'api_exchange_rates_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\ExchangeRate', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_exchange_rates_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\ExchangeRate', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_exchange_rates_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\ExchangeRate', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        3008 => [[['_route' => 'api_locales_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Locale\\Locale', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null]],
        3038 => [[['_route' => 'api_orders_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['tokenValue'], ['GET' => 0], null, false, true, null]],
        3057 => [[['_route' => 'api_orders_admin_cancel_item', '_controller' => 'sylius.api.order_state_machine_transition_applicator:cancel', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_cancel'], ['tokenValue'], ['PATCH' => 0], null, false, false, null]],
        3074 => [[['_route' => 'api_orders_payments_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\Payment', '_api_identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_orders_payments_get_subresource', '_api_subresource_context' => ['property' => 'payments', 'identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true]], 'collection' => true, 'operationId' => 'api_orders_payments_get_subresource']], ['tokenValue'], ['GET' => 0], null, false, false, null]],
        3092 => [[['_route' => 'api_orders_shipments_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\Shipment', '_api_identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_orders_shipments_get_subresource', '_api_subresource_context' => ['property' => 'shipments', 'identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true]], 'collection' => true, 'operationId' => 'api_orders_shipments_get_subresource']], ['tokenValue'], ['GET' => 0], null, false, false, null]],
        3125 => [[['_route' => 'api_order_items_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\OrderItem', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        3146 => [[['_route' => 'api_order_items_adjustments_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Adjustment', '_api_identifiers' => ['id' => ['App\\Entity\\Order\\OrderItem', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_order_items_adjustments_get_subresource', '_api_subresource_context' => ['property' => 'adjustments', 'identifiers' => ['id' => ['App\\Entity\\Order\\OrderItem', 'id', true]], 'collection' => true, 'operationId' => 'api_order_items_adjustments_get_subresource']], ['id'], ['GET' => 0], null, false, false, null]],
        3172 => [[['_route' => 'api_order_item_units_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\OrderItemUnit', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        3209 => [[['_route' => 'api_payments_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\Payment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        3227 => [[['_route' => 'api_payments_admin_complete_item', '_controller' => 'sylius.api.payment_state_machine_transition_applicator:complete', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\Payment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_complete'], ['id'], ['PATCH' => 0], null, false, false, null]],
        3255 => [[['_route' => 'api_payment_methods_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\PaymentMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null]],
        3290 => [
            [['_route' => 'api_products_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_products_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_put'], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_products_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_delete'], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        3347 => [
            [['_route' => 'api_product_association_types_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociationType', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_product_association_types_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociationType', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        3386 => [
            [['_route' => 'api_product_association_types_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociationType', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['code', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_product_association_types_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociationType', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_put'], ['code', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_product_association_types_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociationType', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_delete'], ['code', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        3437 => [[['_route' => 'api_product_association_type_translations_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductAssociationTypeTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        3462 => [[['_route' => 'api_product_images_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductImage', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        3493 => [
            [['_route' => 'api_product_options_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOption', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_product_options_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOption', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_put'], ['code'], ['PUT' => 0], null, false, true, null],
        ],
        3509 => [[['_route' => 'api_product_options_values_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOptionValue', '_api_identifiers' => ['code' => ['App\\Entity\\Product\\ProductOption', 'code', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_product_options_values_get_subresource', '_api_subresource_context' => ['property' => 'values', 'identifiers' => ['code' => ['App\\Entity\\Product\\ProductOption', 'code', true]], 'collection' => true, 'operationId' => 'api_product_options_values_get_subresource']], ['code'], ['GET' => 0], null, false, false, null]],
        3562 => [[['_route' => 'api_product_option_translations_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOptionTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        3586 => [[['_route' => 'api_product_option_values_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOptionValue', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null]],
        3616 => [
            [['_route' => 'api_product_reviews_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_product_reviews_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_product_reviews_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        3635 => [[['_route' => 'api_product_reviews_admin_accept_item', '_controller' => 'sylius.api.product_review_state_machine_transition_applicator:accept', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_accept'], ['id'], ['PATCH' => 0], null, false, false, null]],
        3650 => [[['_route' => 'api_product_reviews_admin_reject_item', '_controller' => 'sylius.api.product_review_state_machine_transition_applicator:reject', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_reject'], ['id'], ['PATCH' => 0], null, false, false, null]],
        3679 => [[['_route' => 'api_product_taxa_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductTaxon', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        3708 => [[['_route' => 'api_product_translations_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        3738 => [[['_route' => 'api_product_variants_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductVariant', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null]],
        3769 => [[['_route' => 'api_product_variant_translations_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductVariantTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        3806 => [[['_route' => 'api_promotions_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\Promotion', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_get'], ['_format'], ['GET' => 0], null, false, true, null]],
        3844 => [
            [['_route' => 'api_promotions_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\Promotion', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promotions_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion\\Promotion', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        3890 => [
            [['_route' => 'api_provinces_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Province', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['code', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_provinces_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Province', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_put'], ['code', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        3929 => [[['_route' => 'api_shipments_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\Shipment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        3943 => [[['_route' => 'api_shipments_admin_ship_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\Shipment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_ship'], ['id'], ['PATCH' => 0], null, false, false, null]],
        3993 => [
            [['_route' => 'api_shipping_categories_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_shipping_categories_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        4032 => [
            [['_route' => 'api_shipping_categories_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['code', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_shipping_categories_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_put'], ['code', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_shipping_categories_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_delete'], ['code', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        4065 => [
            [['_route' => 'api_shipping_methods_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_shipping_methods_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_put'], ['code'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_shipping_methods_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_delete'], ['code'], ['DELETE' => 0], null, false, true, null],
        ],
        4085 => [[['_route' => 'api_shipping_methods_admin_archive_item', '_controller' => 'sylius.api.archiving_shipping_method_applicator:archive', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_archive'], ['code'], ['PATCH' => 0], null, false, false, null]],
        4101 => [[['_route' => 'api_shipping_methods_admin_restore_item', '_controller' => 'sylius.api.archiving_shipping_method_applicator:restore', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_restore'], ['code'], ['PATCH' => 0], null, false, false, null]],
        4135 => [[['_route' => 'api_shipping_method_translations_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethodTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        4191 => [[['_route' => 'api_shop_billing_datas_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Component\\Core\\Model\\ShopBillingData', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        4240 => [
            [['_route' => 'api_tax_categories_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxation\\TaxCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tax_categories_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxation\\TaxCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        4279 => [
            [['_route' => 'api_tax_categories_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxation\\TaxCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['code', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tax_categories_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxation\\TaxCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_put'], ['code', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_tax_categories_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxation\\TaxCategory', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_delete'], ['code', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        4308 => [
            [['_route' => 'api_taxa_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\Taxon', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['code'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_taxa_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\Taxon', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_put'], ['code'], ['PUT' => 0], null, false, true, null],
        ],
        4341 => [[['_route' => 'api_taxon_translations_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\TaxonTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['id'], ['GET' => 0], null, false, true, null]],
        4381 => [
            [['_route' => 'api_zones_admin_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Zone', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_zones_admin_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Zone', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'admin_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        4423 => [
            [['_route' => 'api_zones_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Zone', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['code', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_zones_admin_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Zone', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_put'], ['code', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_zones_admin_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Zone', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_delete'], ['code', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        4464 => [[['_route' => 'api_zones_members_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\ZoneMember', '_api_identifiers' => ['code' => ['App\\Entity\\Addressing\\Zone', 'code', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_zones_members_get_subresource', '_api_subresource_context' => ['property' => 'members', 'identifiers' => ['code' => ['App\\Entity\\Addressing\\Zone', 'code', true]], 'collection' => true, 'operationId' => 'api_zones_members_get_subresource']], ['code', '_format'], ['GET' => 0], null, false, true, null]],
        4510 => [[['_route' => 'api_zone_members_admin_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\ZoneMember', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'admin_get'], ['code', '_format'], ['GET' => 0], null, false, true, null]],
        4556 => [
            [['_route' => 'api_addresses_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Address', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_addresses_shop_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Address', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_addresses_shop_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Address', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_put'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        4584 => [[['_route' => 'api_adjustments_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Adjustment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        4637 => [[['_route' => 'api_orders_shop_account_change_payment_method_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_account_change_payment_method'], ['tokenValue', 'paymentId'], ['PATCH' => 0], null, false, true, null]],
        4679 => [[['_route' => 'api_verify_customer_accounts_shop_verify_customer_account_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Bundle\\ApiBundle\\Command\\VerifyCustomerAccount', '_api_identifiers' => ['token'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_verify_customer_account'], ['token'], ['PATCH' => 0], null, false, true, null]],
        4710 => [[['_route' => 'api_channels_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Channel\\Channel', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        4736 => [[['_route' => 'api_countries_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Addressing\\Country', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        4766 => [[['_route' => 'api_currencies_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Currency\\Currency', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        4794 => [[['_route' => 'api_customers_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\Customer', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        4812 => [[['_route' => 'api_customers_shop_password_update_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\Customer', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_password_update'], ['id'], ['PUT' => 0], null, false, false, null]],
        4821 => [[['_route' => 'api_customers_shop_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer\\Customer', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_put'], ['id'], ['PUT' => 0], null, false, true, null]],
        4849 => [[['_route' => 'api_locales_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Locale\\Locale', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        4879 => [
            [['_route' => 'api_orders_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_get'], ['tokenValue'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_orders_shop_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_delete'], ['tokenValue'], ['DELETE' => 0], null, false, true, null],
        ],
        4900 => [[['_route' => 'api_orders_shop_add_item_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_add_item'], ['tokenValue'], ['PATCH' => 0], null, false, false, null]],
        4921 => [[['_route' => 'api_orders_shop_remove_item_item', '_controller' => 'Sylius\\Bundle\\ApiBundle\\Controller\\DeleteOrderItemAction', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_remove_item'], ['tokenValue', 'itemId'], ['DELETE' => 0], null, false, true, null]],
        4930 => [[['_route' => 'api_orders_shop_change_quantity_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_change_quantity'], ['tokenValue', 'orderItemId'], ['PATCH' => 0], null, false, true, null]],
        4951 => [[['_route' => 'api_orders_items_adjustments_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Adjustment', '_api_identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true], 'items' => ['App\\Entity\\Order\\OrderItem', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_orders_items_adjustments_get_subresource', '_api_subresource_context' => ['property' => 'adjustments', 'identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true], 'items' => ['App\\Entity\\Order\\OrderItem', 'id', true]], 'collection' => true, 'operationId' => 'api_orders_items_adjustments_get_subresource']], ['tokenValue', 'items'], ['GET' => 0], null, false, false, null]],
        4961 => [[['_route' => 'api_orders_items_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\OrderItem', '_api_identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_orders_items_get_subresource', '_api_subresource_context' => ['property' => 'items', 'identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true]], 'collection' => true, 'operationId' => 'api_orders_items_get_subresource']], ['tokenValue'], ['GET' => 0], null, false, false, null]],
        4984 => [[['_route' => 'api_orders_shop_address_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_address'], ['tokenValue'], ['PATCH' => 0], null, false, false, null]],
        5002 => [[['_route' => 'api_orders_adjustments_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Adjustment', '_api_identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_orders_adjustments_get_subresource', '_api_subresource_context' => ['property' => 'adjustments', 'identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true]], 'collection' => true, 'operationId' => 'api_orders_adjustments_get_subresource']], ['tokenValue'], ['GET' => 0], null, false, false, null]],
        5024 => [[['_route' => 'api_orders_shop_apply_coupon_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_apply_coupon'], ['tokenValue'], ['PATCH' => 0], null, false, false, null]],
        5055 => [[['_route' => 'api_orders_shop_select_shipping_method_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_select_shipping_method'], ['tokenValue', 'shipmentId'], ['PATCH' => 0], null, false, true, null]],
        5072 => [[['_route' => 'api_orders_shipments_methods_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true], 'shipments' => ['App\\Entity\\Shipping\\Shipment', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_orders_shipments_methods_get_subresource', '_api_subresource_context' => ['property' => 'method', 'identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true], 'shipments' => ['App\\Entity\\Shipping\\Shipment', 'id', true]], 'collection' => true, 'operationId' => 'api_orders_shipments_methods_get_subresource']], ['tokenValue', 'shipments'], ['GET' => 0], null, false, false, null]],
        5102 => [[['_route' => 'api_orders_shop_select_payment_method_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_select_payment_method'], ['tokenValue', 'paymentId'], ['PATCH' => 0], null, false, true, null]],
        5128 => [[['_route' => 'api_orders_get_configuration_item', '_controller' => 'sylius.api.get_configuration_action', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get_configuration'], ['tokenValue', 'paymentId'], ['GET' => 0], null, false, false, null]],
        5144 => [[['_route' => 'api_orders_payments_methods_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\PaymentMethod', '_api_identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true], 'payments' => ['App\\Entity\\Payment\\Payment', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_orders_payments_methods_get_subresource', '_api_subresource_context' => ['property' => 'method', 'identifiers' => ['tokenValue' => ['App\\Entity\\Order\\Order', 'tokenValue', true], 'payments' => ['App\\Entity\\Payment\\Payment', 'id', true]], 'collection' => true, 'operationId' => 'api_orders_payments_methods_get_subresource']], ['tokenValue', 'payments'], ['GET' => 0], null, false, false, null]],
        5163 => [[['_route' => 'api_orders_shop_complete_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_complete'], ['tokenValue'], ['PATCH' => 0], null, false, false, null]],
        5173 => [[['_route' => 'api_orders_shop_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\Order', '_api_identifiers' => ['tokenValue'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_put'], ['tokenValue'], ['PUT' => 0], null, false, true, null]],
        5202 => [[['_route' => 'api_order_items_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\OrderItem', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        5227 => [[['_route' => 'api_order_item_units_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order\\OrderItemUnit', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        5264 => [[['_route' => 'api_payments_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\Payment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        5281 => [[['_route' => 'api_payments_methods_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\PaymentMethod', '_api_identifiers' => ['id' => ['App\\Entity\\Payment\\Payment', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_payments_methods_get_subresource', '_api_subresource_context' => ['property' => 'method', 'identifiers' => ['id' => ['App\\Entity\\Payment\\Payment', 'id', true]], 'collection' => true, 'operationId' => 'api_payments_methods_get_subresource']], ['id'], ['GET' => 0], null, false, false, null]],
        5309 => [[['_route' => 'api_payment_methods_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment\\PaymentMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        5338 => [[['_route' => 'api_products_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\Product', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        5367 => [[['_route' => 'api_product_images_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductImage', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        5395 => [[['_route' => 'api_product_options_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOption', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        5421 => [[['_route' => 'api_product_option_values_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductOptionValue', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        5447 => [[['_route' => 'api_product_reviews_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductReview', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        5474 => [[['_route' => 'api_product_taxa_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductTaxon', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        5503 => [[['_route' => 'api_product_translations_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        5533 => [[['_route' => 'api_product_variants_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductVariant', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        5564 => [[['_route' => 'api_product_variant_translations_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product\\ProductVariantTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        5611 => [[['_route' => 'api_reset_password_requests_shop_update_reset_password_request_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'Sylius\\Bundle\\ApiBundle\\Command\\ResetPassword', '_api_identifiers' => ['resetPasswordToken'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_update_reset_password_request'], ['resetPasswordToken'], ['PATCH' => 0], null, false, true, null]],
        5644 => [[['_route' => 'api_shipments_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\Shipment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        5661 => [[['_route' => 'api_shipments_methods_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_identifiers' => ['id' => ['App\\Entity\\Shipping\\Shipment', 'id', true]], '_api_has_composite_identifier' => false, '_api_subresource_operation_name' => 'api_shipments_methods_get_subresource', '_api_subresource_context' => ['property' => 'method', 'identifiers' => ['id' => ['App\\Entity\\Shipping\\Shipment', 'id', true]], 'collection' => true, 'operationId' => 'api_shipments_methods_get_subresource']], ['id'], ['GET' => 0], null, false, false, null]],
        5696 => [[['_route' => 'api_shipping_methods_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethod', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        5728 => [[['_route' => 'api_shipping_method_translations_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Shipping\\ShippingMethodTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        5757 => [[['_route' => 'api_taxa_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\Taxon', '_api_identifiers' => ['code'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_get'], ['code'], ['GET' => 0], null, false, true, null]],
        5789 => [[['_route' => 'api_taxon_translations_shop_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Taxonomy\\TaxonTranslation', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'shop_get'], ['id'], ['GET' => 0], null, false, true, null]],
        5896 => [[['_route' => 'sylius_shop_ajax_user_check_action', '_controller' => 'sylius.controller.shop_user:showAction', '_format' => 'json', '_sylius' => ['repository' => ['method' => 'findOneByEmail', 'arguments' => ['email' => '$email']], 'serialization_groups' => ['Secured']]], ['_locale'], ['GET' => 0], null, false, false, null]],
        5995 => [[['_route' => 'sylius_shop_ajax_cart_add_item', '_controller' => 'sylius.controller.order_item:addAction', '_format' => 'json', '_sylius' => ['factory' => ['method' => 'createForProduct', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Order\\AddToCartType', 'options' => ['product' => 'expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'redirect' => ['route' => 'sylius_shop_cart_summary', 'parameters' => []], 'flash' => 'sylius.cart.add_item']], ['_locale'], ['POST' => 0], null, false, false, null]],
        6106 => [[['_route' => 'sylius_shop_ajax_cart_item_remove', '_controller' => 'sylius.controller.order_item:removeAction', '_format' => 'json', '_sylius' => ['flash' => 'sylius.cart.remove_item']], ['_locale', 'id'], ['DELETE' => 0], null, false, false, null]],
        6219 => [[['_route' => 'sylius_shop_ajax_render_province_form', '_controller' => 'sylius.controller.province:choiceOrTextFieldFormAction', '_sylius' => ['template' => '@SyliusShop/Common/Form/_province.html.twig']], ['_locale'], ['GET' => 0], null, false, false, null]],
        6334 => [[['_route' => 'sylius_shop_partial_taxon_show_by_slug', '_controller' => 'sylius.controller.taxon:showAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findOneBySlug', 'arguments' => ['$slug', 'expr:service(\'sylius.context.locale\').getLocaleCode()']]]], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        6453 => [[['_route' => 'sylius_shop_partial_taxon_index_by_code', '_controller' => 'sylius.controller.taxon:indexAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findChildren', 'arguments' => ['$code', 'expr:service(\'sylius.context.locale\').getLocaleCode()']]]], ['_locale', 'code'], ['GET' => 0], null, false, true, null]],
        6579 => [[['_route' => 'sylius_shop_partial_channel_menu_taxon_index', '_controller' => 'sylius.controller.taxon:indexAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findChildrenByChannelMenuTaxon', 'arguments' => ['expr:service(\'sylius.context.channel\').getChannel().getMenuTaxon()', 'expr:service(\'sylius.context.locale\').getLocaleCode()']]]], ['_locale'], ['GET' => 0], null, true, false, null]],
        6686 => [[['_route' => 'sylius_shop_partial_cart_summary', '_controller' => 'sylius.controller.order:widgetAction', '_sylius' => ['template' => '$template']], ['_locale'], ['GET' => 0], null, false, false, null]],
        6795 => [[['_route' => 'sylius_shop_partial_cart_add_item', '_controller' => 'sylius.controller.order_item:addAction', '_sylius' => ['template' => '$template', 'factory' => ['method' => 'createForProduct', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Order\\AddToCartType', 'options' => ['product' => 'expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'redirect' => ['route' => 'sylius_shop_cart_summary', 'parameters' => []]]], ['_locale'], ['GET' => 0], null, false, false, null]],
        6914 => [[['_route' => 'sylius_shop_partial_product_index_latest', '_controller' => 'sylius.controller.product:indexAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findLatestByChannel', 'arguments' => ['expr:service(\'sylius.context.channel\').getChannel()', 'expr:service(\'sylius.context.locale\').getLocaleCode()', '!!int $count']]]], ['_locale', 'count'], ['GET' => 0], null, false, true, null]],
        7026 => [[['_route' => 'sylius_shop_partial_product_show_by_slug', '_controller' => 'sylius.controller.product:showAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findOneByChannelAndSlug', 'arguments' => ['expr:service(\'sylius.context.channel\').getChannel()', 'expr:service(\'sylius.context.locale\').getLocaleCode()', '$slug']]]], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        7167 => [[['_route' => 'sylius_shop_partial_product_review_latest', '_controller' => 'sylius.controller.product_review:indexAction', '_sylius' => ['template' => '$template', 'repository' => ['method' => 'findLatestByProductId', 'arguments' => ['$productId', '!!int $count']]], 'count' => 3], ['_locale', 'productId', 'count'], ['GET' => 0], null, false, true, null]],
        7301 => [[['_route' => 'sylius_shop_partial_product_association_show', '_controller' => 'sylius.controller.product_association:showAction', '_sylius' => ['template' => '$template']], ['_locale', 'productId', 'id'], ['GET' => 0], null, false, true, null]],
        7386 => [[['_route' => 'sylius_shop_homepage', '_controller' => 'sylius.controller.shop.homepage:indexAction'], ['_locale'], ['GET' => 0], null, true, true, null]],
        7477 => [[['_route' => 'sylius_shop_login', '_controller' => 'sylius.controller.security:loginAction', '_sylius' => ['template' => '@SyliusShop/login.html.twig', 'logged_in_route' => 'sylius_shop_account_dashboard']], ['_locale'], ['GET' => 0], null, false, false, null]],
        7575 => [[['_route' => 'sylius_shop_login_check', '_controller' => 'sylius.controller.security:checkAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        7667 => [[['_route' => 'sylius_shop_logout'], ['_locale'], ['GET' => 0], null, false, false, null]],
        7761 => [[['_route' => 'sylius_shop_register', '_controller' => 'sylius.controller.customer:createAction', '_sylius' => ['template' => '@SyliusShop/register.html.twig', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Customer\\CustomerRegistrationType', 'event' => 'register', 'redirect' => ['route' => 'sylius_shop_account_dashboard'], 'flash' => 'sylius.customer.register']], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        7881 => [[['_route' => 'sylius_shop_register_after_checkout', '_controller' => 'sylius.controller.customer:createAction', '_sylius' => ['form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Customer\\CustomerRegistrationType', 'factory' => ['method' => ['expr:service("sylius.factory.customer_after_checkout")', 'createAfterCheckout'], 'arguments' => ['expr:service("sylius.repository.order").findOneByTokenValue($tokenValue)']], 'template' => '@SyliusShop/register.html.twig', 'event' => 'register', 'redirect' => ['route' => 'sylius_shop_account_dashboard'], 'flash' => 'sylius.customer.register']], ['_locale', 'tokenValue'], ['GET' => 0], null, false, true, null]],
        7986 => [[['_route' => 'sylius_shop_request_password_reset_token', '_controller' => 'sylius.controller.shop_user:requestPasswordResetTokenAction', '_sylius' => ['template' => '@SyliusShop/Account/requestPasswordReset.html.twig', 'redirect' => 'sylius_shop_login']], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        8100 => [[['_route' => 'sylius_shop_password_reset', '_controller' => 'sylius.controller.shop_user:resetPasswordAction', '_sylius' => ['template' => '@SyliusShop/Account/resetPassword.html.twig', 'redirect' => 'sylius_shop_login']], ['_locale', 'token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        8192 => [[['_route' => 'sylius_shop_user_request_verification_token', '_controller' => 'sylius.controller.shop_user:requestVerificationTokenAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        8293 => [[['_route' => 'sylius_shop_user_verification', '_controller' => 'sylius.controller.shop_user:verifyAction', '_sylius' => ['redirect' => 'sylius_shop_account_dashboard']], ['_locale', 'token'], ['GET' => 0], null, false, true, null]],
        8396 => [[['_route' => 'sylius_shop_product_show', '_controller' => 'sylius.controller.product:showAction', '_sylius' => ['template' => '@SyliusShop/Product/show.html.twig', 'repository' => ['method' => 'findOneByChannelAndSlug', 'arguments' => ['expr:service(\'sylius.context.channel\').getChannel()', 'expr:service(\'sylius.context.locale\').getLocaleCode()', '$slug']]]], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        8493 => [[['_route' => 'sylius_shop_product_index', '_controller' => 'sylius.controller.product:indexAction', '_sylius' => ['template' => '@SyliusShop/Product/index.html.twig', 'grid' => 'sylius_shop_product']], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        8604 => [[['_route' => 'sylius_shop_product_review_index', '_controller' => 'sylius.controller.product_review:indexAction', '_sylius' => ['template' => '@SyliusShop/ProductReview/index.html.twig', 'repository' => ['method' => 'findAcceptedByProductSlugAndChannel', 'arguments' => ['$slug', 'expr:service(\'sylius.context.locale\').getLocaleCode()', 'expr:service(\'sylius.context.channel\').getChannel()']]]], ['_locale', 'slug'], ['GET' => 0], null, true, false, null]],
        8719 => [[['_route' => 'sylius_shop_product_review_create', '_controller' => 'sylius.controller.product_review:createAction', '_sylius' => ['template' => '@SyliusShop/ProductReview/create.html.twig', 'form' => ['options' => ['validation_groups' => ['sylius', 'sylius_review']]], 'factory' => ['method' => 'createForSubjectWithReviewer', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').findOneByChannelAndSlug(service(\'sylius.context.channel\').getChannel(), service(\'sylius.context.locale\').getLocaleCode(), $slug))', 'expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_product_show', 'parameters' => ['slug' => '$slug']], 'flash' => 'sylius.review.wait_for_the_acceptation']], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        8812 => [
            [['_route' => 'sylius_shop_cart_summary', '_controller' => 'sylius.controller.order:summaryAction', '_sylius' => ['template' => '@SyliusShop/Cart/summary.html.twig', 'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\CartType']], ['_locale'], ['GET' => 0], null, true, false, null],
            [['_route' => 'sylius_shop_cart_save', '_controller' => 'sylius.controller.order:saveAction', '_sylius' => ['template' => '@SyliusShop/Cart/summary.html.twig', 'redirect' => 'sylius_shop_cart_summary', 'form' => 'Sylius\\Bundle\\OrderBundle\\Form\\Type\\CartType', 'flash' => 'sylius.cart.save']], ['_locale'], ['PUT' => 0, 'PATCH' => 1], null, true, false, null],
            [['_route' => 'sylius_shop_cart_clear', '_controller' => 'sylius.controller.order:clearAction', '_sylius' => ['redirect' => 'sylius_shop_cart_summary']], ['_locale'], ['DELETE' => 0], null, true, false, null],
        ],
        8919 => [[['_route' => 'sylius_shop_cart_item_remove', '_controller' => 'sylius.controller.order_item:removeAction', '_sylius' => ['flash' => 'sylius.cart.remove_item', 'redirect' => ['route' => 'sylius_shop_cart_summary', 'parameters' => []]]], ['_locale', 'id'], ['DELETE' => 0], null, false, false, null]],
        9013 => [[['_route' => 'sylius_shop_checkout_start', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController:redirectAction', 'route' => 'sylius_shop_checkout_address'], ['_locale'], ['GET' => 0], null, true, false, null]],
        9115 => [[['_route' => 'sylius_shop_checkout_address', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['event' => 'address', 'flash' => false, 'template' => '@SyliusShop/Checkout/address.html.twig', 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\AddressType', 'options' => ['customer' => 'expr:service(\'sylius.context.customer\').getCustomer()']], 'repository' => ['method' => 'findCartForAddressing', 'arguments' => ['expr:service(\'sylius.context.cart\').getCart().getId()']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'address']]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        9226 => [[['_route' => 'sylius_shop_checkout_select_shipping', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['event' => 'select_shipping', 'flash' => false, 'template' => '@SyliusShop/Checkout/selectShipping.html.twig', 'form' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\SelectShippingType', 'repository' => ['method' => 'findCartForSelectingShipping', 'arguments' => ['expr:service(\'sylius.context.cart\').getCart().getId()']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'select_shipping']]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        9329 => [[['_route' => 'sylius_shop_checkout_complete', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['event' => 'complete', 'flash' => false, 'template' => '@SyliusShop/Checkout/complete.html.twig', 'repository' => ['method' => 'findCartForSummary', 'arguments' => ['expr:service(\'sylius.context.cart\').getCart().getId()']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'complete'], 'redirect' => ['route' => 'sylius_shop_order_pay', 'parameters' => ['tokenValue' => 'resource.tokenValue']], 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Checkout\\CompleteType', 'options' => ['validation_groups' => 'sylius_checkout_complete']]]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        9422 => [[['_route' => 'sylius_shop_contact_request', '_controller' => 'sylius.controller.shop.contact:requestAction', '_sylius' => ['redirect' => 'sylius_shop_homepage']], ['_locale'], ['GET' => 0, 'POST' => 1], null, true, false, null]],
        9524 => [[['_route' => 'sylius_shop_order_thank_you', '_controller' => 'sylius.controller.order:thankYouAction', '_sylius' => ['template' => '@SyliusShop/Order/thankYou.html.twig']], ['_locale'], ['GET' => 0], null, false, false, null]],
        9628 => [[['_route' => 'sylius_shop_order_pay', '_controller' => 'sylius.controller.payum:prepareCaptureAction', '_sylius' => ['redirect' => ['route' => 'sylius_shop_order_after_pay']]], ['_locale', 'tokenValue'], ['GET' => 0], null, false, false, null]],
        9730 => [[['_route' => 'sylius_shop_order_after_pay', '_controller' => 'sylius.controller.payum:afterCaptureAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        9830 => [[['_route' => 'sylius_shop_account_order_index', '_controller' => 'sylius.controller.order:indexAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/Order/index.html.twig', 'grid' => 'sylius_shop_account_order']], ['_locale'], ['GET' => 0], null, true, false, null]],
        9939 => [[['_route' => 'sylius_shop_account_order_show', '_controller' => 'sylius.controller.order:showAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/Order/show.html.twig', 'repository' => ['method' => 'findOneByNumberAndCustomer', 'arguments' => ['$number', 'expr:service(\'sylius.context.customer\').getCustomer()']]]], ['_locale', 'number'], ['GET' => 0], null, false, true, null]],
        10046 => [[['_route' => 'sylius_shop_account_address_book_index', '_controller' => 'sylius.controller.address:indexAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/index.html.twig', 'paginate' => false, 'repository' => ['method' => 'findByCustomer', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']]]], ['_locale'], ['GET' => 0], null, true, false, null]],
        10158 => [[['_route' => 'sylius_shop_account_address_book_create', '_controller' => 'sylius.controller.address:createAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/create.html.twig', 'factory' => ['method' => 'createForCustomer', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_account_address_book_index', 'parameters' => []], 'flash' => 'sylius.customer.add_address']], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        10280 => [[['_route' => 'sylius_shop_account_address_book_update', '_controller' => 'sylius.controller.address:updateAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/update.html.twig', 'repository' => ['method' => 'findOneByCustomer', 'arguments' => ['$id', 'expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_account_address_book_index', 'parameters' => []]]], ['_locale', 'id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        10397 => [[['_route' => 'sylius_shop_account_address_book_delete', '_controller' => 'sylius.controller.address:deleteAction', '_sylius' => ['section' => 'shop_account', 'repository' => ['method' => 'findOneByCustomer', 'arguments' => ['$id', 'expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => 'sylius_shop_account_address_book_index']], ['_locale', 'id'], ['DELETE' => 0], null, false, true, null]],
        10531 => [[['_route' => 'sylius_shop_account_address_book_set_as_default', '_controller' => 'sylius.controller.customer:updateAction', '_sylius' => ['section' => 'shop_account', 'template' => '@SyliusShop/Account/AddressBook/_defaultAddressForm.html.twig', 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Customer\\CustomerDefaultAddressType', 'options' => ['customer' => 'expr:service(\'sylius.context.customer\').getCustomer()']], 'repository' => ['method' => 'find', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_account_address_book_index', 'parameters' => []], 'flash' => 'sylius.customer.set_address_as_default']], ['_locale', 'id'], ['GET' => 0, 'PATCH' => 1], null, false, false, null]],
        10625 => [[['_route' => 'sylius_shop_account_root', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController:redirectAction', 'route' => 'sylius_shop_account_dashboard', 'permanent' => true], ['_locale'], ['GET' => 0], null, true, false, null]],
        10729 => [[['_route' => 'sylius_shop_account_dashboard', '_controller' => 'sylius.controller.customer:showAction', '_sylius' => ['template' => '@SyliusShop/Account/dashboard.html.twig', 'repository' => ['method' => 'find', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']]]], ['_locale'], ['GET' => 0], null, false, false, null]],
        10836 => [[['_route' => 'sylius_shop_account_profile_update', '_controller' => 'sylius.controller.customer:updateAction', '_sylius' => ['template' => '@SyliusShop/Account/profileUpdate.html.twig', 'form' => 'Sylius\\Bundle\\CustomerBundle\\Form\\Type\\CustomerProfileType', 'repository' => ['method' => 'find', 'arguments' => ['expr:service(\'sylius.context.customer\').getCustomer()']], 'redirect' => ['route' => 'sylius_shop_account_profile_update', 'parameters' => []]]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        10947 => [[['_route' => 'sylius_shop_account_change_password', '_controller' => 'sylius.controller.shop_user:changePasswordAction', '_sylius' => ['template' => '@SyliusShop/Account/changePassword.html.twig', 'redirect' => 'sylius_shop_account_dashboard']], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        11059 => [[['_route' => 'sylius_shop_switch_currency', '_controller' => 'sylius.controller.shop.currency_switch:switchAction'], ['_locale', 'code'], ['GET' => 0], null, false, true, null]],
        11169 => [[['_route' => 'sylius_shop_switch_locale', '_controller' => 'sylius.controller.shop.locale_switch:switchAction'], ['_locale', 'code'], ['GET' => 0], null, false, true, null]],
        11209 => [[['_route' => 'payum_authorize_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\AuthorizeController::doAction'], ['payum_token'], null, null, false, true, null]],
        11235 => [[['_route' => 'payum_capture_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\CaptureController::doAction'], ['payum_token'], null, null, false, true, null]],
        11270 => [[['_route' => 'payum_notify_do_unsafe', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doUnsafeAction'], ['gateway'], null, null, false, true, null]],
        11288 => [[['_route' => 'payum_notify_do', '_controller' => 'Payum\\Bundle\\PayumBundle\\Controller\\NotifyController::doAction'], ['payum_token'], null, null, false, true, null]],
        11412 => [[['_route' => 'sylius_paypal_plugin_pay_with_paypal_form', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\PayWithPayPalFormAction'], ['_locale', 'orderToken', 'paymentId'], ['GET' => 0], null, false, true, null]],
        11531 => [[['_route' => 'sylius_paypal_plugin_create_paypal_order', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CreatePayPalOrderAction'], ['_locale', 'token'], ['POST' => 0], null, false, true, null]],
        11662 => [[['_route' => 'sylius_paypal_plugin_create_paypal_order_from_cart', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CreatePayPalOrderFromCartAction'], ['_locale', 'id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        11783 => [[['_route' => 'sylius_paypal_plugin_complete_paypal_order', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CompletePayPalOrderAction'], ['_locale', 'token'], ['POST' => 0], null, false, true, null]],
        11906 => [[['_route' => 'sylius_paypal_plugin_complete_paypal_payment', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CompletePayPalPaymentAction'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        12017 => [[['_route' => 'sylius_paypal_plugin_process_paypal_order', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\ProcessPayPalOrderAction'], ['_locale'], ['POST' => 0], null, true, false, null]],
        12127 => [[['_route' => 'sylius_paypal_plugin_update_paypal_order', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\UpdatePayPalOrderAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        12260 => [[['_route' => 'sylius_paypal_plugin_create_paypal_order_from_payment_page', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CreatePayPalOrderFromPaymentPageAction'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        12395 => [[['_route' => 'sylius_paypal_plugin_complete_paypal_order_from_payment_page', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CompletePayPalOrderFromPaymentPageAction'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        12529 => [[['_route' => 'sylius_paypal_plugin_create_paypal_order_from_product', '_controller' => 'sylius.controller.order_item:createFromProductDetailsAction', '_sylius' => ['factory' => ['method' => 'createForProduct', 'arguments' => ['expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']], 'form' => ['type' => 'Sylius\\Bundle\\CoreBundle\\Form\\Type\\Order\\AddToCartType', 'options' => ['product' => 'expr:notFoundOnNull(service(\'sylius.repository.product\').find($productId))']]]], ['_locale', 'productId'], ['POST' => 0], null, false, true, null]],
        12640 => [[['_route' => 'sylius_shop_checkout_select_payment', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['event' => 'payment', 'flash' => false, 'template' => '@SyliusShop/Checkout/selectPayment.html.twig', 'form' => 'Sylius\\PayPalPlugin\\Form\\Type\\SelectPaymentType', 'repository' => ['method' => 'findCartForSelectingPayment', 'arguments' => ['expr:service(\'sylius.context.cart\').getCart().getId()']], 'state_machine' => ['graph' => 'sylius_order_checkout', 'transition' => 'select_payment']]], ['_locale'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        12741 => [[['_route' => 'sylius_shop_order_show', '_controller' => 'sylius.controller.order:updateAction', '_sylius' => ['template' => '@SyliusShop/Order/show.html.twig', 'repository' => ['method' => 'findOneBy', 'arguments' => [['tokenValue' => '$tokenValue']]], 'form' => ['type' => 'Sylius\\PayPalPlugin\\Form\\Type\\SelectPaymentType', 'options' => ['validation_groups' => []]], 'redirect' => ['route' => 'sylius_shop_order_pay', 'parameters' => ['tokenValue' => 'resource.tokenValue']], 'flash' => false]], ['_locale', 'tokenValue'], ['GET' => 0, 'PUT' => 1], null, false, true, null]],
        12851 => [[['_route' => 'sylius_paypal_plugin_cancel_order', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CancelPayPalOrderAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        12963 => [[['_route' => 'sylius_paypal_plugin_cancel_payment', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CancelPayPalPaymentAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        13096 => [[['_route' => 'sylius_paypal_plugin_cancel_last_payment', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CancelLastPayPalPaymentAction'], ['_locale', 'token'], ['GET' => 0], null, false, false, null]],
        13218 => [[['_route' => 'sylius_paypal_plugin_cancel_checkout_payment', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\CancelPayPalCheckoutPaymentAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        13329 => [[['_route' => 'sylius_paypal_plugin_payment_error', '_controller' => 'Sylius\\PayPalPlugin\\Controller\\PayPalPaymentOnErrorAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
        13356 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        13404 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        13420 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        13442 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        13457 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        13469 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
