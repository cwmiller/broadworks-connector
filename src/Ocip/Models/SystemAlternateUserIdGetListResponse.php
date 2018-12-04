<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAlternateUserIdGetListResponse
 *
 * Response to SystemAlternateUserIdGetListRequest.
 *         The "User Type" column contains the corresponding enumerated UserType value.
 *         Contains a table of alternate user ids, the column headings are: 
 *           "User Id", "Alternate User Id", "Group Id", "Organization Id" ,"Reseller Id" and  "User Type".
 *           
 *         The following columns are only returned in AS data mode:       
 *           "Reseller Id"
 *
 * @see SystemAlternateUserIdGetListRequest
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:1843","type":"sequence"}]
 */
class SystemAlternateUserIdGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName alternateUserIdTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 610f84d3e188f0477c3ae1a82ee036da:1843
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $alternateUserIdTable = null;

    /**
     * Getter for alternateUserIdTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAlternateUserIdTable()
    {
        return $this->alternateUserIdTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateUserIdTable;
    }

    /**
     * Setter for alternateUserIdTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $alternateUserIdTable
     * @return $this
     */
    public function setAlternateUserIdTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $alternateUserIdTable)
    {
        $this->alternateUserIdTable = $alternateUserIdTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateUserIdTable()
    {
        $this->alternateUserIdTable = null;
        return $this;
    }


}

