<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExecutiveModifyFilteringExecutionServerRequest
 *
 * Modify the filtering setting for an executive user.
 *         Both executive and the executive assistant can run this command.
 *         requestingUserId is either executive or executive assistant.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"0b10bca40a55275de6ba2076c583b7fd:89","type":"sequence"}]
 */
class UserExecutiveModifyFilteringExecutionServerRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 0b10bca40a55275de6ba2076c583b7fd:89
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName requestingUserId
     * @Type string
     * @Optional
     * @Group 0b10bca40a55275de6ba2076c583b7fd:89
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $requestingUserId = null;

    /**
     * @ElementName enableFiltering
     * @Type bool
     * @Optional
     * @Group 0b10bca40a55275de6ba2076c583b7fd:89
     * @var bool|null
     */
    protected $enableFiltering = null;

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
     * Getter for requestingUserId
     *
     * @return string
     */
    public function getRequestingUserId()
    {
        return $this->requestingUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->requestingUserId;
    }

    /**
     * Setter for requestingUserId
     *
     * @param string $requestingUserId
     * @return $this
     */
    public function setRequestingUserId($requestingUserId)
    {
        $this->requestingUserId = $requestingUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRequestingUserId()
    {
        $this->requestingUserId = null;
        return $this;
    }

    /**
     * Getter for enableFiltering
     *
     * @return bool
     */
    public function getEnableFiltering()
    {
        return $this->enableFiltering instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableFiltering;
    }

    /**
     * Setter for enableFiltering
     *
     * @param bool $enableFiltering
     * @return $this
     */
    public function setEnableFiltering($enableFiltering)
    {
        $this->enableFiltering = $enableFiltering;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableFiltering()
    {
        $this->enableFiltering = null;
        return $this;
    }
}

