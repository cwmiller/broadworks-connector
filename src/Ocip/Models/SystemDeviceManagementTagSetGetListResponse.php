<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementTagSetGetListResponse
 *
 * Response to SystemDeviceManagementTagSetGetListRequest.
 *         The response includes an array of tag set names defined in the system.
 *         The system default tag set name is not part of this response.
 *         
 *         Replaced by SystemDeviceManagementTagSetGetListResponse22 in AS data
 * mode
 */
class SystemDeviceManagementTagSetGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName tagSetName
     * @var string[]
     */
    private $tagSetName = array(
        
    );

    /**
     * Getter for tagSetName
     *
     * @ElementName tagSetName
     * @return string[]
     */
    public function getTagSetName()
    {
        return $this->tagSetName;
    }

    /**
     * Setter for tagSetName
     *
     * @ElementName tagSetName
     * @param string[] $tagSetName
     * @return $this
     */
    public function setTagSetName($tagSetName)
    {
        $this->tagSetName = $tagSetName;
        return $this;
    }

    /**
     * Adder for tagSetName
     *
     * @ElementName tagSetName
     * @param string $tagSetName
     * @return $this
     */
    public function addTagSetName($tagSetName)
    {
        $this->tagSetName []= $tagSetName;
        return $this;
    }


}

