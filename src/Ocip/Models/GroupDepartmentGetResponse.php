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
 * @Groups [{"id":"7a7d0e1e7f776baf61f0645bc15cbe16:3023","type":"sequence"}]
 */
class GroupDepartmentGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName parentDepartmentKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     * @Optional
     * @Group 7a7d0e1e7f776baf61f0645bc15cbe16:3023
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    private $parentDepartmentKey = null;

    /**
     * @ElementName callingLineIdName
     * @Type string
     * @Optional
     * @Group 7a7d0e1e7f776baf61f0645bc15cbe16:3023
     * @var string|null
     */
    private $callingLineIdName = null;

    /**
     * @ElementName callingLineIdPhoneNumber
     * @Type string
     * @Optional
     * @Group 7a7d0e1e7f776baf61f0645bc15cbe16:3023
     * @var string|null
     */
    private $callingLineIdPhoneNumber = null;

    /**
     * Getter for parentDepartmentKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     */
    public function getParentDepartmentKey()
    {
        return $this->parentDepartmentKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->parentDepartmentKey;
    }

    /**
     * Setter for parentDepartmentKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey $parentDepartmentKey
     * @return $this
     */
    public function setParentDepartmentKey(\CWM\BroadWorksConnector\Ocip\Models\DepartmentKey $parentDepartmentKey)
    {
        $this->parentDepartmentKey = $parentDepartmentKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetParentDepartmentKey()
    {
        $this->parentDepartmentKey = null;
        return $this;
    }

    /**
     * Getter for callingLineIdName
     *
     * @return string
     */
    public function getCallingLineIdName()
    {
        return $this->callingLineIdName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdName;
    }

    /**
     * Setter for callingLineIdName
     *
     * @param string $callingLineIdName
     * @return $this
     */
    public function setCallingLineIdName($callingLineIdName)
    {
        $this->callingLineIdName = $callingLineIdName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingLineIdName()
    {
        $this->callingLineIdName = null;
        return $this;
    }

    /**
     * Getter for callingLineIdPhoneNumber
     *
     * @return string
     */
    public function getCallingLineIdPhoneNumber()
    {
        return $this->callingLineIdPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdPhoneNumber;
    }

    /**
     * Setter for callingLineIdPhoneNumber
     *
     * @param string $callingLineIdPhoneNumber
     * @return $this
     */
    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber)
    {
        $this->callingLineIdPhoneNumber = $callingLineIdPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingLineIdPhoneNumber()
    {
        $this->callingLineIdPhoneNumber = null;
        return $this;
    }


}

