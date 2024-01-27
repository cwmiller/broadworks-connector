<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemEmergencyCallDDoSProtectionGetResponse
 *
 * Response to the SystemEmergencyCallDDoSProtectionGetRequest.
 *
 * @see SystemEmergencyCallDDoSProtectionGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:9775","type":"sequence"}]
 */
class SystemEmergencyCallDDoSProtectionGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName enabled
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:9775
     * @var bool|null
     */
    protected $enabled = null;

    /**
     * @ElementName sampleIntervalSeconds
     * @Type int
     * @Group da582a1f8028404e70d260cf1f891033:9775
     * @MinInclusive 1
     * @MaxInclusive 30
     * @var int|null
     */
    protected $sampleIntervalSeconds = null;

    /**
     * @ElementName protectionRate
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9775
     * @MinInclusive 1
     * @MaxInclusive 10000
     * @var int|null
     */
    protected $protectionRate = null;

    /**
     * @ElementName protectionAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ProtectionAction
     * @Group da582a1f8028404e70d260cf1f891033:9775
     * @var \CWM\BroadWorksConnector\Ocip\Models\ProtectionAction|null
     */
    protected $protectionAction = null;

    /**
     * Getter for enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enabled;
    }

    /**
     * Setter for enabled
     *
     * @param bool $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnabled()
    {
        $this->enabled = null;
        return $this;
    }

    /**
     * Getter for sampleIntervalSeconds
     *
     * @return int
     */
    public function getSampleIntervalSeconds()
    {
        return $this->sampleIntervalSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sampleIntervalSeconds;
    }

    /**
     * Setter for sampleIntervalSeconds
     *
     * @param int $sampleIntervalSeconds
     * @return $this
     */
    public function setSampleIntervalSeconds($sampleIntervalSeconds)
    {
        $this->sampleIntervalSeconds = $sampleIntervalSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSampleIntervalSeconds()
    {
        $this->sampleIntervalSeconds = null;
        return $this;
    }

    /**
     * Getter for protectionRate
     *
     * @return int
     */
    public function getProtectionRate()
    {
        return $this->protectionRate instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->protectionRate;
    }

    /**
     * Setter for protectionRate
     *
     * @param int $protectionRate
     * @return $this
     */
    public function setProtectionRate($protectionRate)
    {
        $this->protectionRate = $protectionRate;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProtectionRate()
    {
        $this->protectionRate = null;
        return $this;
    }

    /**
     * Getter for protectionAction
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ProtectionAction
     */
    public function getProtectionAction()
    {
        return $this->protectionAction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->protectionAction;
    }

    /**
     * Setter for protectionAction
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ProtectionAction $protectionAction
     * @return $this
     */
    public function setProtectionAction(\CWM\BroadWorksConnector\Ocip\Models\ProtectionAction $protectionAction)
    {
        $this->protectionAction = $protectionAction;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProtectionAction()
    {
        $this->protectionAction = null;
        return $this;
    }
}

