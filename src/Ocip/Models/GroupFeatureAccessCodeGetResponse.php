<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFeatureAccessCodeGetResponse
 *
 * Response to the GroupFeatureAccessCodeGetRequest.
 *         
 *         Replaced by: GroupFeatureAccessCodeGetResponse21 in AS data mode
 *
 * @see GroupFeatureAccessCodeGetRequest
 * @see GroupFeatureAccessCodeGetResponse21
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:2424","type":"sequence"}]
 */
class GroupFeatureAccessCodeGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useFeatureAccessCodeLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeLevel
     * @Group de4d76f01f337fe4694212ec9f771753:2424
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupFeatureAccessCodeLevel|null
     */
    private $useFeatureAccessCodeLevel = null;

    /**
     * @ElementName featureAccessCode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeEntry
     * @Array
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:2424
     * @var \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeEntry[]
     */
    private $featureAccessCode = array(
        
    );

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeEntry[]
     */
    public function getFeatureAccessCode()
    {
        return $this->featureAccessCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->featureAccessCode;
    }

    /**
     * Setter for featureAccessCode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeEntry[] $featureAccessCode
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\FeatureAccessCodeEntry $featureAccessCode
     * @return $this
     */
    public function addFeatureAccessCode($featureAccessCode)
    {
        $this->featureAccessCode[] = $featureAccessCode;
        return $this;
    }


}

