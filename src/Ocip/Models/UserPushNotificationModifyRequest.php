<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPushNotificationModifyRequest
 *
 * Modify the push notification settings for a user.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:3446","type":"sequence"}]
 */
class UserPushNotificationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3446
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName sendPushNotificationForClickToDial
     * @Type bool
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3446
     * @var bool|null
     */
    protected $sendPushNotificationForClickToDial = null;

    /**
     * @ElementName sendPushNotificationForGroupPaging
     * @Type bool
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3446
     * @var bool|null
     */
    protected $sendPushNotificationForGroupPaging = null;

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
     * Getter for sendPushNotificationForClickToDial
     *
     * @return bool
     */
    public function getSendPushNotificationForClickToDial()
    {
        return $this->sendPushNotificationForClickToDial instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendPushNotificationForClickToDial;
    }

    /**
     * Setter for sendPushNotificationForClickToDial
     *
     * @param bool $sendPushNotificationForClickToDial
     * @return $this
     */
    public function setSendPushNotificationForClickToDial($sendPushNotificationForClickToDial)
    {
        $this->sendPushNotificationForClickToDial = $sendPushNotificationForClickToDial;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendPushNotificationForClickToDial()
    {
        $this->sendPushNotificationForClickToDial = null;
        return $this;
    }

    /**
     * Getter for sendPushNotificationForGroupPaging
     *
     * @return bool
     */
    public function getSendPushNotificationForGroupPaging()
    {
        return $this->sendPushNotificationForGroupPaging instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendPushNotificationForGroupPaging;
    }

    /**
     * Setter for sendPushNotificationForGroupPaging
     *
     * @param bool $sendPushNotificationForGroupPaging
     * @return $this
     */
    public function setSendPushNotificationForGroupPaging($sendPushNotificationForGroupPaging)
    {
        $this->sendPushNotificationForGroupPaging = $sendPushNotificationForGroupPaging;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendPushNotificationForGroupPaging()
    {
        $this->sendPushNotificationForGroupPaging = null;
        return $this;
    }


}

