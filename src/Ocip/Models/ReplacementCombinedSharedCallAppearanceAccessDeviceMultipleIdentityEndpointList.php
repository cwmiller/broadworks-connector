<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCombinedSharedCallAppearanceAccessDeviceMultipleIdentityEndpointList
 *
 * A list of shared call appearance endpoints that replaces existing endpoints.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4273","type":"sequence"}]
 */
class ReplacementCombinedSharedCallAppearanceAccessDeviceMultipleIdentityEndpointList
{
    /**
     * @ElementName sharedCallAppearanceAccessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CombinedSharedCallAppearanceAccessDeviceMultipleIdentityEndpoint
     * @Array
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4273
     * @var \CWM\BroadWorksConnector\Ocip\Models\CombinedSharedCallAppearanceAccessDeviceMultipleIdentityEndpoint[]
     */
    protected $sharedCallAppearanceAccessDeviceEndpoint = [
        
    ];

    /**
     * Getter for sharedCallAppearanceAccessDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CombinedSharedCallAppearanceAccessDeviceMultipleIdentityEndpoint[]
     */
    public function getSharedCallAppearanceAccessDeviceEndpoint()
    {
        return $this->sharedCallAppearanceAccessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sharedCallAppearanceAccessDeviceEndpoint;
    }

    /**
     * Setter for sharedCallAppearanceAccessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CombinedSharedCallAppearanceAccessDeviceMultipleIdentityEndpoint[] $sharedCallAppearanceAccessDeviceEndpoint
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\CombinedSharedCallAppearanceAccessDeviceMultipleIdentityEndpoint $sharedCallAppearanceAccessDeviceEndpoint
     * @return $this
     */
    public function addSharedCallAppearanceAccessDeviceEndpoint($sharedCallAppearanceAccessDeviceEndpoint)
    {
        $this->sharedCallAppearanceAccessDeviceEndpoint[] = $sharedCallAppearanceAccessDeviceEndpoint;
        return $this;
    }
}

