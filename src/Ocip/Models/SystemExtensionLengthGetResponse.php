<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExtensionLengthGetResponse
 *
 * Response to SystemExtensionLengthGetRequest.
 *
 * @see SystemExtensionLengthGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:10112","type":"sequence"}]
 */
class SystemExtensionLengthGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName minExtensionLength
     * @Type int
     * @Group da582a1f8028404e70d260cf1f891033:10112
     * @MinInclusive 2
     * @MaxInclusive 20
     * @var int|null
     */
    protected $minExtensionLength = null;

    /**
     * @ElementName maxExtensionLength
     * @Type int
     * @Group da582a1f8028404e70d260cf1f891033:10112
     * @MinInclusive 2
     * @MaxInclusive 20
     * @var int|null
     */
    protected $maxExtensionLength = null;

    /**
     * Getter for minExtensionLength
     *
     * @return int
     */
    public function getMinExtensionLength()
    {
        return $this->minExtensionLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minExtensionLength;
    }

    /**
     * Setter for minExtensionLength
     *
     * @param int $minExtensionLength
     * @return $this
     */
    public function setMinExtensionLength($minExtensionLength)
    {
        $this->minExtensionLength = $minExtensionLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinExtensionLength()
    {
        $this->minExtensionLength = null;
        return $this;
    }

    /**
     * Getter for maxExtensionLength
     *
     * @return int
     */
    public function getMaxExtensionLength()
    {
        return $this->maxExtensionLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxExtensionLength;
    }

    /**
     * Setter for maxExtensionLength
     *
     * @param int $maxExtensionLength
     * @return $this
     */
    public function setMaxExtensionLength($maxExtensionLength)
    {
        $this->maxExtensionLength = $maxExtensionLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxExtensionLength()
    {
        $this->maxExtensionLength = null;
        return $this;
    }
}

