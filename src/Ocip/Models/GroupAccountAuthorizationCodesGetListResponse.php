<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccountAuthorizationCodesGetListResponse
 *
 * Response to GroupAccountAuthorizationCodesGetListRequest.
 *
 * @see GroupAccountAuthorizationCodesGetListRequest
 * @Groups [{"id":"65df37199ec43e5d21a187db39d63158:141","type":"sequence"}]
 */
class GroupAccountAuthorizationCodesGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName codeEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccountAuthorizationCodeEntry
     * @Array
     * @Optional
     * @Group 65df37199ec43e5d21a187db39d63158:141
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccountAuthorizationCodeEntry[]
     */
    protected $codeEntry = array(
        
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

