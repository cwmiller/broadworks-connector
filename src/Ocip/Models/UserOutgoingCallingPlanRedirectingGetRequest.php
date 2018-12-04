<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutgoingCallingPlanRedirectingGetRequest
 *
 * Request the initiating call forwards/transfer permissions for a user.
 *         The response is either a UserOutgoingCallingPlanRedirectingGetResponse or an ErrorResponse.
 *
 * @see UserOutgoingCallingPlanRedirectingGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"8366f5f5d1fbfb9742236aba282c1dab:1582","type":"sequence"}]
 */
class UserOutgoingCallingPlanRedirectingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 8366f5f5d1fbfb9742236aba282c1dab:1582
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

