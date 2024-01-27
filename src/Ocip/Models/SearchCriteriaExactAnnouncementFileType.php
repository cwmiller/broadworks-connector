<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactAnnouncementFileType
 *
 * Criteria for searching for a particular announcement file type.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:730","type":"sequence"}]
 */
class SearchCriteriaExactAnnouncementFileType extends SearchCriteria
{
    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileType
     * @Group 972fbf832439609ec8f2765c5637c3f1:730
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileType|null
     */
    protected $type = null;

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

