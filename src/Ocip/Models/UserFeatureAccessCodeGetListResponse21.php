<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserFeatureAccessCodeGetListResponse21
 *
 * Response to the UserFeatureAccessCodeGetListRequest21. 
 *
 *         In release 20 the "Call Recording" FAC name is changed to 
 *         "Call Recording Start".
 *
 * @see UserFeatureAccessCodeGetListRequest21
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:1797","type":"sequence"}]
 */
class UserFeatureAccessCodeGetListResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName featureAccessCode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeReadEntry
     * @Array
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1797
     * @var \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeReadEntry[]
     */
    protected $featureAccessCode = [
        
    ];

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

