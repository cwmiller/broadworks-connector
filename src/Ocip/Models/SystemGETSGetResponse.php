<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSGetResponse
 *
 * Response to SystemGETSGetRequest.
 *
 * @see SystemGETSGetRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:9808","type":"sequence"}]
 */
class SystemGETSGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enabled
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9808
     * @var bool|null
     */
    private $enabled = null;

    /**
     * @ElementName enableRequireResourcePriority
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9808
     * @var bool|null
     */
    private $enableRequireResourcePriority = null;

    /**
     * @ElementName sendAccessResourcePriority
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9808
     * @var bool|null
     */
    private $sendAccessResourcePriority = null;

    /**
     * @ElementName callIdentifierMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GETSCallIdentifierMode
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9808
     * @var \CWM\BroadWorksConnector\Ocip\Models\GETSCallIdentifierMode|null
     */
    private $callIdentifierMode = null;

    /**
     * @ElementName defaultPriorityAVP
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9808
     * @MinInclusive
     * @MaxInclusive 4
     * @var int|null
     */
    private $defaultPriorityAVP = null;

    /**
     * @ElementName signalingDSCP
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9808
     * @MinInclusive
     * @MaxInclusive 63
     * @var int|null
     */
    private $signalingDSCP = null;

    /**
     * @ElementName defaultRValue
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9808
     * @MinLength 3
     * @MaxLength 80
     * @var string|null
     */
    private $defaultRValue = null;

    /**
     * @ElementName bypassRoRelease
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9808
     * @var bool|null
     */
    private $bypassRoRelease = null;

    /**
     * Getter for enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enabled;
    }

    /**
     * Setter for enabled
     *
     * @param bool $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnabled()
    {
        $this->enabled = null;
        return $this;
    }

    /**
     * Getter for enableRequireResourcePriority
     *
     * @return bool
     */
    public function getEnableRequireResourcePriority()
    {
        return $this->enableRequireResourcePriority instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableRequireResourcePriority;
    }

    /**
     * Setter for enableRequireResourcePriority
     *
     * @param bool $enableRequireResourcePriority
     * @return $this
     */
    public function setEnableRequireResourcePriority($enableRequireResourcePriority)
    {
        $this->enableRequireResourcePriority = $enableRequireResourcePriority;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableRequireResourcePriority()
    {
        $this->enableRequireResourcePriority = null;
        return $this;
    }

    /**
     * Getter for sendAccessResourcePriority
     *
     * @return bool
     */
    public function getSendAccessResourcePriority()
    {
        return $this->sendAccessResourcePriority instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendAccessResourcePriority;
    }

    /**
     * Setter for sendAccessResourcePriority
     *
     * @param bool $sendAccessResourcePriority
     * @return $this
     */
    public function setSendAccessResourcePriority($sendAccessResourcePriority)
    {
        $this->sendAccessResourcePriority = $sendAccessResourcePriority;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendAccessResourcePriority()
    {
        $this->sendAccessResourcePriority = null;
        return $this;
    }

    /**
     * Getter for callIdentifierMode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GETSCallIdentifierMode
     */
    public function getCallIdentifierMode()
    {
        return $this->callIdentifierMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callIdentifierMode;
    }

    /**
     * Setter for callIdentifierMode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GETSCallIdentifierMode $callIdentifierMode
     * @return $this
     */
    public function setCallIdentifierMode(\CWM\BroadWorksConnector\Ocip\Models\GETSCallIdentifierMode $callIdentifierMode)
    {
        $this->callIdentifierMode = $callIdentifierMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallIdentifierMode()
    {
        $this->callIdentifierMode = null;
        return $this;
    }

    /**
     * Getter for defaultPriorityAVP
     *
     * @return int
     */
    public function getDefaultPriorityAVP()
    {
        return $this->defaultPriorityAVP instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultPriorityAVP;
    }

    /**
     * Setter for defaultPriorityAVP
     *
     * @param int $defaultPriorityAVP
     * @return $this
     */
    public function setDefaultPriorityAVP($defaultPriorityAVP)
    {
        $this->defaultPriorityAVP = $defaultPriorityAVP;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultPriorityAVP()
    {
        $this->defaultPriorityAVP = null;
        return $this;
    }

    /**
     * Getter for signalingDSCP
     *
     * @return int
     */
    public function getSignalingDSCP()
    {
        return $this->signalingDSCP instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->signalingDSCP;
    }

    /**
     * Setter for signalingDSCP
     *
     * @param int $signalingDSCP
     * @return $this
     */
    public function setSignalingDSCP($signalingDSCP)
    {
        $this->signalingDSCP = $signalingDSCP;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSignalingDSCP()
    {
        $this->signalingDSCP = null;
        return $this;
    }

    /**
     * Getter for defaultRValue
     *
     * @return string
     */
    public function getDefaultRValue()
    {
        return $this->defaultRValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultRValue;
    }

    /**
     * Setter for defaultRValue
     *
     * @param string $defaultRValue
     * @return $this
     */
    public function setDefaultRValue($defaultRValue)
    {
        $this->defaultRValue = $defaultRValue;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultRValue()
    {
        $this->defaultRValue = null;
        return $this;
    }

    /**
     * Getter for bypassRoRelease
     *
     * @return bool
     */
    public function getBypassRoRelease()
    {
        return $this->bypassRoRelease instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->bypassRoRelease;
    }

    /**
     * Setter for bypassRoRelease
     *
     * @param bool $bypassRoRelease
     * @return $this
     */
    public function setBypassRoRelease($bypassRoRelease)
    {
        $this->bypassRoRelease = $bypassRoRelease;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBypassRoRelease()
    {
        $this->bypassRoRelease = null;
        return $this;
    }


}

