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
 * @Groups [{"id":"c6760dd4e8dfb4aeba3a11bfab1c6524:234","type":"sequence"}]
 */
class UserPersonalAssistantExclusionNumberGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName exclusionNumberTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group c6760dd4e8dfb4aeba3a11bfab1c6524:234
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $exclusionNumberTable = null;

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

