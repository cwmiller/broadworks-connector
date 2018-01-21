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
 *         The response is either a
 * ServiceProviderDeviceManagementEventGetListResponse22 or an ErrorResponse.
 */
class ServiceProviderDeviceManagementEventGetListRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName eventQueueType
     * @var string|null
     */
    private $eventQueueType = null;

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaExactDeviceManagementEventStatusInProgressOrPending
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventStatusInProgressOrPending|null
     */
    private $searchCriteriaExactDeviceManagementEventStatusInProgressOrPending = null;

    /**
     * @ElementName searchCriteriaExactDeviceManagementEventStatusCompleted
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventStatusCompleted|null
     */
    private $searchCriteriaExactDeviceManagementEventStatusCompleted = null;

    /**
     * @ElementName searchCriteriaExactDeviceManagementEventAction
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventAction|null
     */
    private $searchCriteriaExactDeviceManagementEventAction = null;

    /**
     * @ElementName searchCriteriaExactDeviceManagementEventLevel
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventLevel|null
     */
    private $searchCriteriaExactDeviceManagementEventLevel = null;

    /**
     * @ElementName searchCriteriaExactDeviceManagementEventType
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventType|null
     */
    private $searchCriteriaExactDeviceManagementEventType = null;

    /**
     * @ElementName searchCriteriaDeviceManagementEventAdditionalInfo
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceManagementEventAdditionalInfo[]
     */
    private $searchCriteriaDeviceManagementEventAdditionalInfo = array(
        
    );

    /**
     * @ElementName searchCriteriaDeviceManagementEventLoginId
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceManagementEventLoginId[]
     */
    private $searchCriteriaDeviceManagementEventLoginId = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for eventQueueType
     *
     * @ElementName eventQueueType
     * @return string|null
     */
    public function getEventQueueType()
    {
        return $this->eventQueueType;
    }

    /**
     * Setter for eventQueueType
     *
     * @ElementName eventQueueType
     * @param string|null $eventQueueType
     * @return $this
     */
    public function setEventQueueType($eventQueueType)
    {
        $this->eventQueueType = $eventQueueType;
        return $this;
    }

    /**
     * Getter for responseSizeLimit
     *
     * @ElementName responseSizeLimit
     * @return int|null
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit;
    }

    /**
     * Setter for responseSizeLimit
     *
     * @ElementName responseSizeLimit
     * @param int|null $responseSizeLimit
     * @return $this
     */
    public function setResponseSizeLimit($responseSizeLimit)
    {
        $this->responseSizeLimit = $responseSizeLimit;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactDeviceManagementEventStatusInProgressOrPending
     *
     * @ElementName searchCriteriaExactDeviceManagementEventStatusInProgressOrPending
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventStatusInProgressOrPending|null
     */
    public function getSearchCriteriaExactDeviceManagementEventStatusInProgressOrPending()
    {
        return $this->searchCriteriaExactDeviceManagementEventStatusInProgressOrPending;
    }

    /**
     * Setter for searchCriteriaExactDeviceManagementEventStatusInProgressOrPending
     *
     * @ElementName searchCriteriaExactDeviceManagementEventStatusInProgressOrPending
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventStatusInProgressOrPending|null $searchCriteriaExactDeviceManagementEventStatusInProgressOrPending
     * @return $this
     */
    public function setSearchCriteriaExactDeviceManagementEventStatusInProgressOrPending($searchCriteriaExactDeviceManagementEventStatusInProgressOrPending)
    {
        $this->searchCriteriaExactDeviceManagementEventStatusInProgressOrPending = $searchCriteriaExactDeviceManagementEventStatusInProgressOrPending;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactDeviceManagementEventStatusCompleted
     *
     * @ElementName searchCriteriaExactDeviceManagementEventStatusCompleted
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventStatusCompleted|null
     */
    public function getSearchCriteriaExactDeviceManagementEventStatusCompleted()
    {
        return $this->searchCriteriaExactDeviceManagementEventStatusCompleted;
    }

    /**
     * Setter for searchCriteriaExactDeviceManagementEventStatusCompleted
     *
     * @ElementName searchCriteriaExactDeviceManagementEventStatusCompleted
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventStatusCompleted|null $searchCriteriaExactDeviceManagementEventStatusCompleted
     * @return $this
     */
    public function setSearchCriteriaExactDeviceManagementEventStatusCompleted($searchCriteriaExactDeviceManagementEventStatusCompleted)
    {
        $this->searchCriteriaExactDeviceManagementEventStatusCompleted = $searchCriteriaExactDeviceManagementEventStatusCompleted;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactDeviceManagementEventAction
     *
     * @ElementName searchCriteriaExactDeviceManagementEventAction
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventAction|null
     */
    public function getSearchCriteriaExactDeviceManagementEventAction()
    {
        return $this->searchCriteriaExactDeviceManagementEventAction;
    }

    /**
     * Setter for searchCriteriaExactDeviceManagementEventAction
     *
     * @ElementName searchCriteriaExactDeviceManagementEventAction
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventAction|null $searchCriteriaExactDeviceManagementEventAction
     * @return $this
     */
    public function setSearchCriteriaExactDeviceManagementEventAction($searchCriteriaExactDeviceManagementEventAction)
    {
        $this->searchCriteriaExactDeviceManagementEventAction = $searchCriteriaExactDeviceManagementEventAction;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactDeviceManagementEventLevel
     *
     * @ElementName searchCriteriaExactDeviceManagementEventLevel
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventLevel|null
     */
    public function getSearchCriteriaExactDeviceManagementEventLevel()
    {
        return $this->searchCriteriaExactDeviceManagementEventLevel;
    }

    /**
     * Setter for searchCriteriaExactDeviceManagementEventLevel
     *
     * @ElementName searchCriteriaExactDeviceManagementEventLevel
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventLevel|null $searchCriteriaExactDeviceManagementEventLevel
     * @return $this
     */
    public function setSearchCriteriaExactDeviceManagementEventLevel($searchCriteriaExactDeviceManagementEventLevel)
    {
        $this->searchCriteriaExactDeviceManagementEventLevel = $searchCriteriaExactDeviceManagementEventLevel;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactDeviceManagementEventType
     *
     * @ElementName searchCriteriaExactDeviceManagementEventType
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventType|null
     */
    public function getSearchCriteriaExactDeviceManagementEventType()
    {
        return $this->searchCriteriaExactDeviceManagementEventType;
    }

    /**
     * Setter for searchCriteriaExactDeviceManagementEventType
     *
     * @ElementName searchCriteriaExactDeviceManagementEventType
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceManagementEventType|null $searchCriteriaExactDeviceManagementEventType
     * @return $this
     */
    public function setSearchCriteriaExactDeviceManagementEventType($searchCriteriaExactDeviceManagementEventType)
    {
        $this->searchCriteriaExactDeviceManagementEventType = $searchCriteriaExactDeviceManagementEventType;
        return $this;
    }

    /**
     * Getter for searchCriteriaDeviceManagementEventAdditionalInfo
     *
     * @ElementName searchCriteriaDeviceManagementEventAdditionalInfo
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceManagementEventAdditionalInfo[]
     */
    public function getSearchCriteriaDeviceManagementEventAdditionalInfo()
    {
        return $this->searchCriteriaDeviceManagementEventAdditionalInfo;
    }

    /**
     * Setter for searchCriteriaDeviceManagementEventAdditionalInfo
     *
     * @ElementName searchCriteriaDeviceManagementEventAdditionalInfo
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceManagementEventAdditionalInfo[] $searchCriteriaDeviceManagementEventAdditionalInfo
     * @return $this
     */
    public function setSearchCriteriaDeviceManagementEventAdditionalInfo($searchCriteriaDeviceManagementEventAdditionalInfo)
    {
        $this->searchCriteriaDeviceManagementEventAdditionalInfo = $searchCriteriaDeviceManagementEventAdditionalInfo;
        return $this;
    }

    /**
     * Adder for searchCriteriaDeviceManagementEventAdditionalInfo
     *
     * @ElementName searchCriteriaDeviceManagementEventAdditionalInfo
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceManagementEventAdditionalInfo $searchCriteriaDeviceManagementEventAdditionalInfo
     * @return $this
     */
    public function addSearchCriteriaDeviceManagementEventAdditionalInfo($searchCriteriaDeviceManagementEventAdditionalInfo)
    {
        $this->searchCriteriaDeviceManagementEventAdditionalInfo []= $searchCriteriaDeviceManagementEventAdditionalInfo;
        return $this;
    }

    /**
     * Getter for searchCriteriaDeviceManagementEventLoginId
     *
     * @ElementName searchCriteriaDeviceManagementEventLoginId
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceManagementEventLoginId[]
     */
    public function getSearchCriteriaDeviceManagementEventLoginId()
    {
        return $this->searchCriteriaDeviceManagementEventLoginId;
    }

    /**
     * Setter for searchCriteriaDeviceManagementEventLoginId
     *
     * @ElementName searchCriteriaDeviceManagementEventLoginId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceManagementEventLoginId[] $searchCriteriaDeviceManagementEventLoginId
     * @return $this
     */
    public function setSearchCriteriaDeviceManagementEventLoginId($searchCriteriaDeviceManagementEventLoginId)
    {
        $this->searchCriteriaDeviceManagementEventLoginId = $searchCriteriaDeviceManagementEventLoginId;
        return $this;
    }

    /**
     * Adder for searchCriteriaDeviceManagementEventLoginId
     *
     * @ElementName searchCriteriaDeviceManagementEventLoginId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceManagementEventLoginId $searchCriteriaDeviceManagementEventLoginId
     * @return $this
     */
    public function addSearchCriteriaDeviceManagementEventLoginId($searchCriteriaDeviceManagementEventLoginId)
    {
        $this->searchCriteriaDeviceManagementEventLoginId []= $searchCriteriaDeviceManagementEventLoginId;
        return $this;
    }


}

