<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSystemServiceDnGetAvailableListResponse
 *
 * Response to SystemSystemServiceDnGetAvailableListRequest.
 *         Contains a list of available DNs not yet assigned to any instance of system service.
 *
 * @see SystemSystemServiceDnGetAvailableListRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:16120","type":"sequence"}]
 */
class SystemSystemServiceDnGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName availableDn
     * @Type string
     * @Array
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:16120
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

