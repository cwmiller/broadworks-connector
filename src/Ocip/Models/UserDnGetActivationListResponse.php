<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDnGetActivationListResponse
 *
 * Response to UserDnGetActivationListRequest.
 *         The response contains a table with columns: "Phone Number", and
 * "Activated".
 *         The "Phone Number" column contains a single DN.
 *         The "Activated" column indicates if the phone number is activated or
 * not.
 */
class UserDnGetActivationListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

