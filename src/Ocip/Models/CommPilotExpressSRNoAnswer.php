<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressSRNoAnswer
 *
 * CommPilot Express SR No Answer Settings used in the context of a get.
 */
class CommPilotExpressSRNoAnswer
{

    /**
     * @ElementName ringForwardNumbers
     * @var bool|null
     */
    private $ringForwardNumbers = null;

    /**
     * @ElementName forwardingNumberList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithRingList|null
     */
    private $forwardingNumberList = null;

    /**
     * @ElementName stillNoAnswer
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirection|null
     */
    private $stillNoAnswer = null;

    /**
     * Getter for ringForwardNumbers
     *
     * @ElementName ringForwardNumbers
     * @return bool|null
     */
    public function getRingForwardNumbers()
    {
        return $this->ringForwardNumbers;
    }

    /**
     * Setter for ringForwardNumbers
     *
     * @ElementName ringForwardNumbers
     * @param bool|null $ringForwardNumbers
     * @return $this
     */
    public function setRingForwardNumbers($ringForwardNumbers)
    {
        $this->ringForwardNumbers = $ringForwardNumbers;
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
    public function setForwardingNumberList(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithRingList $forwardingNumberList)
    {
        $this->forwardingNumberList = $forwardingNumberList;
        return $this;
    }

    /**
     * Getter for stillNoAnswer
     *
     * @ElementName stillNoAnswer
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirection|null
     */
    public function getStillNoAnswer()
    {
        return $this->stillNoAnswer;
    }

    /**
     * Setter for stillNoAnswer
     *
     * @ElementName stillNoAnswer
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirection|null $stillNoAnswer
     * @return $this
     */
    public function setStillNoAnswer(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirection $stillNoAnswer)
    {
        $this->stillNoAnswer = $stillNoAnswer;
        return $this;
    }


}

