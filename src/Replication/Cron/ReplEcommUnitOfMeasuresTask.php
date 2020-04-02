<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Replication\Cron;

use Ls\Replication\Logger\Logger;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Config\Model\ResourceModel\Config;
use Ls\Core\Helper\Data as LsHelper;
use Ls\Replication\Helper\ReplicationHelper;
use Ls\Omni\Client\Ecommerce\Entity\ReplRequest;
use Ls\Omni\Client\Ecommerce\Operation\ReplEcommUnitOfMeasures;
use Ls\Replication\Api\ReplUnitOfMeasureRepositoryInterface as ReplUnitOfMeasureRepository;
use Ls\Replication\Model\ReplUnitOfMeasureFactory;
use Ls\Replication\Api\Data\ReplUnitOfMeasureInterface;

class ReplEcommUnitOfMeasuresTask extends AbstractReplicationTask
{

    const JOB_CODE = 'replication_repl_unit_of_measure';

    const CONFIG_PATH = 'ls_mag/replication/repl_unit_of_measure';

    const CONFIG_PATH_STATUS = 'ls_mag/replication/status_repl_unit_of_measure';

    const CONFIG_PATH_LAST_EXECUTE = 'ls_mag/replication/last_execute_repl_unit_of_measure';

    const CONFIG_PATH_MAX_KEY = 'ls_mag/replication/max_key_repl_unit_of_measure';

    /**
     * @property ReplUnitOfMeasureRepository $repository
     */
    protected $repository = null;

    /**
     * @property ReplUnitOfMeasureFactory $factory
     */
    protected $factory = null;

    /**
     * @property ReplUnitOfMeasureInterface $data_interface
     */
    protected $data_interface = null;

    /**
     * @param ReplUnitOfMeasureRepository $repository
     * @return $this
     */
    public function setRepository($repository)
    {
        $this->repository = $repository;
        return $this;
    }

    /**
     * @return ReplUnitOfMeasureRepository
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @param ReplUnitOfMeasureFactory $factory
     * @return $this
     */
    public function setFactory($factory)
    {
        $this->factory = $factory;
        return $this;
    }

    /**
     * @return ReplUnitOfMeasureFactory
     */
    public function getFactory()
    {
        return $this->factory;
    }

    /**
     * @param ReplUnitOfMeasureInterface $data_interface
     * @return $this
     */
    public function setDataInterface($data_interface)
    {
        $this->data_interface = $data_interface;
        return $this;
    }

    /**
     * @return ReplUnitOfMeasureInterface
     */
    public function getDataInterface()
    {
        return $this->data_interface;
    }

    public function __construct(ScopeConfigInterface $scope_config, Config $resource_config, Logger $logger, LsHelper $helper, ReplicationHelper $repHelper, ReplUnitOfMeasureFactory $factory, ReplUnitOfMeasureRepository $repository, ReplUnitOfMeasureInterface $data_interface)
    {
        parent::__construct($scope_config, $resource_config, $logger, $helper, $repHelper);
        $this->repository = $repository;
        $this->factory = $factory;
        $this->data_interface = $data_interface;
    }

    public function makeRequest($lastKey, $fullReplication = false, $batchSize = 100, $storeId = '', $maxKey = '', $baseUrl = '')
    {
        $request = new ReplEcommUnitOfMeasures($baseUrl);
        $request->getOperationInput()
                 ->setReplRequest( ( new ReplRequest() )->setBatchSize($batchSize)
                                                        ->setFullReplication($fullReplication)
                                                        ->setLastKey($lastKey)
                                                        ->setMaxKey($maxKey)
                                                        ->setStoreId($storeId));
        return $request;
    }

    public function getConfigPath()
    {
        return self::CONFIG_PATH;
    }

    public function getConfigPathStatus()
    {
        return self::CONFIG_PATH_STATUS;
    }

    public function getConfigPathLastExecute()
    {
        return self::CONFIG_PATH_LAST_EXECUTE;
    }

    public function getConfigPathMaxKey()
    {
        return self::CONFIG_PATH_MAX_KEY;
    }

    public function getMainEntity()
    {
        return $this->data_interface;
    }


}

