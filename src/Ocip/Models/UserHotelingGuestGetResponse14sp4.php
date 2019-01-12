<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserHotelingGuestGetResponse14sp4
 *
 * Response to UserHotelingGuestGetRequest14sp4
 *
 * @see UserHotelingGuestGetRequest14sp4
 * @Groups [{"id":"031ad639f025838c09748154da1e429e:98","type":"sequence"}]
 */
class UserHotelingGuestGetResponse14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 031ad639f025838c09748154da1e429e:98
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName enableAssociationLimit
     * @Type bool
     * @Group 031ad639f025838c09748154da1e429e:98
     * @var bool|null
     */
    private $enableAssociationLimit = null;

    /**
     * @ElementName associationLimitHours
     * @Type int
     * @Group 031ad639f025838c09748154da1e429e:98
     * @var int|null
     */
    private $associationLimitHours = null;

    /**
     * @ElementName hostUserId
     * @Type string
     * @Optional
     * @Group 031ad639f025838c09748154da1e429e:98
     * @var string|null
     */
    private $hostUserId = null;

    /**
     * @ElementName hostLastName
     * @Type string
     * @Optional
     * @Group 031ad639f025838c09748154da1e429e:98
     * @var string|null
     */
    private $hostLastName = null;

    /**
     * @ElementName hostFirstName
     * @Type string
     * @Optional
     * @Group 031ad639f025838c09748154da1e429e:98
     * @var string|null
     */
    private $hostFirstName = null;

    /**
     * @ElementName hostAssociationDateTime
     * @Type string
     * @Optional
     * @Group 031ad639f025838c09748154da1e429e:98
     * @var string|null
     */
    private $hostAssociationDateTime = null;

    /**
     * @ElementName hostEnforcesAssociationLimit
     * @Type bool
     * @Optional
     * @Group 031ad639f025838c09748154da1e429e:98
     * @var bool|null
     */
    private $hostEnforcesAssociationLimit = null;

    /**
     * @ElementName hostAssociationLimitHours
     * @Type int
     * @Optional
     * @Group 031ad639f025838c09748154da1e429e:98
     * @var int|null
     */
    private $hostAssociationLimitHours = null;

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for enableAssociationLimit
     *
     * @return bool
     */
    public function getEnableAssociationLimit()
    {
        return $this->enableAssociationLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAssociationLimit;
    }

    /**
     * Setter for enableAssociationLimit
     *
     * @param bool $enableAssociationLimit
     * @return $this
     */
    public function setEnableAssociationLimit($enableAssociationLimit)
    {
        $this->enableAssociationLimit = $enableAssociationLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAssociationLimit()
    {
        $this->enableAssociationLimit = null;
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
     * Getter for hostUserId
     *
     * @return string
     */
    public function getHostUserId()
    {
        return $this->hostUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hostUserId;
    }

    /**
     * Setter for hostUserId
     *
     * @param string $hostUserId
     * @return $this
     */
    public function setHostUserId($hostUserId)
    {
        $this->hostUserId = $hostUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHostUserId()
    {
        $this->hostUserId = null;
        return $this;
    }

    /**
     * Getter for hostLastName
     *
     * @return string
     */
    public function getHostLastName()
    {
        return $this->hostLastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hostLastName;
    }

    /**
     * Setter for hostLastName
     *
     * @param string $hostLastName
     * @return $this
     */
    public function setHostLastName($hostLastName)
    {
        $this->hostLastName = $hostLastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHostLastName()
    {
        $this->hostLastName = null;
        return $this;
    }

    /**
     * Getter for hostFirstName
     *
     * @return string
     */
    public function getHostFirstName()
    {
        return $this->hostFirstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hostFirstName;
    }

    /**
     * Setter for hostFirstName
     *
     * @param string $hostFirstName
     * @return $this
     */
    public function setHostFirstName($hostFirstName)
    {
        $this->hostFirstName = $hostFirstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHostFirstName()
    {
        $this->hostFirstName = null;
        return $this;
    }

    /**
     * Getter for hostAssociationDateTime
     *
     * @return string
     */
    public function getHostAssociationDateTime()
    {
        return $this->hostAssociationDateTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hostAssociationDateTime;
    }

    /**
     * Setter for hostAssociationDateTime
     *
     * @param string $hostAssociationDateTime
     * @return $this
     */
    public function setHostAssociationDateTime($hostAssociationDateTime)
    {
        $this->hostAssociationDateTime = $hostAssociationDateTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHostAssociationDateTime()
    {
        $this->hostAssociationDateTime = null;
        return $this;
    }

    /**
     * Getter for hostEnforcesAssociationLimit
     *
     * @return bool
     */
    public function getHostEnforcesAssociationLimit()
    {
        return $this->hostEnforcesAssociationLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hostEnforcesAssociationLimit;
    }

    /**
     * Setter for hostEnforcesAssociationLimit
     *
     * @param bool $hostEnforcesAssociationLimit
     * @return $this
     */
    public function setHostEnforcesAssociationLimit($hostEnforcesAssociationLimit)
    {
        $this->hostEnforcesAssociationLimit = $hostEnforcesAssociationLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHostEnforcesAssociationLimit()
    {
        $this->hostEnforcesAssociationLimit = null;
        return $this;
    }

    /**
     * Getter for hostAssociationLimitHours
     *
     * @return int
     */
    public function getHostAssociationLimitHours()
    {
        return $this->hostAssociationLimitHours instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hostAssociationLimitHours;
    }

    /**
     * Setter for hostAssociationLimitHours
     *
     * @param int $hostAssociationLimitHours
     * @return $this
     */
    public function setHostAssociationLimitHours($hostAssociationLimitHours)
    {
        $this->hostAssociationLimitHours = $hostAssociationLimitHours;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHostAssociationLimitHours()
    {
        $this->hostAssociationLimitHours = null;
        return $this;
    }


}

