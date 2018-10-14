<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksReceptionistEnterpriseAddUserListRequest
 *
 * Add users to the BroadWorks Receptionist - Enterprise monitored user list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserBroadWorksReceptionistEnterpriseAddUserListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName monitoredUserId
     * @var string[]
     */
    private $monitoredUserId = array(
        
    );

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for monitoredUserId
     *
     * @ElementName monitoredUserId
     * @return string[]
     */
    public function getMonitoredUserId()
    {
        return $this->monitoredUserId;
    }

    /**
     * Setter for monitoredUserId
     *
     * @ElementName monitoredUserId
     * @param string[] $monitoredUserId
     * @return $this
     */
    public function setMonitoredUserId(array $monitoredUserId)
    {
        $this->monitoredUserId = $monitoredUserId;
        return $this;
    }

    /**
     * Adder for monitoredUserId
     *
     * @ElementName monitoredUserId
     * @param string $monitoredUserId
     * @return $this
     */
    public function addMonitoredUserId(string $monitoredUserId)
    {
        $this->monitoredUserId []= $monitoredUserId;
        return $this;
    }


}

