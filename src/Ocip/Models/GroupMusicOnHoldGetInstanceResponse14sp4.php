<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupMusicOnHoldGetInstanceResponse14sp4
 *
 * Response to the GroupMusicOnHoldGetInstanceRequest14sp4.
 *
 * @see GroupMusicOnHoldGetInstanceRequest14sp4
 */
class GroupMusicOnHoldGetInstanceResponse14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName isActiveDuringCallHold
     * @var bool|null
     */
    private $isActiveDuringCallHold = null;

    /**
     * @ElementName isActiveDuringCallPark
     * @var bool|null
     */
    private $isActiveDuringCallPark = null;

    /**
     * @ElementName isActiveDuringBusyCampOn
     * @var bool|null
     */
    private $isActiveDuringBusyCampOn = null;

    /**
     * @ElementName messageSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldMessageSelection|null
     */
    private $messageSelection = null;

    /**
     * @ElementName accessDeviceEndpoint
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14|null
     */
    private $accessDeviceEndpoint = null;

    /**
     * @ElementName enableVideo
     * @var bool|null
     */
    private $enableVideo = null;

    /**
     * @ElementName audioFileDescription
     * @var string|null
     */
    private $audioFileDescription = null;

    /**
     * @ElementName videoFileDescription
     * @var string|null
     */
    private $videoFileDescription = null;

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Getter for isActiveDuringCallHold
     *
     * @ElementName isActiveDuringCallHold
     * @return bool|null
     */
    public function getIsActiveDuringCallHold()
    {
        return $this->isActiveDuringCallHold;
    }

    /**
     * Setter for isActiveDuringCallHold
     *
     * @ElementName isActiveDuringCallHold
     * @param bool|null $isActiveDuringCallHold
     * @return $this
     */
    public function setIsActiveDuringCallHold($isActiveDuringCallHold)
    {
        $this->isActiveDuringCallHold = $isActiveDuringCallHold;
        return $this;
    }

    /**
     * Getter for isActiveDuringCallPark
     *
     * @ElementName isActiveDuringCallPark
     * @return bool|null
     */
    public function getIsActiveDuringCallPark()
    {
        return $this->isActiveDuringCallPark;
    }

    /**
     * Setter for isActiveDuringCallPark
     *
     * @ElementName isActiveDuringCallPark
     * @param bool|null $isActiveDuringCallPark
     * @return $this
     */
    public function setIsActiveDuringCallPark($isActiveDuringCallPark)
    {
        $this->isActiveDuringCallPark = $isActiveDuringCallPark;
        return $this;
    }

    /**
     * Getter for isActiveDuringBusyCampOn
     *
     * @ElementName isActiveDuringBusyCampOn
     * @return bool|null
     */
    public function getIsActiveDuringBusyCampOn()
    {
        return $this->isActiveDuringBusyCampOn;
    }

    /**
     * Setter for isActiveDuringBusyCampOn
     *
     * @ElementName isActiveDuringBusyCampOn
     * @param bool|null $isActiveDuringBusyCampOn
     * @return $this
     */
    public function setIsActiveDuringBusyCampOn($isActiveDuringBusyCampOn)
    {
        $this->isActiveDuringBusyCampOn = $isActiveDuringBusyCampOn;
        return $this;
    }

    /**
     * Getter for messageSelection
     *
     * @ElementName messageSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldMessageSelection|null
     */
    public function getMessageSelection()
    {
        return $this->messageSelection;
    }

    /**
     * Setter for messageSelection
     *
     * @ElementName messageSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldMessageSelection|null $messageSelection
     * @return $this
     */
    public function setMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldMessageSelection $messageSelection)
    {
        $this->messageSelection = $messageSelection;
        return $this;
    }

    /**
     * Getter for accessDeviceEndpoint
     *
     * @ElementName accessDeviceEndpoint
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14|null
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @ElementName accessDeviceEndpoint
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14|null $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14 $accessDeviceEndpoint)
    {
        $this->accessDeviceEndpoint = $accessDeviceEndpoint;
        return $this;
    }

    /**
     * Getter for enableVideo
     *
     * @ElementName enableVideo
     * @return bool|null
     */
    public function getEnableVideo()
    {
        return $this->enableVideo;
    }

    /**
     * Setter for enableVideo
     *
     * @ElementName enableVideo
     * @param bool|null $enableVideo
     * @return $this
     */
    public function setEnableVideo($enableVideo)
    {
        $this->enableVideo = $enableVideo;
        return $this;
    }

    /**
     * Getter for audioFileDescription
     *
     * @ElementName audioFileDescription
     * @return string|null
     */
    public function getAudioFileDescription()
    {
        return $this->audioFileDescription;
    }

    /**
     * Setter for audioFileDescription
     *
     * @ElementName audioFileDescription
     * @param string|null $audioFileDescription
     * @return $this
     */
    public function setAudioFileDescription($audioFileDescription)
    {
        $this->audioFileDescription = $audioFileDescription;
        return $this;
    }

    /**
     * Getter for videoFileDescription
     *
     * @ElementName videoFileDescription
     * @return string|null
     */
    public function getVideoFileDescription()
    {
        return $this->videoFileDescription;
    }

    /**
     * Setter for videoFileDescription
     *
     * @ElementName videoFileDescription
     * @param string|null $videoFileDescription
     * @return $this
     */
    public function setVideoFileDescription($videoFileDescription)
    {
        $this->videoFileDescription = $videoFileDescription;
        return $this;
    }


}

