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
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:5564","type":"sequence"}]
 */
class GroupFeatureAccessCodeGetResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName useFeatureAccessCodeLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeLevel
     * @Group 4b0e7857796c636464362260a2f8e5ee:5564
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeLevel|null
     */
    protected $useFeatureAccessCodeLevel = null;

    /**
     * @ElementName featureAccessCode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeReadEntry
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:5564
     * @var \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeReadEntry[]
     */
    protected $featureAccessCode = [
        
    ];

    /**
     * Getter for useFeatureAccessCodeLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeLevel
     */
    public function getUseFeatureAccessCodeLevel()
    {
        return $this->useFeatureAccessCodeLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useFeatureAccessCodeLevel;
    }

    /**
     * Setter for useFeatureAccessCodeLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeLevel $useFeatureAccessCodeLevel
     * @return $this
     */
    public function setUseFeatureAccessCodeLevel(\CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeLevel $useFeatureAccessCodeLevel)
    {
        $this->useFeatureAccessCodeLevel = $useFeatureAccessCodeLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseFeatureAccessCodeLevel()
    {
        $this->useFeatureAccessCodeLevel = null;
        return $this;
    }

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

