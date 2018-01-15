<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDialableCallerIDGetResponse
 *
 * Response to the ServiceProviderDialableCallerIDGetRequest.
 *         The criteria table?s column headings are ?Active?, "Name",
 * "Description", ?Prefix Digits?, and ?Priority?.
 */
class ServiceProviderDialableCallerIDGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useServiceProviderCriteria
     * @var bool|null
     */
    private $useServiceProviderCriteria = null;

    /**
     * @ElementName nsScreeningFailurePolicy
     * @var string|null
     */
    private $nsScreeningFailurePolicy = null;

    /**
     * @ElementName criteriaTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $criteriaTable = null;

    /**
     * Getter for useServiceProviderCriteria
     *
     * @ElementName useServiceProviderCriteria
     * @return bool|null
     */
    public function getUseServiceProviderCriteria()
    {
        return $this->useServiceProviderCriteria;
    }

    /**
     * Setter for useServiceProviderCriteria
     *
     * @ElementName useServiceProviderCriteria
     * @param bool|null $useServiceProviderCriteria
     * @return $this
     */
    public function setUseServiceProviderCriteria($useServiceProviderCriteria)
    {
        $this->useServiceProviderCriteria = $useServiceProviderCriteria;
        return $this;
    }

    /**
     * Getter for nsScreeningFailurePolicy
     *
     * @ElementName nsScreeningFailurePolicy
     * @return string|null
     */
    public function getNsScreeningFailurePolicy()
    {
        return $this->nsScreeningFailurePolicy;
    }

    /**
     * Setter for nsScreeningFailurePolicy
     *
     * @ElementName nsScreeningFailurePolicy
     * @param string|null $nsScreeningFailurePolicy
     * @return $this
     */
    public function setNsScreeningFailurePolicy($nsScreeningFailurePolicy)
    {
        $this->nsScreeningFailurePolicy = $nsScreeningFailurePolicy;
        return $this;
    }

    /**
     * Getter for criteriaTable
     *
     * @ElementName criteriaTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getCriteriaTable()
    {
        return $this->criteriaTable;
    }

    /**
     * Setter for criteriaTable
     *
     * @ElementName criteriaTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $criteriaTable
     * @return $this
     */
    public function setCriteriaTable($criteriaTable)
    {
        $this->criteriaTable = $criteriaTable;
        return $this;
    }


}

