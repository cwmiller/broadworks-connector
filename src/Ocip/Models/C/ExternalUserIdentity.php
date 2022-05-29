<?php

namespace CWM\BroadWorksConnector\Ocip\Models\C;

/**
 * ExternalUserIdentity
 *
 * External user identity id identifies pre-authenticated user/admin id performing a session-less OCI request. 
 *         id can be a user/admin’s primary Id/alternate Id/external Id.
 *         organizationId identifies organization id the user/admin belongs to.
 *
 * @Groups [{"id":"de4fe2b27a39183ba1462cf843ba9617:22","type":"sequence"}]
 */
class ExternalUserIdentity
{

    /**
     * @ElementName id
     * @Type string
     * @Group de4fe2b27a39183ba1462cf843ba9617:22
     * @MaxLength 161
     * @var string|null
     */
    protected $id = null;

    /**
     * @ElementName organizationId
     * @Type string
     * @Group de4fe2b27a39183ba1462cf843ba9617:22
     * @MaxLength 36
     * @var string|null
     */
    protected $organizationId = null;

    /**
     * @ElementName role
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\ExternalUserIdentityRole
     * @Group de4fe2b27a39183ba1462cf843ba9617:22
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\ExternalUserIdentityRole|null
     */
    protected $role = null;

    /**
     * Getter for id
     *
     *
     *              The ID of the user or administrator initiating the OCI-P request.  
     *              The ID must match a primary, alternate or external ID configured on the AS for
     *              a user or administrator
     *            
     *
     * @return string
     */
    public function getId()
    {
        return $this->id instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->id;
    }

    /**
     * Setter for id
     *
     *
     *              The ID of the user or administrator initiating the OCI-P request.  
     *              The ID must match a primary, alternate or external ID configured on the AS for
     *              a user or administrator
     *            
     *
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetId()
    {
        $this->id = null;
        return $this;
    }

    /**
     * Getter for organizationId
     *
     *
     *              The ID of the user or administrator's organization  
     *              The ID must match a service provider or enterprise external id
     *            
     *
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->organizationId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->organizationId;
    }

    /**
     * Setter for organizationId
     *
     *
     *              The ID of the user or administrator's organization  
     *              The ID must match a service provider or enterprise external id
     *            
     *
     * @param string $organizationId
     * @return $this
     */
    public function setOrganizationId($organizationId)
    {
        $this->organizationId = $organizationId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOrganizationId()
    {
        $this->organizationId = null;
        return $this;
    }

    /**
     * Getter for role
     *
     *
     *              The role of the external user identity.
     *            
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\ExternalUserIdentityRole
     */
    public function getRole()
    {
        return $this->role instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->role;
    }

    /**
     * Setter for role
     *
     *
     *              The role of the external user identity.
     *            
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\ExternalUserIdentityRole $role
     * @return $this
     */
    public function setRole(\CWM\BroadWorksConnector\Ocip\Models\C\ExternalUserIdentityRole $role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRole()
    {
        $this->role = null;
        return $this;
    }


}

