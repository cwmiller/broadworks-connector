<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSystemServiceDnGetAvailableListResponse
 *
 * Response to SystemSystemServiceDnGetAvailableListRequest.
 *         Contains a list of available DNs not yet assigned to any instance of
 * system service.
 */
class SystemSystemServiceDnGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName availableDn
     * @var string[]
     */
    private $availableDn = array(
        
    );

    /**
     * Getter for availableDn
     *
     * @ElementName availableDn
     * @return string[]
     */
    public function getAvailableDn()
    {
        return $this->availableDn;
    }

    /**
     * Setter for availableDn
     *
     * @ElementName availableDn
     * @param string[] $availableDn
     * @return $this
     */
    public function setAvailableDn($availableDn)
    {
        $this->availableDn = $availableDn;
        return $this;
    }

    /**
     * Adder for availableDn
     *
     * @ElementName availableDn
     * @param string $availableDn
     * @return $this
     */
    public function addAvailableDn($availableDn)
    {
        $this->availableDn []= $availableDn;
        return $this;
    }


}

