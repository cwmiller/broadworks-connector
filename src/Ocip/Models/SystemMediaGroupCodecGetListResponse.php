<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaGroupCodecGetListResponse
 *
 * Response to SystemMediaGroupCodecGetListRequest.
 *         Contains a table of media assigned to the media group.
 *         The column headings are: "Codec Name", "Codec Weight".
 *
 * @see SystemMediaGroupCodecGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:10734","type":"sequence"}]
 */
class SystemMediaGroupCodecGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName codecTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:10734
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $codecTable = null;

    /**
     * Getter for codecTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getCodecTable()
    {
        return $this->codecTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->codecTable;
    }

    /**
     * Setter for codecTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $codecTable
     * @return $this
     */
    public function setCodecTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $codecTable)
    {
        $this->codecTable = $codecTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCodecTable()
    {
        $this->codecTable = null;
        return $this;
    }


}

