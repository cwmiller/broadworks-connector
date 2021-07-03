<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSystemServiceDnGetAvailableListResponse
 *
 * Response to SystemSystemServiceDnGetAvailableListRequest.
 *         Contains a list of available DNs not yet assigned to any instance of system service.
 *
 * @see SystemSystemServiceDnGetAvailableListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:18248","type":"sequence"}]
 */
class SystemSystemServiceDnGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName availableDn
     * @Type string
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18248
     * @MinLength 1
     * @MaxLength 23
     * @var string[]
     */
    private $availableDn = array(
        
    );

    /**
     * Getter for availableDn
     *
     * @return string[]
     */
    public function getAvailableDn()
    {
        return $this->availableDn instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->availableDn;
    }

    /**
     * Setter for availableDn
     *
     * @param string[] $availableDn
     * @return $this
     */
    public function setAvailableDn(array $availableDn)
    {
        $this->availableDn = $availableDn;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAvailableDn()
    {
        $this->availableDn = null;
        return $this;
    }

    /**
     * Adder for availableDn
     *
     * @param string $availableDn
     * @return $this
     */
    public function addAvailableDn(string $availableDn)
    {
        $this->availableDn[] = $availableDn;
        return $this;
    }


}

