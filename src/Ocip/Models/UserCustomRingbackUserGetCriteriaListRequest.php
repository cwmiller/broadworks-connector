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
 * @Groups [{"id":"8a23aaf1ac27e4cc24358bde118786dd:155","type":"sequence"}]
 */
class UserCustomRingbackUserGetCriteriaListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 8a23aaf1ac27e4cc24358bde118786dd:155
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

