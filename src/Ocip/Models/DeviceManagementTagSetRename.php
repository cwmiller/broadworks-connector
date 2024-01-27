<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementTagSetRename
 *
 * Pair of DeviceManagementTagSetName
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:2863","type":"sequence"}]
 */
class DeviceManagementTagSetRename
{
    /**
     * @ElementName originalTagSetName
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:2863
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $originalTagSetName = null;

    /**
     * @ElementName newTagSetName
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:2863
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $newTagSetName = null;

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

