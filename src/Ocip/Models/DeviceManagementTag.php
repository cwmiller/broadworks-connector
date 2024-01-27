<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementTag
 *
 * Represents a tag name with its associated value.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:2851","type":"sequence"}]
 */
class DeviceManagementTag
{
    /**
     * @ElementName tagName
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:2851
     * @MinLength 1
     * @MaxLength 64
     * @var string|null
     */
    protected $tagName = null;

    /**
     * @ElementName tagValue
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:2851
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $tagValue = null;

    /**
     * Getter for tagName
     *
     * @return string
     */
    public function getTagName()
    {
        return $this->tagName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagName;
    }

    /**
     * Setter for tagName
     *
     * @param string $tagName
     * @return $this
     */
    public function setTagName($tagName)
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
     * Getter for tagValue
     *
     * @return string
     */
    public function getTagValue()
    {
        return $this->tagValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagValue;
    }

    /**
     * Setter for tagValue
     *
     * @param string $tagValue
     * @return $this
     */
    public function setTagValue($tagValue)
    {
        $this->tagValue = $tagValue;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTagValue()
    {
        $this->tagValue = null;
        return $this;
    }
}

