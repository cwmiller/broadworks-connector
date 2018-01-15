<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalAssistantExclusionNumberGetListResponse
 *
 * Response to the UserPersonalAssistantExclusionNumberGetListRequest.
 *         Contains a table with column headings:
 *         "Number", "Description".
 */
class UserPersonalAssistantExclusionNumberGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName exclusionNumberTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $exclusionNumberTable = null;

    /**
     * Getter for exclusionNumberTable
     *
     * @ElementName exclusionNumberTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getExclusionNumberTable()
    {
        return $this->exclusionNumberTable;
    }

    /**
     * Setter for exclusionNumberTable
     *
     * @ElementName exclusionNumberTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $exclusionNumberTable
     * @return $this
     */
    public function setExclusionNumberTable($exclusionNumberTable)
    {
        $this->exclusionNumberTable = $exclusionNumberTable;
        return $this;
    }


}

