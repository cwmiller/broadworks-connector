<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDeviceManagementEventGetListRequest22
 *
 * Request device management's events for a specific queue.
 *         It is possible to restrict the number of rows returned using 
 *         responseSizeLimit. 
 *         If eventQueueType is not specified, the events from all the 
 *         event queues are returned.
 *         The response is either a ServiceProviderDeviceManagementEventGetListResponse22 or an ErrorResponse.
 *
 * @see ServiceProviderDeviceManagementEventGetListResponse22
 * @see ErrorResponse
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:2888","type":"sequence"}]
 */
class ServiceProviderDeviceManagementEventGetListRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:2888
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName eventQueueType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventQueueType
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:2888
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventQueueType|null
     */
    private $eventQueueType = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:2888
     * @MinInclusive 1
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaExactDeviceManagementEventStatusInProgressOrPending
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventStatusInProgressOrPending
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:2888
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventStatusInProgressOrPending|null
     */
    private $searchCriteriaExactDeviceManagementEventStatusInProgressOrPending = null;

    /**
     * @ElementName searchCriteriaExactDeviceManagementEventStatusCompleted
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventStatusCompleted
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:2888
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventStatusCompleted|null
     */
    private $searchCriteriaExactDeviceManagementEventStatusCompleted = null;

    /**
     * @ElementName searchCriteriaExactDeviceManagementEventAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventAction
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:2888
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventAction|null
     */
    private $searchCriteriaExactDeviceManagementEventAction = null;

    /**
     * @ElementName searchCriteriaExactDeviceManagementEventLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventLevel
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:2888
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventLevel|null
     */
    private $searchCriteriaExactDeviceManagementEventLevel = null;

    /**
     * @ElementName searchCriteriaExactDeviceManagementEventType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventType
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:2888
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventType|null
     */
    private $searchCriteriaExactDeviceManagementEventType = null;

    /**
     * @ElementName searchCriteriaDeviceManagementEventAdditionalInfo
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceManagementEventAdditionalInfo
     * @Array
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:2888
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceManagementEventAdditionalInfo[]
     */
    private $searchCriteriaDeviceManagementEventAdditionalInfo = array(
        
    );

    /**
     * @ElementName searchCriteriaDeviceManagementEventLoginId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceManagementEventLoginId
     * @Array
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:2888
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceManagementEventLoginId[]
     */
    private $searchCriteriaDeviceManagementEventLoginId = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for eventQueueType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventQueueType
     */
    public function getEventQueueType()
    {
        return $this->eventQueueType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->eventQueueType;
    }

    /**
     * Setter for eventQueueType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventQueueType $eventQueueType
     * @return $this
     */
    public function setEventQueueType(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventQueueType $eventQueueType)
    {
        $this->eventQueueType = $eventQueueType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEventQueueType()
    {
        $this->eventQueueType = null;
        return $this;
    }

    /**
     * Getter for responseSizeLimit
     *
     * @return int
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->responseSizeLimit;
    }

    /**
     * Setter for responseSizeLimit
     *
     * @param int $responseSizeLimit
     * @return $this
     */
    public function setResponseSizeLimit($responseSizeLimit)
    {
        $this->responseSizeLimit = $responseSizeLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResponseSizeLimit()
    {
        $this->responseSizeLimit = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactDeviceManagementEventStatusInProgressOrPending
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventStatusInProgressOrPending
     */
    public function getSearchCriteriaExactDeviceManagementEventStatusInProgressOrPending()
    {
        return $this->searchCriteriaExactDeviceManagementEventStatusInProgressOrPending instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactDeviceManagementEventStatusInProgressOrPending;
    }

    /**
     * Setter for searchCriteriaExactDeviceManagementEventStatusInProgressOrPending
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventStatusInProgressOrPending $searchCriteriaExactDeviceManagementEventStatusInProgressOrPending
     * @return $this
     */
    public function setSearchCriteriaExactDeviceManagementEventStatusInProgressOrPending(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventStatusInProgressOrPending $searchCriteriaExactDeviceManagementEventStatusInProgressOrPending)
    {
        $this->searchCriteriaExactDeviceManagementEventStatusInProgressOrPending = $searchCriteriaExactDeviceManagementEventStatusInProgressOrPending;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactDeviceManagementEventStatusInProgressOrPending()
    {
        $this->searchCriteriaExactDeviceManagementEventStatusInProgressOrPending = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactDeviceManagementEventStatusCompleted
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventStatusCompleted
     */
    public function getSearchCriteriaExactDeviceManagementEventStatusCompleted()
    {
        return $this->searchCriteriaExactDeviceManagementEventStatusCompleted instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactDeviceManagementEventStatusCompleted;
    }

    /**
     * Setter for searchCriteriaExactDeviceManagementEventStatusCompleted
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventStatusCompleted $searchCriteriaExactDeviceManagementEventStatusCompleted
     * @return $this
     */
    public function setSearchCriteriaExactDeviceManagementEventStatusCompleted(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventStatusCompleted $searchCriteriaExactDeviceManagementEventStatusCompleted)
    {
        $this->searchCriteriaExactDeviceManagementEventStatusCompleted = $searchCriteriaExactDeviceManagementEventStatusCompleted;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactDeviceManagementEventStatusCompleted()
    {
        $this->searchCriteriaExactDeviceManagementEventStatusCompleted = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactDeviceManagementEventAction
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventAction
     */
    public function getSearchCriteriaExactDeviceManagementEventAction()
    {
        return $this->searchCriteriaExactDeviceManagementEventAction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactDeviceManagementEventAction;
    }

    /**
     * Setter for searchCriteriaExactDeviceManagementEventAction
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventAction $searchCriteriaExactDeviceManagementEventAction
     * @return $this
     */
    public function setSearchCriteriaExactDeviceManagementEventAction(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventAction $searchCriteriaExactDeviceManagementEventAction)
    {
        $this->searchCriteriaExactDeviceManagementEventAction = $searchCriteriaExactDeviceManagementEventAction;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactDeviceManagementEventAction()
    {
        $this->searchCriteriaExactDeviceManagementEventAction = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactDeviceManagementEventLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventLevel
     */
    public function getSearchCriteriaExactDeviceManagementEventLevel()
    {
        return $this->searchCriteriaExactDeviceManagementEventLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactDeviceManagementEventLevel;
    }

    /**
     * Setter for searchCriteriaExactDeviceManagementEventLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventLevel $searchCriteriaExactDeviceManagementEventLevel
     * @return $this
     */
    public function setSearchCriteriaExactDeviceManagementEventLevel(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventLevel $searchCriteriaExactDeviceManagementEventLevel)
    {
        $this->searchCriteriaExactDeviceManagementEventLevel = $searchCriteriaExactDeviceManagementEventLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactDeviceManagementEventLevel()
    {
        $this->searchCriteriaExactDeviceManagementEventLevel = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactDeviceManagementEventType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventType
     */
    public function getSearchCriteriaExactDeviceManagementEventType()
    {
        return $this->searchCriteriaExactDeviceManagementEventType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactDeviceManagementEventType;
    }

    /**
     * Setter for searchCriteriaExactDeviceManagementEventType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventType $searchCriteriaExactDeviceManagementEventType
     * @return $this
     */
    public function setSearchCriteriaExactDeviceManagementEventType(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventType $searchCriteriaExactDeviceManagementEventType)
    {
        $this->searchCriteriaExactDeviceManagementEventType = $searchCriteriaExactDeviceManagementEventType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactDeviceManagementEventType()
    {
        $this->searchCriteriaExactDeviceManagementEventType = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaDeviceManagementEventAdditionalInfo
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceManagementEventAdditionalInfo[]
     */
    public function getSearchCriteriaDeviceManagementEventAdditionalInfo()
    {
        return $this->searchCriteriaDeviceManagementEventAdditionalInfo instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaDeviceManagementEventAdditionalInfo;
    }

    /**
     * Setter for searchCriteriaDeviceManagementEventAdditionalInfo
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceManagementEventAdditionalInfo[] $searchCriteriaDeviceManagementEventAdditionalInfo
     * @return $this
     */
    public function setSearchCriteriaDeviceManagementEventAdditionalInfo(array $searchCriteriaDeviceManagementEventAdditionalInfo)
    {
        $this->searchCriteriaDeviceManagementEventAdditionalInfo = $searchCriteriaDeviceManagementEventAdditionalInfo;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaDeviceManagementEventAdditionalInfo()
    {
        $this->searchCriteriaDeviceManagementEventAdditionalInfo = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaDeviceManagementEventAdditionalInfo
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceManagementEventAdditionalInfo $searchCriteriaDeviceManagementEventAdditionalInfo
     * @return $this
     */
    public function addSearchCriteriaDeviceManagementEventAdditionalInfo($searchCriteriaDeviceManagementEventAdditionalInfo)
    {
        $this->searchCriteriaDeviceManagementEventAdditionalInfo[] = $searchCriteriaDeviceManagementEventAdditionalInfo;
        return $this;
    }

    /**
     * Getter for searchCriteriaDeviceManagementEventLoginId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceManagementEventLoginId[]
     */
    public function getSearchCriteriaDeviceManagementEventLoginId()
    {
        return $this->searchCriteriaDeviceManagementEventLoginId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaDeviceManagementEventLoginId;
    }

    /**
     * Setter for searchCriteriaDeviceManagementEventLoginId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceManagementEventLoginId[] $searchCriteriaDeviceManagementEventLoginId
     * @return $this
     */
    public function setSearchCriteriaDeviceManagementEventLoginId(array $searchCriteriaDeviceManagementEventLoginId)
    {
        $this->searchCriteriaDeviceManagementEventLoginId = $searchCriteriaDeviceManagementEventLoginId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaDeviceManagementEventLoginId()
    {
        $this->searchCriteriaDeviceManagementEventLoginId = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaDeviceManagementEventLoginId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceManagementEventLoginId $searchCriteriaDeviceManagementEventLoginId
     * @return $this
     */
    public function addSearchCriteriaDeviceManagementEventLoginId($searchCriteriaDeviceManagementEventLoginId)
    {
        $this->searchCriteriaDeviceManagementEventLoginId[] = $searchCriteriaDeviceManagementEventLoginId;
        return $this;
    }


}

