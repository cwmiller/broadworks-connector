<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaGetListResponse
 *
 * Response to SystemMediaGetListRequest. The column headings are
 *         "Media Name", "Codec", "Media Type", "Bandwidth Enforcement Type" and "Bandwidth".
 *
 * @see SystemMediaGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:10212","type":"sequence"}]
 */
class SystemMediaGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mediaTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:10212
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

