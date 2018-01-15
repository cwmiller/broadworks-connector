<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCommunicationBarringCallMeNowRuleList
 *
 * A list of Communication Barring CallMeNow Rules that replaces a
 *         previously configured list. By convention, an element of this type
 *         may be set nill to clear the list.
 */
class ReplacementCommunicationBarringCallMeNowRuleList
{

    /**
     * @ElementName rule
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringCallMeNowRule[]
     */
    private $rule = array(
        
    );

    /**
     * Getter for rule
     *
     * @ElementName rule
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringCallMeNowRule[]
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Setter for rule
     *
     * @ElementName rule
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringCallMeNowRule[] $rule
     * @return $this
     */
    public function setRule($rule)
    {
        $this->rule = $rule;
        return $this;
    }

    /**
     * Adder for rule
     *
     * @ElementName rule
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringCallMeNowRule $rule
     * @return $this
     */
    public function addRule($rule)
    {
        $this->rule []= $rule;
        return $this;
    }


}

