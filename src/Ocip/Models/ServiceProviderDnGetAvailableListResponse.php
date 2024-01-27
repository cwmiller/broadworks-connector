<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDnGetAvailableListResponse
 *
 * Response to ServiceProviderDnGetAvailableListRequest.
 *         Contains a list of available DNs not yet assigned to any group.
 *
 * @see ServiceProviderDnGetAvailableListRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:3919","type":"sequence"}]
 */
class ServiceProviderDnGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName availableDn
     * @Type string
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:3919
     * @var string[]
     */
    protected $availableDn = [
        
    ];

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

