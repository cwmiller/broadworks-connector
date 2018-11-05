<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCommunicationBarringProfileModifyRequest
 *
 * Modify an existing Communication Barring Profile.
 *         The priorities for OriginatingRules, RedirectingRules, CallMeNowRules
 * and IncomingRules are requantized to consecutive integers as part of the modify.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         The following elements are only used in AS data mode:
 *            callMeNowDefaultAction
 *            callMeNowDefaultCallTimeout
 *            callMeNowRule
 *            applyToAttendedCallTransfers
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderCommunicationBarringProfileModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName newName
     * @var string|null
     */
    private $newName = null;

    /**
     * @ElementName description
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

    /**
     * @ElementName originatingDefaultAction
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction|null
     */
    private $originatingDefaultAction = null;

    /**
     * @ElementName originatingDefaultTreatmentId
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $originatingDefaultTreatmentId = null;

    /**
     * @ElementName originatingDefaultTransferNumber
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $originatingDefaultTransferNumber = null;

    /**
     * @ElementName originatingDefaultCallTimeout
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $originatingDefaultCallTimeout = null;

    /**
     * @ElementName originatingRule
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderReplacementCommunicationBarringHierarchicalOriginatingRuleList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $originatingRule = null;

    /**
     * @ElementName redirectingDefaultAction
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction|null
     */
    private $redirectingDefaultAction = null;

    /**
     * @ElementName redirectingDefaultCallTimeout
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $redirectingDefaultCallTimeout = null;

    /**
     * @ElementName redirectingRule
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderReplacementCommunicationBarringHierarchicalRedirectingRuleList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $redirectingRule = null;

    /**
     * @ElementName callMeNowDefaultAction
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringCallMeNowAction|null
     */
    private $callMeNowDefaultAction = null;

    /**
     * @ElementName callMeNowDefaultCallTimeout
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callMeNowDefaultCallTimeout = null;

    /**
     * @ElementName callMeNowRule
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderReplacementCommunicationBarringHierarchicalCallMeNowRuleList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callMeNowRule = null;

    /**
     * @ElementName incomingDefaultAction
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingAction|null
     */
    private $incomingDefaultAction = null;

    /**
     * @ElementName incomingDefaultCallTimeout
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $incomingDefaultCallTimeout = null;

    /**
     * @ElementName incomingRule
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringIncomingRuleList19sp1|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $incomingRule = null;

    /**
     * @ElementName becomeDefault
     * @var bool|null
     */
    private $becomeDefault = null;

    /**
     * @ElementName applyToAttendedCallTransfers
     * @var bool|null
     */
    private $applyToAttendedCallTransfers = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for newName
     *
     * @ElementName newName
     * @return string|null
     */
    public function getNewName()
    {
        return $this->newName;
    }

    /**
     * Setter for newName
     *
     * @ElementName newName
     * @param string|null $newName
     * @return $this
     */
    public function setNewName($newName)
    {
        $this->newName = $newName;
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
     * Getter for originatingDefaultAction
     *
     * @ElementName originatingDefaultAction
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction|null
     */
    public function getOriginatingDefaultAction()
    {
        return $this->originatingDefaultAction;
    }

    /**
     * Setter for originatingDefaultAction
     *
     * @ElementName originatingDefaultAction
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction|null $originatingDefaultAction
     * @return $this
     */
    public function setOriginatingDefaultAction(\CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction $originatingDefaultAction)
    {
        $this->originatingDefaultAction = $originatingDefaultAction;
        return $this;
    }

    /**
     * Getter for originatingDefaultTreatmentId
     *
     * @ElementName originatingDefaultTreatmentId
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getOriginatingDefaultTreatmentId()
    {
        return $this->originatingDefaultTreatmentId;
    }

    /**
     * Setter for originatingDefaultTreatmentId
     *
     * @ElementName originatingDefaultTreatmentId
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $originatingDefaultTreatmentId
     * @return $this
     */
    public function setOriginatingDefaultTreatmentId($originatingDefaultTreatmentId)
    {
        $this->originatingDefaultTreatmentId = $originatingDefaultTreatmentId;
        return $this;
    }

    /**
     * Getter for originatingDefaultTransferNumber
     *
     * @ElementName originatingDefaultTransferNumber
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getOriginatingDefaultTransferNumber()
    {
        return $this->originatingDefaultTransferNumber;
    }

    /**
     * Setter for originatingDefaultTransferNumber
     *
     * @ElementName originatingDefaultTransferNumber
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $originatingDefaultTransferNumber
     * @return $this
     */
    public function setOriginatingDefaultTransferNumber($originatingDefaultTransferNumber)
    {
        $this->originatingDefaultTransferNumber = $originatingDefaultTransferNumber;
        return $this;
    }

    /**
     * Getter for originatingDefaultCallTimeout
     *
     * @ElementName originatingDefaultCallTimeout
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getOriginatingDefaultCallTimeout()
    {
        return $this->originatingDefaultCallTimeout;
    }

    /**
     * Setter for originatingDefaultCallTimeout
     *
     * @ElementName originatingDefaultCallTimeout
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $originatingDefaultCallTimeout
     * @return $this
     */
    public function setOriginatingDefaultCallTimeout($originatingDefaultCallTimeout)
    {
        $this->originatingDefaultCallTimeout = $originatingDefaultCallTimeout;
        return $this;
    }

    /**
     * Getter for originatingRule
     *
     * @ElementName originatingRule
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderReplacementCommunicationBarringHierarchicalOriginatingRuleList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getOriginatingRule()
    {
        return $this->originatingRule;
    }

    /**
     * Setter for originatingRule
     *
     * @ElementName originatingRule
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderReplacementCommunicationBarringHierarchicalOriginatingRuleList|null|\CWM\BroadWorksConnector\Ocip\Nil $originatingRule
     * @return $this
     */
    public function setOriginatingRule(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderReplacementCommunicationBarringHierarchicalOriginatingRuleList $originatingRule)
    {
        $this->originatingRule = $originatingRule;
        return $this;
    }

    /**
     * Getter for redirectingDefaultAction
     *
     * @ElementName redirectingDefaultAction
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction|null
     */
    public function getRedirectingDefaultAction()
    {
        return $this->redirectingDefaultAction;
    }

    /**
     * Setter for redirectingDefaultAction
     *
     * @ElementName redirectingDefaultAction
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction|null $redirectingDefaultAction
     * @return $this
     */
    public function setRedirectingDefaultAction(\CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction $redirectingDefaultAction)
    {
        $this->redirectingDefaultAction = $redirectingDefaultAction;
        return $this;
    }

    /**
     * Getter for redirectingDefaultCallTimeout
     *
     * @ElementName redirectingDefaultCallTimeout
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getRedirectingDefaultCallTimeout()
    {
        return $this->redirectingDefaultCallTimeout;
    }

    /**
     * Setter for redirectingDefaultCallTimeout
     *
     * @ElementName redirectingDefaultCallTimeout
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $redirectingDefaultCallTimeout
     * @return $this
     */
    public function setRedirectingDefaultCallTimeout($redirectingDefaultCallTimeout)
    {
        $this->redirectingDefaultCallTimeout = $redirectingDefaultCallTimeout;
        return $this;
    }

    /**
     * Getter for redirectingRule
     *
     * @ElementName redirectingRule
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderReplacementCommunicationBarringHierarchicalRedirectingRuleList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getRedirectingRule()
    {
        return $this->redirectingRule;
    }

    /**
     * Setter for redirectingRule
     *
     * @ElementName redirectingRule
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderReplacementCommunicationBarringHierarchicalRedirectingRuleList|null|\CWM\BroadWorksConnector\Ocip\Nil $redirectingRule
     * @return $this
     */
    public function setRedirectingRule(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderReplacementCommunicationBarringHierarchicalRedirectingRuleList $redirectingRule)
    {
        $this->redirectingRule = $redirectingRule;
        return $this;
    }

    /**
     * Getter for callMeNowDefaultAction
     *
     * @ElementName callMeNowDefaultAction
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringCallMeNowAction|null
     */
    public function getCallMeNowDefaultAction()
    {
        return $this->callMeNowDefaultAction;
    }

    /**
     * Setter for callMeNowDefaultAction
     *
     * @ElementName callMeNowDefaultAction
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringCallMeNowAction|null $callMeNowDefaultAction
     * @return $this
     */
    public function setCallMeNowDefaultAction(\CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringCallMeNowAction $callMeNowDefaultAction)
    {
        $this->callMeNowDefaultAction = $callMeNowDefaultAction;
        return $this;
    }

    /**
     * Getter for callMeNowDefaultCallTimeout
     *
     * @ElementName callMeNowDefaultCallTimeout
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCallMeNowDefaultCallTimeout()
    {
        return $this->callMeNowDefaultCallTimeout;
    }

    /**
     * Setter for callMeNowDefaultCallTimeout
     *
     * @ElementName callMeNowDefaultCallTimeout
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $callMeNowDefaultCallTimeout
     * @return $this
     */
    public function setCallMeNowDefaultCallTimeout($callMeNowDefaultCallTimeout)
    {
        $this->callMeNowDefaultCallTimeout = $callMeNowDefaultCallTimeout;
        return $this;
    }

    /**
     * Getter for callMeNowRule
     *
     * @ElementName callMeNowRule
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderReplacementCommunicationBarringHierarchicalCallMeNowRuleList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCallMeNowRule()
    {
        return $this->callMeNowRule;
    }

    /**
     * Setter for callMeNowRule
     *
     * @ElementName callMeNowRule
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderReplacementCommunicationBarringHierarchicalCallMeNowRuleList|null|\CWM\BroadWorksConnector\Ocip\Nil $callMeNowRule
     * @return $this
     */
    public function setCallMeNowRule(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderReplacementCommunicationBarringHierarchicalCallMeNowRuleList $callMeNowRule)
    {
        $this->callMeNowRule = $callMeNowRule;
        return $this;
    }

    /**
     * Getter for incomingDefaultAction
     *
     * @ElementName incomingDefaultAction
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingAction|null
     */
    public function getIncomingDefaultAction()
    {
        return $this->incomingDefaultAction;
    }

    /**
     * Setter for incomingDefaultAction
     *
     * @ElementName incomingDefaultAction
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingAction|null $incomingDefaultAction
     * @return $this
     */
    public function setIncomingDefaultAction(\CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingAction $incomingDefaultAction)
    {
        $this->incomingDefaultAction = $incomingDefaultAction;
        return $this;
    }

    /**
     * Getter for incomingDefaultCallTimeout
     *
     * @ElementName incomingDefaultCallTimeout
     * @Nillable
     * @return int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getIncomingDefaultCallTimeout()
    {
        return $this->incomingDefaultCallTimeout;
    }

    /**
     * Setter for incomingDefaultCallTimeout
     *
     * @ElementName incomingDefaultCallTimeout
     * @Nillable
     * @param int|null|\CWM\BroadWorksConnector\Ocip\Nil $incomingDefaultCallTimeout
     * @return $this
     */
    public function setIncomingDefaultCallTimeout($incomingDefaultCallTimeout)
    {
        $this->incomingDefaultCallTimeout = $incomingDefaultCallTimeout;
        return $this;
    }

    /**
     * Getter for incomingRule
     *
     * @ElementName incomingRule
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringIncomingRuleList19sp1|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getIncomingRule()
    {
        return $this->incomingRule;
    }

    /**
     * Setter for incomingRule
     *
     * @ElementName incomingRule
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringIncomingRuleList19sp1|null|\CWM\BroadWorksConnector\Ocip\Nil $incomingRule
     * @return $this
     */
    public function setIncomingRule(\CWM\BroadWorksConnector\Ocip\Models\ReplacementCommunicationBarringIncomingRuleList19sp1 $incomingRule)
    {
        $this->incomingRule = $incomingRule;
        return $this;
    }

    /**
     * Getter for becomeDefault
     *
     * @ElementName becomeDefault
     * @return bool|null
     */
    public function getBecomeDefault()
    {
        return $this->becomeDefault;
    }

    /**
     * Setter for becomeDefault
     *
     * @ElementName becomeDefault
     * @param bool|null $becomeDefault
     * @return $this
     */
    public function setBecomeDefault($becomeDefault)
    {
        $this->becomeDefault = $becomeDefault;
        return $this;
    }

    /**
     * Getter for applyToAttendedCallTransfers
     *
     * @ElementName applyToAttendedCallTransfers
     * @return bool|null
     */
    public function getApplyToAttendedCallTransfers()
    {
        return $this->applyToAttendedCallTransfers;
    }

    /**
     * Setter for applyToAttendedCallTransfers
     *
     * @ElementName applyToAttendedCallTransfers
     * @param bool|null $applyToAttendedCallTransfers
     * @return $this
     */
    public function setApplyToAttendedCallTransfers($applyToAttendedCallTransfers)
    {
        $this->applyToAttendedCallTransfers = $applyToAttendedCallTransfers;
        return $this;
    }


}

