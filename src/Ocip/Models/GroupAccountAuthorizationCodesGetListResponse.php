<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccountAuthorizationCodesGetListResponse
 *
 * Response to GroupAccountAuthorizationCodesGetListRequest.
 */
class GroupAccountAuthorizationCodesGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName codeEntry
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccountAuthorizationCodeEntry[]
     */
    private $codeEntry = array(
        
    );

    /**
     * Getter for codeEntry
     *
     * @ElementName codeEntry
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccountAuthorizationCodeEntry[]
     */
    public function getCodeEntry()
    {
        return $this->codeEntry;
    }

    /**
     * Setter for codeEntry
     *
     * @ElementName codeEntry
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccountAuthorizationCodeEntry[] $codeEntry
     * @return $this
     */
    public function setCodeEntry($codeEntry)
    {
        $this->codeEntry = $codeEntry;
        return $this;
    }

    /**
     * Adder for codeEntry
     *
     * @ElementName codeEntry
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccountAuthorizationCodeEntry $codeEntry
     * @return $this
     */
    public function addCodeEntry($codeEntry)
    {
        $this->codeEntry []= $codeEntry;
        return $this;
    }


}

