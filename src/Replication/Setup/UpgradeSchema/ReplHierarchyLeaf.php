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

class ReplHierarchyLeaf
{

    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $table_name = $setup->getTable( 'ls_replication_repl_hierarchy_leaf' ); 
        if(!$setup->tableExists($table_name)) {
        	$table = $setup->getConnection()->newTable( $table_name );
        	$table->addColumn('repl_hierarchy_leaf_id', Table::TYPE_INTEGER, 11, [ 'identity' => TRUE, 'primary' => TRUE, 'unsigned' => TRUE, 'nullable' => FALSE, 'auto_increment'=> TRUE ]);
        	$table->addColumn('Description' , Table::TYPE_TEXT, '');
        	$table->addColumn('HierarchyCode' , Table::TYPE_TEXT, '');
        	$table->addColumn('nav_id' , Table::TYPE_TEXT, '');
        	$table->addColumn('ImageId' , Table::TYPE_TEXT, '');
        	$table->addColumn('IsDeleted' , Table::TYPE_BOOLEAN, 1);
        	$table->addColumn('NodeId' , Table::TYPE_TEXT, '');
        	$table->addColumn('Type' , Table::TYPE_TEXT, '');
        	$table->addColumn('scope' , Table::TYPE_TEXT, '');
        	$table->addColumn('scope_id' , Table::TYPE_INTEGER, 11);
        	$table->addColumn('processed', Table::TYPE_BOOLEAN, 1, [ 'default' => 0 ], 'Flag to check if data is already copied into Magento. 0 means needs to be copied into Magento tables & 1 means already copied');
        	$table->addColumn('is_updated', Table::TYPE_BOOLEAN, 1, [ 'default' => 0 ], 'Flag to check if data is already updated from Omni into Magento. 0 means already updated & 1 means needs to be updated into Magento tables');
        	$table->addColumn('is_failed', Table::TYPE_BOOLEAN, 1, [ 'default' => 0 ], 'Flag to check if data is already added from Flat into Magento successfully or not. 0 means already added successfully & 1 means failed to add successfully into Magento tables');
        	$table->addColumn('checksum', Table::TYPE_TEXT,'');
        	$table->addColumn('processed_at', Table::TYPE_TIMESTAMP, null, [ 'nullable' => true ], 'Processed At');
        	$table->addColumn('created_at', Table::TYPE_TIMESTAMP, null, [ 'nullable' => false, 'default' => Table::TIMESTAMP_INIT ], 'Created At');
        	$table->addColumn('updated_at', Table::TYPE_TIMESTAMP, null, [ 'nullable' => false, 'default' => Table::TIMESTAMP_INIT_UPDATE ], 'Updated At');
        	$setup->getConnection()->createTable( $table );
        } else {
        	$connection = $setup->getConnection();
        	if ($connection->tableColumnExists($table_name, 'Description' ) === false) {
        		$connection->addColumn($table_name, 'Description', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'Description']);
        	} else {
        		$connection->modifyColumn($table_name, 'Description', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'Description']);
        	}
        	if ($connection->tableColumnExists($table_name, 'HierarchyCode' ) === false) {
        		$connection->addColumn($table_name, 'HierarchyCode', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'HierarchyCode']);
        	} else {
        		$connection->modifyColumn($table_name, 'HierarchyCode', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'HierarchyCode']);
        	}
        	if ($connection->tableColumnExists($table_name, 'nav_id' ) === false) {
        		$connection->addColumn($table_name, 'nav_id', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'Nav_id']);
        	} else {
        		$connection->modifyColumn($table_name, 'nav_id', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'Nav_id']);
        	}
        	if ($connection->tableColumnExists($table_name, 'ImageId' ) === false) {
        		$connection->addColumn($table_name, 'ImageId', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'ImageId']);
        	} else {
        		$connection->modifyColumn($table_name, 'ImageId', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'ImageId']);
        	}
        	if ($connection->tableColumnExists($table_name, 'IsDeleted' ) === false) {
        		$connection->addColumn($table_name, 'IsDeleted', ['length' => 1,'default' => 0,'type' => Table::TYPE_BOOLEAN, 'comment' => 'IsDeleted']);
        	} else {
        		$connection->modifyColumn($table_name, 'IsDeleted', ['length' => 1,'default' => 0,'type' => Table::TYPE_BOOLEAN, 'comment' => 'IsDeleted']);
        	}
        	if ($connection->tableColumnExists($table_name, 'NodeId' ) === false) {
        		$connection->addColumn($table_name, 'NodeId', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'NodeId']);
        	} else {
        		$connection->modifyColumn($table_name, 'NodeId', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'NodeId']);
        	}
        	if ($connection->tableColumnExists($table_name, 'Type' ) === false) {
        		$connection->addColumn($table_name, 'Type', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'Type']);
        	} else {
        		$connection->modifyColumn($table_name, 'Type', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'Type']);
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
        	if ($connection->tableColumnExists($table_name, 'processed' ) === false) {
        		$connection->addColumn($table_name, 'processed', ['length' => 1,'default' => 0,'type' => Table::TYPE_BOOLEAN, 'comment' => 'Flag to check if data is already copied into Magento. 0 means needs to be copied into Magento tables & 1 means already copied']);
        	} else {
        		$connection->modifyColumn($table_name, 'processed', ['length' => 1,'default' => 0,'type' => Table::TYPE_BOOLEAN, 'comment' => 'Flag to check if data is already copied into Magento. 0 means needs to be copied into Magento tables & 1 means already copied']);
        	}
        	if ($connection->tableColumnExists($table_name, 'is_updated' ) === false) {
        		$connection->addColumn($table_name, 'is_updated', ['length' => 1,'default' => 0,'type' => Table::TYPE_BOOLEAN, 'comment' => 'Flag to check if data is already updated from Omni into Magento. 0 means already updated & 1 means needs to be updated into Magento tables']);
        	} else {
        		$connection->modifyColumn($table_name, 'is_updated', ['length' => 1,'default' => 0,'type' => Table::TYPE_BOOLEAN, 'comment' => 'Flag to check if data is already updated from Omni into Magento. 0 means already updated & 1 means needs to be updated into Magento tables']);
        	}
        	if ($connection->tableColumnExists($table_name, 'is_failed' ) === false) {
        		$connection->addColumn($table_name, 'is_failed', ['length' => 1,'default' => 0,'type' => Table::TYPE_BOOLEAN, 'comment' => 'Flag to check if data is already added from Flat into Magento successfully or not. 0 means already added successfully & 1 means failed to add successfully into Magento tables']);
        	} else {
        		$connection->modifyColumn($table_name, 'is_failed', ['length' => 1,'default' => 0,'type' => Table::TYPE_BOOLEAN, 'comment' => 'Flag to check if data is already added from Flat into Magento successfully or not. 0 means already added successfully & 1 means failed to add successfully into Magento tables']);
        	}
        	if ($connection->tableColumnExists($table_name, 'checksum' ) === false) {
        		$connection->addColumn($table_name, 'checksum', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'Checksum']);
        	} else {
        		$connection->modifyColumn($table_name, 'checksum', ['length' => '','default' => null,'type' => Table::TYPE_TEXT, 'comment' => 'Checksum']);
        	}
        	if ($connection->tableColumnExists($table_name, 'processed_at' ) === false) {
        		$connection->addColumn($table_name, 'processed_at', ['length' => '','default' => null,'type' => Table::TYPE_TIMESTAMP, 'comment' => 'Processed At']);
        	} else {
        		$connection->modifyColumn($table_name, 'processed_at', ['length' => '','default' => null,'type' => Table::TYPE_TIMESTAMP, 'comment' => 'Processed At']);
        	}
        	if ($connection->tableColumnExists($table_name, 'created_at' ) === false) {
        		$connection->addColumn($table_name, 'created_at', ['length' => '','default' => Table::TIMESTAMP_INIT,'type' => Table::TYPE_TIMESTAMP, 'comment' => 'Created At']);
        	} else {
        		$connection->modifyColumn($table_name, 'created_at', ['length' => '','default' => Table::TIMESTAMP_INIT,'type' => Table::TYPE_TIMESTAMP, 'comment' => 'Created At']);
        	}
        	if ($connection->tableColumnExists($table_name, 'updated_at' ) === false) {
        		$connection->addColumn($table_name, 'updated_at', ['length' => '','default' => Table::TIMESTAMP_INIT_UPDATE,'type' => Table::TYPE_TIMESTAMP, 'comment' => 'Updated At']);
        	} else {
        		$connection->modifyColumn($table_name, 'updated_at', ['length' => '','default' => Table::TIMESTAMP_INIT_UPDATE,'type' => Table::TYPE_TIMESTAMP, 'comment' => 'Updated At']);
        	}
        }
    }


}

