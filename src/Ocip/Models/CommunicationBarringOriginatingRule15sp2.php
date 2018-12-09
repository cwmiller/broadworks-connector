<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommunicationBarringOriginatingRule15sp2
 *
 * Communication Barring Originating Rule
 *
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:38549","type":"sequence"}]
 */
class CommunicationBarringOriginatingRule15sp2
{

    /**
     * @ElementName criteria
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:38549
     * @var string|null
     */
    private $criteria = null;

    /**
     * @ElementName action
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction15sp2
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:38549
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction15sp2|null
     */
    private $action = null;

    /**
     * @ElementName treatmentId
     * @Type string
     * @Nillable
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:38549
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $treatmentId = null;

    /**
     * @ElementName transferNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:38549
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $transferNumber = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction15sp2
     */
    public function getAction()
    {
        return $this->action instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->action;
    }

    /**
     * Setter for action
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction15sp2 $action
     * @return $this
     */
    public function setAction(\CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction15sp2 $action)
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


}

