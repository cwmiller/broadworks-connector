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
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $flexibleSeatingHostTable = null;

    /**
     * Getter for flexibleSeatingHostTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getFlexibleSeatingHostTable()
    {
        return $this->flexibleSeatingHostTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->flexibleSeatingHostTable;
    }

    /**
     * Setter for flexibleSeatingHostTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $flexibleSeatingHostTable
     * @return $this
     */
    public function setFlexibleSeatingHostTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $flexibleSeatingHostTable)
    {
        $this->flexibleSeatingHostTable = $flexibleSeatingHostTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFlexibleSeatingHostTable()
    {
        $this->flexibleSeatingHostTable = null;
        return $this;
    }


}

