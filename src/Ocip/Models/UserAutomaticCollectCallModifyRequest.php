<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAutomaticCollectCallModifyRequest
 *
 * Modify user Automatic Collect Call service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"0d5db1a19a0aeda6f13d1f1c609efa0a:192","type":"sequence"}]
 */
class UserAutomaticCollectCallModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 0d5db1a19a0aeda6f13d1f1c609efa0a:192
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName enableAutomaticCollectCall
     * @Type bool
     * @Optional
     * @Group 0d5db1a19a0aeda6f13d1f1c609efa0a:192
     * @var bool|null
     */
    protected $enableAutomaticCollectCall = null;

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

    /**
     * Getter for enableAutomaticCollectCall
     *
     * @return bool
     */
    public function getEnableAutomaticCollectCall()
    {
        return $this->enableAutomaticCollectCall instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAutomaticCollectCall;
    }

    /**
     * Setter for enableAutomaticCollectCall
     *
     * @param bool $enableAutomaticCollectCall
     * @return $this
     */
    public function setEnableAutomaticCollectCall($enableAutomaticCollectCall)
    {
        $this->enableAutomaticCollectCall = $enableAutomaticCollectCall;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAutomaticCollectCall()
    {
        $this->enableAutomaticCollectCall = null;
        return $this;
    }
}

