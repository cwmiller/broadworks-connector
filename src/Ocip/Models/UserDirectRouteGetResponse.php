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
     * @var string|null
     */
    private $outgoingDTGPolicy = null;

    /**
     * @ElementName outgoingTrunkIdentityPolicy
     * @var string|null
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
     * @return string|null
     */
    public function getOutgoingDTGPolicy()
    {
        return $this->outgoingDTGPolicy;
    }

    /**
     * Setter for outgoingDTGPolicy
     *
     * @ElementName outgoingDTGPolicy
     * @param string|null $outgoingDTGPolicy
     * @return $this
     */
    public function setOutgoingDTGPolicy($outgoingDTGPolicy)
    {
        $this->outgoingDTGPolicy = $outgoingDTGPolicy;
        return $this;
    }

    /**
     * Getter for outgoingTrunkIdentityPolicy
     *
     * @ElementName outgoingTrunkIdentityPolicy
     * @return string|null
     */
    public function getOutgoingTrunkIdentityPolicy()
    {
        return $this->outgoingTrunkIdentityPolicy;
    }

    /**
     * Setter for outgoingTrunkIdentityPolicy
     *
     * @ElementName outgoingTrunkIdentityPolicy
     * @param string|null $outgoingTrunkIdentityPolicy
     * @return $this
     */
    public function setOutgoingTrunkIdentityPolicy($outgoingTrunkIdentityPolicy)
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
    public function setDirectRouteIdentityList($directRouteIdentityList)
    {
        $this->directRouteIdentityList = $directRouteIdentityList;
        return $this;
    }


}

