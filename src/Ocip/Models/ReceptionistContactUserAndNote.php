<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReceptionistContactUserAndNote
 *
 * The Receptionist User (or VON User) and Receptionist Notes.
 */
class ReceptionistContactUserAndNote
{

    /**
     * @ElementName contactUserId
     * @var string|null
     */
    private $contactUserId = null;

    /**
     * @ElementName vonUser
     * @var \CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUserKey|null
     */
    private $vonUser = null;

    /**
     * @ElementName note
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $note = null;

    /**
     * Getter for contactUserId
     *
     * @ElementName contactUserId
     * @return string|null
     */
    public function getContactUserId()
    {
        return $this->contactUserId;
    }

    /**
     * Setter for contactUserId
     *
     * @ElementName contactUserId
     * @param string|null $contactUserId
     * @return $this
     */
    public function setContactUserId($contactUserId)
    {
        $this->contactUserId = $contactUserId;
        return $this;
    }

    /**
     * Getter for vonUser
     *
     * @ElementName vonUser
     * @return \CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUserKey|null
     */
    public function getVonUser()
    {
        return $this->vonUser;
    }

    /**
     * Setter for vonUser
     *
     * @ElementName vonUser
     * @param \CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUserKey|null $vonUser
     * @return $this
     */
    public function setVonUser(\CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUserKey $vonUser)
    {
        $this->vonUser = $vonUser;
        return $this;
    }

    /**
     * Getter for note
     *
     * @ElementName note
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Setter for note
     *
     * @ElementName note
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $note
     * @return $this
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }


}

