<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingNameRetrievalGetRequest
 *
 * Request the user level data associated with Calling Name Retrieval.
 *         The response is either a UserCallingNameRetrievalGetResponse or an
 *         ErrorResponse.
 *
 * @see UserCallingNameRetrievalGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"ed9874e26a444d790a2881033c6c8fab:115","type":"sequence"}]
 */
class UserCallingNameRetrievalGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ed9874e26a444d790a2881033c6c8fab:115
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

