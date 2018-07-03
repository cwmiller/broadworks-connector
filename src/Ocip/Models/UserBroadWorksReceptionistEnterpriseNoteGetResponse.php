<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksReceptionistEnterpriseNoteGetResponse
 *
 * Response to UserBroadWorksReceptionistEnterpriseNoteGetRequest.
 *
 * @see UserBroadWorksReceptionistEnterpriseNoteGetRequest
 */
class UserBroadWorksReceptionistEnterpriseNoteGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName receptionistNote
     * @var string|null
     */
    private $receptionistNote = null;

    /**
     * Getter for receptionistNote
     *
     * @ElementName receptionistNote
     * @return string|null
     */
    public function getReceptionistNote()
    {
        return $this->receptionistNote;
    }

    /**
     * Setter for receptionistNote
     *
     * @ElementName receptionistNote
     * @param string|null $receptionistNote
     * @return $this
     */
    public function setReceptionistNote($receptionistNote)
    {
        $this->receptionistNote = $receptionistNote;
        return $this;
    }


}

