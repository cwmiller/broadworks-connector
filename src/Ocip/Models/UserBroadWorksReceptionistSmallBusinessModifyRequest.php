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
 * @Groups [{"id":"d8ae66e5f02195a36162958f9d5115db:122","type":"sequence"}]
 */
class UserBroadWorksReceptionistSmallBusinessModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group d8ae66e5f02195a36162958f9d5115db:122
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName monitoredUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @Optional
     * @Group d8ae66e5f02195a36162958f9d5115db:122
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

