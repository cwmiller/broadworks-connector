<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemClassmarkGetListResponse
 *
 * Response to SystemClassmarkGetListRequest. 
 *         Contains a table of with the column headings: "Class Mark", "Value" and
 * "Web Display Key".
 *
 * @see SystemClassmarkGetListRequest
 */
class SystemClassmarkGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName classmarkTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $classmarkTable = null;

    /**
     * Getter for classmarkTable
     *
     * @ElementName classmarkTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getClassmarkTable()
    {
        return $this->classmarkTable;
    }

    /**
     * Setter for classmarkTable
     *
     * @ElementName classmarkTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $classmarkTable
     * @return $this
     */
    public function setClassmarkTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $classmarkTable)
    {
        $this->classmarkTable = $classmarkTable;
        return $this;
    }


}

