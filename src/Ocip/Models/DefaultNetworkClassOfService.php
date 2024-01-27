<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DefaultNetworkClassOfService
 *
 * The default Network Class of Service to set during assignation/unassignation.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:2191","type":"choice"}]
 */
class DefaultNetworkClassOfService
{
    /**
     * @ElementName useExisting
     * @Type bool
     * @Group 6337d0cfba4de1c83587203c5b0bae54:2191
     * @var bool|null
     */
    protected $useExisting = null;

    /**
     * @ElementName networkClassOfServiceName
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:2191
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $networkClassOfServiceName = null;

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

