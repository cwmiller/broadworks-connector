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
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:7030","type":"sequence"}]
 */
class SystemDeviceManagementTagSetModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName tagSetName
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:7030
     * @var string|null
     */
    private $tagSetName = null;

    /**
     * @ElementName newTagSetName
     * @Type string
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:7030
     * @var string|null
     */
    private $newTagSetName = null;

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

