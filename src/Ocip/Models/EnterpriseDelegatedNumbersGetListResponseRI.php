<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseDelegatedNumbersGetListResponseRI
 *
 * Response to EnterpriseDelegatedNumbersGetListResponseRI.
 *         Contains a list of delegated DNs for this Enterprise.
 *
 * @Groups [{"id":"405ec18fe08719ecf74e749d7e18c88f:211","type":"sequence"}]
 */
class EnterpriseDelegatedNumbersGetListResponseRI extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName delegatedDn
     * @Type string
     * @Array
     * @Optional
     * @Group 405ec18fe08719ecf74e749d7e18c88f:211
     * @var string[]
     */
    protected $delegatedDn = [
        
    ];

    /**
     * Getter for delegatedDn
     *
     * @return string[]
     */
    public function getDelegatedDn()
    {
        return $this->delegatedDn instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->delegatedDn;
    }

    /**
     * Setter for delegatedDn
     *
     * @param string[] $delegatedDn
     * @return $this
     */
    public function setDelegatedDn(array $delegatedDn)
    {
        $this->delegatedDn = $delegatedDn;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDelegatedDn()
    {
        $this->delegatedDn = null;
        return $this;
    }

    /**
     * Adder for delegatedDn
     *
     * @param string $delegatedDn
     * @return $this
     */
    public function addDelegatedDn(string $delegatedDn)
    {
        $this->delegatedDn[] = $delegatedDn;
        return $this;
    }
}

