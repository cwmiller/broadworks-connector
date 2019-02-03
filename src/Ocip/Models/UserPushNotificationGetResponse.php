<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPushNotificationGetResponse
 *
 * Response to UserPushNotificationGetRequest.
 *
 * @see UserPushNotificationGetRequest
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:3391","type":"sequence"}]
 */
class UserPushNotificationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName sendPushNotificationForClickToDial
     * @Type bool
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3391
     * @var bool|null
     */
    private $sendPushNotificationForClickToDial = null;

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

