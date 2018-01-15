<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserLDAPIntegrationGetDirectoryEntryResponse
 *
 * Response to UserLDAPIntegrationGetDirectoryEntryRequest.
 */
class UserLDAPIntegrationGetDirectoryEntryResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName data
     * @var \CWM\BroadWorksConnector\Ocip\Models\LDAPEntryField[]
     */
    private $data = array(
        
    );

    /**
     * Getter for data
     *
     * @ElementName data
     * @return \CWM\BroadWorksConnector\Ocip\Models\LDAPEntryField[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Setter for data
     *
     * @ElementName data
     * @param \CWM\BroadWorksConnector\Ocip\Models\LDAPEntryField[] $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * Adder for data
     *
     * @ElementName data
     * @param \CWM\BroadWorksConnector\Ocip\Models\LDAPEntryField $data
     * @return $this
     */
    public function addData($data)
    {
        $this->data []= $data;
        return $this;
    }


}

