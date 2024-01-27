<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallToNumberGetAvailableListResponse
 *
 * Response to the UserCallToNumberGetAvailableListRequest.
 *         Contains a list of the user available Call to Numbers".
 *
 * @see UserCallToNumberGetAvailableListRequest
 * @Groups [{"id":"6bd221784ebf8af2fe1169d36a6ac2dd:118","type":"sequence"}]
 */
class UserCallToNumberGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName callToNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallToNumber
     * @Array
     * @Optional
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:118
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

