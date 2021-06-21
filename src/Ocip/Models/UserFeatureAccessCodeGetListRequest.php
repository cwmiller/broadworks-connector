<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserFeatureAccessCodeGetListRequest
 *
 * Get the list of feature access codes for a user.
 *         The response is either a UserFeatureAccessCodeGetListResponse or an ErrorResponse.
 *         
 *         Replaced by: UserFeatureAccessCodeGetListRequest20 in AS data mode
 *
 * @see UserFeatureAccessCodeGetListResponse
 * @see ErrorResponse
 * @see UserFeatureAccessCodeGetListRequest20
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:13310","type":"sequence"}]
 */
class UserFeatureAccessCodeGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:13310
     * @MinLength 1
     * @MaxLength 161
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

