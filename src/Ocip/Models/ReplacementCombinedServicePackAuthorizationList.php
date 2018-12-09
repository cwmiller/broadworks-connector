<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCombinedServicePackAuthorizationList
 *
 * A list of service packs that replaces previously authorized service packs.
 *
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:2765","type":"sequence"}]
 */
class ReplacementCombinedServicePackAuthorizationList
{

    /**
     * @ElementName servicePackAuthorization
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CombinedServicePackAuthorization
     * @Array
     * @Group 8e629edbac315ae7889caca732382c44:2765
     * @var \CWM\BroadWorksConnector\Ocip\Models\CombinedServicePackAuthorization[]
     */
    private $servicePackAuthorization = array(
        
    );

    /**
     * Getter for servicePackAuthorization
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CombinedServicePackAuthorization[]
     */
    public function getServicePackAuthorization()
    {
        return $this->servicePackAuthorization instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePackAuthorization;
    }

    /**
     * Setter for servicePackAuthorization
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CombinedServicePackAuthorization[] $servicePackAuthorization
     * @return $this
     */
    public function setServicePackAuthorization(array $servicePackAuthorization)
    {
        $this->servicePackAuthorization = $servicePackAuthorization;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePackAuthorization()
    {
        $this->servicePackAuthorization = null;
        return $this;
    }

    /**
     * Adder for servicePackAuthorization
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CombinedServicePackAuthorization $servicePackAuthorization
     * @return $this
     */
    public function addServicePackAuthorization($servicePackAuthorization)
    {
        $this->servicePackAuthorization[] = $servicePackAuthorization;
        return $this;
    }


}

