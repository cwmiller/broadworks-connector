<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressSRNoAnswerModify
 *
 * CommPilot Express SR No Answer Settings used in the context of a modify.
 */
class CommPilotExpressSRNoAnswerModify
{

    /**
     * @ElementName ringFowardNumbers
     * @Type bool
     * @var bool|null
     */
    private $ringFowardNumbers = null;

    /**
     * @ElementName forwardingNumberList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithRingList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithRingList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $forwardingNumberList = null;

    /**
     * @ElementName stillNoAnswer
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionModify
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionModify|null
     */
    private $stillNoAnswer = null;

    /**
     * Getter for ringFowardNumbers
     *
     * @return bool
     */
    public function getRingFowardNumbers()
    {
        return $this->ringFowardNumbers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ringFowardNumbers;
    }

    /**
     * Setter for ringFowardNumbers
     *
     * @param bool $ringFowardNumbers
     * @return $this
     */
    public function setRingFowardNumbers($ringFowardNumbers)
    {
        $this->ringFowardNumbers = $ringFowardNumbers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRingFowardNumbers()
    {
        $this->ringFowardNumbers = null;
        return $this;
    }

    /**
     * Getter for forwardingNumberList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithRingList|null
     */
    public function getForwardingNumberList()
    {
        return $this->forwardingNumberList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardingNumberList;
    }

    /**
     * Setter for forwardingNumberList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithRingList|null $forwardingNumberList
     * @return $this
     */
    public function setForwardingNumberList(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithRingList $forwardingNumberList)
    {
        if ($forwardingNumberList === null) {
            $this->forwardingNumberList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->forwardingNumberList = $forwardingNumberList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForwardingNumberList()
    {
        $this->forwardingNumberList = null;
        return $this;
    }

    /**
     * Getter for stillNoAnswer
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionModify
     */
    public function getStillNoAnswer()
    {
        return $this->stillNoAnswer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->stillNoAnswer;
    }

    /**
     * Setter for stillNoAnswer
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionModify $stillNoAnswer
     * @return $this
     */
    public function setStillNoAnswer(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionModify $stillNoAnswer)
    {
        $this->stillNoAnswer = $stillNoAnswer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStillNoAnswer()
    {
        $this->stillNoAnswer = null;
        return $this;
    }


}

