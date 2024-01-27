<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNGetPolicyListResponse
 *
 * Response to EnterpriseVoiceVPNGetListResponse.
 *         Returns a 4 column table with column headings:
 *           "Location Code", "Min Extension Length", "Max Extension Length", "Location Selection".
 *
 * @see EnterpriseVoiceVPNGetListResponse
 * @Groups [{"id":"405ec18fe08719ecf74e749d7e18c88f:1105","type":"sequence"}]
 */
class EnterpriseVoiceVPNGetPolicyListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName locationList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 405ec18fe08719ecf74e749d7e18c88f:1105
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $locationList = null;

    /**
     * Getter for locationList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getLocationList()
    {
        return $this->locationList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->locationList;
    }

    /**
     * Setter for locationList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $locationList
     * @return $this
     */
    public function setLocationList(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $locationList)
    {
        $this->locationList = $locationList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLocationList()
    {
        $this->locationList = null;
        return $this;
    }
}

