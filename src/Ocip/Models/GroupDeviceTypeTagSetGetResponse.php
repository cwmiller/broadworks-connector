<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDeviceTypeTagSetGetResponse
 *
 * Response to GroupDeviceTypeTagSetGetRequest.
 *
 * @see GroupDeviceTypeTagSetGetRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:3604","type":"sequence"}]
 */
class GroupDeviceTypeTagSetGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName tagSetName
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3604
     * @var string|null
     */
    private $tagSetName = null;

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

