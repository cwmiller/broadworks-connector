<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityAddMobileNetworkIMRNListRequest
 *
 * Adds BroadWorks Mobility IMRN numbers to a Mobile Network. It is possible to add
 * either: 
 *         a single number, a list of numbers, or a range of numbers, or any
 * combination thereof.
 *         The response is either a SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemBroadWorksMobilityAddMobileNetworkIMRNListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName numberRange
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNRange[]
     */
    private $numberRange = array(
        
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

    /**
     * Getter for numberRange
     *
     * @ElementName numberRange
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNRange[]
     */
    public function getNumberRange()
    {
        return $this->numberRange;
    }

    /**
     * Setter for numberRange
     *
     * @ElementName numberRange
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNRange[] $numberRange
     * @return $this
     */
    public function setNumberRange($numberRange)
    {
        $this->numberRange = $numberRange;
        return $this;
    }

    /**
     * Adder for numberRange
     *
     * @ElementName numberRange
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNRange $numberRange
     * @return $this
     */
    public function addNumberRange($numberRange)
    {
        $this->numberRange []= $numberRange;
        return $this;
    }


}

