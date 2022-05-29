<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDnGetAvailableListResponse
 *
 * Response to ServiceProviderDnGetAvailableListRequest.
 *         Contains a list of available DNs not yet assigned to any group.
 *
 * @see ServiceProviderDnGetAvailableListRequest
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:3841","type":"sequence"}]
 */
class ServiceProviderDnGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName availableDn
     * @Type string
     * @Array
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3841
     * @var string[]
     */
    protected $availableDn = array(
        
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

