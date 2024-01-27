<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityGetMobileNetworkIMRNListResponse
 *
 * Response to SystemBroadWorksMobilityGetMobileNetworkIMRNListRequest.
 *
 * @see SystemBroadWorksMobilityGetMobileNetworkIMRNListRequest
 * @Groups [{"id":"9ae9f7d53e566e21347e23e20e2a2a39:1014","type":"sequence"}]
 */
class SystemBroadWorksMobilityGetMobileNetworkIMRNListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName imrnNumber
     * @Type string
     * @Array
     * @Optional
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:1014
     * @MinLength 1
     * @MaxLength 23
     * @var string[]
     */
    protected $imrnNumber = [
        
    ];

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

