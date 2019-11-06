<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //address
        Schema::table('addresses', function(Blueprint $table) {
			$table->foreign('country_id')->references('id')->on('countries')
						->onDelete('cascade')
						->onUpdate('cascade');
        });

        Schema::table('states', function(Blueprint $table) {
			$table->foreign('country_id')->references('id')->on('countries')
						->onDelete('cascade')
						->onUpdate('cascade');
        });

        Schema::table('cities', function(Blueprint $table) {
			$table->foreign('state_id')->references('id')->on('states')
						->onDelete('cascade')
						->onUpdate('cascade');
        });

        Schema::table('zones', function(Blueprint $table) {
			$table->foreign('state_id')->references('id')->on('states')
						->onDelete('cascade')
                        ->onUpdate('cascade');

            $table->foreign('geo_id')->references('id')->on('geos')
						->onDelete('cascade')
                        ->onUpdate('cascade');

            $table->foreign('country_id')->references('id')->on('countries')
						->onDelete('cascade')
						->onUpdate('cascade');
        });

        Schema::table('locations', function(Blueprint $table) {
			    $table->foreign('address_id')->references('id')->on('addresses')
						->onDelete('cascade')
                        ->onUpdate('cascade');
                $table->foreign('parent_id')->references('id')->on('locations')
						->onDelete('cascade')
						->onUpdate('cascade');
        });

        //affiliate
        Schema::table('affiliates', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('address_id')->references('id')->on('addresses')
						->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('newsletter_id')->references('id')->on('newsletters')
						->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('commission_id')->references('id')->on('commissions')
						->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods')
						->onDelete('cascade')
						->onUpdate('cascade');


        });

        Schema::table('affiliate_payments', function(Blueprint $table) {
			$table->foreign('affiliate_id')->references('id')->on('affiliates')
						->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('address_id')->references('id')->on('addresses')
						->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('affiliate_payment_status_id')->references('id')->on('affiliate_payment_statuses')
						->onDelete('cascade')
						->onUpdate('cascade');

        });

        Schema::table('affiliate_sales', function(Blueprint $table) {
			$table->foreign('affiliate_id')->references('id')->on('affiliates')
						->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('order_id')->references('id')->on('orders')
						->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('payment_id')->references('id')->on('affiliate_payments')
						->onDelete('cascade')
						->onUpdate('cascade');

        });

        Schema::table('affiliate_payment_histories', function(Blueprint $table) {
			$table->foreign('payment_id')->references('id')->on('affiliate_payments')
						->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('history_id')->references('id')->on('histories')
						->onDelete('cascade')
						->onUpdate('cascade');
        });

        Schema::table('affiliate_news', function(Blueprint $table) {
			$table->foreign('news_id')->references('id')->on('news')
						->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('affiliate_id')->references('id')->on('affiliates')
						->onDelete('cascade')
						->onUpdate('cascade');
        });

        Schema::table('affiliate_banners', function(Blueprint $table) {
			$table->foreign('banner_id')->references('id')->on('banners')
						->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('affiliate_id')->references('id')->on('affiliates')
						->onDelete('cascade')
						->onUpdate('cascade');
        });

        Schema::table('affiliate_banner_histories', function(Blueprint $table) {
			$table->foreign('banner_history_id')->references('id')->on('banner_histories')
						->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('affiliate_id')->references('id')->on('affiliates')
						->onDelete('cascade')
						->onUpdate('cascade');
        });


        Schema::table('affiliate_clicks', function(Blueprint $table) {
			$table->foreign('banner_id')->references('id')->on('banners')
						->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('product_id')->references('id')->on('products')
						->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('affiliate_id')->references('id')->on('affiliates')
						->onDelete('cascade')
						->onUpdate('cascade');
        });
        //Article
        Schema::table('articles', function(Blueprint $table) {
			$table->foreign('tag_id')->references('id')->on('tags')
						->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('meta_id')->references('id')->on('metadatas')
						->onDelete('cascade')
                        ->onUpdate('cascade');

        });

        Schema::table('article_product', function(Blueprint $table) {
			$table->foreign('article_id')->references('id')->on('articles')
						->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('product_id')->references('id')->on('products')
						->onDelete('cascade')
                        ->onUpdate('cascade');

        });

        Schema::table('article_relateds', function(Blueprint $table) {
			$table->foreign('article_id')->references('id')->on('articles')
						->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('related_id')->references('id')->on('articles')
						->onDelete('cascade')
                        ->onUpdate('cascade');

        });

        Schema::table('article_store', function(Blueprint $table) {
			$table->foreign('article_id')->references('id')->on('articles')
						->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('store_id')->references('id')->on('companies')
						->onDelete('cascade')
                        ->onUpdate('cascade');

        });

        Schema::table('article_topic', function(Blueprint $table) {
			$table->foreign('article_id')->references('id')->on('articles')
						->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('topic_id')->references('id')->on('categories')
						->onDelete('cascade')
                        ->onUpdate('cascade');

        });

        Schema::table('comments', function(Blueprint $table) {
			$table->foreign('article_id')->references('id')->on('articles')
						->onDelete('cascade')
                        ->onUpdate('cascade');
            $table->foreign('reply_id')->references('id')->on('comments')
						->onDelete('cascade')
                        ->onUpdate('cascade');

            $table->foreign('customer_id')->references('id')->on('customers')
						->onDelete('cascade')
                        ->onUpdate('cascade');
           $table->foreign('author_id')->references('id')->on('users')
						->onDelete('cascade')
                        ->onUpdate('cascade');

        });
        //attribute

        Schema::table('attributes', function(Blueprint $table) {
			$table->foreign('attribute_group_id')->references('id')->on('attribute_groups')
						->onDelete('cascade')
                        ->onUpdate('cascade');


        });

       //auction
       Schema::table('auctions', function(Blueprint $table) {
        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });
       Schema::table('bids', function(Blueprint $table) {
        $table->foreign('auction_id')->references('id')->on('auctions')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('customer_id')->references('id')->on('customers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });
       //banner
       Schema::table('banners', function(Blueprint $table) {
        $table->foreign('banner_group_id')->references('id')->on('banner_groups')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('banner_histories', function(Blueprint $table) {
        $table->foreign('banner_id')->references('id')->on('banners')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('images', function(Blueprint $table) {
        $table->foreign('banner_id')->references('id')->on('banners')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });
       //brand
       Schema::table('brand_store', function(Blueprint $table) {
        $table->foreign('brand_id')->references('id')->on('brands')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('store_id')->references('id')->on('companies')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });
       //categories
       Schema::table('categories', function(Blueprint $table) {
        $table->foreign('parent_id')->references('id')->on('categories')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('meta_id')->references('id')->on('metadatas')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       //companies
       Schema::table('companies', function(Blueprint $table) {
        $table->foreign('address_id')->references('id')->on('addresses')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('setting_id')->references('id')->on('settings')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       //coupon
       Schema::table('coupons', function(Blueprint $table) {
        $table->foreign('type_id')->references('id')->on('types')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('setting_id')->references('id')->on('settings')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });
       Schema::table('coupon_histories', function(Blueprint $table) {
        $table->foreign('coupon_id')->references('id')->on('coupons')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('order_id')->references('id')->on('orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('customer_id')->references('id')->on('customers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('coupon_redeems', function(Blueprint $table) {
        $table->foreign('coupon_id')->references('id')->on('coupons')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('order_id')->references('id')->on('orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('customer_id')->references('id')->on('customers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('coupon_tracks', function(Blueprint $table) {
        $table->foreign('coupon_id')->references('id')->on('coupons')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

        $table->foreign('customer_id')->references('id')->on('customers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });
       Schema::table('coupon_store', function(Blueprint $table) {
        $table->foreign('coupon_id')->references('id')->on('coupons')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

        $table->foreign('store_id')->references('id')->on('companies')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('coupon_restrict', function(Blueprint $table) {
        $table->foreign('coupon_id')->references('id')->on('coupons')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

        $table->foreign('restrict_id')->references('id')->on('restricts')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('restricts', function(Blueprint $table) {
        $table->foreign('customer_group_id')->references('id')->on('customer_groups')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('category_id')->references('id')->on('categories')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('setting_id')->references('id')->on('settings')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });
       //customer
       Schema::table('customers', function(Blueprint $table) {
        $table->foreign('customer_group_id')->references('id')->on('customer_groups')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('address_id')->references('id')->on('addresses')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('store_id')->references('id')->on('companies')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('payment_method_id')->references('id')->on('payment_methods')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('customer_baskets', function(Blueprint $table) {
        $table->foreign('customer_id')->references('id')->on('customers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');



       });
       Schema::table('customer_basket_attributes', function(Blueprint $table) {
        $table->foreign('customer_basket_id')->references('id')->on('customer_baskets')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('option_id')->references('id')->on('options')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('option_value_id')->references('id')->on('option_values')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');



       });

       Schema::table('customer_fields', function(Blueprint $table) {
        $table->foreign('customer_id')->references('id')->on('customers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('custom_field_value_id')->references('id')->on('custom_field_values')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('custom_field_id')->references('id')->on('custom_fields')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');



       });

       Schema::table('customer_groups', function(Blueprint $table) {
        $table->foreign('setting_id')->references('id')->on('settings')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('customer_histories', function(Blueprint $table) {
        $table->foreign('customer_id')->references('id')->on('customers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('history_id')->references('id')->on('histories')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
       });

       Schema::table('customer_ips', function(Blueprint $table) {
        $table->foreign('customer_id')->references('id')->on('customers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
       });

       Schema::table('customer_onlines', function(Blueprint $table) {
        $table->foreign('customer_id')->references('id')->on('customers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
       });

       Schema::table('customer_bans', function(Blueprint $table) {
        $table->foreign('customer_id')->references('id')->on('customers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
       });

       //contracts
       Schema::table('contracts', function(Blueprint $table) {
        $table->foreign('period_id')->references('id')->on('periods')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
       });

       Schema::table('contract_plans', function(Blueprint $table) {
        $table->foreign('contract_id')->references('id')->on('contract_plans')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
       });

       //custom-field
       Schema::table('custom_field_values', function(Blueprint $table) {
        $table->foreign('custom_field_id')->references('id')->on('custom_fields')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
       });

       Schema::table('custom_field_customer_group', function(Blueprint $table) {
        $table->foreign('custom_field_id')->references('id')->on('custom_fields')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('customer_group_id')->references('id')->on('customer_groups')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       //combo
       Schema::table('combos', function(Blueprint $table) {
        $table->foreign('discount_id')->references('id')->on('discounts')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('subproduct_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('combo_product', function(Blueprint $table) {
        $table->foreign('combo_id')->references('id')->on('combos')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('combo_category', function(Blueprint $table) {
        $table->foreign('combo_id')->references('id')->on('combos')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('category_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       //download
       Schema::table('downloads', function(Blueprint $table) {
        $table->foreign('download_group_id')->references('id')->on('download_groups')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       //drop delivery  fr migration
       //faq
       Schema::table('faqs', function(Blueprint $table) {
        $table->foreign('faq_group_id')->references('id')->on('faq_groups')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('tag_id')->references('id')->on('tags')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('meta_id')->references('id')->on('metadatas')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');



       });
       Schema::table('faq_store', function(Blueprint $table) {
        $table->foreign('faq_id')->references('id')->on('faqs')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('store_id')->references('id')->on('companies')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('faq_groups', function(Blueprint $table) {
        $table->foreign('parent_id')->references('id')->on('faq_groups')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });
       //variation for product feature
       Schema::table('features', function(Blueprint $table) {
        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });
       //feedbacks
       Schema::table('feedbacks', function(Blueprint $table) {
        $table->foreign('store_id')->references('id')->on('companies')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });
       //histories
       Schema::table('histories', function(Blueprint $table) {
        $table->foreign('type_id')->references('id')->on('types')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('types', function(Blueprint $table) {
        $table->foreign('parent_id')->references('id')->on('types')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       //shipping insurance
       Schema::table('insurances', function(Blueprint $table) {
        $table->foreign('shipping_id')->references('id')->on('shippings')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('order_id')->references('id')->on('orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('insurance_rate_id')->references('id')->on('insurance_rates')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('insurance_rule_id')->references('id')->on('insurance_rules')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('insurance_rates', function(Blueprint $table) {
        $table->foreign('geo_id')->references('id')->on('geos')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('insurance_taxes', function(Blueprint $table) {
        $table->foreign('insurance_id')->references('id')->on('insurances')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('tax_rate_id')->references('id')->on('tax_rates')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       //invoice drop
       //loyalties
       Schema::table('loyalties', function(Blueprint $table) {
        $table->foreign('customer_id')->references('id')->on('customers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('customer_group_id')->references('id')->on('customer_groups')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('store_id')->references('id')->on('companies')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       Schema::table('loyalty_groups', function(Blueprint $table) {
        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('setting_id')->references('id')->on('settings')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });
       Schema::table('loyalty_statuses', function(Blueprint $table) {
        $table->foreign('loyalty_id')->references('id')->on('loyalties')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('order_id')->references('id')->on('orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('customer_id')->references('id')->on('customers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });
       //news
       Schema::table('news', function(Blueprint $table) {
        $table->foreign('tag_id')->references('id')->on('tags')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('meta_id')->references('id')->on('metadatas')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('store_id')->references('id')->on('companies')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       //newsletter
       Schema::table('newsletters', function(Blueprint $table) {
        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

        $table->foreign('store_id')->references('id')->on('companies')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('subscribers', function(Blueprint $table) {
        $table->foreign('customer_id')->references('id')->on('customers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('campaigns', function(Blueprint $table) {
        $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('subscriber_id')->references('id')->on('subscribers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');




       });
       //option
       Schema::table('options', function(Blueprint $table) {
        $table->foreign('type_id')->references('id')->on('types')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('option_values', function(Blueprint $table) {
        $table->foreign('option_id')->references('id')->on('options')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });
       //order
       Schema::table('orders', function(Blueprint $table) {
        $table->foreign('store_id')->references('id')->on('companies')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('customer_id')->references('id')->on('customers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('address_id')->references('id')->on('addresses')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('customer_group_id')->references('id')->on('customer_groups')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('status_id')->references('id')->on('statuses')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('affiliate_id')->references('id')->on('affiliates')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('currency_id')->references('id')->on('currencies')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('payment_method_id')->references('id')->on('payment_methods')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });
       Schema::table('order_exchanges', function(Blueprint $table) {
        $table->foreign('order_id')->references('id')->on('orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('rma_id')->references('id')->on('rmas')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('product_exchange_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');



       });


       Schema::table('order_downloads', function(Blueprint $table) {
        $table->foreign('order_id')->references('id')->on('orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('download_id')->references('id')->on('downloads')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');




       });

       Schema::table('order_history', function(Blueprint $table) {
        $table->foreign('order_id')->references('id')->on('orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('history_id')->references('id')->on('histories')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       Schema::table('order_options', function(Blueprint $table) {
        $table->foreign('order_id')->references('id')->on('orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('order_product_id')->references('id')->on('order_products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('product_option_id')->references('id')->on('product_options')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('product_option_value_id')->references('id')->on('product_option_values')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });
       Schema::table('order_products', function(Blueprint $table) {
        $table->foreign('order_id')->references('id')->on('orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');



       });
       Schema::table('order_recurrences', function(Blueprint $table) {
        $table->foreign('order_id')->references('id')->on('orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('profile_id')->references('id')->on('profiles')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       Schema::table('order_recurrence_transactions', function(Blueprint $table) {
        $table->foreign('order_recurrence_id')->references('id')->on('order_recurrences')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
       });

       Schema::table('order_surcharges', function(Blueprint $table) {
        $table->foreign('order_id')->references('id')->on('orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
       });

       Schema::table('order_voucher', function(Blueprint $table) {
        $table->foreign('order_id')->references('id')->on('orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('voucher_id')->references('id')->on('vouchers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       Schema::table('order_custom_fields', function(Blueprint $table) {
        $table->foreign('order_id')->references('id')->on('orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('custom_field_id')->references('id')->on('custom_fields')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('custom_field_value_id')->references('id')->on('custom_field_values')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('order_shippings', function(Blueprint $table) {
        $table->foreign('order_id')->references('id')->on('orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('supplier_id')->references('id')->on('suppliers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('shipping_id')->references('id')->on('shippings')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('order_types', function(Blueprint $table) {
        $table->foreign('order_id')->references('id')->on('orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       Schema::table('order_frauds', function(Blueprint $table) {
        $table->foreign('order_id')->references('id')->on('orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('customer_id')->references('id')->on('customers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       //page
       Schema::table('pages', function(Blueprint $table) {
        $table->foreign('meta_id')->references('id')->on('metadatas')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('page_group_id')->references('id')->on('page_groups')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('page_groups', function(Blueprint $table) {
        $table->foreign('parent_id')->references('id')->on('page_groups')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('customer_group_id')->references('id')->on('customer_groups')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('page_store', function(Blueprint $table) {
        $table->foreign('store_id')->references('id')->on('companies')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('page_id')->references('id')->on('pages')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       //product
       Schema::table('products', function(Blueprint $table) {
        $table->foreign('length_id')->references('id')->on('lengths')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('weight_id')->references('id')->on('weights')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('brand_id')->references('id')->on('brands')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('tax_id')->references('id')->on('taxes')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('status_id')->references('id')->on('statuses')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('tag_id')->references('id')->on('tags')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('meta_id')->references('id')->on('metadatas')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('category_id')->references('id')->on('categories')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });
       Schema::table('product_groups', function(Blueprint $table) {
        $table->foreign('setting_id')->references('id')->on('settings')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('customer_group_id')->references('id')->on('customer_groups')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('product_store', function(Blueprint $table) {
        $table->foreign('store_id')->references('id')->on('companies')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('product_shippings', function(Blueprint $table) {
        $table->foreign('method_id')->references('id')->on('shippings')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('product_relateds', function(Blueprint $table) {
        $table->foreign('related_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });


       Schema::table('product_profiles', function(Blueprint $table) {
        $table->foreign('profile_id')->references('id')->on('profiles')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('store_id')->references('id')->on('companies')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('customer_group_id')->references('id')->on('customer_groups')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('product_options', function(Blueprint $table) {
        $table->foreign('option_id')->references('id')->on('options')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('product_option_values', function(Blueprint $table) {
        $table->foreign('product_option_id')->references('id')->on('product_options')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('option_id')->references('id')->on('options')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('option_value_id')->references('id')->on('option_values')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('product_location', function(Blueprint $table) {
        $table->foreign('location_id')->references('id')->on('locations')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('product_images', function(Blueprint $table) {
        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('product_discounts', function(Blueprint $table) {
        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('discount_id')->references('id')->on('discounts')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('customer_group_id')->references('id')->on('customer_groups')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');




       });

       Schema::table('discounts', function(Blueprint $table) {
        $table->foreign('type_id')->references('id')->on('types')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('setting_id')->references('id')->on('settings')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('product_colours', function(Blueprint $table) {
        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('surface_id')->references('id')->on('surfaces')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('product_attributes', function(Blueprint $table) {
        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('attribute_id')->references('id')->on('attributes')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('price_groups', function(Blueprint $table) {
        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('setting_id')->references('id')->on('settings')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('surfaces', function(Blueprint $table) {
        $table->foreign('colour_id')->references('id')->on('colours')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       //purchase
       Schema::table('purchases', function(Blueprint $table) {
        $table->foreign('brand_id')->references('id')->on('brands')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('supplier_id')->references('id')->on('suppliers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('tax_id')->references('id')->on('taxes')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('length_id')->references('id')->on('lengths')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('weight_id')->references('id')->on('weights')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       Schema::table('purchase_attributes', function(Blueprint $table) {
        $table->foreign('purchase_id')->references('id')->on('purchases')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('attribute_id')->references('id')->on('attributes')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('purchase_returns', function(Blueprint $table) {
        $table->foreign('purchase_id')->references('id')->on('purchases')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('supplier_id')->references('id')->on('suppliers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('stock_receives', function(Blueprint $table) {
        $table->foreign('purchase_id')->references('id')->on('purchases')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('supplier_id')->references('id')->on('suppliers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('stock_id')->references('id')->on('stocks')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });
       //payment
       Schema::table('payments', function(Blueprint $table) {
        $table->foreign('store_id')->references('id')->on('companies')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('payment_method_id')->references('id')->on('payment_methods')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('supplier_id')->references('id')->on('suppliers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('currency_id')->references('id')->on('currencies')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('payment_methods', function(Blueprint $table) {
        $table->foreign('module_id')->references('id')->on('modules')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('merchant_id')->references('id')->on('merchants')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('payment_settings', function(Blueprint $table) {
        $table->foreign('payment_method_id')->references('id')->on('payment_methods')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('setting_id')->references('id')->on('settings')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('merchants', function(Blueprint $table) {
        $table->foreign('supplier_id')->references('id')->on('suppliers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       //quotation
       Schema::table('quotations', function(Blueprint $table) {
        $table->foreign('customer_id')->references('id')->on('customers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('store_id')->references('id')->on('companies')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('tax_id')->references('id')->on('taxes')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('requote_id')->references('id')->on('quotations')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('currency_id')->references('id')->on('currencies')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       Schema::table('quotation_history', function(Blueprint $table) {

        $table->foreign('quote_id')->references('id')->on('quotations')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('history_id')->references('id')->on('histories')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('quotation_products', function(Blueprint $table) {

        $table->foreign('quote_id')->references('id')->on('quotations')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('quotation_status', function(Blueprint $table) {

        $table->foreign('quote_id')->references('id')->on('quotations')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('status_id')->references('id')->on('statuses')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       //rma
       Schema::table('rmas', function(Blueprint $table) {

        $table->foreign('customer_id')->references('id')->on('customers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('status_id')->references('id')->on('statuses')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('address_id')->references('id')->on('addresses')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('rma_reason_id')->references('id')->on('rma_reasons')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('rma_action_id')->references('id')->on('rma_actions')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('rma_products', function(Blueprint $table) {

        $table->foreign('rma_id')->references('id')->on('rmas')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('order_id')->references('id')->on('orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('rma_histories', function(Blueprint $table) {

        $table->foreign('rma_id')->references('id')->on('rmas')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('history_id')->references('id')->on('histories')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('refunds', function(Blueprint $table) {

        $table->foreign('rma_id')->references('id')->on('rmas')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('refund_method_id')->references('id')->on('payment_methods')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       //review
       Schema::table('reviews', function(Blueprint $table) {

        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('customer_id')->references('id')->on('customers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('rating_types', function(Blueprint $table) {

        $table->foreign('category_id')->references('id')->on('categories')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('rating_summaries', function(Blueprint $table) {

        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

        $table->foreign('rating_type_id')->references('id')->on('rating_types')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('ratings', function(Blueprint $table) {

        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

        $table->foreign('rating_type_id')->references('id')->on('rating_types')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

        $table->foreign('review_id')->references('id')->on('reviews')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('customer_id')->references('id')->on('customers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       //supplier
       Schema::table('suppliers', function(Blueprint $table) {

        $table->foreign('address_id')->references('id')->on('addresses')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

        $table->foreign('store_id')->references('id')->on('companies')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

        $table->foreign('supplier_group_id')->references('id')->on('supplier_groups')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });
       Schema::table('supplier_groups', function(Blueprint $table) {

        $table->foreign('payment_method_id')->references('id')->on('payment_methods')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('supplier_histories', function(Blueprint $table) {

        $table->foreign('supplier_id')->references('id')->on('suppliers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

        $table->foreign('history_id')->references('id')->on('histories')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('supplier_setting', function(Blueprint $table) {

        $table->foreign('supplier_id')->references('id')->on('suppliers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

        $table->foreign('setting_id')->references('id')->on('settings')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       //sale->upsell or crosssales
       Schema::table('sale_product', function(Blueprint $table) {

        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

        $table->foreign('sale_id')->references('id')->on('sales')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('sale_store', function(Blueprint $table) {

        $table->foreign('store_id')->references('id')->on('companies')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

        $table->foreign('sale_id')->references('id')->on('sales')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });
       //services
       Schema::table('services', function(Blueprint $table) {

        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

        $table->foreign('customer_id')->references('id')->on('customers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('address_id')->references('id')->on('addresses')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('brand_id')->references('id')->on('brands')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('tax_rate_id')->references('id')->on('tax_rates')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('status_id')->references('id')->on('statuses')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('service_actions', function(Blueprint $table) {

        $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

        $table->foreign('service_id')->references('id')->on('services')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('priority_id')->references('id')->on('priorities')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');



       });
       Schema::table('service_category', function(Blueprint $table) {

        $table->foreign('category_id')->references('id')->on('categories')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

        $table->foreign('service_id')->references('id')->on('services')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');



       });
       Schema::table('service_histories', function(Blueprint $table) {

        $table->foreign('history_id')->references('id')->on('histories')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

        $table->foreign('service_id')->references('id')->on('services')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');



       });

       Schema::table('service_options', function(Blueprint $table) {

        $table->foreign('service_id')->references('id')->on('services')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('service_parts', function(Blueprint $table) {

        $table->foreign('service_id')->references('id')->on('services')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('supplier_id')->references('id')->on('suppliers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });


       Schema::table('service_shippings', function(Blueprint $table) {

        $table->foreign('service_id')->references('id')->on('services')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('package_id')->references('id')->on('packages')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });
       Schema::table('service_types', function(Blueprint $table) {

        $table->foreign('service_id')->references('id')->on('services')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('contract_id')->references('id')->on('contracts')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });
       Schema::table('service_warranty', function(Blueprint $table) {

        $table->foreign('service_id')->references('id')->on('services')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('warranty_id')->references('id')->on('warranties')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });
       Schema::table('order_service', function(Blueprint $table) {

        $table->foreign('service_id')->references('id')->on('services')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('order_id')->references('id')->on('orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });
       //shipping
       Schema::table('shippings', function(Blueprint $table) {

        $table->foreign('supplier_id')->references('id')->on('suppliers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('module_id')->references('id')->on('modules')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('shipping_settings', function(Blueprint $table) {

        $table->foreign('shipping_id')->references('id')->on('shippings')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('setting_id')->references('id')->on('settings')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('shipping_markups', function(Blueprint $table) {

        $table->foreign('shipping_id')->references('id')->on('shippings')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('state_id')->references('id')->on('states')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('shipping_rates', function(Blueprint $table) {

        $table->foreign('shipping_id')->references('id')->on('shippings')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('supplier_id')->references('id')->on('suppliers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('weight_id')->references('id')->on('weights')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('length_id')->references('id')->on('lengths')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('geo_id')->references('id')->on('geos')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('surcharge_id')->references('id')->on('surcharges')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });

       Schema::table('shipping_tax', function(Blueprint $table) {

        $table->foreign('shipping_id')->references('id')->on('shippings')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('tax_rate_id')->references('id')->on('tax_rates')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('packages', function(Blueprint $table) {

        $table->foreign('order_id')->references('id')->on('orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       //setting
       Schema::table('settings', function(Blueprint $table) {

        $table->foreign('setting_group_id')->references('id')->on('setting_groups')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       //special
       Schema::table('specials', function(Blueprint $table) {

        $table->foreign('customer_group_id')->references('id')->on('customer_groups')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       //tag
       Schema::table('tags', function(Blueprint $table) {

        $table->foreign('tag_group_id')->references('id')->on('tag_groups')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       //taxes
       Schema::table('tax_rates', function(Blueprint $table) {

        $table->foreign('customer_group_id')->references('id')->on('customer_groups')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       Schema::table('tax_rules', function(Blueprint $table) {

        $table->foreign('tax_id')->references('id')->on('taxes')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('tax_rate_id')->references('id')->on('tax_rates')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       //total
       Schema::table('order_total', function(Blueprint $table) {

        $table->foreign('total_id')->references('id')->on('totals')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('order_id')->references('id')->on('orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('rma_total', function(Blueprint $table) {

        $table->foreign('total_id')->references('id')->on('totals')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('rma_id')->references('id')->on('rmas')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       Schema::table('service_total', function(Blueprint $table) {

        $table->foreign('total_id')->references('id')->on('totals')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('service_id')->references('id')->on('services')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       //users
       Schema::table('permission_role', function(Blueprint $table) {

        $table->foreign('permission_id')->references('id')->on('permissions')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('role_id')->references('id')->on('roles')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       Schema::table('permission_user', function(Blueprint $table) {

        $table->foreign('permission_id')->references('id')->on('permissions')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('role_user', function(Blueprint $table) {

        $table->foreign('role_id')->references('id')->on('roles')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('confirmations', function(Blueprint $table) {
        $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('securities', function(Blueprint $table) {
        $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('socials', function(Blueprint $table) {
        $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
       //voucher
       Schema::table('vouchers', function(Blueprint $table) {
        $table->foreign('theme_id')->references('id')->on('voucher_contents')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('store_id')->references('id')->on('companies')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('voucher_histories', function(Blueprint $table) {
        $table->foreign('voucher_id')->references('id')->on('vouchers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('order_id')->references('id')->on('orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       //wishlist
       Schema::table('wishlists', function(Blueprint $table) {
        $table->foreign('customer_id')->references('id')->on('customers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('wishlist_options', function(Blueprint $table) {
        $table->foreign('wishlist_id')->references('id')->on('wishlists')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('option_id')->references('id')->on('options')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('option_value_id')->references('id')->on('option_values')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


       });
       //warranty
       Schema::table('warranties', function(Blueprint $table) {
        $table->foreign('type_id')->references('id')->on('types')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('warranty_orders', function(Blueprint $table) {
        $table->foreign('order_id')->references('id')->on('orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });

       Schema::table('warranty_products', function(Blueprint $table) {
        $table->foreign('warranty_id')->references('id')->on('warranties')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('category_id')->references('id')->on('categories')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

       });
















    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       //address

        Schema::table('addresses', function(Blueprint $table) {
			$table->dropForeign('addresses_country_id_foreign');
        });

        Schema::table('states', function(Blueprint $table) {
			$table->dropForeign('states_country_id_foreign');
        });

        Schema::table('cities', function(Blueprint $table) {
			$table->dropForeign('cities_state_id_foreign');
        });

        Schema::table('zones', function(Blueprint $table) {
			$table->dropForeign('zones_state_id_foreign');
			$table->dropForeign('zones_geo_id_foreign');
			$table->dropForeign('zones_country_id_foreign');
        });
        Schema::table('locations', function(Blueprint $table) {
            $table->dropForeign('locations_address_id_foreign');
            $table->dropForeign('locations_parent_id_foreign');
        });

         //affiliate
         Schema::table('affiliates', function(Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['address_id']);
            $table->dropForeign(['newsletter_id']);
            $table->dropForeign(['payment_method_id']);
            $table->dropForeign(['commission_id']);

        });

        Schema::table('affiliate_payments', function(Blueprint $table) {
            $table->dropForeign(['affiliate_id']);
            $table->dropForeign(['affiliate_payment_status_id']);
            $table->dropForeign(['address_id']);


        });

        Schema::table('affiliate_sales', function(Blueprint $table) {
			$table->dropForeign(['affiliate_id']);
            $table->dropForeign(['order_id']);
            $table->dropForeign(['payment_id']);


        });

        Schema::table('affiliate_payment_histories', function(Blueprint $table) {
            $table->dropForeign(['payment_id']);
            $table->dropForeign(['history_id']);


        });

        Schema::table('affiliate_news', function(Blueprint $table) {
		    $table->dropForeign(['affiliate_id']);
            $table->dropForeign(['news_id']);
        });

        Schema::table('affiliate_banners', function(Blueprint $table) {
            $table->dropForeign(['affiliate_id']);
            $table->dropForeign(['banner_id']);


        });

        Schema::table('affiliate_banner_histories', function(Blueprint $table) {
            $table->dropForeign(['affiliate_id']);
            $table->dropForeign(['banner_history_id']);


		});



        Schema::table('affiliate_clicks', function(Blueprint $table) {
            $table->dropForeign(['affiliate_id']);
            $table->dropForeign(['banner_id']);
            $table->dropForeign(['product_id']);


        });

        //Article
        Schema::table('articles', function(Blueprint $table) {
            $table->dropForeign(['tag_id']);
            $table->dropForeign(['meta_id']);

        });

        Schema::table('article_product', function(Blueprint $table) {
            $table->dropForeign(['article_id']);
            $table->dropForeign(['product_id']);


        });

        Schema::table('article_relateds', function(Blueprint $table) {
            $table->dropForeign(['article_id']);
            $table->dropForeign(['related_id']);

        });

        Schema::table('article_store', function(Blueprint $table) {
            $table->dropForeign(['article_id']);
            $table->dropForeign(['store_id']);


        });

        Schema::table('article_topic', function(Blueprint $table) {
            $table->dropForeign(['article_id']);
            $table->dropForeign(['topic_id']);


        });

        Schema::table('comments', function(Blueprint $table) {
            $table->dropForeign(['article_id']);
            $table->dropForeign(['reply_id']);
            $table->dropForeign(['customer_id']);
            $table->dropForeign(['author_id']);

        });

          //attribute

          Schema::table('attributes', function(Blueprint $table) {
			 $table->dropForeign(['attribute_group_id']);

        });

        //auction
       Schema::table('auctions', function(Blueprint $table) {
            $table->dropForeign(['product_id']);


       });
       Schema::table('bids', function(Blueprint $table) {
            $table->dropForeign(['auction_id']);
            $table->dropForeign(['customer_id']);

       });

       //banner
       Schema::table('banners', function(Blueprint $table) {
               $table->dropForeign(['banner_group_id']);


       });

       Schema::table('banner_histories', function(Blueprint $table) {
                 $table->dropForeign(['banner_id']);


       });

       Schema::table('images', function(Blueprint $table) {
                $table->dropForeign(['banner_id']);
                $table->dropForeign(['product_id']);

       });

       //brand
       Schema::table('brand_store', function(Blueprint $table) {
                $table->dropForeign(['brand_id']);
                $table->dropForeign(['store_id']);
       });

       //categories
       Schema::table('categories', function(Blueprint $table) {
            $table->dropForeign(['parent_id']);
            $table->dropForeign(['meta_id']);

       });

       //companies
       Schema::table('companies', function(Blueprint $table) {
                $table->dropForeign(['address_id']);
                $table->dropForeign(['setting_id']);


       });

       //coupon
       Schema::table('coupons', function(Blueprint $table) {
        $table->dropForeign(['type_id']);
        $table->dropForeign(['setting_id']);



       });
       Schema::table('coupon_histories', function(Blueprint $table) {
        $table->dropForeign(['coupon_id']);
        $table->dropForeign(['order_id']);
        $table->dropForeign(['customer_id']);

       });

       Schema::table('coupon_redeems', function(Blueprint $table) {
        $table->dropForeign(['coupon_id']);
        $table->dropForeign(['order_id']);
        $table->dropForeign(['customer_id']);


       });

       Schema::table('coupon_tracks', function(Blueprint $table) {
        $table->dropForeign(['coupon_id']);
        $table->dropForeign(['customer_id']);


       });
       Schema::table('coupon_store', function(Blueprint $table) {
        $table->dropForeign(['coupon_id']);
        $table->dropForeign(['store_id']);



       });

       Schema::table('coupon_restrict', function(Blueprint $table) {
        $table->dropForeign(['coupon_id']);
        $table->dropForeign(['restrict_id']);



       });

       Schema::table('restricts', function(Blueprint $table) {
        $table->dropForeign(['customer_group_id']);
        $table->dropForeign(['category_id']);
        $table->dropForeign(['product_id']);
        $table->dropForeign(['setting_id']);


       });

       //customer
       Schema::table('customers', function(Blueprint $table) {

        $table->dropForeign(['customer_group_id']);
        $table->dropForeign(['address_id']);
        $table->dropForeign(['store_id']);
        $table->dropForeign(['user_id']);
        $table->dropForeign(['payment_method_id']);


       });

       Schema::table('customer_baskets', function(Blueprint $table) {

        $table->dropForeign(['customer_id']);
        $table->dropForeign(['product_id']);


       });
       Schema::table('customer_basket_attributes', function(Blueprint $table) {

        $table->dropForeign(['customer_basket_id']);
        $table->dropForeign(['option_id']);
        $table->dropForeign(['option_value_id']);


       });

       Schema::table('customer_fields', function(Blueprint $table) {

        $table->dropForeign(['customer_id']);
        $table->dropForeign(['custom_field_value_id']);
        $table->dropForeign(['custom_field_id']);

       });

       Schema::table('customer_groups', function(Blueprint $table) {
        $table->dropForeign(['setting_id']);

       });

       Schema::table('customer_histories', function(Blueprint $table) {
        $table->dropForeign(['customer_id']);
        $table->dropForeign(['history_id']);
       });

       Schema::table('customer_ips', function(Blueprint $table) {
         $table->dropForeign(['customer_id']);
       });

       Schema::table('customer_onlines', function(Blueprint $table) {
          $table->dropForeign(['customer_id']);
       });

       Schema::table('customer_bans', function(Blueprint $table) {
            $table->dropForeign(['customer_id']);
       });

       Schema::table('contracts', function(Blueprint $table) {
            $table->dropForeign(['period_id']);
       });

       Schema::table('contract_plans', function(Blueprint $table) {
            $table->dropForeign(['contract_id']);
       });

       //custom-field
       Schema::table('custom_field_values', function(Blueprint $table) {
            $table->dropForeign(['custom_field_id']);
       });

       Schema::table('custom_field_customer_group', function(Blueprint $table) {
            $table->dropForeign(['custom_field_id']);
            $table->dropForeign(['customer_group_id']);

       });

       //combo
       Schema::table('combos', function(Blueprint $table) {
              $table->dropForeign(['discount_id']);
              $table->dropForeign(['subproduct_id']);

       });

       Schema::table('combo_product', function(Blueprint $table) {
                $table->dropForeign(['combo_id']);
                $table->dropForeign(['product_id']);

       });

       Schema::table('combo_category', function(Blueprint $table) {
                $table->dropForeign(['combo_id']);
                $table->dropForeign(['category_id']);

       });

       //download
       Schema::table('downloads', function(Blueprint $table) {
                 $table->dropForeign(['download_group_id']);

       });

       //faq
       Schema::table('faqs', function(Blueprint $table) {
        $table->dropForeign(['faq_group_id']);
        $table->dropForeign(['tag_id']);
        $table->dropForeign(['meta_id']);



       });
       Schema::table('faq_store', function(Blueprint $table) {
        $table->dropForeign(['faq_id']);
        $table->dropForeign(['store_id']);

       });

       Schema::table('faq_groups', function(Blueprint $table) {
        $table->dropForeign(['parent_id']);

       });

        //variation for product feature
        Schema::table('features', function(Blueprint $table) {
        $table->dropForeign(['product_id']);

        });

        //feedbacks
       Schema::table('feedbacks', function(Blueprint $table) {
        $table->dropForeign(['store_id']);
        });

        //histories
       Schema::table('histories', function(Blueprint $table) {
           $table->dropForeign(['type_id']);

       });

       Schema::table('types', function(Blueprint $table) {
            $table->dropForeign(['parent_id']);

       });

       //shipping insurance
       Schema::table('insurances', function(Blueprint $table) {

        $table->dropForeign(['shipping_id']);
        $table->dropForeign(['order_id']);
        $table->dropForeign(['insurance_rate_id']);
        $table->dropForeign(['insurance_rule_id']);



       });

       Schema::table('insurance_rates', function(Blueprint $table) {
        $table->dropForeign(['geo_id']);

       });

       Schema::table('insurance_taxes', function(Blueprint $table) {

        $table->dropForeign(['insurance_id']);
        $table->dropForeign(['tax_rate_id']);

       });

       //loyalties
       Schema::table('loyalties', function(Blueprint $table) {

        $table->dropForeign(['customer_id']);
        $table->dropForeign(['customer_group_id']);
        $table->dropForeign(['store_id']);

       });
       Schema::table('loyalty_groups', function(Blueprint $table) {

        $table->dropForeign(['product_id']);
        $table->dropForeign(['setting_id']);


       });
       Schema::table('loyalty_statuses', function(Blueprint $table) {

        $table->dropForeign(['loyalty_id']);
        $table->dropForeign(['order_id']);
        $table->dropForeign(['customer_id']);


       });

       Schema::table('news', function(Blueprint $table) {

        $table->dropForeign(['tag_id']);
        $table->dropForeign(['meta_id']);
        $table->dropForeign(['store_id']);


       });

       //newsletter
       Schema::table('newsletters', function(Blueprint $table) {
        $table->dropForeign(['product_id']);
        $table->dropForeign(['store_id']);

       });

       Schema::table('subscribers', function(Blueprint $table) {
            $table->dropForeign(['customer_id']);

       });

       Schema::table('campaigns', function(Blueprint $table) {
                $table->dropForeign(['user_id']);
                $table->dropForeign(['subscriber_id']);

       });

       //option
       Schema::table('options', function(Blueprint $table) {
           $table->dropForeign(['type_id']);


       });

       Schema::table('option_values', function(Blueprint $table) {
            $table->dropForeign(['option_id']);

       });

        //order
        Schema::table('orders', function(Blueprint $table) {

            $table->dropForeign(['store_id']);
            $table->dropForeign(['customer_id']);
            $table->dropForeign(['address_id']);
            $table->dropForeign(['customer_group_id']);
            $table->dropForeign(['status_id']);
            $table->dropForeign(['affiliate_id']);
            $table->dropForeign(['currency_id']);
            $table->dropForeign(['payment_method_id']);



           });
           Schema::table('order_exchanges', function(Blueprint $table) {

            $table->dropForeign(['order_id']);
            $table->dropForeign(['rma_id']);
            $table->dropForeign(['product_exchange_id']);


           });


           Schema::table('order_downloads', function(Blueprint $table) {

            $table->dropForeign(['order_id']);
            $table->dropForeign(['download_id']);


           });

           Schema::table('order_history', function(Blueprint $table) {

            $table->dropForeign(['order_id']);
            $table->dropForeign(['history_id']);

           });
           Schema::table('order_options', function(Blueprint $table) {

            $table->dropForeign(['order_id']);
            $table->dropForeign(['order_product_id']);
            $table->dropForeign(['product_option_id']);
            $table->dropForeign(['product_option_value_id']);


           });
           Schema::table('order_products', function(Blueprint $table) {

            $table->dropForeign(['order_id']);
            $table->dropForeign(['product_id']);


           });
           Schema::table('order_recurrences', function(Blueprint $table) {
                        $table->dropForeign(['order_id']);
                        $table->dropForeign(['product_id']);
                        $table->dropForeign(['profile_id']);

           });
           Schema::table('order_recurrence_transactions', function(Blueprint $table) {

                        $table->dropForeign(['order_recurrence_id']);
           });

           Schema::table('order_surcharges', function(Blueprint $table) {
                        $table->dropForeign(['order_id']);
           });

           Schema::table('order_voucher', function(Blueprint $table) {

                        $table->dropForeign(['order_id']);
                        $table->dropForeign(['voucher_id']);

           });
           Schema::table('order_custom_fields', function(Blueprint $table) {

                        $table->dropForeign(['order_id']);
                        $table->dropForeign(['ordecustom_field_id']);
                        $table->dropForeign(['custom_field_value_id']);

           });

           Schema::table('order_shippings', function(Blueprint $table) {
                        $table->dropForeign(['order_id']);
                        $table->dropForeign(['supplier_id']);
                        $table->dropForeign(['shipping_id']);

           });

           Schema::table('order_types', function(Blueprint $table) {
                        $table->dropForeign(['order_id']);

           });
           Schema::table('order_frauds', function(Blueprint $table) {
                        $table->dropForeign(['order_id']);
                        $table->dropForeign(['customer_id']);

           });

           //page
       Schema::table('pages', function(Blueprint $table) {

                    $table->dropForeign(['meta_id']);
                    $table->dropForeign(['page_group_id']);

       });

       Schema::table('page_groups', function(Blueprint $table) {

                    $table->dropForeign(['parent_id']);
                    $table->dropForeign(['customer_group_id']);

       });

       Schema::table('page_store', function(Blueprint $table) {

                    $table->dropForeign(['page_id']);
                    $table->dropForeign(['store_id']);

       });

       //product
       Schema::table('products', function(Blueprint $table) {

                    $table->dropForeign(['length_id']);
                    $table->dropForeign(['weight_id']);
                    $table->dropForeign(['brand_id']);
                    $table->dropForeign(['tax_id']);
                    $table->dropForeign(['status_id']);
                    $table->dropForeign(['tag_id']);
                    $table->dropForeign(['meta_id']);
                    $table->dropForeign(['category_id']);


       });
       Schema::table('product_groups', function(Blueprint $table) {

                    $table->dropForeign(['setting_id']);
                    $table->dropForeign(['customer_group_id']);
                    $table->dropForeign(['product_id']);


       });

       Schema::table('product_store', function(Blueprint $table) {

                    $table->dropForeign(['store_id']);
                    $table->dropForeign(['product_id']);


       });

       Schema::table('product_shippings', function(Blueprint $table) {

                    $table->dropForeign(['method_id']);
                    $table->dropForeign(['product_id']);


       });

       Schema::table('product_relateds', function(Blueprint $table) {

                    $table->dropForeign(['related_id']);
                    $table->dropForeign(['product_id']);


       });


       Schema::table('product_profiles', function(Blueprint $table) {

                    $table->dropForeign(['profile_id']);
                    $table->dropForeign(['product_id']);
                    $table->dropForeign(['store_id']);
                    $table->dropForeign(['customer_group_id']);


       });

       Schema::table('product_options', function(Blueprint $table) {

                    $table->dropForeign(['option_id']);
                    $table->dropForeign(['product_id']);

       });

       Schema::table('product_option_values', function(Blueprint $table) {

                    $table->dropForeign(['product_option_id']);
                    $table->dropForeign(['product_id']);
                    $table->dropForeign(['option_id']);
                    $table->dropForeign(['option_value_id']);

       });

       Schema::table('product_location', function(Blueprint $table) {

                    $table->dropForeign(['location_id']);
                    $table->dropForeign(['product_id']);


       });

       Schema::table('product_images', function(Blueprint $table) {
                    $table->dropForeign(['product_id']);


       });

       Schema::table('product_discounts', function(Blueprint $table) {

                    $table->dropForeign(['product_id']);
                    $table->dropForeign(['discount_id']);
                    $table->dropForeign(['customer_group_id']);






       });

       Schema::table('discounts', function(Blueprint $table) {

                    $table->dropForeign(['type_id']);
                    $table->dropForeign(['setting_id']);

       });

       Schema::table('product_colours', function(Blueprint $table) {

                    $table->dropForeign(['product_id']);
                    $table->dropForeign(['surface_id']);


       });

       Schema::table('product_attributes', function(Blueprint $table) {

                    $table->dropForeign(['product_id']);
                    $table->dropForeign(['attribute_id']);

       });

       Schema::table('price_groups', function(Blueprint $table) {
                    $table->dropForeign(['product_id']);
                    $table->dropForeign(['setting_id']);

       });

       Schema::table('surfaces', function(Blueprint $table) {
                    $table->dropForeign(['colour_id']);

       });

       //purchase
       Schema::table('purchases', function(Blueprint $table) {

                    $table->dropForeign(['brand_id']);
                    $table->dropForeign(['supplier_id']);
                    $table->dropForeign(['tax_id']);
                    $table->dropForeign(['length_id']);
                    $table->dropForeign(['weight_id']);

       });
       Schema::table('purchase_attributes', function(Blueprint $table) {

                    $table->dropForeign(['purchase_id']);
                    $table->dropForeign(['attribute_id']);


       });

       Schema::table('purchase_returns', function(Blueprint $table) {

                    $table->dropForeign(['purchase_id']);
                    $table->dropForeign(['supplier_id']);
                    $table->dropForeign(['product_id']);

       });

       Schema::table('stock_receives', function(Blueprint $table) {

                    $table->dropForeign(['purchase_id']);
                    $table->dropForeign(['supplier_id']);
                    $table->dropForeign(['product_id']);
                    $table->dropForeign(['stock_id']);


       });

       //payment
       Schema::table('payments', function(Blueprint $table) {

                    $table->dropForeign(['store_id']);
                    $table->dropForeign(['payment_method_id']);
                    $table->dropForeign(['supplier_id']);
                    $table->dropForeign(['currency_id']);

       });

       Schema::table('payment_methods', function(Blueprint $table) {

                    $table->dropForeign(['module_id']);
                    $table->dropForeign(['merchant_id']);

       });

       Schema::table('payment_settings', function(Blueprint $table) {

                    $table->dropForeign(['payment_method_id']);
                    $table->dropForeign(['setting_id']);

       });

       Schema::table('merchants', function(Blueprint $table) {

                    $table->dropForeign(['supplier_id']);

       });

        //quotation
        Schema::table('quotations', function(Blueprint $table) {

                        $table->dropForeign(['customer_id']);
                        $table->dropForeign(['store_id']);
                        $table->dropForeign(['tax_id']);
                        $table->dropForeign(['reqoute_id']);
                        $table->dropForeign(['currency_id']);

           });
           Schema::table('quotation_history', function(Blueprint $table) {
                        $table->dropForeign(['quote_id']);
                        $table->dropForeign(['history_id']);

           });

           Schema::table('quotation_products', function(Blueprint $table) {
                        $table->dropForeign(['quote_id']);
                        $table->dropForeign(['product_id']);

           });

           Schema::table('quotation_status', function(Blueprint $table) {
                        $table->dropForeign(['quote_id']);
                        $table->dropForeign(['status_id']);

           });

           //rma
       Schema::table('rmas', function(Blueprint $table) {
                    $table->dropForeign(['customer_id']);
                    $table->dropForeign(['status_id']);
                    $table->dropForeign(['address_id']);
                    $table->dropForeign(['rma_reason_id']);
                    $table->dropForeign(['rma_action_id']);

       });

       Schema::table('rma_products', function(Blueprint $table) {
                    $table->dropForeign(['rma_id']);
                    $table->dropForeign(['order_id']);
                    $table->dropForeign(['product_id']);

       });

       Schema::table('rma_histories', function(Blueprint $table) {

                    $table->dropForeign(['rma_id']);
                    $table->dropForeign(['history_id']);


       });

       Schema::table('refunds', function(Blueprint $table) {

                    $table->dropForeign(['rma_id']);
                    $table->dropForeign(['refund_method_id']);


       });

       //review
       Schema::table('reviews', function(Blueprint $table) {

                    $table->dropForeign(['product_id']);
                    $table->dropForeign(['customer_id']);

       });

       Schema::table('rating_types', function(Blueprint $table) {
                    $table->dropForeign(['category_id']);



       });

       Schema::table('rating_summaries', function(Blueprint $table) {
                    $table->dropForeign(['product_id']);
                    $table->dropForeign(['rating_type_id']);


       });

       Schema::table('ratings', function(Blueprint $table) {
                    $table->dropForeign(['product_id']);
                    $table->dropForeign(['rating_type_id']);
                    $table->dropForeign(['review_id']);
                    $table->dropForeign(['customer_id']);

       });

       //supplier
       Schema::table('suppliers', function(Blueprint $table) {

                    $table->dropForeign(['address_id']);
                    $table->dropForeign(['store_id']);
                    $table->dropForeign(['supplier_group_id']);


       });
       Schema::table('supplier_groups', function(Blueprint $table) {

                    $table->dropForeign(['payment_method_id']);



       });

       Schema::table('supplier_histories', function(Blueprint $table) {

                    $table->dropForeign(['supplier_id']);
                    $table->dropForeign(['history_id']);

       });

       Schema::table('supplier_setting', function(Blueprint $table) {

                    $table->dropForeign(['setting_id']);
                    $table->dropForeign(['supplier_id']);

       });

       //sale->upsell or crosssales
       Schema::table('sale_product', function(Blueprint $table) {

                    $table->dropForeign(['product_id']);
                    $table->dropForeign(['sale_id']);


       });

       Schema::table('sale_store', function(Blueprint $table) {

                    $table->dropForeign(['store_id']);
                    $table->dropForeign(['sale_id']);

       });

       //services
       Schema::table('services', function(Blueprint $table) {
                    $table->dropForeign(['product_id']);
                    $table->dropForeign(['customer_id']);
                    $table->dropForeign(['address_id']);
                    $table->dropForeign(['brand_id']);
                    $table->dropForeign(['tax_rate_id']);
                    $table->dropForeign(['status_id']);



       });

       Schema::table('service_actions', function(Blueprint $table) {
                    $table->dropForeign(['user_id']);
                    $table->dropForeign(['service_id']);
                    $table->dropForeign(['priority_id']);



       });
       Schema::table('service_category', function(Blueprint $table) {
                    $table->dropForeign(['category_id']);
                    $table->dropForeign(['service_id']);

       });
       Schema::table('service_histories', function(Blueprint $table) {
                    $table->dropForeign(['history_id']);
                    $table->dropForeign(['service_id']);

       });

       Schema::table('service_options', function(Blueprint $table) {
                    $table->dropForeign(['service_id']);

       });

       Schema::table('service_parts', function(Blueprint $table) {
                    $table->dropForeign(['supplier_id']);
                    $table->dropForeign(['service_id']);
       });


       Schema::table('service_shippings', function(Blueprint $table) {
                    $table->dropForeign(['package_id']);
                    $table->dropForeign(['service_id']);

       });
       Schema::table('service_types', function(Blueprint $table) {
                    $table->dropForeign(['contract_id']);
                    $table->dropForeign(['service_id']);


       });
       Schema::table('service_warranty', function(Blueprint $table) {
                    $table->dropForeign(['warranty_id']);
                    $table->dropForeign(['service_id']);


       });
       Schema::table('order_service', function(Blueprint $table) {
                    $table->dropForeign(['order_id']);
                    $table->dropForeign(['service_id']);


       });
      //shipping
      Schema::table('shippings', function(Blueprint $table) {

                    $table->dropForeign(['supplier_id']);
                    $table->dropForeign(['module_id']);
       });

       Schema::table('shipping_settings', function(Blueprint $table) {

                    $table->dropForeign(['shipping_id']);
                    $table->dropForeign(['setting_id']);

       });

       Schema::table('shipping_markups', function(Blueprint $table) {

                    $table->dropForeign(['shipping_id']);
                    $table->dropForeign(['state_id']);
       });

       Schema::table('shipping_rates', function(Blueprint $table) {

                    $table->dropForeign(['shipping_id']);
                    $table->dropForeign(['supplier_id']);
                    $table->dropForeign(['weight_id']);
                    $table->dropForeign(['length_id']);
                    $table->dropForeign(['geo_id']);
                    $table->dropForeign(['surcharge_id']);

       });

       Schema::table('shipping_tax', function(Blueprint $table) {
                    $table->dropForeign(['shipping_id']);
                    $table->dropForeign(['tax_rate_id']);

       });

       Schema::table('packages', function(Blueprint $table) {
                    $table->dropForeign(['order_id']);

       });

       //setting
       Schema::table('settings', function(Blueprint $table) {
                   $table->dropForeign(['setting_group_id']);

       });

       //special
       Schema::table('specials', function(Blueprint $table) {

                    $table->dropForeign(['customer_group_id']);
                    $table->dropForeign(['product_id']);

       });

        //tag
        Schema::table('tags', function(Blueprint $table) {
                     $table->dropForeign(['tag_group_id']);

        });

        //taxes
       Schema::table('tax_rates', function(Blueprint $table) {
                    $table->dropForeign(['customer_group_id']);

       });
       Schema::table('tax_rules', function(Blueprint $table) {
                    $table->dropForeign(['customer_group_id']);
                    $table->dropForeign(['tax_rate_id']);

       });

       //total
       Schema::table('order_total', function(Blueprint $table) {

                    $table->dropForeign(['total_id']);
                    $table->dropForeign(['order_id']);

       });

       Schema::table('rma_total', function(Blueprint $table) {

                    $table->dropForeign(['total_id']);
                    $table->dropForeign(['rma_id']);

       });
       Schema::table('service_total', function(Blueprint $table) {

                    $table->dropForeign(['total_id']);
                    $table->dropForeign(['service_id']);

       });

        //users
        Schema::table('permission_role', function(Blueprint $table) {

                        $table->dropForeign(['permission_id']);
                        $table->dropForeign(['role_id']);

           });
           Schema::table('permission_user', function(Blueprint $table) {

                        $table->dropForeign(['permission_id']);
                        $table->dropForeign(['user_id']);

           });

           Schema::table('role_user', function(Blueprint $table) {

                        $table->dropForeign(['role_id']);
                        $table->dropForeign(['user_id']);

           });

           Schema::table('confirmations', function(Blueprint $table) {
                        $table->dropForeign(['user_id']);

           });

           Schema::table('securities', function(Blueprint $table) {
                        $table->dropForeign(['user_id']);

           });

           Schema::table('socials', function(Blueprint $table) {
                        $table->dropForeign(['user_id']);

           });

           //voucher
           Schema::table('vouchers', function(Blueprint $table) {
                    $table->dropForeign(['theme_id']);
                    $table->dropForeign(['store_id']);

           });

           Schema::table('voucher_histories', function(Blueprint $table) {
                    $table->dropForeign(['voucher_id']);
                    $table->dropForeign(['order_id']);

           });

             //wishlist
            Schema::table('wishlists', function(Blueprint $table) {
                    $table->dropForeign(['customer_id']);
                    $table->dropForeign(['product_id']);

             });

            Schema::table('wishlist_options', function(Blueprint $table) {

                    $table->dropForeign(['wishlist_id']);
                    $table->dropForeign(['option_id']);
                    $table->dropForeign(['option_value_id']);


              });
              //warranty
            Schema::table('warranties', function(Blueprint $table) {
                        $table->dropForeign(['type_id']);

            });

            Schema::table('warranty_orders', function(Blueprint $table) {
                        $table->dropForeign(['order_id']);

            });

            Schema::table('warranty_products', function(Blueprint $table) {
                    $table->dropForeign(['warranty_id']);
                    $table->dropForeign(['category_id']);
                    $table->dropForeign(['product_id']);

            });
























    }
}
