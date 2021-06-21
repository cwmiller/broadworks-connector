<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactSignalingAddressType
 *
 * Criteria for searching for a particular fully specified SignalingAddressType.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:1239","type":"sequence"}]
 */
class SearchCriteriaExactSignalingAddressType extends SearchCriteria
{

    /**
     * @ElementName profile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType
     * @Group f0ada2681ca347fa83b464734259b304:1239
     * @var \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType|null
     */
    private $profile = null;

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

