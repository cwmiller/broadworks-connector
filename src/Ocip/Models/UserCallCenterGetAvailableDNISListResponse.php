<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterGetAvailableDNISListResponse
 *
 * Response to UserCallCenterGetAvailableDNISListRequest.
 *         Contains a list of available DNIS for agent to select.
 */
class UserCallCenterGetAvailableDNISListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName availableDNIS
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNISKey[]
     */
    private $availableDNIS = array(
        
    );

    /**
     * Getter for availableDNIS
     *
     * @ElementName availableDNIS
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNISKey[]
     */
    public function getAvailableDNIS()
    {
        return $this->availableDNIS;
    }

    /**
     * Setter for availableDNIS
     *
     * @ElementName availableDNIS
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNISKey[] $availableDNIS
     * @return $this
     */
    public function setAvailableDNIS($availableDNIS)
    {
        $this->availableDNIS = $availableDNIS;
        return $this;
    }

    /**
     * Adder for availableDNIS
     *
     * @ElementName availableDNIS
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNISKey $availableDNIS
     * @return $this
     */
    public function addAvailableDNIS($availableDNIS)
    {
        $this->availableDNIS []= $availableDNIS;
        return $this;
    }


}

