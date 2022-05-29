<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterAgentDetailsGetResponse
 *
 * Response to the UserCallCenterAgentDetailsGetRequest. 
 *         Contains the detail information for a Call Center Agent.
 *
 * @see UserCallCenterAgentDetailsGetRequest
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:6652","type":"sequence"}]
 */
class UserCallCenterAgentDetailsGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isCallCenterBasicAssigned
     * @Type bool
     * @Group e2c537e3e39483b96620673a7012ffdd:6652
     * @var bool|null
     */
    protected $isCallCenterBasicAssigned = null;

    /**
     * @ElementName isCallCenterStandardAssigned
     * @Type bool
     * @Group e2c537e3e39483b96620673a7012ffdd:6652
     * @var bool|null
     */
    protected $isCallCenterStandardAssigned = null;

    /**
     * @ElementName isCallCenterPremiumAssigned
     * @Type bool
     * @Group e2c537e3e39483b96620673a7012ffdd:6652
     * @var bool|null
     */
    protected $isCallCenterPremiumAssigned = null;

    /**
     * Getter for isCallCenterBasicAssigned
     *
     * @return bool
     */
    public function getIsCallCenterBasicAssigned()
    {
        return $this->isCallCenterBasicAssigned instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isCallCenterBasicAssigned;
    }

    /**
     * Setter for isCallCenterBasicAssigned
     *
     * @param bool $isCallCenterBasicAssigned
     * @return $this
     */
    public function setIsCallCenterBasicAssigned($isCallCenterBasicAssigned)
    {
        $this->isCallCenterBasicAssigned = $isCallCenterBasicAssigned;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsCallCenterBasicAssigned()
    {
        $this->isCallCenterBasicAssigned = null;
        return $this;
    }

    /**
     * Getter for isCallCenterStandardAssigned
     *
     * @return bool
     */
    public function getIsCallCenterStandardAssigned()
    {
        return $this->isCallCenterStandardAssigned instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isCallCenterStandardAssigned;
    }

    /**
     * Setter for isCallCenterStandardAssigned
     *
     * @param bool $isCallCenterStandardAssigned
     * @return $this
     */
    public function setIsCallCenterStandardAssigned($isCallCenterStandardAssigned)
    {
        $this->isCallCenterStandardAssigned = $isCallCenterStandardAssigned;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsCallCenterStandardAssigned()
    {
        $this->isCallCenterStandardAssigned = null;
        return $this;
    }

    /**
     * Getter for isCallCenterPremiumAssigned
     *
     * @return bool
     */
    public function getIsCallCenterPremiumAssigned()
    {
        return $this->isCallCenterPremiumAssigned instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isCallCenterPremiumAssigned;
    }

    /**
     * Setter for isCallCenterPremiumAssigned
     *
     * @param bool $isCallCenterPremiumAssigned
     * @return $this
     */
    public function setIsCallCenterPremiumAssigned($isCallCenterPremiumAssigned)
    {
        $this->isCallCenterPremiumAssigned = $isCallCenterPremiumAssigned;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsCallCenterPremiumAssigned()
    {
        $this->isCallCenterPremiumAssigned = null;
        return $this;
    }


}

