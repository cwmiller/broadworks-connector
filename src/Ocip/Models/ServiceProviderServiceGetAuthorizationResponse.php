<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServiceGetAuthorizationResponse
 *
 * Response to ServiceProviderServiceGetAuthorizationRequest.
 *         If the feature was never licensed, then "authorized" is false and the
 * remaining elements are not returned.
 *         If the service pack is available for use, "authorized" is true.
 *         "authorizedQuantity" can be unlimited or a quantity. In the case of a
 * service pack, "authorizedQuantity" is the service pack's quantity.
 *         "authorizable" is applicable for user services and group services; it is
 * not returned for service packs.
 *
 * @see ServiceProviderServiceGetAuthorizationRequest
 */
class ServiceProviderServiceGetAuthorizationResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName authorized
     * @var bool|null
     */
    private $authorized = null;

    /**
     * @ElementName authorizedQuantity
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    private $authorizedQuantity = null;

    /**
     * @ElementName usedQuantity
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    private $usedQuantity = null;

    /**
     * @ElementName authorizable
     * @var bool|null
     */
    private $authorizable = null;

    /**
     * Getter for authorized
     *
     * @ElementName authorized
     * @return bool|null
     */
    public function getAuthorized()
    {
        return $this->authorized;
    }

    /**
     * Setter for authorized
     *
     * @ElementName authorized
     * @param bool|null $authorized
     * @return $this
     */
    public function setAuthorized($authorized)
    {
        $this->authorized = $authorized;
        return $this;
    }

    /**
     * Getter for authorizedQuantity
     *
     * @ElementName authorizedQuantity
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    public function getAuthorizedQuantity()
    {
        return $this->authorizedQuantity;
    }

    /**
     * Setter for authorizedQuantity
     *
     * @ElementName authorizedQuantity
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null $authorizedQuantity
     * @return $this
     */
    public function setAuthorizedQuantity(\CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $authorizedQuantity)
    {
        $this->authorizedQuantity = $authorizedQuantity;
        return $this;
    }

    /**
     * Getter for usedQuantity
     *
     * @ElementName usedQuantity
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    public function getUsedQuantity()
    {
        return $this->usedQuantity;
    }

    /**
     * Setter for usedQuantity
     *
     * @ElementName usedQuantity
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null $usedQuantity
     * @return $this
     */
    public function setUsedQuantity(\CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $usedQuantity)
    {
        $this->usedQuantity = $usedQuantity;
        return $this;
    }

    /**
     * Getter for authorizable
     *
     * @ElementName authorizable
     * @return bool|null
     */
    public function getAuthorizable()
    {
        return $this->authorizable;
    }

    /**
     * Setter for authorizable
     *
     * @ElementName authorizable
     * @param bool|null $authorizable
     * @return $this
     */
    public function setAuthorizable($authorizable)
    {
        $this->authorizable = $authorizable;
        return $this;
    }


}

