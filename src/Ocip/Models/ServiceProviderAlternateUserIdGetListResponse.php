<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAlternateUserIdGetListResponse
 *
 * Response to ServiceProviderAlternateUserIdGetListRequest.
 *         The "User Type" column contains the corresponding enumerated UserType value.
 *         Contains a table of alternate user ids, the column headings are: 
 *           "User Id", "Alternate User Id", "Group Id" and "User Type".
 *
 * @see ServiceProviderAlternateUserIdGetListRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:1730","type":"sequence"}]
 */
class ServiceProviderAlternateUserIdGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName alternateUserIdTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e19a9072c2dad499e9f28837da5768db:1730
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $alternateUserIdTable = null;

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

