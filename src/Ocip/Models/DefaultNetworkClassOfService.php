<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DefaultNetworkClassOfService
 *
 * The default Network Class of Service to set during assignation/unassignation.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:1815","type":"choice"}]
 */
class DefaultNetworkClassOfService
{

    /**
     * @ElementName useExisting
     * @Type bool
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1815
     * @var bool|null
     */
    private $useExisting = null;

    /**
     * @ElementName networkClassOfServiceName
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1815
     * @var string|null
     */
    private $networkClassOfServiceName = null;

    /**
     * Getter for useExisting
     *
     * @return bool
     */
    public function getUseExisting()
    {
        return $this->useExisting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useExisting;
    }

    /**
     * Setter for useExisting
     *
     * @param bool $useExisting
     * @return $this
     */
    public function setUseExisting($useExisting)
    {
        $this->useExisting = $useExisting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseExisting()
    {
        $this->useExisting = null;
        return $this;
    }

    /**
     * Getter for networkClassOfServiceName
     *
     * @return string
     */
    public function getNetworkClassOfServiceName()
    {
        return $this->networkClassOfServiceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkClassOfServiceName;
    }

    /**
     * Setter for networkClassOfServiceName
     *
     * @param string $networkClassOfServiceName
     * @return $this
     */
    public function setNetworkClassOfServiceName($networkClassOfServiceName)
    {
        $this->networkClassOfServiceName = $networkClassOfServiceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkClassOfServiceName()
    {
        $this->networkClassOfServiceName = null;
        return $this;
    }


}

