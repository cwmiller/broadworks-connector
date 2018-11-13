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
     * @Type int
     * @var int|null
     */
    private $extensionLength = null;

    /**
     * Getter for extensionLength
     *
     * @return int
     */
    public function getExtensionLength()
    {
        return $this->extensionLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extensionLength;
    }

    /**
     * Setter for extensionLength
     *
     * @param int $extensionLength
     * @return $this
     */
    public function setExtensionLength($extensionLength)
    {
        $this->extensionLength = $extensionLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtensionLength()
    {
        $this->extensionLength = null;
        return $this;
    }


}

