<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpointList
 *
 * A list of shared call appearance endpoints that replaces existing endpoints.
 *
 * @Groups [{"id":"18b369af88e42ffdb4166615c670ce2c:2863","type":"sequence"}]
 */
class ReplacementConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpointList
{

    /**
     * @ElementName sharedCallAppearanceAccessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpoint
     * @Array
     * @Group 18b369af88e42ffdb4166615c670ce2c:2863
     * @var \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpoint[]
     */
    private $sharedCallAppearanceAccessDeviceEndpoint = array(
        
    );

    /**
     * Getter for sharedCallAppearanceAccessDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpoint[]
     */
    public function getSharedCallAppearanceAccessDeviceEndpoint()
    {
        return $this->sharedCallAppearanceAccessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sharedCallAppearanceAccessDeviceEndpoint;
    }

    /**
     * Setter for sharedCallAppearanceAccessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpoint[] $sharedCallAppearanceAccessDeviceEndpoint
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedSharedCallAppearanceAccessDeviceMultipleIdentityEndpoint $sharedCallAppearanceAccessDeviceEndpoint
     * @return $this
     */
    public function addSharedCallAppearanceAccessDeviceEndpoint($sharedCallAppearanceAccessDeviceEndpoint)
    {
        $this->sharedCallAppearanceAccessDeviceEndpoint[] = $sharedCallAppearanceAccessDeviceEndpoint;
        return $this;
    }


}

