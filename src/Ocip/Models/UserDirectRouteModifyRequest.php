<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDirectRouteModifyRequest
 *
 * Modify the direct route setting and the list of DTGs/Trunk Identities assigned
 * to a user.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserDirectRouteModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

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
     * @var \CWM\BroadWorksConnector\Ocip\Models\DirectRouteReplacementIdentityList|null
     */
    private $directRouteIdentityList = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\DirectRouteReplacementIdentityList|null
     */
    public function getDirectRouteIdentityList()
    {
        return $this->directRouteIdentityList;
    }

    /**
     * Setter for directRouteIdentityList
     *
     * @ElementName directRouteIdentityList
     * @param \CWM\BroadWorksConnector\Ocip\Models\DirectRouteReplacementIdentityList|null $directRouteIdentityList
     * @return $this
     */
    public function setDirectRouteIdentityList(\CWM\BroadWorksConnector\Ocip\Models\DirectRouteReplacementIdentityList $directRouteIdentityList)
    {
        $this->directRouteIdentityList = $directRouteIdentityList;
        return $this;
    }


}

