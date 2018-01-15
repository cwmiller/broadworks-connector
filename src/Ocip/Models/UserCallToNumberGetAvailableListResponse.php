<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallToNumberGetAvailableListResponse
 *
 * Response to the UserCallToNumberGetAvailableListRequest.
 *         Contains a list of the user available Call to Numbers".
 */
class UserCallToNumberGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName callToNumber
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallToNumber[]
     */
    private $callToNumber = array(
        
    );

    /**
     * Getter for callToNumber
     *
     * @ElementName callToNumber
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallToNumber[]
     */
    public function getCallToNumber()
    {
        return $this->callToNumber;
    }

    /**
     * Setter for callToNumber
     *
     * @ElementName callToNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallToNumber[] $callToNumber
     * @return $this
     */
    public function setCallToNumber($callToNumber)
    {
        $this->callToNumber = $callToNumber;
        return $this;
    }

    /**
     * Adder for callToNumber
     *
     * @ElementName callToNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallToNumber $callToNumber
     * @return $this
     */
    public function addCallToNumber($callToNumber)
    {
        $this->callToNumber []= $callToNumber;
        return $this;
    }


}

