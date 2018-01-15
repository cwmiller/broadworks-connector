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
     * @var bool|null
     */
    private $ringFowardNumbers = null;

    /**
     * @ElementName forwardingNumberList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithRingList|null
     */
    private $forwardingNumberList = null;

    /**
     * @ElementName stillNoAnswer
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionModify|null
     */
    private $stillNoAnswer = null;

    /**
     * Getter for ringFowardNumbers
     *
     * @ElementName ringFowardNumbers
     * @return bool|null
     */
    public function getRingFowardNumbers()
    {
        return $this->ringFowardNumbers;
    }

    /**
     * Setter for ringFowardNumbers
     *
     * @ElementName ringFowardNumbers
     * @param bool|null $ringFowardNumbers
     * @return $this
     */
    public function setRingFowardNumbers($ringFowardNumbers)
    {
        $this->ringFowardNumbers = $ringFowardNumbers;
        return $this;
    }

    /**
     * Getter for forwardingNumberList
     *
     * @ElementName forwardingNumberList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithRingList|null
     */
    public function getForwardingNumberList()
    {
        return $this->forwardingNumberList;
    }

    /**
     * Setter for forwardingNumberList
     *
     * @ElementName forwardingNumberList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithRingList|null $forwardingNumberList
     * @return $this
     */
    public function setForwardingNumberList($forwardingNumberList)
    {
        $this->forwardingNumberList = $forwardingNumberList;
        return $this;
    }

    /**
     * Getter for stillNoAnswer
     *
     * @ElementName stillNoAnswer
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionModify|null
     */
    public function getStillNoAnswer()
    {
        return $this->stillNoAnswer;
    }

    /**
     * Setter for stillNoAnswer
     *
     * @ElementName stillNoAnswer
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionModify|null $stillNoAnswer
     * @return $this
     */
    public function setStillNoAnswer($stillNoAnswer)
    {
        $this->stillNoAnswer = $stillNoAnswer;
        return $this;
    }


}

