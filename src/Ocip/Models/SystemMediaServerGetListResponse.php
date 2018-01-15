<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaServerGetListResponse
 *
 * Response to SystemMediaServerGetListRequest. The Media Server table column
 *         headings are: "Net Address", "Port", "Transport", "Description".
 */
class SystemMediaServerGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mediaServerTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $mediaServerTable = null;

    /**
     * Getter for mediaServerTable
     *
     * @ElementName mediaServerTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getMediaServerTable()
    {
        return $this->mediaServerTable;
    }

    /**
     * Setter for mediaServerTable
     *
     * @ElementName mediaServerTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $mediaServerTable
     * @return $this
     */
    public function setMediaServerTable($mediaServerTable)
    {
        $this->mediaServerTable = $mediaServerTable;
        return $this;
    }


}

