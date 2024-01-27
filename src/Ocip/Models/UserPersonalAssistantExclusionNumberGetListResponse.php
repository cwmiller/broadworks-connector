<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalAssistantExclusionNumberGetListResponse
 *
 * Response to the UserPersonalAssistantExclusionNumberGetListRequest.
 *         Contains a table with column headings:
 *         "Number", "Description".
 *
 * @see UserPersonalAssistantExclusionNumberGetListRequest
 * @Groups [{"id":"6bd221784ebf8af2fe1169d36a6ac2dd:287","type":"sequence"}]
 */
class UserPersonalAssistantExclusionNumberGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName exclusionNumberTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:287
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $exclusionNumberTable = null;

    /**
     * Getter for exclusionNumberTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getExclusionNumberTable()
    {
        return $this->exclusionNumberTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->exclusionNumberTable;
    }

    /**
     * Setter for exclusionNumberTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $exclusionNumberTable
     * @return $this
     */
    public function setExclusionNumberTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $exclusionNumberTable)
    {
        $this->exclusionNumberTable = $exclusionNumberTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExclusionNumberTable()
    {
        $this->exclusionNumberTable = null;
        return $this;
    }
}

