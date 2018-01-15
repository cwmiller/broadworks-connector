<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaServerParametersGetResponse
 *
 * Response to SystemMediaServerParametersGetListRequest.
 *         Contains a list of system Media Server parameters.
 */
class SystemMediaServerParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mediaServerResponseTimerMilliseconds
     * @var int|null
     */
    private $mediaServerResponseTimerMilliseconds = null;

    /**
     * @ElementName mediaServerSelectionRouteTimerMilliseconds
     * @var int|null
     */
    private $mediaServerSelectionRouteTimerMilliseconds = null;

    /**
     * @ElementName useStaticMediaServerDevice
     * @var bool|null
     */
    private $useStaticMediaServerDevice = null;

    /**
     * Getter for mediaServerResponseTimerMilliseconds
     *
     * @ElementName mediaServerResponseTimerMilliseconds
     * @return int|null
     */
    public function getMediaServerResponseTimerMilliseconds()
    {
        return $this->mediaServerResponseTimerMilliseconds;
    }

    /**
     * Setter for mediaServerResponseTimerMilliseconds
     *
     * @ElementName mediaServerResponseTimerMilliseconds
     * @param int|null $mediaServerResponseTimerMilliseconds
     * @return $this
     */
    public function setMediaServerResponseTimerMilliseconds($mediaServerResponseTimerMilliseconds)
    {
        $this->mediaServerResponseTimerMilliseconds = $mediaServerResponseTimerMilliseconds;
        return $this;
    }

    /**
     * Getter for mediaServerSelectionRouteTimerMilliseconds
     *
     * @ElementName mediaServerSelectionRouteTimerMilliseconds
     * @return int|null
     */
    public function getMediaServerSelectionRouteTimerMilliseconds()
    {
        return $this->mediaServerSelectionRouteTimerMilliseconds;
    }

    /**
     * Setter for mediaServerSelectionRouteTimerMilliseconds
     *
     * @ElementName mediaServerSelectionRouteTimerMilliseconds
     * @param int|null $mediaServerSelectionRouteTimerMilliseconds
     * @return $this
     */
    public function setMediaServerSelectionRouteTimerMilliseconds($mediaServerSelectionRouteTimerMilliseconds)
    {
        $this->mediaServerSelectionRouteTimerMilliseconds = $mediaServerSelectionRouteTimerMilliseconds;
        return $this;
    }

    /**
     * Getter for useStaticMediaServerDevice
     *
     * @ElementName useStaticMediaServerDevice
     * @return bool|null
     */
    public function getUseStaticMediaServerDevice()
    {
        return $this->useStaticMediaServerDevice;
    }

    /**
     * Setter for useStaticMediaServerDevice
     *
     * @ElementName useStaticMediaServerDevice
     * @param bool|null $useStaticMediaServerDevice
     * @return $this
     */
    public function setUseStaticMediaServerDevice($useStaticMediaServerDevice)
    {
        $this->useStaticMediaServerDevice = $useStaticMediaServerDevice;
        return $this;
    }


}

