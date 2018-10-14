<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDirectRouteGetResponse
 *
 * Response to UserDirectRouteGetRequest.
 *         Contains the direct route setting and the list of DTGs/Trunk Identities
 * assigned to a user.
 *
 * @see UserDirectRouteGetRequest
 */
class UserDirectRouteGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName outgoingDTGPolicy
     * @var \CWM\BroadWorksConnector\Ocip\Models\DirectRouteOutgoingDTGPolicy|null
     */
    private $outgoingDTGPolicy = null;

    /**
     * @ElementName outgoingTrunkIdentityPolicy
     * @var \CWM\BroadWorksConnector\Ocip\Models\DirectRouteOutgoingTrunkIdentityPolicy|null
     */
    private $outgoingTrunkIdentityPolicy = null;

    /**
     * @ElementName directRouteIdentityList
     * @var \CWM\BroadWorksConnector\Ocip\Models\DirectRouteIdentifiers|null
     */
    private $directRouteIdentityList = null;

    /**
     * Getter for outgoingDTGPolicy
     *
     * @ElementName outgoingDTGPolicy
     * @return \CWM\BroadWorksConnector\Ocip\Models\DirectRouteOutgoingDTGPolicy|null
     */
    public function getOutgoingDTGPolicy()
    {
        return $this->outgoingDTGPolicy;
    }

    /**
     * Setter for outgoingDTGPolicy
     *
     * @ElementName outgoingDTGPolicy
     * @param \CWM\BroadWorksConnector\Ocip\Models\DirectRouteOutgoingDTGPolicy|null $outgoingDTGPolicy
     * @return $this
     */
    public function setOutgoingDTGPolicy(\CWM\BroadWorksConnector\Ocip\Models\DirectRouteOutgoingDTGPolicy $outgoingDTGPolicy)
    {
        $this->outgoingDTGPolicy = $outgoingDTGPolicy;
        return $this;
    }

    /**
     * Getter for outgoingTrunkIdentityPolicy
     *
     * @ElementName outgoingTrunkIdentityPolicy
     * @return \CWM\BroadWorksConnector\Ocip\Models\DirectRouteOutgoingTrunkIdentityPolicy|null
     */
    public function getOutgoingTrunkIdentityPolicy()
    {
        return $this->outgoingTrunkIdentityPolicy;
    }

    /**
     * Setter for outgoingTrunkIdentityPolicy
     *
     * @ElementName outgoingTrunkIdentityPolicy
     * @param \CWM\BroadWorksConnector\Ocip\Models\DirectRouteOutgoingTrunkIdentityPolicy|null $outgoingTrunkIdentityPolicy
     * @return $this
     */
    public function setOutgoingTrunkIdentityPolicy(\CWM\BroadWorksConnector\Ocip\Models\DirectRouteOutgoingTrunkIdentityPolicy $outgoingTrunkIdentityPolicy)
    {
        $this->outgoingTrunkIdentityPolicy = $outgoingTrunkIdentityPolicy;
        return $this;
    }

    /**
     * Getter for directRouteIdentityList
     *
     * @ElementName directRouteIdentityList
     * @return \CWM\BroadWorksConnector\Ocip\Models\DirectRouteIdentifiers|null
     */
    public function getDirectRouteIdentityList()
    {
        return $this->directRouteIdentityList;
    }

    /**
     * Setter for directRouteIdentityList
     *
     * @ElementName directRouteIdentityList
     * @param \CWM\BroadWorksConnector\Ocip\Models\DirectRouteIdentifiers|null $directRouteIdentityList
     * @return $this
     */
    public function setDirectRouteIdentityList(\CWM\BroadWorksConnector\Ocip\Models\DirectRouteIdentifiers $directRouteIdentityList)
    {
        $this->directRouteIdentityList = $directRouteIdentityList;
        return $this;
    }


}

