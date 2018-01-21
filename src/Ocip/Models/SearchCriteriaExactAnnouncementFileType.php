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
     * @var string|null
     */
    private $type = null;

    /**
     * Getter for type
     *
     * @ElementName type
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Setter for type
     *
     * @ElementName type
     * @param string|null $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }


}

