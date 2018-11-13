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
     * @Type string
     * @var string|null
     */
    private $receptionistUserId = null;

    /**
     * @ElementName receptionistUserAndNote
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReceptionistContactUserAndNote
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReceptionistContactUserAndNote[]
     */
    private $receptionistUserAndNote = array(
        
    );

    /**
     * Getter for receptionistUserId
     *
     * @return string
     */
    public function getReceptionistUserId()
    {
        return $this->receptionistUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->receptionistUserId;
    }

    /**
     * Setter for receptionistUserId
     *
     * @param string $receptionistUserId
     * @return $this
     */
    public function setReceptionistUserId($receptionistUserId)
    {
        $this->receptionistUserId = $receptionistUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReceptionistUserId()
    {
        $this->receptionistUserId = null;
        return $this;
    }

    /**
     * Getter for receptionistUserAndNote
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReceptionistContactUserAndNote[]
     */
    public function getReceptionistUserAndNote()
    {
        return $this->receptionistUserAndNote instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->receptionistUserAndNote;
    }

    /**
     * Setter for receptionistUserAndNote
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReceptionistContactUserAndNote[] $receptionistUserAndNote
     * @return $this
     */
    public function setReceptionistUserAndNote(array $receptionistUserAndNote)
    {
        $this->receptionistUserAndNote = $receptionistUserAndNote;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReceptionistUserAndNote()
    {
        $this->receptionistUserAndNote = null;
        return $this;
    }

    /**
     * Adder for receptionistUserAndNote
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReceptionistContactUserAndNote $receptionistUserAndNote
     * @return $this
     */
    public function addReceptionistUserAndNote($receptionistUserAndNote)
    {
        $this->receptionistUserAndNote[] = $receptionistUserAndNote;
        return $this;
    }


}

