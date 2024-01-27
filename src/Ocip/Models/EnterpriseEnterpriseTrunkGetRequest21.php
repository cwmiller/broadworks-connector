<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseEnterpriseTrunkGetRequest21
 *
 * Request to get an enterprise trunk
 *         The response is either an EnterpriseEnterpriseTrunkGetResponse21 or an ErrorResponse.
 *
 * @see EnterpriseEnterpriseTrunkGetResponse21
 * @see ErrorResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:2384","type":"sequence"}]
 */
class EnterpriseEnterpriseTrunkGetRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:2384
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName enterpriseTrunkName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:2384
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $enterpriseTrunkName = null;

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

