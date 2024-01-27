<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityDeleteMobileNetworkIMRNListRequest
 *
 * Remove BroadWorks Mobility IMRN numbers from a Mobile Network. 
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"9ae9f7d53e566e21347e23e20e2a2a39:726","type":"sequence"}]
 */
class SystemBroadWorksMobilityDeleteMobileNetworkIMRNListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName mobileNetworkName
     * @Type string
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:726
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $mobileNetworkName = null;

    /**
     * @ElementName imrnNumber
     * @Type string
     * @Array
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:726
     * @MinLength 1
     * @MaxLength 23
     * @var string[]
     */
    protected $imrnNumber = [
        
    ];

    /**
     * Getter for mobileNetworkName
     *
     * @return string
     */
    public function getMobileNetworkName()
    {
        return $this->mobileNetworkName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobileNetworkName;
    }

    /**
     * Setter for mobileNetworkName
     *
     * @param string $mobileNetworkName
     * @return $this
     */
    public function setMobileNetworkName($mobileNetworkName)
    {
        $this->mobileNetworkName = $mobileNetworkName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobileNetworkName()
    {
        $this->mobileNetworkName = null;
        return $this;
    }

    /**
     * Getter for imrnNumber
     *
     * @return string[]
     */
    public function getImrnNumber()
    {
        return $this->imrnNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->imrnNumber;
    }

    /**
     * Setter for imrnNumber
     *
     * @param string[] $imrnNumber
     * @return $this
     */
    public function setImrnNumber(array $imrnNumber)
    {
        $this->imrnNumber = $imrnNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetImrnNumber()
    {
        $this->imrnNumber = null;
        return $this;
    }

    /**
     * Adder for imrnNumber
     *
     * @param string $imrnNumber
     * @return $this
     */
    public function addImrnNumber(string $imrnNumber)
    {
        $this->imrnNumber[] = $imrnNumber;
        return $this;
    }
}

