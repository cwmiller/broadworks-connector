<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderExtensionLengthGetResponse
 *
 * Response to ServiceProviderExtensionLengthGetRequest.
 *
 * @see ServiceProviderExtensionLengthGetRequest
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:4158","type":"sequence"}]
 */
class ServiceProviderExtensionLengthGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultExtensionLength
     * @Type int
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4158
     * @MinInclusive 2
     * @MaxInclusive 20
     * @var int|null
     */
    private $defaultExtensionLength = null;

    /**
     * @ElementName locationRoutingPrefixDigit
     * @Type int
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4158
     * @MinInclusive 0
     * @MaxInclusive 9
     * @var int|null
     */
    private $locationRoutingPrefixDigit = null;

    /**
     * @ElementName locationCodeLength
     * @Type int
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4158
     * @MinInclusive 1
     * @MaxInclusive 15
     * @var int|null
     */
    private $locationCodeLength = null;

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

