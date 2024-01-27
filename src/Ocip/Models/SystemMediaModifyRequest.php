<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaModifyRequest
 *
 * Request to modify a media.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:12028","type":"sequence"}]
 */
class SystemMediaModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName mediaName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:12028
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $mediaName = null;

    /**
     * @ElementName codecName
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:12028
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $codecName = null;

    /**
     * @ElementName bandwidthEnforcementType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaBandwidthEnforcementType
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:12028
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaBandwidthEnforcementType|null
     */
    protected $bandwidthEnforcementType = null;

    /**
     * @ElementName mediaBandwidth
     * @Type int
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:12028
     * @MinInclusive 1
     * @MaxInclusive 100000000
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $mediaBandwidth = null;

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
     * @return int|null
     */
    public function getMediaBandwidth()
    {
        return $this->mediaBandwidth instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaBandwidth;
    }

    /**
     * Setter for mediaBandwidth
     *
     * @param int|null $mediaBandwidth
     * @return $this
     */
    public function setMediaBandwidth($mediaBandwidth = null)
    {
        if ($mediaBandwidth === null) {
            $this->mediaBandwidth = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->mediaBandwidth = $mediaBandwidth;
        }
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

