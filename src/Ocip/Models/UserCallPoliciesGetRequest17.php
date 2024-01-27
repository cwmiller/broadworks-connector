<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallPoliciesGetRequest17
 *
 * Request the user level data associated with Call Policies.
 *         The response is either a UserCallPoliciesGetResponse17
 *         or an ErrorResponse.
 *         
 *         Replaced by: UserCallPoliciesGetRequest19sp1 in AS data mode
 *
 * @see UserCallPoliciesGetResponse17
 * @see ErrorResponse
 * @see UserCallPoliciesGetRequest19sp1
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:16914","type":"sequence"}]
 */
class UserCallPoliciesGetRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:16914
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

