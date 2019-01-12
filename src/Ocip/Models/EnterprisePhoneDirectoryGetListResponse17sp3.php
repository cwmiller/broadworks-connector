<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterprisePhoneDirectoryGetListResponse17sp3
 *
 * Response to EnterprisePhoneDirectoryGetListRequest17sp3.
 *         Contains a table with  a row for each phone number and column headings :
 *         "Name", "Number", "Extension", "Mobile", "Email Address", 
 *         "Department", "Hiragana Name", "Group Id", "Yahoo Id", "IMP Id", "Is Virtual On-Net User".
 *         If extended directory information is requested, the following columns are also included:
 *         "First Name", "Last Name", "User Id", "Pager", "Title", "Time Zone", 
 *         "Location", "Address Line 1", "Address Line 2",
 *         "City", "State", "Zip", "Country".
 *         
 *          Replaced by: EnterprisePhoneDirectoryGetListResponse18
 *
 * @see EnterprisePhoneDirectoryGetListRequest17sp3
 * @see EnterprisePhoneDirectoryGetListResponse18
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:17827","type":"sequence"}]
 */
class EnterprisePhoneDirectoryGetListResponse17sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName directoryTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ab0042aa512abc10edb3c55e4b416b0b:17827
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $directoryTable = null;

    /**
     * Getter for directoryTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDirectoryTable()
    {
        return $this->directoryTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->directoryTable;
    }

    /**
     * Setter for directoryTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $directoryTable
     * @return $this
     */
    public function setDirectoryTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $directoryTable)
    {
        $this->directoryTable = $directoryTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDirectoryTable()
    {
        $this->directoryTable = null;
        return $this;
    }


}

