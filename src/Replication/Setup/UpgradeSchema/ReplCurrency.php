<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Replication\Setup\UpgradeSchema;

use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\DB\Ddl\Table;

class ReplCurrency
{

    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $table_name = $setup->getTable( 'ls_replication_repl_currency' ); 
        if(!$setup->tableExists($table_name)) {
        	$table = $setup->getConnection()->newTable( $table_name );
        	$table->addColumn('repl_currency_id', Table::TYPE_INTEGER, 11, [ 'identity' => TRUE, 'primary' => TRUE, 'unsigned' => TRUE, 'nullable' => FALSE, 'auto_increment'=> TRUE ]);
        	$table->addColumn('scope', Table::TYPE_TEXT, 8);
        	$table->addColumn('scope_id', Table::TYPE_INTEGER, 11);
        	$table->addColumn('processed', Table::TYPE_BOOLEAN, 1, [ 'default' => 0 ], 'Flag to check if data is already copied into Magento. 0 means needs to be copied into Magento tables & 1 means already copied');
        	$table->addColumn('is_updated', Table::TYPE_BOOLEAN, 1, [ 'default' => 0 ], 'Flag to check if data is already updated from Omni into Magento. 0 means already updated & 1 means needs to be updated into Magento tables');
        	$table->addColumn('is_failed', Table::TYPE_BOOLEAN, 1, [ 'default' => 0 ], 'Flag to check if data is already added from Flat into Magento successfully or not. 0 means already added successfully & 1 means failed to add successfully into Magento tables');
        	$table->addColumn('CurrencyCode' , Table::TYPE_TEXT, '');
        	$table->addColumn('CurrencyPrefix' , Table::TYPE_TEXT, '');
        	$table->addColumn('CurrencySuffix' , Table::TYPE_TEXT, '');
        	$table->addColumn('Description' , Table::TYPE_TEXT, '');
        	$table->addColumn('IsDeleted' , Table::TYPE_BOOLEAN, 1);
        	$table->addColumn('RoundOfAmount' , Table::TYPE_DECIMAL, '20,4');
        	$table->addColumn('RoundOfSales' , Table::TYPE_DECIMAL, '20,4');
        	$table->addColumn('RoundOfTypeAmount' , Table::TYPE_INTEGER, 11);
        	$table->addColumn('RoundOfTypeSales' , Table::TYPE_INTEGER, 11);
        	$table->addColumn('Symbol' , Table::TYPE_TEXT, '');
        	$table->addColumn('checksum', Table::TYPE_TEXT,'');
        	$table->addColumn('scope' , Table::TYPE_TEXT, '');
        	$table->addColumn('scope_id' , Table::TYPE_INTEGER, 11);
        	$table->addColumn('processed_at', Table::TYPE_TIMESTAMP, null, [ 'nullable' => true ], 'Processed At');
        	$table->addColumn('created_at', Table::TYPE_TIMESTAMP, null, [ 'nullable' => false, 'default' => Table::TIMESTAMP_INIT ], 'Created At');
        	$table->addColumn('updated_at', Table::TYPE_TIMESTAMP, null, [ 'nullable' => false, 'default' => Table::TIMESTAMP_INIT_UPDATE ], 'Updated At');
        	$setup->getConnection()->createTable( $table );
        } else {
        	$connection = $setup->getConnection();
        	if ($connection->tableColumnExists($table_name, 'CurrencyCode' ) === false) {
        		$connection->addColumn($table_name, 'CurrencyCode', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'CurrencyCode']);
        	} else {
        		$connection->modifyColumn($table_name, 'CurrencyCode', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'CurrencyCode']);
        	}
        	if ($connection->tableColumnExists($table_name, 'CurrencyPrefix' ) === false) {
        		$connection->addColumn($table_name, 'CurrencyPrefix', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'CurrencyPrefix']);
        	} else {
        		$connection->modifyColumn($table_name, 'CurrencyPrefix', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'CurrencyPrefix']);
        	}
        	if ($connection->tableColumnExists($table_name, 'CurrencySuffix' ) === false) {
        		$connection->addColumn($table_name, 'CurrencySuffix', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'CurrencySuffix']);
        	} else {
        		$connection->modifyColumn($table_name, 'CurrencySuffix', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'CurrencySuffix']);
        	}
        	if ($connection->tableColumnExists($table_name, 'Description' ) === false) {
        		$connection->addColumn($table_name, 'Description', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'Description']);
        	} else {
        		$connection->modifyColumn($table_name, 'Description', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'Description']);
        	}
        	if ($connection->tableColumnExists($table_name, 'IsDeleted' ) === false) {
        		$connection->addColumn($table_name, 'IsDeleted', ['length' => 1,'default' => 0,'type' => Table::TYPE_BOOLEAN, 'comment' => 'IsDeleted']);
        	} else {
        		$connection->modifyColumn($table_name, 'IsDeleted', ['length' => 1,'default' => 0,'type' => Table::TYPE_BOOLEAN, 'comment' => 'IsDeleted']);
        	}
        	if ($connection->tableColumnExists($table_name, 'RoundOfAmount' ) === false) {
        		$connection->addColumn($table_name, 'RoundOfAmount', ['length' => '20,4','default' => null,'type' => Table::TYPE_DECIMAL, 'comment' => 'RoundOfAmount']);
        	} else {
        		$connection->modifyColumn($table_name, 'RoundOfAmount', ['length' => '20,4','default' => null,'type' => Table::TYPE_DECIMAL, 'comment' => 'RoundOfAmount']);
        	}
        	if ($connection->tableColumnExists($table_name, 'RoundOfSales' ) === false) {
        		$connection->addColumn($table_name, 'RoundOfSales', ['length' => '20,4','default' => null,'type' => Table::TYPE_DECIMAL, 'comment' => 'RoundOfSales']);
        	} else {
        		$connection->modifyColumn($table_name, 'RoundOfSales', ['length' => '20,4','default' => null,'type' => Table::TYPE_DECIMAL, 'comment' => 'RoundOfSales']);
        	}
        	if ($connection->tableColumnExists($table_name, 'RoundOfTypeAmount' ) === false) {
        		$connection->addColumn($table_name, 'RoundOfTypeAmount', ['length' => 11,'default' => null,'type' => Table::TYPE_INTEGER, 'comment' => 'RoundOfTypeAmount']);
        	} else {
        		$connection->modifyColumn($table_name, 'RoundOfTypeAmount', ['length' => 11,'default' => null,'type' => Table::TYPE_INTEGER, 'comment' => 'RoundOfTypeAmount']);
        	}
        	if ($connection->tableColumnExists($table_name, 'RoundOfTypeSales' ) === false) {
        		$connection->addColumn($table_name, 'RoundOfTypeSales', ['length' => 11,'default' => null,'type' => Table::TYPE_INTEGER, 'comment' => 'RoundOfTypeSales']);
        	} else {
        		$connection->modifyColumn($table_name, 'RoundOfTypeSales', ['length' => 11,'default' => null,'type' => Table::TYPE_INTEGER, 'comment' => 'RoundOfTypeSales']);
        	}
        	if ($connection->tableColumnExists($table_name, 'Symbol' ) === false) {
        		$connection->addColumn($table_name, 'Symbol', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'Symbol']);
        	} else {
        		$connection->modifyColumn($table_name, 'Symbol', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'Symbol']);
        	}
        	if ($connection->tableColumnExists($table_name, 'scope' ) === false) {
        		$connection->addColumn($table_name, 'scope', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'Scope']);
        	} else {
        		$connection->modifyColumn($table_name, 'scope', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'Scope']);
        	}
        	if ($connection->tableColumnExists($table_name, 'scope_id' ) === false) {
        		$connection->addColumn($table_name, 'scope_id', ['length' => 11,'default' => null,'type' => Table::TYPE_INTEGER, 'comment' => 'Scope_id']);
        	} else {
        		$connection->modifyColumn($table_name, 'scope_id', ['length' => 11,'default' => null,'type' => Table::TYPE_INTEGER, 'comment' => 'Scope_id']);
        	}
        	if ($connection->tableColumnExists($table_name, 'is_failed' ) === false) {
        		$connection->addColumn($table_name, 'is_failed', ['length' => 1,'default' => 0,'type' => Table::TYPE_BOOLEAN, 'comment' => 'Is_failed']);
        	} else {
        		$connection->modifyColumn($table_name, 'is_failed', ['length' => 1,'default' => 0,'type' => Table::TYPE_BOOLEAN, 'comment' => 'Is_failed']);
        	}
        	if ($connection->tableColumnExists($table_name, 'checksum' ) === false) {
        		$connection->addColumn($table_name, 'checksum', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'Checksum']);
        	} else {
        		$connection->modifyColumn($table_name, 'checksum', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'Checksum']);
        	}
        	if ($connection->tableColumnExists($table_name, 'processed_at' ) === false) {
        		$connection->addColumn($table_name, 'processed_at', ['length' => '','default' => null,'type' => Table::TYPE_TIMESTAMP, 'comment' => 'Processed_at']);
        	} else {
        		$connection->modifyColumn($table_name, 'processed_at', ['length' => '','default' => null,'type' => Table::TYPE_TIMESTAMP, 'comment' => 'Processed_at']);
        	}
        }
    }


}

