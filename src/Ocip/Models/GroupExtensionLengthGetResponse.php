<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupExtensionLengthGetResponse
 *
 * Response to GroupExtensionLengthGetRequest.
 *
 * @see GroupExtensionLengthGetRequest
 */
class GroupExtensionLengthGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName extensionLength
     * @var int|null
     */
    private $extensionLength = null;

    /**
     * Getter for extensionLength
     *
     * @ElementName extensionLength
     * @return int|null
     */
    public function getExtensionLength()
    {
        return $this->extensionLength;
    }

    /**
     * Setter for extensionLength
     *
     * @ElementName extensionLength
     * @param int|null $extensionLength
     * @return $this
     */
    public function setExtensionLength($extensionLength)
    {
        $this->extensionLength = $extensionLength;
        return $this;
    }


}

