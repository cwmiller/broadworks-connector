<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * IncomingCallingPlanPermissionsModify
 *
 * Allows or disallows various types of incoming calls for a user or group -- not
 * any particular department.
 *         For use when modifing settings.
 */
class IncomingCallingPlanPermissionsModify
{

    /**
     * @ElementName allowFromWithinGroup
     * @var bool|null
     */
    private $allowFromWithinGroup = null;

    /**
     * @ElementName allowFromOutsideGroup
     * @var string|null
     */
    private $allowFromOutsideGroup = null;

    /**
     * @ElementName allowCollectCalls
     * @var bool|null
     */
    private $allowCollectCalls = null;

    /**
     * @ElementName digitPatternPermission
     * @var \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanDigitPatternPermission[]
     */
    private $digitPatternPermission = array(
        
    );

    /**
     * Getter for allowFromWithinGroup
     *
     * @ElementName allowFromWithinGroup
     * @return bool|null
     */
    public function getAllowFromWithinGroup()
    {
        return $this->allowFromWithinGroup;
    }

    /**
     * Setter for allowFromWithinGroup
     *
     * @ElementName allowFromWithinGroup
     * @param bool|null $allowFromWithinGroup
     * @return $this
     */
    public function setAllowFromWithinGroup($allowFromWithinGroup)
    {
        $this->allowFromWithinGroup = $allowFromWithinGroup;
        return $this;
    }

    /**
     * Getter for allowFromOutsideGroup
     *
     * @ElementName allowFromOutsideGroup
     * @return string|null
     */
    public function getAllowFromOutsideGroup()
    {
        return $this->allowFromOutsideGroup;
    }

    /**
     * Setter for allowFromOutsideGroup
     *
     * @ElementName allowFromOutsideGroup
     * @param string|null $allowFromOutsideGroup
     * @return $this
     */
    public function setAllowFromOutsideGroup($allowFromOutsideGroup)
    {
        $this->allowFromOutsideGroup = $allowFromOutsideGroup;
        return $this;
    }

    /**
     * Getter for allowCollectCalls
     *
     * @ElementName allowCollectCalls
     * @return bool|null
     */
    public function getAllowCollectCalls()
    {
        return $this->allowCollectCalls;
    }

    /**
     * Setter for allowCollectCalls
     *
     * @ElementName allowCollectCalls
     * @param bool|null $allowCollectCalls
     * @return $this
     */
    public function setAllowCollectCalls($allowCollectCalls)
    {
        $this->allowCollectCalls = $allowCollectCalls;
        return $this;
    }

    /**
     * Getter for digitPatternPermission
     *
     * @ElementName digitPatternPermission
     * @return \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanDigitPatternPermission[]
     */
    public function getDigitPatternPermission()
    {
        return $this->digitPatternPermission;
    }

    /**
     * Setter for digitPatternPermission
     *
     * @ElementName digitPatternPermission
     * @param \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanDigitPatternPermission[] $digitPatternPermission
     * @return $this
     */
    public function setDigitPatternPermission($digitPatternPermission)
    {
        $this->digitPatternPermission = $digitPatternPermission;
        return $this;
    }

    /**
     * Adder for digitPatternPermission
     *
     * @ElementName digitPatternPermission
     * @param \CWM\BroadWorksConnector\Ocip\Models\IncomingCallingPlanDigitPatternPermission $digitPatternPermission
     * @return $this
     */
    public function addDigitPatternPermission($digitPatternPermission)
    {
        $this->digitPatternPermission []= $digitPatternPermission;
        return $this;
    }


}

