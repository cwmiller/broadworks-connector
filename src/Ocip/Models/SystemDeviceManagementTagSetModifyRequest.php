<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementTagSetModifyRequest
 *
 * Request to modify a static configuration tag set.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:8435","type":"sequence"}]
 */
class SystemDeviceManagementTagSetModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName tagSetName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:8435
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $tagSetName = null;

    /**
     * @ElementName newTagSetName
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:8435
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $newTagSetName = null;

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
     * Getter for newTagSetName
     *
     * @return string
     */
    public function getNewTagSetName()
    {
        return $this->newTagSetName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newTagSetName;
    }

    /**
     * Setter for newTagSetName
     *
     * @param string $newTagSetName
     * @return $this
     */
    public function setNewTagSetName($newTagSetName)
    {
        $this->newTagSetName = $newTagSetName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewTagSetName()
    {
        $this->newTagSetName = null;
        return $this;
    }
}

