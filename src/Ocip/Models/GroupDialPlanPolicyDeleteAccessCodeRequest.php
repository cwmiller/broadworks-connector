<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDialPlanPolicyDeleteAccessCodeRequest
 *
 * Request to delete a Group level Dial Plan Access Code and its all attribues.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:4431","type":"sequence"}]
 */
class GroupDialPlanPolicyDeleteAccessCodeRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:4431
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:4431
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName accessCode
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:4431
     * @MinLength 1
     * @MaxLength 5
     * @var string|null
     */
    protected $accessCode = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for accessCode
     *
     * @return string
     */
    public function getAccessCode()
    {
        return $this->accessCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessCode;
    }

    /**
     * Setter for accessCode
     *
     * @param string $accessCode
     * @return $this
     */
    public function setAccessCode($accessCode)
    {
        $this->accessCode = $accessCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessCode()
    {
        $this->accessCode = null;
        return $this;
    }
}

