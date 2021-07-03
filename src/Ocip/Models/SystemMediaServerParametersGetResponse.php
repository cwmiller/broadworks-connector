<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaServerParametersGetResponse
 *
 * Response to SystemMediaServerParametersGetListRequest.
 *         Contains a list of system Media Server parameters.
 *
 * @see SystemMediaServerParametersGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:12023","type":"sequence"}]
 */
class SystemMediaServerParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mediaServerResponseTimerMilliseconds
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12023
     * @MinInclusive 600
     * @MaxInclusive 120000
     * @var int|null
     */
    private $mediaServerResponseTimerMilliseconds = null;

    /**
     * @ElementName mediaServerSelectionRouteTimerMilliseconds
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12023
     * @MinInclusive 500
     * @MaxInclusive 120000
     * @var int|null
     */
    private $mediaServerSelectionRouteTimerMilliseconds = null;

    /**
     * @ElementName useStaticMediaServerDevice
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12023
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

