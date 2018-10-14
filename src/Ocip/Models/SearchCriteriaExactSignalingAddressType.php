<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactSignalingAddressType
 *
 * Criteria for searching for a particular fully specified SignalingAddressType.
 */
class SearchCriteriaExactSignalingAddressType extends SearchCriteria
{

    /**
     * @ElementName profile
     * @var \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType|null
     */
    private $profile = null;

    /**
     * Getter for profile
     *
     * @ElementName profile
     * @return \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType|null
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Setter for profile
     *
     * @ElementName profile
     * @param \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType|null $profile
     * @return $this
     */
    public function setProfile(\CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType $profile)
    {
        $this->profile = $profile;
        return $this;
    }


}

