<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemEmergencyCallDDoSProtectionGetResponse
 *
 * Response to the SystemEmergencyCallDDoSProtectionGetRequest.
 *
 * @see SystemEmergencyCallDDoSProtectionGetRequest
 */
class SystemEmergencyCallDDoSProtectionGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enabled
     * @Type bool
     * @var bool|null
     */
    private $enabled = null;

    /**
     * @ElementName sampleIntervalSeconds
     * @Type int
     * @var int|null
     */
    private $sampleIntervalSeconds = null;

    /**
     * @ElementName protectionRate
     * @Type int
     * @var int|null
     */
    private $protectionRate = null;

    /**
     * @ElementName protectionAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ProtectionAction
     * @var \CWM\BroadWorksConnector\Ocip\Models\ProtectionAction|null
     */
    private $protectionAction = null;

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

