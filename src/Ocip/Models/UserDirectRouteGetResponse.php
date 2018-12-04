<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDirectRouteGetResponse
 *
 * Response to UserDirectRouteGetRequest.
 *         Contains the direct route setting and the list of DTGs/Trunk Identities assigned to a user.
 *
 * @see UserDirectRouteGetRequest
 * @Groups [{"id":"a78f4eda2a1b6844d5a0639c6940a98f:57","type":"sequence"}]
 */
class UserDirectRouteGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName outgoingDTGPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DirectRouteOutgoingDTGPolicy
     * @Group a78f4eda2a1b6844d5a0639c6940a98f:57
     * @var \CWM\BroadWorksConnector\Ocip\Models\DirectRouteOutgoingDTGPolicy|null
     */
    private $outgoingDTGPolicy = null;

    /**
     * @ElementName outgoingTrunkIdentityPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DirectRouteOutgoingTrunkIdentityPolicy
     * @Group a78f4eda2a1b6844d5a0639c6940a98f:57
     * @var \CWM\BroadWorksConnector\Ocip\Models\DirectRouteOutgoingTrunkIdentityPolicy|null
     */
    private $outgoingTrunkIdentityPolicy = null;

    /**
     * @ElementName directRouteIdentityList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DirectRouteIdentifiers
     * @Optional
     * @Group a78f4eda2a1b6844d5a0639c6940a98f:57
     * @var \CWM\BroadWorksConnector\Ocip\Models\DirectRouteIdentifiers|null
     */
    private $directRouteIdentityList = null;

    /**
     * Getter for outgoingDTGPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DirectRouteOutgoingDTGPolicy
     */
    public function getOutgoingDTGPolicy()
    {
        return $this->outgoingDTGPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->outgoingDTGPolicy;
    }

    /**
     * Setter for outgoingDTGPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DirectRouteOutgoingDTGPolicy $outgoingDTGPolicy
     * @return $this
     */
    public function setOutgoingDTGPolicy(\CWM\BroadWorksConnector\Ocip\Models\DirectRouteOutgoingDTGPolicy $outgoingDTGPolicy)
    {
        $this->outgoingDTGPolicy = $outgoingDTGPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOutgoingDTGPolicy()
    {
        $this->outgoingDTGPolicy = null;
        return $this;
    }

    /**
     * Getter for outgoingTrunkIdentityPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DirectRouteOutgoingTrunkIdentityPolicy
     */
    public function getOutgoingTrunkIdentityPolicy()
    {
        return $this->outgoingTrunkIdentityPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->outgoingTrunkIdentityPolicy;
    }

    /**
     * Setter for outgoingTrunkIdentityPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DirectRouteOutgoingTrunkIdentityPolicy $outgoingTrunkIdentityPolicy
     * @return $this
     */
    public function setOutgoingTrunkIdentityPolicy(\CWM\BroadWorksConnector\Ocip\Models\DirectRouteOutgoingTrunkIdentityPolicy $outgoingTrunkIdentityPolicy)
    {
        $this->outgoingTrunkIdentityPolicy = $outgoingTrunkIdentityPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOutgoingTrunkIdentityPolicy()
    {
        $this->outgoingTrunkIdentityPolicy = null;
        return $this;
    }

    /**
     * Getter for directRouteIdentityList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DirectRouteIdentifiers
     */
    public function getDirectRouteIdentityList()
    {
        return $this->directRouteIdentityList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->directRouteIdentityList;
    }

    /**
     * Setter for directRouteIdentityList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DirectRouteIdentifiers $directRouteIdentityList
     * @return $this
     */
    public function setDirectRouteIdentityList(\CWM\BroadWorksConnector\Ocip\Models\DirectRouteIdentifiers $directRouteIdentityList)
    {
        $this->directRouteIdentityList = $directRouteIdentityList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDirectRouteIdentityList()
    {
        $this->directRouteIdentityList = null;
        return $this;
    }


}

