<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableTreatmentGetResponse16
 *
 * Response to the SystemConfigurableTreatmentGetRequest16.
 *         The response contains the treatment configurable information.
 */
class SystemConfigurableTreatmentGetResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName chargeIndicator
     * @var string|null
     */
    private $chargeIndicator = null;

    /**
     * @ElementName accessSIPStatusCode
     * @var int|null
     */
    private $accessSIPStatusCode = null;

    /**
     * @ElementName accessSIPStatusMessage
     * @var string|null
     */
    private $accessSIPStatusMessage = null;

    /**
     * @ElementName networkSIPStatusCode
     * @var int|null
     */
    private $networkSIPStatusCode = null;

    /**
     * @ElementName networkSIPStatusMessage
     * @var string|null
     */
    private $networkSIPStatusMessage = null;

    /**
     * @ElementName q850CauseValue
     * @var int|null
     */
    private $q850CauseValue = null;

    /**
     * @ElementName q850Text
     * @var string|null
     */
    private $q850Text = null;

    /**
     * @ElementName accessTreatmentAudioFile
     * @var string|null
     */
    private $accessTreatmentAudioFile = null;

    /**
     * @ElementName accessTreatmentVideoFile
     * @var string|null
     */
    private $accessTreatmentVideoFile = null;

    /**
     * @ElementName networkTreatmentAudioFile
     * @var string|null
     */
    private $networkTreatmentAudioFile = null;

    /**
     * @ElementName networkTreatmentVideoFile
     * @var string|null
     */
    private $networkTreatmentVideoFile = null;

    /**
     * @ElementName cdrTerminationCause
     * @var string|null
     */
    private $cdrTerminationCause = null;

    /**
     * @ElementName routeAdvance
     * @var bool|null
     */
    private $routeAdvance = null;

    /**
     * @ElementName internalReleaseCause
     * @var string|null
     */
    private $internalReleaseCause = null;

    /**
     * @ElementName accessSendReasonHeader
     * @var bool|null
     */
    private $accessSendReasonHeader = null;

    /**
     * @ElementName networkSendReasonHeader
     * @var bool|null
     */
    private $networkSendReasonHeader = null;

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Getter for chargeIndicator
     *
     * @ElementName chargeIndicator
     * @return string|null
     */
    public function getChargeIndicator()
    {
        return $this->chargeIndicator;
    }

    /**
     * Setter for chargeIndicator
     *
     * @ElementName chargeIndicator
     * @param string|null $chargeIndicator
     * @return $this
     */
    public function setChargeIndicator($chargeIndicator)
    {
        $this->chargeIndicator = $chargeIndicator;
        return $this;
    }

    /**
     * Getter for accessSIPStatusCode
     *
     * @ElementName accessSIPStatusCode
     * @return int|null
     */
    public function getAccessSIPStatusCode()
    {
        return $this->accessSIPStatusCode;
    }

    /**
     * Setter for accessSIPStatusCode
     *
     * @ElementName accessSIPStatusCode
     * @param int|null $accessSIPStatusCode
     * @return $this
     */
    public function setAccessSIPStatusCode($accessSIPStatusCode)
    {
        $this->accessSIPStatusCode = $accessSIPStatusCode;
        return $this;
    }

    /**
     * Getter for accessSIPStatusMessage
     *
     * @ElementName accessSIPStatusMessage
     * @return string|null
     */
    public function getAccessSIPStatusMessage()
    {
        return $this->accessSIPStatusMessage;
    }

    /**
     * Setter for accessSIPStatusMessage
     *
     * @ElementName accessSIPStatusMessage
     * @param string|null $accessSIPStatusMessage
     * @return $this
     */
    public function setAccessSIPStatusMessage($accessSIPStatusMessage)
    {
        $this->accessSIPStatusMessage = $accessSIPStatusMessage;
        return $this;
    }

    /**
     * Getter for networkSIPStatusCode
     *
     * @ElementName networkSIPStatusCode
     * @return int|null
     */
    public function getNetworkSIPStatusCode()
    {
        return $this->networkSIPStatusCode;
    }

    /**
     * Setter for networkSIPStatusCode
     *
     * @ElementName networkSIPStatusCode
     * @param int|null $networkSIPStatusCode
     * @return $this
     */
    public function setNetworkSIPStatusCode($networkSIPStatusCode)
    {
        $this->networkSIPStatusCode = $networkSIPStatusCode;
        return $this;
    }

    /**
     * Getter for networkSIPStatusMessage
     *
     * @ElementName networkSIPStatusMessage
     * @return string|null
     */
    public function getNetworkSIPStatusMessage()
    {
        return $this->networkSIPStatusMessage;
    }

    /**
     * Setter for networkSIPStatusMessage
     *
     * @ElementName networkSIPStatusMessage
     * @param string|null $networkSIPStatusMessage
     * @return $this
     */
    public function setNetworkSIPStatusMessage($networkSIPStatusMessage)
    {
        $this->networkSIPStatusMessage = $networkSIPStatusMessage;
        return $this;
    }

    /**
     * Getter for q850CauseValue
     *
     * @ElementName q850CauseValue
     * @return int|null
     */
    public function getQ850CauseValue()
    {
        return $this->q850CauseValue;
    }

    /**
     * Setter for q850CauseValue
     *
     * @ElementName q850CauseValue
     * @param int|null $q850CauseValue
     * @return $this
     */
    public function setQ850CauseValue($q850CauseValue)
    {
        $this->q850CauseValue = $q850CauseValue;
        return $this;
    }

    /**
     * Getter for q850Text
     *
     * @ElementName q850Text
     * @return string|null
     */
    public function getQ850Text()
    {
        return $this->q850Text;
    }

    /**
     * Setter for q850Text
     *
     * @ElementName q850Text
     * @param string|null $q850Text
     * @return $this
     */
    public function setQ850Text($q850Text)
    {
        $this->q850Text = $q850Text;
        return $this;
    }

    /**
     * Getter for accessTreatmentAudioFile
     *
     * @ElementName accessTreatmentAudioFile
     * @return string|null
     */
    public function getAccessTreatmentAudioFile()
    {
        return $this->accessTreatmentAudioFile;
    }

    /**
     * Setter for accessTreatmentAudioFile
     *
     * @ElementName accessTreatmentAudioFile
     * @param string|null $accessTreatmentAudioFile
     * @return $this
     */
    public function setAccessTreatmentAudioFile($accessTreatmentAudioFile)
    {
        $this->accessTreatmentAudioFile = $accessTreatmentAudioFile;
        return $this;
    }

    /**
     * Getter for accessTreatmentVideoFile
     *
     * @ElementName accessTreatmentVideoFile
     * @return string|null
     */
    public function getAccessTreatmentVideoFile()
    {
        return $this->accessTreatmentVideoFile;
    }

    /**
     * Setter for accessTreatmentVideoFile
     *
     * @ElementName accessTreatmentVideoFile
     * @param string|null $accessTreatmentVideoFile
     * @return $this
     */
    public function setAccessTreatmentVideoFile($accessTreatmentVideoFile)
    {
        $this->accessTreatmentVideoFile = $accessTreatmentVideoFile;
        return $this;
    }

    /**
     * Getter for networkTreatmentAudioFile
     *
     * @ElementName networkTreatmentAudioFile
     * @return string|null
     */
    public function getNetworkTreatmentAudioFile()
    {
        return $this->networkTreatmentAudioFile;
    }

    /**
     * Setter for networkTreatmentAudioFile
     *
     * @ElementName networkTreatmentAudioFile
     * @param string|null $networkTreatmentAudioFile
     * @return $this
     */
    public function setNetworkTreatmentAudioFile($networkTreatmentAudioFile)
    {
        $this->networkTreatmentAudioFile = $networkTreatmentAudioFile;
        return $this;
    }

    /**
     * Getter for networkTreatmentVideoFile
     *
     * @ElementName networkTreatmentVideoFile
     * @return string|null
     */
    public function getNetworkTreatmentVideoFile()
    {
        return $this->networkTreatmentVideoFile;
    }

    /**
     * Setter for networkTreatmentVideoFile
     *
     * @ElementName networkTreatmentVideoFile
     * @param string|null $networkTreatmentVideoFile
     * @return $this
     */
    public function setNetworkTreatmentVideoFile($networkTreatmentVideoFile)
    {
        $this->networkTreatmentVideoFile = $networkTreatmentVideoFile;
        return $this;
    }

    /**
     * Getter for cdrTerminationCause
     *
     * @ElementName cdrTerminationCause
     * @return string|null
     */
    public function getCdrTerminationCause()
    {
        return $this->cdrTerminationCause;
    }

    /**
     * Setter for cdrTerminationCause
     *
     * @ElementName cdrTerminationCause
     * @param string|null $cdrTerminationCause
     * @return $this
     */
    public function setCdrTerminationCause($cdrTerminationCause)
    {
        $this->cdrTerminationCause = $cdrTerminationCause;
        return $this;
    }

    /**
     * Getter for routeAdvance
     *
     * @ElementName routeAdvance
     * @return bool|null
     */
    public function getRouteAdvance()
    {
        return $this->routeAdvance;
    }

    /**
     * Setter for routeAdvance
     *
     * @ElementName routeAdvance
     * @param bool|null $routeAdvance
     * @return $this
     */
    public function setRouteAdvance($routeAdvance)
    {
        $this->routeAdvance = $routeAdvance;
        return $this;
    }

    /**
     * Getter for internalReleaseCause
     *
     * @ElementName internalReleaseCause
     * @return string|null
     */
    public function getInternalReleaseCause()
    {
        return $this->internalReleaseCause;
    }

    /**
     * Setter for internalReleaseCause
     *
     * @ElementName internalReleaseCause
     * @param string|null $internalReleaseCause
     * @return $this
     */
    public function setInternalReleaseCause($internalReleaseCause)
    {
        $this->internalReleaseCause = $internalReleaseCause;
        return $this;
    }

    /**
     * Getter for accessSendReasonHeader
     *
     * @ElementName accessSendReasonHeader
     * @return bool|null
     */
    public function getAccessSendReasonHeader()
    {
        return $this->accessSendReasonHeader;
    }

    /**
     * Setter for accessSendReasonHeader
     *
     * @ElementName accessSendReasonHeader
     * @param bool|null $accessSendReasonHeader
     * @return $this
     */
    public function setAccessSendReasonHeader($accessSendReasonHeader)
    {
        $this->accessSendReasonHeader = $accessSendReasonHeader;
        return $this;
    }

    /**
     * Getter for networkSendReasonHeader
     *
     * @ElementName networkSendReasonHeader
     * @return bool|null
     */
    public function getNetworkSendReasonHeader()
    {
        return $this->networkSendReasonHeader;
    }

    /**
     * Setter for networkSendReasonHeader
     *
     * @ElementName networkSendReasonHeader
     * @param bool|null $networkSendReasonHeader
     * @return $this
     */
    public function setNetworkSendReasonHeader($networkSendReasonHeader)
    {
        $this->networkSendReasonHeader = $networkSendReasonHeader;
        return $this;
    }


}

