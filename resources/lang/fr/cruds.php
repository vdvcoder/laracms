<?php

return [
    'userManagement'    => [
        'title'          => 'Gestion des utilisateurs',
        'title_singular' => 'Gestion des utilisateurs',
    ],
    'permission'        => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'              => [
        'title'          => 'Rôles',
        'title_singular' => 'Rôle',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'              => [
        'title'          => 'Utilisateurs',
        'title_singular' => 'Utilisateur',
        'fields'         => [
            'id'                               => 'ID',
            'id_helper'                        => '',
            'name'                             => 'Name',
            'name_helper'                      => '',
            'email'                            => 'Email',
            'email_helper'                     => '',
            'email_verified_at'                => 'Email verified at',
            'email_verified_at_helper'         => '',
            'password'                         => 'Password',
            'password_helper'                  => '',
            'roles'                            => 'Roles',
            'roles_helper'                     => '',
            'remember_token'                   => 'Remember Token',
            'remember_token_helper'            => '',
            'created_at'                       => 'Created at',
            'created_at_helper'                => '',
            'updated_at'                       => 'Updated at',
            'updated_at_helper'                => '',
            'deleted_at'                       => 'Deleted at',
            'deleted_at_helper'                => '',
            'approved'                         => 'Approved',
            'approved_helper'                  => '',
            'verified'                         => 'Verified',
            'verified_helper'                  => '',
            'verified_at'                      => 'Verified at',
            'verified_at_helper'               => '',
            'verification_token'               => 'Verification token',
            'verification_token_helper'        => '',
            'mollie_customer'                  => 'Mollie Customer',
            'mollie_customer_helper'           => '',
            'mollie_mandate'                   => 'Mollie Mandate',
            'mollie_mandate_helper'            => '',
            'tax_percentage'                   => 'Tax Percentage',
            'tax_percentage_helper'            => '',
            'trail_ends_at'                    => 'Trail Ends At',
            'trail_ends_at_helper'             => '',
            'extra_billing_information'        => 'Extra Billing Information',
            'extra_billing_information_helper' => '',
            'order'                            => 'Order',
            'order_helper'                     => '',
        ],
    ],
    'auditLog'          => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'description'         => 'Description',
            'description_helper'  => '',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => '',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => '',
            'user_id'             => 'User ID',
            'user_id_helper'      => '',
            'properties'          => 'Properties',
            'properties_helper'   => '',
            'host'                => 'Host',
            'host_helper'         => '',
            'created_at'          => 'Created at',
            'created_at_helper'   => '',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => '',
        ],
    ],
    'setting'           => [
        'title'          => 'Settings',
        'title_singular' => 'Setting',
    ],
    'cm'                => [
        'title'          => 'Cms',
        'title_singular' => 'Cm',
    ],
    'order'             => [
        'title'          => 'Orders',
        'title_singular' => 'Order',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => '',
            'uuid'                   => 'Uuid',
            'uuid_helper'            => '',
            'reference'              => 'Reference',
            'reference_helper'       => '',
            'customer_data'          => 'Customer Data',
            'customer_data_helper'   => '',
            'shipping_typeid'        => 'Shipping Typeid',
            'shipping_typeid_helper' => '',
            'shipping_price'         => 'Shipping Price',
            'shipping_price_helper'  => '',
            'payment_method'         => 'Payment Method',
            'payment_method_helper'  => '',
            'payment'                => 'Payment',
            'payment_helper'         => '',
            'pait_at'                => 'Pait At',
            'pait_at_helper'         => '',
            'created_at'             => 'Created at',
            'created_at_helper'      => '',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => '',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => '',
            'paid'                   => 'Paid',
            'paid_helper'            => '',
        ],
    ],
    'coupon'            => [
        'title'          => 'Coupons',
        'title_singular' => 'Coupon',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'code'               => 'Code',
            'code_helper'        => '',
            'type'               => 'Type',
            'type_helper'        => '',
            'value'              => 'Value',
            'value_helper'       => '',
            'percent_off'        => 'Percent Off',
            'percent_off_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
            'uuid'               => 'Uuid',
            'uuid_helper'        => '',
            'amount'             => 'Amount',
            'amount_helper'      => '',
            'amount_left'        => 'Amount Left',
            'amount_left_helper' => '',
        ],
    ],
    'contentManagement' => [
        'title'          => 'Content management',
        'title_singular' => 'Content management',
    ],
    'contentCategory'   => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'slug'              => 'Slug',
            'slug_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'contentTag'        => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'slug'              => 'Slug',
            'slug_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'contentPage'       => [
        'title'          => 'Pages',
        'title_singular' => 'Page',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => '',
            'title'                 => 'Title',
            'title_helper'          => '',
            'category'              => 'Categories',
            'category_helper'       => '',
            'tag'                   => 'Tags',
            'tag_helper'            => '',
            'page_text'             => 'Full Text',
            'page_text_helper'      => '',
            'excerpt'               => 'Excerpt',
            'excerpt_helper'        => '',
            'featured_image'        => 'Featured Image',
            'featured_image_helper' => '',
            'created_at'            => 'Created at',
            'created_at_helper'     => '',
            'updated_at'            => 'Updated At',
            'updated_at_helper'     => '',
            'deleted_at'            => 'Deleted At',
            'deleted_at_helper'     => '',
        ],
    ],
    'faqManagement'     => [
        'title'          => 'FAQ Management',
        'title_singular' => 'FAQ Management',
    ],
    'faqCategory'       => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'category'          => 'Category',
            'category_helper'   => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'faqQuestion'       => [
        'title'          => 'Questions',
        'title_singular' => 'Question',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'category'          => 'Category',
            'category_helper'   => '',
            'question'          => 'Question',
            'question_helper'   => '',
            'answer'            => 'Answer',
            'answer_helper'     => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'productManagement' => [
        'title'          => 'Product Management',
        'title_singular' => 'Product Management',
    ],
    'productCategory'   => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Name',
            'name_helper'        => '',
            'description'        => 'Description',
            'description_helper' => '',
            'photo'              => 'Photo',
            'photo_helper'       => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => '',
        ],
    ],
    'productTag'        => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => '',
        ],
    ],
    'product'           => [
        'title'          => 'Products',
        'title_singular' => 'Product',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Name',
            'name_helper'        => '',
            'description'        => 'Description',
            'description_helper' => '',
            'price'              => 'Price',
            'price_helper'       => '',
            'category'           => 'Categories',
            'category_helper'    => '',
            'tag'                => 'Tags',
            'tag_helper'         => '',
            'photo'              => 'Photo',
            'photo_helper'       => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => '',
            'slug'               => 'Slug',
            'slug_helper'        => '',
            'featured'           => 'Featured',
            'featured_helper'    => '',
            'instock'            => 'Instock',
            'instock_helper'     => '',
            'stock'              => 'Stock',
            'stock_helper'       => '',
        ],
    ],
];
