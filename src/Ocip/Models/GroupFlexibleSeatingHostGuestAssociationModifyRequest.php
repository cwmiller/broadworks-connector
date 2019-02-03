<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFlexibleSeatingHostGuestAssociationModifyRequest
 *
 * Modify the flexible seating host’s guest association attributes.
 *         The request fails if enforceAssociationLimit or associationLimitHours are changed when the host is associated to a guest.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"43afb2158d313a1d1a148124d7caba1e:315","type":"sequence"}]
 */
class GroupFlexibleSeatingHostGuestAssociationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 43afb2158d313a1d1a148124d7caba1e:315
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName enforceAssociationLimit
     * @Type bool
     * @Optional
     * @Group 43afb2158d313a1d1a148124d7caba1e:315
     * @var bool|null
     */
    private $enforceAssociationLimit = null;

    /**
     * @ElementName associationLimitHours
     * @Type int
     * @Optional
     * @Group 43afb2158d313a1d1a148124d7caba1e:315
     * @var int|null
     */
    private $associationLimitHours = null;

    /**
     * @ElementName accessLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\FlexibleSeatingHostAccessLevel
     * @Optional
     * @Group 43afb2158d313a1d1a148124d7caba1e:315
     * @var \CWM\BroadWorksConnector\Ocip\Models\FlexibleSeatingHostAccessLevel|null
     */
    private $accessLevel = null;

    /**
     * @ElementName removeGuestAssociation
     * @Type bool
     * @Optional
     * @Group 43afb2158d313a1d1a148124d7caba1e:315
     * @var bool|null
     */
    private $removeGuestAssociation = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for enforceAssociationLimit
     *
     * @return bool
     */
    public function getEnforceAssociationLimit()
    {
        return $this->enforceAssociationLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enforceAssociationLimit;
    }

    /**
     * Setter for enforceAssociationLimit
     *
     * @param bool $enforceAssociationLimit
     * @return $this
     */
    public function setEnforceAssociationLimit($enforceAssociationLimit)
    {
        $this->enforceAssociationLimit = $enforceAssociationLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnforceAssociationLimit()
    {
        $this->enforceAssociationLimit = null;
        return $this;
    }

    /**
     * Getter for associationLimitHours
     *
     * @return int
     */
    public function getAssociationLimitHours()
    {
        return $this->associationLimitHours instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->associationLimitHours;
    }

    /**
     * Setter for associationLimitHours
     *
     * @param int $associationLimitHours
     * @return $this
     */
    public function setAssociationLimitHours($associationLimitHours)
    {
        $this->associationLimitHours = $associationLimitHours;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAssociationLimitHours()
    {
        $this->associationLimitHours = null;
        return $this;
    }

    /**
     * Getter for accessLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\FlexibleSeatingHostAccessLevel
     */
    public function getAccessLevel()
    {
        return $this->accessLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessLevel;
    }

    /**
     * Setter for accessLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\FlexibleSeatingHostAccessLevel $accessLevel
     * @return $this
     */
    public function setAccessLevel(\CWM\BroadWorksConnector\Ocip\Models\FlexibleSeatingHostAccessLevel $accessLevel)
    {
        $this->accessLevel = $accessLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessLevel()
    {
        $this->accessLevel = null;
        return $this;
    }

    /**
     * Getter for removeGuestAssociation
     *
     * @return bool
     */
    public function getRemoveGuestAssociation()
    {
        return $this->removeGuestAssociation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->removeGuestAssociation;
    }

    /**
     * Setter for removeGuestAssociation
     *
     * @param bool $removeGuestAssociation
     * @return $this
     */
    public function setRemoveGuestAssociation($removeGuestAssociation)
    {
        $this->removeGuestAssociation = $removeGuestAssociation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRemoveGuestAssociation()
    {
        $this->removeGuestAssociation = null;
        return $this;
    }


}

