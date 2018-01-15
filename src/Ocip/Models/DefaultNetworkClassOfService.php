<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DefaultNetworkClassOfService
 *
 * The default Network Class of Service to set during assignation/unassignation.
 */
class DefaultNetworkClassOfService
{

    /**
     * @ElementName useExisting
     * @var bool|null
     */
    private $useExisting = null;

    /**
     * @ElementName networkClassOfServiceName
     * @var string|null
     */
    private $networkClassOfServiceName = null;

    /**
     * Getter for useExisting
     *
     * @ElementName useExisting
     * @return bool|null
     */
    public function getUseExisting()
    {
        return $this->useExisting;
    }

    /**
     * Setter for useExisting
     *
     * @ElementName useExisting
     * @param bool|null $useExisting
     * @return $this
     */
    public function setUseExisting($useExisting)
    {
        $this->useExisting = $useExisting;
        return $this;
    }

    /**
     * Getter for networkClassOfServiceName
     *
     * @ElementName networkClassOfServiceName
     * @return string|null
     */
    public function getNetworkClassOfServiceName()
    {
        return $this->networkClassOfServiceName;
    }

    /**
     * Setter for networkClassOfServiceName
     *
     * @ElementName networkClassOfServiceName
     * @param string|null $networkClassOfServiceName
     * @return $this
     */
    public function setNetworkClassOfServiceName($networkClassOfServiceName)
    {
        $this->networkClassOfServiceName = $networkClassOfServiceName;
        return $this;
    }


}

