<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReceptionistContactUserAndNote
 *
 * The Receptionist User (or VON User) and Receptionist Notes.
 *
 * @Groups [{"id":"18b369af88e42ffdb4166615c670ce2c:2587","type":"sequence","children":[{"id":"18b369af88e42ffdb4166615c670ce2c:2588","type":"choice"}]}]
 */
class ReceptionistContactUserAndNote
{

    /**
     * @ElementName contactUserId
     * @Type string
     * @Group 18b369af88e42ffdb4166615c670ce2c:2588
     * @var string|null
     */
    private $contactUserId = null;

    /**
     * @ElementName vonUser
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUserKey
     * @Group 18b369af88e42ffdb4166615c670ce2c:2588
     * @var \CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUserKey|null
     */
    private $vonUser = null;

    /**
     * @ElementName note
     * @Type string
     * @Nillable
     * @Group 18b369af88e42ffdb4166615c670ce2c:2587
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $note = null;

    /**
     * Getter for contactUserId
     *
     * @return string
     */
    public function getContactUserId()
    {
        return $this->contactUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->contactUserId;
    }

    /**
     * Setter for contactUserId
     *
     * @param string $contactUserId
     * @return $this
     */
    public function setContactUserId($contactUserId)
    {
        $this->contactUserId = $contactUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContactUserId()
    {
        $this->contactUserId = null;
        return $this;
    }

    /**
     * Getter for vonUser
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUserKey
     */
    public function getVonUser()
    {
        return $this->vonUser instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->vonUser;
    }

    /**
     * Setter for vonUser
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUserKey $vonUser
     * @return $this
     */
    public function setVonUser(\CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUserKey $vonUser)
    {
        $this->vonUser = $vonUser;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVonUser()
    {
        $this->vonUser = null;
        return $this;
    }

    /**
     * Getter for note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->note instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->note;
    }

    /**
     * Setter for note
     *
     * @param string|null $note
     * @return $this
     */
    public function setNote($note)
    {
        if ($note === null) {
            $this->note = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->note = $note;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNote()
    {
        $this->note = null;
        return $this;
    }


}

