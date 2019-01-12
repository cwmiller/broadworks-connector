<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseEnterpriseTrunkGetRequest
 *
 * Request to get an enterprise trunk
 *         The response is either an EnterpriseEnterpriseTrunkGetResponse or an ErrorResponse.
 *         Replaced by: EnterpriseEnterpriseTrunkGetRequest21
 *
 * @see EnterpriseEnterpriseTrunkGetResponse
 * @see ErrorResponse
 * @see EnterpriseEnterpriseTrunkGetRequest21
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:31933","type":"sequence"}]
 */
class EnterpriseEnterpriseTrunkGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:31933
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName enterpriseTrunkName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:31933
     * @var string|null
     */
    private $enterpriseTrunkName = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for enterpriseTrunkName
     *
     * @return string
     */
    public function getEnterpriseTrunkName()
    {
        return $this->enterpriseTrunkName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enterpriseTrunkName;
    }

    /**
     * Setter for enterpriseTrunkName
     *
     * @param string $enterpriseTrunkName
     * @return $this
     */
    public function setEnterpriseTrunkName($enterpriseTrunkName)
    {
        $this->enterpriseTrunkName = $enterpriseTrunkName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnterpriseTrunkName()
    {
        $this->enterpriseTrunkName = null;
        return $this;
    }


}

