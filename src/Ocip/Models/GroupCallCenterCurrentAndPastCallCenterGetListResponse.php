<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterCurrentAndPastCallCenterGetListResponse
 *
 * Response to the GroupCallCenterCurrentAndPastCallCenterGetListRequest.
 *
 * @see GroupCallCenterCurrentAndPastCallCenterGetListRequest
 */
class GroupCallCenterCurrentAndPastCallCenterGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceUserId
     * @var string[]
     */
    private $serviceUserId = array(
        
    );

    /**
     * @ElementName deletedServiceUserId
     * @var string[]
     */
    private $deletedServiceUserId = array(
        
    );

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string[]
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string[] $serviceUserId
     * @return $this
     */
    public function setServiceUserId(array $serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Adder for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string $serviceUserId
     * @return $this
     */
    public function addServiceUserId(string $serviceUserId)
    {
        $this->serviceUserId []= $serviceUserId;
        return $this;
    }

    /**
     * Getter for deletedServiceUserId
     *
     * @ElementName deletedServiceUserId
     * @return string[]
     */
    public function getDeletedServiceUserId()
    {
        return $this->deletedServiceUserId;
    }

    /**
     * Setter for deletedServiceUserId
     *
     * @ElementName deletedServiceUserId
     * @param string[] $deletedServiceUserId
     * @return $this
     */
    public function setDeletedServiceUserId(array $deletedServiceUserId)
    {
        $this->deletedServiceUserId = $deletedServiceUserId;
        return $this;
    }

    /**
     * Adder for deletedServiceUserId
     *
     * @ElementName deletedServiceUserId
     * @param string $deletedServiceUserId
     * @return $this
     */
    public function addDeletedServiceUserId(string $deletedServiceUserId)
    {
        $this->deletedServiceUserId []= $deletedServiceUserId;
        return $this;
    }


}

