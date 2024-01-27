<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCombinedGroupServiceAuthorizationList
 *
 * A list of group services that replaces a previously authorized group services.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4227","type":"sequence"}]
 */
class ReplacementCombinedGroupServiceAuthorizationList
{
    /**
     * @ElementName groupServiceAuthorization
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CombinedGroupServiceAuthorization
     * @Array
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4227
     * @var \CWM\BroadWorksConnector\Ocip\Models\CombinedGroupServiceAuthorization[]
     */
    protected $groupServiceAuthorization = [
        
    ];

    /**
     * Getter for groupServiceAuthorization
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CombinedGroupServiceAuthorization[]
     */
    public function getGroupServiceAuthorization()
    {
        return $this->groupServiceAuthorization instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupServiceAuthorization;
    }

    /**
     * Setter for groupServiceAuthorization
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CombinedGroupServiceAuthorization[] $groupServiceAuthorization
     * @return $this
     */
    public function setGroupServiceAuthorization(array $groupServiceAuthorization)
    {
        $this->groupServiceAuthorization = $groupServiceAuthorization;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupServiceAuthorization()
    {
        $this->groupServiceAuthorization = null;
        return $this;
    }

    /**
     * Adder for groupServiceAuthorization
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CombinedGroupServiceAuthorization $groupServiceAuthorization
     * @return $this
     */
    public function addGroupServiceAuthorization($groupServiceAuthorization)
    {
        $this->groupServiceAuthorization[] = $groupServiceAuthorization;
        return $this;
    }
}

