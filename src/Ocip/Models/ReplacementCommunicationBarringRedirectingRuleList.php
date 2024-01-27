<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCommunicationBarringRedirectingRuleList
 *
 * A list of Communication Barring Redirecting Rules that replaces a
 *         previously configured list. By convention, an element of this type
 *         may be set nill to clear the list.
 *
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:20221","type":"sequence"}]
 */
class ReplacementCommunicationBarringRedirectingRuleList
{
    /**
     * @ElementName rule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingRule
     * @Array
     * @Group da582a1f8028404e70d260cf1f891033:20221
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingRule[]
     */
    protected $rule = [
        
    ];

    /**
     * Getter for rule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingRule[]
     */
    public function getRule()
    {
        return $this->rule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->rule;
    }

    /**
     * Setter for rule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingRule[] $rule
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingRule $rule
     * @return $this
     */
    public function addRule($rule)
    {
        $this->rule[] = $rule;
        return $this;
    }
}

