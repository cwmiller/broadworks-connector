<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderExtensionLengthGetResponse
 *
 * Response to ServiceProviderExtensionLengthGetRequest.
 *
 * @see ServiceProviderExtensionLengthGetRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:4235","type":"sequence"}]
 */
class ServiceProviderExtensionLengthGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName defaultExtensionLength
     * @Type int
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:4235
     * @MinInclusive 2
     * @MaxInclusive 20
     * @var int|null
     */
    protected $defaultExtensionLength = null;

    /**
     * @ElementName locationRoutingPrefixDigit
     * @Type int
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:4235
     * @MinInclusive 0
     * @MaxInclusive 9
     * @var int|null
     */
    protected $locationRoutingPrefixDigit = null;

    /**
     * @ElementName locationCodeLength
     * @Type int
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:4235
     * @MinInclusive 1
     * @MaxInclusive 15
     * @var int|null
     */
    protected $locationCodeLength = null;

    /**
     * Getter for defaultExtensionLength
     *
     * @return int
     */
    public function getDefaultExtensionLength()
    {
        return $this->defaultExtensionLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultExtensionLength;
    }

    /**
     * Setter for defaultExtensionLength
     *
     * @param int $defaultExtensionLength
     * @return $this
     */
    public function setDefaultExtensionLength($defaultExtensionLength)
    {
        $this->defaultExtensionLength = $defaultExtensionLength;
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
     * @return int
     */
    public function getLocationRoutingPrefixDigit()
    {
        return $this->locationRoutingPrefixDigit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->locationRoutingPrefixDigit;
    }

    /**
     * Setter for locationRoutingPrefixDigit
     *
     * @param int $locationRoutingPrefixDigit
     * @return $this
     */
    public function setLocationRoutingPrefixDigit($locationRoutingPrefixDigit)
    {
        $this->locationRoutingPrefixDigit = $locationRoutingPrefixDigit;
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
     * @return int
     */
    public function getLocationCodeLength()
    {
        return $this->locationCodeLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->locationCodeLength;
    }

    /**
     * Setter for locationCodeLength
     *
     * @param int $locationCodeLength
     * @return $this
     */
    public function setLocationCodeLength($locationCodeLength)
    {
        $this->locationCodeLength = $locationCodeLength;
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

