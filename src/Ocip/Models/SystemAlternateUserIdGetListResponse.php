<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAlternateUserIdGetListResponse
 *
 * Response to SystemAlternateUserIdGetListRequest.
 *         The "User Type" column contains the corresponding enumerated UserType
 * value.
 *         Contains a table of alternate user ids, the column headings are: 
 *           "User Id", "Alternate User Id", "Group Id", "Organization Id"
 * ,"Reseller Id" and  "User Type".
 *           
 *         The following columns are only returned in AS data mode:       
 *           "Reseller Id"
 *
 * @see SystemAlternateUserIdGetListRequest
 */
class SystemAlternateUserIdGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName alternateUserIdTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $alternateUserIdTable = null;

    /**
     * Getter for alternateUserIdTable
     *
     * @ElementName alternateUserIdTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getAlternateUserIdTable()
    {
        return $this->alternateUserIdTable;
    }

    /**
     * Setter for alternateUserIdTable
     *
     * @ElementName alternateUserIdTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $alternateUserIdTable
     * @return $this
     */
    public function setAlternateUserIdTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $alternateUserIdTable)
    {
        $this->alternateUserIdTable = $alternateUserIdTable;
        return $this;
    }


}

