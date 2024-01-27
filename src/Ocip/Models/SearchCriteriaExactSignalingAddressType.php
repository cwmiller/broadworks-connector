<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactSignalingAddressType
 *
 * Criteria for searching for a particular fully specified SignalingAddressType.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:1273","type":"sequence"}]
 */
class SearchCriteriaExactSignalingAddressType extends SearchCriteria
{
    /**
     * @ElementName profile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType
     * @Group 972fbf832439609ec8f2765c5637c3f1:1273
     * @var \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType|null
     */
    protected $profile = null;

    /**
     * Getter for profile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType
     */
    public function getProfile()
    {
        return $this->profile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profile;
    }

    /**
     * Setter for profile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType $profile
     * @return $this
     */
    public function setProfile(\CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType $profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProfile()
    {
        $this->profile = null;
        return $this;
    }
}

