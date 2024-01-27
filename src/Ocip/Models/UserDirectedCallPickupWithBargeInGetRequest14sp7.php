<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDirectedCallPickupWithBargeInGetRequest14sp7
 *
 * Request the user level data associated with Directed Call Pickup With Barge In.
 *         The response is either a UserDirectedCallPickupWithBargeInGetResponse14sp7 or an
 *         ErrorResponse.
 *
 * @see UserDirectedCallPickupWithBargeInGetResponse14sp7
 * @see ErrorResponse
 * @Groups [{"id":"629ec0086c245a4408ed537aa86aab18:44","type":"sequence"}]
 */
class UserDirectedCallPickupWithBargeInGetRequest14sp7 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 629ec0086c245a4408ed537aa86aab18:44
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

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

