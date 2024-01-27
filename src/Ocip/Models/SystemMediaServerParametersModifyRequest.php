<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaServerParametersModifyRequest
 *
 * Request to modify Media Server system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:12163","type":"sequence"}]
 */
class SystemMediaServerParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName mediaServerResponseTimerMilliseconds
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:12163
     * @MinInclusive 600
     * @MaxInclusive 120000
     * @var int|null
     */
    protected $mediaServerResponseTimerMilliseconds = null;

    /**
     * @ElementName mediaServerSelectionRouteTimerMilliseconds
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:12163
     * @MinInclusive 500
     * @MaxInclusive 120000
     * @var int|null
     */
    protected $mediaServerSelectionRouteTimerMilliseconds = null;

    /**
     * @ElementName useStaticMediaServerDevice
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:12163
     * @var bool|null
     */
    protected $useStaticMediaServerDevice = null;

    /**
     * Getter for mediaServerResponseTimerMilliseconds
     *
     * @return int
     */
    public function getMediaServerResponseTimerMilliseconds()
    {
        return $this->mediaServerResponseTimerMilliseconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaServerResponseTimerMilliseconds;
    }

    /**
     * Setter for mediaServerResponseTimerMilliseconds
     *
     * @param int $mediaServerResponseTimerMilliseconds
     * @return $this
     */
    public function setMediaServerResponseTimerMilliseconds($mediaServerResponseTimerMilliseconds)
    {
        $this->mediaServerResponseTimerMilliseconds = $mediaServerResponseTimerMilliseconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaServerResponseTimerMilliseconds()
    {
        $this->mediaServerResponseTimerMilliseconds = null;
        return $this;
    }

    /**
     * Getter for mediaServerSelectionRouteTimerMilliseconds
     *
     * @return int
     */
    public function getMediaServerSelectionRouteTimerMilliseconds()
    {
        return $this->mediaServerSelectionRouteTimerMilliseconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaServerSelectionRouteTimerMilliseconds;
    }

    /**
     * Setter for mediaServerSelectionRouteTimerMilliseconds
     *
     * @param int $mediaServerSelectionRouteTimerMilliseconds
     * @return $this
     */
    public function setMediaServerSelectionRouteTimerMilliseconds($mediaServerSelectionRouteTimerMilliseconds)
    {
        $this->mediaServerSelectionRouteTimerMilliseconds = $mediaServerSelectionRouteTimerMilliseconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaServerSelectionRouteTimerMilliseconds()
    {
        $this->mediaServerSelectionRouteTimerMilliseconds = null;
        return $this;
    }

    /**
     * Getter for useStaticMediaServerDevice
     *
     * @return bool
     */
    public function getUseStaticMediaServerDevice()
    {
        return $this->useStaticMediaServerDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useStaticMediaServerDevice;
    }

    /**
     * Setter for useStaticMediaServerDevice
     *
     * @param bool $useStaticMediaServerDevice
     * @return $this
     */
    public function setUseStaticMediaServerDevice($useStaticMediaServerDevice)
    {
        $this->useStaticMediaServerDevice = $useStaticMediaServerDevice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseStaticMediaServerDevice()
    {
        $this->useStaticMediaServerDevice = null;
        return $this;
    }
}

