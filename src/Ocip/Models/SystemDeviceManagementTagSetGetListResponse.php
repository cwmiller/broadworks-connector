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
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:6426","type":"sequence"}]
 */
class SystemDeviceManagementTagSetGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName tagSetName
     * @Type string
     * @Array
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:6426
     * @var string[]
     */
    private $tagSetName = array(
        
    );

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

