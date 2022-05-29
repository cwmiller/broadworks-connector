<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDnGetActivationListResponse
 *
 * Response to the GroupDnGetActivationListRequest.
 *         The response contains a table with columns: "Phone Numbers", and "Activated".  ".  Phone Numbers are only returned if assigned to a user.
 *         The "Phone Numbers" column contains either a single DN or a range of DNs.
 *         The "Activated" column indicates if the phone number(s) are activated or not.
 *
 * @see GroupDnGetActivationListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:5022","type":"sequence"}]
 */
class GroupDnGetActivationListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName dnTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f3a93cf15de4abd7903673e44ee3e07b:5022
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

