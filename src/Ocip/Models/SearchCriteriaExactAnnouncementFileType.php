<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactAnnouncementFileType
 *
 * Criteria for searching for a particular announcement file type.
 */
class SearchCriteriaExactAnnouncementFileType extends SearchCriteria
{

    /**
     * @ElementName type
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileType|null
     */
    private $type = null;

    /**
     * Getter for type
     *
     * @ElementName type
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileType|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Setter for type
     *
     * @ElementName type
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileType|null $type
     * @return $this
     */
    public function setType(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileType $type)
    {
        $this->type = $type;
        return $this;
    }


}

