<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemInterceptUserGetDnListResponse
 *
 * Response to SystemInterceptUserGetDnListRequest.
 *           The Intercept User DN List.
 *
 * @see SystemInterceptUserGetDnListRequest
 * @Groups [{"id":"2a762bb9361e88044885b796c1d6b979:190","type":"sequence"}]
 */
class SystemInterceptUserGetDnListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName interceptUserList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\InterceptDNListEntry
     * @Array
     * @Optional
     * @Group 2a762bb9361e88044885b796c1d6b979:190
     * @var \CWM\BroadWorksConnector\Ocip\Models\InterceptDNListEntry[]
     */
    protected $interceptUserList = [
        
    ];

    /**
     * Getter for interceptUserList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\InterceptDNListEntry[]
     */
    public function getInterceptUserList()
    {
        return $this->interceptUserList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->interceptUserList;
    }

    /**
     * Setter for interceptUserList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\InterceptDNListEntry[] $interceptUserList
     * @return $this
     */
    public function setInterceptUserList(array $interceptUserList)
    {
        $this->interceptUserList = $interceptUserList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInterceptUserList()
    {
        $this->interceptUserList = null;
        return $this;
    }

    /**
     * Adder for interceptUserList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\InterceptDNListEntry $interceptUserList
     * @return $this
     */
    public function addInterceptUserList($interceptUserList)
    {
        $this->interceptUserList[] = $interceptUserList;
        return $this;
    }
}

