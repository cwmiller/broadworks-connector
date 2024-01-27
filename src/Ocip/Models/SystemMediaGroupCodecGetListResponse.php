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
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:11897","type":"sequence"}]
 */
class SystemMediaGroupCodecGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName codecTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:11897
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $codecTable = null;

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

