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
     * @var string|null
     */
    private $profile = null;

    /**
     * Getter for profile
     *
     * @ElementName profile
     * @return string|null
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Setter for profile
     *
     * @ElementName profile
     * @param string|null $profile
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
        return $this;
    }


}

