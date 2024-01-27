<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommunicationBarringOriginatingRule
 *
 * Communication Barring Originating Rule
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:1536","type":"sequence"}]
 */
class CommunicationBarringOriginatingRule
{
    /**
     * @ElementName criteria
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1536
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $criteria = null;

    /**
     * @ElementName action
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1536
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction|null
     */
    protected $action = null;

    /**
     * @ElementName treatmentId
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1536
     * @MinLength 1
     * @MaxLength 40
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $treatmentId = null;

    /**
     * @ElementName transferNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1536
     * @MinLength 1
     * @MaxLength 30
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $transferNumber = null;

    /**
     * @ElementName callTimeoutSeconds
     * @Type int
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1536
     * @MinInclusive 60
     * @MaxInclusive 86400
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $callTimeoutSeconds = null;

    /**
     * Getter for criteria
     *
     * @return string
     */
    public function getCriteria()
    {
        return $this->criteria instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->criteria;
    }

    /**
     * Setter for criteria
     *
     * @param string $criteria
     * @return $this
     */
    public function setCriteria($criteria)
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCriteria()
    {
        $this->criteria = null;
        return $this;
    }

    /**
     * Getter for action
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction
     */
    public function getAction()
    {
        return $this->action instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->action;
    }

    /**
     * Setter for action
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction $action
     * @return $this
     */
    public function setAction(\CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction $action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAction()
    {
        $this->action = null;
        return $this;
    }

    /**
     * Getter for treatmentId
     *
     * @return string|null
     */
    public function getTreatmentId()
    {
        return $this->treatmentId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treatmentId;
    }

    /**
     * Setter for treatmentId
     *
     * @param string|null $treatmentId
     * @return $this
     */
    public function setTreatmentId($treatmentId = null)
    {
        if ($treatmentId === null) {
            $this->treatmentId = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->treatmentId = $treatmentId;
        }
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
     * Getter for transferNumber
     *
     * @return string|null
     */
    public function getTransferNumber()
    {
        return $this->transferNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transferNumber;
    }

    /**
     * Setter for transferNumber
     *
     * @param string|null $transferNumber
     * @return $this
     */
    public function setTransferNumber($transferNumber = null)
    {
        if ($transferNumber === null) {
            $this->transferNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->transferNumber = $transferNumber;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTransferNumber()
    {
        $this->transferNumber = null;
        return $this;
    }

    /**
     * Getter for callTimeoutSeconds
     *
     * @return int|null
     */
    public function getCallTimeoutSeconds()
    {
        return $this->callTimeoutSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callTimeoutSeconds;
    }

    /**
     * Setter for callTimeoutSeconds
     *
     * @param int|null $callTimeoutSeconds
     * @return $this
     */
    public function setCallTimeoutSeconds($callTimeoutSeconds = null)
    {
        if ($callTimeoutSeconds === null) {
            $this->callTimeoutSeconds = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->callTimeoutSeconds = $callTimeoutSeconds;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallTimeoutSeconds()
    {
        $this->callTimeoutSeconds = null;
        return $this;
    }
}

