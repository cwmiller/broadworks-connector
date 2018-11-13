<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccountAuthorizationCodesGetListResponse
 *
 * Response to GroupAccountAuthorizationCodesGetListRequest.
 *
 * @see GroupAccountAuthorizationCodesGetListRequest
 */
class GroupAccountAuthorizationCodesGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName codeEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccountAuthorizationCodeEntry
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccountAuthorizationCodeEntry[]
     */
    private $codeEntry = array(
        
    );

    /**
     * Getter for codeEntry
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccountAuthorizationCodeEntry[]
     */
    public function getCodeEntry()
    {
        return $this->codeEntry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->codeEntry;
    }

    /**
     * Setter for codeEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccountAuthorizationCodeEntry[] $codeEntry
     * @return $this
     */
    public function setCodeEntry(array $codeEntry)
    {
        $this->codeEntry = $codeEntry;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCodeEntry()
    {
        $this->codeEntry = null;
        return $this;
    }

    /**
     * Adder for codeEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccountAuthorizationCodeEntry $codeEntry
     * @return $this
     */
    public function addCodeEntry($codeEntry)
    {
        $this->codeEntry[] = $codeEntry;
        return $this;
    }


}

