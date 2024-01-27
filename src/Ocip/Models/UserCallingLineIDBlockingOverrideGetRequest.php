<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingLineIDBlockingOverrideGetRequest
 *
 * Request the user level data associated with Calling Line ID Blocking Override.
 *         The response is either a UserCallingLineIDBlockingOverrideGetResponse or an
 *         ErrorResponse.
 *
 * @see UserCallingLineIDBlockingOverrideGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"2f311a4894deb89024261851208263ff:44","type":"sequence"}]
 */
class UserCallingLineIDBlockingOverrideGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 2f311a4894deb89024261851208263ff:44
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

