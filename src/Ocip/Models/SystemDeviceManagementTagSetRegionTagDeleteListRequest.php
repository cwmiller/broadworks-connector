<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementTagSetRegionTagDeleteListRequest
 *
 * Request to delete a tag override to a region of a static configuration tag set.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:8554","type":"sequence"}]
 */
class SystemDeviceManagementTagSetRegionTagDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName tagSetName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:8554
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $tagSetName = null;

    /**
     * @ElementName regionName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:8554
     * @MinLength 1
     * @MaxLength 64
     * @var string|null
     */
    protected $regionName = null;

    /**
     * @ElementName tagName
     * @Type string
     * @Array
     * @Group da582a1f8028404e70d260cf1f891033:8554
     * @MinLength 1
     * @MaxLength 64
     * @var string[]
     */
    protected $tagName = [
        
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
     * Getter for tagName
     *
     * @return string[]
     */
    public function getTagName()
    {
        return $this->tagName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagName;
    }

    /**
     * Setter for tagName
     *
     * @param string[] $tagName
     * @return $this
     */
    public function setTagName(array $tagName)
    {
        $this->tagName = $tagName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTagName()
    {
        $this->tagName = null;
        return $this;
    }

    /**
     * Adder for tagName
     *
     * @param string $tagName
     * @return $this
     */
    public function addTagName(string $tagName)
    {
        $this->tagName[] = $tagName;
        return $this;
    }
}

