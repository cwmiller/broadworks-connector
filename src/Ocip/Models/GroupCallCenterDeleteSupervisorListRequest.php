<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterDeleteSupervisorListRequest
 *
 * Delete supervisor(s) from a call center.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:3206","type":"sequence"}]
 */
class GroupCallCenterDeleteSupervisorListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:3206
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName supervisorUserId
     * @Type string
     * @Array
     * @Group e2c537e3e39483b96620673a7012ffdd:3206
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    protected $supervisorUserId = array(
        
    );

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
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
     * Getter for supervisorUserId
     *
     * @return string[]
     */
    public function getSupervisorUserId()
    {
        return $this->supervisorUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supervisorUserId;
    }

    /**
     * Setter for supervisorUserId
     *
     * @param string[] $supervisorUserId
     * @return $this
     */
    public function setSupervisorUserId(array $supervisorUserId)
    {
        $this->supervisorUserId = $supervisorUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupervisorUserId()
    {
        $this->supervisorUserId = null;
        return $this;
    }

    /**
     * Adder for supervisorUserId
     *
     * @param string $supervisorUserId
     * @return $this
     */
    public function addSupervisorUserId(string $supervisorUserId)
    {
        $this->supervisorUserId[] = $supervisorUserId;
        return $this;
    }


}

