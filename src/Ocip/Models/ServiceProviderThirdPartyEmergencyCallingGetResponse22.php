<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderThirdPartyEmergencyCallingGetResponse22
 *
 * Response to the ServiceProviderThirdPartyEmergencyCallingGetRequest22.
 *         The response contains the third-party emergency call service settings for the service provider.
 *
 * @see ServiceProviderThirdPartyEmergencyCallingGetRequest22
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:7049","type":"sequence"}]
 */
class ServiceProviderThirdPartyEmergencyCallingGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName allowActivation
     * @Type bool
     * @Group e19a9072c2dad499e9f28837da5768db:7049
     * @var bool|null
     */
    protected $allowActivation = null;

    /**
     * @ElementName customerId
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:7049
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $customerId = null;

    /**
     * @ElementName hasGroupEnabled
     * @Type bool
     * @Group e19a9072c2dad499e9f28837da5768db:7049
     * @var bool|null
     */
    protected $hasGroupEnabled = null;

    /**
     * @ElementName secretKey
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:7049
     * @MinLength 1
     * @MaxLength 16
     * @var string|null
     */
    protected $secretKey = null;

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

    /**
     * Getter for secretKey
     *
     * @return string
     */
    public function getSecretKey()
    {
        return $this->secretKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->secretKey;
    }

    /**
     * Setter for secretKey
     *
     * @param string $secretKey
     * @return $this
     */
    public function setSecretKey($secretKey)
    {
        $this->secretKey = $secretKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecretKey()
    {
        $this->secretKey = null;
        return $this;
    }
}

