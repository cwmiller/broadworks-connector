<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserIncomingCallingPlanGetRequest
 *
 * Request the user's incoming calling plan settings.
 *         The response is either a UserIncomingCallingPlanGetResponse or an ErrorResponse.
 *
 * @see UserIncomingCallingPlanGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"22e19489d2787693c01f531be4452169:97","type":"sequence"}]
 */
class UserIncomingCallingPlanGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 22e19489d2787693c01f531be4452169:97
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

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

