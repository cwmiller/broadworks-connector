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
     * @Type bool
     * @var bool|null
     */
    private $ringForwardNumbers = null;

    /**
     * @ElementName forwardingNumberList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithRingList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithRingList|null
     */
    private $forwardingNumberList = null;

    /**
     * @ElementName stillNoAnswer
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirection
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirection|null
     */
    private $stillNoAnswer = null;

    /**
     * Getter for ringForwardNumbers
     *
     * @return bool
     */
    public function getRingForwardNumbers()
    {
        return $this->ringForwardNumbers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ringForwardNumbers;
    }

    /**
     * Setter for ringForwardNumbers
     *
     * @param bool $ringForwardNumbers
     * @return $this
     */
    public function setRingForwardNumbers($ringForwardNumbers)
    {
        $this->ringForwardNumbers = $ringForwardNumbers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRingForwardNumbers()
    {
        $this->ringForwardNumbers = null;
        return $this;
    }

    /**
     * Getter for forwardingNumberList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithRingList
     */
    public function getForwardingNumberList()
    {
        return $this->forwardingNumberList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardingNumberList;
    }

    /**
     * Setter for forwardingNumberList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithRingList $forwardingNumberList
     * @return $this
     */
    public function setForwardingNumberList(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithRingList $forwardingNumberList)
    {
        $this->forwardingNumberList = $forwardingNumberList;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirection
     */
    public function getStillNoAnswer()
    {
        return $this->stillNoAnswer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->stillNoAnswer;
    }

    /**
     * Setter for stillNoAnswer
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirection $stillNoAnswer
     * @return $this
     */
    public function setStillNoAnswer(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirection $stillNoAnswer)
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

