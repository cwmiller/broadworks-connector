<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringProfileGetResponse16
 *
 * Response to the SystemCommunicationBarringProfileGetRequest16.
 *         The response contains the Communication Barring Profile information.
 */
class SystemCommunicationBarringProfileGetResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName originatingDefaultAction
     * @var string|null
     */
    private $originatingDefaultAction = null;

    /**
     * @ElementName originatingDefaultTreatmentId
     * @var string|null
     */
    private $originatingDefaultTreatmentId = null;

    /**
     * @ElementName originatingDefaultTransferNumber
     * @var string|null
     */
    private $originatingDefaultTransferNumber = null;

    /**
     * @ElementName originatingDefaultCallTimeout
     * @var int|null
     */
    private $originatingDefaultCallTimeout = null;

    /**
     * @ElementName originatingRule
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingRule[]
     */
    private $originatingRule = array(
        
    );

    /**
     * @ElementName redirectingDefaultAction
     * @var string|null
     */
    private $redirectingDefaultAction = null;

    /**
     * @ElementName redirectingDefaultCallTimeout
     * @var int|null
     */
    private $redirectingDefaultCallTimeout = null;

    /**
     * @ElementName redirectingRule
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingRule[]
     */
    private $redirectingRule = array(
        
    );

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
     * Getter for originatingDefaultAction
     *
     * @ElementName originatingDefaultAction
     * @return string|null
     */
    public function getOriginatingDefaultAction()
    {
        return $this->originatingDefaultAction;
    }

    /**
     * Setter for originatingDefaultAction
     *
     * @ElementName originatingDefaultAction
     * @param string|null $originatingDefaultAction
     * @return $this
     */
    public function setOriginatingDefaultAction($originatingDefaultAction)
    {
        $this->originatingDefaultAction = $originatingDefaultAction;
        return $this;
    }

    /**
     * Getter for originatingDefaultTreatmentId
     *
     * @ElementName originatingDefaultTreatmentId
     * @return string|null
     */
    public function getOriginatingDefaultTreatmentId()
    {
        return $this->originatingDefaultTreatmentId;
    }

    /**
     * Setter for originatingDefaultTreatmentId
     *
     * @ElementName originatingDefaultTreatmentId
     * @param string|null $originatingDefaultTreatmentId
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
     * @return string|null
     */
    public function getOriginatingDefaultTransferNumber()
    {
        return $this->originatingDefaultTransferNumber;
    }

    /**
     * Setter for originatingDefaultTransferNumber
     *
     * @ElementName originatingDefaultTransferNumber
     * @param string|null $originatingDefaultTransferNumber
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
     * @return int|null
     */
    public function getOriginatingDefaultCallTimeout()
    {
        return $this->originatingDefaultCallTimeout;
    }

    /**
     * Setter for originatingDefaultCallTimeout
     *
     * @ElementName originatingDefaultCallTimeout
     * @param int|null $originatingDefaultCallTimeout
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingRule[]
     */
    public function getOriginatingRule()
    {
        return $this->originatingRule;
    }

    /**
     * Setter for originatingRule
     *
     * @ElementName originatingRule
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingRule[] $originatingRule
     * @return $this
     */
    public function setOriginatingRule($originatingRule)
    {
        $this->originatingRule = $originatingRule;
        return $this;
    }

    /**
     * Adder for originatingRule
     *
     * @ElementName originatingRule
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingRule $originatingRule
     * @return $this
     */
    public function addOriginatingRule($originatingRule)
    {
        $this->originatingRule []= $originatingRule;
        return $this;
    }

    /**
     * Getter for redirectingDefaultAction
     *
     * @ElementName redirectingDefaultAction
     * @return string|null
     */
    public function getRedirectingDefaultAction()
    {
        return $this->redirectingDefaultAction;
    }

    /**
     * Setter for redirectingDefaultAction
     *
     * @ElementName redirectingDefaultAction
     * @param string|null $redirectingDefaultAction
     * @return $this
     */
    public function setRedirectingDefaultAction($redirectingDefaultAction)
    {
        $this->redirectingDefaultAction = $redirectingDefaultAction;
        return $this;
    }

    /**
     * Getter for redirectingDefaultCallTimeout
     *
     * @ElementName redirectingDefaultCallTimeout
     * @return int|null
     */
    public function getRedirectingDefaultCallTimeout()
    {
        return $this->redirectingDefaultCallTimeout;
    }

    /**
     * Setter for redirectingDefaultCallTimeout
     *
     * @ElementName redirectingDefaultCallTimeout
     * @param int|null $redirectingDefaultCallTimeout
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingRule[]
     */
    public function getRedirectingRule()
    {
        return $this->redirectingRule;
    }

    /**
     * Setter for redirectingRule
     *
     * @ElementName redirectingRule
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingRule[] $redirectingRule
     * @return $this
     */
    public function setRedirectingRule($redirectingRule)
    {
        $this->redirectingRule = $redirectingRule;
        return $this;
    }

    /**
     * Adder for redirectingRule
     *
     * @ElementName redirectingRule
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingRule $redirectingRule
     * @return $this
     */
    public function addRedirectingRule($redirectingRule)
    {
        $this->redirectingRule []= $redirectingRule;
        return $this;
    }


}

