<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterGetAvailableDNISListResponse
 *
 * Response to UserCallCenterGetAvailableDNISListRequest.
 *         Contains a list of available DNIS for agent to select.
 *
 * @see UserCallCenterGetAvailableDNISListRequest
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:7035","type":"sequence"}]
 */
class UserCallCenterGetAvailableDNISListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName availableDNIS
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DNISKey
     * @Array
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:7035
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNISKey[]
     */
    protected $availableDNIS = [
        
    ];

    /**
     * Getter for availableDNIS
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNISKey[]
     */
    public function getAvailableDNIS()
    {
        return $this->availableDNIS instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->availableDNIS;
    }

    /**
     * Setter for availableDNIS
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNISKey[] $availableDNIS
     * @return $this
     */
    public function setAvailableDNIS(array $availableDNIS)
    {
        $this->availableDNIS = $availableDNIS;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAvailableDNIS()
    {
        $this->availableDNIS = null;
        return $this;
    }

    /**
     * Adder for availableDNIS
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNISKey $availableDNIS
     * @return $this
     */
    public function addAvailableDNIS($availableDNIS)
    {
        $this->availableDNIS[] = $availableDNIS;
        return $this;
    }
}

