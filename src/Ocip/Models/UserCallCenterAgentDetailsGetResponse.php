<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterAgentDetailsGetResponse
 *
 * Response to the UserCallCenterAgentDetailsGetRequest. 
 *         Contains the detail information for a Call Center Agent.
 *
 * @see UserCallCenterAgentDetailsGetRequest
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:6638","type":"sequence"}]
 */
class UserCallCenterAgentDetailsGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isCallCenterBasicAssigned
     * @Type bool
     * @Group 4d65d3449061c568639c8cc1e2492285:6638
     * @var bool|null
     */
    protected $isCallCenterBasicAssigned = null;

    /**
     * @ElementName isCallCenterStandardAssigned
     * @Type bool
     * @Group 4d65d3449061c568639c8cc1e2492285:6638
     * @var bool|null
     */
    protected $isCallCenterStandardAssigned = null;

    /**
     * @ElementName isCallCenterPremiumAssigned
     * @Type bool
     * @Group 4d65d3449061c568639c8cc1e2492285:6638
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

