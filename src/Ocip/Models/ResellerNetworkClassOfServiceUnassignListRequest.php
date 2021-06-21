<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerNetworkClassOfServiceUnassignListRequest
 *
 * Unassign a list of Network Classes of Service from a reseller.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b009175f2a2a9d38115e319a6ad64d7f:795","type":"sequence"}]
 */
class ResellerNetworkClassOfServiceUnassignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group b009175f2a2a9d38115e319a6ad64d7f:795
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    private $resellerId = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Array
     * @Optional
     * @Group b009175f2a2a9d38115e319a6ad64d7f:795
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    private $networkClassOfService = array(
        
    );

    /**
     * @ElementName defaultNetworkClassOfService
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DefaultNetworkClassOfService
     * @Nillable
     * @Optional
     * @Group b009175f2a2a9d38115e319a6ad64d7f:795
     * @var \CWM\BroadWorksConnector\Ocip\Models\DefaultNetworkClassOfService|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $defaultNetworkClassOfService = null;

    /**
     * Getter for resellerId
     *
     * @return string
     */
    public function getResellerId()
    {
        return $this->resellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @param string $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerId()
    {
        $this->resellerId = null;
        return $this;
    }

    /**
     * Getter for networkClassOfService
     *
     * @return string[]
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @param string[] $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService(array $networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkClassOfService()
    {
        $this->networkClassOfService = null;
        return $this;
    }

    /**
     * Adder for networkClassOfService
     *
     * @param string $networkClassOfService
     * @return $this
     */
    public function addNetworkClassOfService(string $networkClassOfService)
    {
        $this->networkClassOfService[] = $networkClassOfService;
        return $this;
    }

    /**
     * Getter for defaultNetworkClassOfService
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DefaultNetworkClassOfService|null
     */
    public function getDefaultNetworkClassOfService()
    {
        return $this->defaultNetworkClassOfService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultNetworkClassOfService;
    }

    /**
     * Setter for defaultNetworkClassOfService
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DefaultNetworkClassOfService|null $defaultNetworkClassOfService
     * @return $this
     */
    public function setDefaultNetworkClassOfService(\CWM\BroadWorksConnector\Ocip\Models\DefaultNetworkClassOfService $defaultNetworkClassOfService = null)
    {
        if ($defaultNetworkClassOfService === null) {
            $this->defaultNetworkClassOfService = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->defaultNetworkClassOfService = $defaultNetworkClassOfService;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultNetworkClassOfService()
    {
        $this->defaultNetworkClassOfService = null;
        return $this;
    }


}

