<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSGetResponse
 *
 * Response to SystemGETSGetRequest.
 *
 * @see SystemGETSGetRequest
 */
class SystemGETSGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enabled
     * @var bool|null
     */
    private $enabled = null;

    /**
     * @ElementName enableRequireResourcePriority
     * @var bool|null
     */
    private $enableRequireResourcePriority = null;

    /**
     * @ElementName sendAccessResourcePriority
     * @var bool|null
     */
    private $sendAccessResourcePriority = null;

    /**
     * @ElementName callIdentifierMode
     * @var \CWM\BroadWorksConnector\Ocip\Models\GETSCallIdentifierMode|null
     */
    private $callIdentifierMode = null;

    /**
     * @ElementName defaultPriorityAVP
     * @var int|null
     */
    private $defaultPriorityAVP = null;

    /**
     * @ElementName signalingDSCP
     * @var int|null
     */
    private $signalingDSCP = null;

    /**
     * @ElementName defaultRValue
     * @var string|null
     */
    private $defaultRValue = null;

    /**
     * @ElementName bypassRoRelease
     * @var bool|null
     */
    private $bypassRoRelease = null;

    /**
     * Getter for enabled
     *
     * @ElementName enabled
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Setter for enabled
     *
     * @ElementName enabled
     * @param bool|null $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Getter for enableRequireResourcePriority
     *
     * @ElementName enableRequireResourcePriority
     * @return bool|null
     */
    public function getEnableRequireResourcePriority()
    {
        return $this->enableRequireResourcePriority;
    }

    /**
     * Setter for enableRequireResourcePriority
     *
     * @ElementName enableRequireResourcePriority
     * @param bool|null $enableRequireResourcePriority
     * @return $this
     */
    public function setEnableRequireResourcePriority($enableRequireResourcePriority)
    {
        $this->enableRequireResourcePriority = $enableRequireResourcePriority;
        return $this;
    }

    /**
     * Getter for sendAccessResourcePriority
     *
     * @ElementName sendAccessResourcePriority
     * @return bool|null
     */
    public function getSendAccessResourcePriority()
    {
        return $this->sendAccessResourcePriority;
    }

    /**
     * Setter for sendAccessResourcePriority
     *
     * @ElementName sendAccessResourcePriority
     * @param bool|null $sendAccessResourcePriority
     * @return $this
     */
    public function setSendAccessResourcePriority($sendAccessResourcePriority)
    {
        $this->sendAccessResourcePriority = $sendAccessResourcePriority;
        return $this;
    }

    /**
     * Getter for callIdentifierMode
     *
     * @ElementName callIdentifierMode
     * @return \CWM\BroadWorksConnector\Ocip\Models\GETSCallIdentifierMode|null
     */
    public function getCallIdentifierMode()
    {
        return $this->callIdentifierMode;
    }

    /**
     * Setter for callIdentifierMode
     *
     * @ElementName callIdentifierMode
     * @param \CWM\BroadWorksConnector\Ocip\Models\GETSCallIdentifierMode|null $callIdentifierMode
     * @return $this
     */
    public function setCallIdentifierMode(\CWM\BroadWorksConnector\Ocip\Models\GETSCallIdentifierMode $callIdentifierMode)
    {
        $this->callIdentifierMode = $callIdentifierMode;
        return $this;
    }

    /**
     * Getter for defaultPriorityAVP
     *
     * @ElementName defaultPriorityAVP
     * @return int|null
     */
    public function getDefaultPriorityAVP()
    {
        return $this->defaultPriorityAVP;
    }

    /**
     * Setter for defaultPriorityAVP
     *
     * @ElementName defaultPriorityAVP
     * @param int|null $defaultPriorityAVP
     * @return $this
     */
    public function setDefaultPriorityAVP($defaultPriorityAVP)
    {
        $this->defaultPriorityAVP = $defaultPriorityAVP;
        return $this;
    }

    /**
     * Getter for signalingDSCP
     *
     * @ElementName signalingDSCP
     * @return int|null
     */
    public function getSignalingDSCP()
    {
        return $this->signalingDSCP;
    }

    /**
     * Setter for signalingDSCP
     *
     * @ElementName signalingDSCP
     * @param int|null $signalingDSCP
     * @return $this
     */
    public function setSignalingDSCP($signalingDSCP)
    {
        $this->signalingDSCP = $signalingDSCP;
        return $this;
    }

    /**
     * Getter for defaultRValue
     *
     * @ElementName defaultRValue
     * @return string|null
     */
    public function getDefaultRValue()
    {
        return $this->defaultRValue;
    }

    /**
     * Setter for defaultRValue
     *
     * @ElementName defaultRValue
     * @param string|null $defaultRValue
     * @return $this
     */
    public function setDefaultRValue($defaultRValue)
    {
        $this->defaultRValue = $defaultRValue;
        return $this;
    }

    /**
     * Getter for bypassRoRelease
     *
     * @ElementName bypassRoRelease
     * @return bool|null
     */
    public function getBypassRoRelease()
    {
        return $this->bypassRoRelease;
    }

    /**
     * Setter for bypassRoRelease
     *
     * @ElementName bypassRoRelease
     * @param bool|null $bypassRoRelease
     * @return $this
     */
    public function setBypassRoRelease($bypassRoRelease)
    {
        $this->bypassRoRelease = $bypassRoRelease;
        return $this;
    }


}

