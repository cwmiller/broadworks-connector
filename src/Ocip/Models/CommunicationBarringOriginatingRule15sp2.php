<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommunicationBarringOriginatingRule15sp2
 *
 * Communication Barring Originating Rule
 */
class CommunicationBarringOriginatingRule15sp2
{

    /**
     * @ElementName criteria
     * @var string|null
     */
    private $criteria = null;

    /**
     * @ElementName action
     * @var string|null
     */
    private $action = null;

    /**
     * @ElementName treatmentId
     * @var string|null
     */
    private $treatmentId = null;

    /**
     * @ElementName transferNumber
     * @var string|null
     */
    private $transferNumber = null;

    /**
     * Getter for criteria
     *
     * @ElementName criteria
     * @return string|null
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * Setter for criteria
     *
     * @ElementName criteria
     * @param string|null $criteria
     * @return $this
     */
    public function setCriteria($criteria)
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * Getter for action
     *
     * @ElementName action
     * @return string|null
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Setter for action
     *
     * @ElementName action
     * @param string|null $action
     * @return $this
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

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
     * Getter for transferNumber
     *
     * @ElementName transferNumber
     * @return string|null
     */
    public function getTransferNumber()
    {
        return $this->transferNumber;
    }

    /**
     * Setter for transferNumber
     *
     * @ElementName transferNumber
     * @param string|null $transferNumber
     * @return $this
     */
    public function setTransferNumber($transferNumber)
    {
        $this->transferNumber = $transferNumber;
        return $this;
    }


}

