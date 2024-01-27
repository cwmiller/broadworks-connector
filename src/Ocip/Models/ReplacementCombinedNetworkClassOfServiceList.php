<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCombinedNetworkClassOfServiceList
 *
 * A list of network class of services that replaces a previously network class of services.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4238","type":"sequence"}]
 */
class ReplacementCombinedNetworkClassOfServiceList
{
    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Array
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4238
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $networkClassOfService = [
        
    ];

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

