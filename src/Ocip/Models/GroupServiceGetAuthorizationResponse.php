<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupServiceGetAuthorizationResponse
 *
 * Response to GroupServiceGetAuthorizationRequest.
 *         If the feature is not authorized, then "authorized" is false and the remaining elements are not returned.
 *         If the service pack is not available for use or is not authorized, then "authorized" is false and the remaining elements are not returned.        
 *         "authorizedQuantity" can be unlimited or a quantity. In the case of a service pack, "authorizedQuantity" is the service pack's quantity.
 *         "authorizable" is applicable for user services and group services; it is not returned for service packs.
 *
 * @see GroupServiceGetAuthorizationRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:7808","type":"sequence"}]
 */
class GroupServiceGetAuthorizationResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName authorized
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:7808
     * @var bool|null
     */
    private $authorized = null;

    /**
     * @ElementName authorizedQuantity
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:7808
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    private $authorizedQuantity = null;

    /**
     * @ElementName usedQuantity
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:7808
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    private $usedQuantity = null;

    /**
     * @ElementName authorizable
     * @Type bool
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:7808
     * @var bool|null
     */
    private $authorizable = null;

    /**
     * Getter for authorized
     *
     * @return bool
     */
    public function getAuthorized()
    {
        return $this->authorized instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->authorized;
    }

    /**
     * Setter for authorized
     *
     * @param bool $authorized
     * @return $this
     */
    public function setAuthorized($authorized)
    {
        $this->authorized = $authorized;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAuthorized()
    {
        $this->authorized = null;
        return $this;
    }

    /**
     * Getter for authorizedQuantity
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     */
    public function getAuthorizedQuantity()
    {
        return $this->authorizedQuantity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->authorizedQuantity;
    }

    /**
     * Setter for authorizedQuantity
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $authorizedQuantity
     * @return $this
     */
    public function setAuthorizedQuantity(\CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $authorizedQuantity)
    {
        $this->authorizedQuantity = $authorizedQuantity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAuthorizedQuantity()
    {
        $this->authorizedQuantity = null;
        return $this;
    }

    /**
     * Getter for usedQuantity
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     */
    public function getUsedQuantity()
    {
        return $this->usedQuantity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->usedQuantity;
    }

    /**
     * Setter for usedQuantity
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $usedQuantity
     * @return $this
     */
    public function setUsedQuantity(\CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $usedQuantity)
    {
        $this->usedQuantity = $usedQuantity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUsedQuantity()
    {
        $this->usedQuantity = null;
        return $this;
    }

    /**
     * Getter for authorizable
     *
     * @return bool
     */
    public function getAuthorizable()
    {
        return $this->authorizable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->authorizable;
    }

    /**
     * Setter for authorizable
     *
     * @param bool $authorizable
     * @return $this
     */
    public function setAuthorizable($authorizable)
    {
        $this->authorizable = $authorizable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAuthorizable()
    {
        $this->authorizable = null;
        return $this;
    }


}

