<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDialPlanPolicyGetAccessCodeRequest
 *
 * Request access code data associated with Service Provider level Dial Plan Policy access codes.
 *         The response is either a ServiceProviderDialPlanPolicyGetAccessCodeResponse or an ErrorResponse.
 *
 * @see ServiceProviderDialPlanPolicyGetAccessCodeResponse
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:3688","type":"sequence"}]
 */
class ServiceProviderDialPlanPolicyGetAccessCodeRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:3688
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName accessCode
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:3688
     * @MinLength 1
     * @MaxLength 5
     * @var string|null
     */
    protected $accessCode = null;

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
     * Getter for accessCode
     *
     * @return string
     */
    public function getAccessCode()
    {
        return $this->accessCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessCode;
    }

    /**
     * Setter for accessCode
     *
     * @param string $accessCode
     * @return $this
     */
    public function setAccessCode($accessCode)
    {
        $this->accessCode = $accessCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessCode()
    {
        $this->accessCode = null;
        return $this;
    }
}

