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
 */
class SystemVideoServerGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName videoServerTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $videoServerTable = null;

    /**
     * Getter for videoServerTable
     *
     * @ElementName videoServerTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getVideoServerTable()
    {
        return $this->videoServerTable;
    }

    /**
     * Setter for videoServerTable
     *
     * @ElementName videoServerTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $videoServerTable
     * @return $this
     */
    public function setVideoServerTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $videoServerTable)
    {
        $this->videoServerTable = $videoServerTable;
        return $this;
    }


}

