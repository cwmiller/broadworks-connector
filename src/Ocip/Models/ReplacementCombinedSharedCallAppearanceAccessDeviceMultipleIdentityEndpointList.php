<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCombinedSharedCallAppearanceAccessDeviceMultipleIdentityEndpointList
 *
 * A list of shared call appearance endpoints that replaces existing endpoints.
 */
class ReplacementCombinedSharedCallAppearanceAccessDeviceMultipleIdentityEndpointList
{

    /**
     * @ElementName sharedCallAppearanceAccessDeviceEndpoint
     * @var \CWM\BroadWorksConnector\Ocip\Models\CombinedSharedCallAppearanceAccessDeviceMultipleIdentityEndpoint[]
     */
    private $sharedCallAppearanceAccessDeviceEndpoint = array(
        
    );

    /**
     * Getter for sharedCallAppearanceAccessDeviceEndpoint
     *
     * @ElementName sharedCallAppearanceAccessDeviceEndpoint
     * @return \CWM\BroadWorksConnector\Ocip\Models\CombinedSharedCallAppearanceAccessDeviceMultipleIdentityEndpoint[]
     */
    public function getSharedCallAppearanceAccessDeviceEndpoint()
    {
        return $this->sharedCallAppearanceAccessDeviceEndpoint;
    }

    /**
     * Setter for sharedCallAppearanceAccessDeviceEndpoint
     *
     * @ElementName sharedCallAppearanceAccessDeviceEndpoint
     * @param \CWM\BroadWorksConnector\Ocip\Models\CombinedSharedCallAppearanceAccessDeviceMultipleIdentityEndpoint[] $sharedCallAppearanceAccessDeviceEndpoint
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\CombinedSharedCallAppearanceAccessDeviceMultipleIdentityEndpoint $sharedCallAppearanceAccessDeviceEndpoint
     * @return $this
     */
    public function addSharedCallAppearanceAccessDeviceEndpoint($sharedCallAppearanceAccessDeviceEndpoint)
    {
        $this->sharedCallAppearanceAccessDeviceEndpoint []= $sharedCallAppearanceAccessDeviceEndpoint;
        return $this;
    }


}

