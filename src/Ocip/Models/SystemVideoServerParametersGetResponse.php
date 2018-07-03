<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVideoServerParametersGetResponse
 *
 * Response to SystemVideoServerParametersGetRequest.
 *         Contains a list of system video server parameters.
 *
 * @see SystemVideoServerParametersGetRequest
 */
class SystemVideoServerParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName videoServerResponseTimerMilliseconds
     * @var int|null
     */
    private $videoServerResponseTimerMilliseconds = null;

    /**
     * @ElementName videoServerSelectionRouteTimerMilliseconds
     * @var int|null
     */
    private $videoServerSelectionRouteTimerMilliseconds = null;

    /**
     * @ElementName useStaticVideoServerDevice
     * @var bool|null
     */
    private $useStaticVideoServerDevice = null;

    /**
     * Getter for videoServerResponseTimerMilliseconds
     *
     * @ElementName videoServerResponseTimerMilliseconds
     * @return int|null
     */
    public function getVideoServerResponseTimerMilliseconds()
    {
        return $this->videoServerResponseTimerMilliseconds;
    }

    /**
     * Setter for videoServerResponseTimerMilliseconds
     *
     * @ElementName videoServerResponseTimerMilliseconds
     * @param int|null $videoServerResponseTimerMilliseconds
     * @return $this
     */
    public function setVideoServerResponseTimerMilliseconds($videoServerResponseTimerMilliseconds)
    {
        $this->videoServerResponseTimerMilliseconds = $videoServerResponseTimerMilliseconds;
        return $this;
    }

    /**
     * Getter for videoServerSelectionRouteTimerMilliseconds
     *
     * @ElementName videoServerSelectionRouteTimerMilliseconds
     * @return int|null
     */
    public function getVideoServerSelectionRouteTimerMilliseconds()
    {
        return $this->videoServerSelectionRouteTimerMilliseconds;
    }

    /**
     * Setter for videoServerSelectionRouteTimerMilliseconds
     *
     * @ElementName videoServerSelectionRouteTimerMilliseconds
     * @param int|null $videoServerSelectionRouteTimerMilliseconds
     * @return $this
     */
    public function setVideoServerSelectionRouteTimerMilliseconds($videoServerSelectionRouteTimerMilliseconds)
    {
        $this->videoServerSelectionRouteTimerMilliseconds = $videoServerSelectionRouteTimerMilliseconds;
        return $this;
    }

    /**
     * Getter for useStaticVideoServerDevice
     *
     * @ElementName useStaticVideoServerDevice
     * @return bool|null
     */
    public function getUseStaticVideoServerDevice()
    {
        return $this->useStaticVideoServerDevice;
    }

    /**
     * Setter for useStaticVideoServerDevice
     *
     * @ElementName useStaticVideoServerDevice
     * @param bool|null $useStaticVideoServerDevice
     * @return $this
     */
    public function setUseStaticVideoServerDevice($useStaticVideoServerDevice)
    {
        $this->useStaticVideoServerDevice = $useStaticVideoServerDevice;
        return $this;
    }


}

