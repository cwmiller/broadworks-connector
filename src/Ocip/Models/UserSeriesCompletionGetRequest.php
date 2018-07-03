<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSeriesCompletionGetRequest
 *
 * Gets the details of the Series Completion group that a user belongs to (if any).
 *         Any user can only belong to one Series Completion group.
 *         The response is either UserSeriesCompletionGetResponse or ErrorResponse.
 *
 * @see UserSeriesCompletionGetResponse
 * @see ErrorResponse
 */
class UserSeriesCompletionGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

