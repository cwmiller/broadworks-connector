<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDnGetActivationListResponse
 *
 * Response to UserDnGetActivationListRequest.
 *         The response contains a table with columns: "Phone Number", and "Activated".
 *         The "Phone Number" column contains a single DN.
 *         The "Activated" column indicates if the phone number is activated or not.
 *
 * @see UserDnGetActivationListRequest
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:1704","type":"sequence"}]
 */
class UserDnGetActivationListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName dnTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1704
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $dnTable = null;

    /**
     * Getter for dnTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDnTable()
    {
        return $this->dnTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnTable;
    }

    /**
     * Setter for dnTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $dnTable
     * @return $this
     */
    public function setDnTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $dnTable)
    {
        $this->dnTable = $dnTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDnTable()
    {
        $this->dnTable = null;
        return $this;
    }
}

