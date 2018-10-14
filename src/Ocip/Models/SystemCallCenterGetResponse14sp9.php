<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterGetResponse14sp9
 *
 * Response to SystemCallCenterGetRequest14sp9.
 *
 * @see SystemCallCenterGetRequest14sp9
 */
class SystemCallCenterGetResponse14sp9 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultFromAddress
     * @var string|null
     */
    private $defaultFromAddress = null;

    /**
     * @ElementName statisticsSamplingPeriodMinutes
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSamplingPeriodMinutes|null
     */
    private $statisticsSamplingPeriodMinutes = null;

    /**
     * Getter for defaultFromAddress
     *
     * @ElementName defaultFromAddress
     * @return string|null
     */
    public function getDefaultFromAddress()
    {
        return $this->defaultFromAddress;
    }

    /**
     * Setter for defaultFromAddress
     *
     * @ElementName defaultFromAddress
     * @param string|null $defaultFromAddress
     * @return $this
     */
    public function setDefaultFromAddress($defaultFromAddress)
    {
        $this->defaultFromAddress = $defaultFromAddress;
        return $this;
    }

    /**
     * Getter for statisticsSamplingPeriodMinutes
     *
     * @ElementName statisticsSamplingPeriodMinutes
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSamplingPeriodMinutes|null
     */
    public function getStatisticsSamplingPeriodMinutes()
    {
        return $this->statisticsSamplingPeriodMinutes;
    }

    /**
     * Setter for statisticsSamplingPeriodMinutes
     *
     * @ElementName statisticsSamplingPeriodMinutes
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSamplingPeriodMinutes|null $statisticsSamplingPeriodMinutes
     * @return $this
     */
    public function setStatisticsSamplingPeriodMinutes(\CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSamplingPeriodMinutes $statisticsSamplingPeriodMinutes)
    {
        $this->statisticsSamplingPeriodMinutes = $statisticsSamplingPeriodMinutes;
        return $this;
    }


}

