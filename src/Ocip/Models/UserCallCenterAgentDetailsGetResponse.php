<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterAgentDetailsGetResponse
 *
 * Response to the UserCallCenterAgentDetailsGetRequest. 
 *         Contains the detail information for a Call Center Agent.
 *
 * @see UserCallCenterAgentDetailsGetRequest
 */
class UserCallCenterAgentDetailsGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isCallCenterBasicAssigned
     * @var bool|null
     */
    private $isCallCenterBasicAssigned = null;

    /**
     * @ElementName isCallCenterStandardAssigned
     * @var bool|null
     */
    private $isCallCenterStandardAssigned = null;

    /**
     * @ElementName isCallCenterPremiumAssigned
     * @var bool|null
     */
    private $isCallCenterPremiumAssigned = null;

    /**
     * Getter for isCallCenterBasicAssigned
     *
     * @ElementName isCallCenterBasicAssigned
     * @return bool|null
     */
    public function getIsCallCenterBasicAssigned()
    {
        return $this->isCallCenterBasicAssigned;
    }

    /**
     * Setter for isCallCenterBasicAssigned
     *
     * @ElementName isCallCenterBasicAssigned
     * @param bool|null $isCallCenterBasicAssigned
     * @return $this
     */
    public function setIsCallCenterBasicAssigned($isCallCenterBasicAssigned)
    {
        $this->isCallCenterBasicAssigned = $isCallCenterBasicAssigned;
        return $this;
    }

    /**
     * Getter for isCallCenterStandardAssigned
     *
     * @ElementName isCallCenterStandardAssigned
     * @return bool|null
     */
    public function getIsCallCenterStandardAssigned()
    {
        return $this->isCallCenterStandardAssigned;
    }

    /**
     * Setter for isCallCenterStandardAssigned
     *
     * @ElementName isCallCenterStandardAssigned
     * @param bool|null $isCallCenterStandardAssigned
     * @return $this
     */
    public function setIsCallCenterStandardAssigned($isCallCenterStandardAssigned)
    {
        $this->isCallCenterStandardAssigned = $isCallCenterStandardAssigned;
        return $this;
    }

    /**
     * Getter for isCallCenterPremiumAssigned
     *
     * @ElementName isCallCenterPremiumAssigned
     * @return bool|null
     */
    public function getIsCallCenterPremiumAssigned()
    {
        return $this->isCallCenterPremiumAssigned;
    }

    /**
     * Setter for isCallCenterPremiumAssigned
     *
     * @ElementName isCallCenterPremiumAssigned
     * @param bool|null $isCallCenterPremiumAssigned
     * @return $this
     */
    public function setIsCallCenterPremiumAssigned($isCallCenterPremiumAssigned)
    {
        $this->isCallCenterPremiumAssigned = $isCallCenterPremiumAssigned;
        return $this;
    }


}

