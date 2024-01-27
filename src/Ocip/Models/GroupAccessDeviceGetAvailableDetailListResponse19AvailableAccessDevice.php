<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceGetAvailableDetailListResponse19AvailableAccessDevice
 *
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:772","type":"sequence"}]
 */
class GroupAccessDeviceGetAvailableDetailListResponse19AvailableAccessDevice
{
    /**
     * @ElementName accessDevice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDevice
     * @Group 4b0e7857796c636464362260a2f8e5ee:772
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null
     */
    protected $accessDevice = null;

    /**
     * @ElementName staticRegistrationCapable
     * @Type bool
     * @Group 4b0e7857796c636464362260a2f8e5ee:772
     * @var bool|null
     */
    protected $staticRegistrationCapable = null;

    /**
     * @ElementName useDomain
     * @Type bool
     * @Group 4b0e7857796c636464362260a2f8e5ee:772
     * @var bool|null
     */
    protected $useDomain = null;

    /**
     * @ElementName staticLineOrdering
     * @Type bool
     * @Group 4b0e7857796c636464362260a2f8e5ee:772
     * @var bool|null
     */
    protected $staticLineOrdering = null;

    /**
     * Getter for accessDevice
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDevice
     */
    public function getAccessDevice()
    {
        return $this->accessDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDevice;
    }

    /**
     * Setter for accessDevice
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDevice $accessDevice
     * @return $this
     */
    public function setAccessDevice(\CWM\BroadWorksConnector\Ocip\Models\AccessDevice $accessDevice)
    {
        $this->accessDevice = $accessDevice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDevice()
    {
        $this->accessDevice = null;
        return $this;
    }

    /**
     * Getter for staticRegistrationCapable
     *
     * @return bool
     */
    public function getStaticRegistrationCapable()
    {
        return $this->staticRegistrationCapable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->staticRegistrationCapable;
    }

    /**
     * Setter for staticRegistrationCapable
     *
     * @param bool $staticRegistrationCapable
     * @return $this
     */
    public function setStaticRegistrationCapable($staticRegistrationCapable)
    {
        $this->staticRegistrationCapable = $staticRegistrationCapable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStaticRegistrationCapable()
    {
        $this->staticRegistrationCapable = null;
        return $this;
    }

    /**
     * Getter for useDomain
     *
     * @return bool
     */
    public function getUseDomain()
    {
        return $this->useDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useDomain;
    }

    /**
     * Setter for useDomain
     *
     * @param bool $useDomain
     * @return $this
     */
    public function setUseDomain($useDomain)
    {
        $this->useDomain = $useDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseDomain()
    {
        $this->useDomain = null;
        return $this;
    }

    /**
     * Getter for staticLineOrdering
     *
     * @return bool
     */
    public function getStaticLineOrdering()
    {
        return $this->staticLineOrdering instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->staticLineOrdering;
    }

    /**
     * Setter for staticLineOrdering
     *
     * @param bool $staticLineOrdering
     * @return $this
     */
    public function setStaticLineOrdering($staticLineOrdering)
    {
        $this->staticLineOrdering = $staticLineOrdering;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStaticLineOrdering()
    {
        $this->staticLineOrdering = null;
        return $this;
    }
}

