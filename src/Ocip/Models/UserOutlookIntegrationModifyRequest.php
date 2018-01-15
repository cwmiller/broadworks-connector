<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutlookIntegrationModifyRequest
 *
 * Modify the user level data associated with Outlook Integration.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserOutlookIntegrationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName contactRetrievalSelection
     * @var string|null
     */
    private $contactRetrievalSelection = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for contactRetrievalSelection
     *
     * @ElementName contactRetrievalSelection
     * @return string|null
     */
    public function getContactRetrievalSelection()
    {
        return $this->contactRetrievalSelection;
    }

    /**
     * Setter for contactRetrievalSelection
     *
     * @ElementName contactRetrievalSelection
     * @param string|null $contactRetrievalSelection
     * @return $this
     */
    public function setContactRetrievalSelection($contactRetrievalSelection)
    {
        $this->contactRetrievalSelection = $contactRetrievalSelection;
        return $this;
    }


}

