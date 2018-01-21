<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCombinedServicePackAuthorizationList
 *
 * A list of service packs that replaces previously authorized service packs.
 */
class ReplacementCombinedServicePackAuthorizationList
{

    /**
     * @ElementName servicePackAuthorization
     * @var \CWM\BroadWorksConnector\Ocip\Models\CombinedServicePackAuthorization[]
     */
    private $servicePackAuthorization = array(
        
    );

    /**
     * Getter for servicePackAuthorization
     *
     * @ElementName servicePackAuthorization
     * @return \CWM\BroadWorksConnector\Ocip\Models\CombinedServicePackAuthorization[]
     */
    public function getServicePackAuthorization()
    {
        return $this->servicePackAuthorization;
    }

    /**
     * Setter for servicePackAuthorization
     *
     * @ElementName servicePackAuthorization
     * @param \CWM\BroadWorksConnector\Ocip\Models\CombinedServicePackAuthorization[] $servicePackAuthorization
     * @return $this
     */
    public function setServicePackAuthorization($servicePackAuthorization)
    {
        $this->servicePackAuthorization = $servicePackAuthorization;
        return $this;
    }

    /**
     * Adder for servicePackAuthorization
     *
     * @ElementName servicePackAuthorization
     * @param \CWM\BroadWorksConnector\Ocip\Models\CombinedServicePackAuthorization $servicePackAuthorization
     * @return $this
     */
    public function addServicePackAuthorization($servicePackAuthorization)
    {
        $this->servicePackAuthorization []= $servicePackAuthorization;
        return $this;
    }


}

