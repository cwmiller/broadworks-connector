<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringProfileModifyRequest
 *
 * Modify an existing Communication Barring Profile.
 *         When the originatingDefaultAction is not Treatment, originatingDefaultTreatmentId
 *         will be automatically cleared. Also when the action of originatingRule is not Treatment,
 *         treatmentId will be automatically cleared for the rule.
 *         The priorities for IncomingRules are requantized to consecutive integers as part of the modify.
 *         The response is either a SuccessResponse or an ErrorResponse.
 * 	      The following elements are only used in AS data mode:
 *            callMeNowDefaultAction
 *            callMeNowDefaultCallTimeout
 *            callMeNowRule
 *            applyToAttendedCallTransfers
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:6162","type":"sequence"}]
 */
class SystemCommunicationBarringProfileModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6162
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName newName
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6162
     * @var string|null
     */
    private $newName = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6162
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

    /**
     * @ElementName originatingDefaultAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6162
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction|null
     */
    private $originatingDefaultAction = null;

    /**
     * @ElementName originatingDefaultTreatmentId
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6162
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $originatingDefaultTreatmentId = null;

    /**
     * @ElementName originatingDefaultTransferNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6162
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $originatingDefaultTransferNumber = null;

    /**
     * @ElementName originatingDefaultCallTimeout
     * @Type int
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6162
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $originatingDefaultCallTimeout = null;

    /**
     * @ElementName originatingRule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringOriginatingRuleList
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6162
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringOriginatingRuleList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $originatingRule = null;

    /**
     * @ElementName redirectingDefaultAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6162
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction|null
     */
    private $redirectingDefaultAction = null;

    /**
     * @ElementName redirectingDefaultCallTimeout
     * @Type int
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6162
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $redirectingDefaultCallTimeout = null;

    /**
     * @ElementName redirectingRule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringRedirectingRuleList
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6162
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringRedirectingRuleList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $redirectingRule = null;

    /**
     * @ElementName incomingDefaultAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingAction
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6162
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingAction|null
     */
    private $incomingDefaultAction = null;

    /**
     * @ElementName incomingDefaultCallTimeout
     * @Type int
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6162
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $incomingDefaultCallTimeout = null;

    /**
     * @ElementName incomingRule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringIncomingRuleList19sp1
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6162
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringIncomingRuleList19sp1|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $incomingRule = null;

    /**
     * @ElementName callMeNowDefaultAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringCallMeNowAction
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6162
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringCallMeNowAction|null
     */
    private $callMeNowDefaultAction = null;

    /**
     * @ElementName callMeNowDefaultCallTimeout
     * @Type int
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6162
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callMeNowDefaultCallTimeout = null;

    /**
     * @ElementName callMeNowRule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringCallMeNowRuleList
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6162
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringCallMeNowRuleList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callMeNowRule = null;

    /**
     * @ElementName applyToAttendedCallTransfers
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6162
     * @var bool|null
     */
    private $applyToAttendedCallTransfers = null;

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for newName
     *
     * @return string
     */
    public function getNewName()
    {
        return $this->newName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newName;
    }

    /**
     * Setter for newName
     *
     * @param string $newName
     * @return $this
     */
    public function setNewName($newName)
    {
        $this->newName = $newName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewName()
    {
        $this->newName = null;
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
     * Getter for originatingDefaultAction
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction
     */
    public function getOriginatingDefaultAction()
    {
        return $this->originatingDefaultAction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->originatingDefaultAction;
    }

    /**
     * Setter for originatingDefaultAction
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction $originatingDefaultAction
     * @return $this
     */
    public function setOriginatingDefaultAction(\CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction $originatingDefaultAction)
    {
        $this->originatingDefaultAction = $originatingDefaultAction;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOriginatingDefaultAction()
    {
        $this->originatingDefaultAction = null;
        return $this;
    }

    /**
     * Getter for originatingDefaultTreatmentId
     *
     * @return string|null
     */
    public function getOriginatingDefaultTreatmentId()
    {
        return $this->originatingDefaultTreatmentId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->originatingDefaultTreatmentId;
    }

    /**
     * Setter for originatingDefaultTreatmentId
     *
     * @param string|null $originatingDefaultTreatmentId
     * @return $this
     */
    public function setOriginatingDefaultTreatmentId($originatingDefaultTreatmentId = null)
    {
        if ($originatingDefaultTreatmentId === null) {
            $this->originatingDefaultTreatmentId = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->originatingDefaultTreatmentId = $originatingDefaultTreatmentId;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOriginatingDefaultTreatmentId()
    {
        $this->originatingDefaultTreatmentId = null;
        return $this;
    }

    /**
     * Getter for originatingDefaultTransferNumber
     *
     * @return string|null
     */
    public function getOriginatingDefaultTransferNumber()
    {
        return $this->originatingDefaultTransferNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->originatingDefaultTransferNumber;
    }

    /**
     * Setter for originatingDefaultTransferNumber
     *
     * @param string|null $originatingDefaultTransferNumber
     * @return $this
     */
    public function setOriginatingDefaultTransferNumber($originatingDefaultTransferNumber = null)
    {
        if ($originatingDefaultTransferNumber === null) {
            $this->originatingDefaultTransferNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->originatingDefaultTransferNumber = $originatingDefaultTransferNumber;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOriginatingDefaultTransferNumber()
    {
        $this->originatingDefaultTransferNumber = null;
        return $this;
    }

    /**
     * Getter for originatingDefaultCallTimeout
     *
     * @return int|null
     */
    public function getOriginatingDefaultCallTimeout()
    {
        return $this->originatingDefaultCallTimeout instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->originatingDefaultCallTimeout;
    }

    /**
     * Setter for originatingDefaultCallTimeout
     *
     * @param int|null $originatingDefaultCallTimeout
     * @return $this
     */
    public function setOriginatingDefaultCallTimeout($originatingDefaultCallTimeout = null)
    {
        if ($originatingDefaultCallTimeout === null) {
            $this->originatingDefaultCallTimeout = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->originatingDefaultCallTimeout = $originatingDefaultCallTimeout;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOriginatingDefaultCallTimeout()
    {
        $this->originatingDefaultCallTimeout = null;
        return $this;
    }

    /**
     * Getter for originatingRule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringOriginatingRuleList|null
     */
    public function getOriginatingRule()
    {
        return $this->originatingRule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->originatingRule;
    }

    /**
     * Setter for originatingRule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringOriginatingRuleList|null $originatingRule
     * @return $this
     */
    public function setOriginatingRule(\CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringOriginatingRuleList $originatingRule = null)
    {
        if ($originatingRule === null) {
            $this->originatingRule = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->originatingRule = $originatingRule;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOriginatingRule()
    {
        $this->originatingRule = null;
        return $this;
    }

    /**
     * Getter for redirectingDefaultAction
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction
     */
    public function getRedirectingDefaultAction()
    {
        return $this->redirectingDefaultAction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->redirectingDefaultAction;
    }

    /**
     * Setter for redirectingDefaultAction
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction $redirectingDefaultAction
     * @return $this
     */
    public function setRedirectingDefaultAction(\CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction $redirectingDefaultAction)
    {
        $this->redirectingDefaultAction = $redirectingDefaultAction;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRedirectingDefaultAction()
    {
        $this->redirectingDefaultAction = null;
        return $this;
    }

    /**
     * Getter for redirectingDefaultCallTimeout
     *
     * @return int|null
     */
    public function getRedirectingDefaultCallTimeout()
    {
        return $this->redirectingDefaultCallTimeout instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->redirectingDefaultCallTimeout;
    }

    /**
     * Setter for redirectingDefaultCallTimeout
     *
     * @param int|null $redirectingDefaultCallTimeout
     * @return $this
     */
    public function setRedirectingDefaultCallTimeout($redirectingDefaultCallTimeout = null)
    {
        if ($redirectingDefaultCallTimeout === null) {
            $this->redirectingDefaultCallTimeout = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->redirectingDefaultCallTimeout = $redirectingDefaultCallTimeout;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRedirectingDefaultCallTimeout()
    {
        $this->redirectingDefaultCallTimeout = null;
        return $this;
    }

    /**
     * Getter for redirectingRule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringRedirectingRuleList|null
     */
    public function getRedirectingRule()
    {
        return $this->redirectingRule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->redirectingRule;
    }

    /**
     * Setter for redirectingRule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringRedirectingRuleList|null $redirectingRule
     * @return $this
     */
    public function setRedirectingRule(\CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringRedirectingRuleList $redirectingRule = null)
    {
        if ($redirectingRule === null) {
            $this->redirectingRule = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->redirectingRule = $redirectingRule;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRedirectingRule()
    {
        $this->redirectingRule = null;
        return $this;
    }

    /**
     * Getter for incomingDefaultAction
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingAction
     */
    public function getIncomingDefaultAction()
    {
        return $this->incomingDefaultAction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->incomingDefaultAction;
    }

    /**
     * Setter for incomingDefaultAction
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingAction $incomingDefaultAction
     * @return $this
     */
    public function setIncomingDefaultAction(\CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingAction $incomingDefaultAction)
    {
        $this->incomingDefaultAction = $incomingDefaultAction;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncomingDefaultAction()
    {
        $this->incomingDefaultAction = null;
        return $this;
    }

    /**
     * Getter for incomingDefaultCallTimeout
     *
     * @return int|null
     */
    public function getIncomingDefaultCallTimeout()
    {
        return $this->incomingDefaultCallTimeout instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->incomingDefaultCallTimeout;
    }

    /**
     * Setter for incomingDefaultCallTimeout
     *
     * @param int|null $incomingDefaultCallTimeout
     * @return $this
     */
    public function setIncomingDefaultCallTimeout($incomingDefaultCallTimeout = null)
    {
        if ($incomingDefaultCallTimeout === null) {
            $this->incomingDefaultCallTimeout = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->incomingDefaultCallTimeout = $incomingDefaultCallTimeout;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncomingDefaultCallTimeout()
    {
        $this->incomingDefaultCallTimeout = null;
        return $this;
    }

    /**
     * Getter for incomingRule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringIncomingRuleList19sp1|null
     */
    public function getIncomingRule()
    {
        return $this->incomingRule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->incomingRule;
    }

    /**
     * Setter for incomingRule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringIncomingRuleList19sp1|null $incomingRule
     * @return $this
     */
    public function setIncomingRule(\CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringIncomingRuleList19sp1 $incomingRule = null)
    {
        if ($incomingRule === null) {
            $this->incomingRule = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->incomingRule = $incomingRule;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncomingRule()
    {
        $this->incomingRule = null;
        return $this;
    }

    /**
     * Getter for callMeNowDefaultAction
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringCallMeNowAction
     */
    public function getCallMeNowDefaultAction()
    {
        return $this->callMeNowDefaultAction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callMeNowDefaultAction;
    }

    /**
     * Setter for callMeNowDefaultAction
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringCallMeNowAction $callMeNowDefaultAction
     * @return $this
     */
    public function setCallMeNowDefaultAction(\CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringCallMeNowAction $callMeNowDefaultAction)
    {
        $this->callMeNowDefaultAction = $callMeNowDefaultAction;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallMeNowDefaultAction()
    {
        $this->callMeNowDefaultAction = null;
        return $this;
    }

    /**
     * Getter for callMeNowDefaultCallTimeout
     *
     * @return int|null
     */
    public function getCallMeNowDefaultCallTimeout()
    {
        return $this->callMeNowDefaultCallTimeout instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callMeNowDefaultCallTimeout;
    }

    /**
     * Setter for callMeNowDefaultCallTimeout
     *
     * @param int|null $callMeNowDefaultCallTimeout
     * @return $this
     */
    public function setCallMeNowDefaultCallTimeout($callMeNowDefaultCallTimeout = null)
    {
        if ($callMeNowDefaultCallTimeout === null) {
            $this->callMeNowDefaultCallTimeout = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->callMeNowDefaultCallTimeout = $callMeNowDefaultCallTimeout;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallMeNowDefaultCallTimeout()
    {
        $this->callMeNowDefaultCallTimeout = null;
        return $this;
    }

    /**
     * Getter for callMeNowRule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringCallMeNowRuleList|null
     */
    public function getCallMeNowRule()
    {
        return $this->callMeNowRule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callMeNowRule;
    }

    /**
     * Setter for callMeNowRule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringCallMeNowRuleList|null $callMeNowRule
     * @return $this
     */
    public function setCallMeNowRule(\CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringCallMeNowRuleList $callMeNowRule = null)
    {
        if ($callMeNowRule === null) {
            $this->callMeNowRule = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->callMeNowRule = $callMeNowRule;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallMeNowRule()
    {
        $this->callMeNowRule = null;
        return $this;
    }

    /**
     * Getter for applyToAttendedCallTransfers
     *
     * @return bool
     */
    public function getApplyToAttendedCallTransfers()
    {
        return $this->applyToAttendedCallTransfers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applyToAttendedCallTransfers;
    }

    /**
     * Setter for applyToAttendedCallTransfers
     *
     * @param bool $applyToAttendedCallTransfers
     * @return $this
     */
    public function setApplyToAttendedCallTransfers($applyToAttendedCallTransfers)
    {
        $this->applyToAttendedCallTransfers = $applyToAttendedCallTransfers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetApplyToAttendedCallTransfers()
    {
        $this->applyToAttendedCallTransfers = null;
        return $this;
    }


}

