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
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:16965","type":"sequence"}]
 */
class SystemVideoServerGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName videoServerTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b5f5416d9e71f8e4246cda16c4723744:16965
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $videoServerTable = null;

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

