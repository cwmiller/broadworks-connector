<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFeatureAccessCodeGetResponse21
 *
 * Response to the GroupFeatureAccessCodeGetRequest21. 
 *
 *         In release 20 the "Call Recording" FAC name is changed to 
 *         "Call Recording - Start".
 *
 * @see GroupFeatureAccessCodeGetRequest21
 */
class GroupFeatureAccessCodeGetResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useFeatureAccessCodeLevel
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeLevel|null
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeLevel|null
     */
    public function getUseFeatureAccessCodeLevel()
    {
        return $this->useFeatureAccessCodeLevel;
    }

    /**
     * Setter for useFeatureAccessCodeLevel
     *
     * @ElementName useFeatureAccessCodeLevel
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeLevel|null $useFeatureAccessCodeLevel
     * @return $this
     */
    public function setUseFeatureAccessCodeLevel(\CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeLevel $useFeatureAccessCodeLevel)
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
    public function setFeatureAccessCode(array $featureAccessCode)
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

