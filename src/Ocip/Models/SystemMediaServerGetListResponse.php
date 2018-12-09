<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaServerGetListResponse
 *
 * Response to SystemMediaServerGetListRequest. The Media Server table column
 *         headings are: "Net Address", "Port", "Transport", "Description".
 *
 * @see SystemMediaServerGetListRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:10310","type":"sequence"}]
 */
class SystemMediaServerGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mediaServerTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b5f5416d9e71f8e4246cda16c4723744:10310
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $mediaServerTable = null;

    /**
     * Getter for mediaServerTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getMediaServerTable()
    {
        return $this->mediaServerTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaServerTable;
    }

    /**
     * Setter for mediaServerTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $mediaServerTable
     * @return $this
     */
    public function setMediaServerTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $mediaServerTable)
    {
        $this->mediaServerTable = $mediaServerTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaServerTable()
    {
        $this->mediaServerTable = null;
        return $this;
    }


}

