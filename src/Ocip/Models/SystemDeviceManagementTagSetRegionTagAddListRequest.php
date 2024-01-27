<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementTagSetRegionTagAddListRequest
 *
 * Request to add a tag override to a region of a static configuration tag set.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:8536","type":"sequence"}]
 */
class SystemDeviceManagementTagSetRegionTagAddListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName tagSetName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:8536
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $tagSetName = null;

    /**
     * @ElementName regionName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:8536
     * @MinLength 1
     * @MaxLength 64
     * @var string|null
     */
    protected $regionName = null;

    /**
     * @ElementName tag
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementTag
     * @Array
     * @Group da582a1f8028404e70d260cf1f891033:8536
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementTag[]
     */
    protected $tag = [
        
    ];

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

    /**
     * Getter for regionName
     *
     * @return string
     */
    public function getRegionName()
    {
        return $this->regionName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->regionName;
    }

    /**
     * Setter for regionName
     *
     * @param string $regionName
     * @return $this
     */
    public function setRegionName($regionName)
    {
        $this->regionName = $regionName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRegionName()
    {
        $this->regionName = null;
        return $this;
    }

    /**
     * Getter for tag
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementTag[]
     */
    public function getTag()
    {
        return $this->tag instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tag;
    }

    /**
     * Setter for tag
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementTag[] $tag
     * @return $this
     */
    public function setTag(array $tag)
    {
        $this->tag = $tag;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTag()
    {
        $this->tag = null;
        return $this;
    }

    /**
     * Adder for tag
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementTag $tag
     * @return $this
     */
    public function addTag($tag)
    {
        $this->tag[] = $tag;
        return $this;
    }
}

