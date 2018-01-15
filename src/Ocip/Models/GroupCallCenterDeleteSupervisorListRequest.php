<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterDeleteSupervisorListRequest
 *
 * Delete supervisor(s) from a call center.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupCallCenterDeleteSupervisorListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName supervisorUserId
     * @var string[]
     */
    private $supervisorUserId = array(
        
    );

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Getter for supervisorUserId
     *
     * @ElementName supervisorUserId
     * @return string[]
     */
    public function getSupervisorUserId()
    {
        return $this->supervisorUserId;
    }

    /**
     * Setter for supervisorUserId
     *
     * @ElementName supervisorUserId
     * @param string[] $supervisorUserId
     * @return $this
     */
    public function setSupervisorUserId($supervisorUserId)
    {
        $this->supervisorUserId = $supervisorUserId;
        return $this;
    }

    /**
     * Adder for supervisorUserId
     *
     * @ElementName supervisorUserId
     * @param string $supervisorUserId
     * @return $this
     */
    public function addSupervisorUserId($supervisorUserId)
    {
        $this->supervisorUserId []= $supervisorUserId;
        return $this;
    }


}

