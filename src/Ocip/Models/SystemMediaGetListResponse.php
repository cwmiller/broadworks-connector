<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaGetListResponse
 *
 * Response to SystemMediaGetListRequest. The column headings are
 *         "Media Name", "Codec", "Media Type", "Bandwidth Enforcement Type" and
 * "Bandwidth".
 *
 * @see SystemMediaGetListRequest
 */
class SystemMediaGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mediaTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $mediaTable = null;

    /**
     * Getter for mediaTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getMediaTable()
    {
        return $this->mediaTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaTable;
    }

    /**
     * Setter for mediaTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $mediaTable
     * @return $this
     */
    public function setMediaTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $mediaTable)
    {
        $this->mediaTable = $mediaTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaTable()
    {
        $this->mediaTable = null;
        return $this;
    }


}

