<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaAddRequest
 *
 * Request to add a Media to the system.
 *             The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:27610","type":"sequence"}]
 */
class SystemMediaAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName mediaName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27610
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $mediaName = null;

    /**
     * @ElementName codecName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27610
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $codecName = null;

    /**
     * @ElementName mediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaType
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27610
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaType|null
     */
    private $mediaType = null;

    /**
     * @ElementName bandwidthEnforcementType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaBandwidthEnforcementType
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27610
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaBandwidthEnforcementType|null
     */
    private $bandwidthEnforcementType = null;

    /**
     * @ElementName mediaBandwidth
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27610
     * @MinInclusive 1
     * @MaxInclusive 100000000
     * @var int|null
     */
    private $mediaBandwidth = null;

    /**
     * Getter for mediaName
     *
     * @return string
     */
    public function getMediaName()
    {
        return $this->mediaName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaName;
    }

    /**
     * Setter for mediaName
     *
     * @param string $mediaName
     * @return $this
     */
    public function setMediaName($mediaName)
    {
        $this->mediaName = $mediaName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaName()
    {
        $this->mediaName = null;
        return $this;
    }

    /**
     * Getter for codecName
     *
     * @return string
     */
    public function getCodecName()
    {
        return $this->codecName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->codecName;
    }

    /**
     * Setter for codecName
     *
     * @param string $codecName
     * @return $this
     */
    public function setCodecName($codecName)
    {
        $this->codecName = $codecName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCodecName()
    {
        $this->codecName = null;
        return $this;
    }

    /**
     * Getter for mediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaType
     */
    public function getMediaType()
    {
        return $this->mediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaType;
    }

    /**
     * Setter for mediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaType $mediaType
     * @return $this
     */
    public function setMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaType $mediaType)
    {
        $this->mediaType = $mediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaType()
    {
        $this->mediaType = null;
        return $this;
    }

    /**
     * Getter for bandwidthEnforcementType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaBandwidthEnforcementType
     */
    public function getBandwidthEnforcementType()
    {
        return $this->bandwidthEnforcementType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->bandwidthEnforcementType;
    }

    /**
     * Setter for bandwidthEnforcementType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaBandwidthEnforcementType $bandwidthEnforcementType
     * @return $this
     */
    public function setBandwidthEnforcementType(\CWM\BroadWorksConnector\Ocip\Models\MediaBandwidthEnforcementType $bandwidthEnforcementType)
    {
        $this->bandwidthEnforcementType = $bandwidthEnforcementType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBandwidthEnforcementType()
    {
        $this->bandwidthEnforcementType = null;
        return $this;
    }

    /**
     * Getter for mediaBandwidth
     *
     * @return int
     */
    public function getMediaBandwidth()
    {
        return $this->mediaBandwidth instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaBandwidth;
    }

    /**
     * Setter for mediaBandwidth
     *
     * @param int $mediaBandwidth
     * @return $this
     */
    public function setMediaBandwidth($mediaBandwidth)
    {
        $this->mediaBandwidth = $mediaBandwidth;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaBandwidth()
    {
        $this->mediaBandwidth = null;
        return $this;
    }


}

