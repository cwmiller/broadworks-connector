<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderExtensionLengthModifyRequest
 *
 * Modify the service provider's extension length range.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:4176","type":"sequence"}]
 */
class ServiceProviderExtensionLengthModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4176
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName defaultExtensionLength
     * @Type int
     * @Nillable
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4176
     * @MinInclusive 2
     * @MaxInclusive 20
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $defaultExtensionLength = null;

    /**
     * @ElementName locationRoutingPrefixDigit
     * @Type int
     * @Nillable
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4176
     * @MinInclusive 0
     * @MaxInclusive 9
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $locationRoutingPrefixDigit = null;

    /**
     * @ElementName locationCodeLength
     * @Type int
     * @Nillable
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4176
     * @MinInclusive 1
     * @MaxInclusive 15
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $locationCodeLength = null;

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
     * Getter for defaultExtensionLength
     *
     * @return int|null
     */
    public function getDefaultExtensionLength()
    {
        return $this->defaultExtensionLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultExtensionLength;
    }

    /**
     * Setter for defaultExtensionLength
     *
     * @param int|null $defaultExtensionLength
     * @return $this
     */
    public function setDefaultExtensionLength($defaultExtensionLength = null)
    {
        if ($defaultExtensionLength === null) {
            $this->defaultExtensionLength = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->defaultExtensionLength = $defaultExtensionLength;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultExtensionLength()
    {
        $this->defaultExtensionLength = null;
        return $this;
    }

    /**
     * Getter for locationRoutingPrefixDigit
     *
     * @return int|null
     */
    public function getLocationRoutingPrefixDigit()
    {
        return $this->locationRoutingPrefixDigit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->locationRoutingPrefixDigit;
    }

    /**
     * Setter for locationRoutingPrefixDigit
     *
     * @param int|null $locationRoutingPrefixDigit
     * @return $this
     */
    public function setLocationRoutingPrefixDigit($locationRoutingPrefixDigit = null)
    {
        if ($locationRoutingPrefixDigit === null) {
            $this->locationRoutingPrefixDigit = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->locationRoutingPrefixDigit = $locationRoutingPrefixDigit;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLocationRoutingPrefixDigit()
    {
        $this->locationRoutingPrefixDigit = null;
        return $this;
    }

    /**
     * Getter for locationCodeLength
     *
     * @return int|null
     */
    public function getLocationCodeLength()
    {
        return $this->locationCodeLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->locationCodeLength;
    }

    /**
     * Setter for locationCodeLength
     *
     * @param int|null $locationCodeLength
     * @return $this
     */
    public function setLocationCodeLength($locationCodeLength = null)
    {
        if ($locationCodeLength === null) {
            $this->locationCodeLength = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->locationCodeLength = $locationCodeLength;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLocationCodeLength()
    {
        $this->locationCodeLength = null;
        return $this;
    }


}

