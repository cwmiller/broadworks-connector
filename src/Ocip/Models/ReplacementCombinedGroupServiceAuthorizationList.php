<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementCombinedGroupServiceAuthorizationList
 *
 * A list of group services that replaces a previously authorized group services.
 */
class ReplacementCombinedGroupServiceAuthorizationList
{

    /**
     * @ElementName groupServiceAuthorization
     * @var \CWM\BroadWorksConnector\Ocip\Models\CombinedGroupServiceAuthorization[]
     */
    private $groupServiceAuthorization = array(
        
    );

    /**
     * Getter for groupServiceAuthorization
     *
     * @ElementName groupServiceAuthorization
     * @return \CWM\BroadWorksConnector\Ocip\Models\CombinedGroupServiceAuthorization[]
     */
    public function getGroupServiceAuthorization()
    {
        return $this->groupServiceAuthorization;
    }

    /**
     * Setter for groupServiceAuthorization
     *
     * @ElementName groupServiceAuthorization
     * @param \CWM\BroadWorksConnector\Ocip\Models\CombinedGroupServiceAuthorization[] $groupServiceAuthorization
     * @return $this
     */
    public function setGroupServiceAuthorization($groupServiceAuthorization)
    {
        $this->groupServiceAuthorization = $groupServiceAuthorization;
        return $this;
    }

    /**
     * Adder for groupServiceAuthorization
     *
     * @ElementName groupServiceAuthorization
     * @param \CWM\BroadWorksConnector\Ocip\Models\CombinedGroupServiceAuthorization $groupServiceAuthorization
     * @return $this
     */
    public function addGroupServiceAuthorization($groupServiceAuthorization)
    {
        $this->groupServiceAuthorization []= $groupServiceAuthorization;
        return $this;
    }


}

