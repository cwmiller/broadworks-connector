<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVideoServerParametersGetResponse
 *
 * Response to SystemVideoServerParametersGetRequest.
 *         Contains a list of system video server parameters.
 *
 * @see SystemVideoServerParametersGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:19477","type":"sequence"}]
 */
class SystemVideoServerParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName videoServerResponseTimerMilliseconds
     * @Type int
     * @Group da582a1f8028404e70d260cf1f891033:19477
     * @MinInclusive 600
     * @MaxInclusive 120000
     * @var int|null
     */
    protected $videoServerResponseTimerMilliseconds = null;

    /**
     * @ElementName videoServerSelectionRouteTimerMilliseconds
     * @Type int
     * @Group da582a1f8028404e70d260cf1f891033:19477
     * @MinInclusive 500
     * @MaxInclusive 120000
     * @var int|null
     */
    protected $videoServerSelectionRouteTimerMilliseconds = null;

    /**
     * @ElementName useStaticVideoServerDevice
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:19477
     * @var bool|null
     */
    protected $useStaticVideoServerDevice = null;

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

