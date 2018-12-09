<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksReceptionistEnterpriseNoteGetRequest
 *
 * Request the Receptionist notes for the specified Receptionist and Contact User IDs.  
 *         The response is either a UserBroadWorksReceptionistEnterpriseNoteGetResponse or an
 *         ErrorResponse.
 *
 * @see UserBroadWorksReceptionistEnterpriseNoteGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"b99e2521b171f47568831e973c09aa33:234","type":"sequence","children":[{"id":"b99e2521b171f47568831e973c09aa33:236","type":"choice"}]}]
 */
class UserBroadWorksReceptionistEnterpriseNoteGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName receptionistUserId
     * @Type string
     * @Group b99e2521b171f47568831e973c09aa33:234
     * @var string|null
     */
    private $receptionistUserId = null;

    /**
     * @ElementName contactUserId
     * @Type string
     * @Group b99e2521b171f47568831e973c09aa33:236
     * @var string|null
     */
    private $contactUserId = null;

    /**
     * @ElementName vonUser
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUserKey
     * @Group b99e2521b171f47568831e973c09aa33:236
     * @var \CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUserKey|null
     */
    private $vonUser = null;

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


}

