<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupInstantGroupCallGetInstanceListResponse
 *
 * Response to the GroupInstantGroupCallGetInstanceListRequest.
 *         Contains a 6 column table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Department",
 * "Is Active".
 *         The column values for Is Active can either be true, or false.
 *
 * @see GroupInstantGroupCallGetInstanceListRequest
 */
class GroupInstantGroupCallGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName instantGroupCallTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $instantGroupCallTable = null;

    /**
     * Getter for instantGroupCallTable
     *
     * @ElementName instantGroupCallTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getInstantGroupCallTable()
    {
        return $this->instantGroupCallTable;
    }

    /**
     * Setter for instantGroupCallTable
     *
     * @ElementName instantGroupCallTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $instantGroupCallTable
     * @return $this
     */
    public function setInstantGroupCallTable($instantGroupCallTable)
    {
        $this->instantGroupCallTable = $instantGroupCallTable;
        return $this;
    }


}

