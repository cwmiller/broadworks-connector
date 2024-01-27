<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDnGetActivationListRequest
 *
 * Request to get a list of DNs associated with a user and their activation state.
 *         The response is either UserDnGetActivationListResponse or ErrorResponse.
 *
 * @see UserDnGetActivationListResponse
 * @see ErrorResponse
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:1686","type":"sequence"}]
 */
class UserDnGetActivationListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1686
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

