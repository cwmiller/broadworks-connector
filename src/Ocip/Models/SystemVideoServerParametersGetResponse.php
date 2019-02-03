<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVideoServerParametersGetResponse
 *
 * Response to SystemVideoServerParametersGetRequest.
 *         Contains a list of system video server parameters.
 *
 * @see SystemVideoServerParametersGetRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:18169","type":"sequence"}]
 */
class SystemVideoServerParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName videoServerResponseTimerMilliseconds
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18169
     * @var int|null
     */
    private $videoServerResponseTimerMilliseconds = null;

    /**
     * @ElementName videoServerSelectionRouteTimerMilliseconds
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18169
     * @var int|null
     */
    private $videoServerSelectionRouteTimerMilliseconds = null;

    /**
     * @ElementName useStaticVideoServerDevice
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18169
     * @var bool|null
     */
    private $useStaticVideoServerDevice = null;

    /**
     * Getter for videoServerResponseTimerMilliseconds
     *
     * @return int
     */
    public function getVideoServerResponseTimerMilliseconds()
    {
        return $this->videoServerResponseTimerMilliseconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoServerResponseTimerMilliseconds;
    }

    /**
     * Setter for videoServerResponseTimerMilliseconds
     *
     * @param int $videoServerResponseTimerMilliseconds
     * @return $this
     */
    public function setVideoServerResponseTimerMilliseconds($videoServerResponseTimerMilliseconds)
    {
        $this->videoServerResponseTimerMilliseconds = $videoServerResponseTimerMilliseconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoServerResponseTimerMilliseconds()
    {
        $this->videoServerResponseTimerMilliseconds = null;
        return $this;
    }

    /**
     * Getter for videoServerSelectionRouteTimerMilliseconds
     *
     * @return int
     */
    public function getVideoServerSelectionRouteTimerMilliseconds()
    {
        return $this->videoServerSelectionRouteTimerMilliseconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoServerSelectionRouteTimerMilliseconds;
    }

    /**
     * Setter for videoServerSelectionRouteTimerMilliseconds
     *
     * @param int $videoServerSelectionRouteTimerMilliseconds
     * @return $this
     */
    public function setVideoServerSelectionRouteTimerMilliseconds($videoServerSelectionRouteTimerMilliseconds)
    {
        $this->videoServerSelectionRouteTimerMilliseconds = $videoServerSelectionRouteTimerMilliseconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoServerSelectionRouteTimerMilliseconds()
    {
        $this->videoServerSelectionRouteTimerMilliseconds = null;
        return $this;
    }

    /**
     * Getter for useStaticVideoServerDevice
     *
     * @return bool
     */
    public function getUseStaticVideoServerDevice()
    {
        return $this->useStaticVideoServerDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useStaticVideoServerDevice;
    }

    /**
     * Setter for useStaticVideoServerDevice
     *
     * @param bool $useStaticVideoServerDevice
     * @return $this
     */
    public function setUseStaticVideoServerDevice($useStaticVideoServerDevice)
    {
        $this->useStaticVideoServerDevice = $useStaticVideoServerDevice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseStaticVideoServerDevice()
    {
        $this->useStaticVideoServerDevice = null;
        return $this;
    }


}

