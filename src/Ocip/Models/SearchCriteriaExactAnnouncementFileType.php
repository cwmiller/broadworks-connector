<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactAnnouncementFileType
 *
 * Criteria for searching for a particular announcement file type.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:637","type":"sequence"}]
 */
class SearchCriteriaExactAnnouncementFileType extends SearchCriteria
{

    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileType
     * @Group f0ada2681ca347fa83b464734259b304:637
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileType|null
     */
    private $type = null;

    /**
     * Getter for type
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileType
     */
    public function getType()
    {
        return $this->type instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->type;
    }

    /**
     * Setter for type
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileType $type
     * @return $this
     */
    public function setType(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetType()
    {
        $this->type = null;
        return $this;
    }


}

