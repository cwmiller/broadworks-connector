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
 * @Groups [{"id":"b24f81403186e75b29216017d9340516:98","type":"sequence"}]
 */
class UserIncomingCallingPlanGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group b24f81403186e75b29216017d9340516:98
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

