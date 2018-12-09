<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPGetContentTypeListResponse
 *
 * Response to SystemSIPGetContentTypeListRequest.
 *         Returns a 2 column table with column headings:
 *           "Content Type" and "Supported Interface".
 *
 * @see SystemSIPGetContentTypeListRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:15527","type":"sequence"}]
 */
class SystemSIPGetContentTypeListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName contentTypeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b5f5416d9e71f8e4246cda16c4723744:15527
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $contentTypeTable = null;

    /**
     * Getter for contentTypeTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getContentTypeTable()
    {
        return $this->contentTypeTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->contentTypeTable;
    }

    /**
     * Setter for contentTypeTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $contentTypeTable
     * @return $this
     */
    public function setContentTypeTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $contentTypeTable)
    {
        $this->contentTypeTable = $contentTypeTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContentTypeTable()
    {
        $this->contentTypeTable = null;
        return $this;
    }


}

