<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksReceptionistEnterpriseModifyRequest
 *
 * Replace the BroadWorks Receptionist - Enterprise monitored user list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"44477d346d2631b033071e12af214ac8:216","type":"sequence"}]
 */
class UserBroadWorksReceptionistEnterpriseModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 44477d346d2631b033071e12af214ac8:216
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName monitoredUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @Optional
     * @Group 44477d346d2631b033071e12af214ac8:216
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $monitoredUserIdList = null;

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
    public function setMonitoredUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $monitoredUserIdList = null)
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

