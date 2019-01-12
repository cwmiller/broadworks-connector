<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVideoServerParametersModifyRequest
 *
 * Request to modify video server system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:17345","type":"sequence"}]
 */
class SystemVideoServerParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName videoServerResponseTimerMilliseconds
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17345
     * @var int|null
     */
    private $videoServerResponseTimerMilliseconds = null;

    /**
     * @ElementName videoServerSelectionRouteTimerMilliseconds
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17345
     * @var int|null
     */
    private $videoServerSelectionRouteTimerMilliseconds = null;

    /**
     * @ElementName useStaticVideoServerDevice
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17345
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

