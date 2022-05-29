<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterEnhancedGetResponse
 *
 * Response to GroupCallCenterEnhancedGetRequest.
 *
 * @see GroupCallCenterEnhancedGetRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:4836","type":"sequence"}]
 */
class GroupCallCenterEnhancedGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName overrideAgentWrapUpTime
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4836
     * @var bool|null
     */
    protected $overrideAgentWrapUpTime = null;

    /**
     * @ElementName wrapUpSeconds
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4836
     * @MinInclusive 1
     * @MaxInclusive 3600
     * @var int|null
     */
    protected $wrapUpSeconds = null;

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
     * @return int
     */
    public function getWrapUpSeconds()
    {
        return $this->wrapUpSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->wrapUpSeconds;
    }

    /**
     * Setter for wrapUpSeconds
     *
     * @param int $wrapUpSeconds
     * @return $this
     */
    public function setWrapUpSeconds($wrapUpSeconds)
    {
        $this->wrapUpSeconds = $wrapUpSeconds;
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

