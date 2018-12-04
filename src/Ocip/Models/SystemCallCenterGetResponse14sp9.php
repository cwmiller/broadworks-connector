<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterGetResponse14sp9
 *
 * Response to SystemCallCenterGetRequest14sp9.
 *
 * @see SystemCallCenterGetRequest14sp9
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:18031","type":"sequence"}]
 */
class SystemCallCenterGetResponse14sp9 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultFromAddress
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:18031
     * @var string|null
     */
    private $defaultFromAddress = null;

    /**
     * @ElementName statisticsSamplingPeriodMinutes
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSamplingPeriodMinutes
     * @Group 1a79c7896cb04feac6eff47a5321756e:18031
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSamplingPeriodMinutes|null
     */
    private $statisticsSamplingPeriodMinutes = null;

    /**
     * Getter for defaultFromAddress
     *
     * @return string
     */
    public function getDefaultFromAddress()
    {
        return $this->defaultFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultFromAddress;
    }

    /**
     * Setter for defaultFromAddress
     *
     * @param string $defaultFromAddress
     * @return $this
     */
    public function setDefaultFromAddress($defaultFromAddress)
    {
        $this->defaultFromAddress = $defaultFromAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultFromAddress()
    {
        $this->defaultFromAddress = null;
        return $this;
    }

    /**
     * Getter for statisticsSamplingPeriodMinutes
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSamplingPeriodMinutes
     */
    public function getStatisticsSamplingPeriodMinutes()
    {
        return $this->statisticsSamplingPeriodMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->statisticsSamplingPeriodMinutes;
    }

    /**
     * Setter for statisticsSamplingPeriodMinutes
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSamplingPeriodMinutes $statisticsSamplingPeriodMinutes
     * @return $this
     */
    public function setStatisticsSamplingPeriodMinutes(\CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSamplingPeriodMinutes $statisticsSamplingPeriodMinutes)
    {
        $this->statisticsSamplingPeriodMinutes = $statisticsSamplingPeriodMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStatisticsSamplingPeriodMinutes()
    {
        $this->statisticsSamplingPeriodMinutes = null;
        return $this;
    }


}

