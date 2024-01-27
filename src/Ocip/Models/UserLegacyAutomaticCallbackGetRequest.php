<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserLegacyAutomaticCallbackGetRequest
 *
 * Request the user level data associated with Legacy Automatic Callback.
 *         The response is either a UserLegacyAutomaticCallbackGetResponse or an
 *         ErrorResponse.
 *
 * @see UserLegacyAutomaticCallbackGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"dd4a5e667a0f0e4bd6363152331d07ab:162","type":"sequence"}]
 */
class UserLegacyAutomaticCallbackGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group dd4a5e667a0f0e4bd6363152331d07ab:162
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

