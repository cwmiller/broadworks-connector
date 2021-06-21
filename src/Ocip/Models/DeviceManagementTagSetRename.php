<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementTagSetRename
 *
 * Pair of DeviceManagementTagSetName
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:2396","type":"sequence"}]
 */
class DeviceManagementTagSetRename
{

    /**
     * @ElementName originalTagSetName
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2396
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $originalTagSetName = null;

    /**
     * @ElementName newTagSetName
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2396
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $newTagSetName = null;

    /**
     * Getter for originalTagSetName
     *
     * @return string
     */
    public function getOriginalTagSetName()
    {
        return $this->originalTagSetName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->originalTagSetName;
    }

    /**
     * Setter for originalTagSetName
     *
     * @param string $originalTagSetName
     * @return $this
     */
    public function setOriginalTagSetName($originalTagSetName)
    {
        $this->originalTagSetName = $originalTagSetName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOriginalTagSetName()
    {
        $this->originalTagSetName = null;
        return $this;
    }

    /**
     * Getter for newTagSetName
     *
     * @return string
     */
    public function getNewTagSetName()
    {
        return $this->newTagSetName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newTagSetName;
    }

    /**
     * Setter for newTagSetName
     *
     * @param string $newTagSetName
     * @return $this
     */
    public function setNewTagSetName($newTagSetName)
    {
        $this->newTagSetName = $newTagSetName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewTagSetName()
    {
        $this->newTagSetName = null;
        return $this;
    }


}

