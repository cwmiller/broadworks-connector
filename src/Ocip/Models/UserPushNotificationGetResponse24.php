<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPushNotificationGetResponse24
 *
 * Response to UserPushNotificationGetRequest24.
 *
 * @see UserPushNotificationGetRequest24
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:3435","type":"sequence"}]
 */
class UserPushNotificationGetResponse24 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName sendPushNotificationForClickToDial
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3435
     * @var bool|null
     */
    protected $sendPushNotificationForClickToDial = null;

    /**
     * @ElementName sendPushNotificationForGroupPaging
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3435
     * @var bool|null
     */
    protected $sendPushNotificationForGroupPaging = null;

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

