<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserRouteListGetResponse22
 *
 * Response to UserRouteListGetRequest22.
 *         Contains the route list setting and a list of assigned number ranges and
 * number prefixes.
 *         The column headings for assignedNumberRangeTable are "Number Range
 * Start", "Number Range End" and "Is Active".
 *         The column headings for assignedNumberPrefixTable are "Number Prefix"
 * and "Is Active".
 */
class UserRouteListGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName treatOriginationsAndPBXRedirectionsAsScreened
     * @var bool|null
     */
    private $treatOriginationsAndPBXRedirectionsAsScreened = null;

    /**
     * @ElementName useRouteListIdentityForNonEmergencyCalls
     * @var bool|null
     */
    private $useRouteListIdentityForNonEmergencyCalls = null;

    /**
     * @ElementName useRouteListIdentityForEmergencyCalls
     * @var bool|null
     */
    private $useRouteListIdentityForEmergencyCalls = null;

    /**
     * @ElementName assignedNumberRangeTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $assignedNumberRangeTable = null;

    /**
     * @ElementName assignedNumberPrefixTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $assignedNumberPrefixTable = null;

    /**
     * Getter for treatOriginationsAndPBXRedirectionsAsScreened
     *
     * @ElementName treatOriginationsAndPBXRedirectionsAsScreened
     * @return bool|null
     */
    public function getTreatOriginationsAndPBXRedirectionsAsScreened()
    {
        return $this->treatOriginationsAndPBXRedirectionsAsScreened;
    }

    /**
     * Setter for treatOriginationsAndPBXRedirectionsAsScreened
     *
     * @ElementName treatOriginationsAndPBXRedirectionsAsScreened
     * @param bool|null $treatOriginationsAndPBXRedirectionsAsScreened
     * @return $this
     */
    public function setTreatOriginationsAndPBXRedirectionsAsScreened($treatOriginationsAndPBXRedirectionsAsScreened)
    {
        $this->treatOriginationsAndPBXRedirectionsAsScreened = $treatOriginationsAndPBXRedirectionsAsScreened;
        return $this;
    }

    /**
     * Getter for useRouteListIdentityForNonEmergencyCalls
     *
     * @ElementName useRouteListIdentityForNonEmergencyCalls
     * @return bool|null
     */
    public function getUseRouteListIdentityForNonEmergencyCalls()
    {
        return $this->useRouteListIdentityForNonEmergencyCalls;
    }

    /**
     * Setter for useRouteListIdentityForNonEmergencyCalls
     *
     * @ElementName useRouteListIdentityForNonEmergencyCalls
     * @param bool|null $useRouteListIdentityForNonEmergencyCalls
     * @return $this
     */
    public function setUseRouteListIdentityForNonEmergencyCalls($useRouteListIdentityForNonEmergencyCalls)
    {
        $this->useRouteListIdentityForNonEmergencyCalls = $useRouteListIdentityForNonEmergencyCalls;
        return $this;
    }

    /**
     * Getter for useRouteListIdentityForEmergencyCalls
     *
     * @ElementName useRouteListIdentityForEmergencyCalls
     * @return bool|null
     */
    public function getUseRouteListIdentityForEmergencyCalls()
    {
        return $this->useRouteListIdentityForEmergencyCalls;
    }

    /**
     * Setter for useRouteListIdentityForEmergencyCalls
     *
     * @ElementName useRouteListIdentityForEmergencyCalls
     * @param bool|null $useRouteListIdentityForEmergencyCalls
     * @return $this
     */
    public function setUseRouteListIdentityForEmergencyCalls($useRouteListIdentityForEmergencyCalls)
    {
        $this->useRouteListIdentityForEmergencyCalls = $useRouteListIdentityForEmergencyCalls;
        return $this;
    }

    /**
     * Getter for assignedNumberRangeTable
     *
     * @ElementName assignedNumberRangeTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getAssignedNumberRangeTable()
    {
        return $this->assignedNumberRangeTable;
    }

    /**
     * Setter for assignedNumberRangeTable
     *
     * @ElementName assignedNumberRangeTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $assignedNumberRangeTable
     * @return $this
     */
    public function setAssignedNumberRangeTable($assignedNumberRangeTable)
    {
        $this->assignedNumberRangeTable = $assignedNumberRangeTable;
        return $this;
    }

    /**
     * Getter for assignedNumberPrefixTable
     *
     * @ElementName assignedNumberPrefixTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getAssignedNumberPrefixTable()
    {
        return $this->assignedNumberPrefixTable;
    }

    /**
     * Setter for assignedNumberPrefixTable
     *
     * @ElementName assignedNumberPrefixTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $assignedNumberPrefixTable
     * @return $this
     */
    public function setAssignedNumberPrefixTable($assignedNumberPrefixTable)
    {
        $this->assignedNumberPrefixTable = $assignedNumberPrefixTable;
        return $this;
    }


}

