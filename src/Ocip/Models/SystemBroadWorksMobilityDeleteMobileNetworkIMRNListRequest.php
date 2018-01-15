<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityDeleteMobileNetworkIMRNListRequest
 *
 * Remove BroadWorks Mobility IMRN numbers from a Mobile Network. 
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemBroadWorksMobilityDeleteMobileNetworkIMRNListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName mobileNetworkName
     * @var string|null
     */
    private $mobileNetworkName = null;

    /**
     * @ElementName imrnNumber
     * @var string[]
     */
    private $imrnNumber = array(
        
    );

    /**
     * Getter for mobileNetworkName
     *
     * @ElementName mobileNetworkName
     * @return string|null
     */
    public function getMobileNetworkName()
    {
        return $this->mobileNetworkName;
    }

    /**
     * Setter for mobileNetworkName
     *
     * @ElementName mobileNetworkName
     * @param string|null $mobileNetworkName
     * @return $this
     */
    public function setMobileNetworkName($mobileNetworkName)
    {
        $this->mobileNetworkName = $mobileNetworkName;
        return $this;
    }

    /**
     * Getter for imrnNumber
     *
     * @ElementName imrnNumber
     * @return string[]
     */
    public function getImrnNumber()
    {
        return $this->imrnNumber;
    }

    /**
     * Setter for imrnNumber
     *
     * @ElementName imrnNumber
     * @param string[] $imrnNumber
     * @return $this
     */
    public function setImrnNumber($imrnNumber)
    {
        $this->imrnNumber = $imrnNumber;
        return $this;
    }

    /**
     * Adder for imrnNumber
     *
     * @ElementName imrnNumber
     * @param string $imrnNumber
     * @return $this
     */
    public function addImrnNumber($imrnNumber)
    {
        $this->imrnNumber []= $imrnNumber;
        return $this;
    }


}

