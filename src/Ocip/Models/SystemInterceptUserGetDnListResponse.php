<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemInterceptUserGetDnListResponse
 *
 * Response to SystemInterceptUserGetDnListRequest.
 *           The Intercept User DN List.
 *
 * @see SystemInterceptUserGetDnListRequest
 * @Groups [{"id":"88893c72abbbb9aaf5aecca970191d94:190","type":"sequence"}]
 */
class SystemInterceptUserGetDnListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName interceptUserList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\InterceptDNListEntry
     * @Array
     * @Optional
     * @Group 88893c72abbbb9aaf5aecca970191d94:190
     * @var \CWM\BroadWorksConnector\Ocip\Models\InterceptDNListEntry[]
     */
    private $interceptUserList = array(
        
    );

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

