<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AccessDeviceTypeRename
 *
 * Pair of DeviceManagementTagSetName
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:538","type":"sequence"}]
 */
class AccessDeviceTypeRename
{

    /**
     * @ElementName originalDeviceTypeName
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:538
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $originalDeviceTypeName = null;

    /**
     * @ElementName newDeviceTypeName
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:538
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $newDeviceTypeName = null;

    /**
     * Getter for originalDeviceTypeName
     *
     * @return string
     */
    public function getOriginalDeviceTypeName()
    {
        return $this->originalDeviceTypeName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->originalDeviceTypeName;
    }

    /**
     * Setter for originalDeviceTypeName
     *
     * @param string $originalDeviceTypeName
     * @return $this
     */
    public function setOriginalDeviceTypeName($originalDeviceTypeName)
    {
        $this->originalDeviceTypeName = $originalDeviceTypeName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOriginalDeviceTypeName()
    {
        $this->originalDeviceTypeName = null;
        return $this;
    }

    /**
     * Getter for newDeviceTypeName
     *
     * @return string
     */
    public function getNewDeviceTypeName()
    {
        return $this->newDeviceTypeName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newDeviceTypeName;
    }

    /**
     * Setter for newDeviceTypeName
     *
     * @param string $newDeviceTypeName
     * @return $this
     */
    public function setNewDeviceTypeName($newDeviceTypeName)
    {
        $this->newDeviceTypeName = $newDeviceTypeName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewDeviceTypeName()
    {
        $this->newDeviceTypeName = null;
        return $this;
    }


}

