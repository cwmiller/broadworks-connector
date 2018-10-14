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
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $mediaTable = null;

    /**
     * Getter for mediaTable
     *
     * @ElementName mediaTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getMediaTable()
    {
        return $this->mediaTable;
    }

    /**
     * Setter for mediaTable
     *
     * @ElementName mediaTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $mediaTable
     * @return $this
     */
    public function setMediaTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $mediaTable)
    {
        $this->mediaTable = $mediaTable;
        return $this;
    }


}

