<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNGetPolicyListResponse
 *
 * Response to EnterpriseVoiceVPNGetListResponse.
 *         Returns a 4 column table with column headings:
 *           "Location Code", "Min Extension Length", "Max Extension Length",
 * "Location Selection".
 */
class EnterpriseVoiceVPNGetPolicyListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName locationList
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $locationList = null;

    /**
     * Getter for locationList
     *
     * @ElementName locationList
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getLocationList()
    {
        return $this->locationList;
    }

    /**
     * Setter for locationList
     *
     * @ElementName locationList
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $locationList
     * @return $this
     */
    public function setLocationList($locationList)
    {
        $this->locationList = $locationList;
        return $this;
    }


}

