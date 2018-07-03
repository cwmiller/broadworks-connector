<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupMusicOnHoldModifyInstanceRequest14sp6
 *
 * Modify data for a group or department Music On Hold Instance.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced By: GroupMusicOnHoldModifyInstanceRequest16
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see GroupMusicOnHoldModifyInstanceRequest16
 */
class GroupMusicOnHoldModifyInstanceRequest14sp6 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName department
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    private $department = null;

    /**
     * @ElementName isActiveDuringCallHold
     * @var bool|null
     */
    private $isActiveDuringCallHold = null;

    /**
     * @ElementName isActiveDuringCallPark
     * @var bool|null
     */
    private $isActiveDuringCallPark = null;

    /**
     * @ElementName isActiveDuringBusyCampOn
     * @var bool|null
     */
    private $isActiveDuringBusyCampOn = null;

    /**
     * @ElementName source
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModify|null
     */
    private $source = null;

    /**
     * @ElementName useAlternateSourceForInternalCalls
     * @var bool|null
     */
    private $useAlternateSourceForInternalCalls = null;

    /**
     * @ElementName internalSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModify|null
     */
    private $internalSource = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for department
     *
     * @ElementName department
     * @return \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Setter for department
     *
     * @ElementName department
     * @param \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null $department
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->department = $department;
        return $this;
    }

    /**
     * Getter for isActiveDuringCallHold
     *
     * @ElementName isActiveDuringCallHold
     * @return bool|null
     */
    public function getIsActiveDuringCallHold()
    {
        return $this->isActiveDuringCallHold;
    }

    /**
     * Setter for isActiveDuringCallHold
     *
     * @ElementName isActiveDuringCallHold
     * @param bool|null $isActiveDuringCallHold
     * @return $this
     */
    public function setIsActiveDuringCallHold($isActiveDuringCallHold)
    {
        $this->isActiveDuringCallHold = $isActiveDuringCallHold;
        return $this;
    }

    /**
     * Getter for isActiveDuringCallPark
     *
     * @ElementName isActiveDuringCallPark
     * @return bool|null
     */
    public function getIsActiveDuringCallPark()
    {
        return $this->isActiveDuringCallPark;
    }

    /**
     * Setter for isActiveDuringCallPark
     *
     * @ElementName isActiveDuringCallPark
     * @param bool|null $isActiveDuringCallPark
     * @return $this
     */
    public function setIsActiveDuringCallPark($isActiveDuringCallPark)
    {
        $this->isActiveDuringCallPark = $isActiveDuringCallPark;
        return $this;
    }

    /**
     * Getter for isActiveDuringBusyCampOn
     *
     * @ElementName isActiveDuringBusyCampOn
     * @return bool|null
     */
    public function getIsActiveDuringBusyCampOn()
    {
        return $this->isActiveDuringBusyCampOn;
    }

    /**
     * Setter for isActiveDuringBusyCampOn
     *
     * @ElementName isActiveDuringBusyCampOn
     * @param bool|null $isActiveDuringBusyCampOn
     * @return $this
     */
    public function setIsActiveDuringBusyCampOn($isActiveDuringBusyCampOn)
    {
        $this->isActiveDuringBusyCampOn = $isActiveDuringBusyCampOn;
        return $this;
    }

    /**
     * Getter for source
     *
     * @ElementName source
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModify|null
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Setter for source
     *
     * @ElementName source
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModify|null $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Getter for useAlternateSourceForInternalCalls
     *
     * @ElementName useAlternateSourceForInternalCalls
     * @return bool|null
     */
    public function getUseAlternateSourceForInternalCalls()
    {
        return $this->useAlternateSourceForInternalCalls;
    }

    /**
     * Setter for useAlternateSourceForInternalCalls
     *
     * @ElementName useAlternateSourceForInternalCalls
     * @param bool|null $useAlternateSourceForInternalCalls
     * @return $this
     */
    public function setUseAlternateSourceForInternalCalls($useAlternateSourceForInternalCalls)
    {
        $this->useAlternateSourceForInternalCalls = $useAlternateSourceForInternalCalls;
        return $this;
    }

    /**
     * Getter for internalSource
     *
     * @ElementName internalSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModify|null
     */
    public function getInternalSource()
    {
        return $this->internalSource;
    }

    /**
     * Setter for internalSource
     *
     * @ElementName internalSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceModify|null $internalSource
     * @return $this
     */
    public function setInternalSource($internalSource)
    {
        $this->internalSource = $internalSource;
        return $this;
    }


}

