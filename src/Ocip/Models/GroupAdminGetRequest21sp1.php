<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminGetRequest21sp1
 *
 * Get a group administrators profile.
 *         The response is either a GroupAdminGetResponse21sp1 or an ErrorResponse.
 *
 * @see GroupAdminGetResponse21sp1
 * @see ErrorResponse
 * @Groups [{"id":"7a7d0e1e7f776baf61f0645bc15cbe16:1121","type":"sequence"}]
 */
class GroupAdminGetRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 7a7d0e1e7f776baf61f0645bc15cbe16:1121
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

