<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterEnhancedGetResponse
 *
 * Response to GroupCallCenterEnhancedGetRequest.
 *
 * @see GroupCallCenterEnhancedGetRequest
 */
class GroupCallCenterEnhancedGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName overrideAgentWrapUpTime
     * @var bool|null
     */
    private $overrideAgentWrapUpTime = null;

    /**
     * @ElementName wrapUpSeconds
     * @var int|null
     */
    private $wrapUpSeconds = null;

    /**
     * Getter for overrideAgentWrapUpTime
     *
     * @ElementName overrideAgentWrapUpTime
     * @return bool|null
     */
    public function getOverrideAgentWrapUpTime()
    {
        return $this->overrideAgentWrapUpTime;
    }

    /**
     * Setter for overrideAgentWrapUpTime
     *
     * @ElementName overrideAgentWrapUpTime
     * @param bool|null $overrideAgentWrapUpTime
     * @return $this
     */
    public function setOverrideAgentWrapUpTime($overrideAgentWrapUpTime)
    {
        $this->overrideAgentWrapUpTime = $overrideAgentWrapUpTime;
        return $this;
    }

    /**
     * Getter for wrapUpSeconds
     *
     * @ElementName wrapUpSeconds
     * @return int|null
     */
    public function getWrapUpSeconds()
    {
        return $this->wrapUpSeconds;
    }

    /**
     * Setter for wrapUpSeconds
     *
     * @ElementName wrapUpSeconds
     * @param int|null $wrapUpSeconds
     * @return $this
     */
    public function setWrapUpSeconds($wrapUpSeconds)
    {
        $this->wrapUpSeconds = $wrapUpSeconds;
        return $this;
    }


}

