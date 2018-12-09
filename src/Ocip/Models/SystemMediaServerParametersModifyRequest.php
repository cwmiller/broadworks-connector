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
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:10377","type":"sequence"}]
 */
class SystemMediaServerParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName mediaServerResponseTimerMilliseconds
     * @Type int
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:10377
     * @var int|null
     */
    private $mediaServerResponseTimerMilliseconds = null;

    /**
     * @ElementName mediaServerSelectionRouteTimerMilliseconds
     * @Type int
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:10377
     * @var int|null
     */
    private $mediaServerSelectionRouteTimerMilliseconds = null;

    /**
     * @ElementName useStaticMediaServerDevice
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:10377
     * @var bool|null
     */
    private $useStaticMediaServerDevice = null;

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

