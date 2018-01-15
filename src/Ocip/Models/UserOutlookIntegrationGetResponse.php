<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutlookIntegrationGetResponse
 *
 * Response to UserOutlookIntegrationGetRequest.
 */
class UserOutlookIntegrationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

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

