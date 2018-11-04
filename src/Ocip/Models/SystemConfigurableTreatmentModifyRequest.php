<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableTreatmentModifyRequest
 *
 * Modify the fields for a configurable treatment.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemConfigurableTreatmentModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName treatmentId
     * @var string|null
     */
    private $treatmentId = null;

    /**
     * @ElementName chargeIndicator
     * @var string|null
     */
    private $chargeIndicator = null;

    /**
     * @ElementName description
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

    /**
     * @ElementName accessSIPStatusCode
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $accessSIPStatusCode = null;

    /**
     * @ElementName accessSIPStatusMessage
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $accessSIPStatusMessage = null;

    /**
     * @ElementName networkSIPStatusCode
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $networkSIPStatusCode = null;

    /**
     * @ElementName networkSIPStatusMessage
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $networkSIPStatusMessage = null;

    /**
     * @ElementName q850CauseValue
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $q850CauseValue = null;

    /**
     * @ElementName q850Text
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $q850Text = null;

    /**
     * @ElementName accessTreatmentAudioFile
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $accessTreatmentAudioFile = null;

    /**
     * @ElementName accessTreatmentVideoFile
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $accessTreatmentVideoFile = null;

    /**
     * @ElementName networkTreatmentAudioFile
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $networkTreatmentAudioFile = null;

    /**
     * @ElementName networkTreatmentVideoFile
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $networkTreatmentVideoFile = null;

    /**
     * @ElementName cdrTerminationCause
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $cdrTerminationCause = null;

    /**
     * @ElementName routeAdvance
     * @var bool|null
     */
    private $routeAdvance = null;

    /**
     * @ElementName internalReleaseCause
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * Getter for treatmentId
     *
     * @ElementName treatmentId
     * @return string|null
     */
    public function getTreatmentId()
    {
        return $this->treatmentId;
    }

    /**
     * Setter for treatmentId
     *
     * @ElementName treatmentId
     * @param string|null $treatmentId
     * @return $this
     */
    public function setTreatmentId($treatmentId)
    {
        $this->treatmentId = $treatmentId;
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
     * Getter for description
     *
     * @ElementName description
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Getter for accessSIPStatusCode
     *
     * @ElementName accessSIPStatusCode
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAccessSIPStatusCode()
    {
        return $this->accessSIPStatusCode;
    }

    /**
     * Setter for accessSIPStatusCode
     *
     * @ElementName accessSIPStatusCode
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $accessSIPStatusCode
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAccessSIPStatusMessage()
    {
        return $this->accessSIPStatusMessage;
    }

    /**
     * Setter for accessSIPStatusMessage
     *
     * @ElementName accessSIPStatusMessage
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $accessSIPStatusMessage
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
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getNetworkSIPStatusCode()
    {
        return $this->networkSIPStatusCode;
    }

    /**
     * Setter for networkSIPStatusCode
     *
     * @ElementName networkSIPStatusCode
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $networkSIPStatusCode
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getNetworkSIPStatusMessage()
    {
        return $this->networkSIPStatusMessage;
    }

    /**
     * Setter for networkSIPStatusMessage
     *
     * @ElementName networkSIPStatusMessage
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $networkSIPStatusMessage
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
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getQ850CauseValue()
    {
        return $this->q850CauseValue;
    }

    /**
     * Setter for q850CauseValue
     *
     * @ElementName q850CauseValue
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $q850CauseValue
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getQ850Text()
    {
        return $this->q850Text;
    }

    /**
     * Setter for q850Text
     *
     * @ElementName q850Text
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $q850Text
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAccessTreatmentAudioFile()
    {
        return $this->accessTreatmentAudioFile;
    }

    /**
     * Setter for accessTreatmentAudioFile
     *
     * @ElementName accessTreatmentAudioFile
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $accessTreatmentAudioFile
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAccessTreatmentVideoFile()
    {
        return $this->accessTreatmentVideoFile;
    }

    /**
     * Setter for accessTreatmentVideoFile
     *
     * @ElementName accessTreatmentVideoFile
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $accessTreatmentVideoFile
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getNetworkTreatmentAudioFile()
    {
        return $this->networkTreatmentAudioFile;
    }

    /**
     * Setter for networkTreatmentAudioFile
     *
     * @ElementName networkTreatmentAudioFile
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $networkTreatmentAudioFile
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getNetworkTreatmentVideoFile()
    {
        return $this->networkTreatmentVideoFile;
    }

    /**
     * Setter for networkTreatmentVideoFile
     *
     * @ElementName networkTreatmentVideoFile
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $networkTreatmentVideoFile
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCdrTerminationCause()
    {
        return $this->cdrTerminationCause;
    }

    /**
     * Setter for cdrTerminationCause
     *
     * @ElementName cdrTerminationCause
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $cdrTerminationCause
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getInternalReleaseCause()
    {
        return $this->internalReleaseCause;
    }

    /**
     * Setter for internalReleaseCause
     *
     * @ElementName internalReleaseCause
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $internalReleaseCause
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

