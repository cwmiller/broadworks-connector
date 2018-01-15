<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingNameRetrievalGetRequest
 *
 * Request the user level data associated with Calling Name Retrieval.
 *         The response is either a UserCallingNameRetrievalGetResponse or an
 *         ErrorResponse.
 */
class UserCallingNameRetrievalGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

