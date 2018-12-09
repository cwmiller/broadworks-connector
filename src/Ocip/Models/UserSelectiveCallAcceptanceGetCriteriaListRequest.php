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
 * @Groups [{"id":"8dbe603c659187d0985d1e5fb7f32eb1:91","type":"sequence"}]
 */
class UserSelectiveCallAcceptanceGetCriteriaListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 8dbe603c659187d0985d1e5fb7f32eb1:91
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

