<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksReceptionistEnterpriseNoteGetResponse
 *
 * Response to UserBroadWorksReceptionistEnterpriseNoteGetRequest.
 *
 * @see UserBroadWorksReceptionistEnterpriseNoteGetRequest
 * @Groups [{"id":"44477d346d2631b033071e12af214ac8:254","type":"sequence"}]
 */
class UserBroadWorksReceptionistEnterpriseNoteGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName receptionistNote
     * @Type string
     * @Optional
     * @Group 44477d346d2631b033071e12af214ac8:254
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $receptionistNote = null;

    /**
     * Getter for receptionistNote
     *
     * @return string
     */
    public function getReceptionistNote()
    {
        return $this->receptionistNote instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->receptionistNote;
    }

    /**
     * Setter for receptionistNote
     *
     * @param string $receptionistNote
     * @return $this
     */
    public function setReceptionistNote($receptionistNote)
    {
        $this->receptionistNote = $receptionistNote;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReceptionistNote()
    {
        $this->receptionistNote = null;
        return $this;
    }
}

