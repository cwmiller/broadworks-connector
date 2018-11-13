<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBusyLampFieldModifyRequest
 *
 * Modify the settings for the busy lamp field service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserBusyLampFieldModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName listURI
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $listURI = null;

    /**
     * @ElementName monitoredUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $monitoredUserIdList = null;

    /**
     * @ElementName enableCallParkNotification
     * @Type bool
     * @var bool|null
     */
    private $enableCallParkNotification = null;

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
     * Getter for listURI
     *
     * @return string|null
     */
    public function getListURI()
    {
        return $this->listURI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->listURI;
    }

    /**
     * Setter for listURI
     *
     * @param string|null $listURI
     * @return $this
     */
    public function setListURI($listURI)
    {
        if ($listURI === null) {
            $this->listURI = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->listURI = $listURI;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetListURI()
    {
        $this->listURI = null;
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

    /**
     * Getter for enableCallParkNotification
     *
     * @return bool
     */
    public function getEnableCallParkNotification()
    {
        return $this->enableCallParkNotification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableCallParkNotification;
    }

    /**
     * Setter for enableCallParkNotification
     *
     * @param bool $enableCallParkNotification
     * @return $this
     */
    public function setEnableCallParkNotification($enableCallParkNotification)
    {
        $this->enableCallParkNotification = $enableCallParkNotification;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableCallParkNotification()
    {
        $this->enableCallParkNotification = null;
        return $this;
    }


}

