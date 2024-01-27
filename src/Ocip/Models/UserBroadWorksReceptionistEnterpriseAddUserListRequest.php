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
 * @Groups [{"id":"44477d346d2631b033071e12af214ac8:97","type":"sequence"}]
 */
class UserBroadWorksReceptionistEnterpriseAddUserListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 44477d346d2631b033071e12af214ac8:97
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName monitoredUserId
     * @Type string
     * @Array
     * @Group 44477d346d2631b033071e12af214ac8:97
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    protected $monitoredUserId = [
        
    ];

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for monitoredUserId
     *
     * @return string[]
     */
    public function getMonitoredUserId()
    {
        return $this->monitoredUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->monitoredUserId;
    }

    /**
     * Setter for monitoredUserId
     *
     * @param string[] $monitoredUserId
     * @return $this
     */
    public function setMonitoredUserId(array $monitoredUserId)
    {
        $this->monitoredUserId = $monitoredUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMonitoredUserId()
    {
        $this->monitoredUserId = null;
        return $this;
    }

    /**
     * Adder for monitoredUserId
     *
     * @param string $monitoredUserId
     * @return $this
     */
    public function addMonitoredUserId(string $monitoredUserId)
    {
        $this->monitoredUserId[] = $monitoredUserId;
        return $this;
    }
}

