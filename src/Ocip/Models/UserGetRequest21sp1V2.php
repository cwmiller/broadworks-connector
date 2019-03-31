<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetRequest21sp1V2
 *
 * Request to get the user information. The response is either UserGetResponse21sp1V2 or ErrorResponse.
 *
 *                 Replaced by UserGetRequest22V3 in AS data mode
 *
 * @see UserGetResponse21sp1V2
 * @see ErrorResponse
 * @see UserGetRequest22V3
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:42657","type":"sequence"}]
 */
class UserGetRequest21sp1V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42657
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

