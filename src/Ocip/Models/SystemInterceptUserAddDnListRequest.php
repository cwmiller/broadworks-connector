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
 */
class SystemInterceptUserAddDnListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName interceptDNList
     * @var \CWM\BroadWorksConnector\Ocip\Models\InterceptDNListEntry[]
     */
    private $interceptDNList = array(
        
    );

    /**
     * Getter for interceptDNList
     *
     * @ElementName interceptDNList
     * @return \CWM\BroadWorksConnector\Ocip\Models\InterceptDNListEntry[]
     */
    public function getInterceptDNList()
    {
        return $this->interceptDNList;
    }

    /**
     * Setter for interceptDNList
     *
     * @ElementName interceptDNList
     * @param \CWM\BroadWorksConnector\Ocip\Models\InterceptDNListEntry[] $interceptDNList
     * @return $this
     */
    public function setInterceptDNList($interceptDNList)
    {
        $this->interceptDNList = $interceptDNList;
        return $this;
    }

    /**
     * Adder for interceptDNList
     *
     * @ElementName interceptDNList
     * @param \CWM\BroadWorksConnector\Ocip\Models\InterceptDNListEntry $interceptDNList
     * @return $this
     */
    public function addInterceptDNList($interceptDNList)
    {
        $this->interceptDNList []= $interceptDNList;
        return $this;
    }


}

