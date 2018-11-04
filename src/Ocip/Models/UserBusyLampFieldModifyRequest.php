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
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName listURI
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $listURI = null;

    /**
     * @ElementName monitoredUserIdList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $monitoredUserIdList = null;

    /**
     * @ElementName enableCallParkNotification
     * @var bool|null
     */
    private $enableCallParkNotification = null;

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
     * Getter for listURI
     *
     * @ElementName listURI
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getListURI()
    {
        return $this->listURI;
    }

    /**
     * Setter for listURI
     *
     * @ElementName listURI
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $listURI
     * @return $this
     */
    public function setListURI($listURI)
    {
        $this->listURI = $listURI;
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

    /**
     * Getter for enableCallParkNotification
     *
     * @ElementName enableCallParkNotification
     * @return bool|null
     */
    public function getEnableCallParkNotification()
    {
        return $this->enableCallParkNotification;
    }

    /**
     * Setter for enableCallParkNotification
     *
     * @ElementName enableCallParkNotification
     * @param bool|null $enableCallParkNotification
     * @return $this
     */
    public function setEnableCallParkNotification($enableCallParkNotification)
    {
        $this->enableCallParkNotification = $enableCallParkNotification;
        return $this;
    }


}

