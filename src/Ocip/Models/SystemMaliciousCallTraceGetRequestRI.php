<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMaliciousCallTraceGetRequestRI
 *
 * Get Malicious Call Trace system parameters and the list of users that use the 
 *         Malicious Call Trace feature.
 *         The response is either a SystemMaliciousCallTraceGetResponseRI or 
 *         an ErrorResponse.
 *
 * @see ErrorResponse
 * @Groups [{"id":"be7f3162f133f8d7fcc75e712b0258e6:103","type":"sequence"}]
 */
class SystemMaliciousCallTraceGetRequestRI extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName skipUserList
     * @Type bool
     * @Optional
     * @Group be7f3162f133f8d7fcc75e712b0258e6:103
     * @var bool|null
     */
    protected $skipUserList = null;

    /**
     * Getter for skipUserList
     *
     * @return bool
     */
    public function getSkipUserList()
    {
        return $this->skipUserList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->skipUserList;
    }

    /**
     * Setter for skipUserList
     *
     * @param bool $skipUserList
     * @return $this
     */
    public function setSkipUserList($skipUserList)
    {
        $this->skipUserList = $skipUserList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSkipUserList()
    {
        $this->skipUserList = null;
        return $this;
    }
}

