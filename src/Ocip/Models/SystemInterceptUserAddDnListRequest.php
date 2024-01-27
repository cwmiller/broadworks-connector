<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemInterceptUserAddDnListRequest
 *
 * Request to add an Intercept User number(s) to the system.
 *           The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"2a762bb9361e88044885b796c1d6b979:143","type":"sequence"}]
 */
class SystemInterceptUserAddDnListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName interceptDNList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\InterceptDNListEntry
     * @Array
     * @Group 2a762bb9361e88044885b796c1d6b979:143
     * @var \CWM\BroadWorksConnector\Ocip\Models\InterceptDNListEntry[]
     */
    protected $interceptDNList = [
        
    ];

    /**
     * Getter for interceptDNList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\InterceptDNListEntry[]
     */
    public function getInterceptDNList()
    {
        return $this->interceptDNList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->interceptDNList;
    }

    /**
     * Setter for interceptDNList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\InterceptDNListEntry[] $interceptDNList
     * @return $this
     */
    public function setInterceptDNList(array $interceptDNList)
    {
        $this->interceptDNList = $interceptDNList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInterceptDNList()
    {
        $this->interceptDNList = null;
        return $this;
    }

    /**
     * Adder for interceptDNList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\InterceptDNListEntry $interceptDNList
     * @return $this
     */
    public function addInterceptDNList($interceptDNList)
    {
        $this->interceptDNList[] = $interceptDNList;
        return $this;
    }
}

