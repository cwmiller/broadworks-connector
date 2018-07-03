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
 */
class SystemDeviceManagementTagSetModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName tagSetName
     * @var string|null
     */
    private $tagSetName = null;

    /**
     * @ElementName newTagSetName
     * @var string|null
     */
    private $newTagSetName = null;

    /**
     * Getter for tagSetName
     *
     * @ElementName tagSetName
     * @return string|null
     */
    public function getTagSetName()
    {
        return $this->tagSetName;
    }

    /**
     * Setter for tagSetName
     *
     * @ElementName tagSetName
     * @param string|null $tagSetName
     * @return $this
     */
    public function setTagSetName($tagSetName)
    {
        $this->tagSetName = $tagSetName;
        return $this;
    }

    /**
     * Getter for newTagSetName
     *
     * @ElementName newTagSetName
     * @return string|null
     */
    public function getNewTagSetName()
    {
        return $this->newTagSetName;
    }

    /**
     * Setter for newTagSetName
     *
     * @ElementName newTagSetName
     * @param string|null $newTagSetName
     * @return $this
     */
    public function setNewTagSetName($newTagSetName)
    {
        $this->newTagSetName = $newTagSetName;
        return $this;
    }


}

