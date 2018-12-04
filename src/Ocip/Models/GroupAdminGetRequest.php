<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminGetRequest
 *
 * Get a group administrators profile.
 *         The response is either a GroupAdminGetResponse or an ErrorResponse.
 *         Replaced by GroupAdminGetRequest21sp1.
 *
 * @see GroupAdminGetResponse
 * @see ErrorResponse
 * @see GroupAdminGetRequest21sp1
 * @Groups [{"id":"499b56264fbe226bfef3c338c8d4750d:362","type":"sequence"}]
 */
class GroupAdminGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 499b56264fbe226bfef3c338c8d4750d:362
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

