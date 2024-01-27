<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCallToNumberList
 *
 * A list of Call to Numbers that replaces a previously configured list.        
 *         By convention, an element of this type may be set nill to clear the list.
 *         For the callToNumbers, the extension element is not used and the number element is only used when the type is BroadWorks Mobility.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4216","type":"sequence"}]
 */
class ReplacementCallToNumberList
{
    /**
     * @ElementName callToNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallToNumber
     * @Array
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4216
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallToNumber[]
     */
    protected $callToNumber = [
        
    ];

    /**
     * Getter for callToNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallToNumber[]
     */
    public function getCallToNumber()
    {
        return $this->callToNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callToNumber;
    }

    /**
     * Setter for callToNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallToNumber[] $callToNumber
     * @return $this
     */
    public function setCallToNumber(array $callToNumber)
    {
        $this->callToNumber = $callToNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallToNumber()
    {
        $this->callToNumber = null;
        return $this;
    }

    /**
     * Adder for callToNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallToNumber $callToNumber
     * @return $this
     */
    public function addCallToNumber($callToNumber)
    {
        $this->callToNumber[] = $callToNumber;
        return $this;
    }
}

