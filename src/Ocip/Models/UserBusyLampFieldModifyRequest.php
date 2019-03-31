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
 * @Groups [{"id":"4faeca417998d23ce2ff6b0b43212aa6:229","type":"sequence"}]
 */
class UserBusyLampFieldModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 4faeca417998d23ce2ff6b0b43212aa6:229
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName listURI
     * @Type string
     * @Nillable
     * @Optional
     * @Group 4faeca417998d23ce2ff6b0b43212aa6:229
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $listURI = null;

    /**
     * @ElementName monitoredUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @Optional
     * @Group 4faeca417998d23ce2ff6b0b43212aa6:229
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $monitoredUserIdList = null;

    /**
     * @ElementName enableCallParkNotification
     * @Type bool
     * @Optional
     * @Group 4faeca417998d23ce2ff6b0b43212aa6:229
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
    public function setListURI($listURI = null)
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

