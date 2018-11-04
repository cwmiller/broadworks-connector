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
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\DirectRouteReplacementIdentityList|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\DirectRouteReplacementIdentityList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDirectRouteIdentityList()
    {
        return $this->directRouteIdentityList;
    }

    /**
     * Setter for directRouteIdentityList
     *
     * @ElementName directRouteIdentityList
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\DirectRouteReplacementIdentityList|null|\CWM\BroadWorksConnector\Ocip\Nil $directRouteIdentityList
     * @return $this
     */
    public function setDirectRouteIdentityList($directRouteIdentityList)
    {
        $this->directRouteIdentityList = $directRouteIdentityList;
        return $this;
    }


}

