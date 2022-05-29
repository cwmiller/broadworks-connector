<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDirectRouteModifyRequest
 *
 * Modify the direct route setting and the list of DTGs/Trunk Identities assigned to a user.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4e1b40cd187e65e0dc647394b1e74e3c:75","type":"sequence"}]
 */
class UserDirectRouteModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 4e1b40cd187e65e0dc647394b1e74e3c:75
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName outgoingDTGPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DirectRouteOutgoingDTGPolicy
     * @Optional
     * @Group 4e1b40cd187e65e0dc647394b1e74e3c:75
     * @var \CWM\BroadWorksConnector\Ocip\Models\DirectRouteOutgoingDTGPolicy|null
     */
    protected $outgoingDTGPolicy = null;

    /**
     * @ElementName outgoingTrunkIdentityPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DirectRouteOutgoingTrunkIdentityPolicy
     * @Optional
     * @Group 4e1b40cd187e65e0dc647394b1e74e3c:75
     * @var \CWM\BroadWorksConnector\Ocip\Models\DirectRouteOutgoingTrunkIdentityPolicy|null
     */
    protected $outgoingTrunkIdentityPolicy = null;

    /**
     * @ElementName directRouteIdentityList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DirectRouteReplacementIdentityList
     * @Nillable
     * @Optional
     * @Group 4e1b40cd187e65e0dc647394b1e74e3c:75
     * @var \CWM\BroadWorksConnector\Ocip\Models\DirectRouteReplacementIdentityList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $directRouteIdentityList = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\DirectRouteReplacementIdentityList|null
     */
    public function getDirectRouteIdentityList()
    {
        return $this->directRouteIdentityList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->directRouteIdentityList;
    }

    /**
     * Setter for directRouteIdentityList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DirectRouteReplacementIdentityList|null $directRouteIdentityList
     * @return $this
     */
    public function setDirectRouteIdentityList(\CWM\BroadWorksConnector\Ocip\Models\DirectRouteReplacementIdentityList $directRouteIdentityList = null)
    {
        if ($directRouteIdentityList === null) {
            $this->directRouteIdentityList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->directRouteIdentityList = $directRouteIdentityList;
        }
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

