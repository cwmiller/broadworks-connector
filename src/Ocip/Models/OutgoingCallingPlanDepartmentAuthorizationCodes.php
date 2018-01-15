<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanDepartmentAuthorizationCodes
 *
 * Outgoing Calling Plan Authorization Code for a department.
 */
class OutgoingCallingPlanDepartmentAuthorizationCodes
{

    /**
     * @ElementName departmentKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    private $departmentKey = null;

    /**
     * @ElementName departmentName
     * @var string|null
     */
    private $departmentName = null;

    /**
     * @ElementName codeEntry
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanAuthorizationCodeEntry[]
     */
    private $codeEntry = array(
        
    );

    /**
     * Getter for departmentKey
     *
     * @ElementName departmentKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    public function getDepartmentKey()
    {
        return $this->departmentKey;
    }

    /**
     * Setter for departmentKey
     *
     * @ElementName departmentKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null $departmentKey
     * @return $this
     */
    public function setDepartmentKey($departmentKey)
    {
        $this->departmentKey = $departmentKey;
        return $this;
    }

    /**
     * Getter for departmentName
     *
     * @ElementName departmentName
     * @return string|null
     */
    public function getDepartmentName()
    {
        return $this->departmentName;
    }

    /**
     * Setter for departmentName
     *
     * @ElementName departmentName
     * @param string|null $departmentName
     * @return $this
     */
    public function setDepartmentName($departmentName)
    {
        $this->departmentName = $departmentName;
        return $this;
    }

    /**
     * Getter for codeEntry
     *
     * @ElementName codeEntry
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanAuthorizationCodeEntry[]
     */
    public function getCodeEntry()
    {
        return $this->codeEntry;
    }

    /**
     * Setter for codeEntry
     *
     * @ElementName codeEntry
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanAuthorizationCodeEntry[] $codeEntry
     * @return $this
     */
    public function setCodeEntry($codeEntry)
    {
        $this->codeEntry = $codeEntry;
        return $this;
    }

    /**
     * Adder for codeEntry
     *
     * @ElementName codeEntry
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanAuthorizationCodeEntry $codeEntry
     * @return $this
     */
    public function addCodeEntry($codeEntry)
    {
        $this->codeEntry []= $codeEntry;
        return $this;
    }


}

