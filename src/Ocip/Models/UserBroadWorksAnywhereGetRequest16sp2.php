<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksAnywhereGetRequest16sp2
 *
 * Get the list of all the BroadWorks Anywhere phone numbers for the user.
 *         The response is either a UserBroadWorksAnywhereGetResponse16sp2 or an ErrorResponse.
 *
 * @see UserBroadWorksAnywhereGetResponse16sp2
 * @see ErrorResponse
 * @Groups [{"id":"72f634ecc58842ce9d362ca629a47ea9:474","type":"sequence"}]
 */
class UserBroadWorksAnywhereGetRequest16sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 72f634ecc58842ce9d362ca629a47ea9:474
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

