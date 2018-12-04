<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableTreatmentGetResponse
 *
 * Response to the SystemConfigurableTreatmentGetRequest.
 *             The response contains the treatment configurable information.
 *             Replaced By: SystemConfigurableTreatmentGetResponse16
 *
 * @see SystemConfigurableTreatmentGetRequest
 * @see SystemConfigurableTreatmentGetResponse16
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:21149","type":"sequence"}]
 */
class SystemConfigurableTreatmentGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:21149
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName chargeIndicator
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ChargeIndicator
     * @Group 1a79c7896cb04feac6eff47a5321756e:21149
     * @var \CWM\BroadWorksConnector\Ocip\Models\ChargeIndicator|null
     */
    private $chargeIndicator = null;

    /**
     * @ElementName accessSIPStatusCode
     * @Type int
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:21149
     * @var int|null
     */
    private $accessSIPStatusCode = null;

    /**
     * @ElementName accessSIPStatusMessage
     * @Type string
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:21149
     * @var string|null
     */
    private $accessSIPStatusMessage = null;

    /**
     * @ElementName networkSIPStatusCode
     * @Type int
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:21149
     * @var int|null
     */
    private $networkSIPStatusCode = null;

    /**
     * @ElementName networkSIPStatusMessage
     * @Type string
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:21149
     * @var string|null
     */
    private $networkSIPStatusMessage = null;

    /**
     * @ElementName q850CauseValue
     * @Type int
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:21149
     * @var int|null
     */
    private $q850CauseValue = null;

    /**
     * @ElementName q850Text
     * @Type string
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:21149
     * @var string|null
     */
    private $q850Text = null;

    /**
     * @ElementName accessTreatmentAudioFile
     * @Type string
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:21149
     * @var string|null
     */
    private $accessTreatmentAudioFile = null;

    /**
     * @ElementName accessTreatmentVideoFile
     * @Type string
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:21149
     * @var string|null
     */
    private $accessTreatmentVideoFile = null;

    /**
     * @ElementName networkTreatmentAudioFile
     * @Type string
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:21149
     * @var string|null
     */
    private $networkTreatmentAudioFile = null;

    /**
     * @ElementName networkTreatmentVideoFile
     * @Type string
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:21149
     * @var string|null
     */
    private $networkTreatmentVideoFile = null;

    /**
     * @ElementName cdrTerminationCause
     * @Type string
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:21149
     * @var string|null
     */
    private $cdrTerminationCause = null;

    /**
     * @ElementName routeAdvance
     * @Type bool
     * @Group 1a79c7896cb04feac6eff47a5321756e:21149
     * @var bool|null
     */
    private $routeAdvance = null;

    /**
     * @ElementName internalReleaseCause
     * @Type \CWM\BroadWorksConnector\Ocip\Models\InternalReleaseCause
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:21149
     * @var \CWM\BroadWorksConnector\Ocip\Models\InternalReleaseCause|null
     */
    private $internalReleaseCause = null;

    /**
     * @ElementName accessSendReasonHeader
     * @Type bool
     * @Group 1a79c7896cb04feac6eff47a5321756e:21149
     * @var bool|null
     */
    private $accessSendReasonHeader = null;

    /**
     * @ElementName networkSendReasonHeader
     * @Type bool
     * @Group 1a79c7896cb04feac6eff47a5321756e:21149
     * @var bool|null
     */
    private $networkSendReasonHeader = null;

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }

    /**
     * Getter for chargeIndicator
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ChargeIndicator
     */
    public function getChargeIndicator()
    {
        return $this->chargeIndicator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->chargeIndicator;
    }

    /**
     * Setter for chargeIndicator
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ChargeIndicator $chargeIndicator
     * @return $this
     */
    public function setChargeIndicator(\CWM\BroadWorksConnector\Ocip\Models\ChargeIndicator $chargeIndicator)
    {
        $this->chargeIndicator = $chargeIndicator;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetChargeIndicator()
    {
        $this->chargeIndicator = null;
        return $this;
    }

    /**
     * Getter for accessSIPStatusCode
     *
     * @return int
     */
    public function getAccessSIPStatusCode()
    {
        return $this->accessSIPStatusCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessSIPStatusCode;
    }

    /**
     * Setter for accessSIPStatusCode
     *
     * @param int $accessSIPStatusCode
     * @return $this
     */
    public function setAccessSIPStatusCode($accessSIPStatusCode)
    {
        $this->accessSIPStatusCode = $accessSIPStatusCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessSIPStatusCode()
    {
        $this->accessSIPStatusCode = null;
        return $this;
    }

    /**
     * Getter for accessSIPStatusMessage
     *
     * @return string
     */
    public function getAccessSIPStatusMessage()
    {
        return $this->accessSIPStatusMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessSIPStatusMessage;
    }

    /**
     * Setter for accessSIPStatusMessage
     *
     * @param string $accessSIPStatusMessage
     * @return $this
     */
    public function setAccessSIPStatusMessage($accessSIPStatusMessage)
    {
        $this->accessSIPStatusMessage = $accessSIPStatusMessage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessSIPStatusMessage()
    {
        $this->accessSIPStatusMessage = null;
        return $this;
    }

    /**
     * Getter for networkSIPStatusCode
     *
     * @return int
     */
    public function getNetworkSIPStatusCode()
    {
        return $this->networkSIPStatusCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkSIPStatusCode;
    }

    /**
     * Setter for networkSIPStatusCode
     *
     * @param int $networkSIPStatusCode
     * @return $this
     */
    public function setNetworkSIPStatusCode($networkSIPStatusCode)
    {
        $this->networkSIPStatusCode = $networkSIPStatusCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkSIPStatusCode()
    {
        $this->networkSIPStatusCode = null;
        return $this;
    }

    /**
     * Getter for networkSIPStatusMessage
     *
     * @return string
     */
    public function getNetworkSIPStatusMessage()
    {
        return $this->networkSIPStatusMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkSIPStatusMessage;
    }

    /**
     * Setter for networkSIPStatusMessage
     *
     * @param string $networkSIPStatusMessage
     * @return $this
     */
    public function setNetworkSIPStatusMessage($networkSIPStatusMessage)
    {
        $this->networkSIPStatusMessage = $networkSIPStatusMessage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkSIPStatusMessage()
    {
        $this->networkSIPStatusMessage = null;
        return $this;
    }

    /**
     * Getter for q850CauseValue
     *
     * @return int
     */
    public function getQ850CauseValue()
    {
        return $this->q850CauseValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->q850CauseValue;
    }

    /**
     * Setter for q850CauseValue
     *
     * @param int $q850CauseValue
     * @return $this
     */
    public function setQ850CauseValue($q850CauseValue)
    {
        $this->q850CauseValue = $q850CauseValue;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetQ850CauseValue()
    {
        $this->q850CauseValue = null;
        return $this;
    }

    /**
     * Getter for q850Text
     *
     * @return string
     */
    public function getQ850Text()
    {
        return $this->q850Text instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->q850Text;
    }

    /**
     * Setter for q850Text
     *
     * @param string $q850Text
     * @return $this
     */
    public function setQ850Text($q850Text)
    {
        $this->q850Text = $q850Text;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetQ850Text()
    {
        $this->q850Text = null;
        return $this;
    }

    /**
     * Getter for accessTreatmentAudioFile
     *
     * @return string
     */
    public function getAccessTreatmentAudioFile()
    {
        return $this->accessTreatmentAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessTreatmentAudioFile;
    }

    /**
     * Setter for accessTreatmentAudioFile
     *
     * @param string $accessTreatmentAudioFile
     * @return $this
     */
    public function setAccessTreatmentAudioFile($accessTreatmentAudioFile)
    {
        $this->accessTreatmentAudioFile = $accessTreatmentAudioFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessTreatmentAudioFile()
    {
        $this->accessTreatmentAudioFile = null;
        return $this;
    }

    /**
     * Getter for accessTreatmentVideoFile
     *
     * @return string
     */
    public function getAccessTreatmentVideoFile()
    {
        return $this->accessTreatmentVideoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessTreatmentVideoFile;
    }

    /**
     * Setter for accessTreatmentVideoFile
     *
     * @param string $accessTreatmentVideoFile
     * @return $this
     */
    public function setAccessTreatmentVideoFile($accessTreatmentVideoFile)
    {
        $this->accessTreatmentVideoFile = $accessTreatmentVideoFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessTreatmentVideoFile()
    {
        $this->accessTreatmentVideoFile = null;
        return $this;
    }

    /**
     * Getter for networkTreatmentAudioFile
     *
     * @return string
     */
    public function getNetworkTreatmentAudioFile()
    {
        return $this->networkTreatmentAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkTreatmentAudioFile;
    }

    /**
     * Setter for networkTreatmentAudioFile
     *
     * @param string $networkTreatmentAudioFile
     * @return $this
     */
    public function setNetworkTreatmentAudioFile($networkTreatmentAudioFile)
    {
        $this->networkTreatmentAudioFile = $networkTreatmentAudioFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkTreatmentAudioFile()
    {
        $this->networkTreatmentAudioFile = null;
        return $this;
    }

    /**
     * Getter for networkTreatmentVideoFile
     *
     * @return string
     */
    public function getNetworkTreatmentVideoFile()
    {
        return $this->networkTreatmentVideoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkTreatmentVideoFile;
    }

    /**
     * Setter for networkTreatmentVideoFile
     *
     * @param string $networkTreatmentVideoFile
     * @return $this
     */
    public function setNetworkTreatmentVideoFile($networkTreatmentVideoFile)
    {
        $this->networkTreatmentVideoFile = $networkTreatmentVideoFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkTreatmentVideoFile()
    {
        $this->networkTreatmentVideoFile = null;
        return $this;
    }

    /**
     * Getter for cdrTerminationCause
     *
     * @return string
     */
    public function getCdrTerminationCause()
    {
        return $this->cdrTerminationCause instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->cdrTerminationCause;
    }

    /**
     * Setter for cdrTerminationCause
     *
     * @param string $cdrTerminationCause
     * @return $this
     */
    public function setCdrTerminationCause($cdrTerminationCause)
    {
        $this->cdrTerminationCause = $cdrTerminationCause;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCdrTerminationCause()
    {
        $this->cdrTerminationCause = null;
        return $this;
    }

    /**
     * Getter for routeAdvance
     *
     * @return bool
     */
    public function getRouteAdvance()
    {
        return $this->routeAdvance instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routeAdvance;
    }

    /**
     * Setter for routeAdvance
     *
     * @param bool $routeAdvance
     * @return $this
     */
    public function setRouteAdvance($routeAdvance)
    {
        $this->routeAdvance = $routeAdvance;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRouteAdvance()
    {
        $this->routeAdvance = null;
        return $this;
    }

    /**
     * Getter for internalReleaseCause
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\InternalReleaseCause
     */
    public function getInternalReleaseCause()
    {
        return $this->internalReleaseCause instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->internalReleaseCause;
    }

    /**
     * Setter for internalReleaseCause
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\InternalReleaseCause $internalReleaseCause
     * @return $this
     */
    public function setInternalReleaseCause(\CWM\BroadWorksConnector\Ocip\Models\InternalReleaseCause $internalReleaseCause)
    {
        $this->internalReleaseCause = $internalReleaseCause;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInternalReleaseCause()
    {
        $this->internalReleaseCause = null;
        return $this;
    }

    /**
     * Getter for accessSendReasonHeader
     *
     * @return bool
     */
    public function getAccessSendReasonHeader()
    {
        return $this->accessSendReasonHeader instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessSendReasonHeader;
    }

    /**
     * Setter for accessSendReasonHeader
     *
     * @param bool $accessSendReasonHeader
     * @return $this
     */
    public function setAccessSendReasonHeader($accessSendReasonHeader)
    {
        $this->accessSendReasonHeader = $accessSendReasonHeader;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessSendReasonHeader()
    {
        $this->accessSendReasonHeader = null;
        return $this;
    }

    /**
     * Getter for networkSendReasonHeader
     *
     * @return bool
     */
    public function getNetworkSendReasonHeader()
    {
        return $this->networkSendReasonHeader instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkSendReasonHeader;
    }

    /**
     * Setter for networkSendReasonHeader
     *
     * @param bool $networkSendReasonHeader
     * @return $this
     */
    public function setNetworkSendReasonHeader($networkSendReasonHeader)
    {
        $this->networkSendReasonHeader = $networkSendReasonHeader;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkSendReasonHeader()
    {
        $this->networkSendReasonHeader = null;
        return $this;
    }


}

