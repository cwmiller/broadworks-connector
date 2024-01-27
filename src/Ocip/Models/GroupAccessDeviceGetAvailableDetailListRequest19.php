<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceGetAvailableDetailListRequest19
 *
 * Requests the list of available access devices for assignment to a user
 *         within a group. The list includes devices created at the system, service provider, and group levels.
 *         
 *         The following elements are used in AS mode and ignored in XS data mode:
 *           onlyIntelligentDevice
 *         
 *         The response is either GroupAccessDeviceGetAvailableDetailListResponse19 or
 *         ErrorResponse.
 *
 * @see GroupAccessDeviceGetAvailableDetailListResponse19
 * @see ErrorResponse
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:749","type":"sequence"}]
 */
class GroupAccessDeviceGetAvailableDetailListRequest19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:749
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:749
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName isMusicOnHold
     * @Type bool
     * @Group 4b0e7857796c636464362260a2f8e5ee:749
     * @var bool|null
     */
    protected $isMusicOnHold = null;

    /**
     * @ElementName onlyVideoCapable
     * @Type bool
     * @Group 4b0e7857796c636464362260a2f8e5ee:749
     * @var bool|null
     */
    protected $onlyVideoCapable = null;

    /**
     * @ElementName onlyIntelligentDevice
     * @Type bool
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:749
     * @var bool|null
     */
    protected $onlyIntelligentDevice = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for isMusicOnHold
     *
     * @return bool
     */
    public function getIsMusicOnHold()
    {
        return $this->isMusicOnHold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isMusicOnHold;
    }

    /**
     * Setter for isMusicOnHold
     *
     * @param bool $isMusicOnHold
     * @return $this
     */
    public function setIsMusicOnHold($isMusicOnHold)
    {
        $this->isMusicOnHold = $isMusicOnHold;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsMusicOnHold()
    {
        $this->isMusicOnHold = null;
        return $this;
    }

    /**
     * Getter for onlyVideoCapable
     *
     * @return bool
     */
    public function getOnlyVideoCapable()
    {
        return $this->onlyVideoCapable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->onlyVideoCapable;
    }

    /**
     * Setter for onlyVideoCapable
     *
     * @param bool $onlyVideoCapable
     * @return $this
     */
    public function setOnlyVideoCapable($onlyVideoCapable)
    {
        $this->onlyVideoCapable = $onlyVideoCapable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOnlyVideoCapable()
    {
        $this->onlyVideoCapable = null;
        return $this;
    }

    /**
     * Getter for onlyIntelligentDevice
     *
     * @return bool
     */
    public function getOnlyIntelligentDevice()
    {
        return $this->onlyIntelligentDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->onlyIntelligentDevice;
    }

    /**
     * Setter for onlyIntelligentDevice
     *
     * @param bool $onlyIntelligentDevice
     * @return $this
     */
    public function setOnlyIntelligentDevice($onlyIntelligentDevice)
    {
        $this->onlyIntelligentDevice = $onlyIntelligentDevice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOnlyIntelligentDevice()
    {
        $this->onlyIntelligentDevice = null;
        return $this;
    }
}

