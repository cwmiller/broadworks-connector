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
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $callingPartyCategoryTable = null;

    /**
     * Getter for callingPartyCategoryTable
     *
     * @ElementName callingPartyCategoryTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getCallingPartyCategoryTable()
    {
        return $this->callingPartyCategoryTable;
    }

    /**
     * Setter for callingPartyCategoryTable
     *
     * @ElementName callingPartyCategoryTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $callingPartyCategoryTable
     * @return $this
     */
    public function setCallingPartyCategoryTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $callingPartyCategoryTable)
    {
        $this->callingPartyCategoryTable = $callingPartyCategoryTable;
        return $this;
    }


}

