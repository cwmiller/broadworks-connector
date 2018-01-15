<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityGetIMRNListResponse
 *
 * Response to SystemBroadWorksMobilityDnGetListRequest.
 */
class SystemBroadWorksMobilityGetIMRNListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName imrnNumber
     * @var string[]
     */
    private $imrnNumber = array(
        
    );

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

