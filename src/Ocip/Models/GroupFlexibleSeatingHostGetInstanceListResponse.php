<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFlexibleSeatingHostGetInstanceListResponse
 *
 * Response to the GroupFlexibleSeatingHostGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Department",
 * "Is Active".
 *         The column value for "Is Active" can either be true, or false.
 *
 * @see GroupFlexibleSeatingHostGetInstanceListRequest
 */
class GroupFlexibleSeatingHostGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName flexibleSeatingHostTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $flexibleSeatingHostTable = null;

    /**
     * Getter for flexibleSeatingHostTable
     *
     * @ElementName flexibleSeatingHostTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getFlexibleSeatingHostTable()
    {
        return $this->flexibleSeatingHostTable;
    }

    /**
     * Setter for flexibleSeatingHostTable
     *
     * @ElementName flexibleSeatingHostTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $flexibleSeatingHostTable
     * @return $this
     */
    public function setFlexibleSeatingHostTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $flexibleSeatingHostTable)
    {
        $this->flexibleSeatingHostTable = $flexibleSeatingHostTable;
        return $this;
    }


}

