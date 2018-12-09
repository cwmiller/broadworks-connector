<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DefaultNetworkClassOfService
 *
 * The default Network Class of Service to set during assignation/unassignation.
 *
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:1537","type":"choice"}]
 */
class DefaultNetworkClassOfService
{

    /**
     * @ElementName useExisting
     * @Type bool
     * @Group 8e629edbac315ae7889caca732382c44:1537
     * @var bool|null
     */
    private $useExisting = null;

    /**
     * @ElementName networkClassOfServiceName
     * @Type string
     * @Group 8e629edbac315ae7889caca732382c44:1537
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

