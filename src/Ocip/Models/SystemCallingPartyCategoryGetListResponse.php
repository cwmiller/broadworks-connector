<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallingPartyCategoryGetListResponse
 *
 * Response to SystemCallingPartyCategoryGetListRequest.
 *         Contains a table of Calling Party Category defined in system.
 *         The column headings are: "Category Name", "User Category", "Collect
 * Call", "Default" and "Web Display Key".
 *
 * @see SystemCallingPartyCategoryGetListRequest
 */
class SystemCallingPartyCategoryGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName callingPartyCategoryTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $callingPartyCategoryTable = null;

    /**
     * Getter for callingPartyCategoryTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getCallingPartyCategoryTable()
    {
        return $this->callingPartyCategoryTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingPartyCategoryTable;
    }

    /**
     * Setter for callingPartyCategoryTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $callingPartyCategoryTable
     * @return $this
     */
    public function setCallingPartyCategoryTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $callingPartyCategoryTable)
    {
        $this->callingPartyCategoryTable = $callingPartyCategoryTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingPartyCategoryTable()
    {
        $this->callingPartyCategoryTable = null;
        return $this;
    }


}

