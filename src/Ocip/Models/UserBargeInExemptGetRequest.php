<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBargeInExemptGetRequest
 *
 * Request the user level data associated with Barge In Exempt.
 *         The response is either a UserBargeInExemptGetResponse or an
 *         ErrorResponse.
 *
 * @see UserBargeInExemptGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"0d9b3d8688162f1e9a9cae6f58ab8f13:42","type":"sequence"}]
 */
class UserBargeInExemptGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 0d9b3d8688162f1e9a9cae6f58ab8f13:42
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

