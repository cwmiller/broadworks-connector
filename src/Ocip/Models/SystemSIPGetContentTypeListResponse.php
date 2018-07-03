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
 */
class SystemSIPGetContentTypeListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName contentTypeTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $contentTypeTable = null;

    /**
     * Getter for contentTypeTable
     *
     * @ElementName contentTypeTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getContentTypeTable()
    {
        return $this->contentTypeTable;
    }

    /**
     * Setter for contentTypeTable
     *
     * @ElementName contentTypeTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $contentTypeTable
     * @return $this
     */
    public function setContentTypeTable($contentTypeTable)
    {
        $this->contentTypeTable = $contentTypeTable;
        return $this;
    }


}

