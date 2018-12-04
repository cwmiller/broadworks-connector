<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommunicationBarringOriginatingRule
 *
 * Communication Barring Originating Rule
 *
 * @Groups [{"id":"18b369af88e42ffdb4166615c670ce2c:1137","type":"sequence"}]
 */
class CommunicationBarringOriginatingRule
{

    /**
     * @ElementName criteria
     * @Type string
     * @Group 18b369af88e42ffdb4166615c670ce2c:1137
     * @var string|null
     */
    private $criteria = null;

    /**
     * @ElementName action
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction
     * @Group 18b369af88e42ffdb4166615c670ce2c:1137
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction|null
     */
    private $action = null;

    /**
     * @ElementName treatmentId
     * @Type string
     * @Nillable
     * @Optional
     * @Group 18b369af88e42ffdb4166615c670ce2c:1137
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $treatmentId = null;

    /**
     * @ElementName transferNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 18b369af88e42ffdb4166615c670ce2c:1137
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $transferNumber = null;

    /**
     * @ElementName callTimeoutSeconds
     * @Type int
     * @Nillable
     * @Optional
     * @Group 18b369af88e42ffdb4166615c670ce2c:1137
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callTimeoutSeconds = null;

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
    public function setTreatmentId($treatmentId)
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
    public function setTransferNumber($transferNumber)
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
    public function setCallTimeoutSeconds($callTimeoutSeconds)
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

