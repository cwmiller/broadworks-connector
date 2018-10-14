<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFlexibleSeatingHostGuestAssociationModifyRequest
 *
 * Modify the flexible seating host’s guest association attributes.
 *         The request fails if enforceAssociationLimit or associationLimitHours
 * are changed when the host is associated to a guest.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupFlexibleSeatingHostGuestAssociationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

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
     * @var \CWM\BroadWorksConnector\Ocip\Models\FlexibleSeatingHostAccessLevel|null
     */
    private $accessLevel = null;

    /**
     * @ElementName removeGuestAssociation
     * @var bool|null
     */
    private $removeGuestAssociation = null;

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\FlexibleSeatingHostAccessLevel|null
     */
    public function getAccessLevel()
    {
        return $this->accessLevel;
    }

    /**
     * Setter for accessLevel
     *
     * @ElementName accessLevel
     * @param \CWM\BroadWorksConnector\Ocip\Models\FlexibleSeatingHostAccessLevel|null $accessLevel
     * @return $this
     */
    public function setAccessLevel(\CWM\BroadWorksConnector\Ocip\Models\FlexibleSeatingHostAccessLevel $accessLevel)
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

