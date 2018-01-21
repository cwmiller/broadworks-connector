<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * Q850CauseMapEntry
 *
 * The Q850 cause map entry.
 */
class Q850CauseMapEntry
{

    /**
     * @ElementName q850CauseValue
     * @var int|null
     */
    private $q850CauseValue = null;

    /**
     * @ElementName treatmentId
     * @var string|null
     */
    private $treatmentId = null;

    /**
     * Getter for q850CauseValue
     *
     * @ElementName q850CauseValue
     * @return int|null
     */
    public function getQ850CauseValue()
    {
        return $this->q850CauseValue;
    }

    /**
     * Setter for q850CauseValue
     *
     * @ElementName q850CauseValue
     * @param int|null $q850CauseValue
     * @return $this
     */
    public function setQ850CauseValue($q850CauseValue)
    {
        $this->q850CauseValue = $q850CauseValue;
        return $this;
    }

    /**
     * Getter for treatmentId
     *
     * @ElementName treatmentId
     * @return string|null
     */
    public function getTreatmentId()
    {
        return $this->treatmentId;
    }

    /**
     * Setter for treatmentId
     *
     * @ElementName treatmentId
     * @param string|null $treatmentId
     * @return $this
     */
    public function setTreatmentId($treatmentId)
    {
        $this->treatmentId = $treatmentId;
        return $this;
    }


}

