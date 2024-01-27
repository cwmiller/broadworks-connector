<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPushNotificationGetResponse
 *
 * Response to UserPushNotificationGetRequest.
 *         
 *         Replaced by: UserPushNotificationResponse24
 *
 * @see UserPushNotificationGetRequest
 * @see UserPushNotificationResponse24
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:46398","type":"sequence"}]
 */
class UserPushNotificationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName sendPushNotificationForClickToDial
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:46398
     * @var bool|null
     */
    protected $sendPushNotificationForClickToDial = null;

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
}

