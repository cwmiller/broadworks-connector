<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerAdminGetRequest
 *
 * Get a reseller administrators profile.
 *         The response is either a ResellerAdminGetResponse or an ErrorResponse.
 *
 * @see ResellerAdminGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"7e8feb1c28b49a3b8755f86e716ebee7:136","type":"sequence"}]
 */
class ResellerAdminGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 7e8feb1c28b49a3b8755f86e716ebee7:136
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

