<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserFeatureAccessCodeGetListRequest21
 *
 * Get the list of feature access codes for a user.
 *         The response is either a UserFeatureAccessCodeGetListResponse20 or an
 * ErrorResponse. 
 *
 *         In release 20 the "Call Recording" FAC name is changed to 
 *         "Call Recording Start".
 *
 * @see UserFeatureAccessCodeGetListResponse20
 * @see ErrorResponse
 */
class UserFeatureAccessCodeGetListRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
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

