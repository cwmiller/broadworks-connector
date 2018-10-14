<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDepartmentGetResponse
 *
 * Response to GroupDepartmentGetRequest.
 *         The following elements are only used in AS data mode:
 *           callingLineIdName
 *           caliingLineIdPhoneNumber
 *
 * @see GroupDepartmentGetRequest
 */
class GroupDepartmentGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName parentDepartmentKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    private $parentDepartmentKey = null;

    /**
     * @ElementName callingLineIdName
     * @var string|null
     */
    private $callingLineIdName = null;

    /**
     * @ElementName callingLineIdPhoneNumber
     * @var string|null
     */
    private $callingLineIdPhoneNumber = null;

    /**
     * Getter for parentDepartmentKey
     *
     * @ElementName parentDepartmentKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    public function getParentDepartmentKey()
    {
        return $this->parentDepartmentKey;
    }

    /**
     * Setter for parentDepartmentKey
     *
     * @ElementName parentDepartmentKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null $parentDepartmentKey
     * @return $this
     */
    public function setParentDepartmentKey(\CWM\BroadWorksConnector\Ocip\Models\DepartmentKey $parentDepartmentKey)
    {
        $this->parentDepartmentKey = $parentDepartmentKey;
        return $this;
    }

    /**
     * Getter for callingLineIdName
     *
     * @ElementName callingLineIdName
     * @return string|null
     */
    public function getCallingLineIdName()
    {
        return $this->callingLineIdName;
    }

    /**
     * Setter for callingLineIdName
     *
     * @ElementName callingLineIdName
     * @param string|null $callingLineIdName
     * @return $this
     */
    public function setCallingLineIdName($callingLineIdName)
    {
        $this->callingLineIdName = $callingLineIdName;
        return $this;
    }

    /**
     * Getter for callingLineIdPhoneNumber
     *
     * @ElementName callingLineIdPhoneNumber
     * @return string|null
     */
    public function getCallingLineIdPhoneNumber()
    {
        return $this->callingLineIdPhoneNumber;
    }

    /**
     * Setter for callingLineIdPhoneNumber
     *
     * @ElementName callingLineIdPhoneNumber
     * @param string|null $callingLineIdPhoneNumber
     * @return $this
     */
    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber)
    {
        $this->callingLineIdPhoneNumber = $callingLineIdPhoneNumber;
        return $this;
    }


}

