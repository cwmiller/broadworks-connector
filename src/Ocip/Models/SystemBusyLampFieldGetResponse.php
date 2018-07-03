<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBusyLampFieldGetResponse
 *
 * Response to SystemBusyLampFieldGetRequest.
 *
 * @see SystemBusyLampFieldGetRequest
 */
class SystemBusyLampFieldGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName displayLocalUserIdentityLastNameFirst
     * @var bool|null
     */
    private $displayLocalUserIdentityLastNameFirst = null;

    /**
     * Getter for displayLocalUserIdentityLastNameFirst
     *
     * @ElementName displayLocalUserIdentityLastNameFirst
     * @return bool|null
     */
    public function getDisplayLocalUserIdentityLastNameFirst()
    {
        return $this->displayLocalUserIdentityLastNameFirst;
    }

    /**
     * Setter for displayLocalUserIdentityLastNameFirst
     *
     * @ElementName displayLocalUserIdentityLastNameFirst
     * @param bool|null $displayLocalUserIdentityLastNameFirst
     * @return $this
     */
    public function setDisplayLocalUserIdentityLastNameFirst($displayLocalUserIdentityLastNameFirst)
    {
        $this->displayLocalUserIdentityLastNameFirst = $displayLocalUserIdentityLastNameFirst;
        return $this;
    }


}

