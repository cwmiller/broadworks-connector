<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCombinedNetworkClassOfServiceList
 *
 * A list of network class of services that replaces a previously network class of services.
 *
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:2741","type":"sequence"}]
 */
class ReplacementCombinedNetworkClassOfServiceList
{

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Array
     * @Group 8e629edbac315ae7889caca732382c44:2741
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

