<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVideoServerGetListResponse
 *
 * Response to SystemVideoServerGetListRequest. The Video Server table column
 *         headings are: "Net Address", "Port", "Transport", "Description".
 *         Transport types: udp, tcp, unspecified
 *
 * @see SystemVideoServerGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:19192","type":"sequence"}]
 */
class SystemVideoServerGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName videoServerTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19192
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $videoServerTable = null;

    /**
     * Getter for videoServerTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getVideoServerTable()
    {
        return $this->videoServerTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoServerTable;
    }

    /**
     * Setter for videoServerTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $videoServerTable
     * @return $this
     */
    public function setVideoServerTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $videoServerTable)
    {
        $this->videoServerTable = $videoServerTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoServerTable()
    {
        $this->videoServerTable = null;
        return $this;
    }


}

