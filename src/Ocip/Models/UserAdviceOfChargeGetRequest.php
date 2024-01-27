<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAdviceOfChargeGetRequest
 *
 * Request the user level data associated with Advice Of Charge.
 *         The response is either a UserAdviceOfChargeGetResponse or an
 *         ErrorResponse.
 *
 * @see UserAdviceOfChargeGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"9975efc7f5883a0595f811ee72ba4df5:289","type":"sequence"}]
 */
class UserAdviceOfChargeGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 9975efc7f5883a0595f811ee72ba4df5:289
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

