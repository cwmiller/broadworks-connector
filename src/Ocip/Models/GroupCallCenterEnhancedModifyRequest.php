<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterEnhancedModifyRequest
 *
 * Modify the Call Center Enhanced configuration data for a Call
 *         Center.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced By: GroupCallCenterModifyInstanceRequest16
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see GroupCallCenterModifyInstanceRequest16
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:4987","type":"sequence"}]
 */
class GroupCallCenterEnhancedModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:4987
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName overrideAgentWrapUpTime
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:4987
     * @var bool|null
     */
    protected $overrideAgentWrapUpTime = null;

    /**
     * @ElementName wrapUpSeconds
     * @Type int
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:4987
     * @MinInclusive 1
     * @MaxInclusive 3600
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $wrapUpSeconds = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for overrideAgentWrapUpTime
     *
     * @return bool
     */
    public function getOverrideAgentWrapUpTime()
    {
        return $this->overrideAgentWrapUpTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->overrideAgentWrapUpTime;
    }

    /**
     * Setter for overrideAgentWrapUpTime
     *
     * @param bool $overrideAgentWrapUpTime
     * @return $this
     */
    public function setOverrideAgentWrapUpTime($overrideAgentWrapUpTime)
    {
        $this->overrideAgentWrapUpTime = $overrideAgentWrapUpTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOverrideAgentWrapUpTime()
    {
        $this->overrideAgentWrapUpTime = null;
        return $this;
    }

    /**
     * Getter for wrapUpSeconds
     *
     * @return int|null
     */
    public function getWrapUpSeconds()
    {
        return $this->wrapUpSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->wrapUpSeconds;
    }

    /**
     * Setter for wrapUpSeconds
     *
     * @param int|null $wrapUpSeconds
     * @return $this
     */
    public function setWrapUpSeconds($wrapUpSeconds = null)
    {
        if ($wrapUpSeconds === null) {
            $this->wrapUpSeconds = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->wrapUpSeconds = $wrapUpSeconds;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWrapUpSeconds()
    {
        $this->wrapUpSeconds = null;
        return $this;
    }
}

