<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterprisePhoneDirectoryGetListResponse17
 *
 * Response to EnterprisePhoneDirectoryGetListRequest17.
 *         Contains a table with  a row for each phone number and column headings :
 *         "Name", "Number", "Extension", "Mobile", "Email Address", 
 *         "Department", "Hiragana Name", "Group Id", "Yahoo Id", "Is Virtual On-Net User".
 *         If extended directory information is requested, the following columns are also included:
 *         "First Name", "Last Name", "User Id", "Pager", "Title", "Time Zone", 
 *         "Location", "Address Line 1", "Address Line 2",
 *         "City", "State", "Zip", "Country".
 *         
 *         Replaced by: EnterprisePhoneDirectoryGetListResponse18
 *
 * @see EnterprisePhoneDirectoryGetListRequest17
 * @see EnterprisePhoneDirectoryGetListResponse18
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:2608","type":"sequence"}]
 */
class EnterprisePhoneDirectoryGetListResponse17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName directoryTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d8f04177e438f303b41c211e518706bf:2608
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $directoryTable = null;

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

