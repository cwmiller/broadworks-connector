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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:6822","type":"sequence"}]
 */
class SystemConfigurableTreatmentModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName treatmentId
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6822
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $treatmentId = null;

    /**
     * @ElementName chargeIndicator
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ChargeIndicator
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6822
     * @var \CWM\BroadWorksConnector\Ocip\Models\ChargeIndicator|null
     */
    private $chargeIndicator = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6822
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

    /**
     * @ElementName accessSIPStatusCode
     * @Type int
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6822
     * @MinInclusive 400
     * @MaxInclusive 699
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $accessSIPStatusCode = null;

    /**
     * @ElementName accessSIPStatusMessage
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6822
     * @MinLength 1
     * @MaxLength 50
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $accessSIPStatusMessage = null;

    /**
     * @ElementName networkSIPStatusCode
     * @Type int
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6822
     * @MinInclusive 400
     * @MaxInclusive 699
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $networkSIPStatusCode = null;

    /**
     * @ElementName networkSIPStatusMessage
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6822
     * @MinLength 1
     * @MaxLength 50
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $networkSIPStatusMessage = null;

    /**
     * @ElementName q850CauseValue
     * @Type int
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6822
     * @MinInclusive 1
     * @MaxInclusive 256
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $q850CauseValue = null;

    /**
     * @ElementName q850Text
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6822
     * @MinLength 1
     * @MaxLength 50
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $q850Text = null;

    /**
     * @ElementName accessTreatmentAudioFile
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6822
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $accessTreatmentAudioFile = null;

    /**
     * @ElementName accessTreatmentVideoFile
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6822
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $accessTreatmentVideoFile = null;

    /**
     * @ElementName networkTreatmentAudioFile
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6822
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $networkTreatmentAudioFile = null;

    /**
     * @ElementName networkTreatmentVideoFile
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6822
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $networkTreatmentVideoFile = null;

    /**
     * @ElementName cdrTerminationCause
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6822
     * @MinLength 1
     * @MaxLength 3
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $cdrTerminationCause = null;

    /**
     * @ElementName routeAdvance
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6822
     * @var bool|null
     */
    private $routeAdvance = null;

    /**
     * @ElementName internalReleaseCause
     * @Type \CWM\BroadWorksConnector\Ocip\Models\InternalReleaseCause16
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6822
     * @var \CWM\BroadWorksConnector\Ocip\Models\InternalReleaseCause16|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $internalReleaseCause = null;

    /**
     * @ElementName accessSendReasonHeader
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6822
     * @var bool|null
     */
    private $accessSendReasonHeader = null;

    /**
     * @ElementName networkSendReasonHeader
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6822
     * @var bool|null
     */
    private $networkSendReasonHeader = null;

    /**
     * Getter for treatmentId
     *
     * @return string
     */
    public function getTreatmentId()
    {
        return $this->treatmentId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treatmentId;
    }

    /**
     * Setter for treatmentId
     *
     * @param string $treatmentId
     * @return $this
     */
    public function setTreatmentId($treatmentId)
    {
        $this->treatmentId = $treatmentId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTreatmentId()
    {
        $this->treatmentId = null;
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
     * Getter for description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description = null)
    {
        if ($description === null) {
            $this->description = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->description = $description;
        }
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
     * Getter for accessSIPStatusCode
     *
     * @return int|null
     */
    public function getAccessSIPStatusCode()
    {
        return $this->accessSIPStatusCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessSIPStatusCode;
    }

    /**
     * Setter for accessSIPStatusCode
     *
     * @param int|null $accessSIPStatusCode
     * @return $this
     */
    public function setAccessSIPStatusCode($accessSIPStatusCode = null)
    {
        if ($accessSIPStatusCode === null) {
            $this->accessSIPStatusCode = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->accessSIPStatusCode = $accessSIPStatusCode;
        }
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
     * @return string|null
     */
    public function getAccessSIPStatusMessage()
    {
        return $this->accessSIPStatusMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessSIPStatusMessage;
    }

    /**
     * Setter for accessSIPStatusMessage
     *
     * @param string|null $accessSIPStatusMessage
     * @return $this
     */
    public function setAccessSIPStatusMessage($accessSIPStatusMessage = null)
    {
        if ($accessSIPStatusMessage === null) {
            $this->accessSIPStatusMessage = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->accessSIPStatusMessage = $accessSIPStatusMessage;
        }
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
     * @return int|null
     */
    public function getNetworkSIPStatusCode()
    {
        return $this->networkSIPStatusCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkSIPStatusCode;
    }

    /**
     * Setter for networkSIPStatusCode
     *
     * @param int|null $networkSIPStatusCode
     * @return $this
     */
    public function setNetworkSIPStatusCode($networkSIPStatusCode = null)
    {
        if ($networkSIPStatusCode === null) {
            $this->networkSIPStatusCode = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->networkSIPStatusCode = $networkSIPStatusCode;
        }
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
     * @return string|null
     */
    public function getNetworkSIPStatusMessage()
    {
        return $this->networkSIPStatusMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkSIPStatusMessage;
    }

    /**
     * Setter for networkSIPStatusMessage
     *
     * @param string|null $networkSIPStatusMessage
     * @return $this
     */
    public function setNetworkSIPStatusMessage($networkSIPStatusMessage = null)
    {
        if ($networkSIPStatusMessage === null) {
            $this->networkSIPStatusMessage = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->networkSIPStatusMessage = $networkSIPStatusMessage;
        }
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
     * @return int|null
     */
    public function getQ850CauseValue()
    {
        return $this->q850CauseValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->q850CauseValue;
    }

    /**
     * Setter for q850CauseValue
     *
     * @param int|null $q850CauseValue
     * @return $this
     */
    public function setQ850CauseValue($q850CauseValue = null)
    {
        if ($q850CauseValue === null) {
            $this->q850CauseValue = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->q850CauseValue = $q850CauseValue;
        }
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
     * @return string|null
     */
    public function getQ850Text()
    {
        return $this->q850Text instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->q850Text;
    }

    /**
     * Setter for q850Text
     *
     * @param string|null $q850Text
     * @return $this
     */
    public function setQ850Text($q850Text = null)
    {
        if ($q850Text === null) {
            $this->q850Text = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->q850Text = $q850Text;
        }
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
     * @return string|null
     */
    public function getAccessTreatmentAudioFile()
    {
        return $this->accessTreatmentAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessTreatmentAudioFile;
    }

    /**
     * Setter for accessTreatmentAudioFile
     *
     * @param string|null $accessTreatmentAudioFile
     * @return $this
     */
    public function setAccessTreatmentAudioFile($accessTreatmentAudioFile = null)
    {
        if ($accessTreatmentAudioFile === null) {
            $this->accessTreatmentAudioFile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->accessTreatmentAudioFile = $accessTreatmentAudioFile;
        }
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
     * @return string|null
     */
    public function getAccessTreatmentVideoFile()
    {
        return $this->accessTreatmentVideoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessTreatmentVideoFile;
    }

    /**
     * Setter for accessTreatmentVideoFile
     *
     * @param string|null $accessTreatmentVideoFile
     * @return $this
     */
    public function setAccessTreatmentVideoFile($accessTreatmentVideoFile = null)
    {
        if ($accessTreatmentVideoFile === null) {
            $this->accessTreatmentVideoFile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->accessTreatmentVideoFile = $accessTreatmentVideoFile;
        }
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
     * @return string|null
     */
    public function getNetworkTreatmentAudioFile()
    {
        return $this->networkTreatmentAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkTreatmentAudioFile;
    }

    /**
     * Setter for networkTreatmentAudioFile
     *
     * @param string|null $networkTreatmentAudioFile
     * @return $this
     */
    public function setNetworkTreatmentAudioFile($networkTreatmentAudioFile = null)
    {
        if ($networkTreatmentAudioFile === null) {
            $this->networkTreatmentAudioFile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->networkTreatmentAudioFile = $networkTreatmentAudioFile;
        }
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
     * @return string|null
     */
    public function getNetworkTreatmentVideoFile()
    {
        return $this->networkTreatmentVideoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkTreatmentVideoFile;
    }

    /**
     * Setter for networkTreatmentVideoFile
     *
     * @param string|null $networkTreatmentVideoFile
     * @return $this
     */
    public function setNetworkTreatmentVideoFile($networkTreatmentVideoFile = null)
    {
        if ($networkTreatmentVideoFile === null) {
            $this->networkTreatmentVideoFile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->networkTreatmentVideoFile = $networkTreatmentVideoFile;
        }
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
     * @return string|null
     */
    public function getCdrTerminationCause()
    {
        return $this->cdrTerminationCause instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->cdrTerminationCause;
    }

    /**
     * Setter for cdrTerminationCause
     *
     * @param string|null $cdrTerminationCause
     * @return $this
     */
    public function setCdrTerminationCause($cdrTerminationCause = null)
    {
        if ($cdrTerminationCause === null) {
            $this->cdrTerminationCause = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->cdrTerminationCause = $cdrTerminationCause;
        }
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\InternalReleaseCause16|null
     */
    public function getInternalReleaseCause()
    {
        return $this->internalReleaseCause instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->internalReleaseCause;
    }

    /**
     * Setter for internalReleaseCause
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\InternalReleaseCause16|null $internalReleaseCause
     * @return $this
     */
    public function setInternalReleaseCause(\CWM\BroadWorksConnector\Ocip\Models\InternalReleaseCause16 $internalReleaseCause = null)
    {
        if ($internalReleaseCause === null) {
            $this->internalReleaseCause = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->internalReleaseCause = $internalReleaseCause;
        }
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

