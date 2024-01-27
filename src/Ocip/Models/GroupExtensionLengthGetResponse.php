<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupExtensionLengthGetResponse
 *
 * Response to GroupExtensionLengthGetRequest.
 *
 * @see GroupExtensionLengthGetRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:9768","type":"sequence"}]
 */
class GroupExtensionLengthGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName extensionLength
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:9768
     * @MinInclusive 2
     * @MaxInclusive 6
     * @var int|null
     */
    protected $extensionLength = null;

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

