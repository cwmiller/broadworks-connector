<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityGetMobileNetworkIMRNListResponse
 *
 * Response to SystemBroadWorksMobilityGetMobileNetworkIMRNListRequest.
 *
 * @see SystemBroadWorksMobilityGetMobileNetworkIMRNListRequest
 * @Groups [{"id":"f7ae3539fd471e995b07dc1bf8836e2d:770","type":"sequence"}]
 */
class SystemBroadWorksMobilityGetMobileNetworkIMRNListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName imrnNumber
     * @Type string
     * @Array
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:770
     * @var string[]
     */
    private $imrnNumber = array(
        
    );

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

