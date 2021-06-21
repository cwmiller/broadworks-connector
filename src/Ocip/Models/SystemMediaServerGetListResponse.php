<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaServerGetListResponse
 *
 * Response to SystemMediaServerGetListRequest. The Media Server table column
 *         headings are: "Net Address", "Port", "Transport", "Description".
 *
 * @see SystemMediaServerGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:11977","type":"sequence"}]
 */
class SystemMediaServerGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mediaServerTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:11977
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

