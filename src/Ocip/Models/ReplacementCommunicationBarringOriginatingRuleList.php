<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCommunicationBarringOriginatingRuleList
 *
 * A list of Communication Barring Originating Rules that replaces a
 *         previously configured list. By convention, an element of this type
 *         may be set nill to clear the list.
 *
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:18622","type":"sequence"}]
 */
class ReplacementCommunicationBarringOriginatingRuleList
{

    /**
     * @ElementName rule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingRule
     * @Array
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18622
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingRule[]
     */
    private $rule = array(
        
    );

    /**
     * Getter for rule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingRule[]
     */
    public function getRule()
    {
        return $this->rule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->rule;
    }

    /**
     * Setter for rule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingRule[] $rule
     * @return $this
     */
    public function setRule(array $rule)
    {
        $this->rule = $rule;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRule()
    {
        $this->rule = null;
        return $this;
    }

    /**
     * Adder for rule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingRule $rule
     * @return $this
     */
    public function addRule($rule)
    {
        $this->rule[] = $rule;
        return $this;
    }


}

