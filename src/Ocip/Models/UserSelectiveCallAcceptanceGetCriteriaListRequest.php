<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSelectiveCallAcceptanceGetCriteriaListRequest
 *
 * Get the user's selective call acceptance criteria listing.
 *         The response is either a UserSelectiveCallAcceptanceGetResponse or an ErrorResponse.
 *
 * @see UserSelectiveCallAcceptanceGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"e8517420bc6d5462dc1b2d9f82295894:90","type":"sequence"}]
 */
class UserSelectiveCallAcceptanceGetCriteriaListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group e8517420bc6d5462dc1b2d9f82295894:90
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

