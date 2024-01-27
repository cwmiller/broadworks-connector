<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCustomRingbackUserGetCriteriaListRequest
 *
 * Get the user's custom ringback service criteria listing.
 *         The response is either a UserCustomRingbackUserGetCriteriaListResponse or an ErrorResponse.
 *
 * @see UserCustomRingbackUserGetCriteriaListResponse
 * @see ErrorResponse
 * @Groups [{"id":"2e482dcb2fc2f9ef31621d21b9816a42:155","type":"sequence"}]
 */
class UserCustomRingbackUserGetCriteriaListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 2e482dcb2fc2f9ef31621d21b9816a42:155
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

