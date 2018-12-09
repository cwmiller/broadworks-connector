<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * NSTreatmentMapEntry
 *
 * The NS treatment map entry.
 *
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:17415","type":"sequence"}]
 */
class NSTreatmentMapEntry
{

    /**
     * @ElementName nsTreatment
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:17415
     * @var string|null
     */
    private $nsTreatment = null;

    /**
     * @ElementName treatmentId
     * @Type string
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:17415
     * @var string|null
     */
    private $treatmentId = null;

    /**
     * Getter for nsTreatment
     *
     * @return string
     */
    public function getNsTreatment()
    {
        return $this->nsTreatment instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->nsTreatment;
    }

    /**
     * Setter for nsTreatment
     *
     * @param string $nsTreatment
     * @return $this
     */
    public function setNsTreatment($nsTreatment)
    {
        $this->nsTreatment = $nsTreatment;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNsTreatment()
    {
        $this->nsTreatment = null;
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

