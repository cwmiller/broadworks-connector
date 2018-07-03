<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserHotelingHostModifyRequest
 *
 * Modify the user level data associated with Hoteling Host.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserHotelingHostModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName enforceAssociationLimit
     * @var bool|null
     */
    private $enforceAssociationLimit = null;

    /**
     * @ElementName associationLimitHours
     * @var int|null
     */
    private $associationLimitHours = null;

    /**
     * @ElementName accessLevel
     * @var string|null
     */
    private $accessLevel = null;

    /**
     * @ElementName removeGuestAssociation
     * @var bool|null
     */
    private $removeGuestAssociation = null;

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
     * Getter for enforceAssociationLimit
     *
     * @ElementName enforceAssociationLimit
     * @return bool|null
     */
    public function getEnforceAssociationLimit()
    {
        return $this->enforceAssociationLimit;
    }

    /**
     * Setter for enforceAssociationLimit
     *
     * @ElementName enforceAssociationLimit
     * @param bool|null $enforceAssociationLimit
     * @return $this
     */
    public function setEnforceAssociationLimit($enforceAssociationLimit)
    {
        $this->enforceAssociationLimit = $enforceAssociationLimit;
        return $this;
    }

    /**
     * Getter for associationLimitHours
     *
     * @ElementName associationLimitHours
     * @return int|null
     */
    public function getAssociationLimitHours()
    {
        return $this->associationLimitHours;
    }

    /**
     * Setter for associationLimitHours
     *
     * @ElementName associationLimitHours
     * @param int|null $associationLimitHours
     * @return $this
     */
    public function setAssociationLimitHours($associationLimitHours)
    {
        $this->associationLimitHours = $associationLimitHours;
        return $this;
    }

    /**
     * Getter for accessLevel
     *
     * @ElementName accessLevel
     * @return string|null
     */
    public function getAccessLevel()
    {
        return $this->accessLevel;
    }

    /**
     * Setter for accessLevel
     *
     * @ElementName accessLevel
     * @param string|null $accessLevel
     * @return $this
     */
    public function setAccessLevel($accessLevel)
    {
        $this->accessLevel = $accessLevel;
        return $this;
    }

    /**
     * Getter for removeGuestAssociation
     *
     * @ElementName removeGuestAssociation
     * @return bool|null
     */
    public function getRemoveGuestAssociation()
    {
        return $this->removeGuestAssociation;
    }

    /**
     * Setter for removeGuestAssociation
     *
     * @ElementName removeGuestAssociation
     * @param bool|null $removeGuestAssociation
     * @return $this
     */
    public function setRemoveGuestAssociation($removeGuestAssociation)
    {
        $this->removeGuestAssociation = $removeGuestAssociation;
        return $this;
    }


}

