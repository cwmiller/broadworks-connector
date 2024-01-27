<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupMusicOnHoldGetInstanceResponse23
 *
 * Response to the GroupMusicOnHoldGetInstanceRequest23.
 *         The following elements are only used in AS data mode:
 *         - useDynamicMOHDuringCallHold, value "false" is returned in XS data mode.
 *
 * @see GroupMusicOnHoldGetInstanceRequest23
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:3814","type":"sequence"}]
 */
class GroupMusicOnHoldGetInstanceResponse23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:3814
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName isActiveDuringCallHold
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:3814
     * @var bool|null
     */
    protected $isActiveDuringCallHold = null;

    /**
     * @ElementName isActiveDuringCallPark
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:3814
     * @var bool|null
     */
    protected $isActiveDuringCallPark = null;

    /**
     * @ElementName isActiveDuringBusyCampOn
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:3814
     * @var bool|null
     */
    protected $isActiveDuringBusyCampOn = null;

    /**
     * @ElementName enableVideo
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:3814
     * @var bool|null
     */
    protected $enableVideo = null;

    /**
     * @ElementName source
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead22V2
     * @Group 240b50f54d060859e5e275082fdf49f9:3814
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead22V2|null
     */
    protected $source = null;

    /**
     * @ElementName useAlternateSourceForInternalCalls
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:3814
     * @var bool|null
     */
    protected $useAlternateSourceForInternalCalls = null;

    /**
     * @ElementName internalSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead22V2
     * @Group 240b50f54d060859e5e275082fdf49f9:3814
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead22V2|null
     */
    protected $internalSource = null;

    /**
     * @ElementName useDynamicMOHDuringCallHold
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:3814
     * @var bool|null
     */
    protected $useDynamicMOHDuringCallHold = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for isActiveDuringCallHold
     *
     * @return bool
     */
    public function getIsActiveDuringCallHold()
    {
        return $this->isActiveDuringCallHold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActiveDuringCallHold;
    }

    /**
     * Setter for isActiveDuringCallHold
     *
     * @param bool $isActiveDuringCallHold
     * @return $this
     */
    public function setIsActiveDuringCallHold($isActiveDuringCallHold)
    {
        $this->isActiveDuringCallHold = $isActiveDuringCallHold;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActiveDuringCallHold()
    {
        $this->isActiveDuringCallHold = null;
        return $this;
    }

    /**
     * Getter for isActiveDuringCallPark
     *
     * @return bool
     */
    public function getIsActiveDuringCallPark()
    {
        return $this->isActiveDuringCallPark instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActiveDuringCallPark;
    }

    /**
     * Setter for isActiveDuringCallPark
     *
     * @param bool $isActiveDuringCallPark
     * @return $this
     */
    public function setIsActiveDuringCallPark($isActiveDuringCallPark)
    {
        $this->isActiveDuringCallPark = $isActiveDuringCallPark;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActiveDuringCallPark()
    {
        $this->isActiveDuringCallPark = null;
        return $this;
    }

    /**
     * Getter for isActiveDuringBusyCampOn
     *
     * @return bool
     */
    public function getIsActiveDuringBusyCampOn()
    {
        return $this->isActiveDuringBusyCampOn instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActiveDuringBusyCampOn;
    }

    /**
     * Setter for isActiveDuringBusyCampOn
     *
     * @param bool $isActiveDuringBusyCampOn
     * @return $this
     */
    public function setIsActiveDuringBusyCampOn($isActiveDuringBusyCampOn)
    {
        $this->isActiveDuringBusyCampOn = $isActiveDuringBusyCampOn;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActiveDuringBusyCampOn()
    {
        $this->isActiveDuringBusyCampOn = null;
        return $this;
    }

    /**
     * Getter for enableVideo
     *
     * @return bool
     */
    public function getEnableVideo()
    {
        return $this->enableVideo instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableVideo;
    }

    /**
     * Setter for enableVideo
     *
     * @param bool $enableVideo
     * @return $this
     */
    public function setEnableVideo($enableVideo)
    {
        $this->enableVideo = $enableVideo;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableVideo()
    {
        $this->enableVideo = null;
        return $this;
    }

    /**
     * Getter for source
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead22V2
     */
    public function getSource()
    {
        return $this->source instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->source;
    }

    /**
     * Setter for source
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead22V2 $source
     * @return $this
     */
    public function setSource(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead22V2 $source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSource()
    {
        $this->source = null;
        return $this;
    }

    /**
     * Getter for useAlternateSourceForInternalCalls
     *
     * @return bool
     */
    public function getUseAlternateSourceForInternalCalls()
    {
        return $this->useAlternateSourceForInternalCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useAlternateSourceForInternalCalls;
    }

    /**
     * Setter for useAlternateSourceForInternalCalls
     *
     * @param bool $useAlternateSourceForInternalCalls
     * @return $this
     */
    public function setUseAlternateSourceForInternalCalls($useAlternateSourceForInternalCalls)
    {
        $this->useAlternateSourceForInternalCalls = $useAlternateSourceForInternalCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseAlternateSourceForInternalCalls()
    {
        $this->useAlternateSourceForInternalCalls = null;
        return $this;
    }

    /**
     * Getter for internalSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead22V2
     */
    public function getInternalSource()
    {
        return $this->internalSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->internalSource;
    }

    /**
     * Setter for internalSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead22V2 $internalSource
     * @return $this
     */
    public function setInternalSource(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceRead22V2 $internalSource)
    {
        $this->internalSource = $internalSource;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInternalSource()
    {
        $this->internalSource = null;
        return $this;
    }

    /**
     * Getter for useDynamicMOHDuringCallHold
     *
     * @return bool
     */
    public function getUseDynamicMOHDuringCallHold()
    {
        return $this->useDynamicMOHDuringCallHold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useDynamicMOHDuringCallHold;
    }

    /**
     * Setter for useDynamicMOHDuringCallHold
     *
     * @param bool $useDynamicMOHDuringCallHold
     * @return $this
     */
    public function setUseDynamicMOHDuringCallHold($useDynamicMOHDuringCallHold)
    {
        $this->useDynamicMOHDuringCallHold = $useDynamicMOHDuringCallHold;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseDynamicMOHDuringCallHold()
    {
        $this->useDynamicMOHDuringCallHold = null;
        return $this;
    }
}

