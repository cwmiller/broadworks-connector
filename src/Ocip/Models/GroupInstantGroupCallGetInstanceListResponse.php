<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupInstantGroupCallGetInstanceListResponse
 *
 * Response to the GroupInstantGroupCallGetInstanceListRequest.
 *         Contains a 6 column table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Department", "Is Active".
 *         The column values for Is Active can either be true, or false.
 *
 * @see GroupInstantGroupCallGetInstanceListRequest
 * @Groups [{"id":"f41dea4708922d4a3f0e26f198cc953f:106","type":"sequence"}]
 */
class GroupInstantGroupCallGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName instantGroupCallTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f41dea4708922d4a3f0e26f198cc953f:106
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $instantGroupCallTable = null;

    /**
     * Getter for instantGroupCallTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getInstantGroupCallTable()
    {
        return $this->instantGroupCallTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->instantGroupCallTable;
    }

    /**
     * Setter for instantGroupCallTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $instantGroupCallTable
     * @return $this
     */
    public function setInstantGroupCallTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $instantGroupCallTable)
    {
        $this->instantGroupCallTable = $instantGroupCallTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInstantGroupCallTable()
    {
        $this->instantGroupCallTable = null;
        return $this;
    }


}

