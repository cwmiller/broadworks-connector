<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderThirdPartyEmergencyCallingGetResponse
 *
 * Response to the ServiceProviderThirdPartyEmergencyCallingGetRequest.
 *         The response contains the third-party emergency call service settings for the service provider.
 *
 * @see ServiceProviderThirdPartyEmergencyCallingGetRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:19809","type":"sequence"}]
 */
class ServiceProviderThirdPartyEmergencyCallingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName allowActivation
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:19809
     * @var bool|null
     */
    protected $allowActivation = null;

    /**
     * @ElementName customerId
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:19809
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $customerId = null;

    /**
     * @ElementName hasGroupEnabled
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:19809
     * @var bool|null
     */
    protected $hasGroupEnabled = null;

    /**
     * Getter for allowActivation
     *
     * @return bool
     */
    public function getAllowActivation()
    {
        return $this->allowActivation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowActivation;
    }

    /**
     * Setter for allowActivation
     *
     * @param bool $allowActivation
     * @return $this
     */
    public function setAllowActivation($allowActivation)
    {
        $this->allowActivation = $allowActivation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowActivation()
    {
        $this->allowActivation = null;
        return $this;
    }

    /**
     * Getter for customerId
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->customerId;
    }

    /**
     * Setter for customerId
     *
     * @param string $customerId
     * @return $this
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCustomerId()
    {
        $this->customerId = null;
        return $this;
    }

    /**
     * Getter for hasGroupEnabled
     *
     * @return bool
     */
    public function getHasGroupEnabled()
    {
        return $this->hasGroupEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hasGroupEnabled;
    }

    /**
     * Setter for hasGroupEnabled
     *
     * @param bool $hasGroupEnabled
     * @return $this
     */
    public function setHasGroupEnabled($hasGroupEnabled)
    {
        $this->hasGroupEnabled = $hasGroupEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHasGroupEnabled()
    {
        $this->hasGroupEnabled = null;
        return $this;
    }
}

