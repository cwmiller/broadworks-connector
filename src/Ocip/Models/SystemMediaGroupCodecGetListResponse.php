<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaGroupCodecGetListResponse
 *
 * Response to SystemMediaGroupCodecGetListRequest.
 *         Contains a table of media assigned to the media group.
 *         The column headings are: "Codec Name", "Codec Weight".
 */
class SystemMediaGroupCodecGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName codecTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $codecTable = null;

    /**
     * Getter for codecTable
     *
     * @ElementName codecTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getCodecTable()
    {
        return $this->codecTable;
    }

    /**
     * Setter for codecTable
     *
     * @ElementName codecTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $codecTable
     * @return $this
     */
    public function setCodecTable($codecTable)
    {
        $this->codecTable = $codecTable;
        return $this;
    }


}

