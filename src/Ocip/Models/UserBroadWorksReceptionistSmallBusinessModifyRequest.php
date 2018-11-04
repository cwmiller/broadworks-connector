<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksReceptionistSmallBusinessModifyRequest
 *
 * Replace the Receptionist Small Business monitored user list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserBroadWorksReceptionistSmallBusinessModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName monitoredUserIdList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $monitoredUserIdList = null;

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
     * Getter for monitoredUserIdList
     *
     * @ElementName monitoredUserIdList
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getMonitoredUserIdList()
    {
        return $this->monitoredUserIdList;
    }

    /**
     * Setter for monitoredUserIdList
     *
     * @ElementName monitoredUserIdList
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil $monitoredUserIdList
     * @return $this
     */
    public function setMonitoredUserIdList($monitoredUserIdList)
    {
        $this->monitoredUserIdList = $monitoredUserIdList;
        return $this;
    }


}

