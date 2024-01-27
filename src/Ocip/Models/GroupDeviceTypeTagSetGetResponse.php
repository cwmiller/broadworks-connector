<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDeviceTypeTagSetGetResponse
 *
 * Response to GroupDeviceTypeTagSetGetRequest.
 *
 * @see GroupDeviceTypeTagSetGetRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:4196","type":"sequence"}]
 */
class GroupDeviceTypeTagSetGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName tagSetName
     * @Type string
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:4196
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

