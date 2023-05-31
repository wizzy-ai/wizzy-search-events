# Wizzy_Events module for Magento2

Wizzy_Events is a boilerplate module that allows developers to override events and modify product data before synchronization by [Wizzy_Search](https://github.com/wizzy-ai/wizzy-search-magento-2).

Developers can listen to specific events triggered by Wizzy_Search and make necessary modifications to the product data without modifying the core files of the Wizzy_Search module.

This ensures that future upgrades and updates to the Wizzy_Search module can be easily applied without the risk of losing customizations.

# List of the Events defined in the Wizzy_Events module

1. wizzy_after_products_mapped
2. wizzy_before_product_skip_check
3. wizzy_after_product_categories_generated

# Short Discription for the Events

1. wizzy_after_products_mapped:-

The wizzy_after_products_mapped event is a crucial event provided by the Wizzy_Search module.It allows developers to modify the mapped data of products in the Wizzy_Events module after the mapping process.

By listening to this event, developers can access and manipulate the mapped data of products, enabling them to apply custom logic or make necessary adjustments to ensure accurate and relevant search results. This event provides a convenient hook to fine-tune the product data before it is synchronized with the Wizzy_Search module.

Use this file for modifying the product data: Wizzy/Events/Observer/AfterProductMapped/Products

2. wizzy_before_product_skip_check:-

The 'wizzy_before_product_skip_check' event is a crucial event provided by the Wizzy_Search module. It allows developers to modify the product data before the product is skipped from the synchronization process in the Wizzy_Events module.

By listening to this event, developers can access and modify the product data, preventing the product from being skipped during the synchronization process. This event provides an opportunity to apply custom logic or make necessary adjustments to ensure that all relevant products are included in the sync, even if they would have been skipped based on default criteria.

This flexibility ensures that important products are not inadvertently excluded from the synchronization, enabling accurate and comprehensive search results.

Use this file for modifying the product data: Wizzy/Events/Observer/BeforeProductSkip/Products

3. wizzy_after_product_categories_generated:-

The 'wizzy_after_product_categories_generated' event is a significant event provided by the Wizzy_Search module. It allows developers to modify the category data of products in the Wizzy_Events module after the product categories are generated.

By listening to this event, developers can access and modify the category data associated with products, enabling them to apply custom logic or make necessary adjustments to enhance the accuracy and relevance of search results. This event provides a convenient hook to fine-tune the product category data before it is synchronized with the Wizzy_Search module.

Use this file for modifying the product data: Wizzy/Events/Observer/ProductCategoriesGenerated/Products

# Instllation

1. Download the module from [here](https://github.com/wizzy-ai/wizzy-search-events.git).

2. Paste the Events folder from wizzy-search-events/Wizzy/Events Inside the app/code/Wizzy directory.

3. Run the following commands from the root directory of your Magento 2 
 
- php bin/magento module:enable Wizzy_Search
- php bin/magento setup:upgrade
- php bin/magento setup:di:compile
- php bin/magento cache:flush

# Found Bugs? Need Help? Have Questions? 

If you’ve found any bug in the module, you can [create an issue](https://github.com/wizzy-ai/wizzy-search-events.git/issues) in this Repository, and our team will look into it as quickly as possible.

You can also contact us on [team@wizzy.ai](mailto:team@wizzy.ai)