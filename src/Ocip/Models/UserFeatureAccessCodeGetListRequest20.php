<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserFeatureAccessCodeGetListRequest20
 *
 * Get the list of feature access codes for a user.
 *         The response is either a UserFeatureAccessCodeGetListResponse20 or an ErrorResponse.
 *         In release 20 the "Call Recording" FAC name is changed to
 *         "Call Recording Start".
 *         Replaced by: UserFeatureAccessCodeGetListRequest21 in AS data mode
 *
 * @see UserFeatureAccessCodeGetListResponse20
 * @see ErrorResponse
 * @see UserFeatureAccessCodeGetListRequest21
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:34555","type":"sequence"}]
 */
class UserFeatureAccessCodeGetListRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:34555
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

