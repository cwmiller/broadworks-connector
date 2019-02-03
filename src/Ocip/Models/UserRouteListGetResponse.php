<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserRouteListGetResponse
 *
 * Response to UserRouteListGetRequest.
 *         Contains the route list setting and a list of assigned number ranges and number prefixes.
 *         The column headings for assignedNumberRangeTable are "Number Range Start", "Number Range End" and "Is Active".
 *         
 *         Replaced by: UserRouteListGetResponse22
 *
 * @see UserRouteListGetRequest
 * @see UserRouteListGetResponse22
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:3611","type":"sequence"}]
 */
class UserRouteListGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName treatOriginationsAndPBXRedirectionsAsScreened
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:3611
     * @var bool|null
     */
    private $treatOriginationsAndPBXRedirectionsAsScreened = null;

    /**
     * @ElementName useRouteListIdentityForNonEmergencyCalls
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:3611
     * @var bool|null
     */
    private $useRouteListIdentityForNonEmergencyCalls = null;

    /**
     * @ElementName useRouteListIdentityForEmergencyCalls
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:3611
     * @var bool|null
     */
    private $useRouteListIdentityForEmergencyCalls = null;

    /**
     * @ElementName assignedNumberRangeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group de4d76f01f337fe4694212ec9f771753:3611
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $assignedNumberRangeTable = null;

    /**
     * Getter for treatOriginationsAndPBXRedirectionsAsScreened
     *
     * @return bool
     */
    public function getTreatOriginationsAndPBXRedirectionsAsScreened()
    {
        return $this->treatOriginationsAndPBXRedirectionsAsScreened instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treatOriginationsAndPBXRedirectionsAsScreened;
    }

    /**
     * Setter for treatOriginationsAndPBXRedirectionsAsScreened
     *
     * @param bool $treatOriginationsAndPBXRedirectionsAsScreened
     * @return $this
     */
    public function setTreatOriginationsAndPBXRedirectionsAsScreened($treatOriginationsAndPBXRedirectionsAsScreened)
    {
        $this->treatOriginationsAndPBXRedirectionsAsScreened = $treatOriginationsAndPBXRedirectionsAsScreened;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTreatOriginationsAndPBXRedirectionsAsScreened()
    {
        $this->treatOriginationsAndPBXRedirectionsAsScreened = null;
        return $this;
    }

    /**
     * Getter for useRouteListIdentityForNonEmergencyCalls
     *
     * @return bool
     */
    public function getUseRouteListIdentityForNonEmergencyCalls()
    {
        return $this->useRouteListIdentityForNonEmergencyCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useRouteListIdentityForNonEmergencyCalls;
    }

    /**
     * Setter for useRouteListIdentityForNonEmergencyCalls
     *
     * @param bool $useRouteListIdentityForNonEmergencyCalls
     * @return $this
     */
    public function setUseRouteListIdentityForNonEmergencyCalls($useRouteListIdentityForNonEmergencyCalls)
    {
        $this->useRouteListIdentityForNonEmergencyCalls = $useRouteListIdentityForNonEmergencyCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseRouteListIdentityForNonEmergencyCalls()
    {
        $this->useRouteListIdentityForNonEmergencyCalls = null;
        return $this;
    }

    /**
     * Getter for useRouteListIdentityForEmergencyCalls
     *
     * @return bool
     */
    public function getUseRouteListIdentityForEmergencyCalls()
    {
        return $this->useRouteListIdentityForEmergencyCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useRouteListIdentityForEmergencyCalls;
    }

    /**
     * Setter for useRouteListIdentityForEmergencyCalls
     *
     * @param bool $useRouteListIdentityForEmergencyCalls
     * @return $this
     */
    public function setUseRouteListIdentityForEmergencyCalls($useRouteListIdentityForEmergencyCalls)
    {
        $this->useRouteListIdentityForEmergencyCalls = $useRouteListIdentityForEmergencyCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseRouteListIdentityForEmergencyCalls()
    {
        $this->useRouteListIdentityForEmergencyCalls = null;
        return $this;
    }

    /**
     * Getter for assignedNumberRangeTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAssignedNumberRangeTable()
    {
        return $this->assignedNumberRangeTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->assignedNumberRangeTable;
    }

    /**
     * Setter for assignedNumberRangeTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $assignedNumberRangeTable
     * @return $this
     */
    public function setAssignedNumberRangeTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $assignedNumberRangeTable)
    {
        $this->assignedNumberRangeTable = $assignedNumberRangeTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAssignedNumberRangeTable()
    {
        $this->assignedNumberRangeTable = null;
        return $this;
    }


}

