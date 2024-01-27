<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceTagSetGetResponse
 *
 * Response to GroupAccessDeviceTagSetGetRequest.
 *         The response includes a tag set name defined in the access device.
 *
 * @see GroupAccessDeviceTagSetGetRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:1357","type":"sequence"}]
 */
class GroupAccessDeviceTagSetGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName tagSetName
     * @Type string
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:1357
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $tagSetName = null;

    /**
     * Getter for tagSetName
     *
     * @return string
     */
    public function getTagSetName()
    {
        return $this->tagSetName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagSetName;
    }

    /**
     * Setter for tagSetName
     *
     * @param string $tagSetName
     * @return $this
     */
    public function setTagSetName($tagSetName)
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
}

