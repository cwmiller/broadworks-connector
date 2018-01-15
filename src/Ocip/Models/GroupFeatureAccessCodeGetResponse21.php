<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFeatureAccessCodeGetResponse21
 *
 * Response to the GroupFeatureAccessCodeGetRequest21. 
 *
 *         In release 20 the "Call Recording" FAC name is changed to 
 *         "Call Recording - Start".
 */
class GroupFeatureAccessCodeGetResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useFeatureAccessCodeLevel
     * @var string|null
     */
    private $useFeatureAccessCodeLevel = null;

    /**
     * @ElementName featureAccessCode
     * @var \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeReadEntry[]
     */
    private $featureAccessCode = array(
        
    );

    /**
     * Getter for useFeatureAccessCodeLevel
     *
     * @ElementName useFeatureAccessCodeLevel
     * @return string|null
     */
    public function getUseFeatureAccessCodeLevel()
    {
        return $this->useFeatureAccessCodeLevel;
    }

    /**
     * Setter for useFeatureAccessCodeLevel
     *
     * @ElementName useFeatureAccessCodeLevel
     * @param string|null $useFeatureAccessCodeLevel
     * @return $this
     */
    public function setUseFeatureAccessCodeLevel($useFeatureAccessCodeLevel)
    {
        $this->useFeatureAccessCodeLevel = $useFeatureAccessCodeLevel;
        return $this;
    }

    /**
     * Getter for featureAccessCode
     *
     * @ElementName featureAccessCode
     * @return \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeReadEntry[]
     */
    public function getFeatureAccessCode()
    {
        return $this->featureAccessCode;
    }

    /**
     * Setter for featureAccessCode
     *
     * @ElementName featureAccessCode
     * @param \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeReadEntry[] $featureAccessCode
     * @return $this
     */
    public function setFeatureAccessCode($featureAccessCode)
    {
        $this->featureAccessCode = $featureAccessCode;
        return $this;
    }

    /**
     * Adder for featureAccessCode
     *
     * @ElementName featureAccessCode
     * @param \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeReadEntry $featureAccessCode
     * @return $this
     */
    public function addFeatureAccessCode($featureAccessCode)
    {
        $this->featureAccessCode []= $featureAccessCode;
        return $this;
    }


}

