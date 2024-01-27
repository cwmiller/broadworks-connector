<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceTagSetGetResponse
 *
 * Response to SystemAccessDeviceTagSetGetRequest.
 *         The response includes a tag set name defined in the access device.
 *
 * @see SystemAccessDeviceTagSetGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:1743","type":"sequence"}]
 */
class SystemAccessDeviceTagSetGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName tagSetName
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1743
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

