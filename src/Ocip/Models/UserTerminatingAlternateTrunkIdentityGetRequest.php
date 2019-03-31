<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserTerminatingAlternateTrunkIdentityGetRequest
 *
 * Request the user level data associated with Terminating Alternate Trunk Identity.
 *       The response is either a UserTerminatingAlternateTrunkIdentityGetResponse or an
 *       ErrorResponse.
 *
 * @see UserTerminatingAlternateTrunkIdentityGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:3976","type":"sequence"}]
 */
class UserTerminatingAlternateTrunkIdentityGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3976
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

