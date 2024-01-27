<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBusyLampFieldGetResponse
 *
 * Response to SystemBusyLampFieldGetRequest.
 *
 * @see SystemBusyLampFieldGetRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:21309","type":"sequence"}]
 */
class SystemBusyLampFieldGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName displayLocalUserIdentityLastNameFirst
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:21309
     * @var bool|null
     */
    protected $displayLocalUserIdentityLastNameFirst = null;

    /**
     * Getter for displayLocalUserIdentityLastNameFirst
     *
     * @return bool
     */
    public function getDisplayLocalUserIdentityLastNameFirst()
    {
        return $this->displayLocalUserIdentityLastNameFirst instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->displayLocalUserIdentityLastNameFirst;
    }

    /**
     * Setter for displayLocalUserIdentityLastNameFirst
     *
     * @param bool $displayLocalUserIdentityLastNameFirst
     * @return $this
     */
    public function setDisplayLocalUserIdentityLastNameFirst($displayLocalUserIdentityLastNameFirst)
    {
        $this->displayLocalUserIdentityLastNameFirst = $displayLocalUserIdentityLastNameFirst;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisplayLocalUserIdentityLastNameFirst()
    {
        $this->displayLocalUserIdentityLastNameFirst = null;
        return $this;
    }
}

