<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDnGetActivationListResponse
 *
 * Response to the GroupDnGetActivationListRequest.
 *         The response contains a table with columns: "Phone Numbers", and
 * "Activated".  ".  Phone Numbers are only returned if assigned to a user.
 *         The "Phone Numbers" column contains either a single DN or a range of
 * DNs.
 *         The "Activated" column indicates if the phone number(s) are activated or
 * not.
 *
 * @see GroupDnGetActivationListRequest
 */
class GroupDnGetActivationListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName dnTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $dnTable = null;

    /**
     * Getter for dnTable
     *
     * @ElementName dnTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getDnTable()
    {
        return $this->dnTable;
    }

    /**
     * Setter for dnTable
     *
     * @ElementName dnTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $dnTable
     * @return $this
     */
    public function setDnTable($dnTable)
    {
        $this->dnTable = $dnTable;
        return $this;
    }


}

