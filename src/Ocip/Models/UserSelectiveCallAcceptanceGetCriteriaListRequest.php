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
 * @Groups [{"id":"96f8ef6c412295109568d733c1596c87:91","type":"sequence"}]
 */
class UserSelectiveCallAcceptanceGetCriteriaListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 96f8ef6c412295109568d733c1596c87:91
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

