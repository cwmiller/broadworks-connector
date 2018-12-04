<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCombinedNetworkClassOfServiceList
 *
 * A list of network class of services that replaces a previously network class of services.
 *
 * @Groups [{"id":"18b369af88e42ffdb4166615c670ce2c:2741","type":"sequence"}]
 */
class ReplacementCombinedNetworkClassOfServiceList
{

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Array
     * @Group 18b369af88e42ffdb4166615c670ce2c:2741
     * @var string[]
     */
    private $networkClassOfService = array(
        
    );

    /**
     * Getter for networkClassOfService
     *
     * @return string[]
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @param string[] $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService(array $networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkClassOfService()
    {
        $this->networkClassOfService = null;
        return $this;
    }

    /**
     * Adder for networkClassOfService
     *
     * @param string $networkClassOfService
     * @return $this
     */
    public function addNetworkClassOfService(string $networkClassOfService)
    {
        $this->networkClassOfService[] = $networkClassOfService;
        return $this;
    }


}

