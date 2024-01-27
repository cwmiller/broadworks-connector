<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterCurrentAndPastCallCenterGetListResponse
 *
 * Response to the GroupCallCenterCurrentAndPastCallCenterGetListRequest.
 *
 * @see GroupCallCenterCurrentAndPastCallCenterGetListRequest
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:3101","type":"sequence"}]
 */
class GroupCallCenterCurrentAndPastCallCenterGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Array
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:3101
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    protected $serviceUserId = [
        
    ];

    /**
     * @ElementName deletedServiceUserId
     * @Type string
     * @Array
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:3101
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    protected $deletedServiceUserId = [
        
    ];

    /**
     * Getter for serviceUserId
     *
     * @return string[]
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string[] $serviceUserId
     * @return $this
     */
    public function setServiceUserId(array $serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Adder for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function addServiceUserId(string $serviceUserId)
    {
        $this->serviceUserId[] = $serviceUserId;
        return $this;
    }

    /**
     * Getter for deletedServiceUserId
     *
     * @return string[]
     */
    public function getDeletedServiceUserId()
    {
        return $this->deletedServiceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deletedServiceUserId;
    }

    /**
     * Setter for deletedServiceUserId
     *
     * @param string[] $deletedServiceUserId
     * @return $this
     */
    public function setDeletedServiceUserId(array $deletedServiceUserId)
    {
        $this->deletedServiceUserId = $deletedServiceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeletedServiceUserId()
    {
        $this->deletedServiceUserId = null;
        return $this;
    }

    /**
     * Adder for deletedServiceUserId
     *
     * @param string $deletedServiceUserId
     * @return $this
     */
    public function addDeletedServiceUserId(string $deletedServiceUserId)
    {
        $this->deletedServiceUserId[] = $deletedServiceUserId;
        return $this;
    }
}

