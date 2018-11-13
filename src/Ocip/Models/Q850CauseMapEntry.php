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
     * @Type int
     * @var int|null
     */
    private $q850CauseValue = null;

    /**
     * @ElementName treatmentId
     * @Type string
     * @var string|null
     */
    private $treatmentId = null;

    /**
     * Getter for q850CauseValue
     *
     * @return int
     */
    public function getQ850CauseValue()
    {
        return $this->q850CauseValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->q850CauseValue;
    }

    /**
     * Setter for q850CauseValue
     *
     * @param int $q850CauseValue
     * @return $this
     */
    public function setQ850CauseValue($q850CauseValue)
    {
        $this->q850CauseValue = $q850CauseValue;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetQ850CauseValue()
    {
        $this->q850CauseValue = null;
        return $this;
    }

    /**
     * Getter for treatmentId
     *
     * @return string
     */
    public function getTreatmentId()
    {
        return $this->treatmentId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treatmentId;
    }

    /**
     * Setter for treatmentId
     *
     * @param string $treatmentId
     * @return $this
     */
    public function setTreatmentId($treatmentId)
    {
        $this->treatmentId = $treatmentId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTreatmentId()
    {
        $this->treatmentId = null;
        return $this;
    }


}

