<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactMediaFileType
 *
 * Criteria for searching for a particular media file type.
 *
 * @Groups [{"id":"e446bfcbd1f39cbef57d1547014f2bb9:902","type":"sequence"}]
 */
class SearchCriteriaExactMediaFileType extends SearchCriteria
{

    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Group e446bfcbd1f39cbef57d1547014f2bb9:902
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $type = null;

    /**
     * Getter for type
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getType()
    {
        return $this->type instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->type;
    }

    /**
     * Setter for type
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $type
     * @return $this
     */
    public function setType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $type)
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

