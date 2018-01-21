<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * NSTreatmentMapEntry
 *
 * The NS treatment map entry.
 */
class NSTreatmentMapEntry
{

    /**
     * @ElementName nsTreatment
     * @var string|null
     */
    private $nsTreatment = null;

    /**
     * @ElementName treatmentId
     * @var string|null
     */
    private $treatmentId = null;

    /**
     * Getter for nsTreatment
     *
     * @ElementName nsTreatment
     * @return string|null
     */
    public function getNsTreatment()
    {
        return $this->nsTreatment;
    }

    /**
     * Setter for nsTreatment
     *
     * @ElementName nsTreatment
     * @param string|null $nsTreatment
     * @return $this
     */
    public function setNsTreatment($nsTreatment)
    {
        $this->nsTreatment = $nsTreatment;
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

