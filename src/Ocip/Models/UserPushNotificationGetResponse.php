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
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:45736","type":"sequence"}]
 */
class UserPushNotificationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName sendPushNotificationForClickToDial
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:45736
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

