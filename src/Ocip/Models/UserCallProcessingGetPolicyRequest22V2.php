<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallProcessingGetPolicyRequest22V2
 *
 * Request the user level data associated with Call Processing Policy.
 *         The response is either a UserCallProcessingGetPolicyResponse22V2 or an
 *         ErrorResponse.
 *         
 *         Replaced by: UserCallProcessingGetPolicyRequest23 in AS data mode.
 *
 * @see UserCallProcessingGetPolicyResponse22V2
 * @see ErrorResponse
 * @see UserCallProcessingGetPolicyRequest23
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:19130","type":"sequence"}]
 */
class UserCallProcessingGetPolicyRequest22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:19130
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

