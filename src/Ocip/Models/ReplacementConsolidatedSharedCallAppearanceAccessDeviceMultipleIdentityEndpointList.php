<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpointList
 *
 * A list of shared call appearance endpoints that replaces existing endpoints.
 */
class ReplacementConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpointList
{

    /**
     * @ElementName sharedCallAppearanceAccessDeviceEndpoint
     * @var \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpoint[]
     */
    private $sharedCallAppearanceAccessDeviceEndpoint = array(
        
    );

    /**
     * Getter for sharedCallAppearanceAccessDeviceEndpoint
     *
     * @ElementName sharedCallAppearanceAccessDeviceEndpoint
     * @return \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpoint[]
     */
    public function getSharedCallAppearanceAccessDeviceEndpoint()
    {
        return $this->sharedCallAppearanceAccessDeviceEndpoint;
    }

    /**
     * Setter for sharedCallAppearanceAccessDeviceEndpoint
     *
     * @ElementName sharedCallAppearanceAccessDeviceEndpoint
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpoint[] $sharedCallAppearanceAccessDeviceEndpoint
     * @return $this
     */
    public function setSharedCallAppearanceAccessDeviceEndpoint($sharedCallAppearanceAccessDeviceEndpoint)
    {
        $this->sharedCallAppearanceAccessDeviceEndpoint = $sharedCallAppearanceAccessDeviceEndpoint;
        return $this;
    }

    /**
     * Adder for sharedCallAppearanceAccessDeviceEndpoint
     *
     * @ElementName sharedCallAppearanceAccessDeviceEndpoint
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpoint $sharedCallAppearanceAccessDeviceEndpoint
     * @return $this
     */
    public function addSharedCallAppearanceAccessDeviceEndpoint($sharedCallAppearanceAccessDeviceEndpoint)
    {
        $this->sharedCallAppearanceAccessDeviceEndpoint []= $sharedCallAppearanceAccessDeviceEndpoint;
        return $this;
    }


}

