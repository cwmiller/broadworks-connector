<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFeatureAccessCodeGetListResponse21
 *
 * Response to the SystemFeatureAccessCodeGetListRequest21.
 *
 *         In release 20 the "Call Recording" FAC name is changed to
 *         "Call Recording - Start".
 *
 * @see SystemFeatureAccessCodeGetListRequest21
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:10183","type":"sequence"}]
 */
class SystemFeatureAccessCodeGetListResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName featureAccessCode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeReadEntry
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:10183
     * @var \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeReadEntry[]
     */
    protected $featureAccessCode = array(
        
    );

    /**
     * Getter for featureAccessCode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeReadEntry[]
     */
    public function getFeatureAccessCode()
    {
        return $this->featureAccessCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->featureAccessCode;
    }

    /**
     * Setter for featureAccessCode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeReadEntry[] $featureAccessCode
     * @return $this
     */
    public function setFeatureAccessCode(array $featureAccessCode)
    {
        $this->featureAccessCode = $featureAccessCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFeatureAccessCode()
    {
        $this->featureAccessCode = null;
        return $this;
    }

    /**
     * Adder for featureAccessCode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeReadEntry $featureAccessCode
     * @return $this
     */
    public function addFeatureAccessCode($featureAccessCode)
    {
        $this->featureAccessCode[] = $featureAccessCode;
        return $this;
    }


}

