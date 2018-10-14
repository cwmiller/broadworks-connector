<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactMediaFileType
 *
 * Criteria for searching for a particular media file type.
 */
class SearchCriteriaExactMediaFileType extends SearchCriteria
{

    /**
     * @ElementName type
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $type = null;

    /**
     * Getter for type
     *
     * @ElementName type
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Setter for type
     *
     * @ElementName type
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null $type
     * @return $this
     */
    public function setType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $type)
    {
        $this->type = $type;
        return $this;
    }


}

