<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserConsolidatedModifyRequestEndpoint
 *
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:1367","type":"choice"}]
 */
class UserConsolidatedModifyRequestEndpoint
{

    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedAccessDeviceMultipleIdentityEndpointAndContactModify
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1367
     * @var \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedAccessDeviceMultipleIdentityEndpointAndContactModify|null
     */
    private $accessDeviceEndpoint = null;

    /**
     * @ElementName trunkAddressing
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactModify
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1367
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactModify|null
     */
    private $trunkAddressing = null;

    /**
     * Getter for accessDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedAccessDeviceMultipleIdentityEndpointAndContactModify
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedAccessDeviceMultipleIdentityEndpointAndContactModify $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\ConsolidatedAccessDeviceMultipleIdentityEndpointAndContactModify $accessDeviceEndpoint)
    {
        $this->accessDeviceEndpoint = $accessDeviceEndpoint;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDeviceEndpoint()
    {
        $this->accessDeviceEndpoint = null;
        return $this;
    }

    /**
     * Getter for trunkAddressing
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactModify
     */
    public function getTrunkAddressing()
    {
        return $this->trunkAddressing instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkAddressing;
    }

    /**
     * Setter for trunkAddressing
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactModify $trunkAddressing
     * @return $this
     */
    public function setTrunkAddressing(\CWM\BroadWorksConnector\Ocip\Models\TrunkAddressingMultipleContactModify $trunkAddressing)
    {
        $this->trunkAddressing = $trunkAddressing;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkAddressing()
    {
        $this->trunkAddressing = null;
        return $this;
    }


}

