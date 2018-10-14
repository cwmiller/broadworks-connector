<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksReceptionistEnterpriseNoteGetRequest
 *
 * Request the Receptionist notes for the specified Receptionist and Contact User
 * IDs.  
 *         The response is either a
 * UserBroadWorksReceptionistEnterpriseNoteGetResponse or an
 *         ErrorResponse.
 *
 * @see UserBroadWorksReceptionistEnterpriseNoteGetResponse
 * @see ErrorResponse
 */
class UserBroadWorksReceptionistEnterpriseNoteGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName receptionistUserId
     * @var string|null
     */
    private $receptionistUserId = null;

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


}

