<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserChargeNumberGetRequest14sp9
 *
 * Request the user level data associated with Charge Number.
 *         The response is either a UserChargeNumberGetResponse14sp9 or an ErrorResponse.
 *
 * @see UserChargeNumberGetResponse14sp9
 * @see ErrorResponse
 * @Groups [{"id":"90740443ad13cd13b6013286b20750fc:41","type":"sequence"}]
 */
class UserChargeNumberGetRequest14sp9 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 90740443ad13cd13b6013286b20750fc:41
     * @var string|null
     */
    private $userId = null;

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


}

