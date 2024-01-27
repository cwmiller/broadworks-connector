<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityAddMobileNetworkIMRNListRequest
 *
 * Adds BroadWorks Mobility IMRN numbers to a Mobile Network. It is possible to add either: 
 *         a single number, a list of numbers, or a range of numbers, or any combination thereof.
 *         The response is either a SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"9ae9f7d53e566e21347e23e20e2a2a39:692","type":"sequence"}]
 */
class SystemBroadWorksMobilityAddMobileNetworkIMRNListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName mobileNetworkName
     * @Type string
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:692
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $mobileNetworkName = null;

    /**
     * @ElementName imrnNumber
     * @Type string
     * @Array
     * @Optional
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:692
     * @MinLength 1
     * @MaxLength 23
     * @var string[]
     */
    protected $imrnNumber = [
        
    ];

    /**
     * @ElementName numberRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DNRange
     * @Array
     * @Optional
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:692
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNRange[]
     */
    protected $numberRange = [
        
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

    /**
     * Getter for numberRange
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNRange[]
     */
    public function getNumberRange()
    {
        return $this->numberRange instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberRange;
    }

    /**
     * Setter for numberRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNRange[] $numberRange
     * @return $this
     */
    public function setNumberRange(array $numberRange)
    {
        $this->numberRange = $numberRange;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberRange()
    {
        $this->numberRange = null;
        return $this;
    }

    /**
     * Adder for numberRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNRange $numberRange
     * @return $this
     */
    public function addNumberRange($numberRange)
    {
        $this->numberRange[] = $numberRange;
        return $this;
    }
}

