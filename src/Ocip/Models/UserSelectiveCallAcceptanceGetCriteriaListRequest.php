<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSelectiveCallAcceptanceGetCriteriaListRequest
 *
 * Get the user's selective call acceptance criteria listing.
 *         The response is either a UserSelectiveCallAcceptanceGetCriteriaListResponse or an ErrorResponse.
 *
 * @see UserSelectiveCallAcceptanceGetCriteriaListResponse
 * @see ErrorResponse
 * @Groups [{"id":"e6d1568083c7f74ac1e8949c7acb10cf:90","type":"sequence"}]
 */
class UserSelectiveCallAcceptanceGetCriteriaListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group e6d1568083c7f74ac1e8949c7acb10cf:90
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

