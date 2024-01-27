<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupMusicOnHoldAddInstanceRequest21
 *
 * Add a Music on Hold Instance to a department.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced by GroupMusicOnHoldAddInstanceRequest22.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see GroupMusicOnHoldAddInstanceRequest22
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:3494","type":"sequence"}]
 */
class GroupMusicOnHoldAddInstanceRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:3494
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:3494
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName department
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     * @Abstract \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey,\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey
     * @Group 240b50f54d060859e5e275082fdf49f9:3494
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    protected $department = null;

    /**
     * @ElementName isActiveDuringCallHold
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:3494
     * @var bool|null
     */
    protected $isActiveDuringCallHold = null;

    /**
     * @ElementName isActiveDuringCallPark
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:3494
     * @var bool|null
     */
    protected $isActiveDuringCallPark = null;

    /**
     * @ElementName isActiveDuringBusyCampOn
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:3494
     * @var bool|null
     */
    protected $isActiveDuringBusyCampOn = null;

    /**
     * @ElementName source
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21
     * @Group 240b50f54d060859e5e275082fdf49f9:3494
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21|null
     */
    protected $source = null;

    /**
     * @ElementName useAlternateSourceForInternalCalls
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:3494
     * @var bool|null
     */
    protected $useAlternateSourceForInternalCalls = null;

    /**
     * @ElementName internalSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:3494
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21|null
     */
    protected $internalSource = null;

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
     * Getter for department
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     */
    public function getDepartment()
    {
        return $this->department instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->department;
    }

    /**
     * Setter for department
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey $department
     * @return $this
     */
    public function setDepartment(\CWM\BroadWorksConnector\Ocip\Models\DepartmentKey $department)
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDepartment()
    {
        $this->department = null;
        return $this;
    }

    /**
     * Getter for isActiveDuringCallHold
     *
     * @return bool
     */
    public function getIsActiveDuringCallHold()
    {
        return $this->isActiveDuringCallHold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActiveDuringCallHold;
    }

    /**
     * Setter for isActiveDuringCallHold
     *
     * @param bool $isActiveDuringCallHold
     * @return $this
     */
    public function setIsActiveDuringCallHold($isActiveDuringCallHold)
    {
        $this->isActiveDuringCallHold = $isActiveDuringCallHold;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActiveDuringCallHold()
    {
        $this->isActiveDuringCallHold = null;
        return $this;
    }

    /**
     * Getter for isActiveDuringCallPark
     *
     * @return bool
     */
    public function getIsActiveDuringCallPark()
    {
        return $this->isActiveDuringCallPark instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActiveDuringCallPark;
    }

    /**
     * Setter for isActiveDuringCallPark
     *
     * @param bool $isActiveDuringCallPark
     * @return $this
     */
    public function setIsActiveDuringCallPark($isActiveDuringCallPark)
    {
        $this->isActiveDuringCallPark = $isActiveDuringCallPark;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActiveDuringCallPark()
    {
        $this->isActiveDuringCallPark = null;
        return $this;
    }

    /**
     * Getter for isActiveDuringBusyCampOn
     *
     * @return bool
     */
    public function getIsActiveDuringBusyCampOn()
    {
        return $this->isActiveDuringBusyCampOn instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActiveDuringBusyCampOn;
    }

    /**
     * Setter for isActiveDuringBusyCampOn
     *
     * @param bool $isActiveDuringBusyCampOn
     * @return $this
     */
    public function setIsActiveDuringBusyCampOn($isActiveDuringBusyCampOn)
    {
        $this->isActiveDuringBusyCampOn = $isActiveDuringBusyCampOn;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActiveDuringBusyCampOn()
    {
        $this->isActiveDuringBusyCampOn = null;
        return $this;
    }

    /**
     * Getter for source
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21
     */
    public function getSource()
    {
        return $this->source instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->source;
    }

    /**
     * Setter for source
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21 $source
     * @return $this
     */
    public function setSource(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21 $source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSource()
    {
        $this->source = null;
        return $this;
    }

    /**
     * Getter for useAlternateSourceForInternalCalls
     *
     * @return bool
     */
    public function getUseAlternateSourceForInternalCalls()
    {
        return $this->useAlternateSourceForInternalCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useAlternateSourceForInternalCalls;
    }

    /**
     * Setter for useAlternateSourceForInternalCalls
     *
     * @param bool $useAlternateSourceForInternalCalls
     * @return $this
     */
    public function setUseAlternateSourceForInternalCalls($useAlternateSourceForInternalCalls)
    {
        $this->useAlternateSourceForInternalCalls = $useAlternateSourceForInternalCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseAlternateSourceForInternalCalls()
    {
        $this->useAlternateSourceForInternalCalls = null;
        return $this;
    }

    /**
     * Getter for internalSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21
     */
    public function getInternalSource()
    {
        return $this->internalSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->internalSource;
    }

    /**
     * Setter for internalSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21 $internalSource
     * @return $this
     */
    public function setInternalSource(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAdd21 $internalSource)
    {
        $this->internalSource = $internalSource;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInternalSource()
    {
        $this->internalSource = null;
        return $this;
    }
}

