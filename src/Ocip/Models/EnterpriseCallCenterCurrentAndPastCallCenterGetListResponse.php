<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterCurrentAndPastCallCenterGetListResponse
 *
 * Response to the EnterpriseCallCenterCurrentAndPastCallCenterGetListRequest.
 *
 * @see EnterpriseCallCenterCurrentAndPastCallCenterGetListRequest
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:1160","type":"sequence"}]
 */
class EnterpriseCallCenterCurrentAndPastCallCenterGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:1160
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    private $serviceUserId = array(
        
    );

    /**
     * @ElementName deletedServiceUserId
     * @Type string
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:1160
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    private $deletedServiceUserId = array(
        
    );

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

