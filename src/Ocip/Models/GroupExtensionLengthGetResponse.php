<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupExtensionLengthGetResponse
 *
 * Response to GroupExtensionLengthGetRequest.
 *
 * @see GroupExtensionLengthGetRequest
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:8127","type":"sequence"}]
 */
class GroupExtensionLengthGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName extensionLength
     * @Type int
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:8127
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

