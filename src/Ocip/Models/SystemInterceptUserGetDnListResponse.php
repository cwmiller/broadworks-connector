<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemInterceptUserGetDnListResponse
 *
 * Response to SystemInterceptUserGetDnListRequest.
 *           The Intercept User DN List.
 */
class SystemInterceptUserGetDnListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName interceptUserList
     * @var \CWM\BroadWorksConnector\Ocip\Models\InterceptDNListEntry[]
     */
    private $interceptUserList = array(
        
    );

    /**
     * Getter for interceptUserList
     *
     * @ElementName interceptUserList
     * @return \CWM\BroadWorksConnector\Ocip\Models\InterceptDNListEntry[]
     */
    public function getInterceptUserList()
    {
        return $this->interceptUserList;
    }

    /**
     * Setter for interceptUserList
     *
     * @ElementName interceptUserList
     * @param \CWM\BroadWorksConnector\Ocip\Models\InterceptDNListEntry[] $interceptUserList
     * @return $this
     */
    public function setInterceptUserList($interceptUserList)
    {
        $this->interceptUserList = $interceptUserList;
        return $this;
    }

    /**
     * Adder for interceptUserList
     *
     * @ElementName interceptUserList
     * @param \CWM\BroadWorksConnector\Ocip\Models\InterceptDNListEntry $interceptUserList
     * @return $this
     */
    public function addInterceptUserList($interceptUserList)
    {
        $this->interceptUserList []= $interceptUserList;
        return $this;
    }


}

