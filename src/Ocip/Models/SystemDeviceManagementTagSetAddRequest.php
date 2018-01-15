<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementTagSetAddRequest
 *
 * Request to add a static configuration tag set.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemDeviceManagementTagSetAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName tagSetName
     * @var string|null
     */
    private $tagSetName = null;

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


}

