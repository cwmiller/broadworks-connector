<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemClassmarkGetListResponse
 *
 * Response to SystemClassmarkGetListRequest. 
 *         Contains a table of with the column headings: "Class Mark", "Value" and "Web Display Key".
 *
 * @see SystemClassmarkGetListRequest
 * @Groups [{"id":"cab89edc38c11aa1d780290f00d72d0c:95","type":"sequence"}]
 */
class SystemClassmarkGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName classmarkTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group cab89edc38c11aa1d780290f00d72d0c:95
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $classmarkTable = null;

    /**
     * Getter for classmarkTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getClassmarkTable()
    {
        return $this->classmarkTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->classmarkTable;
    }

    /**
     * Setter for classmarkTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $classmarkTable
     * @return $this
     */
    public function setClassmarkTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $classmarkTable)
    {
        $this->classmarkTable = $classmarkTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetClassmarkTable()
    {
        $this->classmarkTable = null;
        return $this;
    }


}

