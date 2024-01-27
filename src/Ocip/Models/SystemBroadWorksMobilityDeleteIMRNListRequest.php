<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityDeleteIMRNListRequest
 *
 * Removes a BroadWorks Mobility IMRN number from the system. 
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"9ae9f7d53e566e21347e23e20e2a2a39:710","type":"sequence"}]
 */
class SystemBroadWorksMobilityDeleteIMRNListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName imrnNumber
     * @Type string
     * @Array
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:710
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

