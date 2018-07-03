<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupExtensionLengthGetResponse17
 *
 * Response to GroupExtensionLengthGetRequest17.
 *
 * @see GroupExtensionLengthGetRequest17
 */
class GroupExtensionLengthGetResponse17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName minExtensionLength
     * @var int|null
     */
    private $minExtensionLength = null;

    /**
     * @ElementName maxExtensionLength
     * @var int|null
     */
    private $maxExtensionLength = null;

    /**
     * @ElementName defaultExtensionLength
     * @var int|null
     */
    private $defaultExtensionLength = null;

    /**
     * Getter for minExtensionLength
     *
     * @ElementName minExtensionLength
     * @return int|null
     */
    public function getMinExtensionLength()
    {
        return $this->minExtensionLength;
    }

    /**
     * Setter for minExtensionLength
     *
     * @ElementName minExtensionLength
     * @param int|null $minExtensionLength
     * @return $this
     */
    public function setMinExtensionLength($minExtensionLength)
    {
        $this->minExtensionLength = $minExtensionLength;
        return $this;
    }

    /**
     * Getter for maxExtensionLength
     *
     * @ElementName maxExtensionLength
     * @return int|null
     */
    public function getMaxExtensionLength()
    {
        return $this->maxExtensionLength;
    }

    /**
     * Setter for maxExtensionLength
     *
     * @ElementName maxExtensionLength
     * @param int|null $maxExtensionLength
     * @return $this
     */
    public function setMaxExtensionLength($maxExtensionLength)
    {
        $this->maxExtensionLength = $maxExtensionLength;
        return $this;
    }

    /**
     * Getter for defaultExtensionLength
     *
     * @ElementName defaultExtensionLength
     * @return int|null
     */
    public function getDefaultExtensionLength()
    {
        return $this->defaultExtensionLength;
    }

    /**
     * Setter for defaultExtensionLength
     *
     * @ElementName defaultExtensionLength
     * @param int|null $defaultExtensionLength
     * @return $this
     */
    public function setDefaultExtensionLength($defaultExtensionLength)
    {
        $this->defaultExtensionLength = $defaultExtensionLength;
        return $this;
    }


}

