<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSelectiveCallAcceptanceGetCriteriaListRequest
 *
 * Get the user's selective call acceptance criteria listing.
 *         The response is either a UserSelectiveCallAcceptanceGetCriteriaListResponse or an
 * ErrorResponse.
 *
 * @see UserSelectiveCallAcceptanceGetCriteriaListResponse
 * @see ErrorResponse
 */
class UserSelectiveCallAcceptanceGetCriteriaListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }


}

