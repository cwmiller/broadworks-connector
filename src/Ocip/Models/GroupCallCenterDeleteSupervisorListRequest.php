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
 */
class GroupCallCenterDeleteSupervisorListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName supervisorUserId
     * @Type string
     * @Array
     * @var string[]
     */
    private $supervisorUserId = array(
        
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

