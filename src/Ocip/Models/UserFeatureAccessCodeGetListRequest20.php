<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserFeatureAccessCodeGetListRequest20
 *
 * Get the list of feature access codes for a user.
 *         The response is either a UserFeatureAccessCodeGetListResponse20 or an
 * ErrorResponse.
 *         In release 20 the "Call Recording" FAC name is changed to
 *         "Call Recording Start".
 *         Replaced by: UserFeatureAccessCodeGetListRequest21 in AS data mode
 *
 * @see UserFeatureAccessCodeGetListResponse20
 * @see ErrorResponse
 * @see UserFeatureAccessCodeGetListRequest21
 */
class UserFeatureAccessCodeGetListRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

