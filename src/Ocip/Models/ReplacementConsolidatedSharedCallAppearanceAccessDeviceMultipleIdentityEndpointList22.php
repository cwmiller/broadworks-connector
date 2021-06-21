<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpointList22
 *
 * A list of shared call appearance endpoints that replaces existing endpoints.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:3882","type":"sequence"}]
 */
class ReplacementConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpointList22
{

    /**
     * @ElementName sharedCallAppearanceAccessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpointAdd22
     * @Array
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3882
     * @var \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpointAdd22[]
     */
    private $sharedCallAppearanceAccessDeviceEndpoint = array(
        
    );

    /**
     * Getter for sharedCallAppearanceAccessDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpointAdd22[]
     */
    public function getSharedCallAppearanceAccessDeviceEndpoint()
    {
        return $this->sharedCallAppearanceAccessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sharedCallAppearanceAccessDeviceEndpoint;
    }

    /**
     * Setter for sharedCallAppearanceAccessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpointAdd22[] $sharedCallAppearanceAccessDeviceEndpoint
     * @return $this
     */
    public function setSharedCallAppearanceAccessDeviceEndpoint(array $sharedCallAppearanceAccessDeviceEndpoint)
    {
        $this->sharedCallAppearanceAccessDeviceEndpoint = $sharedCallAppearanceAccessDeviceEndpoint;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSharedCallAppearanceAccessDeviceEndpoint()
    {
        $this->sharedCallAppearanceAccessDeviceEndpoint = null;
        return $this;
    }

    /**
     * Adder for sharedCallAppearanceAccessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpointAdd22 $sharedCallAppearanceAccessDeviceEndpoint
     * @return $this
     */
    public function addSharedCallAppearanceAccessDeviceEndpoint($sharedCallAppearanceAccessDeviceEndpoint)
    {
        $this->sharedCallAppearanceAccessDeviceEndpoint[] = $sharedCallAppearanceAccessDeviceEndpoint;
        return $this;
    }


}

