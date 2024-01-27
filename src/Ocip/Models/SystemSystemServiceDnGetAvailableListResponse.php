<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSystemServiceDnGetAvailableListResponse
 *
 * Response to SystemSystemServiceDnGetAvailableListRequest.
 *         Contains a list of available DNs not yet assigned to any instance of system service.
 *
 * @see SystemSystemServiceDnGetAvailableListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:18482","type":"sequence"}]
 */
class SystemSystemServiceDnGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName availableDn
     * @Type string
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:18482
     * @MinLength 1
     * @MaxLength 23
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

