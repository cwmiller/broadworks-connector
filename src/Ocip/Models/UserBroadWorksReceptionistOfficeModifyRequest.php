<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksReceptionistOfficeModifyRequest
 *
 * Replace the Receptionist Office monitored user list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserBroadWorksReceptionistOfficeModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName monitoredUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $monitoredUserIdList = null;

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
     * Getter for monitoredUserIdList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getMonitoredUserIdList()
    {
        return $this->monitoredUserIdList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->monitoredUserIdList;
    }

    /**
     * Setter for monitoredUserIdList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $monitoredUserIdList
     * @return $this
     */
    public function setMonitoredUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $monitoredUserIdList)
    {
        if ($monitoredUserIdList === null) {
            $this->monitoredUserIdList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->monitoredUserIdList = $monitoredUserIdList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMonitoredUserIdList()
    {
        $this->monitoredUserIdList = null;
        return $this;
    }


}

