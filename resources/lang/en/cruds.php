<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                         => 'ID',
            'id_helper'                  => ' ',
            'name'                       => 'Name',
            'name_helper'                => ' ',
            'email'                      => 'Email',
            'email_helper'               => ' ',
            'email_verified_at'          => 'Email verified at',
            'email_verified_at_helper'   => ' ',
            'password'                   => 'Password',
            'password_helper'            => ' ',
            'roles'                      => 'Roles',
            'roles_helper'               => ' ',
            'remember_token'             => 'Remember Token',
            'remember_token_helper'      => ' ',
            'created_at'                 => 'Created at',
            'created_at_helper'          => ' ',
            'updated_at'                 => 'Updated at',
            'updated_at_helper'          => ' ',
            'deleted_at'                 => 'Deleted at',
            'deleted_at_helper'          => ' ',
            'age'                        => 'Age',
            'age_helper'                 => ' ',
            'gender'                     => 'Gender',
            'gender_helper'              => ' ',
            'image'                      => 'Image',
            'image_helper'               => ' ',
            'bank'                       => 'Bank',
            'bank_helper'                => ' ',
            'mobile_number'              => 'Mobile Number',
            'mobile_number_helper'       => ' ',
            'id_number'                  => 'Id Number',
            'id_number_helper'           => ' ',
            'nationality'                => 'Nationality',
            'nationality_helper'         => ' ',
            'bank_account_number'        => 'Bank Account Number',
            'bank_account_number_helper' => ' ',
            'bank_branch'                => 'Bank Branch',
            'bank_branch_helper'         => ' ',
            'approved_at'                => 'Approved At',
            'approved_at_helper'         => ' ',
            'approved_by'                => 'Approved By',
            'approved_by_helper'         => ' ',
            'status'                     => 'Status',
            'status_helper'              => ' ',
            'username'                   => 'Username',
            'username_helper'            => ' ',
        ],
    ],
    'auditLog' => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'bank' => [
        'title'          => 'Banks',
        'title_singular' => 'Bank',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'broker' => [
        'title'          => 'Brokers',
        'title_singular' => 'Broker',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'tradingAccount' => [
        'title'          => 'Trading Accounts',
        'title_singular' => 'Trading Account',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'user_name'                    => 'User Name',
            'user_name_helper'             => ' ',
            'broker_name'                  => 'Broker Name',
            'broker_name_helper'           => ' ',
            'parent_id'                  => 'Parent ID',
            'parent_id_helper'           => ' ',
            'nickname'                => 'Nickname',
            'nickname_helper'         => ' ',
            'depth'                   => 'Depth',
            'depth_helper'            => ' ',
            'deposit_amount'          => 'Deposit Amount',
            'deposit_amount_helper'   => ' ',
            'server_address'          => 'Server Address',
            'server_address_helper'   => ' ',
            'trading_id_login'        => 'Trading Id Login',
            'trading_id_login_helper' => ' ',
            'trading_password'        => 'Trading Password',
            'trading_password_helper' => ' ',
            'trade_mode'              => 'Trade Mode',
            'trade_mode_helper'       => ' ',
            'model'                   => 'Model',
            'model_helper'            => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
            'approved_at'             => 'Approved At',
            'approved_at_helper'      => ' ',
            'approved_by'             => 'Approved By',
            'approved_by_helper'      => ' ',
            'status'                  => 'Status',
            'status_helper'           => ' ',
            'product_id'                  => 'Product',
            'product_id_helper'           => ' ',
        ],
    ],
    'deposit' => [
        'title'          => 'Deposits',
        'title_singular' => 'Deposit',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'trading_account'        => 'Trading Account',
            'trading_account_helper' => ' ',
            'amount'                 => 'Amount',
            'amount_helper'          => ' ',
            'receipt_image'          => 'Receipt Image',
            'receipt_image_helper'   => ' ',
            'status'                 => 'Status',
            'status_helper'          => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
        ],
    ],
    'expertAdvisor' => [
        'title'          => 'Expert Advisors',
        'title_singular' => 'Expert Advisor',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'trading_account'           => 'Trading Account',
            'trading_account_helper'    => ' ',
            'status'                    => 'Status',
            'status_helper'             => ' ',
            'maintenance_status'        => 'Maintenance Status',
            'maintenance_status_helper' => ' ',
            'activated_at'              => 'Activated At',
            'activated_at_helper'       => ' ',
            'expired_at'                => 'Expired At',
            'expired_at_helper'         => ' ',
            'created_at'                => 'Created at',
            'created_at_helper'         => ' ',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => ' ',
        ],
    ],
    'depositHistory' => [
        'title'          => 'Deposit History',
        'title_singular' => 'Deposit History',
    ],
    'eaPaymentHistory' => [
        'title'          => 'EBC Maintenance Histories',
        'title_singular' => 'EBC Maintenance History',
        'fields'         => [
            'id'                            => 'ID',
            'id_helper'                     => ' ',
            'expert_advisor'                => 'Expert Advisor',
            'expert_advisor_helper'         => ' ',
            'trading_account'               => 'Trading Account',
            'trading_account_helper'        => ' ',
            'type'                          => 'Type',
            'type_helper'                   => ' ',
            'amount'                        => 'Amount',
            'amount_helper'                 => ' ',
            'purchase_receipt_image'        => 'Purchase Receipt Image',
            'purchase_receipt_image_helper' => ' ',
            'deposit_image'                 => 'Deposit Image',
            'deposit_image_helper'          => ' ',
            'withdrawal_image'              => 'Withdrawal Image',
            'withdrawal_image_helper'       => ' ',
            'created_at'                    => 'Created at',
            'created_at_helper'             => ' ',
            'updated_at'                    => 'Updated at',
            'updated_at_helper'             => ' ',
            'deleted_at'                    => 'Deleted at',
            'deleted_at_helper'             => ' ',
            'status'                        => 'Status',
            'status_helper'                 => ' ',
            'start_amount'                  => 'Start Amount',
            'start_amount_helper'           => ' ',
            'end_amount'                    => 'End Amount',
            'end_amount_helper'             => ' ',
            'ea_maintenance_amount'         => 'EBC Maintenance Amount',
            'ea_maintenance_amount_helper'  => ' ',
            'nett_profit_amount'            => 'Nett Profit Amount',
            'nett_profit_amount_helper'     => ' ',
            'wd_amount'                     => 'Withdraw Amount',
            'wd_amount_helper'              => ' ',
            'next_period_amount'            => 'Next Period Amount',
            'next_period_amount_helper'     => ' ',
            'period'                        => 'Period',
            'period_helper'                 => ' ',
            'period_start_date'             => 'Period Start Date',
            'period_start_date_helper'      => ' ',
            'receipt_image'                 => 'Receipt Image Maintenance',
            'receipt_image_helper'          => ' ',
            'withdrawal_image'              => 'Receipt Image Withdraw',
            'withdrawal_image_helper'       => ' ',

        ],
    ],
    'profit' => [
        'title'          => 'Profits',
        'title_singular' => 'Profit',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'trading_account'        => 'Trading Account',
            'trading_account_helper' => ' ',
            'period'                 => 'Period',
            'period_helper'          => ' ',
            'start_amount'           => 'Start Amount',
            'start_amount_helper'    => ' ',
            'end_amount'             => 'End Amount',
            'end_amount_helper'      => ' ',
            'start_date'             => 'Start Date',
            'start_date_helper'      => ' ',
            'end_date'               => 'End Date',
            'end_date_helper'        => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
        ],
    ],
    'payout' => [
        'title'          => 'Payouts',
        'title_singular' => 'Payout',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'user'              => 'User',
            'user_helper'       => ' ',
            'period_id'         => 'Period',
            'period_id_helper'  => ' ',
            'status'            => 'Status',
            'status_helper'     => ' ',
            'subtotal'          => 'Subtotal',
            'subtotal_helper'   => ' ',
            'fee'               => 'Fee',
            'fee_helper'        => ' ',
            'tax'               => 'Tax (%)',
            'tax_helper'        => ' ',
            'total'             => 'Total',
            'total_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'commission' => [
        'title'          => 'Commissions',
        'title_singular' => 'Commission',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'payout'                 => 'Payout',
            'payout_helper'          => ' ',
            'user'                   => 'User',
            'user_helper'            => ' ',
            'trading_account'        => 'Trading Account',
            'trading_account_helper' => ' ',
            'profit'                 => 'Profit',
            'profit_helper'          => ' ',
            'status'                 => 'Status',
            'status_helper'          => ' ',
            'period'                 => 'period',
            'period_helper'          => ' ',
            'type'                   => 'Type',
            'type_helper'            => ' ',
            'pct'                    => 'Percentage',
            'pct_helper'             => ' ',
            'bv'                     => 'Bonus Value',
            'bv_helper'              => ' ',
            'numerator'              => 'Numerator',
            'numerator_helper'       => ' ',
            'denominator'            => 'Denominator',
            'denominator_helper'     => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'user_name'              => 'User Name',
            'user_name_helper'       => ' ',
            'trading_account_name'           => 'Trading Account Name',
            'trading_account_name_helper'    => ' ',
            'payout_total'                   => 'Payout Total',
            'payout_total_helper'            => ' ',
            'profit_start_amount'            => 'Profit Start Amount',
            'profit_start_amount_helper'     => ' ',
            'profit_end_amount'              => 'Profit End Amount',
            'profit_end_amount_helper'       => ' ',
            'amount'                         => 'Amount',
            'amount_helper'                  => ' ',
            'prev_pct'                       => 'Previous Percentage',
            'prev_pct_helper'                => ' ',
        ],
    ],

    'product' => [
        'title'          => 'Product',
        'title_singular' => 'Product',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'period' => [
        'title'          => 'Period',
        'title_singular' => 'Period',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'start_date'        => 'Start Date',
            'start_date_helper' => ' ',
            'end_date'          => 'End Date',
            'end_date_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    
    'server' => [
        'title'          => 'Server',
        'title_singular' => 'Server',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'broker'            => 'Broker',
            'broker_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],

    'paymentServer' => [
        'title'          => 'Payment Server',
        'title_singular' => 'Payment Server',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'product'                => 'Product',
            'product_helper'         => ' ',
            'activated_at'           => 'Activated At',
            'activated_at_helper'    => ' ',
            'expired_at'             => 'Expired At',
            'expired_at_helper'      => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'trading_account'        => 'Trading Account',
            'trading_account_helper' => ' ',
            'amount'                 => 'Amount',
            'amount_helper'          => ' ',
            'status'                 => 'Status',
            'status_helper'          => ' ',
        ],
    ],

];
