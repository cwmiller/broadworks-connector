<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccountingInhibitedAttributeValuePairCodeGetListResponse
 *
 * Response to
 *         SystemAccountingInhibitedAttributeValuePairCodeGetListRequest. Contains
 * a 2 column
 *         table with column headings "Attribute Value Pair Code" and "Vendor Id".
 */
class SystemAccountingInhibitedAttributeValuePairCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName inhibitedAttributeValuePairCodeTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $inhibitedAttributeValuePairCodeTable = null;

    /**
     * Getter for inhibitedAttributeValuePairCodeTable
     *
     * @ElementName inhibitedAttributeValuePairCodeTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getInhibitedAttributeValuePairCodeTable()
    {
        return $this->inhibitedAttributeValuePairCodeTable;
    }

    /**
     * Setter for inhibitedAttributeValuePairCodeTable
     *
     * @ElementName inhibitedAttributeValuePairCodeTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $inhibitedAttributeValuePairCodeTable
     * @return $this
     */
    public function setInhibitedAttributeValuePairCodeTable($inhibitedAttributeValuePairCodeTable)
    {
        $this->inhibitedAttributeValuePairCodeTable = $inhibitedAttributeValuePairCodeTable;
        return $this;
    }


}

