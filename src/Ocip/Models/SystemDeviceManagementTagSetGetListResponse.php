<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementTagSetGetListResponse
 *
 * Response to SystemDeviceManagementTagSetGetListRequest.
 *         The response includes an array of tag set names defined in the system.
 *         The system default tag set name is not part of this response.
 *         
 *         Replaced by SystemDeviceManagementTagSetGetListResponse22 in AS data mode
 *
 * @see SystemDeviceManagementTagSetGetListRequest
 * @see SystemDeviceManagementTagSetGetListResponse22
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:9847","type":"sequence"}]
 */
class SystemDeviceManagementTagSetGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName tagSetName
     * @Type string
     * @Array
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:9847
     * @MinLength 1
     * @MaxLength 30
     * @var string[]
     */
    protected $tagSetName = [
        
    ];

    /**
     * Getter for tagSetName
     *
     * @return string[]
     */
    public function getTagSetName()
    {
        return $this->tagSetName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagSetName;
    }

    /**
     * Setter for tagSetName
     *
     * @param string[] $tagSetName
     * @return $this
     */
    public function setTagSetName(array $tagSetName)
    {
        $this->tagSetName = $tagSetName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTagSetName()
    {
        $this->tagSetName = null;
        return $this;
    }

    /**
     * Adder for tagSetName
     *
     * @param string $tagSetName
     * @return $this
     */
    public function addTagSetName(string $tagSetName)
    {
        $this->tagSetName[] = $tagSetName;
        return $this;
    }
}

