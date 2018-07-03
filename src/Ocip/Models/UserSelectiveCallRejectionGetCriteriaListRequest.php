<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSelectiveCallRejectionGetCriteriaListRequest
 *
 * Get the user's selective call rejection criteria listing.
 *         The response is either a UserSelectiveCallRejectionGetResponse or an
 * ErrorResponse.
 *
 * @see UserSelectiveCallRejectionGetResponse
 * @see ErrorResponse
 */
class UserSelectiveCallRejectionGetCriteriaListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

