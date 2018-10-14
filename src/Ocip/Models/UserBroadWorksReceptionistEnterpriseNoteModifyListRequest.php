<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksReceptionistEnterpriseNoteModifyListRequest
 *
 * Add a list of notes for an existing Receptionist user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         If some of the users add and some users fail to add, then the
 *         response will contain a WarningResponse containing only the 
 *         a comma delimited list of users that failed to add.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see WarningResponse
 */
class UserBroadWorksReceptionistEnterpriseNoteModifyListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName receptionistUserId
     * @var string|null
     */
    private $receptionistUserId = null;

    /**
     * @ElementName receptionistUserAndNote
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReceptionistContactUserAndNote[]
     */
    private $receptionistUserAndNote = array(
        
    );

    /**
     * Getter for receptionistUserId
     *
     * @ElementName receptionistUserId
     * @return string|null
     */
    public function getReceptionistUserId()
    {
        return $this->receptionistUserId;
    }

    /**
     * Setter for receptionistUserId
     *
     * @ElementName receptionistUserId
     * @param string|null $receptionistUserId
     * @return $this
     */
    public function setReceptionistUserId($receptionistUserId)
    {
        $this->receptionistUserId = $receptionistUserId;
        return $this;
    }

    /**
     * Getter for receptionistUserAndNote
     *
     * @ElementName receptionistUserAndNote
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReceptionistContactUserAndNote[]
     */
    public function getReceptionistUserAndNote()
    {
        return $this->receptionistUserAndNote;
    }

    /**
     * Setter for receptionistUserAndNote
     *
     * @ElementName receptionistUserAndNote
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReceptionistContactUserAndNote[] $receptionistUserAndNote
     * @return $this
     */
    public function setReceptionistUserAndNote(array $receptionistUserAndNote)
    {
        $this->receptionistUserAndNote = $receptionistUserAndNote;
        return $this;
    }

    /**
     * Adder for receptionistUserAndNote
     *
     * @ElementName receptionistUserAndNote
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReceptionistContactUserAndNote $receptionistUserAndNote
     * @return $this
     */
    public function addReceptionistUserAndNote($receptionistUserAndNote)
    {
        $this->receptionistUserAndNote []= $receptionistUserAndNote;
        return $this;
    }


}

